<!-----------------------------------------------------------------------------------
--
-- Ingredient sort by name
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">

        <!--
        --  Main Column
        -->
        <div class="col-md-9 col-sm-12 col-xs-12 medlab_product_main_column">

            <!--
            --  Alphabetical sorting bar
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="container-fluid medlab_product_list_sorting_bar_container">
                    <ul class="pagination medlab_product_list_sorting_bar">
                        @foreach($ingredientList as $item => $class)
                            <li class="{{ $class }}">
                                <a href="?q={{ $item }}"> {{ $item }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!--
            --  Ingredient Listing
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                @foreach($ingredients as $ingredient)
                    @if(count($ingredient->products))
                        <div class="panel panel-primary medlab_panel">
                            <div class="panel-heading medlab_panel_title" data-toggle="collapse" data-target="#ingredient{{ $ingredient->id }}">
                                {{ strtoupper($ingredient->ingredient_name) }}
                                <a class="medlab_panel_collapse"></a>
                            </div>
                            <div class="panel-body medlab_panel_content collapse" id="ingredient{{ $ingredient->id }}">
                                @foreach($ingredient->products as $product)
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <a href="/nutraceuticals/products/{{ $product->id }}">
                                                <img alt="missing picture" src="{{ $product->thumb_image_path }}">
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <?php $promotion = $product->promotions->first(); ?>
                                            @if ($promotion)
                                                @if (Auth::guest())
                                                    @if ($promotion->isEligibleForPromotion('Patient'))
                                                        <div style="float: right; border: 1px solid blue; padding: 4px;">
                                                            {!! $promotion->description !!}
                                                        </div>
                                                    @endif
                                                @else
                                                    @if ($promotion->isEligibleForPromotion(Auth::user()->group))
                                                        <div style="float: right; border: 1px solid blue; padding: 4px;">
                                                            {!! $promotion->description !!}
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif
                                            {!! $product->short_description !!}
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="medlab_product_list_main_shopping_box">
                                                <div class="medlab_product_info_price_box">
                                                    <span class="medlab_product_info_price_box_price">
                                                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                            <span class="medlab_product_info_price_box_label">
                                                            Price:
                                                        </span>
                                                            ${!! $product->price_wholesale !!}
                                                            <span style="font-size: 12px; color: #555;">
                                                            WS
                                                        </span>
                                                        @elseif ( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                            <span class="medlab_product_info_price_box_label">
                                                            Price:
                                                        </span>
                                                            ${!! $product->price_retail !!}
                                                            <span style="font-size: 12px; color: #555;">
                                                            RRP
                                                        </span>
                                                        @else

                                                        @endif
                                                    </span>
                                                </div>

                                                @if ($product->in_stock)
                                                    <form action="/shoppingcart/update" method="post">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                        <input type="hidden" value="1" name="product_quantity">
                                                        <button class="btn btn-sm medlab_product_list_main_shopping_box_button_add" title="Add to Cart" type="submit">
                                                            <i class="fa fa-plus"></i>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                @else
                                                    <button class="btn btn-sm medlab_product_list_main_shopping_box_button_add" title="Add to Cart" type="submit" disabled>
                                                        Out of Stock
                                                    </button>
                                                @endif

                                                <button class="btn btn-info btn-sm medlab_product_list_main_shopping_box_button_info" onClick="location.href='/nutraceuticals/products/{{ $product->id }}'">
                                                    Learn More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!--
        --  Side Column
        -->
        <div class="col-md-3 col-sm-12 col-xs-12 medlab_product_side_column">

            <!--
            --  Payment method
            -->
            <div class="col-md-12 col-sm-6 col-xs-6">
                <div class="panel panel-primary medlab_panel medlab_product_list_side_bar_panel">
                    <div class="panel-body medlab_panel_content medlab_product_list_side_bar_panel_content">
                        <div class="medlab_product_list_side_bar_content_title">
                            ACCEPTED PAYMENT METHODS
                            <img width="100%" src="/img/products/shippingandpayment/payments_au.png">
                        </div>
                    </div>
                </div>
            </div>

            <!--
            --  Shipping method
            -->
            <div class="col-md-12 col-sm-6 col-xs-6">
                <div class="panel panel-primary medlab_panel medlab_product_list_side_bar_panel">
                    <div class="panel-body medlab_panel_content medlab_product_list_side_bar_panel_content">
                        <div class="medlab_product_list_side_bar_content_title">
                            OUR SHIPPING PROVIDERS
                            <img width="100%" src="/img/products/shippingandpayment/shipping_au.png">
                        </div>
                    </div>
                </div>
            </div>

            <!--
            -- No Login No Price Reminder
            -->
            @if(Auth::guest())
                <div class="col-md-12 col-sm-6 col-xs-6">
                    <div class="panel panel-primary medlab_panel medlab_product_list_side_bar_panel">
                        <div class="panel-body medlab_panel_content medlab_product_list_side_bar_panel_content">
                            <div class="medlab_product_list_side_bar_content_title"> Please <a href="/account/login">Login</a> to see the price of our products.</div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>