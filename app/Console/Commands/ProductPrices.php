<?php

namespace App\Console\Commands;

use App\Buy_One_Get_One_Free;
use App\Price_Discount;
use App\Promotion;
use DB;
use Carbon\Carbon;
use App\Product;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class ProductPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modify:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete old deals to replace with new';

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
        Model::unguard();


        $modify_array = [

            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 60s',
                'price_retail' => 29.95,
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 120s',
                'price_retail' => 52.68,
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 60s',
                'price_retail' => 25.41,
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 120s',
                'price_retail' => 45.41,
            ],
            [
                'product_name_index' => 'Biotic Jnr.',
                'price_retail' => 57.12,
            ],
            [
                'product_name_index' => "BioticNatal",
                'price_retail' => 53.93,
            ],
            [
                'product_name_index' => "Enbiotic 60's",
                'price_retail' => 41.86,
            ],
            [
                'product_name_index' => "Enbiotic 120's",
                'price_retail' => 76.75,
            ],
            [
                'product_name_index' => 'GastroDaily',
                'price_retail' => 42.86,
            ],
            [
                'product_name_index' => '12Mg Optima Relax',
                'price_retail' => 44.01,
            ],
            [
                'product_name_index' => "MultiBiotic 30's",
                'price_retail' => 28.89,
            ],
            [
                'product_name_index' => "MultiBiotic 60's",
                'price_retail' => 52.14,
            ],
            [
                'product_name_index' => "NanoCelle Activated B12",
                'price_retail' => 23.88,
            ],
            [
                'product_name_index' => 'NanoCelle B12',
                'price_retail' => 22.36,
            ],
            [
                'product_name_index' => 'NanoCelle D3',
                'price_retail' => 25.89,
            ],
            [
                'product_name_index' => "NRGBiotic 60's",
                'price_retail' => 46.47,
            ],
            [
                'product_name_index' => "NRGBiotic 120's",
                'price_retail' => 81.87,
            ],
            [
                'product_name_index' => "NOS",
                'price_retail' => 36.63,
            ],
            [
                'product_name_index' => 'ORSBiotic',
                'price_retail' => 30.09,
            ],
            [
                'product_name_index' => "SB 5B",
                'price_retail' => 41.70,
            ],
            [
                'product_name_index' => 'W8Biotic Lemon & Lime',
                'price_retail' => 44.16,
            ],
            [
                'product_name_index' => 'W8Biotic Strawberries & Cream',
                'price_retail' => 44.16,
            ],
            [
                'product_name_index' => "Manuka-C",
                'price_retail' => 28.9,
            ],

        ];

        $this->modify_products($modify_array);

        Model::reguard();
    }

    private function modify_products($modify_array)
    {
        foreach($modify_array as $modify_product) {

            if ($modify_product['product_name_index'] == 'All') {
                $product_all = Product::all();
                foreach ($product_all as $product) {
                    $this->update_product($product, $modify_product);
                    $this->comment('test');
                }
            }

            else {
                $product = Product::where('product_name_index', 'like', '%' . $modify_product['product_name_index'] . '%')->firstOrFail();
                $this->update_product($product, $modify_product);
            }

        }
    }

    private function update_product($product, $modify_array)
    {
        if(!empty($modify_array['product_name'])) {
            $product->product_name = $modify_array['product_name'];
        }
        if(!empty($modify_array['short_description'])) {
            $product->short_description = $modify_array['short_description'];
        }
        if(!empty($modify_array['patent'])) {
            $product->patent = $modify_array['patent'];
        }
        if(!empty($modify_array['general_summary'])) {
            $product->general_summary = $modify_array['general_summary'];
        }
        if(!empty($modify_array['practitioner_summary'])) {
            $product->practitioner_summary = $modify_array['practitioner_summary'];
        }
        if(!empty($modify_array['ingredients'])) {
            $product->ingredients = $modify_array['ingredients'];
        }
        if(!empty($modify_array['references'])) {
            $product->references = $modify_array['references'];
        }
        if(!empty($modify_array['side_effects'])) {
            $product->side_effects = $modify_array['side_effects'];
        }
        if(!empty($modify_array['interactions'])) {
            $product->interactions = $modify_array['interactions'];
        }
        if(!empty($modify_array['dosage_information'])) {
            $product->dosage_information = $modify_array['dosage_information'];
        }
        if(!empty($modify_array['cmi'])) {
            $product->cmi = $modify_array['cmi'];
        }
        if(!empty($modify_array['free_from'])) {
            $product->free_from = $modify_array['free_from'];
        }
        if(!empty($modify_array['in_stock'])) {
            $product->in_stock = $modify_array['in_stock'];
        }
        if(!empty($modify_array['patent'])) {
            $product->patent = $modify_array['patent'];
        }
        if(!empty($modify_array['price_retail'])) {
            $product->price_retail = $modify_array['price_retail'];
        }
        if(!empty($modify_array['patent'])) {
            $product->patent = $modify_array['patent'];
        }
        if(!empty($modify_array['price_wholesale'])) {
            $product->price_wholesale = $modify_array['price_wholesale'];
        }
        if(!empty($modify_array['image_path'])) {
            $product->image_path = $modify_array['image_path'];
        }
        if(!empty($modify_array['thumb_image_path'])) {
            $product->thumb_image_path = $modify_array['thumb_image_path'];
        }
        if(!empty($modify_array['slug'])) {
            $product->slug = $modify_array['slug'];
        }
        $product->save();
    }
}
