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
                'product_name_index' => '12Mg Optima Relax',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Magnesium supplementation is well tolerated and safe for most people but may cause stomach upset,
                        diarrhoea, nausea and vomiting in some individuals.
                    </p>
                    <p>
                        Caution should be used in patients with kidney problems as poorly functioning kidneys do not
                        excrete magnesium from the body well leading to dangerous levels of serum magnesium levels.<sup>29</sup>
                    </p>
                    <p>
                        Vitamin B6 is toxic when ingested in mega doses i.e. greater than 200 mg per day for a prolonged
                        period of time and may cause peripheral neuropathy<sup>30,31</sup>
                    </p>
                    <p>
                         You can also refer to the CMI for this product for symptoms and side effects.
                    </p>
                    ',
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
                                        <strong>EACH 5g DOSE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Magnesium as amino acid chelate TRAACS®</p>
                                    <p>(bislgycinate chelate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>150mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-glutamine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Green Tea Dry Leaf Extract.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. green tea dry leaf.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>40g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-theanine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>NLT 100mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Pyridoxal 5-Phosphate (Vitamin B6)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>15.6mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>equiv. pyridoxine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Zinc (as citrate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>5mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Malic acid</p>
                                    <p>Silica</p>
                                    <p>Lemon lime flavour</p>
                                    <p>Stevia</p>
                                    <p>Citric acid</p>
                                    <p>Maltodextrin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 120s',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    ',
                'references' =>
                    '
                    <ol class="medlab_product_reference_list">
                        <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2006; 5(6):52-59.</li>
                        <li>Jain AP, et al. Omega-3 fatty acids and cardiovascular disease. <em>Eur Rev Med Pharmacol Sci</em> 2015; 19:441-445.</li>
                        <li>Djoussé L, et al. Fish consumption, omega-3 fatty acids and risk of heart failure: a meta-analysis. <em>Clin Nutr</em> 2012; 31(6):846-53.</li>
                        <li>Marik PE, Varon J. Omega-3 dietary supplements and the risk of cardiovascular events: a systematic review. <em>Clin Cardiol</em> 2009; 32(7):365-72.</li>
                        <li>Lopez–Garcia E, Schulze MB, Manson JE, etal. Consumption of (n-3) fatty acids is related to plasma biomarkers of inflammation and endothelial activation in women. <em>J Nutr</em> 2004; 134(7):1806–11.</li>
                        <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2007; 6(1):48-51.</li>
                        <li>Innis SM. Dietary omega 3 fatty acids and the developing brain. <em>Brain Res</em> 2008; 1237:35-43.</li>
                        <li>Docosahexaenoic acid (DHA). Monograph. <em>Altern Med Rev</em> 2009; 14(4):391-399.</li>
                        <li>Uauy R, Dangour AD. Nutrition in brain development and aging: role of essential fatty acids. <em>Nutr Rev</em> 2006; 64(5 Pt 2):S24-33; discussion S72-91.</li>
                        <li>Issa AM, et al. The efficacy of omega-3 fatty acids on cognitive function in aging and dementia: a systematic review. <em>Dement Geriatr Cogn Disord</em> 2006;21(2):88-96.</li>
                        <li>Linnane AW, Kios M, Vitetta L. Coenzyme Q(10)--its role as a prooxidant in the formation of superoxide anion/hydrogen peroxide and the regulation of the metabolome. <em>Mitochondrion</em> 2007; 7 Suppl:S51-61.</li>
                        <li>Yang YK, et al. Coenzyme Q10 treatment of cardiovascular disorders of ageing including heart failure, hypertension and endothelial dysfunction. <em>Clin Chim Acta</em> 2015;450:83-9.</li>
                        <li>Martinet W, Knaapen MW, Kockx MM, De Meyer GR. Autophagy in cardiovascular disease. <em>Trends Mol Med</em> 2007; 13(11):482-91.</li>
                    </ol>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Consuming Fish Oils and CoQ10 is likely safe for most people but may cause minor side effects.
                        <sup>30,31</sup> Your patients should not be alarmed by this list of possible side effects
                        as they may not experience any of them, but as their healthcare practitioner symptom should
                        be monitored:
                    </p>
                    <p>
                        <ul>
                            <li>Belching</li>
                            <li>Bad breath (refrigeration of fish oils or taking them with meals helps to prevent this)</li>
                            <li>May lower blood pressure</li>
                            <li>May reduce blood clotting when taking more than 3 g /day of fish oils</li>
                        </ul>
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        <ul>
                            <li>If you have an allergic reaction to BioClean EPA:DHA + COQ10 or any of its ingredients.</li>
                            <li>Do not take on Warfarin therapy without medical advice.</li>
                            <li>
                                Patients taking blood pressure medication such as:
                                <ul>
                                    <li>Betta blockers</li>
                                    <li>Calcium channel blockers</li>
                                    <li>ACE inhibitors</li>
                                    <li>Angiotensin II receptor blockers</li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                    ',
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>INGREDIENTS COMPOSITION</strong>
                                    </p>
                                    <p>
                                        Active ingredients in each capsule
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
                                    <p>Fish Oil – Natural</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>950 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Equiv. Eicosapentaenoic acid</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>171 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Equiv. Docosahaxaenoic acid</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>114 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Ubiquinol (Coenzyme Q10)</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>50 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Gelatin capsules</p>
                                    <p>Vanillin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 60s',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    ',
                'references' =>
                    '
                    <ol class="medlab_product_reference_list">
                        <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2006; 5(6):52-59.</li>
                        <li>Jain AP, et al. Omega-3 fatty acids and cardiovascular disease. <em>Eur Rev Med Pharmacol Sci</em> 2015; 19:441-445.</li>
                        <li>Djoussé L, et al. Fish consumption, omega-3 fatty acids and risk of heart failure: a meta-analysis. <em>Clin Nutr</em> 2012; 31(6):846-53.</li>
                        <li>Marik PE, Varon J. Omega-3 dietary supplements and the risk of cardiovascular events: a systematic review. <em>Clin Cardiol</em> 2009; 32(7):365-72.</li>
                        <li>Lopez–Garcia E, Schulze MB, Manson JE, etal. Consumption of (n-3) fatty acids is related to plasma biomarkers of inflammation and endothelial activation in women. <em>J Nutr</em> 2004; 134(7):1806–11.</li>
                        <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2007; 6(1):48-51.</li>
                        <li>Innis SM. Dietary omega 3 fatty acids and the developing brain. <em>Brain Res</em> 2008; 1237:35-43.</li>
                        <li>Docosahexaenoic acid (DHA). Monograph. <em>Altern Med Rev</em> 2009; 14(4):391-399.</li>
                        <li>Uauy R, Dangour AD. Nutrition in brain development and aging: role of essential fatty acids. <em>Nutr Rev</em> 2006; 64(5 Pt 2):S24-33; discussion S72-91.</li>
                        <li>Issa AM, et al. The efficacy of omega-3 fatty acids on cognitive function in aging and dementia: a systematic review. <em>Dement Geriatr Cogn Disord</em> 2006;21(2):88-96.</li>
                        <li>Linnane AW, Kios M, Vitetta L. Coenzyme Q(10)--its role as a prooxidant in the formation of superoxide anion/hydrogen peroxide and the regulation of the metabolome. <em>Mitochondrion</em> 2007; 7 Suppl:S51-61.</li>
                        <li>Yang YK, et al. Coenzyme Q10 treatment of cardiovascular disorders of ageing including heart failure, hypertension and endothelial dysfunction. <em>Clin Chim Acta</em> 2015;450:83-9.</li>
                        <li>Martinet W, Knaapen MW, Kockx MM, De Meyer GR. Autophagy in cardiovascular disease. <em>Trends Mol Med</em> 2007; 13(11):482-91.</li>
                    </ol>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Consuming Fish Oils and CoQ10 is likely safe for most people but may cause minor side effects.
                        <sup>30,31</sup> Your patients should not be alarmed by this list of possible side effects
                        as they may not experience any of them, but as their healthcare practitioner symptom should
                        be monitored:
                    </p>
                    <p>
                        <ul>
                            <li>Belching</li>
                            <li>Bad breath (refrigeration of fish oils or taking them with meals helps to prevent this)</li>
                            <li>May lower blood pressure</li>
                            <li>May reduce blood clotting when taking more than 3 g /day of fish oils</li>
                        </ul>
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        <ul>
                            <li>If you have an allergic reaction to BioClean EPA:DHA + COQ10 or any of its ingredients.</li>
                            <li>Do not take on Warfarin therapy without medical advice.</li>
                            <li>
                                Patients taking blood pressure medication such as:
                                <ul>
                                    <li>Betta blockers</li>
                                    <li>Calcium channel blockers</li>
                                    <li>ACE inhibitors</li>
                                    <li>Angiotensin II receptor blockers</li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                    ',
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>INGREDIENTS COMPOSITION</strong>
                                    </p>
                                    <p>
                                        Active ingredients in each capsule
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
                                    <p>Fish Oil – Natural</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>950 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Equiv. Eicosapentaenoic acid</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>171 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Equiv. Docosahaxaenoic acid</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>114 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Ubiquinol (Coenzyme Q10)</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>50 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Gelatin capsules</p>
                                    <p>Vanillin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 60s',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    ',
                'references' =>
                    '
                    <ol class="medlab_product_reference_list">
                        <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2006; 5(6):52-59.</li>
                        <li>Jain AP, et al. Omega-3 fatty acids and cardiovascular disease. <em>Eur Rev Med Pharmacol Sci</em> 2015; 19:441-445.</li>
                        <li>Djoussé L, et al. Fish consumption, omega-3 fatty acids and risk of heart failure: a meta-analysis. <em>Clin Nutr</em> 2012; 31(6):846-53.</li>
                        <li>Marik PE, Varon J. Omega-3 dietary supplements and the risk of cardiovascular events: a systematic review. <em>Clin Cardiol</em> 2009; 32(7):365-72.</li>
                        <li>Lopez–Garcia E, Schulze MB, Manson JE, etal. Consumption of (n-3) fatty acids is related to plasma biomarkers of inflammation and endothelial activation in women. <em>J Nutr</em> 2004; 134(7):1806–11.</li>
                        <li>Stipanuk, Martha H. Biochemical Physiological and Molecular Aspects of Human Nutrition. Saunders Publisher. 2nd Edition. Pp24-25. 2006.</li>
                        <li>Gylling H, Simonen P. Phytosterols, Phytostanols, and Lipoprotein Metabolism. <em>Nutrients</em> 2015; 7(9):7965-77.</li>
                        <li>Plat J, et al. Mechanisms underlying the health benefits of plant sterol and stanol ester consumption. <em>J AOAC Int</em> 2015; 98(3):697-700.</li>
                        <li>Plat J, et al. A plant stanol yogurt drink alone or combined with a low-dose statin lowers serum triacylglycerol and non-HDL cholesterol in metabolic syndrome patients. <em>J Nutr</em> 2009; 139(6):1143-1149.</li>
                        <li>Plat J, et al. Protective role of plant sterol and stanol esters in liver inflammation: insights from mice and humans. <em>PLoS ONE</em> 2014; 9(1): e110758.</li>
                        <li>Katan MB, et al. Efficacy and safety of plant stanols and sterols in the management of blood cholesterol levels. <em>Mayo Clin Proc</em> 2003; 78(8):965-78.</li>
                        <li>Abumweis SS, Barake R, Jones PJ. Plant sterols/stanols as cholesterol lowering agents: A meta-analysis of randomized controlled trials. <em>Food Nutr Res</em> 2008;52.</li>
                        <li>Ras RT, et al. Low doses of Eicosapentaenoic acid and Docosahexaenoic acid from fish oil dose-dependantly decrease serum triglyceride concentrations in the presence of plant sterols in hypercholesterolemic men and women. <em>J Nutr </em> 2014; 144:1564-1570.</li>
                    </ol>
                    ',
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>INGREDIENTS COMPOSITION</strong>
                                    </p>
                                    <p>
                                        Active ingredients in each capsule
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
                                    <p>Fish Oil – Natural</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Equiv. Eicosapentaenoic acid</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>90 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Equiv. Docosahaxaenoic acid</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>60 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">
                                        Vegetable oil phytosterol esters (Plant Sterols)
                                    </p>
                                </td>
                                <td valign="top" width="136">
                                    <p>500 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Gelatin capsules</p>
                                    <p>Vanillin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Consuming Fish Oils and Plant Sterols is likely safe for most people but may cause minor side
                        effects. Your patients should not be alarmed by this list of possible side effects as they may not
                        experience any of them, but as their healthcare practitioner symptom should be monitored:
                    </p>
                    <p>
                        <ul>
                            <li>Belching</li>
                            <li>Bad breath (refrigeration of fish oils or taking them with meals helps to prevent this)</li>
                            <li>May reduce blood clotting when taking more than 3 g /day of fish oils</li>
                        </ul>
                    </p>
                    ',
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 120s',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    ',
                'references' =>
                    '
                    <ol class="medlab_product_reference_list">
                        <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2006; 5(6):52-59.</li>
                        <li>Jain AP, et al. Omega-3 fatty acids and cardiovascular disease. <em>Eur Rev Med Pharmacol Sci</em> 2015; 19:441-445.</li>
                        <li>Djoussé L, et al. Fish consumption, omega-3 fatty acids and risk of heart failure: a meta-analysis. <em>Clin Nutr</em> 2012; 31(6):846-53.</li>
                        <li>Marik PE, Varon J. Omega-3 dietary supplements and the risk of cardiovascular events: a systematic review. <em>Clin Cardiol</em> 2009; 32(7):365-72.</li>
                        <li>Lopez–Garcia E, Schulze MB, Manson JE, etal. Consumption of (n-3) fatty acids is related to plasma biomarkers of inflammation and endothelial activation in women. <em>J Nutr</em> 2004; 134(7):1806–11.</li>
                        <li>Stipanuk, Martha H. Biochemical Physiological and Molecular Aspects of Human Nutrition. Saunders Publisher. 2nd Edition. Pp24-25. 2006.</li>
                        <li>Gylling H, Simonen P. Phytosterols, Phytostanols, and Lipoprotein Metabolism. <em>Nutrients</em> 2015; 7(9):7965-77.</li>
                        <li>Plat J, et al. Mechanisms underlying the health benefits of plant sterol and stanol ester consumption. <em>J AOAC Int</em> 2015; 98(3):697-700.</li>
                        <li>Plat J, et al. A plant stanol yogurt drink alone or combined with a low-dose statin lowers serum triacylglycerol and non-HDL cholesterol in metabolic syndrome patients. <em>J Nutr</em> 2009; 139(6):1143-1149.</li>
                        <li>Plat J, et al. Protective role of plant sterol and stanol esters in liver inflammation: insights from mice and humans. <em>PLoS ONE</em> 2014; 9(1): e110758.</li>
                        <li>Katan MB, et al. Efficacy and safety of plant stanols and sterols in the management of blood cholesterol levels. <em>Mayo Clin Proc</em> 2003; 78(8):965-78.</li>
                        <li>Abumweis SS, Barake R, Jones PJ. Plant sterols/stanols as cholesterol lowering agents: A meta-analysis of randomized controlled trials. <em>Food Nutr Res</em> 2008;52.</li>
                        <li>Ras RT, et al. Low doses of Eicosapentaenoic acid and Docosahexaenoic acid from fish oil dose-dependantly decrease serum triglyceride concentrations in the presence of plant sterols in hypercholesterolemic men and women. <em>J Nutr </em> 2014; 144:1564-1570.</li>
                    </ol>
                    ',
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>INGREDIENTS COMPOSITION</strong>
                                    </p>
                                    <p>
                                        Active ingredients in each capsule
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
                                    <p>Fish Oil – Natural</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Equiv. Eicosapentaenoic acid</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>90 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">Equiv. Docosahaxaenoic acid</p>
                                </td>
                                <td valign="top" width="136">
                                    <p>60 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="273">
                                    <p style="padding-left: 30px;">
                                        Vegetable oil phytosterol esters (Plant Sterols)
                                    </p>
                                </td>
                                <td valign="top" width="136">
                                    <p>500 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Gelatin capsules</p>
                                    <p>Vanillin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Consuming Fish Oils and Plant Sterols is likely safe for most people but may cause minor side
                        effects. Your patients should not be alarmed by this list of possible side effects as they may not
                        experience any of them, but as their healthcare practitioner symptom should be monitored:
                    </p>
                    <p>
                        <ul>
                            <li>Belching</li>
                            <li>Bad breath (refrigeration of fish oils or taking them with meals helps to prevent this)</li>
                            <li>May reduce blood clotting when taking more than 3 g /day of fish oils</li>
                        </ul>
                    </p>
                    ',
            ],
            [
                'product_name_index' => 'Biotic Jnr.',
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
                                        <strong>EACH SCOOP CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <em>Bifidobacterium infantis </em>
                                        (Med 14)
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 million</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                    <em>Bifidobacterium longum </em>
                                    (Med 15)
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 million</p>
                                </td>
                            </tr>
                            <tr>
                            <td width="273" valign="top">
                                <p>
                                    <em>Lactobacillus rhamnosus </em>
                                    (Med 26)
                                </p>
                            </td>
                                <td width="136" valign="top">
                                    <p>500 million</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <em>Streptococcus thermophilus </em>
                                        (Med 51)
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 million</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <em>Saccharomyces cerevisiae ssp. boulardii </em>
                                        (Med 41)
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 million</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>Total</strong>
                                    </p>
                                </td>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>2.5 billion CFU*</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactoferrin</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>50 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Inulin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',

                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Add 500 mg of powder (1 scoop) to liquid or solid foods, one (1) to two (2) times per day or as directed
                        by your healthcare practitioner.
                    </p>
                    ',

                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Casein Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Vegetarian Friendly
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',

                'side_effects' =>
                    '
                    <p>
                       Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually
                       temporary and can be relieved by reducing the dose.
                    </p>
                    <br>
                    <p>
                       If symptoms persist parents should consult their healthcare practitioner. If diarrhoea persists for
                       more than 6 hours in infants under 6 months; 12 hours in children under 3 years; 24 hours in children
                       aged 3 - 6 years or 48 hours in children over 6 years and adults, seek medical advice.
                    </p>
                    <br>
                    <p>
                        Lactoferrin in Biotic Jnr.™ is derived from cow\'s milk and contains less than 0.1% Lactose.
                    </p>
                    <br>
                    <p>
                        You can also refer to the CMI for this product for symptoms and side-effects.
                    </p>
                    ',
            ],
            [
                'product_name_index' => "BioticNatal",
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Casein Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    ',
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>Active Ingredients</strong>
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>
                                        <strong>Each vegetarian capsule contains:</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Bifidobacterium infantis</em> (Med 14)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Bifidobacterium longum</em> (Med 15)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Lactobacillus rhamnosus</em> (Med 26)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Streptococcus thermophilus</em> (Med 51)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Saccharomyces cerevisiae ssp. boulardii</em> (Med 41)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Lactoferrin</em></p>
                                </td>
                                <td width="136" valign="top">
                                    <p>100 mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><strong>Total</strong></p>
                                </td>
                                <td width="136" valign="top">
                                    <p><strong>10 billion CFU*</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Cellulose-microcrystalline</p>
                                    <p>Silica</p>
                                    <p>Magnesium Stearate</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            ],
            [
                'product_name_index' => "Enbiotic 60's",
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
                                        <strong>EACH VEGETARIAN CAPSULE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus acidophilus (Med 27 and Med 28)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>5 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus rhamnosus (Med 26)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2.5 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium bifidum (Med 11)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>125 million</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium animalis ssp. lactis (Med13)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.125 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                    <strong>Total</strong>
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>
                                    <strong>8.75 billion CFU*</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Amylase (from Aspergillus oryzae) </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>165 mg (750 DU)</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Protease - acid / alkaline active (from Aspergillus oryzae)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>11 mg (3,790 HUT)</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">Lipase (from Rhizopus oryzae)</td>
                                <td width="136" valign="top">16.5 mg (525 LipU)</td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">Bromelain (from Ananas comosus)</td>
                                <td width="136" valign="top">9.9mg </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">Papain (from Carica papaya) </td>
                                <td width="136" valign="top">39.2 mg </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Maltodextrin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',

                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Vegetarian Friendly
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',

                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',

                'interactions' =>
                    '
                    <p>
                        Antibiotics will reduce the efficacy of probiotics. If talking antibiotics, take 2 hours away from probiotics.
                    </p>
                    ',
            ],
            [
                'product_name_index' => "Enbiotic 120's",
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
                                        <strong>EACH VEGETARIAN CAPSULE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus acidophilus (Med 27 and Med 28)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>5 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus rhamnosus (Med 26)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2.5 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium bifidum (Med 11)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>125 million</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium animalis ssp. lactis (Med13)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.125 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                    <strong>Total</strong>
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>
                                    <strong>8.75 billion CFU*</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Amylase (from Aspergillus oryzae) </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>165 mg (750 DU)</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Protease - acid / alkaline active (from Aspergillus oryzae)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>11 mg (3,790 HUT)</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">Lipase (from Rhizopus oryzae)</td>
                                <td width="136" valign="top">16.5 mg (525 LipU)</td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">Bromelain (from Ananas comosus)</td>
                                <td width="136" valign="top">9.9mg </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">Papain (from Carica papaya) </td>
                                <td width="136" valign="top">39.2 mg </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Maltodextrin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',

                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Vegetarian Friendly
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',

                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',

                'interactions' =>
                    '
                    <p>
                        Antibiotics will reduce the efficacy of probiotics. If talking antibiotics, take 2 hours away from probiotics.
                    </p>
                    ',
            ],
            [
                'product_name_index' => 'GastroDaily',
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Mix one 6 g dose (1 scoop) into 250 mL of cold water, stir well and consume immediately. Take one
                        (1) to two (2) times per day before meals or as directed by your healthcare practitioner.
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',
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
                                        <strong>EACH SCOOP CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Saccharomyces cerevisiae ssp. boulardii</em> (Med 41)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>5 million CFU*</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-Glutamine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Arabinogalactan (ResistAid&trade;)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Peppermint leaf dry</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>100mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p style="padding-left: 30px">Equiv. peppermint dry&nbsp; &nbsp; &nbsp;&nbsp;</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Cocoa Powder</p>
                                    <p>Stevia</p>
                                    <p>Chocolate flavour</p>
                                    <p>Peppermint flavour</p>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
                    </p>
                    ',
            ],
            [
                'product_name_index' => "Manuka-C",
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Contains No Artificial Colours or Sweeteners
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
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
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Maltodextrin (corn)</p>
                                    <p>Stevia</p>
                                    <p>Tartaric Acid</p>
                                    <p>Citric Acid</p>
                                    <p>Effersoda</p>
                                    <p>Orange and Mango flavours</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            ],
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
                                        <strong>EACH VEGETARIAN CAPSULE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus rhamnosus (Med 26)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>9 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus acidophilus (Med 27)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>3.75 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus plantarum (Med 25)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.575 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium animalis spp. lactis (Med 13)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>3 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium breve (Med 12)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.75 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium bifidum (Med 11)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 million</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Streptococcus thermophilus (Med 51)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.5 billion</p>
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
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Maltodextrin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Vegetarian Friendly
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Some medicines may interfere with MultiBiotic&trade;. These include:
                    </p>

                    <p>
                        <ul>
                            <li>Immunosuppressant Drugs</li>
                            <li>Antibiotics</li>
                        </ul>
                    </p>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Russion.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
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
                                        <strong>EACH VEGETARIAN CAPSULE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus rhamnosus (Med 26)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>9 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus acidophilus (Med 27)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>3.75 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Lactobacillus plantarum (Med 25)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.575 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium animalis spp. lactis (Med 13)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>3 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium breve (Med 12)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.75 billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Bifidobacterium bifidum (Med 11)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500 million</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Streptococcus thermophilus (Med 51)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.5 billion</p>
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
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Maltodextrin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Some medicines may interfere with MultiBiotic&trade;. These include:
                    </p>

                    <p>
                        <ul>
                            <li>Immunosuppressant Drugs</li>
                            <li>Antibiotics</li>
                        </ul>
                    </p>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Russion.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
                    </p>
                    ',
            ],
            [
                'product_name_index' => "NanoCelle Activated B12",
                'side_effects' =>
                    '
                    <p>
                        Vitamin B12 has a low risk of side-effects when taken as directed.
                    </p>
                    ',
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
                                        <strong>Per 2 sprays (0.3 ml) contains:</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Co-methylcobalamin</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1000 mcg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Citric acid</p>
                                    <p>PEG-40 hydrogenated castor oil</p>
                                    <p>Glycerol</p>
                                    <p>Peppermint oil</p>
                                    <p>Potassium sorbate</p>
                                    <p>Stevia</p>
                                    <p>Water</p>
                                    <p>D-alpha tocopherol</p>
                                    <p>Soy oil</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Italian.pdf" target="_blank">Traduzione italiana</a>
                    </p>
                    ',
            ],
            [
                'product_name_index' => 'NanoCelle B12',
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td width="273" valign="top">
                                    <p>
                                        <strong>INGREDIENTS</strong>
                                    </p>
                                </td>
                                <td width="136" valign="top">
                                    <p>
                                        <strong>PER 0.3 ml (2 SPRAYS)</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Vitamin B12 (as cyanocobalamin)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1000 mcg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Peppermint flavour</p>
                                </td>
                                <td width="136" valign="top">
                                    <p></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Citric acid</p>
                                    <p>PEG-40 hydrogenated castor oil</p>
                                    <p>Glycerol</p>
                                    <p>Peppermint oil</p>
                                    <p>Potassium sorbate</p>
                                    <p>Stevia</p>
                                    <p>Water</p>
                                    <p>D-alpha tocopherol</p>
                                    <p>Soy oil</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Vitamin B12 has a low risk of side-effects when taken as directed.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Some medications interfere with vitamin B12 such as proton pump inhibitors, metformin and chloramphenicol if taken for extended duration.
                    </p>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Traditional_Chinese.pdf" target="_blank">中文翻譯</a>
                    </p>
                    ',
            ],
            [
                'product_name_index' => 'NanoCelle D3',
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
                                        <strong>PER 0.3 ml (2 SPRAYS)</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Vitamin D3 (as cholecalciferol)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1000 IU</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Peppermint flavour</p>
                                </td>
                                <td width="136" valign="top">

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Citric acid</p>
                                    <p>PEG-40 hydrogenated castor oil</p>
                                    <p>Glycerol</p>
                                    <p>Peppermint oil</p>
                                    <p>Potassium sorbate</p>
                                    <p>Stevia</p>
                                    <p>Water</p>
                                    <p>D-alpha tocopherol</p>
                                    <p>Maize oil</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Vitamin D3 has a low risk of side-effects when taken as directed.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Some medicines may interfere with NanoCelle&trade; D3. These include:
                    </p>

                    <p>
                        <ul>
                            <li>Calcitriol medications</li>
                            <li>Steroid medication such as prednisone</li>
                            <li>Weight loss medication Orlistat</li>
                            <li>Cholesterol lowering medications such as Cholestyramine and Thiazide diuretics</li>
                            <li>Seizure medications such as Phenobarbital and Dilantin</li>
                        </ul>
                    </p>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Traditional_Chinese.pdf" target="_blank">中文翻譯</a>
                    </p>
                    ',
            ],
            [
                'product_name_index' => "NRGBiotic 60's",
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">NRGBiotic&trade; 60&#39;s</h4>
                    <p>
                        <strong>PATENT PROTECTED</strong>
                    </p>
                    <p>
                        NRGBiotic™ is a probiotic formula combined with Coenzyme Q10 and Magnesium Orotate.
                        NRGBioticTM is indicated to support healthy cellular energy production with magnesium and Coenzyme Q10
                        required for ATP (energy) production in the cell. The probiotic species may help to support a healthy
                        gut microbial profile and support a healthy immune system.
                    </p>
                    ',
                'general_summary' =>
                    '
                    <p>
                        NRGBiotic™ is a probiotic formula combined with Coenzyme Q10 and Magnesium Orotate. NRGBioticTM is
                        indicated to support healthy cellular energy production with magnesium and Coenzyme Q10 required for
                        ATP (energy) production in the cell. The probiotic species may help to support a healthy gut microbial
                        profile and support a healthy immune system.
                    </p>
                    ',
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <p>
                                        <strong>ACTIVE INGREDIENTS</strong>
                                    </p>
                                </td>
                                <td valign="top">
                                    <p>
                                        <strong>EACH CAPSULE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Lactobacillus Acidophilus (Med 27)</p>
                                </td>
                                <td valign="top">2.5 billion</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Bifidobacterium Bifidum (Med11)</p>
                                </td>
                                <td valign="top">1 Billion</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Streptococcus Thermophilus (Med51)</p>
                                </td>
                                <td valign="top">1.5 Billion</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>
                                        <strong>Total</strong>
                                    </p>
                                </td>
                                <td valign="top">
                                    <strong>5 billion CFU*</strong>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Magnesium Orotate</p>
                                </td>
                                <td valign="top">400 mg</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Equivalent to Magnesium:</p>
                                </td>
                                <td valign="top">25.5mg</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Coenzyme Q10 (as Ubidecarenone</p>
                                </td>
                                <td valign="top">37.5 mg</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Maltodextrin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten & Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for vegetarian
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Some medicines may interfere with NRGBiotic&trade;. These include:
                    </p>

                    <p>
                        <ul>
                            <li>Warfarin</li>
                            <li>Calcium Channel Blockers</li>
                            <li>Immunosuppressant Drugs</li>
                            <li>Antibiotics</li>
                        </ul>
                    </p>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Russion.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/%C2%81Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
                    </p>
                    ',
            ],
            [
                'product_name_index' => "NRGBiotic 120's",
                'ingredients' =>
                    '
                    <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <p>
                                        <strong>ACTIVE INGREDIENTS</strong>
                                    </p>
                                </td>
                                <td valign="top">
                                    <p>
                                        <strong>EACH CAPSULE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Lactobacillus Acidophilus (Med 27)</p>
                                </td>
                                <td valign="top">2.5 billion</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Bifidobacterium Bifidum (Med11)</p>
                                </td>
                                <td valign="top">1 Billion</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Streptococcus Thermophilus (Med51)</p>
                                </td>
                                <td valign="top">1.5 Billion</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>
                                        <strong>Total</strong>
                                    </p>
                                </td>
                                <td valign="top">
                                    <strong>5 billion CFU*</strong>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Magnesium Orotate</p>
                                </td>
                                <td valign="top">400 mg</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Equivalent to Magnesium:</p>
                                </td>
                                <td valign="top">25.5mg</td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <p>Coenzyme Q10 (as Ubidecarenone</p>
                                </td>
                                <td valign="top">37.5 mg</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Maltodextrin</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title">NRGBiotic&trade; 120&#39;s</h4>
                    <p>
                        <strong>PATENT PROTECTED</strong>
                    </p>
                    <p>
                        NRGBiotic™ is a probiotic formula combined with Coenzyme Q10 and Magnesium Orotate.
                        NRGBiotic&trade; is indicated to support healthy cellular energy production with magnesium and Coenzyme Q10
                        required for ATP (energy) production in the cell. The probiotic species may help to support a healthy
                        gut microbial profile and support a healthy immune system.
                    </p>
                    ',
                'general_summary' =>
                    '
                    <p>
                        NRGBiotic™ is a probiotic formula combined with Coenzyme Q10 and Magnesium Orotate. NRGBiotic&trade; is
                        indicated to support healthy cellular energy production with magnesium and Coenzyme Q10 required for
                        ATP (energy) production in the cell. The probiotic species may help to support a healthy gut microbial
                        profile and support a healthy immune system.
                    </p>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten & Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Some medicines may interfere with NRGBiotic&trade;. These include:
                    </p>

                    <p>
                        <ul>
                            <li>Warfarin</li>
                            <li>Calcium Channel Blockers</li>
                            <li>Immunosuppressant Drugs</li>
                            <li>Antibiotics</li>
                        </ul>
                    </p>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Russion.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/%C2%81Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
                    </p>
                    ',
            ],
            [
                'product_name_index' => "NOS",
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Contains No Artificial Colours or Sweeteners
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Gluten & Dairy Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
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
                            <tr>
                                <td colspan="3">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Citric acid</p>
                                    <p>Malic acid</p>
                                    <p>Stevia</p>
                                    <p>Silica</p>
                                    <p>Flavour</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            ],
            [
                'product_name_index' => 'ORSBiotic',
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
                                <td valign="top" colspan="2">
                                    <p>
                                        <strong>EACH SCOOP CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Saccharomyces cerevisiae ssp. boulardii </em>(Med 41)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 billion</p>
                                </td>
                                <td width="136" valign="top">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Lactobacillus gasseri </em>(Med 23)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 billion</p>
                                </td>
                                <td width="136" valign="top">
                                    &nbsp;
                                </td>
                                </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Lactobacillus plantarum </em>(Med 25)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>12 billion</p>
                                </td>
                                <td width="136" valign="top">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Bifidobacterium breve </em>(Med12)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 billion</p>
                                </td>
                                <td width="136" valign="top">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Sodium Chloride</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>533.2 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p style="padding-left: 30px;">Equiv. Sodium</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>209.7 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>46 mmol/L</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p style="padding-left: 30px;">Equiv. Chloride</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>323.5 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>46 mmol/L</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Potassium Citrate</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>449.1 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p style="padding-left: 30px;">Equiv. Potassium</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>162.6 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>22 mmol/L</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p style="padding-left: 30px;">Equiv. Citrate</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>261.8 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>30 mmol/L</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Glucose Anhydrous</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2.5 g</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>71 mmol/L</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Citric Acid Anhydrous</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>890.5 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Zinc Gluconate</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>44.8 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1 mmol/L</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p style="padding-left: 30px;">Equiv. Zinc</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>6.4 mg</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>0.5 mmol/L</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><strong>Total</strong></p>
                                </td>
                                <td width="136" valign="top">
                                    <p><strong>8 Billion CFU*</strong></p>
                                </td>
                                <td width="136" valign="top">
                                    <p><strong>216.5 mmol/L</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right">
                                    *CFU: Colony Forming Units
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Stevia</p>
                                    <p>Carrot powder</p>
                                    <p>Flavours</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
                    </p>
                    ',
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Add 5 g of powder (1 scoop) to 200 mL of cold water, stir well and consume immediately or as
                        directed by your healthcare practitioner.
                    </p>
                    <p>
                        Recommended dose for under 3 years is 100 mL every 90 minutes; 3-6 years 100 mL every 60 minutes;
                        6-12 years 100 mL every 30 minutes and over 12 years 200 mL every 30 minutes.
                    </p>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Lactose Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',
            ],
            [
                'product_name_index' => 'W8Biotic Lemon & Lime',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Lactose Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
                    </p>
                    ',
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
                                        <strong>EACH SCOOP CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Hi-Maize Resistant Starch</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>20 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-leucine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Levocarnitine Tartrate</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.5 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Equiv. Levocarnitine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Lactobacillus plantarum </em>(Med 25)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10 Billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Lactobacillus paracasei</em> (Med 24)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10 Billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Silica</p>
                                    <p>Thaumatin</p>
                                    <p>Malic acid</p>
                                    <p>Stevia</p>
                                    <p>lemon lime flavour</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            ],
            [
                'product_name_index' => 'W8Biotic Strawberries & Cream',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                    </p>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Lactose Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Refrigerate to maintain stability
                    </p>
                    ',
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
                                        <strong>EACH SCOOP CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Hi-Maize Resistant Starch</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>20 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-leucine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>2 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Levocarnitine Tartrate</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1.5 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Equiv. Levocarnitine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>1 g</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Lactobacillus plantarum </em>(Med 25)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10 Billion</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p><em>Lactobacillus paracasei</em> (Med 24)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10 Billion</p>
                                </td>
                            </tr>
                            <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Silica</p>
                                <p>Thaumatin</p>
                                <p>Malic acid</p>
                                <p>Stevia</p>
                                <p>Strawberries and cream flavour</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
                    </p>
                    ',
            ],
            [
                'product_name_index' => "SB 5B",
                'ingredients' =>
                    '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <strong>Active Ingredients</strong>
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                    <strong>Each vegetarian capsule contains:</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Saccharomyces cerevisiae ssp. boulardii</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>250 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Equiv.</p>
                            </td>
                            <td width="136" valign="top">
                                <p>5 bill CFU</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Cellulose-microcrystalline</p>
                                <p>Calcium hydrogen phosphate</p>
                                <p>Silica</p>
                                <p>Magnesium stearate</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
