<?php

use App\Patient_Registration;
use App\Practitioner_Registration;
use Illuminate\Database\Seeder;

class RegistrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient_Registration::create([
            'title' => 'Mr',
            'email' => 'regpatientemailtest321@gmail.com',
            'first_name' => 'Patient',
            'last_name' => 'Registration',
            'password' => bcrypt('testtest'),
            'street' => 'street',
            'suburb' => 'suburb',
            'state' => 'NSW',
            'country' => 'Australia',
            'postcode' => '1234',
            'telephone' => '12345678',
            'mobile_phone' => '12345678',
            'practitioner_id' => 1,
            'practitioner_not_found' => false,
            'practitioner_name' => 'practitioner test',
            'practitioner_clinic' => 'company one',
            'practitioner_state' => 'NSW',
            'practitioner_country' => 'Australia',
            'practitioner_postcode' => '2077',
            'approval' => null,
        ]);

        Practitioner_Registration::create([
            'title' => 'Mr',
            'email' => 'regpractitioneremailtest321@gmail.com',
            'first_name' => 'Practitioner',
            'last_name' => 'Registration',
            'password' => bcrypt('testtest'),
            'clinic_name' => 'company one',
            'business_type' => 'Company',
            'business_number' => '12412',
            'association_number' => '13515131',
            'association_type' => 'Australia Medical',
            'street' => 'street',
            'suburb' => 'suburb',
            'state' => 'NSW',
            'country' => 'Australia',
            'postcode' => '1234',
            'telephone' => '12345678',
            'mobile_phone' => '12345678',
            'approval' => null,
        ]);
    }
}
