<!-----------------------------------------------------------------------------------
--
-- Shopping Cart - Shipping and Billing Address
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
-- New Session Introduced, prevent error by declaring
-->
<?php

    $delivery_instruction = "";
    if(array_key_exists("delivery_instruction", $shoppingCart->shippingAddress)) {
        $delivery_instruction = $shoppingCart->shippingAddress['delivery_instruction'];
    }

    $shipping_address_business_name = "";
    if(array_key_exists("business_name", $shoppingCart->shippingAddress)) {
        $shipping_business_name = $shoppingCart->shippingAddress["business_name"];
    }

    $billing_address_business_name = "";
    if(array_key_exists("business_name", $shoppingCart->billingAddress)) {
        $billing_address_business_name = $shoppingCart->billingAddress["business_name"];
    }



?>

<!--
-- Process Order Box
-->
<form class="form-horizontal" role="form" method="POST" action="/shoppingcart/address">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <!--
            -- Edit Address Box
            -->
            <div class="col-md-8 col-sm-12">
                <h3>Please enter your shipping and billing address:</h3>
                <!--
                -- Edit Shipping Address
                -->
                <div class="row">
                    <div class="well" style="background-color: transparent; background-image: none">
                        <h4 class="medlab_registration_form_section_title">Shipping Address</h4>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Title<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            {!! Form::select('shipping_title', $titleList, old('title', $shoppingCart->shippingAddress['title']), ['class' => 'form-control']) !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">First Name<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="shipping_first_name" placeholder="First Name" value="{{ old('shipping_first_name', $shoppingCart->shippingAddress['first_name']) }}"></td></tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Last Name<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="shipping_last_name" placeholder="Last Name" value="{{ old('shipping_last_name', $shoppingCart->shippingAddress['last_name']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Business Name (Optional)</th></tr>
                                    <tr><td><input type="text" class="form-control" name="shipping_business_name" value="{{ old('shipping_business_name', $shipping_address_business_name) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Street Address<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="shipping_street_address_one" placeholder="Street" value="{{ old('shipping_street_address_one', $shoppingCart->shippingAddress['street']) }}"></td></tr>
                                    <tr><td style="padding-top: 10px;"><input type="text" class="form-control" name="shipping_street_address_two" placeholder="Suburb" value="{{ old('shipping_street_address_two', $shoppingCart->shippingAddress['suburb']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            @if( old('shipping_country', $shoppingCart->shippingAddress['country']) == "New Zealand")
                                                {!! Form::select('shipping_state', $nzRegion, old('shipping_state', $shoppingCart->shippingAddress['state']), ['class' => 'form-control', 'id' => 'shipping_state_select']) !!}
                                            @else
                                                {!! Form::select('shipping_state', $auState, old('shipping_state', $shoppingCart->shippingAddress['state']), ['class' => 'form-control', 'id' => 'shipping_state_select']) !!}
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Country<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            {!! Form::select('shipping_country', $country, old('shipping_country', $shoppingCart->shippingAddress['country']), ['class' => 'form-control', 'data-change-state' => 'shipping_state_select']) !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="shipping_postcode" placeholder="Post Code" value="{{ old('shipping_postcode', $shoppingCart->shippingAddress['postcode']) }}"></td></tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Phone<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="shipping_phone" placeholder="Phone Num." value="{{ old('shipping_phone', $shoppingCart->shippingAddress['phone']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Delivery Instruction<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            {!! Form::select('delivery_instruction', $deliveryOptionList, old('delivery_instruction', $delivery_instruction), ['class' => 'form-control']) !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="alert alert-info" style="margin-top: 10px; margin-bottom: 0px; text-align: center">
                                    Signature is required upon delivery. If you will not be present, please leave
                                    authorisation to have the package left at premises unattended.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                -- Edit Billing Address
                -->
                <div class="row">
                    <div class="well" style="background-color: transparent; background-image: none">
                        <h4 class="medlab_registration_form_section_title">Billing Address</h4>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Title<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            {!! Form::select('billing_title', $titleList, old('billing_title', $shoppingCart->billingAddress['title']), ['class' => 'form-control']) !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">First Name<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="billing_first_name" placeholder="First Name" value="{{ old('billing_first_name', $shoppingCart->billingAddress['first_name']) }}"></td></tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Last Name<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="billing_last_name" placeholder="Last Name" value="{{ old('billing_last_name', $shoppingCart->billingAddress['last_name']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Business Name (Optional)</th></tr>
                                    <tr><td><input type="text" class="form-control" name="billing_business_name" value="{{ old('billing_business_name', $billing_address_business_name) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Street Address<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="billing_street_address_one" placeholder="Street" value="{{ old('billing_street_address_one', $shoppingCart->billingAddress['street']) }}"></td></tr>
                                    <tr><td style="padding-top: 10px;"><input type="text" class="form-control" name="billing_street_address_two" placeholder="Suburb" value="{{ old('billing_street_address_two', $shoppingCart->billingAddress['suburb']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            @if( old('billing_country', $shoppingCart->billingAddress['country']) == "New Zealand")
                                                {!! Form::select('billing_state', $nzRegion, old('billing_state', $shoppingCart->billingAddress['state']), ['class' => 'form-control', 'id' => 'billing_state_select']) !!}
                                            @else
                                                {!! Form::select('billing_state', $auState, old('billing_state', $shoppingCart->billingAddress['state']), ['class' => 'form-control', 'id' => 'billing_state_select']) !!}
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Country<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            {!! Form::select('billing_country', $country, old('billing_country', $shoppingCart->billingAddress['country']), ['class' => 'form-control', 'data-change-state' => 'billing_state_select']) !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="billing_postcode" placeholder="Post Code" value="{{ old('billing_postcode', $shoppingCart->billingAddress['postcode']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
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
                <a href="/shoppingcart/cart">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Shopping Cart
                </a>
            </div>
            <div class="pull-right">
                <button class="btn btn-success" type="submit">
                    Proceed to Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </button>
            </div>
        </div>

    </div>
</form>