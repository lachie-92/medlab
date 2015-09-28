<h3>Order Summary</h3>
<div class="well" style="background-color: transparent; background-image: none">
    <table class="table">
        <thead>
        <tr>
            <th>Item</th>
            <th style="text-align: right">QTY</th>
            <th style="text-align: right">Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($shoppingCart->basket as $item)

            <tr>
                <td>
                    {{ $item['product']->product_name_index }}
                </td>
                <td style="text-align: right">
                    {{ $item['quantity'] }}
                </td>

                <td style="text-align: right">
                    ${{ $item['price'] }}
                </td>
            </tr>

        @endforeach
        <tr>
            <th colspan="2">
                Subtotal
            </th>
            <td style="text-align: right">
                ${{ $shoppingCart->subtotal }}
            </td>
        </tr>
        <tr>
            <th colspan="2">
                GST
            </th>
            <td style="text-align: right">
                ${{ $shoppingCart->GST }}
            </td>
        </tr>
        <tr>
            <th colspan="2">
                Shipping
            </th>
            <td style="text-align: right">
                ${{ $shoppingCart->shippingCost }}
            </td>
        </tr>
        <tr class="success" style="font-size: 24px">
            <th colspan="2">
                Total
            </th>
            <td style="text-align: right">
                ${{ $shoppingCart->total }}
            </td>
        </tr>
        </tbody>
    </table>
</div>