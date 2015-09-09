<!-----------------------------------------------------------------------------------
--
-- Dashboard
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
                    <a href="/account" class="list-group-item"><strong>Dashboard</strong></a>
                    <a href="/account/edit" class="list-group-item">Edit Account Details</a>
                    <a href="/account/order" class="list-group-item">My Orders</a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">
            <!--
            -- Welcome Message
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Welcome
                </div>
                <div class="panel-body">
                    <p>
                        <strong>Hello, {{ $user->customer->name }}!</strong>
                    </p>
                    <p>
                        From your account Dashboard you have the ability to view a snapshot of your recent account
                        activity and update your account information. Select a link below to view or edit information.
                    </p>
                </div>
            </div>

            <!--
            -- Order Summary
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    My Orders
                </div>
                <div class="panel-body">
                    <div class="alert alert-info" style="text-align: center">
                        No Order History
                    </div>
                </div>
            </div>

            <!--
            -- Account Summary
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    My Account Information
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="container-fluid">
                            <!--
                            -- Left hand side box
                            -->
                            <div class="col-md-6 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <!--
                                    -- User Account
                                    -->
                                    <div class="row">
                                        <h4 class="medlab_dashboard_info_section_title">Account</h4>
                                        <div class="medlab_dashboard_info_item_box_top">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Name:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->customer->name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_middle">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Email:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->email }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_bottom">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>
                                                        Newsletter<br>
                                                        Subscription:
                                                    </strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <span style="line-height: 40px;">
                                                        @if($user->newsletter_subscription)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    -- User Address
                                    -->
                                    <div class="row">
                                        <h4 class="medlab_dashboard_info_section_title" style="margin-top: 20px">Contact Detail</h4>
                                        <div class="medlab_dashboard_info_item_box_top">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->customer->customer_addresses->where('type', 'Main Address')->first()->street }} <br>
                                                    {{ $user->customer->customer_addresses->where('type', 'Main Address')->first()->suburb }} {{ $user->customer->customer_addresses->where('type', 'Main Address')->first()->postcode }}<br>
                                                    {{ $user->customer->customer_addresses->where('type', 'Main Address')->first()->city }} <br>
                                                    {{ $user->customer->customer_addresses->where('type', 'Main Address')->first()->state }} {{ $user->customer->customer_addresses->where('type', 'Main Address')->first()->country }}<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_middle">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Phone:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->customer->customer_numbers->where('type', 'Main Number')->first()->number }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_bottom">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Mobile:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->customer->customer_numbers->where('type', 'Main Mobile Number')->first()->number }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--
                            -- Right hand side box
                            -->
                            <div class="col-md-6 col-sm-12">
                                <div class="well" style="background-color: transparent; background-image: none">
                                    <!--
                                    -- User Practitioner info
                                    -->
                                    <div class="row">
                                        <h4 class="medlab_dashboard_info_section_title">Practitioner Information</h4>
                                        <div class="medlab_dashboard_info_item_box_top">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Practitioner:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->patient->practitioner->user->customer->title }} {{ $user->patient->practitioner->user->customer->name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_middle">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Clinic:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->patient->practitioner->company->name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_middle">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->patient->practitioner->company->company_addresses->where('type', 'Main Address')->first()->street }} <br>
                                                    {{ $user->patient->practitioner->company->company_addresses->where('type', 'Main Address')->first()->suburb }} {{ $user->patient->practitioner->company->company_addresses->where('type', 'Main Address')->first()->postcode }}<br>
                                                    {{ $user->patient->practitioner->company->company_addresses->where('type', 'Main Address')->first()->city }} <br>
                                                    {{ $user->patient->practitioner->company->company_addresses->where('type', 'Main Address')->first()->state }} {{ $user->patient->practitioner->company->company_addresses->where('type', 'Main Address')->first()->country }}<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_bottom">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Phone:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    {{ $user->patient->practitioner->company->company_numbers->where('type', 'Main Number')->first()->number }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-info" style="text-align: center; margin-bottom: 10px; margin-top: 40px;">
                                        If you would like to change or update your Practitioner information. Please
                                        contact our staff at 1300 369 570.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <p style="text-align: center">
                                <a href="/account/edit" title="Change Account Information" class="btn btn-primary">
                                    Change Account Information
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

