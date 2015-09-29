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
<form class="form-horizontal" role="form" method="POST" action="/shoppingcart/summary">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <!--
            -- Summary Box
            -->
            <div class="col-md-8 col-sm-12">
                <h3>Please Review Your Order :</h3>
                <div class="row">
                    <div class="container-fluid" style="background-color: transparent;">

                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                My Delivery Address
                            </li>
                            <li class="list-group-item" style="background-color: transparent;">
                                {{ $shoppingCart->shippingAddress['title'] }}
                                {{ $shoppingCart->shippingAddress['first_name'] }}
                                {{ $shoppingCart->shippingAddress['last_name'] }} <br>
                                {{ $shoppingCart->shippingAddress['street'] }} <br>
                                {{ $shoppingCart->shippingAddress['suburb'] }} {{ $shoppingCart->shippingAddress['state'] }} {{ $shoppingCart->shippingAddress['postcode'] }} <br>
                                {{ $shoppingCart->shippingAddress['city'] }} {{ $country[$shoppingCart->shippingAddress['country']] }} <br>
                                {{ $shoppingCart->shippingAddress['phone'] }}
                            </li>
                        </ul>

                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                My Billing Address
                            </li>
                            <li class="list-group-item" style="background-color: transparent;">
                                {{ $shoppingCart->billingAddress['title'] }}
                                {{ $shoppingCart->billingAddress['first_name'] }}
                                {{ $shoppingCart->billingAddress['last_name'] }} <br>
                                {{ $shoppingCart->billingAddress['street'] }} <br>
                                {{ $shoppingCart->billingAddress['suburb'] }} {{ $shoppingCart->billingAddress['state'] }} {{ $shoppingCart->billingAddress['postcode'] }} <br>
                                {{ $shoppingCart->billingAddress['city'] }} {{ $country[$shoppingCart->billingAddress['country']] }}
                            </li>
                        </ul>

                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                My Payment Detail
                            </li>
                            <li class="list-group-item" style="background-color: transparent;">
                                Payment Type: {{ $shoppingCart->paymentOption['type'] }} <br>
                                Card Number: <br>
                                Name on Card: <br>
                                Expiry Date: <br>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <!--
            -- Order Summary Box
            -->
            <div class="col-md-4 col-sm-12">
                @include('pages.shoppingcart._sharedpartial.ordersummary')
            </div>

        </div>

        <!--
        -- Bottom Navigation Box
        -->
        <div class="row">
            <div class="pull-left">
                <a href="/shoppingcart/payment">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Payment Option
                </a>
            </div>
            <div class="pull-right">
                <button class="btn btn-success" type="submit">
                    Pay Now <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </button>
            </div>
        </div>

    </div>
</form>