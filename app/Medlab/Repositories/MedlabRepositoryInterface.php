<?php
namespace App\Medlab\Repositories;


interface MedlabRepositoryInterface
{
    //
    // Guest Registrations
    //
    public function createPatientRegistrationForGuest($request);
    public function createPractitionerRegistrationForGuest($request);

    //
    // Account Dashboard
    //
    public function getLatestOrdersForUser($user);
    public function updateUserEmail($request, $user);
    public function updateUserNewsLetter($request, $user);
    public function updateUserAddress($request, $user);
    public function getOrderListForCurrentUser();
    public function getOrderDetails($request);

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
    // Search Company and Practitioner
    //
    public function searchCompany($request);
    public function searchPractitioner($request);

    //
    // Admin Order Management
    //
    public function getNewOrderList();
    public function getOrderCollection($itemsPerPage);
    public function updateOrderStatus($request);

    //
    // Shopping Cart
    //
    public function getProductListInBasket($basketArrayInSession);
    public function createUserShippingAddress($user);
    public function createUserBillingAddress($user);
    public function createOrder($user, $shoppingCart);
    public function createOrderedProduct($order, $item);
    public function createOrderedProductPromotion($order, $orderedProduct, $promotion);
}