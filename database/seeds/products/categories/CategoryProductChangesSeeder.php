<?php

use App\Category;
use Illuminate\Database\Seeder;

use App\Ingredient;
use App\Product;

class CategoryProductChangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_to_product = [

            'Anti-inflammatory' => [
                'MultiBiotic 120\'s',
                'MultiBiotic 60\'s',
                'MultiBiotic 30\'s',
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s',
                'GastroDaily',
                'Enbiotic 120\'s',
                'Enbiotic 60\'s',
                'SB 5B',

            ],
            'Cardiovascular Support' => [
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s',
                'NanoCelle B12',
                'NanoCelle D3',
                '12Mg Optima Relax',
                'NOS',
                'NanoCelle Activated B12'
            ],
            'Endocrine Support' => [
                'W8Biotic Lemon & Lime',
                'W8Biotic Strawberries & Cream',
                'Enbiotic 120\'s',
                'Enbiotic 60\'s'

            ],
            'Gastrointestinal Support' => [
                'W8Biotic Lemon & Lime',
                'W8Biotic Strawberries & Cream',
                'MultiBiotic 120\'s',
                'MultiBiotic 60\'s',
                'MultiBiotic 30\'s',
                'GastroDaily',
                'Biotic Jnr.',
                'ORSBiotic',
                'NRGBiotic 120\'s',
                'NRGBiotic 60\'s',
                'Enbiotic 120\'s',
                'Enbiotic 60\'s',
                'SB 5B',
                'BioticNatal'
            ],
            'Immunological Support' => [
                'MultiBiotic 120\'s',
                'MultiBiotic 60\'s',
                'MultiBiotic 30\'s',
                'GastroDaily',
                'Biotic Jnr.',
                'ORSBiotic',
                'SB 5B',
                'BioticNatal'
            ],
            'Infants and Toddlers' => [
                'Biotic Jnr.',
                'BioticNatal'
            ],
            'Metabolic Support' => [
                'W8Biotic Lemon & Lime',
                'W8Biotic Strawberries & Cream',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s',
                'NRGBiotic 120\'s',
                'NRGBiotic 60\'s',
                'NanoCelle B12'
            ],
            'Musculoskeletal Support' => [
                '12Mg Optima Relax',
                'NanoCelle D3',
                'NOS'
            ],
            'Neurological Support' => [
                '12Mg Optima Relax',
                'NanoCelle B12',
                'BioClean EPA:DHA + CoQ10 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'NOS'
            ],
            'Sports Performance' => [
                '12Mg Optima Relax',
                'ORSBiotic',
                'NRGBiotic 120\'s',
                'NRGBiotic 60\'s',
                'BioClean EPA:DHA + CoQ10 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'NOS'
            ],
            'Support for Men' => [
                '12Mg Optima Relax',
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s'
            ],
            'Support for Pregnancy' => [
                'Biotic Jnr.',
                'BioticNatal'
            ],
            'Support for Seniors' => [
                '12Mg Optima Relax',
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s',
                'NRGBiotic 120\'s',
                'NRGBiotic 60\'s',
                'NanoCelle Activated B12'
            ],
            'Support for Teenagers' => [
                '12Mg Optima Relax',
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s'
            ],
            'Support for Women' => [
                '12Mg Optima Relax',
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s',
                'BioticNatal'
            ],
            'Urogenital Support' => [
                'MultiBiotic 120\'s',
                'MultiBiotic 60\'s',
                'MultiBiotic 30\'s'
            ],
            'Weight Management' => [
                'W8Biotic Lemon & Lime',
                'W8Biotic Strawberries & Cream',
            ],
        ];

        $this->buildTable($category_to_product);
    }

    private function buildTable($category_to_product) {

        $this->resetProductCategories();
        $productList = $this->getProductList();
        $categoryList = $this->getCategoryList();

        foreach ($category_to_product as $category => $products_under_category) {

            foreach ($products_under_category as $product) {

                if(array_key_exists($product, $productList)) {
                    $productList[$product]->categories()->attach($categoryList[$category]);
                }

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

    private function resetProductCategories()
    {
        $products = Product::all();

        foreach ($products as $product) {

            $product->categories()->detach();
        }
    }
}
