<?php
namespace App\Medlab\Repositories;


interface AdminRepositoryInterface
{
    //
    // Admin Registration Management
    //
    public function getUnapprovedPatientRegistrationList();
    public function getApprovedPatientRegistrationList();
    public function getDeletedPatientRegistrationList();
    public function getUnapprovedPractitionerRegistrationList();
    public function getApprovedPractitionerRegistrationList();
    public function getDeletedPractitionerRegistrationList();
    public function getPractitionerFromPatientRegistration($registration);
    public function getCompanyFromPractitionerRegistration($registration);
    public function deleteRegistration($registration);
    public function restoreRegistration($registration);
    public function createPatientAccount($request, $registration);
    public function createPractitionerAccount($request, $registration);
    public function createPractitionerRegistration($request);
    public function createCompany($request);

    //
    // Admin Order Management
    //
    public function getNewOrderList();
    public function getOrderCollection($itemsPerPage);
    public function updateOrderStatus($request);
}