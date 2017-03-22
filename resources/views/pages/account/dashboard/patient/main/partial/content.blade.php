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
                    <a href="/account/orders" class="list-group-item">My Orders</a>
                    <a href="/account/patient-history" class="list-group-item">My Histories</a>
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
                    @if (count($orders) == 0)

                        <div class="alert alert-info" style="text-align: center">
                            No Order History
                        </div>

                    @else

                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="text-align: center">Order No.</th>
                                <th style="text-align: center">Recipient</th>
                                <th style="text-align: center">Date Received</th>
                                <th style="text-align: center">Order Amount</th>
                                <th style="text-align: center">Order Status</th>
                                <th style="text-align: center">Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td style="text-align: center">{{ $order->id }}</td>
                                    <td style="text-align: center">
                                        {{ $order->shipping_address_title }} {{ $order->shipping_address_first_name }} {{ $order->shipping_address_last_name }}
                                    </td>
                                    <td style="text-align: center">{{ $order->purchase_date->toFormattedDateString() }}</td>
                                    <td style="text-align: center">${{ $order->grand_total }}</td>
                                    <td style="text-align: center">{{ $order->order_status }}</td>
                                    <td style="text-align: center">
                                        <form method="POST" action="/account/orders/details">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="order" value="{{ $order->id }}">
                                            <button class="btn btn-default" type="submit">View</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @endif
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
                                    <?php $customer_address = $user->customer->customer_addresses->where('type', 'Account')->first(); ?>
                                    <?php $customer_phone = $user->customer->customer_numbers->where('type', 'Account Phone')->first(); ?>
                                    <?php $customer_mobile = $user->customer->customer_numbers->where('type', 'Account Mobile')->first(); ?>
                                    <div class="row">
                                        <h4 class="medlab_dashboard_info_section_title" style="margin-top: 20px">Contact Detail</h4>
                                        <div class="medlab_dashboard_info_item_box_top">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    @if ($customer_address)
                                                        {{ $customer_address->street }} <br>
                                                        {{ $customer_address->suburb }} {{ $customer_address->postcode }}<br>
                                                        {{ $customer_address->state }} {{ $customer_address->country }}<br>
                                                    @else
                                                        No Address Found
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_middle">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Phone:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    @if ($customer_phone)
                                                        {{ $customer_phone->number }}
                                                    @else
                                                        No Phone Number Found
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="medlab_dashboard_info_item_box_bottom">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <strong>Mobile:</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    @if ($customer_mobile)
                                                        {{ $customer_mobile->number }}
                                                    @else
                                                        No Mobile Number Found
                                                    @endif
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
                                    <?php $practitioner = $user->patient->practitioner; ?>
                                    <?php $practitioner_company_address = $practitioner->company->company_addresses->where('type', 'Physical')->first(); ?>
                                    <?php $practitioner_company_phone = $practitioner->company->company_numbers->where('type', 'Main')->first(); ?>
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

