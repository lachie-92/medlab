<?php

use Illuminate\Database\Seeder;
use App\Product;

class Enbiotic_60s_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 3,
            'product_name_index' => "Enbiotic 60's",
            'product_name' => 'Enbiotic 60&#39;s',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">Enbiotic 120&#39;s</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    EnBiotic&trade; is a high quality, high strength digestive enzyme and probiotic combination developed to
                    assist with digestive function and nutrient absorption.
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
                    EnBiotic&trade; is a digestive enzyme and multi-species probiotic formulation. EnBiotic&trade;
                    contains 241.6 mg of plant and fungal-derived digestive enzymes and 8.75 billion CFU
                    (colony forming units) of bacteria per capsule. This combination may support digestive function of
                    dietary fats, proteins and carbohydrates and assist in the management of indigestion, altered bowel
                    habits and gastrointestinal discomfort. EnBiotic&trade; may also assist in managing the symptoms of
                    medically diagnosed Irritable Bowel Syndrome.
                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    Several factors are known to contribute to the development of poor digestive function including
                    stress, medications, poor eating habits and dietary choices, dysbiosis, ageing, illness,
                    injury/trauma and toxic exposure.<sup>1,2</sup> Symptoms of digestive dysfunction can have an debilitating
                    impact on an individuals quality of life. Symptoms range in severity and can include indigestion,
                    reflux, heartburn, constipation, diarrhoea, nausea, abdominal pain and bloating, steatorrhoea,
                    flatulence, unintentional weight loss and undigested food particles in the stool.<sup>2</sup> In conjunction
                    with addressing dietary and lifestyle choices; therapeutic options available to reduce symptomology
                    and improve digestive function and nutrient absorption include probiotic bacterial species and
                    digestive enzymes.
                </p>
                <p>
                    Commensal gastrointestinal tract (GIT) microbiota play a critical role in digestive function
                    contributing to extensive metabolism of dietary compounds (and drugs), regulating energy metabolism
                    and maintaining healthy GIT mucosal function and immune modulation.<sup>3</sup> Alteration of the GIT
                    bacteria can occur through stress, dietary changes, medication use, inflammatory conditions and
                    illness. There is extensive evidence to support the supplementation of probiotics for improving
                    digestive function, reducing symptoms and improving GIT barrier function.<sup>4,5,6</sup>
                </p>
                <p>
                    Digestive enzymes available for supplementation include pharmaceutical grade enzymes such as Creon
                    and Creon Forte, which are porcine sourced, therefore not suitable for vegetarians.  Also available
                    are fungal (from Aspergillus oryzae and Rhizopus oryzae) and plant-derived (bromelain and papain)
                    enzymes. Plant derived proteolytic enzymes include bromelain (sourced from Ananas comosus) and
                    papain (sourced from Carica papaya). Aspergillus oryzae and Rhizopus oryzae are filamentous
                    fungi that secrete vast amounts of digestive enzymes such as amylase, protease and lipase.<sup>7,8</sup>
                    Commensal bacteria are also capable of producing enzymes that assist with digestion.<sup>9</sup> Proteolytic
                    enzymes breakdown proteins into polypeptides, dipeptides and amino acids; amylolytic enzymes
                    (amylase) hydrolyze starches and other carbohydrates (not including cellulose) into disaccharides
                    and trisaccharides and lipolytic enzymes (lipase) hydrolyze fats into fatty acids and
                    monoglycerides.<sup>1</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    EnBiotic&trade; is formulated to assist digestive function and nutrient absorption.
                </p>

                <p>
                    <ul>
                        <li>Support digestion of dietary proteins, carbohydrates and lipids.<sup>11,12</sup></li>
                        <li>Assist with supporting healthy digestive function.<sup>11</sup></li>
                        <li>Aid in the management of indigestion.<sup>12</sup></li>
                        <li>Help relieve gastrointestinal discomfort.<sup>13,14</sup></li>
                        <li>Assist in the management of altered bowel habits.<sup>15,16</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>To assist with digestion of dietary proteins, carbohydrates and lipids;</li>
                        <li>For relief of gastrointestinal discomfort including bloating and altered bowel habits.</li>
                    </ul>
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Roxas M. The role of enzyme supplementation in digestive disorders. <em>Altern Med Rev</em> 2008;13(4):307-14.</li>
                    <li>Rachman B. Unique features and application of non-animal derived enzymes. <em>Clin Nutr Insights</em> 1997;5:1-4.</li>
                    <li>Jones ML, et al. Emerging science of the human microbiome. <em>Gut Microbes</em> 2014;5(4). Epub ahead of print.</li>
                    <li>Yoon JS, et al. Effect of multispecies probiotics on irritable bowel syndrome: a randomized, double-blind, placebo controlled trial. <em>J Gastro Hepatol</em> 2013;29:52-59.</li>
                    <li>Vitetta L, et al. Probiotic, prebiotics and the gastrointestinal tract in health and disease. <em>Inflammopharmacology</em> 2014;22:135-54.</li>
                    <li>Ishizuka A, et al. Effects of administration of Bifidobacterium animalis subsp. Lactis GCL2505 on defecation frequency and Bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91.</li>
                    <li>Machida M, Yamada O, Gomi K et al. Genomics of Aspergillus oryzae: learning from the history of Koji Mold and exploration of its future. <em>DNA Research</em> 2008;15:173-183.</li>
                    <li>Salah RB, Mosbah H, Fendri A et al. Biochemical and molecular characterization of a lipase produced by Rhizopus oryzae. <em>FEMS Micrbiolo Lett</em> 2006;260:241-8.</li>
                    <li>Alariya SS, Sethi S, Gupta S, et al. Amylase activity of a starch degrading bacteria isolated from soil. <em>Arch Appl Sci Res</em> 2013;5:15-24.</li>
                    <li>Digestive System (www.teachers.concordiashanghai.org). accessed 20 Sep 2014.</li>
                    <li>Roxas M. The role of enzyme supplementation in digestive disorders. <em>Alt Med Rev</em> 2008;13:307-314.</li>
                    <li>Rachman B. Unique features and application of non-animal derived enzymes. <em>Clin Nutr Insights</em> 1997;5:1-4.</li>
                    <li>Ishizuka A et al. Effects of administration of Bifidobacterium animalis ssp. lactis GCL2505 on defecation frequency and bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91.</li>
                    <li>Del Piano M et al. The use of probiotics in healthy volunteers with evacuation disorders and hard stools. <em>J Clin Gastroenterol</em> 2010;44:30-34.</li>
                    <li>Vitetta L et al. Probiotic, prebiotics and the gastrointestinal tract in health and disease. <em>Inflammopharmacology</em> 2014;22:135-54.</li>
                    <li>Yoon S et al. Effect of multispecies probiotics on irritable bowel syndrome: a randomised, double-blind, placebo controlled trial. <em>J Gastro & Hepatol</em> 2013;29:52-59. </li>
                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    Consuming probiotics and enzymes may cause side effects. Do not be alarmed by this list of possible
                    side effects. You may not experience any of them. Tell your healthcare professional if you notice
                    any of the following and they worry you:
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
                        <li>Swollen or bloated stomach area</li>
                        <li>Gas</li>
                        <li>Discomfort in the upper stomach area</li>
                        <li>Headache</li>
                    </ul>
                </p>

                <p>
                    These side effects are usually mild and dose related. Most of them disappear completely in a few days
                    after the dose of EnBiotic&trade; is lowered or stopped.
                </p>

                <p>
                    Serious allergic reactions to these ingredients are rare, however tell your healthcare professional
                    immediately if you experience any of the following:
                </p>

                <p>
                    <ul>
                        <li>Skin rash</li>
                        <li>Swelling of face and/or throat</li>
                        <li>Difficulty breath</li>
                        <li>Itching of the skin</li>
                    </ul>
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
                    Some medicines may interfere with EnBiotic&trade;. These include:
                </p>

                <p>
                    <ul>
                        <li>Immunosuppressant Drugs</li>
                        <li>Antibiotics</li>
                        <li>Acarbose</li>
                        <li>Miglitol / Amylase</li>
                        <li>Pancreatin</li>
                        <li>Creon and Creon Forte</li>
                    </ul>
                </p>

                <p>
                    These medicines may be affected by EnBiotic&trade;, or may affect how well it works. You may
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
                    Take two (2) capsules with water with each meal, up to three (3) times per day, or as directed by
                    your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/enbiotic_60s/2partcap_4_3_1.png">
                </div>
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
                                    <strong>EACH CAPSULE CONTAINS</strong>
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
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/English.pdf">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Arabic.pdf">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Russion.pdf">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Spanish.pdf">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Japanese.pdf">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/French.pdf">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Chinese.pdf">中文翻译，中文翻譯</a>
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
            'price_retail' => 46.05,
            'price_wholesale' => 46.05,
            'image_path' => '/img/products/enbiotic_60s/enbiotic-60s_1.jpg',
            'thumb_image_path' => '/img/products/enbiotic_60s/thumb_enbiotic-60s_1.jpg'

        ]);
    }
}
