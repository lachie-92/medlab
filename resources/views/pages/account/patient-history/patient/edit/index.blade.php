@extends('app')

@section('content')

@include('pages.account.dashboard.patient.main.partial.breadcrumbs')

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Main Content Column
        -->
        <div class="col-xs-12">
			@include('pages.account.patient-history.patient.edit.partial.page'.$page)
        </div>
    </div>
</div>
@endsection
