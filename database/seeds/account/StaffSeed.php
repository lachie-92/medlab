<?php

use Illuminate\Database\Seeder;

use App\Customer;
use App\User;
use App\Staff;
use Carbon\Carbon;

/**
 * Class StaffSeed
 */
class StaffSeed extends Seeder {

    /**
     * This seeder file creates the accounts for Medlab Staffs, creates Customers->Users->Staffs
     * Security Levels:
     * 0 - Default (No backend access)
     * 1 - CRM (Access to CRM stuff)
     * 2 - Admin (Everything except Hard Delete)
     * 3 - Super Admin (Everything)
     */
    public function run() {

        /**
         * Henry Wu 1
         */
        $henry_customer = new Customer;
        $henry_customer->first_name = "Henry";
        $henry_customer->last_name = "Wu";
        $henry_customer->name = $henry_customer->first_name . " " . $henry_customer->last_name;
        $henry_customer->starred = false;
        $henry_customer->viewed_at = Carbon::now();
        $henry_customer->title = "Mr";
        $henry_customer->job_title = "Web Developer";
        $henry_customer->modality = "Staff";
        $henry_customer->company_name = "Medlab";
        $henry_customer->country = "Australia";
        $henry_customer->save();

        $henry_user = new User;
        $henry_user->customer_id = $henry_customer->id;
        $henry_user->staff_security = 2;
        $henry_user->email = "henry_wu@medlab.co";
        $henry_user->group = "Staff";
        $henry_user->password = bcrypt('testtest');
        $henry_user->newsletter_subscription = true;
        $henry_user->date_approved = Carbon::now();
        $henry_user->approved_by = "Henry Wu";
        $henry_user->status = "Active"; //Active, inActive, pending
        $henry_user->account_credit = true;
        $henry_user->timezone = "Australia/Sydney";
        $henry_user->save();

        $henry_staff = new Staff;
        $henry_staff->user_id = $henry_user->id;
        $henry_staff->save();
    }
}
