@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12">
        <div class="panel well">
            <h1>{{ $product->product_name }}</h1>
            <form action="{{ route('admin.nutraceuticals.update', $product->slug) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @include('components.form.input', [
                    'name'  => 'product_name_index',
                    'label' => 'Product Name Index',
                    'item'  => $product,
                ])
                @include('components.form.input', [
                    'name'  => 'product_name',
                    'label' => 'Product Name',
                    'item'  => $product,
                ])
                @include('components.form.input', [
                    'name'  => 'slug',
                    'label' => 'Slug',
                    'item'  => $product,
                    'extra' => 'Note: changing this value will change the product URL',
                ])

                @include('components.form.textarea', [
                    'name'  => 'short_description',
                    'label' => 'Short Description',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'patent',
                    'label' => 'Patent',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'general_summary',
                    'label' => 'General Summary',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'practitioner_summary',
                    'label' => 'Practitioner Summary',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'references',
                    'label' => 'References',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'side_effects',
                    'label' => 'Side Effects',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'interactions',
                    'label' => 'Interactions',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'dosage_information',
                    'label' => 'Dosage Information',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'ingredients',
                    'label' => 'Ingredients',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'cmi',
                    'label' => 'CMI',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'free_from',
                    'label' => 'Free from',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'features',
                    'label' => 'Features',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'clinical_trials',
                    'label' => 'Clinical Trials',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'education',
                    'label' => 'Education',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'productfaq',
                    'label' => 'Product FAQ',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'conditions_associated',
                    'label' => 'Conditions Associated',
                    'item'  => $product,
                ])
                @include('components.form.textarea', [
                    'name'  => 'additional_resources',
                    'label' => 'Additional Resources',
                    'item'  => $product,
                ])

                <div class="checkbox @if ($errors->has('in_stock')) has-error @endif">
                    <label>
                        <input type="checkbox" name="in_stock" value="1" @if(old('in_stock', $product->in_stock)) checked="checked" @endif> In stock
                    </label>
                </div>

                @include('components.form.input_number', [
                    'name'  => 'price_retail',
                    'label' => 'Price Retail',
                    'item'  => $product,
                ])
                @include('components.form.input_number', [
                    'name'  => 'price_wholesale',
                    'label' => 'Price Wholesale',
                    'item'  => $product,
                ])
                @include('components.form.input_image', [
                    'name'  => 'image_path',
                    'label' => 'Product Image',
                    'item'  => $product,
                ])
                @include('components.form.input_image', [
                    'name'  => 'thumb_image_path',
                    'label' => 'Thumbnail Image',
                    'item'  => $product,
                ])
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.nutraceuticals') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection

