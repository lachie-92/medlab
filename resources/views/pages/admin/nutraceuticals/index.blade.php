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
                        <th class="text-right">Price</th>
                        <th class="text-right">Wholesale Price</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td><a href="{{ route('admin.nutraceuticals.edit', $product->slug )}}">{{ $product->product_name }}</a></td>
                        <td class="text-right">${{ number_format($product->price_retail, 2) }}</td>
                        <td class="text-right">${{ number_format($product->price_wholesale, 2) }}</td>
                        <td class="text-right">
                            <form action="{{ route('admin.nutraceuticals.destroy', $product->slug) }}" method="POST" onSubmit="return confirm('Are you sure? This cannot be undone.')">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.nutraceuticals.edit', $product->slug) }}" class="btn btn-default">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br /><br />
            <div class="pull-right">
                <a href="{{ route('admin.nutraceuticals.create') }}" class="btn btn-primary">New Nutraceutical</a>
            </div>
            <br /><br />
        </div>
    </div>
</div>

@endsection

