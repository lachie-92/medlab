@extends('app')

@section('content')

@include('pages.nutraceuticals.product.partial.breadcrumbs')
@include('pages.nutraceuticals.product.partial.content')
@include('pages.nutraceuticals.product.partial.modal')

@endsection

@section('custom_script')

@include('pages.nutraceuticals.product.partial.script')

@endsection