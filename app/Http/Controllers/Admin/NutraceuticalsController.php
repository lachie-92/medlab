<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminNutraceuticalUpdate as AdminNutraceuticalUpdateRequest;

class NutraceuticalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('pages.admin.nutraceuticals.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.nutraceuticals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminNutraceuticalUpdateRequest $request)
    {
        $product = new Product;
        return $this->update($request, $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('pages.admin.nutraceuticals.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminNutraceuticalUpdateRequest $request, Product $product)
    {
        $product->fill($request->only([
            'product_name_index',
            'product_name',
            'slug',
            'short_description',
            'patent',
            'general_summary',
            'practitioner_summary',
            'references',
            'side_effects',
            'interactions',
            'dosage_information',
            'ingredients',
            'cmi',
            'free_from',
            'features',
            'clinical_trials',
            'education',
            'productfaq',
            'conditions_associated',
            'additional_resources',
            'price_retail',
            'price_wholesale',
        ]));

        $product->in_stock = $request->has('in_stock');

        if ($request->hasFile('image_path')) {
            $destinationPath = sprintf('img/products/%s', $product->slug);
            $fileName = sprintf('full.%s', $request->file('image_path')->guessExtension());
            $product->image_path = sprintf('/%s/%s', $destinationPath, $fileName);
            $request->file('image_path')->move(public_path($destinationPath), $fileName);
        }
        if ($request->hasFile('thumb_image_path')) {
            $destinationPath = sprintf('img/products/%s', $product->slug);
            $fileName = sprintf('thumb.%s', $request->file('thumb_image_path')->guessExtension());
            $product->thumb_image_path = sprintf('/%s/%s', $destinationPath, $fileName);
            $request->file('thumb_image_path')->move(public_path($destinationPath), $fileName);
        }

        $product->save();

        return redirect(route('admin.nutraceuticals'))->with([ 'message' => sprintf('%s successfully updated', $product->product_name) ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('admin.nutraceuticals'))->with([ 'message' => sprintf('%s successfully deleted', $product->product_name) ]);
    }
}
