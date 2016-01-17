<?php
namespace App\Medlab\Repositories;

use App\Customer_Address;
use App\Customer_Number;
use App\Order;

class AccountRepository implements AccountRepositoryInterface
{
    //
    // Account Dashboard
    //
    /**
     * Retrieve the latest 3 orders for the given user
     *
     * @param $user
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getLatestOrdersForUser($user)
    {
        $orders = Order::orderBy('created_at', 'desc')->
        searchUserOrders()->
        searchProcessedOrders()->
        take(3)->get();

        return $orders;
    }

    /**
     * Update the email address for the given user
     *
     * @param $request
     * @param $user
     */
    public function updateUserEmail($request, $user)
    {
        $user->email = $request->email;
        $user->save();
    }

    /**
     * Update the news letter status for the given user
     *
     * @param $request
     * @param $user
     */
    public function updateUserNewsLetter($request, $user)
    {
        $user->newsletter_subscription = $request->newsletter;
        $user->save();
    }

    /**
     * Update the address for the given user
     *
     * @param $request
     * @param $user
     */
    public function updateUserAddress($request, $user)
    {
        $mainAddress = $user->customer->customer_addresses->where('type', "Account")->first();
        if ($mainAddress) {
            $mainAddress->postcode = $request->postcode;
            $mainAddress->state = $request->state;
            $mainAddress->suburb = $request->street_address_two;
            $mainAddress->street = $request->street_address_one;
            $mainAddress->address = $request->street_address_one . ' ' . $request->street_address_two;
            $mainAddress->country = $request->country;
            $mainAddress->save();
        }
        else {
            $mainAddress = new Customer_Address();
            $mainAddress->type = 'Account';
            $mainAddress->postcode = $request->postcode;
            $mainAddress->state = $request->state;
            $mainAddress->suburb = $request->street_address_two;
            $mainAddress->street = $request->street_address_one;
            $mainAddress->address = $request->street_address_one . ' ' . $request->street_address_two;
            $mainAddress->country = $request->country;
            $mainAddress->customer_id = $user->customer->id;
            $mainAddress->save();
        }


        $mainPhone = $user->customer->customer_numbers->where('type', 'Account Phone')->first();
        if ($mainPhone) {
            $mainPhone->number = $request->telephone;
            $mainPhone->save();
        }
        else {
            $mainPhone = new Customer_Number();
            $mainPhone->type = 'Account Phone';
            $mainPhone->number = $request->telephone;
            $mainPhone->customer_id = $user->customer->id;
            $mainPhone->save();
        }

        $mainMobile = $user->customer->customer_numbers->where('type', 'Account Mobile')->first();
        if ($mainMobile) {
            $mainMobile->number = $request->mobile_phone;
            $mainMobile->save();
        }
        else {
            $mainMobile = new Customer_Number();
            $mainMobile->type = 'Account Mobile';
            $mainMobile->number = $request->mobile_phone;
            $mainMobile->customer_id = $user->customer->id;
            $mainMobile->save();
        }
    }

    /**
     * Get the order list belong to the current user
     *
     * @return mixed
     */
    public function getOrderListForCurrentUser()
    {
        $orders = Order::orderBy('created_at', 'desc')->
            searchUserOrders()->
            searchProcessedOrders()->get();

        return $orders;
    }

    /**
     * Get the order with the given order id
     *
     * @param $request
     * @return \App\Order
     */
    public function getOrderDetails($request)
    {
        $order = Order::findOrFail($request->order);

        return $order;
    }
}