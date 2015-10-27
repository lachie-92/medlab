<?php
namespace App\Medlab\Repositories;


use App\Company;
use App\Company_Address;
use App\Customer;
use App\Customer_Address;
use App\Customer_Email;
use App\Customer_Number;
use App\Order;
use App\Patient;
use App\Patient_Registration;
use App\Practitioner;
use App\Practitioner_Registration;
use App\User;
use Carbon\Carbon;

class AdminRepository implements AdminRepositoryInterface
{
    //
    // Admin Registration Management
    //
    /**
     * Get Unapproved Patient Registration List
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getUnapprovedPatientRegistrationList()
    {
        $unapprovedPatientRegistrationList = Patient_Registration::whereNull('approval')->get();

        return $unapprovedPatientRegistrationList;
    }

    /**
     * Get Approved Patient Registration List
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getApprovedPatientRegistrationList()
    {
        $ApprovedPatientRegistrationList = Patient_Registration::whereNotNull('approval')->get();

        return $ApprovedPatientRegistrationList;
    }

    /**
     * Get Soft Deleted Patient Registration List
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDeletedPatientRegistrationList()
    {
        $deletedPatientRegistrationList = Patient_Registration::onlyTrashed()->get();

        return $deletedPatientRegistrationList;
    }

    /**
     * Get Unapproved Practitioner Registration List
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getUnapprovedPractitionerRegistrationList()
    {
        $unapprovedPractitionerRegistrationList = Practitioner_Registration::whereNull('approval')->get();

        return $unapprovedPractitionerRegistrationList;
    }

    /**
     * Get Approved Practitioner Registration List
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getApprovedPractitionerRegistrationList()
    {
        $ApprovedPractitionerRegistrationList = Practitioner_Registration::whereNotNull('approval')->get();

        return $ApprovedPractitionerRegistrationList;
    }

    /**
     * Get Soft Deleted Practitioner Registratin List
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDeletedPractitionerRegistrationList()
    {
        $deletedPractitionerRegistrationList = Practitioner_Registration::onlyTrashed()->get();

        return $deletedPractitionerRegistrationList;
    }

    /**
     * Get the Associated Practitioner for thd Patient Registration
     *
     * @param $registration
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPractitionerFromPatientRegistration($registration)
    {
        $practitioner = Practitioner::find($registration->practitioner_id);

        return $practitioner;
    }

    /**
     * Get the Associated Company for the Practitioner Registration
     *
     * @param $registration
     * @return \App\Company
     */
    public function getCompanyFromPractitionerRegistration($registration)
    {
        $company = Company::find($registration->company_id);

        return $company;
    }

    /**
     * Soft Delete the given Registration
     *
     * @param $registration
     * @return array
     */
    public function deleteRegistration($registration)
    {
        $result = [
            'success' => false,
            'message' => ''
        ];

        if ($registration->approval != null) {
            $result['message'] = 'Cannot Delete Approved Registration';
            return $result;
        }

        if ($registration->deleted_at != null) {
            $result['message'] = 'Registration has already been deleted';
            return $result;
        }

        $registration->delete();
        $result['success'] = true;
        $result['message'] = 'Registration has been deleted';

        return $result;
    }

    /**
     * Restore the given Registration
     *
     * @param $registration
     * @return array
     */
    public function restoreRegistration($registration)
    {
        $result = [
            'success' => false,
            'message' => ''
        ];

        if ($registration->deleted_at == null) {
            $result['message'] = 'Registration has already been restored';
            return $result;
        }

        $registration->restore();
        $result['success'] = true;
        $result['message'] = 'Registration has been restored';

        return $result;
    }

    /**
     * Create Patient Account with the given Patient Registration
     *
     * @param $request
     * @param $registration
     */
    public function createPatientAccount($request, $registration)
    {
        // Update the Registration entry
        $registration = $this->updatePatientRegistration($request, $registration);

        // Create the customer
        $customer = $this->createCustomer($registration);
        $customerAddress = $this->createCustomerAddress($registration, $customer);
        $customerEmail = $this->createCustomerEmail($registration, $customer);
        $customerTelephone = $this->createCustomerTelephone($registration, $customer);
        $customerMobile = $this->createCustomerMobile($registration, $customer);

        $customer->main_address_id = $customerAddress->id;
        $customer->registration_email_id = $customerEmail->id;
        $customer->save();

        // Create the user and patient
        $newUser = $this->createUser($registration, $customer, 'Patient');
        $newPatient = $this->createPatient($registration, $newUser);
    }

