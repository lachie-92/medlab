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
                'product_name_index' => "12Mg Optima Relax",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Add 5g(1 scoop) to 100-200mL of cold water or juice, one(1) to two(2) times per day, or as directed by your
                        healthcare practitioner.
                    </p>
                    ',
            ],
            [
                'product_name_index' => "NRGBiotic 120's",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take two(2) capsules morning and night with water before meals or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/ngrbiotic_60s/2partcap_4_6_1.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "NRGBiotic 60's",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take two(2) capsules morning and night with water before meals or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/ngrbiotic_120s/2partcap_4_3_1_3.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "MultiBiotic 60's",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take 1-2 capsule(s) morning and night with water before meals or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/ngrbiotic_120s/2partcap_4_3_1_3.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "MultiBiotic 30's",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take 1-2 capsule(s) morning and night with water before meals or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/ngrbiotic_120s/2partcap_4_3_1_3.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "SB 5B",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take one (1) capsule, one (1) to two (2) times daily, or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/sb_5b/2partcap.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "BioticNatal",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take one (1) capsule, one (1) to two (2) times daily, or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/bioticnatal/2partcap.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "BioClean EPA:DHA + CoQ10 120s",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take one (1) to two (2) capsules, twice per day, or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/bioclean_epa_dha_coq10_120s/2partcap.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "BioClean EPA:DHA + CoQ10 60s",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take one (1) capsule, one (1) to two (2) times daily, or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/bioclean_epa_dha_coq10_60s/2partcap.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "BioClean EPA:DHA + Plant Sterols 120s",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take two (2) capsules, twice per day, or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/bioclean_epa_dha_plant_sterols_120s/2partcap.png">
                    </div>
                    ',
            ],
            [
                'product_name_index' => "BioClean EPA:DHA + Plant Sterols 60s",
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Take two (2) capsules, twice per day, or as directed by your healthcare practitioner.
                    </p>

                    <h4 class="medlab_product_content_title">
                        Dosage Size
                    </h4>

                    <div style="text-align: center">
                        <img src="/img/products/bioclean_epa_dha_plant_sterols_60s/2partcap.png">
                    </div>
                    ',
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
