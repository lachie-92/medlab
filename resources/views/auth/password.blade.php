@extends('app')

@section('content')

@include('auth.password_partial.breadcrumbs')
@include('auth.password_partial.content')

@endsection

@section('custom_script')

@include('auth.password_partial.script')

@endsection