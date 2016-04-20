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
                'product_name_index' => "MultiBiotic 30's",
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>ACTIVE INGREDIENTS</strong>
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>
                                        <strong>EACH CAPSULE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus rhamnosus (Med 26)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>9 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus acidophilus (Med 27)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>3.75 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus plantarum (Med 25)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.575 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium animalis spp. lactis (Med 13)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>3 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium breve (Med 12)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.75 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium bifidum (Med 11)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 million CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Streptococcus thermophilus (Med 51)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.5 billion CFU</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <th width="136" valign="top">
                                    <p>Total</p>
                                </th>
                                <th width="273" valign="top">
                                    <p>21.075 Billion CFU* (1 capsule)</p>
                                </th>
                            </tr>
                            <tr>
                                <td></td>
                                <th width="273" valign="top">
                                    <p>42.15 Billion CFU* (2 capsules)</p>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <p class="medlab_product_content_sub_title">
                    *CFU: Colony Forming Units
                    </p>
                    ',
            ],
            [
                'product_name_index' => "MultiBiotic 60's",
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>ACTIVE INGREDIENTS</strong>
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>
                                        <strong>EACH CAPSULE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus rhamnosus (Med 26)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>9 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus acidophilus (Med 27)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>3.75 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus plantarum (Med 25)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.575 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium animalis spp. lactis (Med 13)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>3 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium breve (Med 12)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.75 billion CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium bifidum (Med 11)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 million CFU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Streptococcus thermophilus (Med 51)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.5 billion CFU</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <th width="136" valign="top">
                                    <p>Total</p>
                                </th>
                                <th width="273" valign="top">
                                    <p>21.075 Billion CFU* (1 capsule)</p>
                                </th>
                            </tr>
                            <tr>
                                <td></td>
                                <th width="273" valign="top">
                                    <p>42.15 Billion CFU* (2 capsules)</p>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <p class="medlab_product_content_sub_title">
                    *CFU: Colony Forming Units
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
