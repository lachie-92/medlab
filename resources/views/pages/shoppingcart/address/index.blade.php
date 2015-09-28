@extends('app')

@section('content')

@include('pages.shoppingcart.address.partial.breadcrumbs')
@include('pages.shoppingcart.address.partial.content')

@endsection

@section('custom_script')

    @include('pages.shoppingcart.address.partial.script')

@endsection