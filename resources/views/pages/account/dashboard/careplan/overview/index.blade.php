@extends('app')

@section('content')

@include('pages.account.dashboard.order.overview.partial.breadcrumbs')
@include('pages.account.dashboard.careplan.overview.partial.content-' . strtolower($user->group));

@endsection

@section('custom_script')

@include('pages.account.dashboard.order.overview.partial.script')

@endsection
