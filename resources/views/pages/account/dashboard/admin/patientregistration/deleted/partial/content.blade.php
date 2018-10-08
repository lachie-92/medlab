<!-----------------------------------------------------------------------------------
--
-- Deleted Patient Registration
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Deleted Patient Registration
        -->
        <div class="col-md-12 col-sm-12 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Deleted Patient Registration
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

                    <form class="form-horizontal" role="form" method="POST" action="/account/patient-registration/{{ $registration->id }}/create">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Patient Name
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Patient Detail</h4>

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
                                        </div>
                                    </div>
                                </div>

                                <!--
                                -- Patient Password
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

                                        <div id="password_change_box">
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
                                -- Patient Address
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Address</h4>

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
                                        <div class="row">
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
                                        <div style="margin-top: 47px;"></div>
                                    </div>
                                </div>

                                <!--
                                -- User Practitioner info
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Practitioner Information</h4>

                                        <div class="alert alert-info" style="text-align: center; margin-bottom: 5px; margin-top: 5px;">
                                            Please use this search function select a practitioner for the patient
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region</th></tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control" id="practitioner_state_select" name="practitioner_state" disabled>
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
                                                            <select class="form-control" id="practitioner_country_select" data-change-state="practitioner_state_select" name="practitioner_country" disabled>
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
                                                    <tr><td><input type="text" id="practitioner_suburb" class="form-control" name="practitioner_suburb" placeholder="Suburb" value="" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code</th></tr>
                                                    <tr><td><input type="text" id="practitioner_postcode" class="form-control" name="practitioner_postcode" placeholder="Post Code" value="" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Name of the Practitioner Clinic</th></tr>
                                                    <tr><td><input type="text" id="practitioner_clinic" class="form-control" name="practitioner_clinic" placeholder="Practitioner Clinic Name" value="" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div style="margin-top: 10px;">
                                            <button type="button" id="find_practitioner_btn" title="Find Practitioner" class="btn btn-primary btn-block" disabled>
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
                                            <div id="find_practitioner_display_box">
                                                @if (is_null($practitioner) == false)
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Practitioner</th>
                                                                <th>Clinic</th>
                                                                <th>Address</th>
                                                                <th>Suburb</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="radio" name="practitioner_id" value="{{ $practitioner->id }}" style="margin-left: 20px" checked disabled></input>
                                                                </td>
                                                                <td>{{ $practitioner->user->customer->name }}</td>
                                                                <td>{{ $practitioner->company->name }}</td>
                                                                <td>{{ $practitioner->company->company_addresses->where('type', 'Physical')->first()->address }}</td>
                                                                <td>{{ $practitioner->company->company_addresses->where('type', 'Physical')->first()->suburb }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <p style="text-align: center; margin-top: 30px;">
                                                        No Practitioner found under the search criteria.
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="alert alert-info" style="text-align: center">
                                            If no practitioner can be found, please use the information provided below to create a practitioner for the patient.
                                        </div>

                                        <div class="well" style="background-color: transparent; background-image: none">
                                            <h4 class="medlab_registration_form_section_title">Patient's Practitioner Information</h4>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">State/Region</th></tr>
                                                        <tr>
                                                            <td>
                                                                @if($registration->practitioner_country == "New Zealand")
                                                                    {!! Form::select('practitioner_not_found_state', $nzRegion, $registration->practitioner_state, ['class' => 'form-control', 'id' => 'practitioner_not_found_state_select', 'disabled']) !!}
                                                                @else
                                                                    {!! Form::select('practitioner_not_found_state', $auState, $registration->practitioner_state, ['class' => 'form-control', 'id' => 'practitioner_not_found_state_select', 'disabled']) !!}
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
                                                                {!! Form::select('practitioner_not_found_country', $country, old('country', $registration->practitioner_country), ['class' => 'form-control', 'data-change-state' => 'practitioner_not_found_state_select', 'disabled']) !!}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Post Code</th></tr>
                                                        <tr><td><input type="text" class="form-control" name="practitioner_not_found_postcode" placeholder="Post Code" value="{{ $registration->practitioner_postcode }}" disabled></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Practitioner Name</th></tr>
                                                        <tr><td><input type="text" class="form-control" name="practitioner_not_found_practitioner_name" placeholder="Title First Name Last Name" value="{{  $registration->practitioner_name }}" disabled></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Practitioner Clinic</th></tr>
                                                        <tr><td><input type="text" class="form-control" name="practitioner_not_found_clinic" placeholder="Practitioner Clinic" value="{{ $registration->practitioner_clinic }}" disabled></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>

                    <form class="form-horizontal" role="form" method="POST" action="/account/patient-registration/{{ $registration->id }}/restore">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-primary btn-block" type="submit">Restore Registration</button>
                    </form>

                    <p style="text-align: center">
                        <br>
                        <br>
                        <a class="btn btn-default" href="/account/patient-registration">Back to Patient Registration</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

