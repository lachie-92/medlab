@extends('app')

@section('content')

@include('pages.account.dashboard.order.details.partial.breadcrumbs')
@include('pages.account.dashboard.order.details.partial.content')

@endsection

@section('custom_script')

@include('pages.account.dashboard.order.details.partial.script')

@endsection