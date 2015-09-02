@extends('app')

@section('content')

@include('pages.account.dashboard.patient.edit.partial.breadcrumbs')
@include('pages.account.dashboard.patient.edit.partial.content')

@endsection

@section('custom_script')

@include('pages.account.dashboard.patient.edit.partial.script')

@endsection