<?php

namespace App\Console\Commands;

use App\Patient_Registration;
use App\Practitioner_Registration;
use Illuminate\Console\Command;

class RegistrationCleanUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registration:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove any month old deleted Registrations';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment('Remove month old deleted registrations ---');

        // Patient Registrations
        $monthOldDeletedPatientRegistrations = Patient_Registration::searchMonthOldDeletedRegistrations()->get();
        $this->comment(count($monthOldDeletedPatientRegistrations) . ' Patient Registrations found and deleted');

        foreach ($monthOldDeletedPatientRegistrations as $registration) {

            $registration->forceDelete();;
        }

        // Practitioner Registrations
        $monthOldDeletedPractitionerRegistrations = Practitioner_Registration::searchMonthOldDeletedRegistrations()->get();
        $this->comment(count($monthOldDeletedPractitionerRegistrations) . ' Practitioner Registrations found and deleted');

        foreach ($monthOldDeletedPractitionerRegistrations as $registration) {

            $registration->forceDelete();;
        }
    }
}
