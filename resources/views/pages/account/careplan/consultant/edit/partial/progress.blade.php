<form action="{{ route('account.careplan.updateConsulting', [ 'plan' => $careplan->id, 'consultation' => $consultant_data->id]) }}" method="POST" id="careplan">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-12 col-sm-12">
        <div class="panel panel-primary medlab_panel">
            <div class="panel-heading medlab_panel_title">
                <h3 class="panel-title pull-left">
                    Consultant Input: Progress
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

                                <label>Progress</label><br />
                                <textarea name="progress" rows="2" cols="20" id="progress" class="form-control">{{ $consultant_data->progress }}</textarea>

                                <label>Source</label><br />
                                <textarea name="source" rows="2" cols="20" id="source" class="form-control">{{ $consultant_data->source }}</textarea>

                                <input type="submit" name="_Btnnext" value="Save" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