    /**
     * Create Practitioner Account with the given Practitioner Registration
     *
     * @param $request
     * @param $registration
     */
    public function createPractitionerAccount($request, $registration)
    {
        // Update the Registration entry
        if ($request != null) {
            $registration = $this->updatePractitionerRegistration($request, $registration);
        }

        // Create the customer
        $customer = $this->createCustomer($registration);
        $customerAddress = $this->createCustomerAddress($registration, $customer);
        $customerEmail = $this->createCustomerEmail($registration, $customer);
        $customerTelephone = $this->createCustomerTelephone($registration, $customer);
        $customerMobile = $this->createCustomerMobile($registration, $customer);

        $customer->main_address_id = $customerAddress->id;
        $customer->registration_email_id = $customerEmail->id;
        $customer->save();

        // Create the user and practitioner
        $newUser = $this->createUser($registration, $customer, 'Practitioner');
        $newPractitioner = $this->createPractitioner($registration, $newUser);
    }

    /**
     * Create a Practitioner Registration
     *
     * @param $request
     * @return Practitioner_Registration
     */
    public function createPractitionerRegistration($request)
    {
        $company = Company::findOrFail($request->company_id);
        $companyMainAddress = $company->company_addresses->where('type', 'Main Address')->first();

        $registration = new Practitioner_Registration();
        $registration->title = $request->title;
        $registration->email = $request->email;
        $registration->first_name = $request->first_name;
        $registration->last_name = $request->last_name;
        $registration->company_id = $request->company_id;
        $registration->provider_number = $request->provider_number;
        $registration->street = $companyMainAddress->street;
        $registration->suburb = $companyMainAddress->suburb;
        $registration->city = $companyMainAddress->city;
        $registration->state = $companyMainAddress->state;
        $registration->country = $companyMainAddress->country;
        $registration->postcode = $companyMainAddress->postcode;
        $registration->telephone = $request->telephone;
        $registration->mobile_phone = $request->mobile_phone;
        $registration->clinic_name = $company->name;
        $registration->business_type = $company->business_type;
        $registration->business_number = $company->business_number;
        $registration->password = bcrypt($request->password);
        $registration->approval = Carbon::now();
        $registration->save();

        return $registration;
    }

    /**
     * Create a Company
     *
     * @param $request
     */
    public function createCompany($request)
    {
        $company = new Company();

        $company->name = $request->company_name;
        $company->business_type = $request->company_type;
        $company->business_number = $request->company_business_number;
        $company->country = $request->company_country;
        $company->save();

        $companyAddress = new Company_Address();
        $companyAddress->type = 'Main Address';
        $companyAddress->address = $request->company_street . ' ' . $request->company_suburb;
        $companyAddress->street = $request->company_street;
        $companyAddress->suburb = $request->company_suburb;
        $companyAddress->postcode = $request->company_postcode;
        $companyAddress->city = $request->company_city;
        $companyAddress->state = $request->company_state;
        $companyAddress->country = $request->company_country;
        $companyAddress->company_id = $company->id;
        $companyAddress->save();

        $company->main_address_id = $companyAddress->id;
        $company->save();
    }

    /**
     * Update the given Patient Registration
     *
     * @param $request
     * @param $registration
     * @return \App\Patient_Registration
     */
    public function updatePatientRegistration($request, $registration)
    {
        $practitioner = Practitioner::findOrFail($request->practitioner_id);
        $companyMainAddress = $practitioner->company->company_addresses->where('type', 'Main Address')->first();

        $registration->title = $request->title;
        $registration->email = $request->email;
        $registration->first_name = $request->first_name;
        $registration->last_name = $request->last_name;
        $registration->street = $request->street_address_one;
        $registration->suburb = $request->street_address_two;
        $registration->city = $request->city;
        $registration->state = $request->state;
        $registration->country = $request->country;
        $registration->postcode = $request->postcode;
        $registration->telephone = $request->telephone;
        $registration->mobile_phone = $request->mobile_phone;
        $registration->practitioner_id = $request->practitioner_id;
        $registration->practitioner_not_found = false;
        $registration->practitioner_name = $practitioner->user->customer->name;
        $registration->practitioner_clinic = $practitioner->company->name;
        $registration->practitioner_city = $companyMainAddress->city;
        $registration->practitioner_state = $companyMainAddress->state;
        $registration->practitioner_country = $companyMainAddress->country;
        $registration->practitioner_postcode = $companyMainAddress->postcode;
        $registration->approval = Carbon::now();

        if ($request->has('change_password') && $request->change_password) {
            $registration->password = bcrypt($request->password);
        }

        $registration->save();

        return $registration;
    }

