<?php

use App\Category;
use Illuminate\Database\Seeder;

use App\Ingredient;
use App\Product;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_to_product = [

            'Bone Health' => [
                "NRGBiotic 60's",
                "NRGBiotic 120's",
                "MultiBiotic 30's",
                "MultiBiotic 60's",
                "MultiBiotic 120's",
            ],
            'Digestion' => [

            ],
            'Cardiovascular' => [

            ],
            'Energy' => [

            ],
            'Gastrointestinal Health' => [

            ],
            'Immunity' => [

            ],
            'Inflammation' => [

            ],
            'Kids' => [

            ],
            'Mens' => [

            ],
            'Mitochondrial Function' => [

            ],
            'Nervous System' => [

            ],
            'Pregnancy' => [

            ],
            'Seniors' => [

            ],
            'Womens' => [

            ],
        ];

        $this->buildTable($category_to_product);
    }

    private function buildTable($category_to_product) {

        $productList = $this->getProductList();
        $categoryList = $this->getCategoryList();

        foreach ($category_to_product as $category => $products_under_category) {

            foreach ($products_under_category as $product) {

                $productList[$product]->categories()->attach($categoryList[$category]);
            }
        }
    }

    private function getCategoryList()
    {
        $categories = Category::all();
        $categoryList = [];

        foreach ($categories as $category) {

            $categoryList[$category->category_name] = $category;
        }

        return $categoryList;
    }

    private function getProductList()
    {
        $products = Product::all();
        $productList = [];

        foreach ($products as $product) {

            $productList[$product->product_name_index] = $product;
        }

        return $productList;
    }
}
