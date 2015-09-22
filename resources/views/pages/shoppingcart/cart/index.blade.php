@extends('app')

@section('content')

@include('pages.shoppingcart.cart.partial.breadcrumbs')
@include('pages.shoppingcart.cart.partial.content')

@endsection

@section('custom_script')

    @include('pages.shoppingcart.cart.partial.script')

@endsection