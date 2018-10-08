@extends('app')

@section('content')

@include('pages.shoppingcart.order.partial.breadcrumbs')
@include('pages.shoppingcart.order.partial.content')

@endsection

@section('custom_script')

    @include('pages.shoppingcart.order.partial.script')

@endsection