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
                            <p>{{ $consultant_data->opportunity }}</p>

                            <label>Goal</label><br />
                            <p>{{ $consultant_data->goal }}</p>

                            <label>Action</label><br />
                            <p>{{ $consultant_data->action }}</p>

                            <label>Target date</label><br />
                            <p>{{ $consultant_data->target->format('d/m/Y') }}</p>
                            @if (!is_null($consultant_data->progress))
                            <label>Progress</label><br />
                            <p>{{ $consultant_data->progress }}</p>

                            <label>Source</label><br />
                            <p>{{ $consultant_data->source }}</p>
                            @endif
                            <a href="{{ route('account.careplan.index') }}" class="btn btn-primary">Back to Care Plans</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
