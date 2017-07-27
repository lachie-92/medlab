@section('custom_script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <script>
        $(document).ready(function() {
            $('.input-group.date input').datepicker({
            });
        });
    </script>
@endsection


    <form action="{{ isset($history)?route('account.patient-history.update', $history->id):route('account.patient-history.store') }}" method="POST" id="patient-history">
        @if (!isset($readOnly))
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page" value="1">
        @endif
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <h3 class="panel-title pull-left">
                        Patient History &mdash; Page 1
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div>
                        <div  style="background-color: transparent; background-image: none">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label style="color: #1E5494">
                                        PATIENT DETAILS
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <label>
                                        Date
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    {{ isset($history)?$history->created_at->format('d/m/Y'):Carbon\Carbon::now()->format('d/m/Y') }}
                                </div>
                                <div class="col-md-6 col-sm-6">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <label>
                                        First Name
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <input name="details_firstname" type="text" value="{{ array_get($intake, 'details_firstname') }}" id="details_firstname" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <label>
                                        Surname
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <input name="details_surname" type="text" value="{{ array_get($intake, 'details_surname') }}" id="details_surname" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <label>
                                        Address
                                    </label>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <input name="details_address" type="text" value="{{ array_get($intake, 'details_address') }}" id="details_address" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <label>
                                        Email
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <input name="details_email" type="text" value="{{ $user->email }}" readonly="readonly" id="details_email" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <label>D.O.B</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="input-group date">
                                        <input name="details_dob" type="text" value="{{ array_get($intake, 'details_dob') }}" id="details_dob" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                    </div>

                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <label>
                                        Sex
                                    </label>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <input id="rdm" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="details_sex" value="M" {{ array_get($intake, 'details_sex')=="M"?'checked="checked"':"" }}><label for="rdm">Male</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input id="rdf" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="details_sex" value="F" {{ array_get($intake, 'details_sex')=="F"?'checked="checked"':"" }}><label for="rdf">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div  style="background-color: transparent; background-image: none">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label style="color: #1E5494">
                                        GUARDIAN DETAILS (if applicable)
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <label>
                                        First Name
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <input name="guardian_firstname" type="text" value="{{ array_get($intake, 'guardian_firstname') }}" id="guardian_firstname" class="form-control"{{ isset($readOnly)?' disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <label>
                                        Surname
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <input name="guardian_lastname" type="text" value="{{ array_get($intake, 'guardian_lastname') }}" id="guardian_lastname" class="form-control"{{ isset($readOnly)?' disabled="disabled"':'' }}>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <label>
                                        Relationship to Patient
                                    </label>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <select name="guardian_relationship" id="guardian_relationship" class="form-control"{{ isset($readOnly)?' disabled="disabled"':'' }}>
                                        <option value="Parents" {{ array_get($intake, 'guardian_relationship')=="Parents"?'selected="selected"':"" }}>Parents</option>
                                        <option value="Partner" {{ array_get($intake, 'guardian_relationship')=="Partner"?'selected="selected"':"" }}>Partner</option>
                                        <option value="Sibling" {{ array_get($intake, 'guardian_relationship')=="Sibling"?'selected="selected"':"" }}>Sibling</option>
                                        <option value="Carer" {{ array_get($intake, 'guardian_relationship')=="Carer"?'selected="selected"':"" }}>Carer</option>
                                        <option value="Friend" {{ array_get($intake, 'guardian_relationship')=="Friend"?'selected="selected"':"" }}>Friend</option>

                                        </select>
                                </div>

                            </div>
                            <br>
                        </div>
                    </div>

                    <div>
                        <div  style="background-color: transparent; background-image: none">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label style="color: #1E5494">
                                        Describe briefly your present symptoms
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="symptoms" rows="2" cols="20" id="symptoms" class="form-control">{{ array_get($intake, 'symptoms') }}</textarea>
                                </div>
                            </div>

                            <br>
                        </div>
                    </div>

                    <div>
                        <div  style="background-color: transparent; background-image: none">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label style="color: #1E5494">
                                        Please list the names of any practitioners you regularly or routinely see (eg, Family Doctor)
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <label>1/. Practitioner Name</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner1_name" type="text" id="practitioner1_name" class="form-control" value="{{ array_get($intake, 'practitioner1_name') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <label>State</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner1_state" type="text" id="practitioner1_state" class="form-control" value="{{ array_get($intake, 'practitioner1_state') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <label>Post Code</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner1_postcode" type="text" id="practitioner1_postcode" class="form-control" value="{{ array_get($intake, 'practitioner1_postcode') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner1_phone" type="text" id="practitioner1_phone" class="form-control" value="{{ array_get($intake, 'practitioner1_phone') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner1_email" type="text" id="practitioner1_email" class="form-control" value="{{ array_get($intake, 'practitioner1_email') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <label>2/. Practitioner Name</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner2_name" type="text" id="practitioner2_name" class="form-control" value="{{ array_get($intake, 'practitioner2_name') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <label>State</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner1_state" type="text" id="practitioner1_state" class="form-control" value="{{ array_get($intake, 'practitioner1_state') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <label>Post Code</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner2_postcode" type="text" id="practitioner2_postcode" class="form-control" value="{{ array_get($intake, 'practitioner2_postcode') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner2_phone" type="text" id="practitioner2_phone" class="form-control" value="{{ array_get($intake, 'practitioner2_phone') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input name="practitioner2_email" type="text" id="practitioner2_email" class="form-control" value="{{ array_get($intake, 'practitioner2_email') }}"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <label style="color: #1E5494">
                                Hospitalisations (include where, when and for what reason):
                            </label>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="hospitalizations" rows="2" cols="20" id="hospitalizations" class="form-control">{{ array_get($intake, 'hospitalizations') }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <hr size="6">
                    </div>
                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <label>
                                Have you ever had ECT?
                            </label>
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <table id="history_ect">
                            <tbody><tr>
                            <td><input id="history_ect_0" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="history_ect" value="1" {{ array_get($intake, 'history_ect')=="1"?'checked="checked"':"" }}><label for="history_ect_0">Yes</label></td><td><input id="history_ect_1" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="history_ect" value="0" {{ array_get($intake, 'history_ect')=="0"?'checked="checked"':"" }}><label for="history_ect_1">No</label></td>
                            </tr>
                            </tbody></table>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label>
                                Have you had psychotherapy?
                            </label>
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <table id="history_psychotherapy">
                            <tbody><tr>
                            <td><input id="history_psychotherapy_0" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="history_psychotherapy" value="1" {{ array_get($intake, 'history_psychotherapy')=="1"?'checked="checked"':"" }}"><label for="history_psychotherapy_0">Yes</label></td><td><input id="history_psychotherapy_1" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="history_psychotherapy" value="0" {{ array_get($intake, 'history_psychotherapy')=="0"?'checked="checked"':"" }}><label for="history_psychotherapy_1">No</label></td>
                            </tr>
                            </tbody></table>
                        </div>

                    </div>
                    <div class="row">
                        <hr size="6">
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div  style="background-color: transparent; background-image: none">
                                <label style="color: #1E5494">CURRENT MEDICATIONS</label>
                                <br>

                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <label>Drugs Allergies</label>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input id="rdcurrentmedication_allergiesy" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedication_allergies" value="Y" {{ array_get($intake, 'currentmedication_allergies')=="Y"?'checked="checked"':"" }}"><label for="rdcurrentmedication_allergiesy">Yes</label>
                                        <input id="rdcurrentmedication_allergiesn" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedication_allergies" value="N" {{ array_get($intake, 'currentmedication_allergies')=="N"?'checked="checked"':"" }}"><label for="rdcurrentmedication_allergiesn">No</label>


                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                    </div>
                                    <div class="col-md-6 col-sm-6"></div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <label>
                                            Please list any medications that you are now taking. Include non-prescription medication &amp; vitamins or
                                        supplements
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">Medication Name</div>
                                    <div class="col-md-3">Dose (strength &amp; amount per day)</div>
                                    <div class="col-md-3">How long have you been using this?</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">1.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name1" rows="2" cols="20" id="currentmedications_name1" class="form-control">{{ array_get($intake, "currentmedications_name1") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose1" rows="2" cols="20" id="currentmedications_dose1" class="form-control">{{ array_get($intake, "currentmedications_dose1") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration1" rows="2" cols="20" id="currentmedications_duration1" class="form-control">{{ array_get($intake, "currentmedications_duration1") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">2.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name2" rows="2" cols="20" id="currentmedications_name2" class="form-control">{{ array_get($intake, "currentmedications_name2") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose2" rows="2" cols="20" id="currentmedications_dose2" class="form-control">{{ array_get($intake, "currentmedications_dose2") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration2" rows="2" cols="20" id="currentmedications_duration2" class="form-control">{{ array_get($intake, "currentmedications_duration2") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">3.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name3" rows="2" cols="20" id="currentmedications_name3" class="form-control">{{ array_get($intake, "currentmedications_name3") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose3" rows="2" cols="20" id="currentmedications_dose3" class="form-control">{{ array_get($intake, "currentmedications_dose3") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration3" rows="2" cols="20" id="currentmedications_duration3" class="form-control">{{ array_get($intake, "currentmedications_duration3") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">4.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name4" rows="2" cols="20" id="currentmedications_name4" class="form-control">{{ array_get($intake, "currentmedications_name4") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose4" rows="2" cols="20" id="currentmedications_dose4" class="form-control">{{ array_get($intake, "currentmedications_dose4") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration4" rows="2" cols="20" id="currentmedications_duration4" class="form-control">{{ array_get($intake, "currentmedications_duration4") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">5.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name5" rows="2" cols="20" id="currentmedications_name5" class="form-control">{{ array_get($intake, "currentmedications_name5") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose5" rows="2" cols="20" id="currentmedications_dose5" class="form-control">{{ array_get($intake, "currentmedications_dose5") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration5" rows="2" cols="20" id="currentmedications_duration5" class="form-control">{{ array_get($intake, "currentmedications_duration5") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">6.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name6" rows="2" cols="20" id="currentmedications_name6" class="form-control">{{ array_get($intake, "currentmedications_name6") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose6" rows="2" cols="20" id="currentmedications_dose6" class="form-control">{{ array_get($intake, "currentmedications_dose6") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration6" rows="2" cols="20" id="currentmedications_duration6" class="form-control">{{ array_get($intake, "currentmedications_duration6") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">7.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name7" rows="2" cols="20" id="currentmedications_name7" class="form-control">{{ array_get($intake, "currentmedications_name7") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose7" rows="2" cols="20" id="currentmedications_dose7" class="form-control">{{ array_get($intake, "currentmedications_dose7") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration7" rows="2" cols="20" id="currentmedications_duration7" class="form-control">{{ array_get($intake, "currentmedications_duration7") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">8.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name8" rows="2" cols="20" id="currentmedications_name8" class="form-control">{{ array_get($intake, "currentmedications_name8") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose8" rows="2" cols="20" id="currentmedications_dose8" class="form-control">{{ array_get($intake, "currentmedications_dose8") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration8" rows="2" cols="20" id="currentmedications_duration8" class="form-control">{{ array_get($intake, "currentmedications_duration8") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">9.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name9" rows="2" cols="20" id="currentmedications_name9" class="form-control">{{ array_get($intake, "currentmedications_name9") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose9" rows="2" cols="20" id="currentmedications_dose9" class="form-control">{{ array_get($intake, "currentmedications_dose9") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration9" rows="2" cols="20" id="currentmedications_duration9" class="form-control">{{ array_get($intake, "currentmedications_duration9") }}</textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">10.</div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_name10" rows="2" cols="20" id="currentmedications_name10" class="form-control">{{ array_get($intake, "currentmedications_name10") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_dose10" rows="2" cols="20" id="currentmedications_dose10" class="form-control">{{ array_get($intake, "currentmedications_dose10") }}</textarea></div>
                                    <div class="col-md-3"><textarea {{ isset($readOnly)?'disabled="disabled"':'' }} name="currentmedications_duration10" rows="2" cols="20" id="currentmedications_duration10" class="form-control">{{ array_get($intake, "currentmedications_duration10") }}</textarea></div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (!isset($readOnly))
        <div class="row">
            <div class="col-ms-11 col-sm-11">
            </div>
            <div class="col-ms-1 col-sm-1">
                <input type="submit" name="_Btnnext" value="Next" id="Btnnext" class="btn btn-primary">
            </div>
        </div>
        @endif
    </form>

