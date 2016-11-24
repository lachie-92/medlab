<!-----------------------------------------------------------------------------------
--
-- Category
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">

        <!--
        --  Main Column
        -->
        <div class="col-md-9 col-sm-12 col-xs-12 medlab_product_main_column">

            <!--
            --  Category
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        {{ strtoupper($category->category_name) }}
                    </div>
                    <div class="panel-body medlab_panel_content">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="{{ $category->image_path }}" style="max-width: 160px" class="center-block">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="text-align: justify">
                            <br>
                            {!! $category->category_description !!}
                        </div>
                    </div>
                </div>
            </div>

            <!--
            --  Alphabetical sorting bar
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="container-fluid medlab_product_list_sorting_bar_container">
                    <ul class="pagination medlab_product_list_sorting_bar">
                        @foreach($productList as $item => $class)
                            <li class="{{ $class }}">
                                <a href="?q={{ $item }}"> {{ $item }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!--
            --  Product Listing
            -->
            @if(count($products) == 0)
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="alert alert-info" role="alert">
                        There are no products matching the selection.
                    </div>
                </div>
            @else
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary medlab_panel">
                        <div class="panel-heading medlab_panel_title">
                            PRODUCTS
                        </div>
                        <div class="panel-body medlab_panel_content">
                            @foreach($products as $product)
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <a href="/nutraceuticals/products/{{ $product->slug }}">
                                            <img alt="missing picture" src="{{ $product->thumb_image_path }}" class="center-block">
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: justify">
                                        {!! $product->short_description !!}
                                        @foreach ($product->promotions as $promotion)
                                            @if (Auth::guest() == false)
                                                @if ($promotion->isEligibleForPromotion(Auth::user()->group))
                                                    <div class="alert alert-success" role="alert" style="margin-bottom:3px;">
                                                        <b>{{ $promotion->name . " - " . $promotion->description }}</b>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="medlab_product_list_main_shopping_box">
                                            <div class="medlab_product_info_price_box">
                                                <span class="medlab_product_info_price_box_price">
                                                    @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                        <span class="medlab_product_info_price_box_label">
                                                            Price:
                                                        </span>
                                                        <?php $active_discount_promotions = $product->promotions->where('isActive', 1)->filter(function($item){ return \Carbon\Carbon::now()->gte(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->starting_date)) && \Carbon\Carbon::now()->lte(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->end_date)); })->where('type', 'price_discount') ?>
                                                        @if(count($active_discount_promotions) == 1)
                                                            <span style="text-decoration: line-through;">
                                                                ${!! number_format($product->price_wholesale, 2) !!}
                                                            </span>
                                                            <span style="font-size: 12px; color: #555;">
                                                                &nbsp;WS
                                                            </span>
                                                            <br>
                                                            ${!! number_format($product->price_wholesale - $product->price_wholesale*$active_discount_promotions->first()->price_discount->discount_percentage/100, 2) !!}
                                                            <span style="font-size: 12px; color: #555;">
                                                                WS
                                                            </span>
                                                        @else
                                                            ${!! number_format($product->price_wholesale, 2) !!}
                                                            <span style="font-size: 12px; color: #555;">
                                                                WS
                                                            </span>
                                                        @endif
                                                    @elseif ( (Auth::guest() == false) && (Auth::user()->group == 'Patient') )
                                                        <span class="medlab_product_info_price_box_label">
                                                            Price:
                                                        </span>
                                                        ${!! number_format($product->price_retail*11/10, 2) !!}
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
                                                <div>
                                                    <button class="btn btn-sm medlab_product_list_main_shopping_box_button_add" title="Add to Cart" type="submit" disabled>
                                                        Out of Stock
                                                    </button>
                                                </div>
                                            @endif

                                            <button class="btn btn-info btn-sm medlab_product_list_main_shopping_box_button_info" onClick="location.href='/nutraceuticals/products/{{ $product->slug }}'">
                                                Learn More
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

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