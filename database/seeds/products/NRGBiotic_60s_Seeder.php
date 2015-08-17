<?php

use Illuminate\Database\Seeder;
use App\Product;

class NRGBiotic_60s_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 8,
            'product_name_index' => "NRGBiotic 60's",
            'product_name' => 'NRGBiotic 60&#39;s',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">NRGBiotic 60&#39;s</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    NRGBiotic&trade; is formulated to improve mitochondrial function and intracellular energy production.
                </p>
                ',
            'patent' =>
                '
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
            'general_summary' =>
                '
                <p>
                    NRGBiotic&trade; is a multi-species probiotic formula combined with Coenzyme Q10 and Magnesium Orotate.
                    NRGBiotic&trade; is used to support optimal mitochondrial energy production and muscle cell function.
                    Each capsule of NRGBiotic&trade; contains 400 mg of Magnesium Orotate, equivalent to 25 mg of elemental
                    magnesium. Orotate is a key molecule involved in uridine and pyrimidine biosynthesis; constituents
                    that are involved in DNA and RNA turnover as well as synthesis of the glycogen and phospholipids.
                    Coenzyme Q10 and magnesium are critical for intracellular energy production.
                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    All tissues have a requisite for uridine. Uridine is an important nucleoside precursor in the
                    pyrimidine salvage pathway.<sup>8,9,10</sup> Except for erythrocytes and the liver and kidney, which maintain
                    de novo pyrimidine biosynthesis and supply other tissues with uridine for salvage, most normal
                    tissues in adults rely on the salvage of uridine from plasma.<sup>9</sup>
                </p>
                <p>
                    Uridine also participates in the regulation of several physiological and pathological
                    processes.<sup>11</sup> In the absence of sugar, uridine can serve as an essential precursor for both
                    carbohydrate metabolism and nucleic acid synthesis. Besides the direct salvage to pyrimidine
                    nucleotides, the ribose moiety produced by the phosphorolysis of uridine can either enter the
                    pentose cycle to meet cellular energy requirements or form phosphoribosyl pyrophosphate, which
                    is used in the biosynthesis of purine nucleotides.11 In the nervous system, uridine acts as a
                    physiological regulator of sleep function and demonstrates the ability to maintain brain metabolism
                    during ischemia and severe hypoglycemia.
                </p>
                <p>
                    Coenzyme Q10 (CoQ10) is a compound that is naturally found intracellularly and bound to organelle
                    membranes such as for example the mitochondria, endoplasmic reticulum, and golgi apparatus.
                    CoQ10 is found with the highest concentrations in tissues such as the heart, liver, kidneys, and
                    pancreas. This compound is intricate to the production of adenosine triphosphate (ATP).
                    ATP is essential to all bodily functions, including the generation of energy and a multitude of
                    metabolic functions.<sup>12,13,14</sup>
                </p>
                <p>
                    Over the past several decades, research has seen a refocus towards thinking and efforts directed
                    in elucidating the critical inter–relationships that exist between the GIT microbiome and its host.
                    This research has redefined the interactions between gut microbes and vertebrates, now recognising
                    that the microbial active cohort and its mammalian host have shared co–evolutionary metabolic
                    interactions that span millennia. Microbial interactions in the GIT provide the necessary cues for
                    the development of regulated pro– and anti–inflammatory signals that promotes immunological
                    tolerance, metabolic regulation and other factors which may then control local and extra–intestinal
                    inflammation.<sup>15</sup> Furthermore, it is also becoming apparent that the GIT with its commensal cohort is
                    a central regulator for the activities of end organs such as the kidneys, brain, adipose tissue,
                    muscle and liver and as such may provide local prompts that are transmitted extra–intestinally to
                    end organ sites.  A scientific insight therefore has emerged that plausibly links the GIT with the
                    physiology of end organ function that may influence health maintenance or trigger and support a
                    disease state. Maintaining a healthy GIT milieu and epithelium with the administration of
                    probiotics may constitute a novel therapeutic strategy for health.
                </p>
                <p>
                    Probiotics are those live bacterial cultures that are added to foods (e.g., yoghurts) and employed
                    as dietary supplements, that when orally administered can improve the health of the host beyond
                    their fundamental basic nutritional content.<sup>16</sup> Probiotic bacteria encompass those from different
                    genera (as for example Lactobacilli, Bifidobacterium, Escherichia, Saccharomyces
                    (a yeast), Streptococcus) giving rise to a variety of different species of each genera
                    (i.e., Lactobacillus acidophilus; Lactobacillus bulgaricus, Lactobacillus rhamnosus); that lead to
                    different strains within a species (i.e., Lactobacillus acidophilus La–1, Lactobacillus acidophilus
                    NCFM). This taxonomic differentiation, importantly emphasizing that different strains from the same
                    bacterial species can be different and may elaborate different physiological functions within the
                    GIT<sup>17</sup> whilst exhibiting overlapping or specific therapeutic actions to different organ systems.<sup>18</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    NRGBiotic&trade; may improve mitochondrial function and intracellular energy production.
                </p>

                <p>
                    <ul>
                        <li>Support intracellular energy production<sup>1</sup></li>
                        <li>Help to assist in muscle cell recovery after exercise<sup>2</sup></li>
                        <li>Assist with muscle action deficits due to low levels of Coenzyme Q10<sup>3</sup></li>
                        <li>Support a healthy gastrointestinal microbial profile<sup>4</sup></li>
                        <li>Help improve general health and wellbeing<sup>5</sup></li>
                        <li>Support normal intracellular function with Magnesium Orotate<sup>6</sup></li>
                        <li>Support a healthy immune system<sup>7</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>Assist in muscle cell recovery after exercise.</li>
                        <li>Support normal intracellular function with Magnesium Orotate.</li>
                        <li>Support muscle function during and after exercise;</li>
                        <li>Assist with muscle action deficits associated with low Coenzyme Q10 levels, and;</li>
                        <li>Help improve intracellular energy production.</li>
                    </ul>
                </p>

                <p>
                    <strong>Potential Claims:</strong>
                </p>

                <p>
                    <ul>
                        <li>Support cellular energy production.</li>
                        <li>Help to assist in muscle cell repair and function after exercise.</li>
                        <li>Assist with symptoms of Coenzyme Q10 deficiencies such as muscle pain.</li>
                        <li>Support a healthy gastrointestinal microbial profile.</li>
                        <li>Provide a source of magnesium to support cellular function.</li>
                        <li>Help improve general health</li>
                    </ul>
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Crane F. Biochemical functions of CoQ10. <em>J Am Coll Nutr</em> 2001;20:591-598.</li>
                    <li>Kon M et al. Reducing exercise-induced muscular injury in Kendo athletes with supplementation of CoQ10. <em>Br Nutr</em> 2008;100:903-909.</li>
                    <li>Giuseppe C et al. Effect of CoQ10 on myopathic symptoms in patients treated with statins. <em>Am J Cardiol</em> 2007;99:1409-1412. </li>
                    <li>Ishizuka A et al. Effects of administration of Bifidobacterium animalis ssp. lactis GCL2505 on defecation frequency and bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91. </li>
                    <li>de Vrese M & Schrezenmeir J. Probiotics, prebiotics, and synbiotics. <em>Adv Biochem Eng Biotechnol</em> 2008;111:1-66. </li>
                    <li>Agarwal R et al. Pathogenic role of magnesium deficiency in ophthalmic diseases. <em>Biometals</em> 2013 [Epub ahead of print].</li>
                    <li>Dongarra L et al. Mucosal immunology and probiotics. <em>Curr Allergy Asthma Rep</em> 2013;13:19-26. </li>
                    <li>Shambaugh GE. Pyrimidine biosynthesis. <em>AJCN</em> 1979;32:1290 –1297.</li>
                    <li>Traut TW, Jones ME. Uracil metabolism--UMP synthesis from orotic acid or uridine and conversion of uracil to beta-alanine: enzymes and cDNAs. <em>Prog Nucleic Acids Res Mol Biol</em> 1996;53:1-78.</li>
                    <li>Moyer JD, Henderson JF. Salvage of uridine in the mouse. Effect of uridine phosphorylase pre-treatment. <em>Biochem Pharmacol</em> 1985;34:101–105.</li>
                    <li>Löffler M, Fairbanks LD, Zameitat E, Marinaki AM, Simmonds HA. Pyrimidine pathways in health and disease. <em>Trends Mol Med</em> 2005;11(9):430-7.</li>
                    <li>Fuke C, Krikorian SA, Couris RR. Coenzyme Q10: a review of essential functions and clinical trials. <em>US Pharmacist</em> 2000;28-41.</li>
                    <li>Hodgson JM, Watts GF, Playford DA, Burke V, Croft KD. Coenzyme Q10 improves blood pressure and glycaemic control: a controlled trial in subjects with type 2 diabetes. <em>Eur J Clin Nutr</em> 2002;56:1137-42.</li>
                    <li>Langsjoen PH, Langsjoen AM. The clinical use of HMG CoA-reductase inhibitors and the associated depletion of coenzyme Q10. A review of animal and human publications. <em>Biofactors</em> 2003;18:101-11.</li>
                    <li>Vitetta L, Manuel R, Zhou JY, et al. The overarching influence of the gut microbiome on end-organ function: the role of live probiotic cultures. <em>Pharmaceuticals (Basel)</em> 2014;7(9):954-89.</li>
                    <li>Morelli L, Capurso L. FAO/WHO Guidelines on Probiotics: 10 years on. <em>J Clin Gastroenterol</em> 2012;46(1): S1-S2.</li>
                    <li>Timmerman HM, Koning CJ, Mulder L, Rombouts FM, Beynen AC: Monostrain, multistrain and multispecies probiotics--A comparison of functionality and efficacy. <em>Int J Food Microbiol</em> 2004;96:219-233.</li>
                    <li>Vitetta L, Briskey D, Hayes E, Shing C, Peake J: A review of the pharmacobiotic regulation of gastrointestinal inflammation by probiotics, commensal bacteria and prebiotics. <em>Inflammopharmacology</em> 2012;20:251-266.</li>
                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    Consuming NRBiotic&trade; may cause side effects, however do not be alarmed by this list of possible
                    side effects, as you may not experience any of them. Tell your healthcare professional if you
                    notice any of the following and they worry you.
                </p>

                <p>
                    These include:
                </p>

                <p>
                    <ul>
                        <li>Cramps or pain in the stomach area</li>
                        <li>Constipation</li>
                        <li>Diarrhoea</li>
                        <li>Mucus in the stool</li>
                        <li>Bloated stomach area</li>
                        <li>Gas</li>
                        <li>Discomfort in the upper stomach area</li>
                    </ul>
                </p>

                <p>
                    These side effects are usually mild and dose related. Most of them disappear completely in a few days
                    after the dose of NRBiotic&trade; is lowered or stopped.
                </p>

                <p>
                    Serious allergic reactions to these ingredients are rare, however tell your healthcare professional
                    immediately if you experience any of the following:
                </p>

                <p>
                    <ul>
                        <li>Skin rash</li>
                        <li>Swelling of face and/or throat</li>
                        <li>Difficulty breathing</li>
                        <li>Itching of the skin</li>
                    </ul>
                </p>

                <p>
                    <strong>You can also refer to the CMI for this product for symptoms and side effects</strong>
                </p>

                <p>
                    WARNING: Take NRBiotic&trade; exactly as your healthcare professional has prescribed. If symptoms
                    persist consult your healthcare practitioner.
                </p>

                <p>
                    <ul>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                        <li>Always read the label and use the product as directed.</li>
                    </ul>
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

                <p>
                    These medicines may be affected by NRGBiotic&trade;, or may affect how well it works. You may
                    need to take different amounts of your medicine, or you may need to take different medicines.
                    Your doctor will advise you.
                </p>
                ',
            'dosage_information' =>
                '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    The recommended dose of Probiotic Uridine – NRGBiotic is two (2) capsules per day.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/ngrbiotic_60s/2partcap_4_6_1.png">
                </div>
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
                    </tbody>
                </table>
                <p class="medlab_product_content_sub_title">
                    *CFU: Colony Forming Units
                </p>
                ',
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/English.pdf">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Arabic.pdf">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Russion.pdf">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Spanish.pdf">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Japanese.pdf">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/French.pdf">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/%C2%81Chinese.pdf">中文翻译，中文翻譯</a>
                </p>
                ',
            'free_from' =>
                '
                <p class="medlab_product_content_sub_title">
                    Gluten & Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Vegetarian Friendly
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate formula to maintain CFU stability
                </p>
                ',
            'price_retail' => 51.12,
            'price_wholesale' => 51.12,
            'image_path' => '/img/products/ngrbiotic_60s/nrgbiotic-60s-3d-bottle-master-sept14-v1_10_2_1.jpg',
            'thumb_image_path' => '/img/products/ngrbiotic_60s/thumb_nrgbiotic-60s-3d-bottle-master-sept14-v1_10_2_1.jpg'

        ]);
    }
}
