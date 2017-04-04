    <form action="{{ isset($careplan)?route('account.careplan.update', $careplan->id):route('account.careplan.store') }}" method="POST" id="careplan">
        @if (!isset($readOnly))
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page" value="4">
        @endif
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <h3 class="panel-title pull-left">
                        Care Plan &mdash; Page 4
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <label style="color: #1E5494">
                        <h4>Review of Care Plan</h4>
                    </label>
                        <div class="row hidden-xs hidden-sm">
                            <div class="col-xs-4">Opportunity &amp; Goal</div>
                            <div class="col-xs-4">Progress</div>
                            <div class="col-xs-4">Source of information</div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Opportunty 1</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_opportunity1" rows="2" cols="20" id="review_opportunity1" class="form-control" placeholder="e.g. Pain in the knees">{{ array_get($intake, 'review_opportunity1') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Progress</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_progress1" rows="2" cols="20" id="review_progress1" class="form-control" placeholder="e.g. Aunty has had appointment with GP and understands that she is to participate in gentle exercises; she has started physiotherapy session.">{{ array_get($intake, 'review_progress1') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Source of Information</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_source1" rows="2" cols="20" id="review_source1" class="form-control" placeholder="e.g. Aunty: Aboriginal worker">{{ array_get($intake, 'review_source1') }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 "><hr /></div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Opportunty 2</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_opportunity2" rows="2" cols="20" id="review_opportunity2" class="form-control">{{ array_get($intake, 'review_opportunity2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Progress</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_progress2" rows="2" cols="20" id="review_progress2" class="form-control">{{ array_get($intake, 'review_progress2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Source of Information</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_source2" rows="2" cols="20" id="review_source2" class="form-control">{{ array_get($intake, 'review_source2') }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 "><hr /></div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Opportunty 3</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_opportunity3" rows="2" cols="20" id="review_opportunity3" class="form-control">{{ array_get($intake, 'review_opportunity3') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Progress</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_progress3" rows="2" cols="20" id="review_progress3" class="form-control">{{ array_get($intake, 'review_progress3') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Source of Information</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_source3" rows="2" cols="20" id="review_source3" class="form-control">{{ array_get($intake, 'review_source3') }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 "><hr /></div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Opportunty 4</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_opportunity4" rows="2" cols="20" id="review_opportunity4" class="form-control">{{ array_get($intake, 'review_opportunity4') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Progress</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_progress4" rows="2" cols="20" id="review_progress4" class="form-control">{{ array_get($intake, 'review_progress4') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Source of Information</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_source4" rows="2" cols="20" id="review_source4" class="form-control">{{ array_get($intake, 'review_source4') }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 "><hr /></div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Opportunty 5</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_opportunity5" rows="2" cols="20" id="review_opportunity5" class="form-control">{{ array_get($intake, 'review_opportunity5') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Progress</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_progress5" rows="2" cols="20" id="review_progress5" class="form-control">{{ array_get($intake, 'review_progress5') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Source of Information</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_source5" rows="2" cols="20" id="review_source5" class="form-control">{{ array_get($intake, 'review_source5') }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 "><hr /></div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Opportunty 6</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_opportunity6" rows="2" cols="20" id="review_opportunity6" class="form-control">{{ array_get($intake, 'review_opportunity6') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Progress</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_progress6" rows="2" cols="20" id="review_progress6" class="form-control">{{ array_get($intake, 'review_progress6') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label class="visible-xs visible-sm">Source of Information</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_source6" rows="2" cols="20" id="review_source6" class="form-control">{{ array_get($intake, 'review_source6') }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 "><hr /></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label>Supporting Documentation including Alerts / Key Considerations</label><br />
                                <p>This may include social profile, assessments, service plans, support plans, GP plans, advance care plans, emergency management plans, screening or risk alerts. List appropriate documents and source or location.</p>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="review_documentation" rows="6" cols="20" id="review_documentation" class="form-control" >{{ array_get($intake, 'review_documentation') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                @if (!isset($readOnly))
                <div class="panel-footer">
                    <br>
                    <div class="row">
                        <div class="col-ms-1 col-sm-1">
                            <a href="{{ route('account.careplan.edit', ['careplan' => $careplan, 'page' => $page-1]) }}" name="_btnprevious" value="Back" id="ContentPlaceHolder1_btnprevious" class="btn btn-primary">Back</a>
                        </div>
                        <div class="col-ms-10 col-sm-10">
                        </div>
                        <div class="col-ms-1 col-sm-1">
                            <input type="submit" name="_Btnnext" value="Finish" id="Btnnext" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </form>

