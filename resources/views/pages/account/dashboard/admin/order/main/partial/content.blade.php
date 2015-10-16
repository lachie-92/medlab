<!-----------------------------------------------------------------------------------
--
-- Admin Order
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
                    Administrator
                </div>

                <div class="list-group">
                    <a href="/account/patient-registration" class="list-group-item">
                        @if (count($patientRegistrationList))
                            Patient Registration ({{ count($patientRegistrationList) }})
                        @else
                            Patient Registration
                        @endif
                    </a>
                    <a href="/account/practitioner-registration" class="list-group-item">
                        @if (count($practitionerRegistrationList))
                            Practitioner Registration ({{ count($practitionerRegistrationList) }})
                        @else
                            Practitioner Registration
                        @endif
                    </a>
                    <a href="/account/admin-orders" class="list-group-item">
                        <strong>
                            @if (count($newOrderList))
                                Order Management ({{ count($newOrderList) }})
                            @else
                                Order Management
                            @endif
                        </strong>
                    </a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">

            @if (session('message'))
                <div class="container-fluid">
                    <div id="message_fade" class="alert alert-success" style="text-align: center">
                        {{ session('message') }}
                    </div>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--
            -- Orders
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Order Management
                </div>
                <div class="panel-body">

                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($orderCollection as $orderType => $orders )
                                @if ($display == $orderType)
                                    <li role="presentation" class="active"><a href="#{{ $orderType }}" role="tab" data-toggle="tab">{{ ucfirst($orderType) }}</a></li>
                                @else
                                    <li role="presentation"><a href="#{{ $orderType }}" role="tab" data-toggle="tab">{{ ucfirst($orderType) }}</a></li>
                                @endif
                            @endforeach
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            @foreach ($orderCollection as $orderType => $orders )

                                @if ($display == $orderType)
                                    <div role="tabpanel" class="tab-pane active" id="{{ $orderType }}">
                                @else
                                    <div role="tabpanel" class="tab-pane" id="{{ $orderType }}">
                                @endif

                                @if (count($orders) == 0)

                                    <br>
                                    <div class="alert alert-info" style="text-align: center">
                                        No Orders found
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
                                                <td style="text-align: center; vertical-align: middle;">{{ $order->id }}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    {{ $order->shipping_address_title }} {{ $order->shipping_address_first_name }} {{ $order->shipping_address_last_name }}
                                                </td>
                                                <td style="text-align: center; vertical-align: middle;">{{ $order->purchase_date->toFormattedDateString() }}</td>
                                                <td style="text-align: center; vertical-align: middle;">${{ number_format($order->grand_total, 2) }}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <form method="POST" action="/account/admin-orders/update">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="order" value="{{ $order->id }}">
                                                        {!! Form::select('order_status', $orderStatusList, old('order_status', $order->order_status), ['class' => 'btn btn-default btn-sm', 'style' => 'padding-left: 3px; padding-right: 3px']) !!}
                                                        &nbsp;<button class="btn btn-default" type="submit">Update</button>
                                                    </form>
                                                </td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <form method="POST" action="/account/admin-orders/details">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="order" value="{{ $order->id }}">
                                                        <button class="btn btn-default" type="submit">View</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {!! $orders->render() !!}
                                @endif

                            </div>

                            @endforeach

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

