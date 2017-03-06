@extends('app')

@section('content')

@include('pages.account.dashboard.patient.main.partial.breadcrumbs')
@include('pages.account.patient-history.patient.edit.partial.page'.$page)
@endsection

@section('custom_script')

@endsection
