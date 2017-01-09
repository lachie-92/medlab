<!-----------------------------------------------------------------------------------
--
-- Products sort by Category
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">

        <!--
        --  Main Column
        -->
        <div class="col-md-9 col-sm-12 col-xs-12 medlab_product_main_column">

            <!--
            --  Category Listing
            -->
            @foreach($categories as $category)
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <a href="/nutraceuticals/categories/{{ $category->slug }}">
                        <div class="panel panel-primary medlab_panel">
                            <div class="panel-heading medlab_panel_image_title eq_height">
                                {{ strtoupper($category->category_name) }}
                            </div>
                            <div class="panel-body medlab_panel_image">
                                <img width="100%" src="{{ $category->image_path }}">
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
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
            --  Product Manual
            -->
            <div class="col-md-12 col-sm-6 col-xs-6">
                <div class="panel panel-primary medlab_panel medlab_product_list_side_bar_panel">
                    <div class="panel-body medlab_panel_content medlab_product_list_side_bar_panel_content">
                        <div class="medlab_product_list_side_bar_content_title">
                            PRACTITIONER EDUCATIONAL RESOURCE
                            <a href="/nutraceuticals/faq">
                            <img width="100%" src="/img/products/shippingandpayment/praceducationresource.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>