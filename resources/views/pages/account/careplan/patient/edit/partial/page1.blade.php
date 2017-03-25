<div class="container-fluid">
    <form action="{{ isset($history)?route('account.careplan.update', $history->id):route('account.careplan.store') }}" method="POST" id="careplan">
        @if (!isset($readOnly))
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page" value="1">
        @endif
        <div class="col-md-12 col-sm-12">
            <div class="well" style="background-color: transparent; background-image: none">
                <h2>Care Plan</h2>
                <p>The Care Plan shows who is involved in a Service User's care, the main focus; agreed goals developed together, planned actions and who is responsible for each action.</p>
                <div class="row">
                    <div class="col-md-12" style="background-color: transparent; background-image: none">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label style="color: #1E5494">
                                    <h3>Service User</h3>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <label>
                                    Name
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <input name="details_name" type="text" value="{{ array_get($intake, 'details_name') }}" id="details_name" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <label>D.O.B</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input name="details_dob" type="text" value="{{ array_get($intake, 'details_dob') }}" id="details_dob" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input id="rdm" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="details_sex" value="M" {{ array_get($intake, 'details_sex')=="M"?'checked="checked"':"" }}><label for="rdm">Male</label>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <input id="rdf" type="radio" {{ isset($readOnly)?'disabled="disabled"':'' }} name="details_sex" value="F" {{ array_get($intake, 'details_sex')=="F"?'checked="checked"':"" }}><label for="rdf">Female</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label style="color: #1E5494">
                                    <h3>Consent Checklist</h3>
                                </label>
                                <p>To ensure the Service User is able to make an informed decision about consent to the disclosure of their information, the service provider has discussed the following and secured agreement from the Service User for:</p>
                                <input id="consent_item1" type="hidden" name="consent_item1" value="{{ array_get($intake, 'consent_item1', 0) }}" />
                                <input id="consent_item2" type="hidden" name="consent_item2" value="{{ array_get($intake, 'consent_item2', 0) }}" />
                                <ol>
                                    <li><label for="_consent_item1">The proposed referral to other services/agencies</label> <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_consent_item1" class="shadowCheckbox" name="_consent_item1" value="1" {{ array_get($intake, 'consent_item1')=="1"?'checked="checked"':"" }}></li>
                                    <li><label for="_consent_item2">Use of the Service User's information in the referral under the requirements of privacy legislation</label> <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_consent_item2" class="shadowCheckbox" name="_consent_item2" value="1" {{ array_get($intake, 'consent_item2')=="1"?'checked="checked"':"" }}></li>
                                </ol>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <label>
                                    Service User's signature
                                </label>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input name="consent_signature" type="text" value="{{ array_get($intake, 'consent_signature') }}" id="consent_signature" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-2 col-sm-9">
                                <label for="_consent_verbal">Verbal Agreement</label>
                            </div>
                            <div class="col-md-1 col-sm-3">
                                <input id="consent_verbal" type="hidden" name="consent_verbal" value="{{ array_get($intake, 'consent_verbal', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_consent_verbal" class="shadowCheckbox" name="_consent_verbal" value="1" {{ array_get($intake, 'consent_verbal')=="1"?'checked="checked"':"" }}>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label style="color: #1E5494">
                                    <h3>Participants Involved in Care</h3>
                                </label>
                                <p>List known persons currently contributing to the Service User's care, including the individual and the carer/advocate and the key worker / care plan coordinator / facilitator (e.g. GP, health/community care providers, substitute decision maker, family members, volunteers or friends who provide assistance).</p>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col-sm-12">Participant 1</h4>
                            <div class="col-md-1 col-sm-4">
                                <label>
                                    Name
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p1name" type="text" value="{{ array_get($intake, 'participants_p1name') }}" id="participants_p1name" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Role or area of support</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p1role" type="text" value="{{ array_get($intake, 'participants_p1role') }}" id="participants_p1role" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <label>
                                    Phone number
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-8">
                                <input name="participants_p1phone" type="text" value="{{ array_get($intake, 'participants_p1phone') }}" id="participants_p1phone" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Other relevant contact details</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p1contactother" type="text" value="{{ array_get($intake, 'participants_p1contactother') }}" id="participants_p1contactother" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p1planning">
                                    Participant in planning process?
                                </label>
                                <input id="participant_p1planning" type="hidden" name="participant_p1planning" value="{{ array_get($intake, 'participant_p1planning', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p1planning" class="shadowCheckbox" name="_participant_p1planning" value="1" {{ array_get($intake, 'participant_p1planning')=="1"?'checked="checked"':"" }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p1copyprovided">Copy of plan provided?</label>

                                <input id="participant_p1copyprovided" type="hidden" name="participant_p1copyprovided" value="{{ array_get($intake, 'participant_p1copyprovided', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p1copyprovided" class="shadowCheckbox" name="_participant_p1copyprovided" value="1" {{ array_get($intake, 'participant_p1copyprovided')=="1"?'checked="checked"':"" }}>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <h4 class="col-sm-12">Participant 2</h4>
                            <div class="col-md-1 col-sm-4">
                                <label>
                                    Name
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p2name" type="text" value="{{ array_get($intake, 'participants_p2name') }}" id="participants_p2name" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Role or area of support</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p2role" type="text" value="{{ array_get($intake, 'participants_p2role') }}" id="participants_p2role" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <label>
                                    Phone number
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-8">
                                <input name="participants_p2phone" type="text" value="{{ array_get($intake, 'participants_p2phone') }}" id="participants_p2phone" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Other relevant contact details</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p2contactother" type="text" value="{{ array_get($intake, 'participants_p2contactother') }}" id="participants_p2contactother" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p2planning">
                                    Participant in planning process?
                                </label>
                                <input id="participant_p2planning" type="hidden" name="participant_p2planning" value="{{ array_get($intake, 'participant_p2planning', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p2planning" class="shadowCheckbox" name="_participant_p2planning" value="1" {{ array_get($intake, 'participant_p2planning')=="1"?'checked="checked"':"" }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p2copyprovided">Copy of plan provided?</label>

                                <input id="participant_p2copyprovided" type="hidden" name="participant_p2copyprovided" value="{{ array_get($intake, 'participant_p2copyprovided', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p2copyprovided" class="shadowCheckbox" name="_participant_p2copyprovided" value="1" {{ array_get($intake, 'participant_p2copyprovided')=="1"?'checked="checked"':"" }}>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <h4 class="col-sm-12">Participant 3</h4>
                            <div class="col-md-1 col-sm-4">
                                <label>
                                    Name
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p3name" type="text" value="{{ array_get($intake, 'participants_p3name') }}" id="participants_p3name" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Role or area of support</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p3role" type="text" value="{{ array_get($intake, 'participants_p3role') }}" id="participants_p3role" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <label>
                                    Phone number
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-8">
                                <input name="participants_p3phone" type="text" value="{{ array_get($intake, 'participants_p3phone') }}" id="participants_p3phone" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Other relevant contact details</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p3contactother" type="text" value="{{ array_get($intake, 'participants_p3contactother') }}" id="participants_p3contactother" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p3planning">
                                    Participant in planning process?
                                </label>
                                <input id="participant_p3planning" type="hidden" name="participant_p3planning" value="{{ array_get($intake, 'participant_p3planning', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p3planning" class="shadowCheckbox" name="_participant_p3planning" value="1" {{ array_get($intake, 'participant_p3planning')=="1"?'checked="checked"':"" }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p3copyprovided">Copy of plan provided?</label>

                                <input id="participant_p3copyprovided" type="hidden" name="participant_p3copyprovided" value="{{ array_get($intake, 'participant_p3copyprovided', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p3copyprovided" class="shadowCheckbox" name="_participant_p3copyprovided" value="1" {{ array_get($intake, 'participant_p3copyprovided')=="1"?'checked="checked"':"" }}>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <h4 class="col-sm-12">Participant 4</h4>
                            <div class="col-md-1 col-sm-4">
                                <label>
                                    Name
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p4name" type="text" value="{{ array_get($intake, 'participants_p4name') }}" id="participants_p4name" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Role or area of support</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p4role" type="text" value="{{ array_get($intake, 'participants_p4role') }}" id="participants_p4role" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <label>
                                    Phone number
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-8">
                                <input name="participants_p4phone" type="text" value="{{ array_get($intake, 'participants_p4phone') }}" id="participants_p4phone" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Other relevant contact details</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p4contactother" type="text" value="{{ array_get($intake, 'participants_p4contactother') }}" id="participants_p4contactother" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p4planning">
                                    Participant in planning process?
                                </label>
                                <input id="participant_p4planning" type="hidden" name="participant_p4planning" value="{{ array_get($intake, 'participant_p4planning', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p4planning" class="shadowCheckbox" name="_participant_p4planning" value="1" {{ array_get($intake, 'participant_p4planning')=="1"?'checked="checked"':"" }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p4copyprovided">Copy of plan provided?</label>

                                <input id="participant_p4copyprovided" type="hidden" name="participant_p4copyprovided" value="{{ array_get($intake, 'participant_p4copyprovided', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p4copyprovided" class="shadowCheckbox" name="_participant_p4copyprovided" value="1" {{ array_get($intake, 'participant_p4copyprovided')=="1"?'checked="checked"':"" }}>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <h4 class="col-sm-12">Participant 5</h4>
                            <div class="col-md-1 col-sm-4">
                                <label>
                                    Name
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p5name" type="text" value="{{ array_get($intake, 'participants_p5name') }}" id="participants_p5name" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Role or area of support</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p5role" type="text" value="{{ array_get($intake, 'participants_p5role') }}" id="participants_p5role" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <label>
                                    Phone number
                                </label>
                            </div>
                            <div class="col-md-3 col-sm-8">
                                <input name="participants_p5phone" type="text" value="{{ array_get($intake, 'participants_p5phone') }}" id="participants_p5phone" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <label>Other relevant contact details</label>
                            </div>
                            <div class="col-md-4 col-sm-8">
                                <input name="participants_p5contactother" type="text" value="{{ array_get($intake, 'participants_p5contactother') }}" id="participants_p5contactother" class="form-control"{{ isset($readOnly)?'disabled="disabled"':'' }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p5planning">
                                    Participant in planning process?
                                </label>
                                <input id="participant_p5planning" type="hidden" name="participant_p5planning" value="{{ array_get($intake, 'participant_p5planning', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p5planning" class="shadowCheckbox" name="_participant_p5planning" value="1" {{ array_get($intake, 'participant_p5planning')=="1"?'checked="checked"':"" }}>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="participant_p5copyprovided">Copy of plan provided?</label>

                                <input id="participant_p5copyprovided" type="hidden" name="participant_p5copyprovided" value="{{ array_get($intake, 'participant_p5copyprovided', 0) }}" />
                                <input type="checkbox" {{ isset($readOnly)?'disabled="disabled"':'' }} id="_participant_p5copyprovided" class="shadowCheckbox" name="_participant_p5copyprovided" value="1" {{ array_get($intake, 'participant_p5copyprovided')=="1"?'checked="checked"':"" }}>
                            </div>
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
</div>
