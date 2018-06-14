@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12">
        <div class="panel well">
            <h1>{{ $patent->product_name }}</h1>
            <form action="{{ route('admin.patents.update', $patent) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @include('components.form.input', [
                    'name'  => 'product',
                    'label' => 'Product',
                    'item'  => $patent,
                ])
                @include('components.form.input', [
                    'name'  => 'jurisdiction',
                    'label' => 'Jurisdiction',
                    'item'  => $patent,
                ])
                @include('components.form.input', [
                    'name'  => 'application_number',
                    'label' => 'Application Number',
                    'item'  => $patent,
                ])
                @include('components.form.textarea', [
                    'name'  => 'description',
                    'label' => 'Description',
                    'item'  => $patent,
                ])
                @include('components.form.input', [
                    'name'  => 'filing_date',
                    'label' => 'Filing Date',
                    'item'  => $patent,
                ])
                @include('components.form.input', [
                    'name'  => 'status',
                    'label' => 'Status',
                    'item'  => $patent,
                ])

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.patents') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection

