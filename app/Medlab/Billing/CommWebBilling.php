<?php

namespace App\Medlab\Billing;

use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;

class CommWebBilling implements BillingInterface
{
    protected $testingMode = true;
    protected $vpc_version = 1;
    protected $vpc_Locale = 'en';
    protected $vpc_gateway = 'ssl';
    protected $vpc_Merchant;
    protected $vpc_AccessCode;
    protected $vpc_ReturnURL;
    protected $secure_hash_secret;  // Remember to change this periodically as per requested by the best practice guide
    protected $vpc_url;

    public function __construct()
    {
        $this->secure_hash_secret = Config::get('services.commweb.secure-hash-secret');
        $this->vpc_url = Config::get('services.commweb.vpc-url') . "?";
        $this->vpc_Merchant = Config::get('services.commweb.merchant-id');
        $this->vpc_AccessCode = Config::get('services.commweb.merchant-access-code');
        $this->vpc_ReturnURL = url('/shoppingcart/digitalreceipt');
    }

    public function processOrder($request)
    {
        $receipt = $this->retrieveReceiptItems($request);

        $order = Order::findOrFail($receipt['orderInfo']);
        $order->order_status = 'Order Received';
        $order->payment_type = $receipt['cardType'];
        $order->purchase_date = Carbon::now();
        $order->transaction_id = $receipt['transactionNo'];
        $order->transaction_status = 'Complete';
        $order->receipt_no = $receipt['receiptNo'];
        $order->authorize_id = $receipt['authorizeID'];
        $order->save();

        return $order;
    }

    public function getClientToken()
    {
        return 'NA';
    }

    public function orderAlreadyHasMerchTxnRef($request)
    {
        $order = Order::findOrFail($request['order']);

        if (empty($order->merch_txn_ref)) return false;

        return true;
    }

    public function createBillingRequest($request)
    {
        $order = Order::findOrFail($request['order']);
        $user = $order->user;

        if ($this->testingMode) {

            $isTestValue =
                ($order->subtotal == 1.00) ||
                ($order->subtotal == 1.10) ||
                ($order->subtotal == 1.05) ||
                ($order->subtotal == 1.68) ||
                ($order->subtotal == 1.54) ||
                ($order->subtotal == 1.51) ||
                ($order->subtotal == 1.01);

            $amount = ($isTestValue) ? $order->subtotal * 100 : 100;
        }
        else {
            $amount = $order->grand_total * 100;
        }

        $billingRequest = [
            'vpc_Version' => $this->vpc_version,
            'vpc_Command' => 'pay',
            'vpc_Amount' => $amount,
            'vpc_MerchTxnRef' => $user->id . '-' . $order->id . '-' . Carbon::now()->format('d-m-Y-H-i-s'),
            'vpc_OrderInfo' => $order->id,
            'vpc_Locale' => $this->vpc_Locale,
            'vpc_gateway' => $this->vpc_gateway,
            'vpc_Desc' => 'MEDLAB PTY LTD - Payment',
            'vpc_Merchant' => $this->vpc_Merchant,
            'vpc_AccessCode' => $this->vpc_AccessCode,
            'vpc_ReturnURL' => $this->vpc_ReturnURL
        ];

        $order->transaction_ip = $request['ip'];
        $order->transaction_status = 'Incomplete';
        $order->merch_txn_ref = $billingRequest['vpc_MerchTxnRef'];
        $order->save();

        return $billingRequest;
    }

    public function generateBillingUrl($paymentRequest)
    {
        $md5HashData = $this->secure_hash_secret;
        ksort($paymentRequest);

        $appendAmp = 0;
        foreach($paymentRequest as $key => $value) {

            // create the md5 input and URL leaving out any fields that have no value
            if (strlen($value) > 0) {

                // this ensures the first parameter of the URL is preceded by the '?' char
                if ($appendAmp == 0) {
                    $this->vpc_url .= urlencode($key) . '=' . urlencode($value);
                    $appendAmp = 1;
                } else {
                    $this->vpc_url .= '&' . urlencode($key) . "=" . urlencode($value);
                }

                $md5HashData .= $value;
            }
        }

        $this->vpc_url .= "&vpc_SecureHash=" . strtoupper(md5($md5HashData));

        return $this->vpc_url;
    }

