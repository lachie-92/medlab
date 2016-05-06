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

class ModifyProduct extends Command
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
                'product_name_index' => "Enbiotic 60's",
                'product_name' => 'Enbiotic&trade; 60&#39;s',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">Enbiotic&trade; 60&#39;s</h4>
                    <p>
                        <strong>PATENT PROTECTED</strong>
                    </p>
                    <p>
                        EnBiotic&trade; is a high quality, high strength digestive enzyme and probiotic combination developed to
                        assist with digestive function and nutrient absorption.
                    </p>
                    ',
            ],

            [
                'product_name_index' => "Enbiotic 120's",
                'product_name' => 'Enbiotic&trade; 120&#39;s',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">Enbiotic&trade; 120&#39;s</h4>
                    <p>
                        <strong>PATENT PROTECTED</strong>
                    </p>
                    <p>
                        EnBiotic&trade; is a high quality, high strength digestive enzyme and probiotic combination developed to
                        assist with digestive function and nutrient absorption.
                    </p>
                    ',
            ],

            [
                'product_name_index' => "GastroDaily",
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">GastroDaily&trade;</h4>
                    <p>
                        <strong>PATENT PENDING</strong>
                    </p>
                    <p>
                        GastroDaily&trade; is scientifically formulated to assist in supporting healthy gastrointestinal
                        and natural immunological function and to help relieve symptoms of medically diagnosed Irritable
                        Bowel Syndrome.
                    </p>
                    ',
            ],
            [
                'product_name_index' => "MultiBiotic 60's",
                'product_name' => 'MultiBiotic&trade; 60&#39;s',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">MultiBiotic&trade; 60&#39;s</h4>
                    <p>
                        <strong>PATENT PENDING</strong>
                    </p>
                    <p>
                        MultiBiotic&trade; is formulated to target both the small and large bowel for gastrointestinal
                        microbial balance. MultiBiotic™ may assist in maintaining optimal gastrointestinal care and
                        immune function.
                    </p>
                    ',
            ],
            [
                'product_name_index' => "MultiBiotic 30's",
                'product_name' => 'MultiBiotic&trade; 30&#39;s',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">MultiBiotic&trade; 30&#39;s</h4>
                    <p>
                        <strong>PATENT PENDING</strong>
                    </p>
                    <p>
                        MultiBiotic&trade; is formulated to target both the small and large bowel for gastrointestinal
                        microbial balance. MultiBiotic™ may assist in maintaining optimal gastrointestinal care and
                        immune function.
                    </p>
                    ',
            ],
            [
                'product_name_index' => "NRGBiotic 60's",
                'product_name' => 'NRGBiotic&trade; 60&#39;s',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">NRGBiotic&trade; 60&#39;s</h4>
                    <p>
                        <strong>PATENT PROTECTED</strong>
                    </p>
                    <p>
                        NRGBiotic&trade; is formulated to improve mitochondrial function and intracellular energy production.
                    </p>
                    ',
            ],
            [
                'product_name_index' => "NRGBiotic 120's",
                'product_name' => 'NRGBiotic&trade; 120&#39;s',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">NRGBiotic&trade; 120&#39;s</h4>
                    <p>
                        <strong>PATENT PROTECTED</strong>
                    </p>
                    <p>
                        NRGBiotic&trade; is formulated to improve mitochondrial function and intracellular energy production.
                    </p>
                    ',
            ]

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
