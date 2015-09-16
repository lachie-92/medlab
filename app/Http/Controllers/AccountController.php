<?php

namespace App\Http\Controllers;

use App\Company;
use App\Company_Address;
use App\Customer;
use App\Customer_Address;
use App\Customer_Email;
use App\Customer_Number;
use App\Http\Controllers\Traits\UsefulViewFunctions;
use App\Http\Requests\AddressUpdateRequest;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\CompanySearchRequest;
use App\Http\Requests\EmailUpdateRequest;
use App\Http\Requests\NewsletterUpdateRequest;
use App\Http\Requests\PatientAccountRequest;
use App\Http\Requests\PractitionerAccountRequest;
use App\Patient;
use App\Patient_Registration;
use App\Practitioner;
use App\Practitioner_Registration;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    use UsefulViewFunctions;

    /**
     * Controller constructor - defines the middleware configurations.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => [
                'dashboard',
                'getEdit',
                'postEmail',
                'postNewsletter',
                'postAddress'
            ]
        ]);

        $this->middleware('adminAuth', [
            'only' => [
                'getShowPatientRegistrations',
                'getPatientRegistration',
                'postDeletePatientRegistration',
                'postRestoreDeletedPatientRegistration',
                'postCreatePatientAccount',
                'getNewPractitionerRegistration',
                'postNewPractitionerRegistration',
                'getShowPractitionerRegistrations',
                'postGetCompanyList',
                'postCreateCompany',
                'getPractitionerRegistration',
                'postCreatePractitionerAccount',
                'postDeletePractitionerRegistration',
                'postRestoreDeletedPractitionerRegistration'
            ]
        ]);
    }

    /**
     * Display the Dashboard page
     *
     * @param Guard $auth
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Guard $auth)
    {
        $user = $auth->user();

        switch ($user->group) {

            case 'Patient':

                return view('pages.account.dashboard.patient.main.index', compact('user'));
                break;

            case 'Practitioner':

                return view('pages.account.dashboard.practitioner.main.index', compact('user'));
                break;

            case 'Admin':

                return redirect('/account/patient-registration');
                break;
        }
    }

    /**
     * Display the edit user account information page
     *
     * @param Request $request
     *
     * @param Guard $auth
     *
     * @return \Illuminate\Http\Response
     */
    public function getEdit(Request $request, Guard $auth)
    {
        $user = $auth->user();
        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();

        switch ($user->group) {

            case 'Patient':

                return view('pages.account.dashboard.patient.edit.index', compact(
                    'user', 'auState', 'nzRegion'
                ));
                break;

            case 'Practitioner':

                return view('pages.account.dashboard.practitioner.edit.index', compact(
                    'user', 'auState', 'nzRegion'
                ));
                break;
        }
    }

    /**
     * Edit the user email
     *
     * @param EmailUpdateRequest $request
     * @param Guard $auth
     *
     * @return \Illuminate\Http\Response
     */
    public function postEmail(EmailUpdateRequest $request, Guard $auth)
    {
        $user = $auth->user();

        $user->email = $request->email;
        $user->save();

        $mainEmail = $user->customer->customer_emails->where('type', 'Main Email')->first();
        $mainEmail->email_address = $request->email;
        $mainEmail->save();

        return redirect('/account/edit')->with(['message' => 'Email has been updated']);
    }

    public function postNewsletter(NewsletterUpdateRequest $request, Guard $auth)
    {
        $user = $auth->user();

        $user->newsletter_subscription = $request->newsletter;
        $user->save();

        return redirect('/account/edit')->with(['message' => 'Newsletter has been updated']);
    }

    public function postAddress(AddressUpdateRequest $request, Guard $auth)
    {
        $user = $auth->user();

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

        return redirect('/account/edit')->with(['message' => 'Address has been updated']);
    }

    public function getShowPatientRegistrations()
    {
        $patientRegistrationList = Patient_Registration::whereNull('approval')->get();
        $patientRegistrationApprovedList = Patient_Registration::whereNotNull('approval')->get();
        $patientRegistrationDeletedList = Patient_Registration::onlyTrashed()->get();

        $practitionerRegistrationList = Practitioner_Registration::whereNull('approval')->get();

        return view('pages.account.dashboard.admin.patientregistration.main.index', compact(
            'user', 'patientRegistrationList', 'practitionerRegistrationList',
            'patientRegistrationApprovedList', 'patientRegistrationDeletedList'
        ));
    }

    public function getPatientRegistration(Patient_Registration $registration)
    {
        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();
        $titleList = $this->createTitleList();

        $practitioner = Practitioner::find($registration->practitioner_id);

        // Deleted Registration
        if ($registration->deleted_at != null) {
            return view('pages.account.dashboard.admin.patientregistration.deleted.index', compact(
                'registration', 'auState', 'nzRegion', 'titleList', 'practitioner'
            ));
        }

        // Unapproved Registration
        if ($registration->approval == null) {

            return view('pages.account.dashboard.admin.patientregistration.new.index', compact(
                'registration', 'auState', 'nzRegion', 'titleList', 'practitioner'
            ));
        }
        // Approved Registration
        else {
            return view('pages.account.dashboard.admin.patientregistration.approved.index', compact(
                'registration', 'auState', 'nzRegion', 'titleList', 'practitioner'
            ));
        }
    }

    public function postDeletePatientRegistration(Patient_Registration $registration)
    {
        if ($registration->approval == null && $registration->deleted_at == null) {
            $registration->delete();
            return redirect('/account/patient-registration')->with(['message' => 'Registration has been deleted']);
        }

        return redirect('/account/patient-registration')->with(['message' => 'Cannot delete the Registration']);
    }

    public function postRestoreDeletedPatientRegistration(Patient_Registration $registration)
    {
        if ($registration->deleted_at != null) {
            $registration->restore();
            return redirect('/account/patient-registration')->with(['message' => 'Registration has been restored']);
        }

        return redirect('/account/patient-registration')->with(['message' => 'Cannot Restore the Deleted Registration']);
    }

    public function postCreatePatientAccount(PatientAccountRequest $request, Patient_Registration $registration)
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

        $customer = new Customer();
        $customer->title = $registration->title;
        $customer->name = $registration->first_name . " " . $registration->last_name;
        $customer->first_name = $registration->first_name;
        $customer->last_name = $registration->last_name;
        $customer->country = $registration->country;
        $customer->save();

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

        $customerEmail = new Customer_Email();
        $customerEmail->type = 'Main Email';
        $customerEmail->email_address = $registration->email;
        $customerEmail->customer_id = $customer->id;
        $customerEmail->save();

        $customer->main_address_id = $customerAddress->id;
        $customer->registration_email_id = $customerEmail->id;
        $customer->save();

        $customerTelephone = new Customer_Number();
        $customerTelephone->type = 'Main Number';
        $customerTelephone->number = $registration->telephone;
        $customerTelephone->customer_id = $customer->id;
        $customerTelephone->save();

        $customerMobile = new Customer_Number();
        $customerMobile->type = 'Main Mobile Number';
        $customerMobile->number = $registration->mobile_phone;
        $customerMobile->customer_id = $customer->id;
        $customerMobile->save();

        $newUser = new User();
        $newUser->email = $registration->email;
        $newUser->password = $registration->password;
        $newUser->newsletter_subscription = false;
        $newUser->group = 'Patient';
        $newUser->approval_status = 'approved';
        $newUser->activated = true;
        $newUser->timezone = $registration->country;
        $newUser->customer_id = $customer->id;
        $newUser->save();

        $newPatient = new Patient();
        $newPatient->user_id = $newUser->id;
        $newPatient->practitioner_id = $registration->practitioner_id;
        $newPatient->save();

        return redirect('/account/patient-registration')->with(['message' => 'Account has been created']);
    }

    public function getShowPractitionerRegistrations()
    {
        $practitionerRegistrationList = Practitioner_Registration::whereNull('approval')->get();
        $practitionerRegistrationApprovedList = Practitioner_Registration::whereNotNull('approval')->get();
        $practitionerRegistrationDeletedList = Practitioner_Registration::onlyTrashed()->get();

        $patientRegistrationList = Patient_Registration::whereNull('approval')->get();


        return view('pages.account.dashboard.admin.practitionerregistration.main.index', compact(
            'user', 'patientRegistrationList', 'practitionerRegistrationList',
            'practitionerRegistrationApprovedList', 'practitionerRegistrationDeletedList'
        ));
    }

    public function getNewPractitionerRegistration(Patient_Registration $registration)
    {
        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();
        $titleList = $this->createTitleList();
        $businessTypeList = $this->createBusinessTypeList();

        return view('pages.account.dashboard.admin.practitionerregistration.frompatient.index', compact(
            'registration', 'auState', 'nzRegion', 'titleList', 'businessTypeList'
        ));
    }

    public function postNewPractitionerRegistration(PractitionerAccountRequest $request)
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

        $customer = new Customer();
        $customer->title = $registration->title;
        $customer->name = $registration->first_name . " " . $registration->last_name;
        $customer->first_name = $registration->first_name;
        $customer->last_name = $registration->last_name;
        $customer->country = $registration->country;
        $customer->save();

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

        $customerEmail = new Customer_Email();
        $customerEmail->type = 'Main Email';
        $customerEmail->email_address = $registration->email;
        $customerEmail->customer_id = $customer->id;
        $customerEmail->save();

        $customer->main_address_id = $customerAddress->id;
        $customer->registration_email_id = $customerEmail->id;
        $customer->save();

        $customerTelephone = new Customer_Number();
        $customerTelephone->type = 'Main Number';
        $customerTelephone->number = $registration->telephone;
        $customerTelephone->customer_id = $customer->id;
        $customerTelephone->save();

        $customerMobile = new Customer_Number();
        $customerMobile->type = 'Main Mobile Number';
        $customerMobile->number = $registration->mobile_phone;
        $customerMobile->customer_id = $customer->id;
        $customerMobile->save();

        $newUser = new User();
        $newUser->email = $registration->email;
        $newUser->password = $registration->password;
        $newUser->newsletter_subscription = false;
        $newUser->group = 'Practitioner';
        $newUser->approval_status = 'approved';
        $newUser->activated = true;
        $newUser->timezone = $registration->country;
        $newUser->customer_id = $customer->id;
        $newUser->save();

        $newPractitioner = new Practitioner();
        $newPractitioner->user_id = $newUser->id;
        $newPractitioner->practitioner_license = $registration->provider_number;
        $newPractitioner->company_id = $registration->company_id;
        $newPractitioner->save();

        return redirect('/account/practitioner-registration')->with(['message' => 'Account has been created']);
    }

    public function getPractitionerRegistration(Practitioner_Registration $registration)
    {
        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();
        $titleList = $this->createTitleList();
        $businessTypeList = $this->createBusinessTypeList();

        $company = Company::find($registration->company_id);

        // Deleted Registration
        if ($registration->deleted_at != null) {
            return view('pages.account.dashboard.admin.practitionerregistration.deleted.index', compact(
                'registration', 'auState', 'nzRegion', 'titleList', 'businessTypeList', 'company'
            ));
        }

        // Unapproved Registration
        if ($registration->approval == null) {

            return view('pages.account.dashboard.admin.practitionerregistration.new.index', compact(
                'registration', 'auState', 'nzRegion', 'titleList', 'businessTypeList', 'company'
            ));
        }
        // Approved Registration
        else {
            return view('pages.account.dashboard.admin.practitionerregistration.approved.index', compact(
                'registration', 'auState', 'nzRegion', 'titleList', 'businessTypeList', 'company'
            ));
        }
    }

    public function postGetCompanyList(CompanySearchRequest $request)
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

        return view('pages.account.dashboard.admin.practitionerregistration.new.partial.findcompanylist', compact('filtered_companies'));
    }

    public function postCreateCompany(CompanyRequest $request)
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

        return response()->json(['message' => 'Company has been created']);
    }

    public function postCreatePractitionerAccount(PractitionerAccountRequest $request, Practitioner_Registration $registration)
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

        $customer = new Customer();
        $customer->title = $registration->title;
        $customer->name = $registration->first_name . " " . $registration->last_name;
        $customer->first_name = $registration->first_name;
        $customer->last_name = $registration->last_name;
        $customer->country = $registration->country;
        $customer->save();

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

        $customerEmail = new Customer_Email();
        $customerEmail->type = 'Main Email';
        $customerEmail->email_address = $registration->email;
        $customerEmail->customer_id = $customer->id;
        $customerEmail->save();

        $customer->main_address_id = $customerAddress->id;
        $customer->registration_email_id = $customerEmail->id;
        $customer->save();

        $customerTelephone = new Customer_Number();
        $customerTelephone->type = 'Main Number';
        $customerTelephone->number = $registration->telephone;
        $customerTelephone->customer_id = $customer->id;
        $customerTelephone->save();

        $customerMobile = new Customer_Number();
        $customerMobile->type = 'Main Mobile Number';
        $customerMobile->number = $registration->mobile_phone;
        $customerMobile->customer_id = $customer->id;
        $customerMobile->save();

        $newUser = new User();
        $newUser->email = $registration->email;
        $newUser->password = $registration->password;
        $newUser->newsletter_subscription = false;
        $newUser->group = 'Practitioner';
        $newUser->approval_status = 'approved';
        $newUser->activated = true;
        $newUser->timezone = $registration->country;
        $newUser->customer_id = $customer->id;
        $newUser->save();

        $newPractitioner = new Practitioner();
        $newPractitioner->user_id = $newUser->id;
        $newPractitioner->practitioner_license = $registration->provider_number;
        $newPractitioner->company_id = $registration->company_id;
        $newPractitioner->save();

        return redirect('/account/practitioner-registration')->with(['message' => 'Account has been created']);
    }

    public function postDeletePractitionerRegistration(Practitioner_Registration $registration)
    {
        if ($registration->approval == null && $registration->deleted_at == null) {
            $registration->delete();
            return redirect('/account/practitioner-registration')->with(['message' => 'Registration has been deleted']);
        }

        return redirect('/account/practitioner-registration')->with(['message' => 'Cannot delete the Registration']);
    }

    public function postRestoreDeletedPractitionerRegistration(Practitioner_Registration $registration)
    {
        if ($registration->deleted_at != null) {
            $registration->restore();
            return redirect('/account/practitioner-registration')->with(['message' => 'Registration has been restored']);
        }

        return redirect('/account/practitioner-registration')->with(['message' => 'Cannot Restore the Deleted Registration']);
    }
}
