@section('custom_script')
<script>
$('.nav-tabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
</script>
@endsection
<!--

 {!! $product->product_name_index !!}

-->
<div class="container medlab_panel_container product">
    <div class="row">
        <div class="col-xs-12">
            <h1>{{ $product->product_name }}</h1>
        </div>
    </div>
    <div class="row equal-height">
        <div class="col-xs-12 col-md-8" >
            <h4>{{ strip_tags($product->short_description) }}</h4>
        </div>
        <div class="col-xs-12 col-md-4 text-right" style="margin-top:auto">
            105gm &amp; 210gm powder
        </div>
    </div>
    <hr />
    <div class="row">

        <!--
            Main Column
        -->
        <div class="col-md-8 col-sm-12 col-xs-12">


            <!--
                ARGT L Number
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
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
            @endif

            <!--
                Patent Box
            -->
            {!! $product->patent !!}


            <!--
                Clinical Summary
            -->
            <p>
                <strong><em>General Use:</em></strong>
            </p>

            {!! $product->general_summary !!}

            <div>
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a></li>
                    <li role="presentation"><a href="#ingredients" aria-controls="ingredients" role="tab" data-toggle="tab">Ingredients</a></li>
                    <li role="presentation"><a href="#dose" aria-controls="dose" role="tab" data-toggle="tab">Dose</a></li>
                    @if ((Auth::guest() == false) && (Auth::user()->group == 'Practitioner') && (ctype_space($product->side_effects) == false))
                    <li role="presentation"><a href="#warnings" aria-controls="warnings" role="tab" data-toggle="tab">Warnings</a></li>
                    @endif
                    <li role="presentation"><a href="#clinicaltrials" aria-controls="clinicaltrials" role="tab" data-toggle="tab">Clinical Trials</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="features">{!! $product->features !!}</div>
                    <div role="tabpanel" class="tab-pane" id="ingredients">{!! $product->ingredients !!}</div>
                    <div role="tabpanel" class="tab-pane" id="dose">{!! $product->dosage_information !!}</div>
                    @if ((Auth::guest() == false) && (Auth::user()->group == 'Practitioner') && (ctype_space($product->side_effects) == false))
                    <div role="tabpanel" class="tab-pane" id="warnings">{!! $product->side_effects !!}</div>
                    @endif
                    <div role="tabpanel" class="tab-pane" id="clinicaltrials">{!! $product->clinical_trials !!}</div>
                </div>
            </div>
            @if ((Auth::guest() == false) && (Auth::user()->group == 'Practitioner'))
            <br /><br />
            <div>
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#practitionerinformation" aria-controls="practitionerinformation" role="tab" data-toggle="tab">Practitioner Information</a></li>
                    @if ((Auth::guest() == false) && (Auth::user()->group == 'Practitioner') && (ctype_space($product->interactions) == false))
                    <li role="presentation"><a href="#interactions" aria-controls="interactions" role="tab" data-toggle="tab">Interactions</a></li>
                    @endif
                    <li role="presentation"><a href="#education" aria-controls="education" role="tab" data-toggle="tab">Education</a></li>
                    <li role="presentation"><a href="#productfaq" aria-controls="productfaq" role="tab" data-toggle="tab">Product FAQ</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="practitionerinformation">{!! $product->practitioner_summary !!}</div>
                    @if ((Auth::guest() == false) && (Auth::user()->group == 'Practitioner') && (ctype_space($product->interactions) == false))
                    <div role="tabpanel" class="tab-pane" id="interactions">{!! $product->interactions !!}</div>
                    @endif
                    <div role="tabpanel" class="tab-pane" id="education">{!! $product->education !!}</div>
                    <div role="tabpanel" class="tab-pane" id="productfaq">{!! $product->productfaq !!}</div>
                </div>
            </div>
            @endif

            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )

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

            @endif

            <!--
                References (Disabled)
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') && false)
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        REFERENCES
                    </div>
                    <div class="panel-body medlab_panel_content">

                        {!! $product->references !!}

                    </div>
                </div>
            @endif

            <!--
                Technical Button
            -->
            @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                    <div class="panel panel-primary medlab_panel">
                        <div class="panel-heading medlab_panel_title">
                            PRACTITIONER INFORMATION
                        </div>
                        <div class="col-md-offset-2 col-sm-offset-2">
                            <div class="panel-body medlab_panel_content" style="text-align: justify">

                                <button type="button" class="btn btn-primary practitioner_info_btn" link="/education/practitioner-education/{{ $product->slug }}">IMPORTANT PRACTITIONER EDUCATIONAL INFORMATION HERE</button>

                            </div>
                        </div>
                    </div>
                @endif



        </div>

        <!--
            Side Column
        -->
        <div class="col-md-4 col-sm-12 col-xs-12 medlab_product_side_column">

            <!--
                Free from
            -->
            <div class="panel panel-primary medlab_panel medlab_freefrom_panel">
                <div class="panel-body medlab_panel_content">
                    {!! $product->free_from !!}
                </div>
            </div>

            <!--
                Image Box
            -->
            <div class="panel-body medlab_panel_content">
                <a class="product_modal_link" href="#">
                    <img class="product_image" alt="{!! $product->product_name !!}" src="{!! $product->image_path !!}" width="100%"/>
                </a>
            </div>

            <!--
                Product Info Box
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-body medlab_panel_content">
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
                                <?php $active_discount_promotions = $product->promotions->where('isActive', 1)->filter(function ($item) {    return \Carbon\Carbon::now()->gte(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->starting_date)) && \Carbon\Carbon::now()->lte(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->end_date)); })->where('type', 'price_discount'); ?>
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
                                ${!! round($product->price_retail*11/10, 2) !!}
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

            <!--
                CMI
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">Conditions Associated</div>
                <div class="panel-body medlab_panel_content">{!! $product->conditions_associated !!}</div>
            </div>

            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">Additional Resources</div>
                <div class="panel-body medlab_panel_content">{!! $product->additional_resources !!}</div>
            </div>

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

        </div>

    </div>
</div>
