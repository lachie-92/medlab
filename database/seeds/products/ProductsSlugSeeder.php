<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_and_slug = [

            'Biotic Jnr.' => 'biotic-jnr',
            'Enbiotic 120\'s' => 'enbiotic-120s',
            'Enbiotic 60\'s' => 'enbiotic-60s',
            'MultiBiotic 120\'s' => 'multibiotic-120s',
            'MultiBiotic 60\'s' => 'multibiotic-60s',
            'MultiBiotic 30\'s' => 'multibiotic-30s',
            'NRGBiotic 120\'s' => 'nrgbiotic-120s',
            'NRGBiotic 60\'s' => 'nrgbiotic-60s',
            'NanoCelle B12' => 'nanocelle-b12',
            'NanoCelle D3' => 'nanocelle-d3',
            'W8Biotic Lemon & Lime' => 'w8biotic-lemon-and-lime',
            'W8Biotic Strawberries & Cream' => 'w8biotic-strawberries-and-cream',
            'ORSBiotic' => 'orsbiotic',
            'GastroDaily' => 'gastrodaily',
            'BioClean EPA:DHA + CoQ10 120s' => 'bioclean-epa-dha-coq10-120s',
            'BioClean EPA:DHA + CoQ10 60s' => 'bioclean-epa-dha-coq10-60s',
            'BioClean EPA:DHA + Plant Sterols 120s' => 'bioclean-epa-dha-plant-sterols-120s',
            'BioClean EPA:DHA + Plant Sterols 60s' => 'bioclean-epa-dha-plant-sterols-60s',
            '12Mg Optima Relax' => '12mg-optima-relax'

        ];

        $this->buildTable($product_and_slug);
    }

    private function buildTable($product_and_slug) {

        $productList = $this->getProductList();

        foreach ($product_and_slug as $product => $slug) {

            if(array_key_exists($product, $productList)) {
                $productList[$product]->slug = $slug;
                $productList[$product]->save();
            }
        }
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
