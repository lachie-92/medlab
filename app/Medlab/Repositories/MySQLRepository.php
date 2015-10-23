<?php
namespace App\Medlab\Repositories;

use App\Company;
use App\Customer;
use App\Customer_Address;
use App\Customer_Email;
use App\Customer_Number;
use App\Order;
use App\OrderedProduct;
use App\OrderedProducts_Promotion;
use App\Patient;
use App\Patient_Registration;
use App\Practitioner;
use App\Practitioner_Registration;
use App\Product;
use App\User;
use Carbon\Carbon;

class MySQLRepository implements MedlabRepositoryInterface
{
    //
    // Guest Registrations
    //
    /**
     * Create Patient Registration for the Guest Page
     *
     * @param $request
     * @return \App\Patient_Registration
     */
    public function createPatientRegistrationForGuest($request)
    {
        if ($request->practitioner_not_found) {
            $registration = Patient_Registration::create([
                'title' => $request->title,
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => bcrypt($request->password),
                'street' => $request->street_address_one,
                'suburb' => $request->street_address_two,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'postcode' => $request->postcode,
                'telephone' => $request->telephone,
                'mobile_phone' => $request->mobile_phone,
                'practitioner_not_found' => $request->practitioner_not_found,
                'practitioner_name' => $request->practitioner_not_found_practitioner_name,
                'practitioner_clinic' => $request->practitioner_not_found_clinic,
                'practitioner_city' => $request->practitioner_not_found_city,
                'practitioner_state' => $request->practitioner_not_found_state,
                'practitioner_country' => $request->practitioner_not_found_country,
                'practitioner_postcode' => $request->practitioner_not_found_postcode,
                'approval' => null
            ]);
        }
        else {
            $practitioner = Practitioner::findOrFail($request->practitioner_id);
            $companyMainAddress = $practitioner->company->company_addresses->where('type', 'Main Address')->first();

            $registration = Patient_Registration::create([
                'title' => $request->title,
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => bcrypt($request->password),
                'street' => $request->street_address_one,
                'suburb' => $request->street_address_two,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'postcode' => $request->postcode,
                'telephone' => $request->telephone,
                'mobile_phone' => $request->mobile_phone,
                'practitioner_id' => $request->practitioner_id,
                'practitioner_not_found' => $request->practitioner_not_found,
                'practitioner_name' => $practitioner->user->customer->name,
                'practitioner_clinic' => $practitioner->company->name,
                'practitioner_city' => $companyMainAddress->city,
                'practitioner_state' => $companyMainAddress->state,
                'practitioner_country' => $companyMainAddress->country,
                'practitioner_postcode' => $companyMainAddress->postcode,
                'approval' => null
            ]);
        }

        return $registration;
    }

    /**
     * Create Practitioner Registration for the Guest Page
     *
     * @param $request
     * @return \App\Practitioner_Registration
     */
    public function createPractitionerRegistrationForGuest($request)
    {
        $registration = Practitioner_Registration::create([
            'title' => $request->title,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => bcrypt($request->password),
            'clinic_name' => $request->clinic_name,
            'business_type' => $request->business_type,
            'business_number' => $request->business_number,
            'provider_number' => $request->provider_number,
            'street' => $request->street_address_one,
            'suburb' => $request->street_address_two,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postcode' => $request->postcode,
            'telephone' => $request->telephone,
            'mobile_phone' => $request->mobile_phone,
            'approval' => null
        ]);

        return $registration;
    }

    //
    // Account Dashboard
    //
    /**
     * Retrieve the latest 3 orders for the given user
     *
     * @param $user
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getLatestOrdersForUser($user)
    {
        $orders = Order::orderBy('created_at', 'desc')->
            searchUserOrders()->
            searchProcessedOrders()->
            take(3)->get();

        return $orders;
    }

    /**
     * Update the email address for the given user
     *
     * @param $request
     * @param $user
     */
    public function updateUserEmail($request, $user)
    {
        $user->email = $request->email;
        $user->save();

        $mainEmail = $user->customer->customer_emails->where('type', 'Main Email')->first();
        $mainEmail->email_address = $request->email;
        $mainEmail->save();
    }

    /**
     * Update the news letter status for the given user
     *
     * @param $request
     * @param $user
     */
    public function updateUserNewsLetter($request, $user)
    {
        $user->newsletter_subscription = $request->newsletter;
        $user->save();
    }

    /**
     * Update the address for the given user
     *
     * @param $request
     * @param $user
     */
    public function updateUserAddress($request, $user)
    {
        $mainAddress = $user->customer->customer_addresses->where('type', "Main Address")->first();
        $mainAddress->postcode = $request->postcode;
        $mainAddress->state = $request->state;
        $mainAddress->suburb = $request->street_address_two;
        $mainAddress->street = $request->street_address_one;
        $mainAddress->address = $request->street_address_one . ' ' . $request->street_address_two;
        $mainAddress->city = $request->city;
        $mainAddress->country = $request->country;
        $mainAddress->save();

        $mainPhone = $user->customer->customer_numbers->where('type', 'Main Number')->first();
        $mainPhone->number = $request->telephone;
        $mainPhone->save();

        $mainMobile = $user->customer->customer_numbers->where('type', 'Main Mobile Number')->first();
        $mainMobile->number = $request->mobile_phone;
        $mainMobile->save();
    }

