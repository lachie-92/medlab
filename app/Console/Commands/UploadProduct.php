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
            'product_name_index' => "Manuka-C 210g",
            'austl_number' => '274057',
            'product_name' => 'Manuka-C&trade; 210g',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">Manuka-C&trade; 210g</small></h4>
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


                <strong>STANDARD INDICATIONS</strong>

                <p>
                    <ul>
                        <li>Treatment of symptoms of mild infections of upper respiratory tract. [Warnings S and COLD required]</li>
                        <li>For the symptomatic relief of recurrent upper respiratory tract infections. [Warnings S and COLD required]</li>
                        <li>Relief of symptoms of mild upper respiratory infections. [Warnings S and COLD required]</li>
                        <li>For the symptomatic relief of upper respiratory tract infections. [Warnings S and COLD required]</li>
                        <li>May assist in the management of upper respiratory tract infections. [Warnings S and COLD required]</li>
                    </ul>
                </p>

                <strong>SPECIFIC INDICATIONS</strong>

                <p>
                    <ul>
                        <li>May assist in supporting and maintaining healthy immune function</li>
                        <li>The combination of vitamin C and zinc supports healthy connective tissue function</li>
                        <li>Vitamin C assists with normal iron metabolism</li>
                        <li>Requirements for vitamin C may be increased during times of stress</li>
                        <li>Zinc may assist in the healing of minor skin wounds</li>
                        <li>Vitamin C is a vital cofactor for several enzymatic reactions in the body</li>
                        <li>Vitamin C is required for the antimicrobial activity of white blood cells</li>
                        <li>Dehydroascorbic acid is immediately reduced to ascorbic acid upon entering the cell which is mediated by two major pathways; chemical reduction by glutathione and enzymatic reduction using glutaredoxin, a glutathione-dependent enzyme.</li>
                        <li>Glutathione is vital constituent of cells throughout the body, acting as a redox buffer and as a cofactor for signal transduction </li>
                        <li>Honey has traditionally been used as a therapy to help heal wounds and conditions of the gut</li>
                        <li>Honey is well documented to have anti-microbial, anti-viral and anti-fungal activity </li>
                        <li>When exposed to bacteria, neutrophils oxidize extracellular ascorbic acid to form dehydroascorbic acid, which is transported into the neutrophil and rapidly reduced to ascorbic acid by the protein glutaredoxin. As a result of this recycling of extracellular ascorbic acid, the neutrophil internal concentration of ascorbic acid increases 10-fold</li>
                        <li>Ascorbic acid is transported into the cell by sodium-dependent vitamin C transporters SVCT1 and SVCT2, one or both of which are found in most tissues. Dehydroascorbic acid is transported by glucose transporters GLUT1 and GLUT3, and, in insulin-sensitive tissues, also by GLUT4. </li>
                        <li>Neutrophils, monocytes and lymphocytes become saturated with vitamin C when dosed at 100 mg per day and demonstrate a concentration at least 14-fold higher than plasma vitamin C </li>
                        <li>Bioavailability of vitamin C decreases with increasing dosage. Bioavailability is demonstrated to be complete at a dose of 200 mg daily whereas at higher doses at 1250 mg daily, bioavailability declines to less than 50% </li>
                        <li>Vitamin C daily doses above 400 mg have no evident value as with increasing doses the bioavailability decreases and excess vitamin C is excreted in urine </li>
                        <li>Plateau plasma vitamin C is close to maximum when dosed at 200 mg daily with plasma concentrations near saturation at 400 mg daily. Complete plasma saturation occurrs at 1000 mg daily but at the expense of decreased bioavailability increased urinary excretion </li>
                        <li>At vitamin C doses of 1000 mg daily, urine uric acid and oxalate may become elevated </li>
                        <li>At doses greater than 100 mg/day, plasma concentrations reach a plateau but at doses greater than 400 mg/day, further increases in plasma concentrations are minimal </li>
                        <li>Tight control of plasma vitamin C levels are due to absorption (bioavailability), tissue transport, renal reabsorption and excretion and utilisation </li>
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
                    <li>(If medicine contains one sugar) contains [insert name of sugar] OR (If medicine contains two or more sugars) Contains sugars [or words to that effect].</li>
                    <li>Vitamins can only be of assistance if the dietary vitamin intake is inadequate. OR Vitamin supplements should not replace a balanced diet.</li>
                    <li>Not recommended for use by pregnant and lactating women (or words to that effect).</li>
                    <li>Adults only (or words to that effect).</li>
                    <li>If symptoms persist consult your healthcare practitioner (or words to that effect).</li>
                    <li>Not suitable for infants under the age of twelve months (or words to that effect).</li>
                    <li>Adults only. OR Not to be used in children under two years of age without medical advice (or words to that effect). </li>


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
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Manuka-C/Chinese.pdf" target="_blank">中文翻译</a>
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
            'price_retail' => 45.36,
            'price_wholesale' => 29.95,
            'image_path' => '/img/products/manuka-c-210g/manuka-c.png',
            'thumb_image_path' => '/img/products/manuka-c-210g/manuka-c_thumb.png',
            'in_stock' => true,
            'slug' => 'manuka-c-210g'
        ]);
        

        Model::reguard();
    }
}