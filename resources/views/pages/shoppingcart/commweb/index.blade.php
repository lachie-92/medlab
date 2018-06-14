@extends('app')

@section('content')

@include('pages.shoppingcart.commweb.partial.breadcrumbs')
@include('pages.shoppingcart.commweb.partial.content')

@endsection

@section('custom_script')

    @include('pages.shoppingcart.commweb.partial.script')

@endsection