<!-----------------------------------------------------------------------------------
--
-- Shopping Cart - Summary
--
------------------------------------------------------------------------------------->
<!--
-- Error Box
-->
@if (count($errors) > 0)
    <div class="container" style="margin-top: 30px;">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<!--
-- Process Order Box
-->
<form id="payment-form" class="form-horizontal" role="form" method="POST" action="/shoppingcart/checkout">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="order" value="{{ $order->id }}">

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <!--
            -- Summary Box
            -->
            <div class="col-md-6 col-sm-12">
                <h3>Please Review Your Order :</h3>
                <div class="row">
                    <div class="container-fluid" style="background-color: transparent;">

                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                My Delivery Address
                            </li>
                            <li class="list-group-item">
                                {{ $order->shipping_address_title }}
                                {{ $order->shipping_address_first_name }}
                                {{ $order->shipping_address_last_name }} <br>
                                {{ $order->shipping_address_street }} <br>
                                {{ $order->shipping_address_suburb }} {{ $order->shipping_address_state }} {{ $order->shipping_address_postcode }} <br>
                                {{ $order->shipping_address_country }} <br>
                                Phone: {{ $order->shipping_address_phone }}
                            </li>
                        </ul>

                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                My Billing Address
                            </li>
                            <li class="list-group-item">
                                {{ $order->billing_address_title }}
                                {{ $order->billing_address_first_name }}
                                {{ $order->billing_address_last_name }} <br>
                                {{ $order->billing_address_street }} <br>
                                {{ $order->billing_address_suburb }} {{ $order->billing_address_state }} {{ $order->billing_address_postcode }} <br>
                                {{ $order->billing_address_country }}
                            </li>
                        </ul>

                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                Payment Option
                            </li>
                            <li class="list-group-item">
                                <div class="alert alert-info">
                                    This is a Test System. Please don't use real credit card or Paypal account.
                                    Use these test values instead:
                                    <br>
                                    <br>
                                    <ul style="list-style-type: none;">
                                        <li>American Express: 378282246310005</li>
                                        <li>Visa: 4111111111111111</li>
                                        <li>Mastercard: 5555555555554444</li>
                                        <li>Paypal: Any valid email address and password</li>
                                    </ul>
                                    <br>
                                </div>
                                <div id="braintree-container"></div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <!--
            -- Order Summary Box
            -->
            <div class="col-md-6 col-sm-12">

                <h3>&nbsp;</h3>
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
                                @if ($order->shippingCost == 0)
                                    FREE
                                @else
                                    ${{ number_format($order->shipping_cost, 2) }}
                                @endif
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

        <!--
        -- Bottom Navigation Box
        -->
        <div class="row">
            <div class="pull-left">
                <a href="/shoppingcart/address">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Address
                </a>
            </div>
            <div class="pull-right">
                <button id="button_payment" class="btn btn-success" type="submit">
                    Pay Now <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </button>
            </div>
        </div>

    </div>
</form>

