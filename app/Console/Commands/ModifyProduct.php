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
                'product_name_index' => "Manuka-C",
                'practitioner_summary' =>
                    '
                    <p>
                        Manuka-C&trade; is a novel combination of ingredients to support optimal immune system function containing a blend of three
                        ascorbates to be gentle on the stomach. Ascorbic acid and glutathione are essential nutrients for optimal immune function,<sup>1-3</sup>
                        ensuring effective anti-microbial and anti-inflammatory activity of white blood cells (WBC)<sup>2,4</sup> with glutathione aiding
                        the physiological role of ascorbic acid recycling and activity within the cell. <sup>4-7</sup> Ascorbic acid together with zinc
                        is also required for wound healing and healthy connective tissue function.<sup>1,3,8</sup> Manuka honey has been used for centuries
                        in the treatment of infections having antimicrobial and anti-inflammatory activity.<sup>9-11</sup>
                    </p>

                    <p>
                        <strong><em>Specific Use:</em></strong>
                    </p>

                    <p>
                        <strong>Ascorbic Acid:</strong>
                    </p>

                    <p>
                        Ascorbic acid is a water-soluble vitamin essential for healthy immune system activity and can only be obtained from the
                        diet due to lack of endogenous synthesis in humans. It is an important catalyst for extensive biochemical reactions and
                        enzymatic processes, and further is a vital redox cofactor.<sup>3</sup> Pharmacokinetic data demonstrates that plasma ascorbic
                        acid levels are tightly regulated, which significantly impacts on the bioavailability of orally administered vitamin C
                        supplements.<sup>1</sup> Optimum bioavailability of ascorbic acid occurs between 200 – 500 mg per day and as the oral dosage
                        increases, bioavailability decreases and excess ascorbic acid is excreted in urine. Plasma ascorbic acid levels plateau at a
                        dose between 500 – 1000 mg and does not increase with increasing doses (see Figure 1).<sup>1</sup> Data demonstrates that
                        circulating WBCs become saturated at an intake of 100 mg per day. Ascorbic acid bioavailability in plasma is near 100% at a
                        single dose of 200 mg but at higher oral vitamin C doses, bioavailability declines significantly with a 1250 mg dose resulting
                        in less than 50% bioavailability (see Figure 2).<sup>1</sup> As the oral dose of ascorbic acid increases so does its excretion
                        in urine (see Figure 3). Elevated doses may have adverse consequences as a 1000 mg dose has been shown to elevate urine uric
                        acid and oxalate levels.  High doses of ascorbic acid are not recommended, as there is no clear benefit of excess excreted
                        or unabsorbed vitamin C.<sup>1</sup> Physiologically, ascorbic acid is required for the effective anti-microbial function of
                        WBCs acting as a reducing agent. It is also a key compensatory factor in the regulation of plasma glutathione concentration.<sup>7</sup>
                        The prophylactic use of ascorbic acid may reduce the incidence, duration and severity of the common cold. <sup>8,12</sup>
                    </p>
                    <br>
                    <p>
                        <img alt="Figure 1-3" src="/img/products/manuka-c/manuka_figure1-3.png" class="img-responsive"><br>
                    </p>

                    <p>
                        <strong>Glutathione:</strong>
                    </p>

                    <p>
                        Glutathione is an intrinsic tripeptide essential for optimal immune function; this is exemplified predominantly in
                        its capacity to facilitate cellular protection and repair as a vital cofactor in the redox process.<sup>2,6</sup>
                        Glutathione is critical for the physiological role of ascorbic acid in white blood cell anti-microbial activity.
                        When exposed to bacteria, neutrophils oxidize extracellular ascorbic acid to form Dehydroascorbic acid that is
                        transported into the neutrophil and rapidly reduces back to ascorbic acid within the cell by the redox enzyme
                        glutaredoxin that requires glutathione as a cofactor.<sup>13</sup> As a result of the recycling of ascorbic acid,
                        the internal concentration of ascorbic acid within the WBC increases 10-fold in which it functions to quench oxidants
                        generated during phagocytosis, a natural and controlled physiological process (see Figure 4).<sup>13</sup>
                    </p>

                    <p>
                        <img alt="Figure 4" src="/img/manuka-c/manuka_figure4.png" class="img-responsive"><br>
                    </p>

                    <p>
                        <strong>Zinc:</strong>
                    </p>

                    <p>
                        Zinc is necessary for numerous metabolic functions, particularly gene expression; cell growth and differentiation.<sup>8</sup>
                        It is a critical nutrient for immune function due to its role in supporting a range of immune reactions.<sup>14</sup> Zinc is
                        a vital component of many proteins, over 300 enzymes; and is regarded as a key nutrient in the support of cellular mediators
                        of innate immunity.<sup>14</sup> Zinc functions in the maturation of T cells and is also responsible for the activity of
                        natural killer cells as well as waste management in WBC.<sup>15</sup> Zinc together with ascorbic acid is shown to produce
                        additive effects in supporting immune function; and together have shown to be effective in reducing the severity
                        and/or duration of the common cold.<sup>8</sup>
                    </p>

                    <p>
                        <strong>Manuka Honey:</strong>
                    </p>

                    <p>
                        Manuka honey has been used as a traditional anti-microbial therapy for the treatment of infection.<sup>11</sup> Honey has
                        well documented anti-bacterial activity,<sup>9</sup> together with anti-viral and anti-fungal properties.<sup>16</sup>
                        The anti-inflammatory effects of Manuka honey are effective in assisting the recovery from the common cold;<sup>17</sup>
                        as well as treating symptoms of upper-respiratory tract infections.<sup>18</sup> Emerging evidence has illustrated that
                        honey added to oral rehydration solution (ORS) improved recovery in children following episodes of diarrheal illness.<sup>10</sup>
                    </p>

                    <p>
                        <strong>Clinical Summary:</strong>
                    </p>

                    <p>
                        Who will benefit:
                    </p>

                    <p>
                        <ul>
                            <li>Those requiring immune support.</li>
                            <li>Those seeking symptomatic relief from upper respiratory tract infections.</li>
                            <li>Those requiring dietary vitamin C support.</li>
                            <li>For healthy collagen production.</li>
                        </ul>
                    </p>

                    <p>
                        <strong>WARNINGS</strong>
                    </p>

                    <p>
                        Not to be used in children under 2 years of age without medical advice. Not suitable for infants under
                        the age of twelve months. Adults only. Not recommended for use by pregnant and lactating women. Vitamin
                        supplements should not replace a balanced diet. Contains sugars. Always read the label. Use only as directed.
                    </p>
                    ',
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        <strong>ACTIVE INGREDIENTS</strong>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <strong>Each 5 g dose (1 teaspoon) contains:</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Ascorbic acid
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        400 mg
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Zinc ascorbate
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        59.4 mg
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin-left:2em">
                                        Equiv. ascorbic acid
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        50 mg
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin-left:2em">
                                        Equiv. zinc
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        9.4 mg
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Sodium ascorbate
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        56.6 mg
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin-left:2em">
                                        Equiv. ascorbic acid
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        50 mg
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>Total ascorbic acid</strong>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <strong>500 mg</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                       Honey powder (Manuka honey)
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        2.5 g
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>Glutathione (reduced) - Setria&reg;</strong>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <strong>100 mg</strong>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="medlab_product_content_sub_title">
                        Excipient Ingredients:
                    </p>
                    <p>
                        Silica
                    </p>
                    <p>
                        Maltodextrin (corn)
                    </p>
                    <p>
                        Stevia
                    </p>
                    <p>
                        Tartaric Acid
                    </p>
                    <p>
                        Citric Acid
                    </p>
                    <p>
                        Effersoda
                    </p>
                    <p>
                        Orange and Mango flavours
                    </p>
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
