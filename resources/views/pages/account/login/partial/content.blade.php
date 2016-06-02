<!-----------------------------------------------------------------------------------
--
-- Login
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    @if (session('status'))
        <div class="container-fluid">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif
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
                        Create an online account with Medlab for the ability to view product information, purchase product
                        online through a secure checkout, view your account history and much more.
                    </p>
                    <div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xm-12" >
                                <div id='patientBox' class="medlab_registration_account_box">
                                    <p>
                                        <span class="medlab_registration_account_box_title">
                                            REGISTER AS A PATIENT
                                        </span>
                                    </p>
                                    <p>
                                        <ul style="padding-left: 20px;">
                                            <li>Referred by a qualified healthcare practitioner</li>
                                            <li>Purchase prescribed product through a secure checkout</li>
                                            <li>View personal shipping and billing information</li>
                                            <li>View order history<br>&nbsp;</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xm-12" >
                                <div id='clinicianBox' class="medlab_registration_account_box_focus">
                                    <p>
                                        <span class="medlab_registration_account_box_title">
                                            REGISTER AS A PRACTITIONER
                                        </span>
                                    </p>
                                    <p>
                                        <ul style="padding-left: 20px;">
                                            <li>Open to qualified healthcare practitioners</li>
                                            <li>Access technical product information</li>
                                            <li>Online educational resources and published research papers</li>
                                            <li>Monthly offers available online</li>
                                            <li>Purchase product through a secure checkout</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center">
                            <p>
                                <br>
                                Please select appropriate box to for Practitioner or Patient.
                            </p>
                            <a id='registerLink' class="btn btn-primary" href="/account/register/practitioner">
                                Create Practitioner Account
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

