<!-----------------------------------------------------------------------------------
--
-- View Practitioner Registration
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Practitioner Registration Approval
        -->
        <div class="col-md-12 col-sm-12 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            Approved Practitioner Registration
                        </div>
                    </div>
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

                    <form class="form-horizontal" role="form" method="POST" action="/account/practitioner-registration/{{ $registration->id }}/create">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Practitioner Name
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Practitioner Detail</h4>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Title<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('title', $titleList, $registration->title, ['class' => 'form-control', 'disabled']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Email Address<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="email" placeholder="Email" value="{{ $registration->email }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">First Name<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ $registration->first_name }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Last Name<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $registration->last_name }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Association Number<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="association_number" placeholder="Association Number" value="{{ $registration->association_number }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Association Name<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="association_type" placeholder="Association Name" value="{{ $registration->association_type }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Telephone<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="telephone" placeholder="Phone Num." value="{{ $registration->telephone }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Mobile Phone<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="mobile_phone" placeholder="Mobile Num." value="{{ $registration->mobile_phone }}" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--
                                -- Practitioner Password
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Password</h4>

                                        <div class="row" style="margin-top: 20px">
                                            <div class="col-md-12 col-sm-12">
                                                <button type="button" id="change_password_btn" class="btn btn-default" disabled>Change Password: No</button>
                                                <input type="hidden" name="change_password" value="0">
                                                <input type="checkbox" id="change_password" name="change_password" class="hidden" value="1">
                                            </div>
                                        </div>

                                        <div  id="password_change_box">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Password<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input type="password" class="form-control" name="password" placeholder="Password" value="" disabled></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Confirm Password<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" value="" disabled></td></tr>
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
                                -- Business Detail
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Business Detail</h4>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Name of the Clinic/Business<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="clinic_name" placeholder="Clinic/Business Name" value="{{ $registration->clinic_name }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Type<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('business_type', $businessTypeList, $registration->business_type, ['class' => 'form-control', 'disabled']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Number<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="business_number" placeholder="Business Num." value="{{ $registration->business_number }}" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Street Address<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="street_address_one" placeholder="Street" value="{{ $registration->street }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Suburb<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="street_address_two" placeholder="Suburb" value="{{ $registration->suburb }}" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            @if($registration->country == 'New Zealand')
                                                                {!! Form::select('state', $nzRegion, $registration->state, ['class' => 'form-control', 'id' => 'state_select', 'disabled']) !!}
                                                            @else
                                                                {!! Form::select('state', $auState, $registration->state, ['class' => 'form-control', 'id' => 'state_select', 'disabled']) !!}
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
                                                            {!! Form::select('country', $country, old('country', $registration->country), ['class' => 'form-control', 'data-change-state' => 'state_select', 'disabled']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="postcode" placeholder="Post Code" value="{{ $registration->postcode }}" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div style="margin-top: 47px;"></div>

                                    </div>
                                </div>

                                <!--
                                -- Clinic Search Box
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Clinic Information</h4>

                                        <div class="alert alert-info" style="text-align: center; margin-bottom: 5px; margin-top: 5px;">
                                            Please use this search function select a clinic for the practitioner
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region</th></tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control" id="company_state_select" name="company_state" disabled>
                                                                <option value="ACT">ACT</option>
                                                                <option value="NSW">NSW</option>
                                                                <option value="NT">NT</option>
                                                                <option value="QLD">QLD</option>
                                                                <option value="SA">SA</option>
                                                                <option value="TAS">TAS</option>
                                                                <option value="VIC">VIC</option>
                                                                <option value="WA">WA</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Country</th></tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control" id="company_country_select" data-change-state="company_state_select" name="company_country" disabled>
                                                                <option selected="selected" value="Australia">Australia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Suburb</th></tr>
                                                    <tr><td><input type="text" id="company_suburb" class="form-control" name="company_suburb" placeholder="Suburb" value="" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code</th></tr>
                                                    <tr><td><input type="text" id="company_postcode" class="form-control" name="company_postcode" placeholder="Post Code" value="" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Name of the Practitioner Clinic</th></tr>
                                                    <tr><td><input type="text" id="company_name" class="form-control" name="company_name" placeholder="Practitioner Clinic Name" value="" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Type</th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('company_type', $businessTypeList, null, ['class' => 'form-control', 'id' => 'company_type', 'disabled']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Number</th></tr>
                                                    <tr><td><input type="text" id="company_business_number" class="form-control" name="company_business_number" placeholder="Business Num." value="" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div style="margin-top: 10px;">
                                            <button type="button" id="find_company_btn" title="Find Clinic" class="btn btn-primary btn-block" disabled>
                                                Find Clinic
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Clinic Result Box
                                -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Clinic Search</h4>
                                        <br>
                                        <div class="well medlab_registration_search_result_well" style="background-image: none">
                                            <div class="medlab_registration_search_result">
                                                SEARCH RESULTS
                                            </div>
                                            <div id="find_company_display_box">
                                                @if (is_null($company) == false)
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Clinic</th>
                                                                <th>Business Num.</th>
                                                                <th>Address</th>
                                                                <th>Suburb</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="radio" name="company_id" value="{{ $company->id }}" style="margin-left: 20px" disabled checked></input>
                                                            </td>
                                                            <td>{{ $company->name }}</td>
                                                            <td>{{ $company->business_number }}</td>
                                                            <td>{{ $company->company_addresses->where('type', 'Physical')->first()->address }}</td>
                                                            <td>{{ $company->company_addresses->where('type', 'Physical')->first()->suburb }}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <p style="text-align: center; margin-top: 30px;">
                                                        No Company found under the search criteria.
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>

                    <p style="text-align: center">
                        <br>
                        <br>
                        <a class="btn btn-default" href="/account/practitioner-registration">Back to Practitioner Registration</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

