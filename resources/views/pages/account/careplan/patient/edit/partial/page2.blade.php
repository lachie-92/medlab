
    <form action="{{ isset($careplan)?route('account.careplan.update', $careplan->id):route('account.careplan.store') }}" method="POST" id="careplan">
        @if (!isset($readOnly))
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page" value="2">
        @endif
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <h3 class="panel-title pull-left">
                        Care Plan &mdash; Page 2
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12" style="background-color: transparent; background-image: none">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label style="color: #1E5494">
                                        <h4>Emergency contacts and plan if client does not respond to scheduled visit</h4>
                                        <p><strong>Expected Outcome:</strong> A risk management approach will be taken prioritising the client's safety, should there be an emergency or the client does not respond to a scheduled home visit.
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-3">
                                    <label>
                                        1st Contact
                                    </label>
                                </div>
                                <div class="col-md-4 col-sm-9">
                                    <input name="emergency_c1name" type="text" value="{{ array_get($intake, 'emergency_c1name') }}" id="emergency_c1name" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <label>Relationship:</label>
                                </div>
                                <div class="col-md-4 col-sm-9">
                                    <input name="emergency_c1relationship" type="text" value="{{ array_get($intake, 'emergency_c1relationship') }}" id="emergency_c1relationship" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <label>
                                        2nd Contact
                                    </label>
                                </div>
                                <div class="col-md-4 col-sm-9">
                                    <input name="emergency_c2name" type="text" value="{{ array_get($intake, 'emergency_c2name') }}" id="emergency_c2name" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <label>Relationship:</label>
                                </div>
                                <div class="col-md-4 col-sm-9">
                                    <input name="emergency_c2relationship" type="text" value="{{ array_get($intake, 'emergency_c2relationship') }}" id="emergency_c2relationship" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label>Specific Instructions</label><br />
                                    <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="emergency_instructions" rows="2" cols="20" id="emergency_instructions" class="form-control">{{ array_get($intake, 'emergency_instructions') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (!isset($readOnly))
                <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-1 col-sm-1">
                        <a href="{{ route('account.careplan.edit', ['careplan' => $careplan, 'page' => $page-1]) }}" name="_btnprevious" value="Back" id="ContentPlaceHolder1_btnprevious" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-sm-10 col-sm-10">
                    </div>
                    <div class="col-sm-1 col-sm-1">
                        <input type="submit" name="_Btnnext" value="Next" id="ContentPlaceHolder1_Btnnext" class="btn btn-primary">
                    </div>
                </div>
                </div>
                @endif
            </div>
        </div>
    </form>

