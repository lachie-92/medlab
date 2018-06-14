@extends('app')

@section('content')

    @include('auth.reset_partial.breadcrumbs')
    @include('auth.reset_partial.content')

@endsection

@section('custom_script')

    @include('auth.reset_partial.script')

@endsection