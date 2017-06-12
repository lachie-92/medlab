@extends('app')

@section('content')

@include('pages.account.dashboard.patient.main.partial.breadcrumbs')
<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Account Navigation
        -->
        <div class="col-md-3 col-sm-3 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    My Account
                </div>

                <div class="list-group">
                    <a href="/account" class="list-group-item">Dashboard</a>
                    <a href="/account/edit" class="list-group-item">Edit Account Details</a>
                    <a href="/account/orders" class="list-group-item">My Orders</a>
                    <a href="/account/patient-history" class="list-group-item">My Histories</a>
                    <a href="/account/careplan" class="list-group-item"><strong>My Care Plans</strong></a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-xs-9">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <div class="panel-title">
                        Care Plan Configuration
                    </div>
                </div>
                <div class="panel-body">

                    @if (session('message'))
                        <div class="container-fluid">
                            <div class="alert alert-success" style="text-align: center">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    <div class="col-md-12 col-sm-12">
                        <div class="well" style="background-color: transparent; background-image: none">
                            <table class="container table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Consultant address</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultants as $consultant)
                                    <tr>
                                        <td>{{ isset($consultant->practitioner->user->email)?$consultant->practitioner->user->email:$consultant->user_email}}</td>
                                        <td>{{ isset($consultant->user_id)?'Active':'Pending'}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr />
                            <h3>Invite consultant</h3>
                            <p>Enter the email address of the consulting physician you would like to share this Care Plan with. They will receive an invitation via email.</p>
                            <form action="{{ route('account.careplan.configure.save', $careplan->id) }}" method="POST" id="patient-history">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="text" name="email" placeholder="drhowser@gmail.com" />
                                <input type="submit" name="_Btnnext" value="Save" id="Btnnext" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
