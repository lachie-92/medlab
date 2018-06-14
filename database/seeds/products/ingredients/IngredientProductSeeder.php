<?php

use Illuminate\Database\Seeder;

use App\Ingredient;
use App\Product;

class IngredientProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredient_to_product = [

            'Coenzyme Q10' => [

                "NRGBiotic 60's",
                "NRGBiotic 120's"
            ],

            'Bifidobacterium bifidum' => [

                "NRGBiotic 60's",
                "NRGBiotic 120's",
                "MultiBiotic 30's",
                "MultiBiotic 60's",
                "MultiBiotic 120's",
            ],

            'Bifidobacterium breve' => [

                "MultiBiotic 30's",
                "MultiBiotic 60's",
                "MultiBiotic 120's",
            ],

            'Lactobacillus acidophilus' => [

                "NRGBiotic 60's",
                "NRGBiotic 120's",
                "MultiBiotic 30's",
                "MultiBiotic 60's",
                "MultiBiotic 120's",
            ],

            'Lactobacillus rhamnosus' => [

                "MultiBiotic 30's",
                "MultiBiotic 60's",
                "MultiBiotic 120's",
            ],

            'Magnesium orotate' => [

                "NRGBiotic 60's",
                "NRGBiotic 120's",
            ],

            'Lactobacillus plantarum' => [

                "MultiBiotic 30's",
                "MultiBiotic 60's",
                "MultiBiotic 120's",
            ],

            'Streptococcus thermophilus' => [

                "NRGBiotic 60's",
                "NRGBiotic 120's",
                "MultiBiotic 30's",
                "MultiBiotic 60's",
                "MultiBiotic 120's",
            ]
        ];

        $this->buildTable($ingredient_to_product);
    }

    private function buildTable($ingredient_to_product) {

        $productList = $this->getProductList();
        $ingredientList = $this->getIngredientList();

        foreach ($ingredient_to_product as $ingredient_group => $products_under_ingredient_group) {

            foreach ($products_under_ingredient_group as $product) {

                if(array_key_exists($product, $productList)) {
                    $productList[$product]->ingredients()->attach($ingredientList[$ingredient_group]);
                }

            }
        }
    }

    private function getIngredientList()
    {
        $ingredients = Ingredient::all();
        $ingredientList = [];

        foreach ($ingredients as $ingredient) {

            $ingredientList[$ingredient->ingredient_name] = $ingredient;
        }

        return $ingredientList;
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
