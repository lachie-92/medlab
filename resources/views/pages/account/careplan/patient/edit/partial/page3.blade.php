    <form action="{{ isset($careplan)?route('account.careplan.update', $careplan->id):route('account.careplan.store') }}" method="POST" id="careplan">
        @if (!isset($readOnly))
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page" value="3">
        @endif
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <h3 class="panel-title pull-left">
                        Care Plan &mdash; Page 3
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div>
                        <div class="row hidden-xs hidden-sm">
                            <div class="col-xs-3">Opportunties (list in order of priority)</div>
                            <div class="col-xs-3">Agreed goal (measurable)</div>
                            <div class="col-xs-3">Action/s to be taken &amp; by whom</div>
                            <div class="col-xs-3">Target date</div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Opportunty 1</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_opportunity1" rows="5" cols="20" id="careplan_opportunity1" class="form-control" placeholder="e.g. Pain in the knees — need to investigate cause and treatment options">{{ array_get($intake, 'careplan_opportunity1') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Agreed goal (measurable)</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_goal1.1" rows="2" cols="20" id="careplan_goal1.1" class="form-control" placeholder="Aunty would like to find out causes of her knee pain by the end of March">{{ array_get($intake, 'careplan_goal1.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_goal1.2" rows="2" cols="20" id="careplan_goal1.2" class="form-control" placeholder="Seek advice about treatment and/or pain relief for the knee">{{ array_get($intake, 'careplan_goal1.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Action/s to be taken &amp; by whom</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_action1.1" rows="2" cols="20" id="careplan_action1.1" class="form-control" placeholder="Action: Arrange a visito to the GP on Thursday at 10am. Who: Aunt HACC Coordinator or Aboriginal worker will provide information to the GP with Aunty's consent.">{{ array_get($intake, 'careplan_action1.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_action1.2" rows="2" cols="20" id="careplan_action1.2" class="form-control" placeholder="Action: Following the GP visit, and if appropriate, arrange an appointment with the physiotherapist at the community health centre. Who: Aunty, Aboriginal worker, HACC Coordinator">{{ array_get($intake, 'careplan_action1.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Target date</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_targetdate1.1" rows="2" cols="20" id="careplan_targetdate1.1" class="form-control" placeholder="Tuesday">{{ array_get($intake, 'careplan_targetdate1.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_targetdate1.2" rows="2" cols="20" id="careplan_targetdate1.2" class="form-control" placeholder="Date / Time">{{ array_get($intake, 'careplan_targetdate1.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 "><hr /></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Opportunty 2</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_opportunity2" rows="5" cols="20" id="careplan_opportunity2" class="form-control">{{ array_get($intake, 'careplan_opportunity2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Agreed goal (measurable)</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_goal2.1" rows="2" cols="20" id="careplan_goal2.1" class="form-control">{{ array_get($intake, 'careplan_goal2.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_goal2.2" rows="2" cols="20" id="careplan_goal2.2" class="form-control">{{ array_get($intake, 'careplan_goal2.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Action/s to be taken &amp; by whom</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_action2.1" rows="2" cols="20" id="careplan_action2.1" class="form-control">{{ array_get($intake, 'careplan_action2.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_action2.2" rows="2" cols="20" id="careplan_action2.2" class="form-control">{{ array_get($intake, 'careplan_action2.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Target date</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_targetdate2.1" rows="2" cols="20" id="careplan_targetdate2.1" class="form-control">{{ array_get($intake, 'careplan_targetdate2.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_targetdate2.2" rows="2" cols="20" id="careplan_targetdate2.2" class="form-control">{{ array_get($intake, 'careplan_targetdate2.2') }}</textarea>
                            </div>
                            <div class="col-xs-12"><hr /></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Opportunty 2</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_opportunity3" rows="5" cols="20" id="careplan_opportunity3" class="form-control">{{ array_get($intake, 'careplan_opportunity3') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Agreed goal (measurable)</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_goal3.1" rows="2" cols="20" id="careplan_goal3.1" class="form-control">{{ array_get($intake, 'careplan_goal3.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_goal3.2" rows="2" cols="20" id="careplan_goal3.2" class="form-control">{{ array_get($intake, 'careplan_goal3.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Action/s to be taken &amp; by whom</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_action3.1" rows="2" cols="20" id="careplan_action3.1" class="form-control">{{ array_get($intake, 'careplan_action3.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_action3.2" rows="2" cols="20" id="careplan_action3.2" class="form-control">{{ array_get($intake, 'careplan_action3.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Target date</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_targetdate3.1" rows="2" cols="20" id="careplan_targetdate3.1" class="form-control">{{ array_get($intake, 'careplan_targetdate3.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_targetdate3.2" rows="2" cols="20" id="careplan_targetdate3.2" class="form-control">{{ array_get($intake, 'careplan_targetdate3.2') }}</textarea>
                            </div>
                            <div class="col-xs-12"><hr /></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Opportunty 2</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_opportunity4" rows="5" cols="20" id="careplan_opportunity4" class="form-control">{{ array_get($intake, 'careplan_opportunity4') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Agreed goal (measurable)</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_goal4.1" rows="2" cols="20" id="careplan_goal4.1" class="form-control">{{ array_get($intake, 'careplan_goal4.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_goal4.2" rows="2" cols="20" id="careplan_goal4.2" class="form-control">{{ array_get($intake, 'careplan_goal4.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Action/s to be taken &amp; by whom</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_action4.1" rows="2" cols="20" id="careplan_action4.1" class="form-control">{{ array_get($intake, 'careplan_action4.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_action4.2" rows="2" cols="20" id="careplan_action4.2" class="form-control">{{ array_get($intake, 'careplan_action4.2') }}</textarea>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label class="visible-xs visible-sm">Target date</label>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_targetdate4.1" rows="2" cols="20" id="careplan_targetdate4.1" class="form-control">{{ array_get($intake, 'careplan_targetdate4.1') }}</textarea>
                                <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="careplan_targetdate4.2" rows="2" cols="20" id="careplan_targetdate4.2" class="form-control">{{ array_get($intake, 'careplan_targetdate4.2') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr />
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <label>
                                Plan developed
                            </label>
                        </div>
                        <div class="col-md-4 col-sm-9">
                            <input name="careplan_datedeveloped" type="text" value="{{ array_get($intake, 'careplan_datedeveloped') }}" id="careplan_datedeveloped" class="form-control" placeholder="mm/dd/yy" {{ isset($readOnly)?'disabled="disabled"':'' }}>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <label>Target Review date:</label>
                        </div>
                        <div class="col-md-4 col-sm-9">
                            <input name="careplan_reviewdate" type="text" value="{{ array_get($intake, 'careplan_reviewdate') }}" id="careplan_reviewdate" class="form-control" placeholder="mm/dd/yy" {{ isset($readOnly)?'disabled="disabled"':'' }}>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <label>Case Conference:</label>
                        </div>
                        <div class="col-md-4 col-sm-9">
                            <label for="careplan_caseconference_1">Yes</label>
                            <input name="careplan_caseconference" type="radio" value="1" {{ array_get($intake, 'careplan_caseconference')==1?'checked="checked"':'' }}" id="careplan_caseconference_1" {{ isset($readOnly)?'disabled="disabled"':'' }}>
                            <label for="careplan_caseconference_0">No</label>
                            <input name="careplan_caseconference" type="radio" value="0" {{ array_get($intake, 'careplan_caseconference')==0?'checked="checked"':'' }}" id="careplan_caseconference_0" {{ isset($readOnly)?'disabled="disabled"':'' }}>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <label>Service User understands and agrees to this plan:</label>
                        </div>
                        <div class="col-md-4 col-sm-9">
                            <label for="careplan_agreement_1">Yes</label>
                            <input name="careplan_agreement" type="radio" value="1" {{ array_get($intake, 'careplan_agreement')==1?'checked="checked"':'' }}" id="careplan_agreement_1" {{ isset($readOnly)?'disabled="disabled"':'' }}>
                            <label for="careplan_agreement_0">No</label>
                            <input name="careplan_agreement" type="radio" value="0" {{ array_get($intake, 'careplan_agreement')==0?'checked="checked"':'' }}" id="careplan_agreement_0" {{ isset($readOnly)?'disabled="disabled"':'' }}>
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
