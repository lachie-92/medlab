<?php

use App\Category;
use App\Company;
use App\Company_Address;
use App\Company_Number;
use App\Customer;
use App\Customer_Address;
use App\Customer_Email;
use App\Customer_Number;
use App\Patient;
use App\Practitioner;
use App\Related_To;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Customer::create([
            'name' => 'admin'
        ]);

        User::create([
            'email' => 'admin@testemail.com',
            'password' => bcrypt('admin2d42#4baeo43@'),
            'group' => 'Admin',
            'customer_id' => $admin->id
        ]);

        $patientList = [
            [
                // Patient Detail
                'title' => 'Mr.',
                'name' => 'patient test',
                'first_name' => 'patient',
                'last_name' => 'test',
                'email' => 'patient@testemail.com',
                'password' => 'testtest',
                'newsletter_subscription' => false,
                'approval_status' => 'approved',
                'activated' => true,

                // Patient Phone
                'main_number' => '123456789',
                'mobile_number' => '123456789',

                // Patient Address
                'address_type' => 'Main Address',
                'address' => '123 Fake Street Hornsby',
                'street' => '123 Fake Street',
                'suburb' => 'Hornsby',
                'postcode' => '2077',
                'city' => 'Sydney',
                'state' => 'NSW',
                'country' => 'AU',

                // Practitioner for the patient
                'practitioner' => 1
            ]
        ];

        $practitionerList = [
            [
                // Practitioner Detail
                'title' => 'Dr.',
                'name' => 'practitioner test',
                'practitioner_license' => '01234',
                'first_name' => 'practitioner',
                'last_name' => 'test',
                'email' => 'practitioner@testemail.com',
                'password' => 'testtest',
                'newsletter_subscription' => false,
                'approval_status' => 'approved',
                'activated' => true,

                // Practitioner Phone
                'main_number' => '123456789',
                'mobile_number' => '123456789',

                // Practitioner Address
                'address' => '123 Fake Street Hornsby',
                'street' => '123 Fake Street',
                'suburb' => 'Hornsby',
                'postcode' => '2077',
                'city' => 'Sydney',
                'state' => 'NSW',
                'country' => 'AU',

                // Practitioner Company
                'company_name' => 'company one',
                'company_registration_type' => 'Company',
                'company_registration_number' => '01234',

                // Practitioner Company Phone
                'company_main_number' => '123456789',
                'company_mobile_number' => '123456789',

                // Practitioner Company Address
                'company_address_type' => 'Main Address',
                'company_address' => '123 Fake Street Hornsby',
                'company_street' => '123 Fake Street',
                'company_suburb' => 'Hornsby',
                'company_postcode' => '2077',
                'company_city' => 'Sydney',
                'company_state' => 'NSW',
                'company_country' => 'AU',
            ]
        ];

        foreach ($practitionerList as $user) {

            $customer = Customer::create([
                'title' => $user['title'],
                'name' => $user['name'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'country' => $user['country']
            ]);

            Customer_Address::create([
                'type' => 'Main Address',
                'address' => $user['address'],
                'street' => $user['street'],
                'suburb' => $user['suburb'],
                'postcode' => $user['postcode'],
                'city' => $user['city'],
                'state' => $user['state'],
                'country' => $user['country'],
                'customer_id' => $customer->id
            ]);

            Customer_Email::create([
                'type' => 'Main Email',
                'email_address' => $user['email'],
                'customer_id' => $customer->id
            ]);

            Customer_Number::create([
                'type' => 'Main Number',
                'number' => $user['main_number'],
                'customer_id' => $customer->id
            ]);

            Customer_Number::create([
                'type' => 'Main Mobile Number',
                'number' => $user['mobile_number'],
                'customer_id' => $customer->id
            ]);

            $company = Company::create([
                'name' => $user['company_name'],
                'registration_number' => $user['company_registration_number'],
                'registration_type' => $user['company_registration_type'],
                'country' => $user['company_country']

            ]);

            Company_Address::create([
                'type' => 'Main Address',
                'address' => $user['company_address'],
                'street' => $user['company_street'],
                'suburb' => $user['company_suburb'],
                'postcode' => $user['company_postcode'],
                'city' => $user['company_city'],
                'state' => $user['company_state'],
                'country' => $user['company_country'],
                'company_id' => $company->id
            ]);

            Company_Number::create([
                'type' => 'Main Number',
                'number' => $user['company_main_number'],
                'company_id' => $company->id
            ]);

            Company_Number::create([
                'type' => 'Main Mobile Number',
                'number' => $user['company_mobile_number'],
                'company_id' => $company->id
            ]);

            Related_To::create([
                'this_company_id' => $company->id,
                'related_customer_id' => $customer->id,
                'relationship' => 'employ the customer'
            ]);

            Related_To::create([
                'this_customer_id' => $customer->id,
                'related_company_id' => $company->id,
                'relationship' => 'working for the company'
            ]);

            $newUser = User::create([
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
                'newsletter_subscription' => $user['newsletter_subscription'],
                'group' => 'Practitioner',
                'approval_status' => $user['approval_status'],
                'activated' => $user['activated'],
                'timezone' => $user['country'],
                'customer_id' => $customer->id
            ]);

            Practitioner::create([
                'practitioner_license' => $user['practitioner_license'],
                'user_id' => $newUser->id,
                'company_id' => $company->id,
            ]);


        }

        foreach ($patientList as $user) {

            $customer = Customer::create([
                'title' => $user['title'],
                'name' => $user['name'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'country' => $user['country']
            ]);

            Customer_Address::create([
                'type' => 'Main Address',
                'address' => $user['address'],
                'street' => $user['street'],
                'suburb' => $user['suburb'],
                'postcode' => $user['postcode'],
                'city' => $user['city'],
                'state' => $user['state'],
                'country' => $user['country'],
                'customer_id' => $customer->id
            ]);

            Customer_Email::create([
                'type' => 'Main Email',
                'email_address' => $user['email'],
                'customer_id' => $customer->id
            ]);

            Customer_Number::create([
                'type' => 'Main Number',
                'number' => $user['main_number'],
                'customer_id' => $customer->id
            ]);

            Customer_Number::create([
                'type' => 'Main Mobile Number',
                'number' => $user['mobile_number'],
                'customer_id' => $customer->id
            ]);

            $newUser = User::create([
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
                'newsletter_subscription' => $user['newsletter_subscription'],
                'group' => 'Patient',
                'approval_status' => $user['approval_status'],
                'activated' => $user['activated'],
                'timezone' => $user['country'],
                'customer_id' => $customer->id
            ]);

            Patient::create([
                'user_id' => $newUser->id,
                'practitioner_id' => $user['practitioner'],
            ]);
        }
    }
}
