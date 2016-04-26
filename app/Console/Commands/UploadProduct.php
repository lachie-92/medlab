<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Product;

class UploadProduct extends Command
{
    protected $signature = 'upload:product';

    protected $description = 'upload new product';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Model::unguard();

        Product::create([

            'xero_item_id' => 23,
            'product_name_index' => "NOS",
            'product_name' => 'NOS <small>Nitric Oxide Support</small>',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">NOS <small>Nitric Oxide Support</small></h4>
                <p>
                    A targeted pre-exercise sports food containing a selection of evidence-based ingredients combined to support and optimise exercise performance.
                </p>
                ',
            'patent' =>
                '
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
            'general_summary' =>
                '
                <p>
                    A targeted pre-exercise sports food containing a selection of evidence-based ingredients combined to support and optimise exercise performance.
                    Creatine, L-arginine and the B vitamins support energy production during strenuous exercise while beta-alanine helps to increase muscle carnosine levels.
                    The amino acid L-arginine is also the precursor for nitric oxide production, a signaling molecule involved in blood vessel relaxation and vasodilation.
                    Coconut powder contains important electrolytes required during exercise and Guarana seed powder naturally contains caffeine.
                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    <strong>L-Arginine</strong>
                </p>

                <p>
                    L-arginine is a semi-essential amino acid with numerous metabolic roles within the body. It is a building block for proteins
                    (hormones, histones, collagen and intra-cellular structural proteins) and the synthesis of creatine – the high-phosphate energy
                    stores in cells. L-arginine is the precursor to nitric oxide (NO) synthesis, an important cellular signaling molecule involved
                    in many physiological processes and is most well known as a powerful vasodilator of blood vessels that regulates
                    blood flow (see Figure 1). NO also has anti-inflammatory, anti-microbial and anti-viral activity, playing an important role in
                    immunological function.<sup>1-3</sup> Endothelium-derived NO causes vasorelaxation and inhibits platelet adhesion and aggregation, thus
                    maintaining blood fluidity and preventing thrombosis.<sup>4,5</sup> Platelets also produce NO that inhibits platelet aggregation, adhesion to
                    vascular endothelium, recruitment to growing thrombi and the formation of leukocyte-platelet aggregates.
                    Endothelial dysfunction is a common trait of essentially all cardiovascular risk factors. Impaired NO-mediated endothelial function
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
                    performance and increasing fat free mass, however the exact mechanisms are not clear.<sup>7</sup> Creatine increases cellular
                    phosphocreatine content and together act as an intracellular buffer for adenosine triphosphate (ATP) and also as an
                    energy shuttle for the movement of high-energy phosphates from mitochondrial sites of production to cytoplasmic sites
                    of utilisation in a variety of cells and creatine must be continuously replenished (see Figure 2).<sup>8</sup>
                    Creatine can be synthesised in the body from arginine and glycine, but muscle cells cannot synthesise creatine and so
                    depend on the uptake from the circulation which can further be promoted by exercise.<sup>7,8</sup> Creatine is particularly found
                    in cells with high and fluctuating energy demands, such as skeletal muscle and the heart.<sup>9</sup> The ergogenic affects of
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
                    Caffeine is widely used as an enhancement for athletic performance via its broad range of metabolic, hormonal and physiologic effects.
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
                        <li>The aging population who may demonstrate reduced ability to synthesise NO</li>
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
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Hristina K, Langerholc T, Trapecar M. Novel metabolic roles of L-arginine in body energy metabolism and possible clinical applications. <em>J Nutr, Health & Aging</em> 2014;18:213-18.</li>
                    <li>Zhao Y, Vanhoutte PM, Leung, SWS. Vascular nitric oxide: beyond eNOS. <em>J Pharmacol Sci </em> 2015;129:83-94.</li>
                    <li>Lorin J, Zeller M, Guilland JC, et al. Arginine and nitric oxide synthase: regulatory mechanisms and cardiovascular aspects. <em>Mol Nutr Food Res</em> 2014;58:101-116.</li>
                    <li>Goubareva I, Gkalaiagkousi E, Shah A, et al. Age decreases nitric oxide synthesis and responsiveness in human platelets and increases formation of monocyte-platelet aggregates. <em>Cardiovascular Res</em> 2007;75:793-802.</li>
                    <li>Taddei S, Virdis A, Ghiadoni L, et al. Age-related reduction of NO availability and oxidative stress in humans. <em>Hypertension</em> 2001;38:274-279.</li>
                    <li>Luiking YC, Poeze M, Dejong CH, et al. Sepsis:an arginine deficiency state? <em>Crit Care Med</em> 2004;32:2135-45.</li>
                    <li>Cooper R, Naclerio F, Allgrove J, et al. Creatine supplementation with specific view to exercise/sports performance: an update. <em>J Int Soc Sports Nutr</em> 2012;9:33.</li>
                    <li>Terjung RL, Clarkson P, Eichner ER, et al. American college of sports medicine roundtable. The physiological and health effects of oral creatine supplementation. <em>Med Sci Sports Exerc</em> 2000;32:706-717.</li>
                    <li>Brosnan JT, Brosnan ME. Creatine: endogenous metabolite, dietary and therapeutic supplementation. <em>Annu Rev Nutr</em> 2007;27:241-61.</li>
                    <li>Muscle fiber contraction and relaxation. <em>Openstax CNX.</em> http://cnx.org/contents/EtWWcJM-@3/Muscle-Fiber-Contraction-and-R (accessed 14th April 2016).</li>
                    <li>Bellinger PM. &beta;-alanine supplementation for athletic performance: an update. <em>J Strength Cond Res</em> 2013;28:1751-1770.</li>
                    <li>Culbertson JY, Kreider RB, Greenwood M, et al. Effects of beta-alanine on muscle carnosine and exercise performance: a review of the current literature. <em>Nutrients</em> 2010;2:75-98.</li>
                    <li>Luckose F, Pandey MC, Radhakrishna. Effects of amino acid derivatives on physical, mental and physiological activities. <em>Crit Rev Food Sci Nutr</em> 2015;55:1793-1807.</li>
                    <li>Huskisson E, Maggini S, Ruf M. The role of vitramins and minerals in energy metabolism and well-being. <em>J Int Med Res</em> 2007;35:277-289.</li>
                    <li>Sokmen B, Armstrong LE, Kraemer WJ, et al. Caffeine use in sports: considerations for the athlete. <em>J Strength Cond Res</em> 2008;22:978-986.</li>
                    <li>Lorist MM, Tops M. Caffeine, fatigue and cognition. <em>Brain Cog</em> 2003;53:82-94.</li>
                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    <ul>
                        <li>Caffeine may cause side-effects in some individuals including dizziness, headache, jitteriness, nervousness, insomnia and gastrointestinal distress.</li>
                        <li>Beta-alanine may cause paraesthesia - pins and needles of the skin in some individuals.</li>
                        <li>Creatine may cause muscles to retain water. Do not supplement creatine in individuals with kidney disease.</li>
                        <li>Do not supplement L-arginine in individuals with Guanidinoacetate methyltransferase deficiency and avoid in people with herpes virus.</li>
                        <li>
                            L-arginine may decrease blood pressure therefore caution is required in individuals taking blood pressure medications. Medications that
                            increase blood flow to the heart (Nitrates) interact with L-arginine.
                        </li>
                        <li>
                            Tyrosine may decrease how much levodopa the body absorbs and it is advised to not combine the two.
                        </li>
                    </ul>
                </p>
                ',
            'interactions' =>
                '
                ',
            'dosage_information' =>
                '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>
                <p>
                    Mix one scoop (5 g) into 200 mL of cold water and drink 20 minutes prior to exercising. To be taken once per day.
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
                <p>
                    Silica
                </p>
                ',
            'cmi' =>
                'none',
            'free_from' =>
                '
                <p class="medlab_product_content_sub_title">
                    Contains No Artificial Colours or Sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
            'price_retail' => 40.29,
            'price_wholesale' => 24.40,
            'image_path' => '/img/products/nos/nos.png',
            'thumb_image_path' => '/img/products/nos/nos_thumb.png',
            'in_stock' => true,
            'slug' => 'NOS'
        ]);

        Model::reguard();
    }
}