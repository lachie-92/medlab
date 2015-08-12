<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all()->first();

        return view('pages.nutraceuticals.product.index', compact('product'));
    }
}