    /**
     * Update the given Practitioner Registration
     *
     * @param $request
     * @param $registration
     * @return \App\Practitioner_Registration
     */
    public function updatePractitionerRegistration($request, $registration)
    {
        $company = Company::findOrFail($request->company_id);
        $companyMainAddress = $company->company_addresses->where('type', 'Main Address')->first();

        $registration->title = $request->title;
        $registration->email = $request->email;
        $registration->first_name = $request->first_name;
        $registration->last_name = $request->last_name;
        $registration->company_id = $request->company_id;
        $registration->provider_number = $request->provider_number;
        $registration->street = $companyMainAddress->street;
        $registration->suburb = $companyMainAddress->suburb;
        $registration->city = $companyMainAddress->city;
        $registration->state = $companyMainAddress->state;
        $registration->country = $companyMainAddress->country;
        $registration->postcode = $companyMainAddress->postcode;
        $registration->telephone = $request->telephone;
        $registration->mobile_phone = $request->mobile_phone;
        $registration->clinic_name = $company->name;
        $registration->business_type = $company->business_type;
        $registration->business_number = $company->business_number;

        $registration->approval = Carbon::now();

        if ($request->has('change_password') && $request->change_password) {
            $registration->password = bcrypt($request->password);
        }

        $registration->save();

        return $registration;
    }

    /**
     * Create a Customer with the given Registration
     *
     * @param $registration
     * @return Customer
     */
    public function createCustomer($registration)
    {
        $customer = new Customer();
        $customer->title = $registration->title;
        $customer->name = $registration->first_name . " " . $registration->last_name;
        $customer->first_name = $registration->first_name;
        $customer->last_name = $registration->last_name;
        $customer->country = $registration->country;
        $customer->save();

        return $customer;
    }

    /**
     * Create a Main Customer_Address with the given Registration
     *
     * @param $registration
     * @param $customer
     * @return Customer_Address
     */
    public function createCustomerAddress($registration, $customer)
    {
        $customerAddress = new Customer_Address();
        $customerAddress->type = 'Main Address';
        $customerAddress->address = $registration->street . " " . $registration->suburb;
        $customerAddress->street = $registration->street;
        $customerAddress->suburb = $registration->suburb;
        $customerAddress->postcode = $registration->postcode;
        $customerAddress->city = $registration->city;
        $customerAddress->state = $registration->state;
        $customerAddress->country = $registration->country;
        $customerAddress->customer_id = $customer->id;
        $customerAddress->save();

        return $customerAddress;
    }

    /**
     * Create a Main Customer_Email with the given Registration
     *
     * @param $registration
     * @param $customer
     * @return Customer_Email
     */
    public function createCustomerEmail($registration, $customer)
    {
        $customerEmail = new Customer_Email();
        $customerEmail->type = 'Main Email';
        $customerEmail->email_address = $registration->email;
        $customerEmail->customer_id = $customer->id;
        $customerEmail->save();

        return $customerEmail;
    }

    /**
     * Create a Main Customer_Number with the given Registration
     *
     * @param $registration
     * @param $customer
     * @return Customer_Number
     */
    public function createCustomerTelephone($registration, $customer)
    {
        $customerTelephone = new Customer_Number();
        $customerTelephone->type = 'Main Number';
        $customerTelephone->number = $registration->telephone;
        $customerTelephone->customer_id = $customer->id;
        $customerTelephone->save();

        return $customerTelephone;
    }

    /**
     * Create a Main Mobile Customer_Number with the given Registration
     *
     * @param $registration
     * @param $customer
     * @return Customer_Number
     */
    public function createCustomerMobile($registration, $customer)
    {
        $customerMobile = new Customer_Number();
        $customerMobile->type = 'Main Mobile Number';
        $customerMobile->number = $registration->mobile_phone;
        $customerMobile->customer_id = $customer->id;
        $customerMobile->save();

        return $customerMobile;
    }