    public function validateSecureHash($receiptSecureHash, $receiptContents)
    {
        $md5HashData = $this->secure_hash_secret;

        // sort all the incoming vpc response fields and leave out any with no value
        foreach($receiptContents as $key => $value) {
            if ($key != "vpc_Secure_Hash" or strlen($value) > 0) {
                $md5HashData .= $value;
            }
        }

        if (strtoupper($receiptSecureHash) == strtoupper(md5($md5HashData))) {
            return true;
        }

        return false;
    }

    public function validateOrderReceipt($request)
    {
        $errorMessages = [];

        $order = Order::find($request['vpc_OrderInfo']);
        $vpc_TxnResponseCode = $request['vpc_TxnResponseCode'];
        $vpc_MerchTxnRef = $request['vpc_MerchTxnRef'];
        $vpc_Amount = $request['vpc_Amount'];

        if (empty($order)) {
            $errorMessages[] = 'Could not find the Order in the Receipt';
            return $errorMessages;
        }

        if ($order->transaction_status == 'Complete' || $order->transaction_status != 'Incomplete') {
            $error = 'The Order in the Receipt has already being processed';
            $errorMessages[] = $error;
            return $errorMessages;
        }

        if ($order->merch_txn_ref != $vpc_MerchTxnRef) {
            $error = 'Merchant Transaction Reference Mismatch';
            $errorMessages[] = $this->processError($order, $error);
            return $errorMessages;
        }

        if ( (!$this->testingMode) && (($order->grand_total * 100) != $vpc_Amount) ) {
            $error = 'The Amount in the Receipt does not match the Amount in the Order';
            $errorMessages[] = $this->processError($order, $error);
            return $errorMessages;
        }

        if ($vpc_TxnResponseCode != '0') {
            $error = $this->getQSIResponseCodeDescription($vpc_TxnResponseCode);
            $errorMessages[] = $this->processError($order, $error);
            return $errorMessages;
        }

        return $errorMessages;
    }

    private function processError($order, $errorMessage)
    {
        if ($order->transaction_status == 'Incomplete') {
            $order->transaction_status = $errorMessage;
            $order->save();
            return $errorMessage;
        }

        return $errorMessage;
    }

