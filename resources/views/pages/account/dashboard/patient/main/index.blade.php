@extends('app')

@section('content')

@include('pages.account.dashboard.patient.main.partial.breadcrumbs')
@include('pages.account.dashboard.patient.main.partial.content')

@endsection

@section('custom_script')

@include('pages.account.dashboard.patient.main.partial.script')

@endsection