<!-----------------------------------------------------------------------------------
--
-- Recovery
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Recovery form
        -->
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-4 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Forgot your password?
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

                    @if (session('status'))
                        <div class="container-fluid">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif

                    <p style="text-align: center">
                        Please enter your email address below. You will receive a link to reset your password.
                    </p>

                    <form class="form-horizontal" role="form" method="POST" action="/account/recovery">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Reset Password</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-4">
                                <br>
                                <a class="btn btn-default" href="/account/login">Back to Login</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

