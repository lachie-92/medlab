<!-----------------------------------------------------------------------------------
--
-- Shopping Cart
--
------------------------------------------------------------------------------------->
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

<div class="container">

    @if (count($shoppingCart->basket) == 0)

        <div class="row">
            <h2>Your shopping cart is empty</h2>
        </div>
        <br>
        <div class="row">
            <a class="btn btn-default btn-lg" href="/nutraceuticals/products/">Continue Shopping</a>
        </div>

    @else

        <div class="row">
            <h2>Items in Your Basket</h2>

            <table class="table" id="cart_list">
                <thead>
                <tr>
                    <th colspan="3">Product Description</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($shoppingCart->basket as $item)

                    <tr>
                        <td width="10%" style="vertical-align: middle">
                            <a href="/nutraceuticals/products/{{ $item['product']->id }}">
                                <img class="image-responsive" height="60px" title="{{ $item['product']->product_name_index }}" alt="{{ $item['product']->product_name_index }}" src="{{ $item['product']->thumb_image_path }}">
                            </a>
                        </td>
                        <td width="10%" style="vertical-align: middle">
                            <p>
                                <a href="/nutraceuticals/products/{{ $item['product']->id }}">{{ $item['product']->product_name_index }}</a>
                            </p>
                            <form method="post" action="/shoppingcart/update">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" value="{{ $item['product']->id }}" name="product_id">
                                <input type="hidden" value="0" name="product_quantity">
                                <button type="submit" class="btn btn-default btn-xs">
                                    Remove <span class=" glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </button>
                            </form>
                        </td>
                        <td width="30%">
                            @foreach ($item['promotions'] as $promotion)
                                @include('pages.shoppingcart.cart.partial.' . $promotion['type'])
                            @endforeach
                        </td>
                        <td width="30%" style="vertical-align: middle">
                            <form method="post" action="/shoppingcart/update">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" value="{{ $item['product']->id }}" name="product_id">
                                <div class="qty_box">
                                    <button data-qty-minus-button target="product_qty_{{ $item['index'] }}" type="button">
                                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                    </button>
                                    <input id="product_qty_{{ $item['index'] }}" type="text" maxlength="2" size="1" value="{{ $item['quantity'] }}" placeholder="qty" name="product_quantity" style="text-align: center">
                                    <button data-qty-plus-button target="product_qty_{{ $item['index'] }}" type="button">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </button>
                                    <button type="submit" class="btn btn-default btn-xs" target="product_qty_{{ $item['index'] }}" style="margin-left: 15px">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </td>
                        <td width="10%" style="vertical-align: middle">
                            ${{ $item['price'] }}
                        </td>

                        <td width="10%" style="vertical-align: middle">
                            ${{ $item['total'] }}
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="pull-right">
                <table class="table" id="cart_summary">
                    <tbody>
                    <tr>
                        <th></th>
                        <th style="text-align: right">
                            Free Shipping for Order over ${{ $shoppingCart->amountRequiredForFreeShipping }}
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Subtotal
                        </th>
                        <td style="text-align: right">
                            ${{ $shoppingCart->subtotal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            GST
                        </th>
                        <td style="text-align: right">
                            ${{ $shoppingCart->GST }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Shipping
                        </th>
                        <td style="text-align: right">
                            @if ($shoppingCart->shippingCost == 0)
                                FREE
                            @else
                                ${{ $shoppingCart->shippingCost }}
                            @endif
                        </td>
                    </tr>
                    <tr class="success" style="font-size: 24px">
                        <th>
                            Total
                        </th>
                        <td style="text-align: right">
                            ${{ $shoppingCart->total }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="pull-left">
                <a href="/nutraceuticals/products/">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Continue Shopping
                </a>
            </div>
            <div class="pull-right">
                <a  class="btn btn-success" href="/shoppingcart/address">
                    Checkout <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>

    @endif
</div>


