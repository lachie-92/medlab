<?php
namespace App\Medlab\Repositories;

use App\Patient_Registration;
use App\Practitioner;
use App\Practitioner_Registration;

class RegistrationRepository implements RegistrationRepositoryInterface
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
                'state' => $request->state,
                'country' => $request->country,
                'postcode' => $request->postcode,
                'telephone' => $request->telephone,
                'mobile_phone' => $request->mobile_phone,
                'practitioner_not_found' => $request->practitioner_not_found,
                'practitioner_name' => $request->practitioner_not_found_practitioner_name,
                'practitioner_clinic' => $request->practitioner_not_found_clinic,
                'practitioner_state' => $request->practitioner_not_found_state,
                'practitioner_country' => $request->practitioner_not_found_country,
                'practitioner_postcode' => $request->practitioner_not_found_postcode,
                'approval' => null
            ]);
        }
        else {
            $practitioner = Practitioner::findOrFail($request->practitioner_id);
            $companyMainAddress = $practitioner->company->company_addresses->where('type', 'Physical')->first();

            $registration = Patient_Registration::create([
                'title' => $request->title,
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => bcrypt($request->password),
                'street' => $request->street_address_one,
                'suburb' => $request->street_address_two,
                'state' => $request->state,
                'country' => $request->country,
                'postcode' => $request->postcode,
                'telephone' => $request->telephone,
                'mobile_phone' => $request->mobile_phone,
                'practitioner_id' => $request->practitioner_id,
                'practitioner_not_found' => $request->practitioner_not_found,
                'practitioner_name' => $practitioner->user->customer->name,
                'practitioner_clinic' => $practitioner->company->name,
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
        $been_bankrupt = null;
        $been_refused_credit = null;
        $is_owner = null;

        if(intval($request->credit_application) == 1) {
            $been_bankrupt = intval($request->been_bankrupt);
            $been_refused_credit = intval($request->been_refused_credit);
            $is_owner = intval($request->is_owner);
        }

        $registration = Practitioner_Registration::create([
            'title' => $request->title,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => bcrypt($request->password),
            'clinic_name' => $request->clinic_name,
            'business_type' => $request->business_type,
            'business_number' => $request->business_number,
            'primary_profession' => $request->primary_profession,
            'association_number' => $request->association_number,
            'association_type' => $request->association_type,
            'street' => $request->street_address_one,
            'suburb' => $request->street_address_two,
            'state' => $request->state,
            'country' => $request->country,
            'postcode' => $request->postcode,
            'telephone' => $request->telephone,
            'mobile_phone' => $request->mobile_phone,
            'approval' => null,
            'credit_application' => intval($request->credit_application),
            'been_bankrupt' => $been_bankrupt,
            'been_refused_credit' => $been_refused_credit,
            'patient_billing' => intval($request->patient_billing),
            'is_owner' => $is_owner
        ]);

        return $registration;
    }
}