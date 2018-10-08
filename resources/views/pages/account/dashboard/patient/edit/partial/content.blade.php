<!-----------------------------------------------------------------------------------
--
-- Edit My Account Details
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Account Navigation
        -->
        <div class="col-md-3 col-sm-3 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    My Account
                </div>

                <div class="list-group">
                    <a href="/account" class="list-group-item">Dashboard</a>
                    <a href="/account/edit" class="list-group-item"><strong>Edit Account Details</strong></a>
                    <a href="/account/orders" class="list-group-item">My Orders</a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">
            <!--
            -- Edit Account Information
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    My Account Information
                </div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="container-fluid">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if (session('message'))
                        <div class="container-fluid">
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="container-fluid">

                            <!--
                            -- Edit Personal Detail Box
                            -->
                            <div class="col-md-6 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <form class="form-horizontal" role="form" method="POST" action="/account/edit/email">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <h4 class="medlab_dashboard_info_section_title">Account</h4>
                                            <div class="input-group medlab_account_detail_edit_input_group">
                                                <span class="input-group-addon medlab_account_detail_edit_input_group_label">
                                                    Name
                                                </span>
                                                <input disabled class="form-control" type="text" name="name" placeholder="Name" value="{{ $user->customer->name }}"/>
                                            </div>
                                            <div class="input-group medlab_account_detail_edit_input_group">
                                                <span class="input-group-addon medlab_account_detail_edit_input_group_label">
                                                    Email
                                                </span>
                                                    <input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email', $user->email) }}"/>
                                                <span class="input-group-btn">
                                                    <button id="email_update_btn" class="btn btn-default" type="submit">Update</button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="alert alert-info" style="margin-top: 23px; margin-bottom: 0px; text-align: center">
                                        Please contact our staff at 1300 369 570 for updating and changing your name.
                                    </div>
                                </div>
                            </div>

                            <!--
                            -- Practitioner Information Box
                            -->
                            <?php $practitioner = $user->patient->practitioner; ?>
                            <?php $practitioner_company_address = $practitioner->company->company_addresses->where('type', 'Physical')->first(); ?>
                            <?php $practitioner_company_phone = $practitioner->company->company_numbers->where('type', 'Main')->first(); ?>
                            <div class="col-md-6 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <div class="row">
                                        <h4 class="medlab_dashboard_info_section_title">Practitioner Information</h4>
                                        <div class="medlab_dashboard_info_item_box_top">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Practitioner:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $practitioner->user->customer->title }} {{ $practitioner->user->customer->name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_middle">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Clinic:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $practitioner->company->name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_middle">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    @if ($practitioner_company_address)
                                                        {{ $practitioner_company_address->street }} <br>
                                                        {{ $practitioner_company_address->suburb }} {{ $practitioner_company_address->postcode }}<br>
                                                        {{ $practitioner_company_address->state }} {{ $practitioner_company_address->country }}<br>
                                                    @else
                                                        No Address Found
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_bottom">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Phone:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    @if ($practitioner_company_phone)
                                                        {{ $practitioner_company_phone->number }}
                                                    @else
                                                        No Phone Number Found
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--
                            -- Newsletter Box
                            -->
                            <div class="col-md-12 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <form class="form-horizontal" role="form" method="POST" action="/account/edit/newsletter">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <h4 class="medlab_dashboard_info_section_title">Newsletter Subscription</h4>
                                            <div class="col-md-9 col-sm-9">
                                                <span style="line-height: 40px">
                                                    Sign up if you would like to receive occasional news from us.
                                                    &nbsp;&nbsp;&nbsp;
                                                </span>
                                                {!! Form::hidden('newsletter', 0) !!}
                                                {!! Form::checkbox('newsletter', 1, $user->newsletter_subscription) !!}
                                            </div>
                                            <div class="col-md-2 col-md-offset-1 col-sm-2 col-md-offset-1">
                                                <button id="news_update_btn" class="btn btn-default" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!--
                            -- Password Box
                            -->
                            <div class="col-md-12 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <form class="form-horizontal" role="form" method="POST" action="/account/edit/password">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <h4 class="medlab_dashboard_info_section_title">Change Password</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Current Password</th></tr>
                                                    <tr><td><input type="password" class="form-control" name="password" placeholder="Password"></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">New Password</th></tr>
                                                    <tr><td><input type="password" class="form-control" name="new_password" placeholder="New Password"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Confirm New Password</th></tr>
                                                    <tr><td><input type="password" class="form-control" name="new_password_confirmation" placeholder="New Password"></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <button id="address_update_btn" class="btn btn-default btn-block" type="submit" style="margin-top: 20px">
                                            Change Password
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!--
                            -- Edit Address Box
                            -->
                            <?php $customer_address = $user->customer->customer_addresses->where('type', 'Account')->first(); ?>
                            <?php $customer_phone = $user->customer->customer_numbers->where('type', 'Account Phone')->first(); ?>
                            <?php $customer_mobile = $user->customer->customer_numbers->where('type', 'Account Mobile')->first(); ?>
                            <div class="col-md-12 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <form class="form-horizontal" role="form" method="POST" action="/account/edit/address">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <h4 class="medlab_registration_form_section_title">Default Shipping Address</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Street Address</th></tr>
                                                    @if ($customer_address)
                                                        <tr><td><input type="text" class="form-control" name="street_address_one" placeholder="Street" value="{{ old('street_address_one', $customer_address->street) }}"></td></tr>
                                                    @else
                                                        <tr><td><input type="text" class="form-control" name="street_address_one" placeholder="Street" value="{{ old('street_address_one') }}"></td></tr>
                                                    @endif
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Suburb</th></tr>
                                                    @if ($customer_address)
                                                        <tr><td><input type="text" class="form-control" name="street_address_two" placeholder="Suburb" value="{{ old('street_address_two', $customer_address->suburb) }}"></td></tr>
                                                    @else
                                                        <tr><td><input type="text" class="form-control" name="street_address_two" placeholder="Suburb" value="{{ old('street_address_two') }}"></td></tr>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region</th></tr>
                                                    <tr>
                                                        <td>
                                                            @if ($customer_address)
                                                                @if( (old('country', $customer_address->country)) == "Australia")
                                                                    {!! Form::select('state', $auState, old('state', $customer_address->state), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                                                @else
                                                                    {!! Form::select('state', $nzRegion, old('state', $customer_address->state), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                                                @endif
                                                            @else
                                                                @if( (old('country')) == "Australia")
                                                                    {!! Form::select('state', $auState, old('state'), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                                                @elseif( (old('country')) == "New Zealand")
                                                                    {!! Form::select('state', $nzRegion, old('state'), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                                                @else
                                                                    {!! Form::select('state', $auState, old('state'), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                                                @endif
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Country</th></tr>
                                                    <tr>
                                                        <td>
                                                            @if ($customer_address)
                                                                {!! Form::select('country', $country, old('country', $customer_address->country), ['class' => 'form-control', 'data-change-state' => 'state_select']) !!}
                                                            @else
                                                                {!! Form::select('country', $country, old('country'), ['class' => 'form-control', 'data-change-state' => 'state_select']) !!}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code</th></tr>
                                                    @if ($customer_address)
                                                        <tr><td><input type="text" class="form-control" name="postcode" placeholder="Post Code" value="{{ old('postcode', $customer_address->postcode) }}"></td></tr>
                                                    @else
                                                        <tr><td><input type="text" class="form-control" name="postcode" placeholder="Post Code" value="{{ old('postcode') }}"></td></tr>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Telephone</th></tr>
                                                    @if ($customer_phone)
                                                        <tr><td><input type="text" class="form-control" name="telephone" placeholder="Phone Num." value="{{ old('telephone', $customer_phone->number) }}"></td></tr>
                                                    @else
                                                        <tr><td><input type="text" class="form-control" name="telephone" placeholder="Phone Num." value="{{ old('telephone') }}"></td></tr>
                                                    @endif
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Mobile Phone</th></tr>
                                                    @if ($customer_mobile)
                                                        <tr><td><input type="text" class="form-control" name="mobile_phone" placeholder="Mobile Num." value="{{ old('mobile_phone', $customer_mobile->number) }}"></td></tr>
                                                    @else
                                                        <tr><td><input type="text" class="form-control" name="mobile_phone" placeholder="Mobile Num." value="{{ old('mobile_phone') }}"></td></tr>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                        <button id="address_update_btn" class="btn btn-default btn-block" type="submit" style="margin-top: 20px">
                                            Update Address
                                        </button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