    /**
     * Create a User with the given Registration
     *
     * @param $registration
     * @param $customer
     * @param $userGroup
     * @return User
     */
    public function createUser($registration, $customer, $userGroup)
    {
        $newUser = new User();
        $newUser->email = $registration->email;
        $newUser->password = $registration->password;
        $newUser->newsletter_subscription = false;
        $newUser->group = $userGroup;
        $newUser->approval_status = 'approved';
        $newUser->activated = true;
        $newUser->timezone = $registration->country;
        $newUser->customer_id = $customer->id;
        $newUser->save();

        return $newUser;
    }

    /**
     * Create a Patient with the given Registration
     *
     * @param $registration
     * @param $newUser
     * @return Patient
     */
    public function createPatient($registration, $newUser)
    {
        $newPatient = new Patient();
        $newPatient->user_id = $newUser->id;
        $newPatient->practitioner_id = $registration->practitioner_id;
        $newPatient->save();

        return $newPatient;
    }

    /**
     * Create a Practitioner with the given Registration
     *
     * @param $registration
     * @param $newUser
     * @return Practitioner
     */
    public function createPractitioner($registration, $newUser)
    {
        $newPractitioner = new Practitioner();
        $newPractitioner->user_id = $newUser->id;
        $newPractitioner->practitioner_license = $registration->provider_number;
        $newPractitioner->company_id = $registration->company_id;
        $newPractitioner->save();

        return $newPractitioner;
    }

    //
    // Admin Order Management
    //
    /**
     * Get the list of Orders with Order Received order status
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getNewOrderList()
    {
        $newOrderList = Order::orderBy('created_at', 'desc')->
        searchReceivedOrders()->get();

        return $newOrderList;
    }

    /**
     * Get a list of all the Orders
     *
     * @param $itemsPerPage
     * @return array
     */
    public function getOrderCollection($itemsPerPage)
    {
        $orderReceived = Order::orderBy('created_at', 'desc')->searchReceivedOrders()->paginate($itemsPerPage, ['*'], 'received');
        $orderReceived->setPath('/account/admin-orders/received');

        $orderCanceled = Order::orderBy('created_at', 'desc')->searchCanceledOrders()->paginate($itemsPerPage, ['*'], 'canceled');
        $orderCanceled->setPath('/account/admin-orders/canceled');

        $orderDispatched = Order::orderBy('created_at', 'desc')->searchDispatchedOrders()->paginate($itemsPerPage, ['*'], 'dispatched');
        $orderDispatched->setPath('/account/admin-orders/dispatched');

        $orderOnHold = Order::orderBy('created_at', 'desc')->searchOnHoldOrders()->paginate($itemsPerPage, ['*'], 'on-hold');
        $orderOnHold->setPath('/account/admin-orders/on-hold');

        $orderCollection['received'] = $orderReceived;
        $orderCollection['canceled'] = $orderCanceled;
        $orderCollection['dispatched'] = $orderDispatched;
        $orderCollection['on-hold'] = $orderOnHold;

        return $orderCollection;
    }

    /**
     * Update the order status of the given order
     *
     * @param $request
     * @return array
     */
    public function updateOrderStatus($request)
    {
        $result = [
            'success' => false,
            'message' => '',
            'order' => null,
            'redirect' => '/account/admin-orders/received'
        ];

        $orderId = $request['order'];
        $orderStatus = $request['order_status'];
        $order = Order::find($orderId);

        if ($order == null) {
            $result['message'] = 'Cannot find Order';
            return $result;
        }

        $order->order_status = $orderStatus;
        $order->save();

        $result['message'] = 'Order No. ' . $order->id . ' status updated to ' . $order->order_status;
        $result['order'] = $order;

        switch ($order->order_status) {

            case 'Order Received':
                $result['redirect'] = '/account/admin-orders/received';
                break;

            case 'Order Canceled':
                $result['redirect'] = '/account/admin-orders/canceled';
                break;

            case 'Order Dispatched':
                $result['redirect'] = '/account/admin-orders/dispatched';
                break;

            case 'Order On-hold':
                $result['redirect'] = '/account/admin-orders/on-hold';
                break;
        }

        return $result;
    }
}