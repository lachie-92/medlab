<?php

use Illuminate\Database\Seeder;
use App\Product;

class MultiBiotic_30s_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 6,
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
                    MultiBiotic&trade; is a multi-species probiotic that helps to support the natural balance of commensal
                    bacteria in the gastrointestinal tract (GIT). MultiBiotic&trade; is used to improve symptoms of medically
                    diagnosed Irritable Bowel Syndrome; support healthy immune function; restore GIT microbial balance
                    after certain medication use and to relieve gastrointestinal discomfort. MultiBiotic&trade; contains
                    21.075 billion CFU of bacteria per capsule, including Streptococcus, Lactobacillus and
                    Bifidobacterium species. These species are predominately found in the gastrointestinal tract.
                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    Probiotics are living organisms found in food and dietary supplements, which upon ingestion can
                    improve the health of the host beyond their inherent basic nutritional content.<sup>9</sup>
                </p>

                <p>
                    The gastrointestinal (GIT) mucosal surface is a complex and interactional environment, which is
                    continuously exposed to a range of commensal microorganisms. The human-microbial gastrointestinal
                    interface is an ecosystem that participates in a variety of important roles in human health and
                    disease.<sup>10, 11</sup>
                </p>

                <p>
                    The microbiome interacts with the human host’s GIT by providing the necessary prompts for the
                    development of regulated pro- and anti-inflammatory signals, that overall promote immunological
                    tolerance as well as metabolic and inflammatory homeostasis. This then, exerting regulatory control
                    over local and extra-intestinal activities (e.g. skin, liver, brain).<sup>10, 11</sup>
                </p>

                <p>
                    To ensure proper immune-digestive efficiency and overall intestinal function, a balance in the
                    overall composition of the gut microbiota would seem to be a necessary prerequisite throughout a
                    lifetime.  The continued understanding of this functionality presents a view of the GIT that is
                    wide ranging in health importance and with implications in a variety of health issues from
                    immunological tolerance, obesity and metabolic disorders.<sup>11, 12</sup>
                </p>

                <p>
                    The number of bacterial cells in the body exceed human cells by a factor of 10 to 1, with the
                    largest concentration being in the GIT.<sup>12</sup> Hence, it would not be unexpected that such a
                    concentration of microorganisms in the GIT may have strong correlations with colonic
                    conditions such as Inflammatory Bowel Diseases (IBDs), constipation, obesity, chronic diseases
                    of metabolism (e.g., Type II Diabetes Mellitus) and some cancers.
                </p>

                <p>
                    Recent research has focused on elucidating the inter-relationships that may exist between
                    the GIT microbiome and its host in health and disease.<sup>9,13</sup> It is reported that the GIT
                    microbiome is being continuously compromised with factors such as over consumption of
                    dietary fat, <sup>10, 11</sup> gut-stressing physical exercise,<sup>12</sup> increasing urbanisation <sup>14</sup> and
                    medical therapies.<sup>15</sup>
                </p>

                <p>
                    Recent studies for example, have shown that a short course of antibiotics can be the source of
                    long-term changes in the gut microbiome.<sup>16</sup> This suggests that antibiotic administration in early
                    life could permanently and adversely alter the gut microbiome. This in conjunction with continued
                    exacerbations of the gut commensal microbiome driven by adverse lifestyle choices may predispose
                    to the development of chronic diseases.<sup>12</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    MultiBiotic&trade; may help to promote optimal gastrointestinal care and immune function.
                </p>

                <p>
                    <ul>
                        <li>Help maintain a healthy gastrointestinal microbial profile.<sup>1</sup></li>
                        <li>Promote general well being and a healthy immune system.<sup>2,3</sup></li>
                        <li>Relieve gastrointestinal discomfort.<sup>1</sup></li>
                        <li>Assist in managing symptoms of medically diagnosed Irritable Bowel Syndrome.<sup>4,5</sup></li>
                        <li>Provide symptomatic relief of altered bowel habits.<sup>5</sup></li>
                        <li>Help relieve symptoms of mild upper respiratory tract infections.<sup>6</sup></li>
                        <li>Support healthy cholesterol levels in healthy individuals.<sup>7</sup></li>
                        <li>Support and maintain healthy skin.<sup>8</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>To support healthy immune function;</li>
                        <li>For symptoms of medically diagnosed Irritable Bowel Syndrome;</li>
                        <li>To restore gastrointestinal microbial balance after certain medication use; and;</li>
                        <li>For relief of gastrointestinal discomfort.</li>
                    </ul>
                </p>

                <p>
                    <strong>Potential Claims:</strong>
                </p>

                <p>
                    <ul>
                        <li>Help maintain healthy digestive function.</li>
                        <li>Relieve gastrointestinal discomfort.</li>
                        <li>For the maintenance of a healthy gastrointestinal microbial profile.</li>
                        <li>Assist in managing symptoms of medically diagnosed irritable bowel syndrome.</li>
                        <li>Provide symptomatic relief of constipation and diarrhoea.</li>
                        <li>Relieve the symptoms of mild upper respiratory tract infections.</li>
                        <li>Support healthy cholesterol levels.</li>
                        <li>Support and maintain healthy skin.</li>
                        <li>Promote general well being.</li>
                    </ul>
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Ishizuka A et al. Effects of administration of Bifidobacterium animalis ssp. lactis GCL2505 on defecation frequency and bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91.</li>
                    <li>de Vrese M & Schrezenmeir J. Probiotics, prebiotics, and synbiotics. <em>Adv Biochem Eng Biotechnol.</em> 2008;111:1-66.</li>
                    <li>Dongarra L et al. Mucosal immunology and probiotics. <em>Curr Allergy Asthma Rep</em> 2013;13:19-26.</li>
                    <li>Yoon S et al. Effect of multispecies probiotics on irritable bowel syndrome: a randomised, double-blind, placebo controlled trial. <em>J Gastro & Hepatol</em> 2013;29:52-59.</li>
                    <li>Vitetta L et al. Probiotic, prebiotics and the gastrointestinal tract in health and disease. <em>Inflammopharmacology</em> 2014;22:135-54. </li>
                    <li>Hao Q et al. Probiotics for preventing acute upper respiratory tract infections. <em>Cochrane Database of Systematic Reviews</em> 2011, Issue 9.</li>
                    <li>Guo Z et al. Influence of consumption of probiotics on the plasma lipid profile: A meta-analysis of randomised controlled trial. <em>Nutrition, Metabolism & Cardiovascular disease</em> 2011;21:844-850. </li>
                    <li>Jung W et al. Prospective, randomized, open-label trial comparing the safety, efficacy and tolerability of an acne treatment regimen with and without a probiotic supplement and minocycline in subjects with mild to moderate acne. <em>J Cutan Med Surg</em> 2013;17:114-22. </li>
                    <li>Drouault-Holowacz S, Bieuvelet S, Burckel A et al. A double blind randomized controlled trial of a probiotic combination in 100 patients with irritable bowel syndrome. <em>Gastroenterol Clin Biol</em> 2008; 32 (2): 147-52.</li>
                    <li>Ki Cha B, Mun Jung S, Hwan Choi C et al. The Effect of a Multispecies Probiotic Mixture on the Symptoms and Fecal Microbiota in Diarrhea-dominant Irritable Bowel Syndrome: A Randomized, Double-blind, Placebo-controlled Trial. <em>J Clin Gastroenterol</em> 2011 Dec 5.</li>
                    <li>Fuller R. Probiotics in man and animals. <em>J Appl Bacteriol</em> 1989; 66 (5): 365-78.</li>
                    <li>Dominguez-Bello G, Costello K, Contreras M et al. Delivery mode shapes the acquisition and structure of the initial microbiota across multiple body habitats in newborns. <em>PNAS</em> 2010; 107: 11971–5. </li>
                    <li>Vitetta L, Manuel R, Zhou JY et al. The Overarching Influence of the Gut Microbiome on End-Organ Function: The Role of Live Probiotic Cultures. <em>Pharmaceuticals</em> 2014;9:954-989.</li>
                    <li>Pepper J & Rosenfeld S. The emerging medical ecology of the human gut microbiome. <em>Trends Ecol Evol</em> 2012; 27 (7): 381-4.</li>
                    <li>Vitetta L & Alford H. The Pharmacobiotic Potential of the Gastrointestinal Tract Micro-Biometabolome-Probiotic Connect: A Brief Commentary. <em>Drug Development Research</em> 2013; 74: 353-359</li>
                    <li>Vitetta L, Briskey D, Hayes E, Shing, C & Peake J. Probiotics, Commensal Bacteria and the Pharmacobiotic Regulation of Gastrointestinal Inflammation. <em>Inflammapharmacology</em> 2012; 20 (5): 251-266.</li>
                </ol>
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
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Chinese.pdf" target="_blank">中文翻译</a>
                </p>
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
            'price_retail' => 28.89,
            'price_wholesale' => 19.26,
            'image_path' => '/img/products/multibiotic_30s/multibiotic-30s-3d-bottle-master-sept14-v1_10_2_1.jpg',
            'thumb_image_path' => '/img/products/multibiotic_30s/thumb_multibiotic-30s-3d-bottle-master-sept14-v1_10_2_1.jpg',
            'in_stock' => true
        ]);
    }
}
