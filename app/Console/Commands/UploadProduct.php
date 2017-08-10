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

        Product::create(
            [
                'product_name_index' => 'ORSBiotic Sachets',
                'austl_number' => '239102',
                'product_name' => 'ORSBiotic&trade; 10pk Sachets',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">ORSBiotic&trade; 10pk Sachets</h4>
                <p>
                    <strong>Australian Innovation Patent No. 2016100500</strong>
                </p>
                <p>
                    ORSBiotic&trade; is an Oral Rehydration Solution to replace fluids lost due to vomiting,
                    diarrhoea and strenuous physical activity, providing essential electrolytes together with
                    selected probiotic species to provide therapeutic support for various triggers of diarrhoea
                    and associated symptoms.
                </p>
                ',
                'patent' =>
                    '
                <p>
                    <strong>Australian Innovation Patent No. 2016100500</strong>
                </p>
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
                'general_summary' =>
                    '
                <p>
                    ORSBiotic&trade; is an Oral Rehydration Solution to replace fluids lost due to vomiting,
                    diarrhoea and strenuous physical activity, providing essential electrolytes together with
                    selected probiotic species to provide therapeutic support for various triggers of diarrhoea
                    and associated symptoms.
                </p>
                <p>
                    ORSBiotic&trade; contains probiotic species that assist to maintain healthy gastrointestinal
                    homeostasis and permeability. The selected probiotic species from the genera Saccharomyces,
                    Lactobacillus and Bifidobacterium have clinical evidence for providing therapeutic support
                    for various triggers of diarrhoea and may help reduce the frequency and duration of diarrhoea.
                    Zinc supplementation has been found to reduce the duration and severity of diarrhoea in children.
                </p>
                ',
                'practitioner_summary' =>
                    '


                <strong>STANDARD INDICATIONS</strong>

                <p>
                    <ul>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>Relief or treatment of diarrhoea.</li>
                    </ul>
                </p>

                <strong>SPECIFIC INDICATIONS</strong>

                <p>
                    <ul>
                        <li>Helps replace water and electrolytes lost due to vomiting, diarrhoea, heavy sweating, fever, vigorous exercise and other dehydrating conditions.</li>
                        <li>Probiotic species from the genera Saccharomyces, Lactobacillus and Bifidobacterium have clinical evidence for providing therapeutic support for various triggers of diarrhoea including infectious agents, antibiotic-associated, Clostridium difficile-associated, irritable bowel syndrome, inflammatory bowel syndrome and malabsorption causes and may therefore help to reduce the frequency and duration of diarrhoea.</li>
                        <li>Saccharomyces, Lactobacillus and Bifidobacterium help maintain healthy gastrointestinal homeostasis and permeability.</li>
                        <li>Supplementary zinc benefits children with diarrhoea because it is a vital micronutrient essential for protein synthesis, cell growth and differentiation, immune function and intestinal transport of water and electrolytes. Clinical research demonstrates zinc reduces severity and duration of diarrhoea in children.</li>
                        <li>Zinc deficiency is associated with an increased risk of gastrointestinal infections, adverse effects on the structure and function of the gastrointestinal tract and impaired immune function.</li>
                        <li>Supports a healthy immune system.</li>
                    </ul>
                </p>



                <p>
                    <strong>SPECIFIC CONDITIONS</strong>
                </p>

                <p>
                    No specific conditions included on record.
                </p>


                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    <ul>
                        <li>Contains sugar (glucose).</li>
                        <li>Contains zinc which may be dangerous if taken in large amounts or for a long period.</li>
                        <li>If diarrhoea persists for more than 6 hours in infants under 6 months, 12 hours in children under 3 years, 24 hours in children aged 3-6 years or 48 hours in adults and children over 6 years, seek medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Duggan C, et al. Composition of oral rehydration solution. <em>JAMA</em> 2004;291:2628.</li>
                    <li>Farthing MJG. Oral Rehydration: An evolving solution. <em>J Pediat Gastroenterol Nutr</em> 2002;34:S64.</li>
                    <li>Baker LB, Jeukendrup AE. Optimal composition of fluid-replacement beverages. <em>Compr Physiol</em> 2014;4:575.</li>
                    <li>Islam MR, et al. Oral rehydration therapy: efficacy of sodium citrate equals to sodium bicarbonate for correction of acidosis in diarrhoea. <em>Gut</em> 1984;25:900.</li>
                    <li>Galvao TF, et al. Zinc supplementation for treating diarrhea in children: a systematic review and meta-analysis. <em>Rev Panam Salud Publica</em> 2013;33:370.</li>
                    <li>Lamberti LM, et al. Oral zinc supplementation for the treatment of acute diarrhea in children: a systematic review and meta-analysis. <em>Nutrients</em> 2013;5:4715.</li>
                    <li>Allen SJ, et al. Probiotics for treating acute infectious diarrhoea. <em>Cochrane Reviews</em> 2010;11.</li>
                    <li>Goldenberg JZ, et al. Probiotics for the prevention of Clostridium difficile-associated diarrhoea in adults and children. <em>Cochrane Reviews</em> 2013;5.</li>
                    <li>Buts JP, De Keyser N. Effects of Saccharomyces boulardii on Intestinal Mucosa. <em>Dig Dis Sci</em> 2006;51:1485.</li>
                    <li>Selle K, Klaenhammer TR. Genomic and phenotypic evidence for probiotic influences of Lactobacillus gasseri on human health. <em>FEMS Microbiol Rev</em> 2013;37:915.</li>
                    <li>Bodaszewska-Lubas M, et al. Antibacterial activity of selected standard strains of lactic acid bacteria producing bacteriocins – pilot study. <em>Postepy Hig Med Dosw</em> 2012;66:787.</li>
                    <li>Lonnermark E, et al. Intake of Lactobacillus plantarum reduces certain gastrointestinal symptoms during treatment with antibiotics. <em>J Clin Gastroenterol</em> 2010;44:106.</li>
                    <li>Fanning S, et al. Bifidobacterium breve UCC2003 surface exopolysaccharide production is a beneficial trait mediating commensal-host interaction through immune modulation and pathogen protection. <em>Gut Microbes</em> 2012;3:410.</li>
                    <li>Munoz-Quezada S, et al. Competitive inhibition of three novel bacteria isolated from faeces of breast milk-fed infants against selected pathogens. <em>Br J Nutr</em> 2013;109:S63.</li>
                    <li>Shing CM, et al. Effects of probiotics supplementation on gastrointestinal permeability, inflammation and exercise performance in the heat. <em>Eur J Appl Physiol</em> 2014;114:93.</li>
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
                ',
                'dosage_information' =>
                    '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Add 5 g of powder (1 sachet) to 200 mL of cold water, immediately before use and stir well or as directed by your healthcare professional.
                </p>
                <p>
                    Recommended dose for under 3 years is 100 mL every 90 minutes; 3-6 years 100 mL every 60 minutes; 6-12 years 100 mL every 30 minutes and over 12 years 200 mL every 30 minutes.
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
                                <p>2 billion</p>
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
                                <p>Flavours</p>
                                <p>Silica</p>
                                <p>Stevia</p>
                                <p>Carrot powder</p>
                                <p>Thaumatin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/orsbiotic/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/chinese" target="_blank">中文翻译</a>
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
                'price_retail' => 19.46,
                'price_wholesale' => 12.99,
                'image_path' => '/img/products/orsbiotic/orsbiotic_sachets.jpg',
                'thumb_image_path' => '/img/products/orsbiotic/orsbiotic_sachets_thumb.jpg',
                'in_stock' => true,
                'slug' => 'orsbiotic-10pk-sachets',
            ]
        );

        $this->comment("Uploaded ORS Sachets");

        Model::reguard();
    }
}