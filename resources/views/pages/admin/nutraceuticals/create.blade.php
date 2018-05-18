@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12">
        <div class="panel well">
            <h1>New Nutraceutical</h1>
            <form action="{{ route('admin.nutraceuticals.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('components.form.input', [
                    'name'  => 'product_name_index',
                    'label' => 'Product Name Index',
                ])
                @include('components.form.input', [
                    'name'  => 'product_name',
                    'label' => 'Product Name',
                ])
                @include('components.form.input', [
                    'name'  => 'slug',
                    'label' => 'Slug',
                    'extra' => 'Note: changing this value will change the product URL',
                ])

                @include('components.form.textarea', [
                    'name'  => 'short_description',
                    'label' => 'Short Description',
                ])
                @include('components.form.textarea', [
                    'name'  => 'patent',
                    'label' => 'Patent',
                ])
                @include('components.form.textarea', [
                    'name'  => 'general_summary',
                    'label' => 'General Summary',
                ])
                @include('components.form.textarea', [
                    'name'  => 'practitioner_summary',
                    'label' => 'Practitioner Summary',
                ])
                @include('components.form.textarea', [
                    'name'  => 'references',
                    'label' => 'References',
                ])
                @include('components.form.textarea', [
                    'name'  => 'side_effects',
                    'label' => 'Side Effects',
                ])
                @include('components.form.textarea', [
                    'name'  => 'interactions',
                    'label' => 'Interactions',
                ])
                @include('components.form.textarea', [
                    'name'  => 'dosage_information',
                    'label' => 'Dosage Information',
                ])
                @include('components.form.textarea', [
                    'name'  => 'ingredients',
                    'label' => 'Ingredients',
                ])
                @include('components.form.textarea', [
                    'name'  => 'cmi',
                    'label' => 'CMI',
                ])
                @include('components.form.textarea', [
                    'name'  => 'free_from',
                    'label' => 'Free from',
                ])
                @include('components.form.textarea', [
                    'name'  => 'features',
                    'label' => 'Features',
                ])
                @include('components.form.textarea', [
                    'name'  => 'clinical_trials',
                    'label' => 'Clinical Trials',
                ])
                @include('components.form.textarea', [
                    'name'  => 'education',
                    'label' => 'Education',
                ])
                @include('components.form.textarea', [
                    'name'  => 'productfaq',
                    'label' => 'Product FAQ',
                ])
                @include('components.form.textarea', [
                    'name'  => 'conditions_associated',
                    'label' => 'Conditions Associated',
                ])
                @include('components.form.textarea', [
                    'name'  => 'additional_resources',
                    'label' => 'Additional Resources',
                ])

                <div class="checkbox @if ($errors->has('in_stock')) has-error @endif">
                    <label>
                        <input type="checkbox" name="in_stock" value="1" @if(old('in_stock')) checked="checked" @endif> In stock
                    </label>
                </div>

                @include('components.form.input_number', [
                    'name'  => 'price_retail',
                    'label' => 'Price Retail',
                ])
                @include('components.form.input_number', [
                    'name'  => 'price_wholesale',
                    'label' => 'Price Wholesale',
                ])
                @include('components.form.input_image', [
                    'name'  => 'image_path',
                    'label' => 'Product Image',
                ])
                @include('components.form.input_image', [
                    'name'  => 'thumb_image_path',
                    'label' => 'Thumbnail Image',
                ])
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.nutraceuticals') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection

