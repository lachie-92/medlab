<?php
namespace App\Medlab\Repositories;


interface RegistrationRepositoryInterface
{
    //
    // Guest Registrations
    //
    public function createPatientRegistrationForGuest($request);
    public function createPractitionerRegistrationForGuest($request);
}