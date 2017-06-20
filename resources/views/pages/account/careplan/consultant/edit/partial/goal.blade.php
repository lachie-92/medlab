@section('custom_script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <script>
        $(document).ready(function() {
            $('input.datepicker').datepicker({
            });
        });
    </script>
@endsection
<form action="{{ route('account.careplan.updateConsulting', [ 'plan' => $careplan->id, 'consultation' => $consultant_data->id]) }}" method="POST" id="careplan">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-12 col-sm-12">
        <div class="panel panel-primary medlab_panel">
            <div class="panel-heading medlab_panel_title">
                <h3 class="panel-title pull-left">
                    Consultant Input
                </h3>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12" style="background-color: transparent; background-image: none">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label>Opportunity</label><br />
                                <textarea name="opportunity" rows="2" cols="20" id="opportunity" class="form-control">{{ $consultant_data->opportunity }}</textarea>

                                <label>Goal</label><br />
                                <textarea name="goal" rows="2" cols="20" id="goal" class="form-control">{{ $consultant_data->goal }}</textarea>

                                <label>Action</label><br />
                                <textarea name="action" rows="2" cols="20" id="action" class="form-control">{{ $consultant_data->action }}</textarea>

                                <label>Target Date</label><br />
                                <input name="target" id="target" class="form-control datepicker" />

                                <input type="submit" name="_Btnnext" value="Save" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
