<table style="width:100%; border:2px solid black; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; text-align: center; font-size: 14px;">
    <thead>
    <tr>
        <th style="width:20%; border-bottom:2px solid black; padding:4px;">Item</th>
        <th style="width:20%; border-bottom:2px solid black; padding:4px;">QTY</th>
        <th style="width:20%; border-bottom:2px solid black; padding:4px;">Price</th>
        <th style="width:20%; border-bottom:2px solid black; padding:4px;">Discount</th>
        <th style="width:20%; border-bottom:2px solid black; padding:4px;">Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($order->orderedProducts as $product)

        <tr>
            <td style="padding:4px;">
                {{ $product->product_name }}
            </td>
            <td style="padding:4px;">
                {{ $product->line_quantity }}
            </td>
            <td style="padding:4px;">
                {{ $product->line_price }}
            </td>
            <td style="padding:4px;">
                {{ $product->discount_percentage }}%
            </td>
            <td style="padding:4px;">
                @if ($product->line_total == 0)
                    $0.00
                @else
                    ${{ number_format($product->line_total, 2) }}
                @endif
            </td>
        </tr>

    @endforeach
    <tr style="border-top: 2px black solid">
        <td colspan="2"></td>
        <th colspan="2" style="text-align: left">
            Total Discount
        </th>
        <td style="text-align: center">
            ${{ number_format($order->discount, 2) }}
        </td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <th colspan="2" style="text-align: left">
            Subtotal
        </th>
        <td style="text-align: center">
            ${{ number_format($order->subtotal, 2) }}
        </td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <th colspan="2" style="text-align: left">
            GST
        </th>
        <td style="text-align: center">
            ${{ number_format($order->GST, 2) }}
        </td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <th colspan="2" style="text-align: left">
            Shipping
        </th>
        <td style="text-align: center">
            ${{ number_format($order->shipping_cost, 2) }}
        </td>
    </tr>
    <tr style="font-size: 24px">
        <td colspan="2"></td>
        <th colspan="2" style="text-align: left">
            Total
        </th>
        <td style="text-align: center">
            ${{ number_format($order->grand_total, 2) }}
        </td>
    </tr>
    </tbody>
</table>