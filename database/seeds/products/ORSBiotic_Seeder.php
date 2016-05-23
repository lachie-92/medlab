<?php

use Illuminate\Database\Seeder;
use App\Product;

class ORSBiotic_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 13,
            'product_name_index' => 'ORSBiotic',
            'product_name' => 'ORSBiotic&trade;',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">ORSBiotic&trade;</h4>
                <p>
                    <strong>PATENT PENDING</strong>
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
                    <strong>PATENT PENDING</strong>
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
                <p>
                    The concept of an Oral Rehydration Solution (ORS) began in the late 1960’s when it was found that
                    the sodium-coupled glucose transporter remains largely intact and continues to stimulate resorption
                    of salts and water in patients infected with Vibrio cholera infection.<sup>1</sup> Clinical studies
                    of ORS use in cholera patients confirmed that ORS therapy was effective in reducing mortality in
                    children and adults with acute diarrhoeal disease. Shortly following this evidence, the
                    World Health Organisation (WHO) was driving a major campaign to implement ORS worldwide.<sup>2</sup>
                    The osmolarity, which is based on glucose and electrolyte concentrations in the solution,
                    is imperative to the therapeutic success of an ORS. The original standard formula proposed by
                    WHO in 1975 was 311 mmol/L but was amended in 2002 to 245 mmol/L. The reduced osmolarity formula
                    in children demonstrated improved net water absorption, less vomiting, less stool output, shorter
                    duration of illness and less need for intravenous fluids.<sup>1</sup>
                </p>
                <p>
                    <strong>Electrolyte Composition</strong>
                </p>
                <p>
                    The composition of an ORS includes glucose, sodium, potassium, chloride and citrate, all of which
                    play an imperative role. Further considerations when treating dehydration associated in particular
                    with diarrhoea include zinc and selected probiotic species that offer a unique therapeutic role
                    in such situations. Glucose and sodium are vital to an ORS formulation. In patients with diarrhoea,
                    the nutrient-independent sodium absorption across the brush border membrane of intestinal
                    epithelial cells is impaired; however the coupled transport of sodium and glucose is preserved,
                    allowing absorption of salt and passive absorption of water provided by the ORS (see Figure 1).
                    Furthermore, glucose administration maintains blood glucose levels and sodium stimulates drinking,
                    renal absorption and maintains extracellular fluid volume.<sup>1</sup>
                </p>
                <p>
                    Potassium is a major cation in intracellular fluid and the balance of potassium in the
                    extracellular versus intracellular space has important effects on neural transmission, muscle
                    contraction and vascular tone. Chloride is the major anion lost in sweat and when combined with
                    sodium and glucose, it stimulates maximal water and sodium absorption across the jejunum.<sup>3</sup>
                    Citrate is used to correct metabolic acidosis due to watery diarrhoea and is used instead of
                    bicarbonate due to its stability.<sup>4</sup>
                </p>
                <p>
                    <img class="img-responsive" alt="Figure 1" src="/img/products/orsbiotic/ors_pic_1.png">
                </p>
                <p>
                    <strong>Figure 1. Coupled transport of sodium and glucose in intestinal epithelial cells.</strong>
                </p>
                <p>
                    <strong>Zinc</strong>
                </p>
                <p>
                    In 2004 WHO recommended for zinc to be added to ORS in children under the age of 5 years due to
                    it reducing duration and severity of diarrhoea, having a greater effect in malnourished children.
                    The mechanism of zinc for the treatment of diarrhoea is not completely understood but the role
                    of zinc may be due to regulation of intestinal fluid transport and mucosal integrity, modulation
                    of expression of genes encoding important zinc-dependent enzymes like cytokines that play a role
                    in immune modulation.<sup>5</sup> Zinc supplementation in children provides a 26% reduction in
                    the estimated relative risk of diarrhoea lasting beyond three days and is particularly indicated
                    for low- and middle-income countries/communities.<sup>6</sup>
                </p>
                <p>
                    <strong>Probiotic Bacteria</strong>
                </p>
                <p>
                    There is extensive evidence for the use of specific probiotic bacterial species for the treatment
                    of various triggers of diarrhoea. Two recent Cochrane reviews provide undisputed evidence for
                    their use in such situations. The use of probiotics in acute infectious diarrhoea was analysed
                    from 63 trials that included 8014 patients. The authors concluded that probiotics reduced the
                    duration of diarrhoea by approx. 25 hours and reduced stool frequency by one to two days.<sup>7</sup>
                    Further, another systematic review assessed 23 trials including 4213 patients and concluded that
                    when patients were given probiotics concomitantly, it reduced the risk of developing Clostridium
                    difficile-associated diarrhoea (CDAD) by 64% and also reduced the symptoms of CDAD such as
                    abdominal cramping, nausea, fever, soft stool, flatulence and taste disturbance.<sup>8</sup> From
                    these reviews, Saccharomyces boulardii and Lactobacillus gasseri particularly stood out has
                    having therapeutic efficacy for treating diarrhoea.
                </p>
                <p>
                    In addition to the immune modulating activity of Saccharomyces boulardii i.e. sIgA stimulation,
                    it has also demonstrated in rat models to increase the expression of the sodium glucose
                    cotransporter SGLT-1 which is of great importance in acute and chronic diarrhoeas as this
                    is the transporter responsible for moving sodium, glucose, other electrolytes (from ORS)
                    and water from the gastrointestinal lumen into the blood stream, assisting with the prevention
                    of dehydration.<sup>9</sup> Lactobacillus gasseri provides therapeutic action for diarrhoea in that it
                    demonstrates immunomodulating activity via stimulation of host sIgA and cytokines that are
                    directed towards to pathogens and also secretes anti-microbial and anti-viral metabolites that
                    competitively exclude pathogens that may prove beneficial in cases of infectious diarrhoea.<sup>10</sup>
                    Lactobacillus plantarum also secretes anti-microbial and anti-viral metabolites and has
                    demonstrated anti-microbial activity against Group B Streptococcus. L. plantarum may have a
                    preventative effect on milder gastrointestinal symptoms during treatment with antibiotics such
                    as loose watery stools and nausea.<sup>11,12</sup> Bifidobacterium breve may also provide therapeutic activity
                    when treating diarrhoea due to its ability to protect against pathogens due to its cell surface
                    exopolysaccharides and its immunomodulating activity (cytokine and antibody stimulation) that
                    has proven effective ex vivo from breast fed infants against enteropathogenic bacteria such as
                    selected strains from Salmonella, Shigella and Escherichia coli.<sup>13,14</sup>
                </p>
                <p>
                    In conclusion, the addition of zinc and selected probiotic bacteria to an approved ORS osmolarity
                    formulation as outlined by the WHO; provides a scientifically valid treatment option for patients
                    diagnosed with acute or chronic diarrhoea due to antibiotic use, Clostridium difficile infection,
                    other infectious pathogens, bowel disorders, allergies and intolerances to foods and medications
                    such as NSAIDs, chemotherapy and radiation. Furthermore, ORSBiotic&trade; would be effective in
                    preventing dehydration while exercising and potentially the development of gut permeability
                    that is seen with athletes training in hot and humid conditions.<sup>15</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>Replace water and electrolytes lost due to vomiting, diarrhoea, heavy sweating, fever, vigorous exercise and other dehydrating conditions<sup>1</sup></li>
                        <li>Supplementary zinc benefits children with diarrhoea <sup>8</sup></li>
                        <li>The co-transport of glucose with sodium accelerates water  absorption<sup>9</sup></li>
                        <li>Selected probiotic species maintain healthy gastrointestinal  homeostasis and permeability<sup>10</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Those requiring rehydration due to vomiting and diarrhoea</li>
                        <li>Those requiring rehydration after vigorous exercise and heavy  sweating</li>
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
                    Consuming probiotics may cause minor side effects. Your patients should not be alarmed by this
                    list of possible side effects, as they may not experience any of them.
                </p>

                <p>
                    These include:
                </p>

                <p>
                    <ul>
                        <li>Cramps or pain in the stomach</li>
                        <li>Constipation</li>
                        <li>Mucus in the stool</li>
                        <li>Bloated stomach area</li>
                        <li>Gas</li>
                    </ul>
                </p>

                <p>
                    These side effects are usually mild and dose related. Most of them disappear completely in a few days
                    after the dose of ORSBiotic&trade; is lowered or stopped.
                </p>

                <p>
                    Serious allergic reactions to these ingredients are rare however if a patient experiences any of
                    these they should contact their healthcare practitioner immediately:
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
                    If symptoms persist patients should consult their healthcare practitioner. If Diarrhoea persists
                    for more than 6 hours in infants under 6 months; 12 hours in children under 3 years; 24 hours
                    in children aged 3 - 6 years or 48 hours in children over 6 years and adults, patients are
                    advised to seek medical advice.
                </p>

                <p>
                    ORSBiotic&trade; contains glucose (sugar). This powder contains zinc, which may be dangerous if
                    taken in large amounts or for a long period.
                </p>

                <p>
                    Please refer patients to the CMI for this product for symptoms and side effects.
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
                <p>
                    Your healthcare practitioner or pharmacist will tell you how much ORSBiotic&trade; powder to take
                    each day. This depends on the condition being treated and whether any other medicines are being used.
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
                    </tbody>
                </table>
                ',
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/English.pdf">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Arabic.pdf">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Russian.pdf">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Spanish.pdf">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Japanese.pdf">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/French.pdf">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Chinese.pdf">中文翻译，中文翻譯</a>
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
            'price_retail' => 30.09,
            'price_wholesale' => 20.06,
            'image_path' => '/img/products/orsbiotic/orsbiotic.png',
            'thumb_image_path' => '/img/products/orsbiotic/thumb_orsbiotic.png',
            'in_stock' => true
        ]);
    }
}
