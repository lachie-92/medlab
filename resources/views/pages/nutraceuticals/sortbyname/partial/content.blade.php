<!-----------------------------------------------------------------------------------
--
-- Product sort by name
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        PRODUCTS
                    </div>
                    <div class="panel-body medlab_panel_content">
                        @foreach($products as $product)
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="/nutraceuticals/products/{{ $product->idProduct }}">
                                        <img alt="missing picture" src="{{ $product->thumb_image_path }}">
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    {!! $product->short_description !!}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="medlab_product_list_main_shopping_box">
                                        <div class="medlab_product_info_price_box">
                                            <span class="medlab_product_info_price_box_label">
                                                Price:
                                            </span>
                                            <span class="medlab_product_info_price_box_price">
                                                @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                                                    ${!! $product->price_wholesale !!}
                                                @else
                                                    ${!! $product->price_retail !!}
                                                @endif
                                            </span>
                                            <span style="font-size: 12px; color: #555;">
                                                RRP
                                            </span>
                                        </div>
                                        <form action="" method="post">
                                            <button class="btn btn-sm medlab_product_list_main_shopping_box_button_add" title="Add to Cart" type="button">
                                                <i class="fa fa-plus"></i>
                                                Add to Cart
                                            </button>
                                        </form>
                                        <button class="btn btn-info btn-sm medlab_product_list_main_shopping_box_button_info" onClick="location.href='/nutraceuticals/products/{{ $product->idProduct }}'">
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

        </div>

    </div>
</div>