    private function retrieveReceiptItems($request)
    {
        $receipt['amount']          = $this->null2unknown($request["vpc_Amount"]);
        $receipt['locale']          = $this->null2unknown($request["vpc_Locale"]);
        $receipt['command']         = $this->null2unknown($request["vpc_Command"]);
        $receipt['message']         = $this->null2unknown($request["vpc_Message"]);
        $receipt['version']         = $this->null2unknown($request["vpc_Version"]);
        $receipt['orderInfo']       = $this->null2unknown($request["vpc_OrderInfo"]);
        $receipt['merchantID']      = $this->null2unknown($request["vpc_Merchant"]);
        $receipt['txnResponseCode'] = $this->null2unknown($request["vpc_TxnResponseCode"]);

        $receipt['batchNo']         = $request->has("vpc_BatchNo")          ? $request["vpc_BatchNo"]          : "No Value Returned";
        $receipt['cardType']        = $request->has("vpc_Card")             ? $request["vpc_Card"]             : "No Value Returned";
        $receipt['receiptNo']       = $request->has("vpc_ReceiptNo")        ? $request["vpc_ReceiptNo"]        : "No Value Returned";
        $receipt['authorizeID']     = $request->has("vpc_AuthorizeId")      ? $request["vpc_AuthorizeId"]      : "No Value Returned";
        $receipt['merchTxnRef']     = $request->has("vpc_MerchTxnRef")      ? $request["vpc_MerchTxnRef"]      : "No Value Returned";
        $receipt['transactionNo']   = $request->has("vpc_TransactionNo")    ? $request["vpc_TransactionNo"]    : "No Value Returned";
        $receipt['acqResponseCode'] = $request->has("vpc_AcqResponseCode")  ? $request["vpc_AcqResponseCode"]  : "No Value Returned";

        // CSC Receipt Data
        $receipt['cscResultCode']   = $request->has("vpc_CSCResultCode")    ? $request["vpc_CSCResultCode"]    : "No Value Returned";
        $receipt['cscACQRespCode']  = $request->has("vpc_AcqCSCRespCode")   ? $request["vpc_AcqCSCRespCode"]   : "No Value Returned";

        // AVS Receipt Data
        $receipt['avs_City']        = $request->has("vpc_AVS_City")         ? $request["vpc_AVS_City"]         : "No Value Returned";
        $receipt['avs_Country']     = $request->has("vpc_AVS_Country")      ? $request["vpc_AVS_Country"]      : "No Value Returned";
        $receipt['avs_Street01']    = $request->has("vpc_AVS_Street01")     ? $request["vpc_AVS_Street01"]     : "No Value Returned";
        $receipt['avs_PostCode']    = $request->has("vpc_AVS_PostCode")     ? $request["vpc_AVS_PostCode"]     : "No Value Returned";
        $receipt['avs_StateProv']   = $request->has("vpc_AVS_StateProv")    ? $request["vpc_AVS_StateProv"]    : "No Value Returned";
        $receipt['avsRequestCode']  = $request->has("vpc_AVSRequestCode")   ? $request["vpc_AVSRequestCode"]   : "No Value Returned";
        $receipt['avsResultCode']   = $request->has("vpc_AVSResultCode")    ? $request["vpc_AVSResultCode"]    : "No Value Returned";
        $receipt['vACQAVSRespCode'] = $request->has("vpc_AcqAVSRespCode")   ? $request["vpc_AcqAVSRespCode"]   : "No Value Returned";

        // 3-D Secure Data
        $receipt['verType']         = $request->has("vpc_VerType")          ? $request["vpc_VerType"]          : "No Value Returned";
        $receipt['verStatus']       = $request->has("vpc_VerStatus")        ? $request["vpc_VerStatus"]        : "No Value Returned";
        $receipt['token']           = $request->has("vpc_VerToken")         ? $request["vpc_VerToken"]         : "No Value Returned";
        $receipt['verSecurLevel']   = $request->has("vpc_VerSecurityLevel") ? $request["vpc_VerSecurityLevel"] : "No Value Returned";
        $receipt['enrolled']        = $request->has("vpc_3DSenrolled")      ? $request["vpc_3DSenrolled"]      : "No Value Returned";
        $receipt['xid']             = $request->has("vpc_3DSXID")           ? $request["vpc_3DSXID"]           : "No Value Returned";
        $receipt['acqECI']          = $request->has("vpc_3DSECI")           ? $request["vpc_3DSECI"]           : "No Value Returned";
        $receipt['authStatus']      = $request->has("vpc_3DSstatus")        ? $request["vpc_3DSstatus"]        : "No Value Returned";

        return $receipt;
    }

    private function null2unknown($data)
    {
        if ($data == "") {
            return "No Value Returned";
        } else {
            return $data;
        }
    }

    // txnResponseCode as per described by the current documentations
    private function getQSIResponseCodeDescription($responseCode)
    {
        switch ($responseCode) {
            case "0" : $result = "Transaction Approved"; break;
            case "1" : $result = "Transaction could not be processed"; break;
            case "2" : $result = "Transaction Declined. Contact Issuing Bank"; break;
            case "3" : $result = "No Reply from Bank Processing Host"; break;
            case "4" : $result = "Card has Expired"; break;
            case "5" : $result = "Insufficient Credit"; break;
            case "6" : $result = "Transaction not processed - bank system error"; break;
            case "7" : $result = "Transaction not processed - system error"; break;
            case "B" : $result = "Transaction Declined. BIN blocked"; break;
            case "U" : $result = "Transaction auto-declined due to unacceptable CSC value."; break;
            case "E" : $result = "Transaction Declined. Contact issuing bank"; break;
            default  : $result = "Unable to be determined";
        }
        return $result;
    }

