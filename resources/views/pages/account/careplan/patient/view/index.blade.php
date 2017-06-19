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
            @include('pages.account.careplan.patient.edit.partial.page1')
            @include('pages.account.careplan.patient.edit.partial.page2')
            @include('pages.account.careplan.practitioner.view.partial.consultants')
        </div>
    </div>
</div>
@endsection
