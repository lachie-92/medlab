<!-----------------------------------------------------------------------------------
--
-- View My orders Information
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
                    <a href="/account/edit" class="list-group-item">Edit Account Details</a>
                    <a href="/account/orders" class="list-group-item"><strong>My Orders</strong></a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">
            <!--
            -- Orders Information List
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    My Orders
                </div>
                <div class="panel-body">

                    @if (session('message'))
                        <div class="container-fluid">
                            <div class="alert alert-success" style="text-align: center">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

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
                                        <td style="text-align: center">${{ number_format($order->grand_total, 2) }}</td>
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
        </div>
    </div>
</div>

