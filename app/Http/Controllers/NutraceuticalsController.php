<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Ingredient;
use App\Category;

class NutraceuticalsController extends Controller
{
    /**
     * Display the product listing page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function products(Request $request)
    {
        $this->validate($request, [
            'q' => array('regex:/^([A-Z]|Show All)$/')
        ]);

        $productList = $this->createSortList(
            ['B', 'E', 'G', 'I', 'M', 'N', 'O', 'S', 'W', 'Show All']
        );

        // If q not exits, default is Show All
        $searchLetter = $request->get('q', 'Show All');

        switch($searchLetter) {

            case (preg_match( '/^[A-Z]$/', $searchLetter ) ? true : false):
                $products = Product::AlphabeticalOrder($searchLetter)->get();
                $productList[$searchLetter] = 'active';
                break;
            case 'Show All':
                $products = Product::orderBy('product_name_index', 'ASC')->get();
                $productList['Show All'] = 'active';
                break;
            default:
                $products = Product::orderBy('product_name_index', 'ASC')->get();
                $productList['Show All'] = 'active';
        }

        return view('pages.nutraceuticals.sortbyname.index', compact('products', 'productList'));
    }

    /**
     * Display the product information page
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function showProduct(Product $product)
    {
        $product->load(['practitioner_pricing' => function($query) {
            return $query->where('user_id', $this->user->patient->practitioner->user->id);
        }]);
        return view('pages.nutraceuticals.product.index', compact('product'));
    }

    /**
     * Display the category listing page
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $categories = Category::orderBy('category_name', 'ASC')->get();

        return view('pages.nutraceuticals.sortbycategory.index', compact('categories'));
    }

    /**
     * Display the category information page
     *
     * @param Category $category
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function showCategory(Category $category, Request $request)
    {
        $this->validate($request, [
            'q' => array('regex:/^([A-Z]|Show All)$/')
        ]);

        $productList = $this->createSortList([
            'A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'Show All'
        ]);

        // If q not exits, default is Show All
        $searchLetter = $request->get('q', 'Show All');

        switch($searchLetter) {

            case (preg_match( '/^[A-Z]$/', $searchLetter ) ? true : false):
                $products = $category->products()->AlphabeticalOrder($searchLetter)->get();
                $productList[$searchLetter] = 'active';
                break;
            case 'Show All':
                $products = $category->products()->orderBy('product_name_index', 'ASC')->get();
                $productList['Show All'] = 'active';
                break;
            default:
                $products = $category->products()->orderBy('product_name_index', 'ASC')->get();
                $productList['Show All'] = 'active';
        }

        return view('pages.nutraceuticals.category.index', compact('category', 'products', 'productList'));
    }

    /**
     * Display the ingredient listing page
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function ingredients(Request $request)
    {
        $this->validate($request, [
            'q' => array('regex:/^([A-Z]|Show All)$/')
        ]);

        $ingredientList = $this->createSortList([
            'A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'Show All'
        ]);

        // If q not exits, default is Show All
        $searchLetter = $request->get('q', 'Show All');

        switch($searchLetter) {

            case (preg_match( '/^[A-Z]$/', $searchLetter ) ? true : false):
                $ingredients = Ingredient::AlphabeticalOrder($searchLetter)->get();
                $ingredientList[$searchLetter] = 'active';
                break;
            case 'Show All':
                $ingredients = Ingredient::orderBy('ingredient_name', 'ASC')->get();
                $ingredientList['Show All'] = 'active';
                break;
            default:
                $ingredients = Ingredient::orderBy('ingredient_name', 'ASC')->get();
                $ingredientList['Show All'] = 'active';
        }

        return view('pages.nutraceuticals.sortbyingredient.index', compact('ingredients', 'ingredientList'));
    }

    /**
     * Display the faq page
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('pages.nutraceuticals.faq.index');
    }

    /**
     * Create an array contains the configurations for the sorting bar.
     * EnableList is an array which contains the letter/letters to enable for the sorting bar.
     *
     * @param $enableList
     * @return array
     */
    private function createSortList($enableList)
    {
        $sortList = [
            'A' => 'disabled', 'B' => 'disabled', 'C' => 'disabled',
            'D' => 'disabled', 'E' => 'disabled', 'F' => 'disabled',
            'G' => 'disabled', 'H' => 'disabled', 'I' => 'disabled',
            'J' => 'disabled', 'K' => 'disabled', 'L' => 'disabled',
            'M' => 'disabled', 'N' => 'disabled', 'O' => 'disabled',
            'P' => 'disabled', 'Q' => 'disabled', 'R' => 'disabled',
            'S' => 'disabled', 'T' => 'disabled', 'U' => 'disabled',
            'V' => 'disabled', 'W' => 'disabled', 'X' => 'disabled',
            'Y' => 'disabled', 'Z' => 'disabled', 'Show All' => 'disabled'
        ];

        foreach ($enableList as $enable) {

            $sortList[$enable] = '';
        }

        return $sortList;
    }
}
