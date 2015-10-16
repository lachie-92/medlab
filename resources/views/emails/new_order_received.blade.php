<?php $order = unserialize($order); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Medlab - Registration received</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<p>
    A new Order has been placed on the Medlab website.
</p>

<p>
    Please login into the <a href="{{ url('/account/') }}" mc:disable-tracking>Admin page</a> to see more details.
</p>

<br>
<br>

<!--
-- Order Information
-->
<table style="width:100%">
    <thead>
    <tr>
        <th style="text-align: left">Order Information</th>
        <th style="text-align: left">Shipping Address</th>
        <th style="text-align: left">Billing Address</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            Order No.: {{ $order['id'] }} <br>
            Order Status: {{ $order['order_status'] }} <br>
            Payment Type: {{ $order['payment_type'] }} <br>
            Purchase Date: {{ $order['purchase_date'] }} <br>
        </td>
        <td>
            {{ $order['shipping_address_title'] }}
            {{ $order['shipping_address_first_name'] }}
            {{ $order['shipping_address_last_name'] }} <br>
            {{ $order['shipping_address_street'] }} <br>
            {{ $order['shipping_address_suburb'] }} {{ $order['shipping_address_state'] }} {{ $order['shipping_address_postcode'] }} <br>
            {{ $order['shipping_address_city'] }} {{ $country[$order['shipping_address_country']] }} <br>
            Phone: {{ $order['shipping_address_phone'] }} <br>
        </td>
        <td>
            {{ $order['billing_address_title'] }}
            {{ $order['billing_address_first_name'] }}
            {{ $order['billing_address_last_name'] }} <br>
            {{ $order['billing_address_street'] }} <br>
            {{ $order['billing_address_suburb'] }} {{ $order['billing_address_state'] }} {{ $order['billing_address_postcode'] }} <br>
            {{ $order['billing_address_city'] }} {{ $country[$order['billing_address_country']] }} <br>
        </td>
    </tr>
    </tbody>
</table>

<br>

<!--
-- Order Items
-->
<table style="width:100%">
    <thead>
    <tr>
        <th style="text-align: left">Item</th>
        <th style="text-align: right">QTY</th>
        <th style="text-align: right">Price</th>
        <th style="text-align: right">Discount</th>
        <th style="text-align: right">Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($order->orderedProducts as $product)

        <tr>
            <td style="text-align: left">
                {{ $product['product_name'] }}
            </td>
            <td style="text-align: right">
                {{ $product['line_quantity'] }}
            </td>
            <td style="text-align: right">
                {{ $product['line_price'] }}
            </td>
            <td style="text-align: right">
                {{ $product['discount_percentage'] }}%
            </td>
            <td style="text-align: right">
                @if ($product['line_total'] == 0)
                    $0.00
                @else
                    ${{ number_format($product['line_total'], 2) }}
                @endif
            </td>
        </tr>

    @endforeach
    <tr>
        <th colspan="4" style="text-align: left">
            Total Discount
        </th>
        <td style="text-align: right">
            ${{ number_format($order['discount'], 2) }}
        </td>
    </tr>
    <tr>
        <th colspan="4" style="text-align: left">
            Subtotal
        </th>
        <td style="text-align: right">
            ${{ number_format($order['subtotal'], 2) }}
        </td>
    </tr>
    <tr>
        <th colspan="4" style="text-align: left">
            GST
        </th>
        <td style="text-align: right">
            ${{ number_format($order['GST'], 2) }}
        </td>
    </tr>
    <tr>
        <th colspan="4" style="text-align: left">
            Shipping
        </th>
        <td style="text-align: right">
            ${{ number_format($order['shipping_cost'], 2) }}
        </td>
    </tr>
    <tr style="font-size: 24px">
        <th colspan="4" style="text-align: left">
            Total
        </th>
        <td style="text-align: right">
            ${{ number_format($order['grand_total'], 2) }}
        </td>
    </tr>
    </tbody>
</table>

</body>
</html>