    /**
     * Get the order list belong to the current user
     *
     * @return mixed
     */
    public function getOrderListForCurrentUser()
    {
        $orders = Order::orderBy('created_at', 'desc')->
            searchUserOrders()->
            searchProcessedOrders()->get();

        return $orders;
    }

    /**
     * Get the order with the given order id
     *
     * @param $request
     * @return \App\Order
     */
    public function getOrderDetails($request)
    {
        $order = Order::findOrFail($request->order);

        return $order;
    }

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
    // Search Company and Practitioner
    //
    /**
     * Create a Company List with the given criteria
     *
     * @param $request
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function searchCompany($request)
    {
        $all_companies = Company::orderBy('id');

        if(!empty($request['company_country'])) {
            $all_companies = $all_companies->filterCountry($request['company_country']);
        }

        if(!empty($request['company_state'])) {
            $all_companies = $all_companies->filterState($request['company_state']);
        }

        if(!empty($request['company_suburb'])) {
            $all_companies = $all_companies->filterSuburb($request['company_suburb']);
        }

        if(!empty($request['company_postcode'])) {
            $all_companies = $all_companies->filterPostcode($request['company_postcode']);
        }

        if(!empty($request['company_name'])) {
            $all_companies = $all_companies->filterName($request['company_name']);
        }

        if(!empty($request['company_type'])) {
            $all_companies = $all_companies->filterType($request['company_type']);
        }

        if(!empty($request['company_business_number'])) {
            $all_companies = $all_companies->filterBusinessNumber($request['company_business_number']);
        }

        $filtered_companies = $all_companies->get();

        return $filtered_companies;
    }

    /**
     * Create a Practitioner List with the given criteria
     *
     * @param $request
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function searchPractitioner($request)
    {
        $all_practitioners = Practitioner::orderBy('id');

        if(!empty($request['practitioner_country'])) {
            $all_practitioners = $all_practitioners->filterCountry($request['practitioner_country']);
        }

        if(!empty($request['practitioner_state'])) {
            $all_practitioners = $all_practitioners->filterState($request['practitioner_state']);
        }

        if(!empty($request['practitioner_suburb'])) {
            $all_practitioners = $all_practitioners->filterSuburb($request['practitioner_suburb']);
        }

        if(!empty($request['practitioner_postcode'])) {
            $all_practitioners = $all_practitioners->filterPostcode($request['practitioner_postcode']);
        }

        if(!empty($request['practitioner_clinic'])) {
            $all_practitioners = $all_practitioners->filterClinic($request['practitioner_clinic']);
        }

        $filtered_practitioners = $all_practitioners->get();

        return $filtered_practitioners;
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

    //
    // Shopping Cart
    //
    /**
     * Create a list of product using the basket array stored in session
     *
     * @param $basketArrayInSession
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getProductListInBasket($basketArrayInSession)
    {
        $products = array_keys($basketArrayInSession);
        $products = Product::whereIn('id', $products)->get();

        return $products;
    }

    /**
     * Create a Shipping Address array using the User Account Address
     *
     * @param $user
     * @return array
     */
    public function createUserShippingAddress($user)
    {
        $shippingAddress['title'] = $user->customer->title;
        $shippingAddress['first_name'] = $user->customer->first_name;
        $shippingAddress['last_name'] = $user->customer->last_name;
        $shippingAddress['street'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->street;
        $shippingAddress['suburb'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->suburb;
        $shippingAddress['city'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->city;
        $shippingAddress['postcode'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->postcode;
        $shippingAddress['state'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->state;
        $shippingAddress['country'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->country;
        $shippingAddress['phone'] = $user->customer->customer_numbers->where('type', 'Main Mobile Number')->first()->number;

        return $shippingAddress;
    }

    /**
     * Create a Billing Address array using the User Account Address
     *
     * @param $user
     * @return array
     */
    public function createUserBillingAddress($user)
    {
        $billingAddress['title'] = $user->customer->title;
        $billingAddress['first_name'] = $user->customer->first_name;
        $billingAddress['last_name'] = $user->customer->last_name;
        $billingAddress['street'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->street;
        $billingAddress['suburb'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->suburb;
        $billingAddress['city'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->city;
        $billingAddress['postcode'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->postcode;
        $billingAddress['state'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->state;
        $billingAddress['country'] = $user->customer->customer_addresses->where('type', 'Main Address')->first()->country;

        return $billingAddress;
    }

    /**
     * Create a new Order using the shopping cart and user
     *
     * @param $user
     * @param $shoppingCart
     * @return \App\Order
     */
    public function createOrder($user, $shoppingCart)
    {
        $order = new Order();

        $order->user_id = $user->id;
        $order->order_status = 'New order';
        $order->subtotal = $shoppingCart->subtotal;
        $order->GST = $shoppingCart->GST;
        $order->shipping_cost = $shoppingCart->shippingCost;
        $order->discount = $shoppingCart->discount;
        $order->grand_total = $shoppingCart->total;

        $order->shipping_address_title = $shoppingCart->shippingAddress['title'];
        $order->shipping_address_first_name = $shoppingCart->shippingAddress['first_name'];
        $order->shipping_address_last_name = $shoppingCart->shippingAddress['last_name'];
        $order->shipping_address_street = $shoppingCart->shippingAddress['street'];
        $order->shipping_address_suburb = $shoppingCart->shippingAddress['suburb'];
        $order->shipping_address_city = $shoppingCart->shippingAddress['city'];
        $order->shipping_address_postcode = $shoppingCart->shippingAddress['postcode'];
        $order->shipping_address_state = $shoppingCart->shippingAddress['state'];
        $order->shipping_address_country = $shoppingCart->shippingAddress['country'];
        $order->shipping_address_phone = $shoppingCart->shippingAddress['phone'];

        $order->billing_address_title = $shoppingCart->billingAddress['title'];
        $order->billing_address_first_name = $shoppingCart->billingAddress['first_name'];
        $order->billing_address_last_name = $shoppingCart->billingAddress['last_name'];
        $order->billing_address_street = $shoppingCart->billingAddress['street'];
        $order->billing_address_suburb = $shoppingCart->billingAddress['suburb'];
        $order->billing_address_city = $shoppingCart->billingAddress['city'];
        $order->billing_address_postcode = $shoppingCart->billingAddress['postcode'];
        $order->billing_address_state = $shoppingCart->billingAddress['state'];
        $order->billing_address_country = $shoppingCart->billingAddress['country'];

        $order->save();

        return $order;
    }

    /**
     * Create an Ordered Product belong to the given order
     *
     * @param $order
     * @param $product
     * @return \App\OrderedProduct
     */
    public function createOrderedProduct($order, $product)
    {
        $orderedProduct = new OrderedProduct();

        $orderedProduct->order_id = $order->id;
        $orderedProduct->product_name = $product['product']->product_name_index;
        $orderedProduct->line_price = $product['original_price'];
        $orderedProduct->line_quantity = $product['quantity'];
        $orderedProduct->discount_percentage = $product['discount_percentage'];
        $orderedProduct->discounted_price = $product['price'];
        $orderedProduct->line_total = $product['total'];

        $orderedProduct->save();

        return $orderedProduct;
    }

    /**
     * Create a Promotion associated to the Ordered Product
     *
     * @param $order
     * @param $orderedProduct
     * @param $promotion
     * @return \App\OrderedProducts_Promotion
     */
    public function createOrderedProductPromotion($order, $orderedProduct, $promotion)
    {
        $orderedProductPromotion = new OrderedProducts_Promotion();

        $orderedProductPromotion->orderedProduct_id = $orderedProduct->id;
        $orderedProductPromotion->promotion_name = $promotion['name'];
        $orderedProductPromotion->type = $promotion['type'];
        $orderedProductPromotion->promotion_description = $promotion['description'];
        $orderedProductPromotion->promotion_apply_to_group = $promotion['apply_to_group'];
        $orderedProductPromotion->promotion_starting_date = $promotion['starting_date'];
        $orderedProductPromotion->promotion_end_date = $promotion['end_date'];

        $orderedProductPromotion->save();

        if ($promotion['type'] == 'buy_one_get_one_free' && $promotion['free_qty'] > 0) {

            $buy_one_get_one_free_Product = new OrderedProduct();

            $buy_one_get_one_free_Product->order_id = $order->id;
            $buy_one_get_one_free_Product->product_name = 'FREE - ' . $orderedProduct->product_name;
            $buy_one_get_one_free_Product->line_price = $orderedProduct->line_price;
            $buy_one_get_one_free_Product->line_quantity = $promotion['free_qty'];
            $buy_one_get_one_free_Product->discount_percentage = 100;
            $buy_one_get_one_free_Product->discounted_price = 0;
            $buy_one_get_one_free_Product->line_total = 0;

            $buy_one_get_one_free_Product->save();

            $buy_one_get_one_free_Promotion = new OrderedProducts_Promotion();

            $buy_one_get_one_free_Promotion->orderedProduct_id = $buy_one_get_one_free_Product->id;
            $buy_one_get_one_free_Promotion->promotion_name = $promotion['name'];
            $buy_one_get_one_free_Promotion->promotion_description = $promotion['description'];
            $buy_one_get_one_free_Promotion->promotion_apply_to_group = $promotion['apply_to_group'];
            $buy_one_get_one_free_Promotion->promotion_starting_date = $promotion['starting_date'];
            $buy_one_get_one_free_Promotion->promotion_end_date = $promotion['end_date'];

            $buy_one_get_one_free_Promotion->save();
        }

        return $orderedProductPromotion;
    }
}