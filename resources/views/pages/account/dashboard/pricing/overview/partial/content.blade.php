@section('custom_script')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/bootstrap-slider.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/css/bootstrap-slider.min.css" />
<script type="text/javascript">
    $(document).ready(function() {
        var pricingSlider = $('#practitioner_price').slider({
            tooltip: 'always',
            formatter: function(value) {
                return value + '%';
            }
        })
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
                    <h3 class="panel-title pull-left">
                        Patient Pricing
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">

                    @if (session('message'))
                        <div class="container-fluid">
                            <div class="alert alert-success" style="text-align: center">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    @if (count($products) == 0)

                        <div class="alert alert-info" style="text-align: center">
                            No Patient Pricing
                        </div>

                    @else

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-left">Product Name</th>
                                    <th class="text-right">Wholesale Price</th>
                                    <th class="text-right">Retail Price</th>
                                    <th class="text-right">Patient Price</th>
                                    <th class="text-right">Margin</th>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td class="text-left">{{ $product->product_name }}</td>
                                    <td class="text-right">${{ number_format($product->price_wholesale, 2) }}</td>
                                    <td class="text-right">${{ number_format($product->price_retail, 2) }}</td>
                                    <td class="text-right">{{ $product->pivot?'$'.number_format($product->pivot->price_discounted, 2):'' }}</td>
                                    <td class="text-right">{{ $product->pivot?'$'.number_format($product->pivot->price_discounted - $product->price_wholesale, 2):'' }}</td>
                                    @if ($product->pivot)
                                    <td>
                                        <a href="{{ route('account.pricing.destroy', [
                                                'product' => $product->id
                                            ]) }}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('account.pricing.edit', [
                                                'product' => $product->id
                                            ]) }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                    </td>
                                    @else
                                    <td colspan="2">
                                        <a href="{{ route('account.pricing.edit', [
                                                'product' => $product->id
                                            ]) }}" class="btn btn-primary btn-block"><i class="fa fa-pencil" aria-hidden="true"></i> Set Patient Price</a>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if ($products->filter(function ($product) { return $product->pivot?false:true; })->count()>0)
                        <hr />
                        <form action="{{ route('account.pricing.saveall') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <p>Select a percent markup to define patient pricing for all unassigned products</p>
                            <br /><br />
                            <input
                                id="practitioner_price"
                                name="pricing_markup_percent"
                                type="text"
                                data-slider-id="practitioner_priceSlider"
                                data-slider-min="1"
                                data-slider-max="20"
                                data-slider-step="0.5"
                                data-slider-value="5"
                                data-slider-ticks="[0, 5, 10, 15, 20]"
                                data-slider-ticks-snap-bounds="0.25"
                                data-slider-ticks-labels='["1%", "5%", "10%", "15%", "20%"]'
                            />
                            <br /><br />
                            <button id="address_update_btn" class="btn btn-primary" type="submit">
                                Save
                            </button>

                        </form>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

