<!-----------------------------------------------------------------------------------
--
-- {!! $product->product_name_index !!}
--
------------------------------------------------------------------------------------->
<div class="container medlab_panel_container">
    <div class="row">

        <!--
        --  Main Column
        -->
        <div class="col-md-8 col-sm-12 col-xs-12 medlab_product_main_column">

            <!--
            --  Image Box
            -->
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-body medlab_panel_content">
                        <a id="product_modal_link" href="#">
                            <img id="product_image" alt="{!! $product->product_name !!}" src="{!! $product->image_path !!}" width="100%"/>
                        </a>
                    </div>
                </div>
            </div>

            <!--
            --  Product Info Box
            -->
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-body medlab_panel_content">

                        <h2 class="medlab_product_info_title">{!! strtoupper($product->product_name) !!}</h2>

                        @foreach ($product->promotions as $promotion)
                            @if (Auth::guest() == false)
                                @if ($promotion->isEligibleForPromotion(Auth::user()->group))
                                    <div class="alert alert-success" role="alert" style="margin-bottom:3px;">
                                        <b>{{ $promotion->description }}</b>
                                    </div>
                                @endif
                            @endif
                        @endforeach

                        <p>
                            Availability:
                            @if ($product->in_stock)
                                <span class="medlab_product_info_in_stock">
                                    In stock
                                </span>
                            @else
                                <span class="medlab_product_info_out_of_stock">
                                    Out of stock
                                </span>
                            @endif
                        </p>

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
                                    <div style="font-size: 15px; color: black;">Please <a href="/account/login">Login</a> to see product price and more product information.</div>
                                @endif
                            </span>
                        </div>

                        <div class="medlab_product_info_shop_box">
                            <form action="/shoppingcart/update" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                <div class="input-group">
                                    @if ($product->in_stock)
                                        <span class="input-group-addon">
                                        Qty:
                                        </span>
                                        <input id="product_quantity" name="product_quantity" class="form-control" type="text" placeholder="Quantity" title="Quantity" value="1"/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default medlab_product_info_shop_box_button" type="submit" title="Add to Cart" >Add to Cart</button>
                                        </span>
                                    @endif
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--
            --  Patent Box
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-body medlab_panel_content">

                        {!! $product->patent !!}

                    </div>
                </div>
            </div>

            <!--
            --  Clinical Summary
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        CLINICAL SUMMARY
                    </div>
                    <div class="panel-body medlab_panel_content">
                        <p>
                            <strong><em>General Use:</em></strong>
                        </p>

                        {!! $product->general_summary !!}

                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                            <p>
                                <strong><em>Specific Use:</em></strong>
                            </p>

                            {!! $product->practitioner_summary !!}
                        @endif

                    </div>
                </div>
            </div>

            <!--
            --  References
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary medlab_panel">
                        <div class="panel-heading medlab_panel_title">
                            REFERENCES
                        </div>
                        <div class="panel-body medlab_panel_content">

                            {!! $product->references !!}

                        </div>
                    </div>
                </div>
            @endif

            <!--
            --  Side effects
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary medlab_panel">
                        <div class="panel-heading medlab_panel_title">
                            SIDE EFFECTS
                        </div>
                        <div class="panel-body medlab_panel_content">

                            {!! $product->side_effects !!}

                        </div>
                    </div>
                </div>
            @endif


            <!--
            --  Interactions
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                @if (ctype_space($product->interactions) == false)
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-primary medlab_panel">
                            <div class="panel-heading medlab_panel_title">
                                INTERACTIONS
                            </div>
                            <div class="panel-body medlab_panel_content">

                                {!! $product->interactions !!}

                            </div>
                        </div>
                    </div>
                @endif
            @endif


        </div>

        <!--
        --  Side Column
        -->
        <div class="col-md-4 col-sm-12 col-xs-12 medlab_product_side_column">

            <!--
            --  Dosage information
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        DOSAGE INFORMATION
                    </div>
                    <div class="panel-body medlab_panel_content">

                        {!! $product->dosage_information !!}

                    </div>
                </div>
            </div>

            <!--
            --  Ingredients
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        INGREDIENTS
                    </div>
                    <div class="panel-body medlab_panel_content">

                        {!! $product->ingredients !!}

                    </div>
                </div>
            </div>

            <!--
            --  CMI
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        CMI
                    </div>
                    <div class="panel-body medlab_panel_content">

                        {!! $product->cmi !!}

                    </div>
                </div>
            </div>

            <!--
            --  Free from
            -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        FREE FROM
                    </div>
                    <div class="panel-body medlab_panel_content">

                        {!! $product->free_from !!}

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>