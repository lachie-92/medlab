@extends('app')

@section('content')

@include('pages.account.dashboard.patient.main.partial.breadcrumbs')
@include('pages.account.careplan.patient.edit.partial.page'.$page)
@endsection
