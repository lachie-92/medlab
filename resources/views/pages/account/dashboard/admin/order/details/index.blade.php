@extends('app')

@section('content')

@include('pages.account.dashboard.admin.order.details.partial.breadcrumbs')
@include('pages.account.dashboard.admin.order.details.partial.content')

@endsection

@section('custom_script')

@include('pages.account.dashboard.admin.order.details.partial.script')

@endsection