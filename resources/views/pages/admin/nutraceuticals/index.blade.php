@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12">
        <div class="panel well">
            @if (Session::has('message'))
            <div class="alert alert-info" role="alert">{{ Session::get('message') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Wholesale Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td><a href="{{ route('admin.nutraceuticals.edit', $product->slug )}}">{{ $product->product_name }}</a></td>
                        <td>${{ number_format($product->price_retail, 2) }}</td>
                        <td>${{ number_format($product->price_wholesale, 2) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

