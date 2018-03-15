@extends('app')

@section('content')
    <!-- Edit My Account Details-->

    <div class="container medlab_panel_container">
        <div class="row">
            <!--Account Navigation -->
            <div class="col-md-3 col-sm-3 col-xm-12">
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        My Account
                    </div>

                    <div class="list-group">
                        <a href="/account" class="list-group-item">Dashboard</a>
                        <a href="{{ action("Admin\NutraceuticalsController@index") }}" class="list-group-item">Nutraceuticals</a>
                        <a href="{{ action("Admin\PatentsController@index") }}" class="list-group-item">Patents</a>
                        <a href="/account/logout" class="list-group-item">Logout</a>
                    </div>

                </div>
            </div>
            <!-- Main Content Colum -->
            <div class="col-md-9 col-sm-9 col-xm-12">
                <!-- Edit Account Information -->
                <div class="panel panel-primary medlab_panel">
                    <div class="panel-heading medlab_panel_title">
                        My Account Information
                    </div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="container-fluid">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if (session('message'))
                            <div class="container-fluid">
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="container-fluid">
                                <!--
                                -- Password Box
                                -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <form class="form-horizontal" role="form" method="POST" action="/account/edit/password">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="row">
                                                <h4 class="medlab_dashboard_info_section_title">Change Password</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Current Password</th></tr>
                                                        <tr><td><input type="password" class="form-control" name="password" placeholder="Password"></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">New Password</th></tr>
                                                        <tr><td><input type="password" class="form-control" name="new_password" placeholder="New Password"></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Confirm New Password</th></tr>
                                                        <tr><td><input type="password" class="form-control" name="new_password_confirmation" placeholder="New Password"></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <button id="address_update_btn" class="btn btn-default btn-block" type="submit" style="margin-top: 20px">
                                                Change Password
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