    // txnResponseCode from example
    private function getResponseDescription($responseCode)
    {
        switch ($responseCode) {
            case "0" : $result = "Transaction Successful"; break;
            case "?" : $result = "Transaction status is unknown"; break;
            case "1" : $result = "Unknown Error"; break;
            case "2" : $result = "Bank Declined Transaction"; break;
            case "3" : $result = "No Reply from Bank"; break;
            case "4" : $result = "Expired Card"; break;
            case "5" : $result = "Insufficient funds"; break;
            case "6" : $result = "Error Communicating with Bank"; break;
            case "7" : $result = "Payment Server System Error"; break;
            case "8" : $result = "Transaction Type Not Supported"; break;
            case "9" : $result = "Bank declined transaction (Do not contact Bank)"; break;
            case "A" : $result = "Transaction Aborted"; break;
            case "C" : $result = "Transaction Cancelled"; break;
            case "D" : $result = "Deferred transaction has been received and is awaiting processing"; break;
            case "F" : $result = "3D Secure Authentication failed"; break;
            case "I" : $result = "Card Security Code verification failed"; break;
            case "L" : $result = "Shopping Transaction Locked (Please try the transaction again later)"; break;
            case "N" : $result = "Cardholder is not enrolled in Authentication scheme"; break;
            case "P" : $result = "Transaction has been received by the Payment Adaptor and is being processed"; break;
            case "R" : $result = "Transaction was not processed - Reached limit of retry attempts allowed"; break;
            case "S" : $result = "Duplicate SessionID (OrderInfo)"; break;
            case "T" : $result = "Address Verification Failed"; break;
            case "U" : $result = "Card Security Code Failed"; break;
            case "V" : $result = "Address Verification and Card Security Code Failed"; break;
            default  : $result = "Unable to be determined";
        }
        return $result;
    }

    // avsResultCode from example
    private function displayAVSResponse($avsResultCode)
    {
        if ($avsResultCode != "") {
            switch ($avsResultCode) {
                Case "Unsupported" : $result = "AVS not supported or there was no AVS data provided"; break;
                Case "X"  : $result = "Exact match - address and 9 digit ZIP/postal code"; break;
                Case "Y"  : $result = "Exact match - address and 5 digit ZIP/postal code"; break;
                Case "S"  : $result = "Service not supported or address not verified (international transaction)"; break;
                Case "G"  : $result = "Issuer does not participate in AVS (international transaction)"; break;
                Case "A"  : $result = "Address match only"; break;
                Case "W"  : $result = "9 digit ZIP/postal code matched, Address not Matched"; break;
                Case "Z"  : $result = "5 digit ZIP/postal code matched, Address not Matched"; break;
                Case "R"  : $result = "Issuer system is unavailable"; break;
                Case "U"  : $result = "Address unavailable or not verified"; break;
                Case "E"  : $result = "Address and ZIP/postal code not provided"; break;
                Case "N"  : $result = "Address and ZIP/postal code not matched"; break;
                Case "0"  : $result = "AVS not requested"; break;
                default   : $result = "Unable to be determined";
            }
        } else {
            $result = "null response";
        }
        return $result;
    }

    // cscResultCode from example
    private function displayCSCResponse($cscResultCode)
    {
        if ($cscResultCode != "") {
            switch ($cscResultCode) {
                Case "Unsupported" : $result = "CSC not supported or there was no CSC data provided"; break;
                Case "M"  : $result = "Exact code match"; break;
                Case "S"  : $result = "Merchant has indicated that CSC is not present on the card (MOTO situation)"; break;
                Case "P"  : $result = "Code not processed"; break;
                Case "U"  : $result = "Card issuer is not registered and/or certified"; break;
                Case "N"  : $result = "Code invalid or not matched"; break;
                default   : $result = "Unable to be determined"; break;
            }
        } else {
            $result = "null response";
        }
        return $result;
    }

    // 3-D Secure Data verStatus from example
    private function getStatusDescription($statusResponse)
    {
        if ($statusResponse == "" || $statusResponse == "No Value Returned") {
            $result = "3DS not supported or there was no 3DS data provided";
        } else {
            switch ($statusResponse) {
                Case "Y"  : $result = "The cardholder was successfully authenticated."; break;
                Case "E"  : $result = "The cardholder is not enrolled."; break;
                Case "N"  : $result = "The cardholder was not verified."; break;
                Case "U"  : $result = "The cardholder's Issuer was unable to authenticate due to some system error at the Issuer."; break;
                Case "F"  : $result = "There was an error in the format of the request from the merchant."; break;
                Case "A"  : $result = "Authentication of your Merchant ID and Password to the ACS Directory Failed."; break;
                Case "D"  : $result = "Error communicating with the Directory Server."; break;
                Case "C"  : $result = "The card type is not supported for authentication."; break;
                Case "S"  : $result = "The signature on the response received from the Issuer could not be validated."; break;
                Case "P"  : $result = "Error parsing input from Issuer."; break;
                Case "I"  : $result = "Internal Payment Server system error."; break;
                default   : $result = "Unable to be determined"; break;
            }
        }
        return $result;
    }
}