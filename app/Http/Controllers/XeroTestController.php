<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class XeroTestController extends Controller
{
    public function index()
    {
        $xero = App::make('XeroOAuth');

        $initialCheck = $xero->diagnostics();
        $checkErrors = count($initialCheck);

        if ($checkErrors > 0)
        {
            foreach ($initialCheck as $check) {
                echo 'Error: ' . $check . PHP_EOL;
            }
        }
        else
        {
            $xero->config ['access_token'] = $xero->config ['consumer_key'];
            $xero->config ['access_token_secret'] = $xero->config ['shared_secret'];

            $response = $xero->request('GET', $xero->url('Invoices', 'core'));

            if ($xero->response['code'] == 200)
            {
                $invoices = $xero->parseResponse($xero->response['response'], $xero->response['format']);

                foreach ($invoices as $invoice) {

                    var_dump($invoice);
                }
            }
            else {

                $this->outputError($xero);
            }
        }

    }


    private function outputError($XeroOAuth)
    {
        echo 'Error: ' . $XeroOAuth->response['response'] . PHP_EOL;
        $this->pr($XeroOAuth);
    }

    /**
     * Debug function for printing the content of an object
     *
     * @param mixes $obj
     */
    private function pr($obj)
    {

        if (!$this->is_cli())
            echo '<pre style="word-wrap: break-word">';
        if (is_object($obj))
            print_r($obj);
        elseif (is_array($obj))
            print_r($obj);
        else
            echo $obj;
        if (!$this->is_cli())
            echo '</pre>';
    }

    private function is_cli()
    {
        return (PHP_SAPI == 'cli' && empty($_SERVER['REMOTE_ADDR']));
    }
}
