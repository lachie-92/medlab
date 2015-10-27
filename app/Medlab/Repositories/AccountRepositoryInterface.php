<?php
namespace App\Medlab\Repositories;


interface AccountRepositoryInterface
{
    //
    // Account Dashboard
    //
    public function getLatestOrdersForUser($user);
    public function updateUserEmail($request, $user);
    public function updateUserNewsLetter($request, $user);
    public function updateUserAddress($request, $user);
    public function getOrderListForCurrentUser();
    public function getOrderDetails($request);
}