<!-----------------------------------------------------------------------------------
--
-- Register Patient
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Patient Registration form
        -->
        <div class="col-md-12 col-sm-12 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    PATIENT REGISTRATION FORM
                </div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/account/register/patient">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- User Name
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Your Detail</h4>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Title<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('title', $titleList, old('title'), ['class' => 'form-control']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Email Address<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">First Name<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Last Name<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}"></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--
                                -- User Password
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Password</h4>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Password<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="password" class="form-control" name="password" placeholder="Password" value=""></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Confirm Password<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" value=""></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- User Address
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Address</h4>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Street Address<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="street_address_one" placeholder="Street" value="{{ old('street_address_one') }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Suburb<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="street_address_two" placeholder="Suburb" value="{{ old('street_address_two') }}"></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            @if(old('country') == "New Zealand")
                                                                {!! Form::select('state', $nzRegion, old('state'), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                                            @else
                                                                {!! Form::select('state', $auState, old('state'), ['class' => 'form-control', 'id' => 'state_select']) !!}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Country<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('country', $country, old('country'), ['class' => 'form-control', 'data-change-state' => 'state_select']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="postcode" placeholder="Post Code" value="{{ old('postcode') }}"></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Telephone<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="telephone" placeholder="Phone Num." value="{{ old('telephone') }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Mobile Phone<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="mobile_phone" placeholder="Mobile Num." value="{{ old('mobile_phone') }}"></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div style="margin-top: 87px;">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>

                                <!--
                                -- User Practitioner info
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Practitioner Information</h4>

                                        <div class="alert alert-info" style="text-align: center; margin-bottom: 5px; margin-top: 5px;">
                                            Please use this search function to find your Practitioner.
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region</th></tr>
                                                    <tr>
                                                        <td>
                                                            @if(old('practitioner_country_select') == "New Zealand")
                                                                {!! Form::select('practitioner_state', $nzRegion, old('practitioner_state'), ['class' => 'form-control', 'id' => 'practitioner_state_select']) !!}
                                                            @else
                                                                {!! Form::select('practitioner_state', $auState, old('practitioner_state'), ['class' => 'form-control', 'id' => 'practitioner_state_select']) !!}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Country</th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('practitioner_country', $country, old('practitioner_country'), ['class' => 'form-control', 'data-change-state' => 'practitioner_state_select', 'id' => 'practitioner_country_select']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Suburb</th></tr>
                                                    <tr><td><input type="text" id="practitioner_suburb" class="form-control" name="practitioner_suburb" placeholder="Suburb" value=""></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code</th></tr>
                                                    <tr><td><input type="text" id="practitioner_postcode" class="form-control" name="practitioner_postcode" placeholder="Post Code" value=""></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Name of the Practitioner Clinic</th></tr>
                                                    <tr><td><input type="text" id="practitioner_clinic" class="form-control" name="practitioner_clinic" placeholder="Practitioner Clinic Name" value=""></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">First Name</th></tr>
                                                    <tr><td><input type="text" id="practitioner_first_name" class="form-control" name="practitioner_first_name" placeholder="First Name" value=""></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Last Name</th></tr>
                                                    <tr><td><input type="text" id="practitioner_last_name" class="form-control" name="practitioner_last_name" placeholder="Last Name" value=""></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div style="margin-top: 10px;">
                                            <button type="button" id="find_practitioner_btn" title="Find Practitioner" class="btn btn-primary btn-block">
                                                Find Practitioner
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Practitioner Search Box
                                -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Practitioner Search</h4>
                                        <br>
                                        <div class="well medlab_registration_search_result_well" style="background-image: none">
                                            <div class="medlab_registration_search_result">
                                                SEARCH RESULTS
                                            </div>
                                            <div id="find_practitioner_display_box" style="max-height: 300px; overflow: scroll;">

                                            </div>
                                        </div>
                                        <p>
                                            <input type="hidden" name="practitioner_not_found" value="0">
                                            @if (old('practitioner_not_found'))
                                                <input type="checkbox" id="practitioner_not_found" name="practitioner_not_found" value="1" checked>
                                            @else
                                                <input type="checkbox" id="practitioner_not_found" name="practitioner_not_found" value="1">
                                            @endif
                                            If you are unable to find your practitioner, please select this checkbox, and
                                            fill in the information below. We will contact your practitioner, in order to sign-up.
                                        </p>


                                        <!--
                                        -- Practitioner not Found box
                                        -->
                                        @if (old('practitioner_not_found'))
                                            <div class="collapse in" id="practitioner_manual_handling">
                                        @else
                                            <div class="collapse" id="practitioner_manual_handling">
                                        @endif
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">State/Region</th></tr>
                                                        <tr>
                                                            <td>
                                                                @if(old('practitioner_not_found_country') == "New Zealand")
                                                                    {!! Form::select('practitioner_not_found_state', $nzRegion, old('practitioner_not_found_state'), ['class' => 'form-control', 'id' => 'practitioner_not_found_state_select']) !!}
                                                                @else
                                                                    {!! Form::select('practitioner_not_found_state', $auState, old('practitioner_not_found_state'), ['class' => 'form-control', 'id' => 'practitioner_not_found_state_select']) !!}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Country</th></tr>
                                                        <tr>
                                                            <td>
                                                                {!! Form::select('practitioner_not_found_country', $country, old('practitioner_not_found_country'), ['class' => 'form-control', 'data-change-state' => 'practitioner_not_found_state_select']) !!}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Post Code</th></tr>
                                                        <tr><td><input type="text" class="form-control" name="practitioner_not_found_postcode" id="practitioner_not_found_postcode" placeholder="Post Code" value="{{ old('practitioner_not_found_postcode') }}"></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Practitioner Name</th></tr>
                                                        <tr><td><input type="text" class="form-control" name="practitioner_not_found_practitioner_name" id="practitioner_not_found_practitioner_name" placeholder="Title First Name Last Name" value="{{ old('practitioner_not_found_practitioner_name') }}"></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Practitioner Clinic</th></tr>
                                                        <tr><td><input type="text" class="form-control" name="practitioner_not_found_clinic" id="practitioner_not_found_clinic"  placeholder="Practitioner Clinic" value="{{ old('practitioner_not_found_clinic') }}"></td></tr>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Terms and Conditions
                                -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Terms For Use of Website</h4>
                                        <br>
                                        <div class="well">
                                            <p>
                                                I / We have read and agree to the <a class="medlab_panel_content_link" href="/policies/terms-and-conditions">Terms and Conditions</a>,
                                                <a class="medlab_panel_content_link" href="/policies/medlab-sales-policy"> Terms of Sale</a>
                                                and the <a class="medlab_panel_content_link" href="/policies/privacy-policy">Medlab Privacy Policy</a>
                                                displayed on the Medlab website. I / We agree to comply with and be bound by
                                                these policy documents (which may be amended or updated from time to time).
                                            </p>

                                            <p>
                                                Should you have any enquires on Medlab Clinical Pty Ltd Terms and Conditions,
                                                Terms of Sale or Privacy Policy please contact:
                                                <a class="medlab_panel_content_link" href="mailto:hello@medlab.co">hello@medlab.co</a> or call 1300 369 570.
                                            </p>

                                            <p>
                                                By clicking on the the submit, you Agree to the
                                                <a class="medlab_panel_content_link" href="/policies/terms-and-conditions">Terms and Conditions</a>,
                                                <a class="medlab_panel_content_link" href="/policies/medlab-sales-policy">Terms of Sale</a> &amp;
                                                <a class="medlab_panel_content_link" href="/policies/privacy-policy">Medlab's Privacy Policy</a>.
                                            </p>
                                        </div>

                                        <p>
                                            <input type="hidden" name="agree" value="0">
                                            <input type="checkbox" name="agree" value="1"> Please check to agree to our Terms & Conditions.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>
                            <button type="submit" title="Register" class="btn btn-primary btn-block">Submit</button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>

    </div>
</div>

