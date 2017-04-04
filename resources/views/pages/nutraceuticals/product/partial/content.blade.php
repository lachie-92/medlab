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
            --  ARGT L Number
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        <p style="text-align: center; margin-bottom:0">
                            <span style="font-size: larger">
                                {!! strtoupper($product->product_name) !!}<br>
                            </span>
                            @if ( !empty($product->austl_number) )
                                AUST L {{ $product->austl_number }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @endif

            <!--
            --  Image Box
            -->
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-body medlab_panel_content">
                        <a class="product_modal_link" href="#">
                            <img class="product_image" alt="{!! $product->product_name !!}" src="{!! $product->image_path !!}" width="100%"/>
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
                                    <?php $active_discount_promotions = $product->promotions->where('isActive', 1)->filter(function($item){ return \Carbon\Carbon::now()->gte(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->starting_date)) && \Carbon\Carbon::now()->lte(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->end_date)); })->where('type', 'price_discount') ?>
                                    @if(count($active_discount_promotions) == 1)
                                        <span style="text-decoration: line-through;">
                                            ${!! number_format($product->price_wholesale, 2) !!}
                                        </span>
                                        <span style="font-size: 12px; color: #555;">
                                            WS
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
                                    @if ($product->practitioner_pricing->count() > 0)
                                    <span title="Practitioner Pricing">
                                    ${!! round($product->practitioner_pricing->first()->pivot->price_discounted*11/10, 2) !!}
                                    </span>
                                    @else
                                    ${!! round($product->price_retail*11/10, 2) !!}
                                    @endif
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
                    <div class="panel-body medlab_panel_content" style="text-align: justify">
                        <p>
                            <strong><em>General Use:</em></strong>
                        </p>

                        {!! $product->general_summary !!}

                    </div>
                </div>
            </div>

            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary medlab_panel">
                        <div class="panel-heading medlab_panel_title">
                            @if ( $product->product_name_index == "NOS" )
                                FEATURES
                            @else
                                AS PER ARTG PUBLIC SUMMARY:
                            @endif
                        </div>
                        <div class="panel-body medlab_panel_content" style="text-align: justify">

                            {!! $product->practitioner_summary !!}

                        </div>
                    </div>
                </div>

            @endif

            <!--
            --  References (Disabled)
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') && false)
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
                @if (ctype_space($product->side_effects) == false)

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary medlab_panel">
                        <div class="panel-heading medlab_panel_title">
                            SIDE EFFECTS
                        </div>
                        <div class="panel-body medlab_panel_content" style="text-align: justify">

                            {!! $product->side_effects !!}

                        </div>
                    </div>
                </div>
                @endif
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
                            <div class="panel-body medlab_panel_content" style="text-align: justify">

                                {!! $product->interactions !!}

                            </div>
                        </div>
                    </div>
                @endif
            @endif


            <!--
            --  Technical Button
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-primary medlab_panel">
                            <div class="panel-heading medlab_panel_title">
                                PRACTITIONER INFORMATION
                            </div>
                            <div class="col-md-offset-2 col-sm-offset-2">
                                <div class="panel-body medlab_panel_content" style="text-align: justify">

                                    <button type="button" class="btn btn-primary practitioner_info_btn" link="/education/practitioner-education/{{ $product->slug }}">IMPORTANT PRACTIONER EDUCATIONAL INFORMATION HERE</button>

                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="panel-body medlab_panel_content" style="padding-bottom: 0;">

                        {!! $product->ingredients !!}

                    </div>
                </div>
            </div>

            <!--
            --  CMI
            -->

            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                @if($product->cmi !== "none")
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
                @endif
            @endif

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
