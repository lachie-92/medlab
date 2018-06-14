@extends('app')

@section('content')

@include('pages.shoppingcart.payment.partial.breadcrumbs')
@include('pages.shoppingcart.payment.partial.content')

@endsection

@section('custom_script')

    @include('pages.shoppingcart.payment.partial.script')

@endsection