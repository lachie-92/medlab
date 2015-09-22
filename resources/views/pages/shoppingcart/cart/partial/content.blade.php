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

    @if (count($products) == 0)

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

            <table class="table">
                <thead>
                <tr>
                    <th colspan="2">Product Description</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                <?php $iteration_index = -1 ?>

                @foreach ($products as $product)

                    <?php $iteration_index++ ?>

                    <tr>
                        <td width="10%">
                            <a href="/nutraceuticals/products/{{ $product['product']->idProduct }}">
                                <img class="image-responsive" height="60px" title="{{ $product['product']['product_name_index'] }}" alt="{{ $product['product']['product_name_index'] }}" src="{{ $product['product']['thumb_image_path'] }}">
                            </a>
                        </td>
                        <td width="40%">
                            <p>
                                <a href="/nutraceuticals/products/{{ $product['product']['idProduct'] }}">{{ $product['product']['product_name_index'] }}</a>
                            </p>
                            <form method="post" action="/shoppingcart/update">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" value="{{ $product['product']['idProduct'] }}" name="product_id">
                                <input type="hidden" value="0" name="product_quantity">
                                <button type="submit" class="btn btn-default btn-xs">
                                    Remove <span class=" glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </button>
                            </form>
                        </td>
                        <td width="30%" style="vertical-align: middle">
                            <form method="post" action="/shoppingcart/update">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" value="{{ $product['product']['idProduct'] }}" name="product_id">
                                <div class="qty_box">
                                    <button data-qty-minus-button target="product_qty_{{ $iteration_index }}" type="button">
                                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                    </button>
                                    <input id="product_qty_{{ $iteration_index }}" type="text" maxlength="2" size="1" value="{{ $product['quantity'] }}" placeholder="qty" name="product_quantity" style="text-align: center">
                                    <button data-qty-plus-button target="product_qty_{{ $iteration_index }}" type="button">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </button>
                                    <button type="submit" class="btn btn-default btn-xs" style="margin-left: 15px">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </td>
                        <td width="10%" style="vertical-align: middle">
                            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                ${!! number_format($product['product']['price_wholesale'], 2) !!}
                            @else
                                ${!! number_format($product['product']['price_retail'], 2) !!}
                            @endif
                        </td>

                        <td width="10%" style="vertical-align: middle">
                            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                ${!! number_format($product['product']['price_wholesale'] * $product['quantity'], 2) !!}
                            @else
                                ${!! number_format($product['product']['price_retail'] * $product['quantity'], 2) !!}
                            @endif
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="pull-right">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>
                            Sub Total
                        </th>
                        <td style="text-align: right">
                            ${!! number_format($subtotal, 2) !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            GST
                        </th>
                        <td style="text-align: right">
                            ${!! number_format(round($subtotal * 0.1, 2), 2) !!}
                        </td>
                    </tr>
                    <tr class="success" style="font-size: 24px">
                        <th>
                            Total
                        </th>
                        <td style="text-align: right">
                            ${!! number_format(round($subtotal * 1.1, 2), 2) !!}
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
                <a  class="btn btn-success" href="/shoppingcart/checkout">
                    Checkout <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>

    @endif
</div>