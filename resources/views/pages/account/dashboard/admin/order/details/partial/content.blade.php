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
            @include('pages.account.dashboard.admin._sharedpartial.sidenavigation',
                ['view_current_page' => 'Order'])
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">
            <!--
            -- Order Detail
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Order Details
                </div>
                <div class="panel-body">

                    <!--
                    -- Order Information
                    -->
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">
                                    Order Information
                                </li>
                                <li class="list-group-item" style="background-color: transparent;">
                                    User: {{ $order->user->customer->title }} {{ $order->user->customer->first_name }} {{ $order->user->customer->last_name }} <br>
                                    Order No.: {{ $order->id }} <br>
                                    Order Status: {{ $order->order_status }} <br>
                                    Payment Type: {{ $order->payment_type }} <br>
                                    Purchase Date: {{ $order->purchase_date->toFormattedDateString() }} <br>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">
                                    Shipping Address
                                </li>
                                <li class="list-group-item" style="background-color: transparent;">
                                    {{ $order->shipping_address_title }}
                                    {{ $order->shipping_address_first_name }}
                                    {{ $order->shipping_address_last_name }} <br>
                                    {{ $order->shipping_address_street }} <br>
                                    {{ $order->shipping_address_suburb }} {{ $order->shipping_address_state }} {{ $order->shipping_address_postcode }} <br>
                                    {{ $order->shipping_address_city }} {{ $country[$order->shipping_address_country] }} <br>
                                    Phone: {{ $order->shipping_address_phone }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">
                                    Billing Address
                                </li>
                                <li class="list-group-item" style="background-color: transparent;">
                                    {{ $order->billing_address_title }}
                                    {{ $order->billing_address_first_name }}
                                    {{ $order->billing_address_last_name }} <br>
                                    {{ $order->billing_address_street }} <br>
                                    {{ $order->billing_address_suburb }} {{ $order->billing_address_state }} {{ $order->billing_address_postcode }} <br>
                                    {{ $order->billing_address_city }} {{ $country[$order->billing_address_country] }} <br>
                                    &nbsp;
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--
                    -- Order Items
                    -->
                    <div class="row">
                        <div class="container-fluid">
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
                                            ${{ number_format($order->shipping_cost, 2) }}
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
                                <p style="text-align: center">
                                    <a class="btn btn-default" href="/account/admin-orders">Back to Manage Orders</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

