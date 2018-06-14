@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12">
        <div class="panel well">
            <h1>New Patent</h1>
            <form action="{{ route('admin.patents.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('components.form.input', [
                    'name'  => 'product',
                    'label' => 'Product',
                ])
                @include('components.form.input', [
                    'name'  => 'jurisdiction',
                    'label' => 'Jurisdiction',
                ])
                @include('components.form.input', [
                    'name'  => 'application_number',
                    'label' => 'Application Number',
                ])
                @include('components.form.textarea', [
                    'name'  => 'description',
                    'label' => 'Description',
                ])
                @include('components.form.input', [
                    'name'  => 'filing_date',
                    'label' => 'Filing Date',
                ])
                @include('components.form.input', [
                    'name'  => 'status',
                    'label' => 'Status',
                ])
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.patents') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection

