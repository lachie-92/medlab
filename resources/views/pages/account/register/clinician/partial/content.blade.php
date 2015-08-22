<!-----------------------------------------------------------------------------------
--
-- Register Clinician
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Login form
        -->
        <div class="col-md-5 col-sm-5 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Medlab Customer Login
                </div>
                <div class="panel-body">

                    <br>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/account/login">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a class="btn btn-link" href="/account/recovery">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!--
        -- Register Links
        -->
        <div class="col-md-7 col-sm-7 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    New Customer?
                </div>
                <div class="panel-body">
                    <p>
                        By creating an account with our store, you will be able to move through the checkout process
                        faster, store multiple shipping addresses, view and track your orders in your account and more.
                    </p>
                    <div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xm-12">
                                <div id='patientBox' class="medlab_registration_account_box_focus">
                                    <p>
                                        <span class="medlab_registration_account_box_title">
                                            REGISTER AS A PATIENT
                                        </span>
                                    </p>
                                    <p>
                                        This account is open to all consumers wishing to purchase Medlab Clinical
                                        products. It allows full website access, newsletter updates and access to
                                        current deals on products.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xm-12">
                                <div id='clinicianBox' class="medlab_registration_account_box">
                                    <p>
                                        <span class="medlab_registration_account_box_title">
                                            REGISTER AS A CLINICIAN
                                        </span>
                                    </p>
                                    <p>
                                        This account is only open to qualified healthcare practitioners.
                                        A practitioner account provides access to the technical product information
                                        and resources available on our website.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center">
                            <p>
                                <br>
                                Please select appropriate box to for Practitioner or Patient.
                            </p>
                            <a id='registerLink' class="btn btn-primary" href="/account/register/clinician">
                                Create Patient Account
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

