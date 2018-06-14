<?php

namespace App\Medlab\Validators;


class OrderValidator
{
    public function validOrderStatus($attribute, $value, $parameters)
    {
        $status = $this->createOrderStatusList();

        $isValid = false;

        if (array_key_exists($value, $status)) {
            $isValid = true;
        }

        return $isValid;
    }

    public function validOrderStatusError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid Order Status';
    }

    private function createOrderStatusList() {

        return [
            'Order Received' => 'Order Received',
            'Order Cancelled' => 'Order Cancelled',
            'Order Dispatched' => 'Order Dispatched',
            'Order On-hold' => 'Order On-hold',
        ];
    }
}