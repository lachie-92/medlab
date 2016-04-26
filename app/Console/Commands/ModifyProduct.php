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
                'product_name_index' => "NOS",
                'ingredients' =>
                    '
                    <a class="product_modal_link" href="#">
                        <img class="product_image" alt="NOS Ingredient Label" src="/img/products/nos/ingredient_label.png" width="100%"/>
                    </a>
                    ',
                'cmi' =>
                    'none',
                'practitioner_summary' =>
                    '
                    <p>
                        <strong>L-Arginine</strong>
                    </p>

                    <p>
                        L-arginine is a semi-essential amino acid with numerous metabolic roles within the body, it is a building block for proteins
                        (hormones, histones, collagen and intracellular structural proteins) and the synthesis of creatine – the high-phosphate energy
                        stores in cells. L-arginine is the precursor to nitric oxide (NO) synthesis, an important cellular signaling molecule involved
                        in many physiological and pathological processes, most well known as a powerful vasodilator of blood vessels that regulates
                        blood flow (see Figure 1). NO also has anti-inflammatory, anti-microbial and anti-viral activity playing an important role in
                        immunological function.<sup>1-3</sup> Endothelium-derived NO causes vasorelaxation and inhibits platelet adhesion and aggregation, thus
                        maintaining blood fluidity and preventing thrombosis.<sup>4,5</sup> Platelets also produce NO that inhibits platelet aggregation, adhesion to
                        vascular endothelium, recruitment to growing thrombi and the formation of leukocyte-platelet aggregates.
                        Endothelial dysfunction is a common trait of essentially all cardiovascular risk factors. Impaired NO-mediate endothelial function
                        is characteristic of cardiovascular diseases, correlates with risk factor profiles and is an independent predictor of adverse cardiac
                        events.<sup>3</sup> Ageing is associated with an increase in atherothrombotic conditions, including. hypertension, and it has been suggested
                        that there is an age-related decline in nitric oxide (NO) production in arterial endothelium and platelets. It has been reported that exogenous
                        administration of L-arginine restores NO bioavailability.<sup>3</sup>
                    </p>

                    <p>
                        <img alt="How L-Arginine Works in the Body" src="/img/products/nos/nos_figure1.png" class="img-responsive"><br>
                        <strong>Figure 1. Metabolic pathways of L-arginine.<sup>6</sup></strong> NO, nitric oxide; NOS, nitric oxide synthase.
                    </p>

                    <p>
                        <strong>Creatine</strong>
                    </p>

                    <p>
                        Extensive research has been conducted on the ergogenic effects of creatine on improving physical and cognitive
                        performance and increasing fat free mass, however the exact mechanisms are not clear.7 Creatine increases cellular
                        phosphocreatine content and together act as an intracellular buffer for adenosine triphosphate (ATP) and also as an
                        energy shuttle for the movement of high-energy phosphates from mitochondrial sites of production to cytoplasmic sites
                        of utilization in a variety of cells and creatine must be continuously replenished (see Figure 2).<sup>8</sup>
                        Creatine can be synthesized in the body from arginine and glycine, but muscle cells cannot synthesize creatine and so
                        depend on the uptake from the circulation which can further be promoted by exercise.7,8 Creatine is particularly found
                        in cells with high and fluctuating energy demands, such as skeletal muscle and the heart.9 The ergogenic affects of
                        creatine are evident for high-intensity exercise of short duration and has been shown to increase muscle mass when
                        combined with an exercise program.<sup>7,9</sup>
                    </p>

                    <p>
                        <img alt="Muscle Metabolism" src="/img/products/nos/nos_figure2.png" class="img-responsive"><br>
                        <strong>Figure 2. Some ATP is stored in a resting muscle and as contraction starts it is used up in seconds and more ATP
                        is generated from creatine phosphate.<sup>10</sup></strong> ATP - adenosine triphosphate.
                    </p>

                    <p>
                        <strong>Beta-Alanine</strong>
                    </p>

                    <p>
                        Beta-alanine is a non-essential amino acid and the rate-limiting precursor to carnosine synthesis in muscle cells,
                        an important physiological buffer that readily accepts protons during contraction-induced acidosis. Supplementation
                        of beta-alanine is required to achieve the active daily dose required to significantly elevate intramuscular carnosine
                        and it increases dose-dependently. Increasing muscle carnosine concentration may improve athletic performance in exercise
                        tasks that accrue a high level of muscle acidosis, improving high-intensity intermittent exercise performance and time to fatigue.
                        Carnosine is also involved in maintaining ATP stores in muscle cells and skeletal muscle cell contraction.<sup>11,12</sup>
                        When combined with creatine, there is an additive effect on reducing fatigue and training intensity.<sup>12</sup>
                    </p>

                    <p>
                        <strong>Tyrosine and Vitamins</strong>
                    </p>

                    <p>
                        Tyrosine is the amino acid precursor to the synthesis of neurotransmitters involved in cognitive performance and stress resistance;
                        namely dopamine, noradrenaline and adrenaline. Tyrosine may aid in mental activity and in improving cognitive performance under
                        stressful conditions due to its direct role in increasing catecholamine synthesis in the brain.<sup>13</sup> The B vitamins are involved in
                        the transformation of dietary energy sources such as carbohydrates, fats and proteins into cellular energy in the form of ATP,
                        functioning as cofactors and coenzymes for numerous enzymatic reactions. Vitamin C is required for the synthesis of catecholamine
                        hormones, dopamine, adrenaline and noradrenaline.<sup>14</sup>
                    </p>

                    <p>
                        <strong>Guarana Seed Powder</strong>
                    </p>

                    <p>
                        Caffeine is widely used to enhance athletic performance via its broad range of metabolic, hormonal and physiologic effects.
                        Guarana is a natural source of caffeine. Caffeine has been shown to enhance exercise performance and reduce time to exhaustion.
                        Mechanisms include stimulation of the sympathetic nervous system, increase intracellular Ca<sup>2+</sup> concentrations and spare
                        glycogen via increasing lipolysis.<sup>15</sup> Furthermore, caffeine affects cognition, mood and alertness via binding to adenosine
                        receptors in the brain. Adenosine, a neuromodulator, binds to adenosine receptors and slows nerve cell activity, whereas caffeine
                        blocks adenosine receptors and speeds up the activity of cells.<sup>15,16</sup> Research has demonstrated that small to moderate doses
                        (i.e. 3 – 6 mg•kg-1) of caffeine has superior ergogenic effectiveness than higher doses (9 mg•kg-1) and also reduces any negative side-effects.<sup>15</sup>
                    </p>

                    <p>
                        <strong>Clinical Summary:</strong>
                    </p>

                    <p>
                        Who will benefit:
                    </p>

                    <p>
                        <ul>
                            <li>Those wanting to improve exercise performance and time to fatigue</li>
                            <li>Those wanting to improve cognitive performance</li>
                            <li>Those wanting to improve cellular energy metabolism</li>
                            <li>Those wanting to improve blood flow, tissue oxygenation and blood pressure</li>
                            <li>The aging population who demonstrate reduced ability to synthesize NO</li>
                        </ul>
                    </p>

                    <p>
                        <strong>WARNINGS</strong>
                    </p>

                    <p>
                        Not to be used as a sole source of nutrition. Should be used in conjunction with a balanced diet and appropriate exercise program.
                        Not suitable for children under 15 years of age or pregnant women. Should only be used under medical or dietetic supervision.
                        Contains not less than 30 mg of caffeine per serve.
                    </p>
                    ',
                'ingredients' =>
                    '
                    <a class="product_modal_link" href="#">
                        <img class="product_image" alt="NOS Ingredient Label" src="/img/products/nos/ingredient_label.png" width="100%"/>
                    </a>
                    <br><br>
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
                                        <strong>Per serve (5g)</strong>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <strong>Per 100g</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Creatine monohydrate</p>
                                </td>
                                <td>
                                    <p>1 g</p>
                                </td>
                                <td>
                                    <p>20 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>L-arginine</p>
                                </td>
                                <td>
                                    <p>1 g</p>
                                </td>
                                <td>
                                    <p>20 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Beta-alanine</p>
                                </td>
                                <td>
                                    <p>1.2 g</p>
                                </td>
                                <td>
                                    <p>24 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ascorbic acid (Vitamin C)</p>
                                </td>
                                <td>
                                    <p>80mg</p>
                                </td>
                                <td>
                                    <p>1.6 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>L-Tyrosine</p>
                                </td>
                                <td>
                                    <p>200 mg</p>
                                </td>
                                <td>
                                    <p>4 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Guarana (Paullinia cupana kunth) dried seeds powder</p>
                                </td>
                                <td>
                                    <p>1 g</p>
                                </td>
                                <td>
                                    <p>20 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Nicotinic acid (Vitamin B3)</p>
                                </td>
                                <td>
                                    <p>20 mg</p>
                                </td>
                                <td>
                                    <p>400 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pyridoxine 5-phosphate (Vitamin B6)</p>
                                </td>
                                <td>
                                    <p>3.2 mg</p>
                                </td>
                                <td>
                                    <p>64 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Cyanocobalamin (Vitamin B12)</p>
                                </td>
                                <td>
                                    <p>4 mcg</p>
                                </td>
                                <td>
                                    <p>80 mcg</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Folic acid (Vitamin B9)</p>
                                </td>
                                <td>
                                    <p>250 mcg</p>
                                </td>
                                <td>
                                    <p>5 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tender green coconut water powder</p>
                                </td>
                                <td>
                                    <p>25 mg</p>
                                </td>
                                <td>
                                    <p>500 mg</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="medlab_product_content_sub_title">
                        Excipient Ingredients:
                    </p>
                    <p>
                        Citric acid
                    </p>
                    <p>
                        Malic acid
                    </p>
                    <p>
                        Flavour
                    </p>
                    <p>
                        Stevia
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
