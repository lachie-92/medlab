<!-----------------------------------------------------------------------------------
--
-- Shopping Cart - Payment
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
<form id="payment-form" class="form-horizontal" role="form" method="POST" action="/shoppingcart/payment">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="container" style="margin-top: 30px;">

        <div class="row" style="min-height: 500px">

            <div class="col-md-8 col-sm-12">

                <h3>Please choose a Payment option:</h3>

                <!--
                -- Payment by PayPal
                -->
                <div class="row">
                    <div class="panel panel-default" style="background-color: transparent;">
                        <div class="panel-heading" data-toggle="collapse" data-target="#paypal_box" data-payment-option="payment_option_paypal">

                            <div class="radio">
                                <label>
                                    <input id="payment_option_paypal" type="radio" name="payment_option" value="paypal">
                                    <img class="image-responsive" src="/img/shoppingcart/paypal.png">
                                </label>
                            </div>

                        </div>
                        <div id="paypal_box" class="panel-body collapse">
                            Click on continue and you will be redirected to a PayPal secure page to confirm your payment.
                        </div>
                    </div>
                </div>


                <!--
                -- Payment by Visa
                -->
                <div class="row">
                    <div class="panel panel-default" style="background-color: transparent;">
                        <div class="panel-heading" data-toggle="collapse" data-target="#visa_box" data-payment-option="payment_option_visa">

                            <div class="radio">
                                <label>
                                    <input id="payment_option_visa" type="radio" name="payment_option" value="visa">
                                    <img class="image-responsive" src="/img/shoppingcart/visa.png">
                                </label>
                            </div>

                        </div>
                        <div id="visa_box" class="panel-body collapse">

                            <div class="container-fluid">

                                <!--
                                -- Credit Card Box
                                -->
                                <div class="row">
                                    <div id="payment_error_box" class="alert alert-danger" ></div>
                                    <h4 class="medlab_registration_form_section_title">Enter your Payment Detail</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">Card Number<span style="color: red;">*</span></th></tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" size="20" maxlength="20" data-stripe="number" placeholder="Card Number" value="4242424242424242">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:25%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">Security Code<span style="color: red;">*</span></th></tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" size="4" maxlength="4" data-stripe="cvc" placeholder="CVC" value="123">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">Expiry Month<span style="color: red;">*</span></th></tr>
                                                <tr>
                                                    <td>
                                                        {!! Form::select(null, $monthList, null, ['class' => 'form-control', 'data-stripe' => 'exp-month']) !!}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">Expiry Year<span style="color: red;">*</span></th></tr>
                                                <tr>
                                                    <td>
                                                        {!! Form::select(null, $yearList, null, ['class' => 'form-control', 'data-stripe' => 'exp-year']) !!}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <!--
                                -- Billing Address Box
                                -->
                                <div class="row">

                                    <h4 class="medlab_registration_form_section_title">Billing Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">Title<span style="color: red;">*</span></th></tr>
                                                <tr>
                                                    <td>
                                                        {!! Form::select('title', $titleList, old('title', $shoppingCart->billingAddress['title']), ['class' => 'form-control']) !!}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">First Name<span style="color: red;">*</span></th></tr>
                                                <tr><td><input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name', $shoppingCart->billingAddress['first_name']) }}"></td></tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">Last Name<span style="color: red;">*</span></th></tr>
                                                <tr><td><input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name', $shoppingCart->billingAddress['last_name']) }}"></td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">Street Address<span style="color: red;">*</span></th></tr>
                                                <tr><td><input type="text" class="form-control" name="street_address_one" placeholder="Street" value="{{ old('street_address_one', $shoppingCart->billingAddress['street']) }}"></td></tr>
                                                <tr><td style="padding-top: 10px;"><input type="text" class="form-control" name="street_address_two" placeholder="Suburb" value="{{ old('street_address_two', $shoppingCart->billingAddress['suburb']) }}"></td></tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">City<span style="color: red;">*</span></th></tr>
                                                <tr><td><input type="text" class="form-control" name="city" placeholder="City" value="{{ old('city', $shoppingCart->billingAddress['city']) }}"></td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">State/Region<span style="color: red;">*</span></th></tr>
                                                <tr>
                                                    <td>
                                                        @if( old('country', $shoppingCart->billingAddress['country']) == "AU")
                                                            {!! Form::select('state', $auState, old('state', $shoppingCart->billingAddress['state']), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                                        @else
                                                            {!! Form::select('state', $nzRegion, old('state', $shoppingCart->billingAddress['state']), ['class' => 'form-control', 'id' => 'state_select']) !!}
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
                                                        {!! Form::select('country', $country, old('country', $shoppingCart->billingAddress['country']), ['class' => 'form-control', 'id' => 'country_select']) !!}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <table style="width:100%;">
                                                <tr><th class="medlab_registration_form_section_subtitle">Post Code<span style="color: red;">*</span></th></tr>
                                                <tr><td><input type="text" class="form-control" name="postcode" placeholder="Post Code" value="{{ old('postcode', $shoppingCart->billingAddress['postcode']) }}"></td></tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>

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
                <a href="/shoppingcart/address">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Shipping Address
                </a>
            </div>
            <div class="pull-right">
                <button id="button_payment" class="btn btn-success" type="submit">
                    Proceed to the Summary page<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </button>
            </div>
        </div>

    </div>
</form>