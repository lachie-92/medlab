        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <h3 class="panel-title pull-left">
                        Consultant data
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    @if ($careplan->consultants->count() > 0)
                        @foreach ($careplan->consultants as $consultant)
                        @if (! is_null($consultant->practitioner))
                        <div class="row">
                            <div class="col-md-12" style="background-color: transparent; background-image: none">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3>{{ $consultant->practitioner->customer->name }} data</h3>
                                    </div>
                                    <div class="col-xs-12" style="padding-bottom: 10px;">
                                        <label>Opportunity</label><br />
                                        {{{ $consultant->opportunity }}}
                                    </div>
                                    <div class="col-xs-12" style="padding-bottom: 10px;">
                                        <label>Goal</label><br />
                                        {{{ $consultant->goal }}}
                                    </div>
                                    <div class="col-xs-12" style="padding-bottom: 10px;">
                                        <label>Action</label><br />
                                        {{{ $consultant->action }}}
                                    </div>
                                    <div class="col-xs-12" style="padding-bottom: 10px;">
                                        <label>Target Date</label><br />
                                        {{ $consultant->target->format('d/m/Y') }}
                                    </div>
                                    @if (!is_null($consultant->target) && $consultant->target <= \Carbon\Carbon::now())
                                    <div class="col-xs-12" style="padding-bottom: 10px;">
                                        <label>Progress</label><br />
                                        {{{ $consultant->progress }}}
                                    </div>
                                    <div class="col-xs-12" style="padding-bottom: 10px;">
                                        <label>Source</label><br />
                                        {{{ $consultant->source }}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    @else
                        <em>None</em>
                    @endif
                </div>
            </div>
        </div>
