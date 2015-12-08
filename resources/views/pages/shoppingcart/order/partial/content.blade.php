<!-----------------------------------------------------------------------------------
--
-- Shopping Cart - Order
--
------------------------------------------------------------------------------------->

<!--
-- Order Box
-->
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Your order has been received</h3>
            </div>
            <div class="panel-body">
                <h2>
                    Thank You
                </h2>
                <div class="alert alert-success" style="text-align: center">
                    <p>
                        Your order is currently being processed and you should receive a confirmation soon.
                    </p>
                    <p>
                        Your can see your order <a href="/account/orders">here</a> at your account management page.
                    </p>
                    <p>
                        Please contact us at 1300 369 570, if you have any enquires regarding your order.
                    </p>
                </div>

                <!--
                -- Order Information
                -->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                Order Information
                            </li>
                            <li class="list-group-item" style="background-color: transparent;">
                                Order No.: {{ $order->id }} <br>
                                Order Status: {{ $order->order_status }} <br>
                                Payment Type: {{ $order->payment_type }} <br>
                                Purchase Date: {{ $order->purchase_date->toFormattedDateString() }} <br>
                                &nbsp; <br>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                Shipping Address
                            </li>
                            <li class="list-group-item" style="background-color: transparent;">
                                {{ $order->shipping_address_title }}
                                {{ $order->shipping_address_first_name }}
                                {{ $order->shipping_address_last_name }} <br>
                                {{ $order->shipping_address_street }} <br>
                                {{ $order->shipping_address_suburb }} {{ $order->shipping_address_state }} {{ $order->shipping_address_postcode }} <br>
                                {{ $order->shipping_address_city }} {{ $order->shipping_address_country }} <br>
                                Phone: {{ $order->shipping_address_phone }}
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                Billing Address
                            </li>
                            <li class="list-group-item" style="background-color: transparent;">
                                {{ $order->billing_address_title }}
                                {{ $order->billing_address_first_name }}
                                {{ $order->billing_address_last_name }} <br>
                                {{ $order->billing_address_street }} <br>
                                {{ $order->billing_address_suburb }} {{ $order->billing_address_state }} {{ $order->billing_address_postcode }} <br>
                                {{ $order->billing_address_city }} {{ $order->billing_address_country }} <br>
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                </div>

                <!--
                -- Order Items
                -->
                <div class="row">
                    <div class="container-fluid">
                        <div class="well" style="background-color: transparent; background-image: none">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Item</th>
                                    <th style="text-align: right">QTY</th>
                                    <th style="text-align: right">Price</th>
                                    <th style="text-align: right">Discount</th>
                                    <th style="text-align: right">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($order->orderedProducts as $product)

                                    <tr>
                                        <td>
                                            {{ $product->product_name }}
                                        </td>
                                        <td style="text-align: right">
                                            {{ $product->line_quantity }}
                                        </td>
                                        <td style="text-align: right">
                                            {{ $product->line_price }}
                                        </td>
                                        <td style="text-align: right">
                                            {{ $product->discount_percentage }}%
                                        </td>
                                        <td style="text-align: right">
                                            @if ($product->line_total == 0)
                                                $0.00
                                            @else
                                                ${{ number_format($product->line_total, 2) }}
                                            @endif
                                        </td>
                                    </tr>

                                @endforeach
                                <tr>
                                    <th colspan="4">
                                        Total Discount
                                    </th>
                                    <td style="text-align: right">
                                        ${{ number_format($order->discount, 2) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="4">
                                        Subtotal
                                    </th>
                                    <td style="text-align: right">
                                        ${{ number_format($order->subtotal, 2) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="4">
                                        GST
                                    </th>
                                    <td style="text-align: right">
                                        ${{ number_format($order->GST, 2) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="4">
                                        Shipping
                                    </th>
                                    <td style="text-align: right">
                                        ${{ number_format($order->shipping_cost, 2) }}
                                    </td>
                                </tr>
                                <tr class="success" style="font-size: 24px">
                                    <th colspan="4">
                                        Total
                                    </th>
                                    <td style="text-align: right">
                                        ${{ number_format($order->grand_total, 2) }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p style="text-align: center;">
                        <a class="btn btn-default btn-lg" href="/nutraceuticals/products/">Continue Shopping</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
