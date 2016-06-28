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

            'xero_item_id' => 24,
            'product_name_index' => "Manuka-C",
            'product_name' => 'Manuka-C&trade;',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">Manuka-C&trade;</small></h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    Manuka-C&trade; is scientifically formulated to support optimal immune system function. It includes evidence-based
                    ingredients containing a blend of three ascorbates combined with glutathione and Manuka honey powder.
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
                    Manuka-C&trade; is scientifically formulated to support optimal immune system function. It includes evidence-based
                    ingredients containing a blend of three ascorbates combined with glutathione and Manuka honey powder. Ascorbic acid
                    and zinc are vital for the optimal functioning of the immune system including the anti-microbial activity of white
                    blood cells and are also important for wound healing. Glutathione assists with the physiological role of ascorbic
                    acid within the cell, while Manuka honey has traditionally been used for its anti-bacterial, anti-viral and anti-fungal activity.

                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    Manuka-C&trade; is a novel combination of ingredients to support optimal immune system function containing a blend of three
                    ascorbates to be gentle on the stomach. Ascorbic acid and glutathione are essential nutrients for optimal immune function,<sup>1-3</sup>
                    ensuring effective anti-microbial and anti-inflammatory activity of white blood cells (WBC)<sup>2,4</sup> with glutathione aiding
                    the physiological role of ascorbic acid recycling and activity within the cell. <sup>4-7</sup> Ascorbic acid together with zinc
                    is also required for wound healing and healthy connective tissue function.<sup>1,3,8</sup> Manuka honey has been used for centuries
                    in the treatment of infections having anti-microbial and anti-inflammatory activity.<sup>9-11</sup>
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
                    When exposed to bacteria, neutrophils oxidize extracellular ascorbic acid to form dehydroascorbic acid that is
                    transported into the neutrophil and rapidly reduces back to ascorbic acid within the cell by the redox enzyme
                    glutaredoxin that requires glutathione as a cofactor.<sup>13</sup> As a result of the recycling of ascorbic acid,
                    the internal concentration of ascorbic acid within the WBC increases 10-fold in which it functions to quench oxidants
                    generated during phagocytosis, a natural and controlled physiological process (see Figure 4).<sup>13</sup>
                </p>

                <p>
                    <img alt="Figure 4" src="/img/products/manuka-c/manuka_figure4.png" width="400px;" class="img-responsive center-block"><br>
                    <strong>Figure 4. Dehydroascorbic acid (DHA) and ascorbic acid (AA) transport and recycling in neutrophils.<sup>7</sup></strong>
                    AA and DHA are transported differently into the cell. With activation (i.e. bacterial exposure), neutrophils secrete reactive
                    oxygen species that oxidize extracellular AA to DHA that is then rapidly transported into the neutrophil via the glucose
                    transporters, GLUT1 and GLUT3. Intracellular DHA is immediately reduced to AA via Glutaredoxin (GRX), a glutathione requiring redox enzyme.
                    As a result of DHA transport and reduction, a 10-fold higher AA internal concentration is achieved compared to activity of the AA
                    transporter alone. AA may quench oxidants generated during phagocytosis, a regulated physiological occurrence.
                </p>
                <p>
                    GSH: reduced glutathione; GSSG: oxidized glutathione; GRD: glutathione reductase
                </p>
                <br>

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
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Levine M, Conry-Cantilena C, Wang Y, et al. Vitamin C pharmacokinetics in healthy volunteers: evidence for a recommended dietary allowance. <em>PNAS</em> 1996; 93:3704-3709.</li>
                    <li>Johnston C, Meyer S, Srilakshmi JC. Vitamin C Elevates Red Blood Cell Glutathione in Healthy Adults. <em>Am J Clin Nutr</em> 1993; 58:103-105.</li>
                    <li>Mendiratta S, Qu Z, May J. Erythrocyte Ascorbate Recycling: Antioxidant Effects in Blood. <em>Free Rad Bio & Med</em> 1998;2 4:798-797.</li>
                    <li>Lenton K, Sané A, et al. Vitamin C Augments Lymphocyte Glutathione in Subjects with Ascorbate Deficiency. <em>Am J Clin Nutr</em> 2003; 77:189-195.</li>
                    <li>Carr A, Bozonet S, et al. Human Skeletal Muscle Ascorbate is Highly Responsive to Changes in Vitamin C Intake and Plasma Concentrations. <em>Am J Clin Nutr</em> 2013; 97:800-807.</li>
                    <li>Richie R, Nichenametla S, et al. Randomized Controlled Trial of Oral Glutathione Supplementation on Body Stores of Glutathione. <em>Eur J Nutr</em> 2015; 54:251-263.</li>
                    <li>Rumsey S, Levine M. Absorption, Transport, and Disposition of Ascorbic Acid in Humans. <em>Nutr Biochem</em> 1998; 9:116–130.</li>
                    <li>Wintergerst E, Maggini S, Hornig D. Immune-Enhancing Role of Vitamin C and Zinc and Effect on Clinical Conditions. <em>An Nutr Metab</em> 2006; 50:85-94.</li>
                    <li>Israili Z. Antimicrobial Properties of Honey. <em>Am J Therapeu</em> 2014; 21:304–323.</li>
                    <li>Abdulrhman MA, Mekawy MA, et al. Bee Honey Added to the Oral Rehydration Solution in Treatment of Gastroenteritis in Infants and Children. <em>J Med Food</em> 2010; 13:605-609.</li>
                    <li>Zumla A, Lulat A. Honey--a Remedy Rediscovered. <em>J Royal Soc Med</em> 1989; 82:384-385.</li>
                    <li>Hemilä H, Chalker E. Vitamin C for preventing and treating the common cold. <em>Cochrane Database Syst Rev</em> 2013; 1:CD000980.</li>
                    <li>Padayatty SJ, Levine M. New insights into the physiology and pharmacology of vitamin C. <em>CMAJ</em> 2001; 164:353-355.</li>
                    <li>Rink L, Haase H. Zinc homeostasis and immunity. <em>Trends in Immu</em> 2007; 28:1-4.</li>
                    <li>Wellinghausen N, Kirchner H, Rink L. The immunobiology of zinc. <em>Immunol Today</em> 1997; 18:519-521.</li>
                    <li>Eteraf-Oskouei T, Najafi M. Traditional and Modern Uses of Natural Honey in Human Diseases: A Review. <em>Iran J Basic Med Sci</em> 2013; 16:731–742.</li>
                    <li>Patel S, Cichello S. Manuka honey: An emerging natural food with medicinal use. <em>Brain Cog</em> 2003;53:82-94.</li>
                    <li>Leong A, Herst P, Harper J. Indigenous New Zealand honeys exhibit multiple anti-inflammatory activities. <em>Innate Immunol</em> 2011-2012; 18:459-466.</li>
                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    <ul>
                        <li>Ascorbic acid may increase the absorption of aluminum found in antacids.</li>
                        <li>Taking ascorbic acid with estrogens may increase the effects of estrogens.</li>
                        <li>Taking large amounts of ascorbic acid may decrease the effectiveness of fluphenazine (Prolixin).</li>
                        <li>Zinc may decrease how much antibiotic the body absorbs.</li>
                    </ul>
                </p>
                ',
            'interactions' =>
                '
                ',
            'dosage_information' =>
                '
                <h4 class="medlab_product_content_title">
                    Direction of Use:
                </h4>
                <p>
                    Mix one 5 g dose (1 level teaspoon) into 200 mL of water and drink immediately, one (1) to two (2) times per day or as directed by your healthcare practitioner.
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
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Manuka-C/English.pdf"target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Manuka-C/Arabic.pdf"target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Manuka-C/Spanish.pdf"target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Manuka-C/Russian.pdf"target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Manuka-C/Japanese.pdf"target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Manuka-C/Italian.pdf"target="_blank">Traduzione italiana</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Manuka-C/Chinese.pdf" target="_blank">中文翻译，中文翻譯</a>
                </p>
                ',
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
            'price_retail' => 28.9,
            'price_wholesale' => 19.25,
            'image_path' => '/img/products/manuka-c/manuka-c.png',
            'thumb_image_path' => '/img/products/manuka-c/mauka-c_thumb.png',
            'in_stock' => true,
            'slug' => 'manuka-c'
        ]);

        Model::reguard();
    }
}