@section('custom_script')
<script type="text/javascript" src="/js/intake.js"></script>
@endsection

    <form action="{{ route('account.patient-history.update', $history->id) }}" method="POST" id="patient-history">
        @if (!isset($readOnly))
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page" value="3">
        @endif
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <h3 class="panel-title pull-left">
                        Patient History &mdash; Page 3
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div style="background-color: transparent; background-image: none">
                        <input type="hidden" name="hdid" id="hdid" value="0">

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label style="color: #1E5494">
                                    In the past last 30 days, have you had any of the following?
                                </label>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">GENERAL</label>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">NERVOUS SYSTEM</label>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">PSYCHIATRIC</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_general_weightgain" type="hidden" value="{{ array_get($intake, 'past30_general_weightgain', 0) }}" name="past30_general_weightgain" />
                                <input type="checkbox" id="_past30_general_weightgain" class="shadowCheckbox" name="_past30_general_weightgain" {{ array_get($intake, 'past30_general_weightgain')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_general_weightgain">Recent weight gain, How Much</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input name="past30_general_weightgain_amount" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="past30_general_weightgain_amount" class="form-control" value="{{ array_get($intake, 'past30_general_weightgain_amount') }}" placeholder="KG">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_nervoussystem_headaches" type="hidden" value="{{ array_get($intake, 'past30_nervoussystem_headaches', 0) }}" name="past30_nervoussystem_headaches" />
                                <input type="checkbox" id="_past30_nervoussystem_headaches" class="shadowCheckbox" name="_past30_nervoussystem_headaches" {{ array_get($intake, 'past30_nervoussystem_headaches')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_nervoussystem_headaches">Headaches</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_depression" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_depression', 0) }}" name="past30_psychiatric_depression" />
                                <input type="checkbox" id="_past30_psychiatric_depression" class="shadowCheckbox" name="_past30_psychiatric_depression" {{ array_get($intake, 'past30_psychiatric_depression')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"':
                                '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_depression">Depression</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_general_weightloss" type="hidden" value="{{ array_get($intake, 'past30_general_weightloss', 0) }}" name="past30_general_weightloss" />
                                <input type="checkbox" id="_past30_general_weightloss" class="shadowCheckbox" name="_past30_general_weightloss" {{ array_get($intake, 'past30_general_weightloss')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_general_weightloss">Recent weight loss; How Much</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input name="past30_general_weightloss_amount" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="past30_general_weightloss_amount" class="form-control" value="{{ array_get($intake, 'past30_general_weightloss_amount') }}" placeholder="KG">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_nervoussystem_dizziness" type="hidden" value="{{ array_get($intake, 'past30_nervoussystem_dizziness', 0) }}" name="past30_nervoussystem_dizziness" />
                                <input type="checkbox" id="_past30_nervoussystem_dizziness" class="shadowCheckbox" name="_past30_nervoussystem_dizziness" {{ array_get($intake, 'past30_nervoussystem_dizziness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_nervoussystem_dizziness">Dizziness</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_worries" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_worries', 0) }}" name="past30_psychiatric_worries" />
                                <input type="checkbox" id="_past30_psychiatric_worries" class="shadowCheckbox" name="_past30_psychiatric_worries" {{ array_get($intake, 'past30_psychiatric_worries')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_worries">Excessive worries</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_general_fatique" type="hidden" value="{{ array_get($intake, 'past30_general_fatique', 0) }}" name="past30_general_fatique" />
                                <input type="checkbox" id="_past30_general_fatique" class="shadowCheckbox" name="_past30_general_fatique" {{ array_get($intake, 'past30_general_fatique')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_general_fatique">Fatigue</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_nervoussystem_fainting" type="hidden" value="{{ array_get($intake, 'past30_nervoussystem_fainting', 0) }}" name="past30_nervoussystem_fainting" />
                                <input type="checkbox" id="_past30_nervoussystem_fainting" class="shadowCheckbox" name="_past30_nervoussystem_fainting" {{ array_get($intake, 'past30_nervoussystem_fainting')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"':
                                '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_nervoussystem_fainting">Fainting or loss of consciousness </label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_insomnia" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_insomnia', 0) }}" name="past30_psychiatric_insomnia" />
                                <input type="checkbox" id="_past30_psychiatric_insomnia" class="shadowCheckbox" name="_past30_psychiatric_insomnia" {{ array_get($intake, 'past30_psychiatric_insomnia')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }}
                                />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_insomnia">Difficulty falling asleep</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_general_weakness" type="hidden" value="{{ array_get($intake, 'past30_general_weakness', 0) }}" name="past30_general_weakness" />
                                <input type="checkbox" id="_past30_general_weakness" class="shadowCheckbox" name="_past30_general_weakness" {{ array_get($intake, 'past30_general_weakness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_general_weakness">Weakness</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_nervoussystem_numbness" type="hidden" value="{{ array_get($intake, 'past30_nervoussystem_numbness', 0) }}" name="past30_nervoussystem_numbness" />
                                <input type="checkbox" id="_past30_nervoussystem_numbness" class="shadowCheckbox" name="_past30_nervoussystem_numbness" {{ array_get($intake, 'past30_nervoussystem_numbness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"':
                                '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_nervoussystem_numbness">Numbness or tingling </label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_lightsleep" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_lightsleep', 0) }}" name="past30_psychiatric_lightsleep" />
                                <input type="checkbox" id="_past30_psychiatric_lightsleep" class="shadowCheckbox" name="_past30_psychiatric_lightsleep" {{ array_get($intake, 'past30_psychiatric_lightsleep')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"':
                                '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_lightsleep">Difficulty staying asleep</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_general_fever" type="hidden" value="{{ array_get($intake, 'past30_general_fever', 0) }}" name="past30_general_fever" />
                                <input type="checkbox" id="_past30_general_fever" class="shadowCheckbox" name="_past30_general_fever" {{ array_get($intake, 'past30_general_fever')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_general_fever">Fever</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_nervoussystem_memoryloss" type="hidden" value="{{ array_get($intake, 'past30_nervoussystem_memoryloss', 0) }}" name="past30_nervoussystem_memoryloss" />
                                <input type="checkbox" id="_past30_nervoussystem_memoryloss" class="shadowCheckbox" name="_past30_nervoussystem_memoryloss" {{ array_get($intake, 'past30_nervoussystem_memoryloss')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_nervoussystem_memoryloss">Memory loss</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_difficultarousal" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_difficultarousal', 0) }}" name="past30_psychiatric_difficultarousal" />
                                <input type="checkbox" id="_past30_psychiatric_difficultarousal" class="shadowCheckbox" name="_past30_psychiatric_difficultarousal" {{ array_get($intake, 'past30_psychiatric_difficultarousal')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_difficultarousal">Difficult with sexual arousal</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_general_nightsweats" type="hidden" value="{{ array_get($intake, 'past30_general_nightsweats', 0) }}" name="past30_general_nightsweats" />
                                <input type="checkbox" id="_past30_general_nightsweats" class="shadowCheckbox" name="_past30_general_nightsweats" {{ array_get($intake, 'past30_general_nightsweats')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_general_nightsweats">Night Sweats</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_nervoussystem_pain" type="hidden" value="{{ array_get($intake, 'past30_nervoussystem_pain', 0) }}" name="past30_nervoussystem_pain" />
                                <input type="checkbox" id="_past30_nervoussystem_pain" class="shadowCheckbox" name="_past30_nervoussystem_pain" {{ array_get($intake, 'past30_nervoussystem_pain')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_nervoussystem_pain">Do you suffer from pain?</label>Please rate(1-10)
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <select name="past30_nervoussystem_pain_rating" id="past30_nervoussystem_pain_rating" class="form-control" {{ isset($readOnly)? 'disabled="disabled"': '' }}>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==1? ' selected="selected"': "" }}>1</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==2? ' selected="selected"': "" }}>2</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==3? ' selected="selected"': "" }}>3</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==4? ' selected="selected"': "" }}>4</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==5? ' selected="selected"': "" }}>5</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==6? ' selected="selected"': "" }}>6</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==7? ' selected="selected"': "" }}>7</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==8? ' selected="selected"': "" }}>8</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==9? ' selected="selected"': "" }}>9</option>
                                    <option {{ array_get($intake, 'past30_nervoussystem_pain_rating')==10? ' selected="selected"': "" }}>10</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_poorappetite" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_poorappetite', 0) }}" name="past30_psychiatric_poorappetite" />
                                <input type="checkbox" id="_past30_psychiatric_poorappetite" class="shadowCheckbox" name="_past30_psychiatric_poorappetite" {{ array_get($intake, 'past30_psychiatric_poorappetite')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_poorappetite">Poor appetite</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">MUSCLE/JOINT/BONES</label>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">STOMACH AND INTESTINES</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_foodcravings" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_foodcravings', 0) }}" name="past30_psychiatric_foodcravings" />
                                <input type="checkbox" id="_past30_psychiatric_foodcravings" class="shadowCheckbox" name="_past30_psychiatric_foodcravings" {{ array_get($intake, 'past30_psychiatric_foodcravings')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_foodcravings">Food cravings</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_musclejointbones_numbness" type="hidden" value="{{ array_get($intake, 'past30_musclejointbones_numbness', 0) }}" name="past30_musclejointbones_numbness" />
                                <input type="checkbox" id="_past30_musclejointbones_numbness" class="shadowCheckbox" name="_past30_musclejointbones_numbness" {{ array_get($intake, 'past30_musclejointbones_numbness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_musclejointbones_numbness">Numbness</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_nausea" type="hidden" value="{{ array_get($intake, 'past30_stomach_nausea', 0) }}" name="past30_stomach_nausea" />
                                <input type="checkbox" id="_past30_stomach_nausea" class="shadowCheckbox" name="_past30_stomach_nausea" {{ array_get($intake, 'past30_stomach_nausea')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_stomach_nausea">Nausea</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-2 col-sm-2">

                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_musclejointbones_jointpain" type="hidden" value="{{ array_get($intake, 'past30_musclejointbones_jointpain', 0) }}" name="past30_musclejointbones_jointpain" />
                                <input type="checkbox" id="_past30_musclejointbones_jointpain" class="shadowCheckbox" name="_past30_musclejointbones_jointpain" {{ array_get($intake, 'past30_musclejointbones_jointpain')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_musclejointbones_jointpain">Joint pain</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_heartburn" type="hidden" value="{{ array_get($intake, 'past30_stomach_heartburn', 0) }}" name="past30_stomach_heartburn" />
                                <input type="checkbox" id="_past30_stomach_heartburn" class="shadowCheckbox" name="_past30_stomach_heartburn" {{ array_get($intake, 'past30_stomach_heartburn')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_stomach_heartburn">Heartburn</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_crying" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_crying', 0) }}" name="past30_psychiatric_crying" />
                                <input type="checkbox" id="_past30_psychiatric_crying" class="shadowCheckbox" name="_past30_psychiatric_crying" {{ array_get($intake, 'past30_psychiatric_crying')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_crying">Frequent crying</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_musclejointbones_muscleweakness" type="hidden" value="{{ array_get($intake, 'past30_musclejointbones_muscleweakness', 0) }}" name="past30_musclejointbones_muscleweakness" />
                                <input type="checkbox" id="_past30_musclejointbones_muscleweakness" class="shadowCheckbox" name="_past30_musclejointbones_muscleweakness" {{ array_get($intake, 'past30_musclejointbones_muscleweakness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_musclejointbones_muscleweakness">Muscle weakness</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_pain" type="hidden" value="{{ array_get($intake, 'past30_stomach_pain', 0) }}" name="past30_stomach_pain" />
                                <input type="checkbox" id="_past30_stomach_pain" class="shadowCheckbox" name="_past30_stomach_pain" {{ array_get($intake, 'past30_stomach_pain')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_stomach_pain">Stomach pain</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_sensitivity" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_sensitivity', 0) }}" name="past30_psychiatric_sensitivity" />
                                <input type="checkbox" id="_past30_psychiatric_sensitivity" class="shadowCheckbox" name="_past30_psychiatric_sensitivity" {{ array_get($intake, 'past30_psychiatric_sensitivity')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_sensitivity">Sensitivity</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_musclejointbones_jointswelling" type="hidden" value="{{ array_get($intake, 'past30_musclejointbones_jointswelling', 0) }}" name="past30_musclejointbones_jointswelling" />
                                <input type="checkbox" id="_past30_musclejointbones_jointswelling" class="shadowCheckbox" name="_past30_musclejointbones_jointswelling" {{ array_get($intake, 'past30_musclejointbones_jointswelling')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_musclejointbones_jointswelling">Joint swelling Where?</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_vomiting" type="hidden" value="{{ array_get($intake, 'past30_stomach_vomiting', 0) }}" name="past30_stomach_vomiting" />
                                <input type="checkbox" id="_past30_stomach_vomiting" class="shadowCheckbox" name="_past30_stomach_vomiting" {{ array_get($intake, 'past30_stomach_vomiting')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_stomach_vomiting">Vomiting</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_suicidalthoughts" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_suicidalthoughts', 0) }}" name="past30_psychiatric_suicidalthoughts" />
                                <input type="checkbox" id="_past30_psychiatric_suicidalthoughts" class="shadowCheckbox" name="_past30_psychiatric_suicidalthoughts" {{ array_get($intake, 'past30_psychiatric_suicidalthoughts')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_psychiatric_suicidalthoughts">Thoughts of suicide / attempts</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">EARS</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_yellowjaundice" type="hidden" value="{{ array_get($intake, 'past30_stomach_yellowjaundice', 0) }}" name="past30_stomach_yellowjaundice" />
                                <input type="checkbox" id="_past30_stomach_yellowjaundice" class="shadowCheckbox" name="_past30_stomach_yellowjaundice" {{ array_get($intake, 'past30_stomach_yellowjaundice')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"':
                                '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_stomach_yellowjaundice">Yellow jaundice</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_stress" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_stress', 0) }}" name="past30_psychiatric_stress" />
                                <input type="checkbox" id="_past30_psychiatric_stress" class="shadowCheckbox" name="_past30_psychiatric_stress" {{ array_get($intake, 'past30_psychiatric_stress')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="past30_psychiatric_stress">Stress</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_ears_ringing" type="hidden" value="{{ array_get($intake, 'past30_ears_ringing', 0) }}" name="past30_ears_ringing" />
                                <input type="checkbox" id="_past30_ears_ringing" class="shadowCheckbox" name="_past30_ears_ringing" {{ array_get($intake, 'past30_ears_ringing')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_ears_ringing">Ringing in ears</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_constipation" type="hidden" value="{{ array_get($intake, 'past30_stomach_constipation', 0) }}" name="past30_stomach_constipation" />
                                <input type="checkbox" id="_past30_stomach_constipation" class="shadowCheckbox" name="_past30_stomach_constipation" {{ array_get($intake, 'past30_stomach_constipation')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }}
                                />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_stomach_constipation">Increasing constipation</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_irritability" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_irritability', 0) }}" name="past30_psychiatric_irritability" />
                                <input type="checkbox" id="_past30_psychiatric_irritability" class="shadowCheckbox" name="_past30_psychiatric_irritability" {{ array_get($intake, 'past30_psychiatric_irritability')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_psychiatric_irritability">Irritability</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_ears_hearingloss" type="hidden" value="{{ array_get($intake, 'past30_ears_hearingloss', 0) }}" name="past30_ears_hearingloss" />
                                <input type="checkbox" id="_past30_ears_hearingloss" class="shadowCheckbox" name="_past30_ears_hearingloss" {{ array_get($intake, 'past30_ears_hearingloss')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_ears_hearingloss">Loss of hearing</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_diarrhoea" type="hidden" value="{{ array_get($intake, 'past30_stomach_diarrhoea', 0) }}" name="past30_stomach_diarrhoea" />
                                <input type="checkbox" id="_past30_stomach_diarrhoea" class="shadowCheckbox" name="_past30_stomach_diarrhoea" {{ array_get($intake, 'past30_stomach_diarrhoea')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_stomach_diarrhoea">Persistant diarrhoea</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_poorconcentration" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_poorconcentration', 0) }}" name="past30_psychiatric_poorconcentration" />
                                <input type="checkbox" id="_past30_psychiatric_poorconcentration" class="shadowCheckbox" name="_past30_psychiatric_poorconcentration" {{ array_get($intake, 'past30_psychiatric_poorconcentration')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_psychiatric_poorconcentration">Poor concentration</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">EYES</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_bloodinstool" type="hidden" value="{{ array_get($intake, 'past30_stomach_bloodinstool', 0) }}" name="past30_stomach_bloodinstool" />
                                <input type="checkbox" id="_past30_stomach_bloodinstool" class="shadowCheckbox" name="_past30_stomach_bloodinstool" {{ array_get($intake, 'past30_stomach_bloodinstool')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }}
                                />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_stomach_bloodinstool">Blood in stools</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_racingthoughts" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_racingthoughts', 0) }}" name="past30_psychiatric_racingthoughts" />
                                <input type="checkbox" id="_past30_psychiatric_racingthoughts" class="shadowCheckbox" name="_past30_psychiatric_racingthoughts" {{ array_get($intake, 'past30_psychiatric_racingthoughts')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_psychiatric_racingthoughts">Racing thoughts</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_eyes_pain" type="hidden" value="{{ array_get($intake, 'past30_eyes_pain', 0) }}" name="past30_eyes_pain" />
                                <input type="checkbox" id="_past30_eyes_pain" class="shadowCheckbox" name="_past30_eyes_pain" {{ array_get($intake, 'past30_eyes_pain')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_eyes_pain">Pain</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_stomach_blackstool" type="hidden" value="{{ array_get($intake, 'past30_stomach_blackstool', 0) }}" name="past30_stomach_blackstool" />
                                <input type="checkbox" id="_past30_stomach_blackstool" class="shadowCheckbox" name="_past30_stomach_blackstool" {{ array_get($intake, 'past30_stomach_blackstool')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_stomach_blackstool">Black stools</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_hallucination" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_hallucination', 0) }}" name="past30_psychiatric_hallucination" />
                                <input type="checkbox" id="_past30_psychiatric_hallucination" class="shadowCheckbox" name="_past30_psychiatric_hallucination" {{ array_get($intake, 'past30_psychiatric_hallucination')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_psychiatric_hallucination">Hallucinations</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_eyes_redness" type="hidden" value="{{ array_get($intake, 'past30_eyes_redness', 0) }}" name="past30_eyes_redness" />
                                <input type="checkbox" id="_past30_eyes_redness" class="shadowCheckbox" name="_past30_eyes_redness" {{ array_get($intake, 'past30_eyes_redness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_eyes_redness">Redness</label>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">BLOOD</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_anxiety" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_anxiety', 0) }}" name="past30_psychiatric_anxiety" />
                                <input type="checkbox" id="_past30_psychiatric_anxiety" class="shadowCheckbox" name="_past30_psychiatric_anxiety" {{ array_get($intake, 'past30_psychiatric_anxiety')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_psychiatric_anxiety">Anxiety</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_eyes_lossofvision" type="hidden" value="{{ array_get($intake, 'past30_eyes_lossofvision', 0) }}" name="past30_eyes_lossofvision" />
                                <input type="checkbox" id="_past30_eyes_lossofvision" class="shadowCheckbox" name="_past30_eyes_lossofvision" {{ array_get($intake, 'past30_eyes_lossofvision')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_eyes_lossofvision">Loss of vision</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_blood_anemia" type="hidden" value="{{ array_get($intake, 'past30_blood_anemia', 0) }}" name="past30_blood_anemia" />
                                <input type="checkbox" id="_past30_blood_anemia" class="shadowCheckbox" name="_past30_blood_anemia" {{ array_get($intake, 'past30_blood_anemia')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_blood_anemia">Anemia</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_psychiatric_riskybehavior" type="hidden" value="{{ array_get($intake, 'past30_psychiatric_riskybehavior', 0) }}" name="past30_psychiatric_riskybehavior" />
                                <input type="checkbox" id="_past30_psychiatric_riskybehavior" class="shadowCheckbox" name="_past30_psychiatric_riskybehavior" {{ array_get($intake, 'past30_psychiatric_riskybehavior')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_psychiatric_riskybehavior">Risky behaviour</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_eyes_doublevision" type="hidden" value="{{ array_get($intake, 'past30_eyes_doublevision', 0) }}" name="past30_eyes_doublevision" />
                                <input type="checkbox" id="_past30_eyes_doublevision" class="shadowCheckbox" name="_past30_eyes_doublevision" {{ array_get($intake, 'past30_eyes_doublevision')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_eyes_doublevision">Double or blurred vision</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_blood_clots" type="hidden" value="{{ array_get($intake, 'past30_blood_clots', 0) }}" name="past30_blood_clots" />
                                <input type="checkbox" id="_past30_blood_clots" class="shadowCheckbox" name="_past30_blood_clots" {{ array_get($intake, 'past30_blood_clots')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_blood_clots">Clots</label>
                            </div>
                            <div class="col-md-4 col-sm-4">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_eyes_dryness" type="hidden" value="{{ array_get($intake, 'past30_eyes_dryness', 0) }}" name="past30_eyes_dryness" />
                                <input type="checkbox" id="_past30_eyes_dryness" class="shadowCheckbox" name="_past30_eyes_dryness" {{ array_get($intake, 'past30_eyes_dryness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_eyes_dryness">Dryness</label>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">SKIN</label>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">SEXUAL HABITS:</label>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 col-sm-4">
                                <label style="text-align:center;color:#7AA43F">THROAT</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_skin_redness" type="hidden" value="{{ array_get($intake, 'past30_skin_redness', 0) }}" name="past30_skin_redness" />
                                <input type="checkbox" id="_past30_skin_redness" class="shadowCheckbox" name="_past30_skin_redness" {{ array_get($intake, 'past30_skin_redness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_skin_redness">Skin Redness</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_sex_unprotected" type="hidden" value="{{ array_get($intake, 'past30_sex_unprotected', 0) }}" name="past30_sex_unprotected" />
                                <input type="checkbox" id="_past30_sex_unprotected" class="shadowCheckbox" name="_past30_sex_unprotected" {{ array_get($intake, 'past30_sex_unprotected')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_sex_unprotected">Other than your current partner, have you had unprotected sex? Y / N </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_throat_sore" type="hidden" value="{{ array_get($intake, 'past30_throat_sore', 0) }}" name="past30_throat_sore" />
                                <input type="checkbox" id="_past30_throat_sore" class="shadowCheckbox" name="_past30_throat_sore" {{ array_get($intake, 'past30_throat_sore')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_throat_sore">Frequent sore throats</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_skin_rash" type="hidden" value="{{ array_get($intake, 'past30_skin_rash', 0) }}" name="past30_skin_rash" />
                                <input type="checkbox" id="_past30_skin_rash" class="shadowCheckbox" name="_past30_skin_rash" {{ array_get($intake, 'past30_skin_rash')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_skin_rash">Rash</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label>If yes:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_throat_hoarseness" type="hidden" value="{{ array_get($intake, 'past30_throat_hoarseness', 0) }}" name="past30_throat_hoarseness" />
                                <input type="checkbox" id="_past30_throat_hoarseness" class="shadowCheckbox" name="_past30_throat_hoarseness" {{ array_get($intake, 'past30_throat_hoarseness')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_throat_hoarseness">Hoarseness</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_skin_nodules" type="hidden" value="{{ array_get($intake, 'past30_skin_nodules', 0) }}" name="past30_skin_nodules" />
                                <input type="checkbox" id="_past30_skin_nodules" class="shadowCheckbox" name="_past30_skin_nodules" {{ array_get($intake, 'past30_skin_nodules')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_skin_nodules">Nodules/bumps</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                               <input id="past30_sex_30days" type="hidden" value="{{ array_get($intake, 'past30_sex_30days', 0) }}" name="past30_sex_30days" />
                                <input type="checkbox" id="_past30_sex_30days" class="shadowCheckbox" name="_past30_sex_30days" {{ array_get($intake, 'past30_sex_30days')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_sex_30days">Last 30 days</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_throat_difficultyswallowing" type="hidden" value="{{ array_get($intake, 'past30_throat_difficultyswallowing', 0) }}" name="past30_throat_difficultyswallowing" />
                                <input type="checkbox" id="_past30_throat_difficultyswallowing" class="shadowCheckbox" name="_past30_throat_difficultyswallowing" {{ array_get($intake, 'past30_throat_difficultyswallowing')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_throat_difficultyswallowing">Difficulty in swallowing</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_skin_hairloss" type="hidden" value="{{ array_get($intake, 'past30_skin_hairloss', 0) }}" name="past30_skin_hairloss" />
                                <input type="checkbox" id="_past30_skin_hairloss" class="shadowCheckbox" name="_past30_skin_hairloss" {{ array_get($intake, 'past30_skin_hairloss')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_skin_hairloss">Hair loss</label>
                            </div>
                            <div class="col-md-1 col-sm-1">
                               <input id="past30_sex_60_days" type="hidden" value="{{ array_get($intake, 'past30_sex_60_days', 0) }}" name="past30_sex_60_days" />
                                <input type="checkbox" id="_past30_sex_60_days" class="shadowCheckbox" name="_past30_sex_60_days" {{ array_get($intake, 'past30_sex_60_days')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_sex_60_days">Last 60 days</label>
                            </div>
                            </div>
                                <div class="row ">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input id="past30_throat_jawpain " type="hidden" value="{{ array_get($intake, 'past30_throat_jawpain', 0) }} " name="past30_throat_jawpain " />
                                        <input type="checkbox" id="_past30_throat_jawpain " class="shadowCheckbox " name="_past30_throat_jawpain " {{ array_get($intake, 'past30_throat_jawpain')=="1 "?'checked="checked"':'' }} {{ isset($readOnly)?'disabled="disabled "':'' }} />
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <label for="past30_throat_jawpain ">Pain in jaw</label>
                                    </div>

                                    <div class="col-md-1 col-sm-1 ">
                                        <input id="past30_skin_colorchangehandsfeet" type="hidden" value="{{ array_get($intake, 'past30_skin_colorchangehandsfeet', 0) }} " name="past30_skin_colorchangehandsfeet " />
                                        <input type="checkbox" id="_past30_skin_colorchangehandsfeet " class="shadowCheckbox " name="_past30_skin_colorchangehandsfeet " {{ array_get($intake, 'past30_skin_colorchangehandsfeet')=="1"?'checked="checked "':'' }} {{ isset($readOnly)?'disabled="disabled "':'' }} />
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <label for="past30_skin_colorchangehandsfeet ">Colour changes of hands or feet</label>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                       <input id="past30_sex_90days" type="hidden" value="{{ array_get($intake, 'past30_sex_90days', 0) }}" name="past30_sex_90days" />
                                        <input type="checkbox" id="_past30_sex_90days" class="shadowCheckbox" name="_past30_sex_90days" {{ array_get($intake, 'past30_sex_90days')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <label for="past30_sex_90days">Last 90 days</label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4 col-sm-4">
                                        <label style="text-align:center;color:#7AA43F">HEART AND LUNGS</label>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <label style="text-align:center;color:#7AA43F">KIDNEY/URINE/BLADDER</label>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                       <input id="past30_sex_120days" type="hidden" value="{{ array_get($intake, 'past30_sex_120days', 0) }}" name="past30_sex_120days" />
                                        <input type="checkbox" id="_past30_sex_120days" class="shadowCheckbox" name="_past30_sex_120days" {{ array_get($intake, 'past30_sex_120days')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <label for="past30_sex_120days">Last 120 days</label>
                                    </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_heartlungs_chestpain" type="hidden" value="{{ array_get($intake, 'past30_heartlungs_chestpain', 0) }}" name="past30_heartlungs_chestpain" />
                                <input type="checkbox" id="_past30_heartlungs_chestpain" class="shadowCheckbox" name="_past30_heartlungs_chestpain" {{ array_get($intake, 'past30_heartlungs_chestpain')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }}
                                />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_heartlungs_chestpain">Chest pain</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_kidneyurinebladder_urination" type="hidden" value="{{ array_get($intake, 'past30_kidneyurinebladder_urination', 0) }}" name="past30_kidneyurinebladder_urination" />
                                <input type="checkbox" id="_past30_kidneyurinebladder_urination" class="shadowCheckbox" name="_past30_kidneyurinebladder_urination" {{ array_get($intake, 'past30_kidneyurinebladder_urination')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_kidneyurinebladder_urination">Frequent or painful urination</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label style="text-align:center;color:#7AA43F">OTHER PROBLEMS:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_heartlungs_palpitations" type="hidden" value="{{ array_get($intake, 'past30_heartlungs_palpitations', 0) }}" name="past30_heartlungs_palpitations" />
                                <input type="checkbox" id="_past30_heartlungs_palpitations" class="shadowCheckbox" name="_past30_heartlungs_palpitations" {{ array_get($intake, 'past30_heartlungs_palpitations')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_heartlungs_palpitations">Palpitations</label>
                            </div>

                            <div class="col-md-1 col-sm-1">
                                <input id="past30_kidneyurinebladder_blood" type="hidden" value="{{ array_get($intake, 'past30_kidneyurinebladder_blood', 0) }}" name="past30_kidneyurinebladder_blood" />
                                <input type="checkbox" id="_past30_kidneyurinebladder_blood" class="shadowCheckbox" name="_past30_kidneyurinebladder_blood" {{ array_get($intake, 'past30_kidneyurinebladder_blood')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_kidneyurinebladder_blood">Blood in urine</label>
                            </div>
                            <div class="col-md-1 col-sm-1">

                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="past30_other" type="text" {{ isset($readOnly)? 'disabled="disabled"': '' }} id="ContentPlaceHolder1_past30_other" class="form-control" value="{{ array_get($intake, 'past30_other') }}"> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_heartlungs_shortnessofbreath" type="hidden" value="{{ array_get($intake, 'past30_heartlungs_shortnessofbreath', 0) }}" name="past30_heartlungs_shortnessofbreath" />
                                <input type="checkbox" id="_past30_heartlungs_shortnessofbreath" class="shadowCheckbox" name="_past30_heartlungs_shortnessofbreath" {{ array_get($intake, 'past30_heartlungs_shortnessofbreath')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)?
                                'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_heartlungs_shortnessofbreath">Shortness of breath</label>
                            </div>
                            <div class="col-md-8 col-sm-8">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_heartlungs_fainting" type="hidden" value="{{ array_get($intake, 'past30_heartlungs_fainting', 0) }}" name="past30_heartlungs_fainting" />
                                <input type="checkbox" id="_past30_heartlungs_fainting" class="shadowCheckbox" name="_past30_heartlungs_fainting" {{ array_get($intake, 'past30_heartlungs_fainting')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_heartlungs_fainting">Fainting</label>
                            </div>
                            <div class="col-md-8 col-sm-8">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_heartlungs_swollenlegs" type="hidden" value="{{ array_get($intake, 'past30_heartlungs_swollenlegs', 0) }}" name="past30_heartlungs_swollenlegs" />
                                <input type="checkbox" id="_past30_heartlungs_swollenlegs" class="shadowCheckbox" name="_past30_heartlungs_swollenlegs" {{ array_get($intake, 'past30_heartlungs_swollenlegs')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"':
                                '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_heartlungs_swollenlegs">Swollen legs or feet</label>
                            </div>
                            <div class="col-md-8 col-sm-8">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1">
                                <input id="past30_heartlungs_cough" type="hidden" value="{{ array_get($intake, 'past30_heartlungs_cough', 0) }}" name="past30_heartlungs_cough" />
                                <input type="checkbox" id="_past30_heartlungs_cough" class="shadowCheckbox" name="_past30_heartlungs_cough" {{ array_get($intake, 'past30_heartlungs_cough')=="1" ? 'checked="checked"': '' }} {{ isset($readOnly)? 'disabled="disabled"': '' }} />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="past30_heartlungs_cough">Cough</label>
                            </div>
                            <div class="col-md-8 col-sm-8">
                            </div>
                        </div>
                        <hr>
                        <br> @if (!isset($readOnly))
                        <div class="row">
                            <div class="col-ms-1 col-sm-1">
                                <a href="{{ route('account.patient-history.edit', ['history' => $history, 'page' => $page-1]) }}" name="_btnprevious" value="Back" id="ContentPlaceHolder1_btnprevious" class="btn btn-primary">Back</a>
                            </div>
                            <div class="col-ms-10 col-sm-10">
                            </div>

                            <div class="col-ms-1 col-sm-1">
                                <input type="submit" name="_Btnnext" value="Next" id="ContentPlaceHolder1_Btnnext" class="btn btn-primary">
                            </div>
                        </div>
                        @endif


                    </div>
                </div>
            </div>
            </div>
        </form>
