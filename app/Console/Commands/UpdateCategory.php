<?php

namespace App\Console\Commands;

use App\Category;
use App\Product;
use Illuminate\Console\Command;

class UpdateCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for running temp codes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $category_to_product = [

            'Anti-inflammatory' => [
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
                'Enbiotic 60\'s',
                'Manuka-C'
            ],
            'Gastrointestinal Support' => [
                'W8Biotic Lemon & Lime',
                'W8Biotic Strawberries & Cream',
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
                'MultiBiotic 60\'s',
                'MultiBiotic 30\'s',
                'GastroDaily',
                'Biotic Jnr.',
                'ORSBiotic',
                'SB 5B',
                'BioticNatal',
                'Manuka-C'
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
                'NOS',
                'Manuka-C'
            ],
            'Support for Men' => [
                '12Mg Optima Relax',
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s',
                'Manuka-C'
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
                'NanoCelle Activated B12',
                'Manuka-C'
            ],
            'Support for Teenagers' => [
                '12Mg Optima Relax',
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s',
                'Manuka-C'
            ],
            'Support for Women' => [
                '12Mg Optima Relax',
                'BioClean EPA:DHA + Plant Sterols 120s',
                'BioClean EPA:DHA + Plant Sterols 60s',
                'BioClean EPA:DHA + CoQ10 120s',
                'BioClean EPA:DHA + CoQ10 60s',
                'BioticNatal',
                'Manuka-C'
            ],
            'Urogenital Support' => [
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

    private function resetProductCategories()
    {
        $products = Product::all();

        foreach ($products as $product) {

            $product->categories()->detach();
        }
    }
}
