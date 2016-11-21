<!-----------------------------------------------------------------------------------
--
-- Register Practitioner
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Practitioner Registration form
        -->
        <div class="col-md-12 col-sm-12 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    PRACTITIONER REGISTRATION FORM
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

                    <form class="form-horizontal" role="form" method="POST" action="/account/register/practitioner">
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
                                -- Business information
                                -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Clinic/Business Information</h4>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Name of the Clinic/Business<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="clinic_name" placeholder="Clinic/Business Name" value="{{ old('clinic_name') }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Type<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('business_type', $businessTypeList, old('business_type'), ['class' => 'form-control']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Number (ABN/NZBN)<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="business_number" placeholder="Business Num." value="{{ old('business_number') }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Primary Profession<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="primary_profession" placeholder="Primary Profession" value="{{ old('primary_profession') }}"></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Association Number<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="association_number" placeholder="Association Num." value="{{ old('association_number') }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Association Name<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="association_type" placeholder="Association Name" value="{{ old('association_type') }}"></td></tr>
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
                                -- Business Address
                                -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Business Address</h4>

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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Credit Application</h4>
                                        <br>
                                        <div class = "row">
                                            <div class="col-md-4 col-sm-7">
                                                <b>I/We would like to apply for a credit account:</b>
                                            </div>
                                            <div class="col-md-8 col-sm-5">
                                                {!! Form::radio('credit_application', 1, null) !!}&nbsp;<b>Yes</b>&nbsp;&nbsp;&nbsp;
                                                {!! Form::radio('credit_application', 0, true) !!}&nbsp;<b>No</b>
                                            </div>
                                        </div>

                                        <div id="collapsible">
                                            <div class = "row" style="margin: 10px 0 10px 10px;">
                                                <div class="col-md-5 col-sm-7">
                                                    Are you the registered owner of the business?
                                                </div>
                                                <div class="col-md-7 col-sm-5">
                                                    {!! Form::radio('is_owner', 1, null) !!}&nbsp;Yes&nbsp;&nbsp;&nbsp;
                                                    {!! Form::radio('is_owner', 0, null) !!}&nbsp;No
                                                </div>
                                            </div>
                                            <div class = "row" style="margin: 10px 0 10px 10px;">
                                                <div class="col-md-5 col-sm-7">
                                                    Have any of the individuals above been declared Bankrupt?
                                                </div>
                                                <div class="col-md-7 col-sm-5">
                                                    {!! Form::radio('been_bankrupt', 1, null) !!}&nbsp;Yes&nbsp;&nbsp;&nbsp;
                                                    {!! Form::radio('been_bankrupt', 0, null) !!}&nbsp;No
                                                </div>
                                            </div>
                                            <div class = "row" style="margin: 10px 0 10px 10px;">
                                                <div class="col-md-5 col-sm-7">
                                                    Has the business ever been refused credit?
                                                </div>
                                                <div class="col-md-7 col-sm-5">
                                                    {!! Form::radio('been_refused_credit', 1, null) !!}&nbsp;Yes&nbsp;&nbsp;&nbsp;
                                                    {!! Form::radio('been_refused_credit', 0, null) !!}&nbsp;No
                                                </div>
                                            </div>
                                            <div class="well">
                                                <p>
                                                    <b>Credit Application Declaration</b><br>
                                                    I/We hereby apply for credit with Medlab Clinical Limited and certify that the information supplied
                                                    in this application is true and correct. I/We authorise Medlab Clinical Limited to conduct a Credit
                                                    History Check with an external Credit Agency. I/We understand that all information will be treated as
                                                    confidential and will not be supplied to any other organisation.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Patient Billing</h4>
                                        <br>
                                        <p>
                                            If you do not have a dispensary and are interested in patient billing, a Medlab Practitioner consultant will be in contact with you.
                                        </p>
                                        <div class = "row">
                                            <div class="col-md-4 col-sm-7">
                                                <b>I would like to set-up a patient billing account:</b>
                                            </div>
                                            <div class="col-md-8 col-sm-5">
                                                {!! Form::radio('patient_billing', 1, null) !!}&nbsp;<b>Yes</b>&nbsp;&nbsp;&nbsp;
                                                {!! Form::radio('patient_billing', 0, true) !!}&nbsp;<b>No</b>
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