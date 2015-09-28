<!-----------------------------------------------------------------------------------
--
-- Shopping Cart - Shipping Address
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
<form class="form-horizontal" role="form" method="POST" action="/shoppingcart/address">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <!--
            -- Edit Shipping Address Box
            -->
            <div class="col-md-8 col-sm-12">
                <h3>Please enter your shipping address:</h3>
                <div class="row">
                    <div class="well" style="background-color: transparent; background-image: none">
                        <h4 class="medlab_registration_form_section_title">Shipping Address</h4>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Title<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            {!! Form::select('title', $titleList, old('title', $shoppingCart->shippingAddress['title']), ['class' => 'form-control']) !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">First Name<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name', $shoppingCart->shippingAddress['first_name']) }}"></td></tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Last Name<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name', $shoppingCart->shippingAddress['last_name']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Street Address<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="street_address_one" placeholder="Street" value="{{ old('street_address_one', $shoppingCart->shippingAddress['street']) }}"></td></tr>
                                    <tr><td style="padding-top: 10px;"><input type="text" class="form-control" name="street_address_two" placeholder="Suburb" value="{{ old('street_address_two', $shoppingCart->shippingAddress['suburb']) }}"></td></tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">City<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="city" placeholder="City" value="{{ old('city', $shoppingCart->shippingAddress['city']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region<span style="color: red;">*</span></th></tr>
                                    <tr>
                                        <td>
                                            @if( old('country', $shoppingCart->shippingAddress['country']) == "AU")
                                                {!! Form::select('state', $auState, old('state', $shoppingCart->shippingAddress['state']), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                            @else
                                                {!! Form::select('state', $nzRegion, old('state', $shoppingCart->shippingAddress['state']), ['class' => 'form-control', 'id' => 'state_select']) !!}
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
                                            {!! Form::select('country', $country, old('country', $shoppingCart->shippingAddress['country']), ['class' => 'form-control', 'id' => 'country_select']) !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="postcode" placeholder="Post Code" value="{{ old('postcode', $shoppingCart->shippingAddress['postcode']) }}"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <table style="width:100%;">
                                    <tr><th class="medlab_registration_form_section_subtitle">Phone<span style="color: red;">*</span></th></tr>
                                    <tr><td><input type="text" class="form-control" name="phone" placeholder="Phone Num." value="{{ old('phone', $shoppingCart->shippingAddress['phone']) }}"></td></tr>
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