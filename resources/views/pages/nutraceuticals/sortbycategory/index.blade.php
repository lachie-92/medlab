@extends('app')

@section('content')

@include('pages.nutraceuticals.sortbycategory.partial.breadcrumbs')
@include('pages.nutraceuticals.sortbycategory.partial.content')

@endsection

@section('custom_script')

    @include('pages.nutraceuticals.sortbycategory.partial.script')

@endsection