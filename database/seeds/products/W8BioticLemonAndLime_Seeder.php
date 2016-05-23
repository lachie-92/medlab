<?php

use Illuminate\Database\Seeder;
use App\Product;

class W8BioticLemonAndLime_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 11,
            'product_name_index' => 'W8Biotic Lemon & Lime',
            'product_name' => 'W8Biotic&trade; Lemon & Lime',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">W8Biotic&trade; Lemon & Lime</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    W8Biotic&trade; is scientifically formulated to support lean body mass, weight management and
                    maintain healthy blood glucose levels in healthy individuals when taken in conjunction with a
                    calorie controlled eating plan.
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
                    W8Biotic&trade; is scientifically formulated to support lean body mass, weight management and maintain
                    healthy blood glucose levels in healthy individuals when taken in conjunction with a calorie
                    controlled eating plan.
                </p>
                <p>
                    W8Biotic&trade; contains Hi-Maize Resistance Starch, which is a Type 2 Resistant Starch (RS2) with
                    therapeutic properties that may help to increase satiety and assist with weight management.
                    Hi-Maize is also a prebiotic and produces short-chain fatty acids that help to support healthy
                    gastrointestinal function. Leucine is a branched-chain amino acid that assists in the metabolic
                    regulation of healthy blood glucose levels and in supporting skeletal muscle protein synthesis in
                    healthy individuals. W8Biotic&trade; also contains Lactobacillus plantarum (Med 25) and Lactobacillus
                    paracasei (Med 24) that naturally synthesise alpha-hydroxy isocaproic acid (HICA) from leucine,
                    which is indicated to support lean muscle mass in healthy individuals. Furthermore, L-carnitine
                    assists with modulating energy expenditure in healthy individuals.
                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    A significant body of research has been conducted demonstrating digestive and colonic health
                    benefits of High Amylose Maize Starch (HAMS) with research also showing metabolic advantages.<sup>1</sup>
                    Resistant starch is the total amount of starch, and the products of starch degradation that
                    resists digestion in the small intestine. Hi-Maize demonstrates numerous health benefits
                    such as increasing satiety and helping with weight control, assisting with glycaemic
                    management and promoting digestive health. Hi-Maize demonstrates increased satiety compared
                    to other forms of fibre helping people to feel fuller in the hours after consuming it<sup>2</sup> and
                    has also shown to help people eat less after 2 hours<sup>3</sup> as well over the proceeding 24 hours.<sup>4</sup>
                    Hi-Maize consumption has been shown to increase insulin sensitivity in healthy people,<sup>5,6</sup>
                    in people with type 2 diabetes<sup>7</sup> and in individuals with insulin resistance.<sup>8-10</sup> Furthermore,
                    as a prebiotic, Hi-Maize supports beneficial bacterial growth and activity, increasing
                    short-chain fatty acid production and  assisting with normal intestinal function.<sup>11-13</sup>
                </p>
                <p>
                    Leucine has a unique role in metabolic regulation beyond the fundamental role of being an
                    amino acid, a substrate for the synthesis of proteins. Leucine has a direct link to the
                    maintenance of glucose homeostasis by enhancing the recycling of glucose via the glucose-alanine
                    cycle and stimulates muscle protein synthesis through the insulin-signaling cascade during
                    catabolic periods such as fasting or energy restriction.<sup>14,15</sup> Further, leucine supplementation
                    stimulates recovery of muscle protein synthesis after exercise. The mechanisms of leucine
                    appear to contribute to a metabolic advantage during weight loss.<sup>15</sup> Acetyl-L-Carnitine is
                    crucial for beta-oxidation, facilitating the transport of long-chain fatty acids across the
                    mitochondrial membrane for oxidation. When combined with weight loss motivation, the beneficial
                    effects of L-Carnitine are amplified including significant body weight loss and a decrement of
                    serum triglyceride levels when compared to participants supplementing with L-Carnitine but
                    being assigned to a non-motived group for weight loss.<sup>16</sup> DL-α-hydroxy isocaproic acid (HICA)
                    is an end product of leucine metabolism in human tissues such as muscle and connective tissue
                    and is considered an anti-catabolic substance. HICA has demonstrated to increase whole lean
                    body mass in healthy athletes and also decreased whole body delayed-onset muscle soreness
                    (DOMS) symptoms.<sup>17</sup> The Medlab Lactobacilli plantarum (Med 25) and Lactobacillus paracasei
                    (Med 24) have demonstrated the highest production of HICA when co-cultured with leucine.
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>Increase satiety and assist with weight management<sup>4</sup></li>
                        <li>Modulate carbohydrate and lipid metabolism<sup>2,5</sup></li>
                        <li>Promote digestive health<sup>6,7</sup></li>
                        <li>Regulate blood-glucose levels & skeletal muscle protein synthesis in  healthy individuals<sup>1,2</sup></li>
                        <li>Promote HICA synthesis indicated to increase lean muscle mass<sup>3</sup></li>
                        <li>Modulate energy expenditure in healthy individuals<sup>8</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Those seeking weight management support and lean body mass support</li>
                    </ul>
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Nugent AP. Health properties of Resistant Starch, British Nutrition Foundation. <em>NutrBull</em> 2005;30:27-54.</li>
                    <li>Willis HJ, et al. Greater satiety response with resistant starch and corn bran in human subjects. <em>Nutr Res</em> 2009;29:100-105.</li>
                    <li>Anderson GH, et al. Relation between estimates of corn starch digestibility by the Englyst in vitro method and glycemic response, subjective appetite and short-term food intake in young men. <em>Am J Clin Nutr</em> 2010;91:932-939.</li>
                    <li>Bodhinham CL, et al. Acute ingestion of resistant starch reduces food intake in healthy adults. Br J Nutr 2010;103:917-922.</li>
                    <li>Robertson DM, et al. Prior short-term consumption of resistant starch enhances postprandial insulin sensitivity insulin sensitivity in healthy subjects. <em>Diabetologia</em> 2003;46:659-665.</li>
                    <li>Robertson DM, et al. Insulin-sensitizing effects of resistant starch and effects on skeletal muscle and adipose tissue metabolism. <em>AM J Clin Nutr</em> 2005;82:559-567.</li>
                    <li>Zhang WQ, et al. Effects of resistant starch on insulin resistance of type 2 diabetes mellitus patients. <em>Chin J Prevent Med</em> 2007;41:101-104.</li>
                    <li>Johnson KL, et al. Resistant starch  improves insulin sensitivity in metabolic syndrome. <em>Diabetic Med</em> 2010;27:391-397.</li>
                    <li>Maki KC, et al. Resistant starch from high-amylose maize increases insulin sensitivity in overweight and obese men. <em>J Nutr</em> 2012;142:717-723.</li>
                    <li>Robertson MD, et al. Insulin-sensitizing effects on muscle and adipose tissue after dietary fiber intake in men and women with metabolic syndrome. <em>J Clin Endocrinol Metab</em> 2012;97:3326-32.</li>
                    <li>Brown I, et al. Fecal numbers of Bifidobacteria are higher in pigs fed Bifidobacterium longum with a high amylose cornstarch than with a low amylose cornstarch. <em>J Nutr</em> 1997;127:1822-1827.</li>
                    <li>Martinez I, et al. Resistant starch types 2 and 4 have differential effects on the composition of the fecal microbiota in human subjects. <em>PLoS ONE</em> 2010;5:e15046.</li>
                    <li>Ramakrishna BS, et al. Amylose-resistant starch plus oral rehydration solution for cholera. <em>NEJM</em> 2000;342:308-313.</li>
                    <li>Layman DK. Role of leucine in weight loss diets and glucose homeostasis. <em>J NUtr</em> 2003;133:261S-267S.</li>
                    <li>Layman DK. Protein quantity and quality at levels above the RDA improves adult weight loss. <em>J Am Coll Nutr</em> 2004;23:631-S-636S.</li>
                    <li>Odo S, et al. A pilot clinical trial on L-Carnitine supplementation in combination with motivation training: effects on weight management in healthy volunteers. <em>Food Nutr Sci</em> 2013;4:222-231.</li>
                    <li>Mero AA, et al. Effects of alfa-hydroxy-isocaproic acid on body composition, DOMS and performance in athletes. <em>J Int Soc Sports Nutr</em> 2010;7:1. </li>
                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    Consuming probiotics and enzymes may cause side effects. Parents should not be alarmed by this list of
                    possible side effects, as infants and children may not experience any of them. Parents should contact
                    their healthcare practitioner if children experience any of the following.
                </p>

                <p>
                    These include:
                </p>

                <p>
                    <ul>
                        <li>Cramps or pain in the stomach</li>
                        <li>Constipation</li>
                        <li>Diarrhoea</li>
                        <li>Mucus in the stool</li>
                        <li>Bloated stomach area</li>
                        <li>Gas</li>
                    </ul>
                </p>

                <p>
                    These side effects are usually mild and dose related. Most of them disappear completely in a few days
                    after the dose of W8Biotic&trade; is lowered or stopped.
                </p>

                <p>
                    Serious allergic reactions to these ingredients are rare however parents should contact their
                    healthcare professional or call an ambulance immediately if any of the following are experienced:
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
                    If you experience any allergic reaction, other side effects not listed here or if you notice
                    anything else that is making you feel unwell after consuming W8Biotic&trade;, discontinue use and
                    consult with your healthcare practitioner.
                </p>

                <p>
                    You can also refer to the CMI for this product for symptoms and side effects.
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
                    Some medicines may interfere with W8Biotic&trade;. These include:
                </p>

                <p>
                    <ul>
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
                    Add 25 g of powder (1 scoop) to 250 mL of cold water and consume immediately, One (1) to two (2)
                    times a day, before meals or directed by your healthcare practitioner.
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
                    </tbody>
                </table>
                <p class="medlab_product_content_sub_title">
                    Excipient Ingredients:
                </p>
                <p>
                    Silica
                </p>
                <p>
                    Thaumatin
                </p>
                <p>
                    Malic acid
                </p>
                <p>
                    Stevia
                </p>
                <p>
                    Lemon Lime Flavour
                </p>
                ',
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/English.pdf">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Arabic.pdf">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Russian.pdf">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Spanish.pdf">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Japanese.pdf">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/French.pdf">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Chinese.pdf">中文翻译，中文翻譯</a>
                </p>
                ',
            'free_from' =>
                '
                <p class="medlab_product_content_sub_title">
                    Gluten and Casein Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for vegetarians
                </p>
                <p class="medlab_product_content_sub_title">
                    No artificial colours, flavours or sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate formula to maintain CFU stability
                </p>
                ',
            'price_retail' => 44.16,
            'price_wholesale' => 29.44,
            'image_path' => '/img/products/w8biotic/w8biotic.png',
            'thumb_image_path' => '/img/products/w8biotic/thumb_w8biotic.png',
            'in_stock' => true
        ]);
    }
}
