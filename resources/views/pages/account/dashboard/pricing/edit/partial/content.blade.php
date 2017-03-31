@section('custom_script')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/bootstrap-slider.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/css/bootstrap-slider.min.css" />
<script type="text/javascript">
    $(document).ready(function() {
        $('#practitioner_price').slider({
            tooltip: 'always',
            formatter: function(value) {
                return '$' + value;
            }
        });
    })
</script>
@endsection
<!-----------------------------------------------------------------------------------
--
-- View Practitioner Pricing Overview
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Account Navigation
        -->
        <div class="col-md-3 col-sm-3 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    My Account
                </div>

                <div class="list-group">
                    <a href="/account" class="list-group-item">Dashboard</a>
                    <a href="/account/edit" class="list-group-item">Edit Account Details</a>
                    <a href="/account/orders" class="list-group-item">My Orders</a>
                    <a href="/account/patient-history" class="list-group-item">My Histories</a>
                    <a href="/account/careplan" class="list-group-item">My Care Plans</a>
                    <a href="/account/pricing" class="list-group-item"><strong>Patient Pricing</strong></a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">
            <!--
            -- Orders Information List
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <div class="panel-title">
                        Patient Pricing: {{ $product->product_name }}
                    </div>
                </div>
                <div class="panel-body">

                    @if (session('message'))
                        <div class="container-fluid">
                            <div class="alert alert-success" style="text-align: center">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    <div class="col-md-12 col-sm-12">
                        <div class="well" style="background-color: transparent; background-image: none">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('account.pricing.save', compact('product')) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <input
                                            id="practitioner_price"
                                            name="pricing_discounted"
                                            type="text"
                                            data-slider-id="practitioner_priceSlider"
                                            data-slider-min="{{ $product->price_wholesale }}"
                                            data-slider-max="{{ $product->price_retail * 1.2 }}"
                                            data-slider-step="0.01"
                                            data-slider-value="{{ $product->practitioner_pricing->count()>0?$product->practitioner_pricing->first()->pivot->price_discounted:$product->price_retail }}"
                                            data-slider-ticks="[{{ number_format($product->price_wholesale, 2) }}, {{ number_format($product->price_retail, 2) }}, {{ number_format($product->price_retail * 1.2, 2) }}]"
                                            data-slider-ticks-snap-bounds="1.0"
                                            data-slider-ticks-labels='["Wholesale", "Retail", "Max"]'
                                            data-slider-ticks-positions="[0, 75, 100]"
                                        />
                                    </div>
                                </div>
                                <br /><br />
                                <button id="address_update_btn" class="btn btn-primary" type="submit">
                                    Save
                                </button>
                                <a href="{{ route('account.pricing.index') }}" class="btn btn-default">
                                    Cancel
                                </a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

