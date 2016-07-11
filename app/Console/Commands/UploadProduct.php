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
            'product_name_index' => "Immune-5 Vanilla",
            'product_name' => 'Immune-5&trade; Vanilla',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">Immune-5&trade; Vanilla</small></h4>
                <p>
                    <strong></strong>
                </p>
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with 
                    two specific probiotic species shown to assist with immune function and assist with upper respiratory tract infections. 
                </p>
                ',
            'patent' =>
                '
                <p>
                    <strong></strong>
                </p>
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
            'general_summary' =>
                '
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with two specific 
                    probiotic species shown to assist with immune function and assist with upper respiratory tract infections. ResistAid&trade; is a 
                    prebiotic soluble fibre with immune modulating properties while Lactoferrin is a naturally occurring protein found in the body 
                    with broad spectrum anti-microbial and anti-viral activity. Colostrum provides important innate immune supporting proteins 
                    including the antibody IgG that both activates and modulate the body defence processes.

                </p>
                ',
            'practitioner_summary' =>
                '
                
                <p>
                    <strong>Lactoferrin:</strong>
                </p>

                
                <p>
                    Lactoferrin is an abundant protein found in breast milk, and is secreted in tears, saliva, intestinal mucus, genital secretions 
                    and in found in granules of neutrophils. Lactoferrin is a glycoprotein belonging to the transferrin family of iron-binding 
                    proteins. As a multifunctional protein it demonstrates potent anti-microbial, anti-viral, anti-fungal, anti-inflammatory and 
                    immunomodulatory activity providing an effective defense mechanism for the mammalian body. 1 The bactericidal effect of lactoferrin 
                    is in part due to its ability to bind to and withhold iron that is essential for pathogenic bacterial growth, resulting in 
                    bacteriostatic effects. 2 Furthermore, lactoferrin disrupts the integrity of pathogenic bacterial cell walls by binding to 
                    lipopolysaccharides causing cell wall degradation. 1 Clinical evidence from a recent Cochrane review demonstrated the therapeutic 
                    activity of lactoferrin for the prevention of sepsis and NEC in preterm infants. 3

                </p>

                <p>
                    <strong>Colostrum:</strong> Often described as the first food of life, colostrum is a sweet sticky mammary secretion produced 
                    by mammals generally during the 24-48-hour perinatal period to provide essential immune-building nutrients to the offspring. 
                    Containing vital antibodies, vitamins and proteins, colostrum particularly of bovine origin has been used in the treatment and 
                    prevention of infectious diseases. 4 The diverse immune-enhancing factors of colostrum prove to have significant beneficial 
                    therapeutic applications, particularly due to its rich supply of immunoglobulin Ig (IgG). 2    Clinical trials have shown 
                    therapeutic benefit from the use of bovine colostrum in patients suffering chronic infection and pain; as well as being an 
                    effective prophylactic for gram negative sepsis, influenza and severe diarrhea. 4,5 It has also been shown to prevent gastric 
                    damage in patients using nonsteroidal anti-inflammatory medications; and not only proves to be a substance with superior 
                    immunological activity but is also an optimum dietary supplement. 5,6 There is some evidence which implies that a colostrum 
                    supplement is beneficial to those who are immunocompromised suffering from a severe diarrheal illness. 6

                </p>
                

                <p>
                    <strong>Arabinogalactan:</strong>
                </p>

                <p>
                    Arabinogalactans are highly branched, water-soluble polysaccharides with a high molecular weight that are found in a wide 
                    variety of plants. Arabinogalactans specifically from Larch are an excellent dietary fiber supplement that are capable of 
                    increasing beneficial gastrointestinal (GI) commensal bacteria as well as short-chain fatty acid production. 7,8 As an 
                    effective defense against the common cold infection, Larch arabinogalactan has also been shown in animal studies to 
                    stimulate natural killer cell cytotoxicity in vitro, demonstrating an increase in white blood cell counts i.e. neutrophils 
                    and eosinophil’s. 9,10 ResistAid™ is a proprietary arabinogalactan extracted from Larch (Larix laricina) supplied by Lonza 
                    Ltd, Switzerland. A number of human clinical studies have demonstrated ResistAid\'s™ immunomodulatory activity in which a 
                    daily dose of 4.5 g significantly increased IgG antibody response of healthy volunteers to the pneumonia vaccine when 
                    compared to placebo. 10 In a more recent study Udani 2013 demonstrated that ResistAid™ at a dose of 1.5 g daily significantly 
                    increased the IgG antibody response to tetanus vaccine compared to placebo. 11 ResistAid™ has clinical evidence of being 
                    well tolerated in healthy individuals with no demonstrable side-effects. 10,12

                </p>
                
                <strong>Lactobacillus paracasei and Bifidobacterium lactis</strong>

                <p>
                    The GI commensal microbiota significantly influences the health of the host, supported by extensive scientific evidence. 
                    Whilst there are numerous publications exemplifying the range of positive benefits of probiotic bacteria, the mechanisms 
                    by which they benefit health and the specific species and strains are of a growing interest within the scientific community. 
                    13 A recent Cochrane review examined clinical studies assessing live microorganism intervention in cold and flu treatment, 
                    and found that probiotic bacteria including various Lactobacillus and Bifidobacterium species were effective in reducing the 
                    symptoms of acute upper respiratory tract infections. 14 Two clinical trials demonstrated that daily consumption of a
                    probiotic product containing Lactobacillus paracasei increased the antibody response (IgG) to influenza vaccination in elderly 
                    participants. 15, 16 Additional research has shown that consumption of probiotics containing both Lactobacillus paracasei and 
                    Bifidobacterium lactis increases the antigen-specific immune response (IgG and sIgA) of patients receiving the influenza vaccine, 
                    further supporting their immune modulatory effects. 16  The results from two systematic reviews demonstrated that the use of 
                    probiotics in children is effective in diminishing the incidence and the severity of the symptoms of upper respiratory tract 
                    infections. 17,18

                </p>
                
               
                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    Who will benefit:
                </p>

                <p>
                    <ul>
                        <li>Suitable for the whole family (2 years and under require professional advice prior to using)</li>
                        <li>Those requiring immune support</li>
                        <li>Those undergoing stressful events</li>
                        <li>Those seeking to ease the severity and duration of the common cold</li>
                        <li>Those seeking symptomatic relief from upper respiratory tract infections</li>
                        <li>Those receiving influenza immunisation</li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    Not to be used in children under two years of age except on health professional advice. Colostrum is 
                    derived from cow’s milk and contains lactose and cow’s milk proteins. Vitamin supplements should not replace a balanced diet. 
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">

                 <li>Ochoa T,  Cleary T. Effect of lactoferrin on enteric pathogens. <em>Biochimie, 2009;91:30</li>
                 <li>Vitetta L, Coulson S, et al. ‘The Clinical Efficacy of a Bovine lactoferrin/whey Protein Ig-Rich Fraction (Lf/IgF) for the Common Cold: A Double Blind Randomized Study‘  <em>Complementary therapies in medicine</em> 2013;21:164</li>
                 <li>Pammi M, Abrams S. ‘Oral lactoferrin for the prevention of sepsis and necrotizing enterocolitis in preterm infants.’ <em>The Cochrane Database of Systematic Reviews</em>, 2015:CD007137.</li>
                 <li>Waaga-Gasser A. ‘Bovine Colostrum--Therapeutic Synergism Involving Immunomodulation, Nutritional Supplementation and Antibacterial Action?‘ <em>International journal of clinical pharmacology and therapeutics</em> 2007;45:191</li>
                 <li>Struff W, Sprotte G. ‘Bovine Colostrum as a Biologic in Clinical Medicine: A Review. Part I: Biotechnological Standards, Pharmacodynamic and Pharmacokinetic Characteristics and Principles of Treatment‘ <em>International journal of clinical pharmacology and therapeutics</em> 2007:45;193</li>
                 <li>Struff, W. G. and G. Sprotte, ‘Bovine Colostrum as a Biologic in Clinical Medicine: A Review--Part II: Clinical Studies‘ (2008) <em>46 International journal of clinical pharmacology and therapeutics 211</em></li>
                 <li>Kelly, G. S., ‘Larch Arabinogalactan: Clinical Relevance of a Novel Immune-Enhancing Polysaccharide‘ (1999) <em>4 Altern Med Rev 96</em></li>
                 <li>‘Larch Arabinogalactan‘ (2000) <em>5 Altern Med Rev 463</em></li>
                 <li>Riede L, Grube B, & Gruenwald J. ‘Larch Arabinogalactan Effects on Reducing Incidence of Upper Respiratory Infections‘ (2013) <em>29 Cur Med Res Opinion 251</em></li>
                 <li> Udani, Jay K. et al, ‘Proprietary Arabinogalactan Extract Increases Antibody Response to the Pneumonia Vaccine: A Randomized, Double-Blind, Placebo-Controlled, Pilot Study in Healthy Volunteers‘ (2010) <em>9 Nutri Journ 32</em></li>
                 <li>Udani, Jay K., ‘Immunomodulatory Effects of ResistAid™: A Randomized, Double-Blind, Placebo-Controlled, Multidose Study‘ (2013) <em>32 J Ameri Coll of Nutr 331</em></li>
                 <li>Grube B, &Riede L. ‘Tolerability of a Proprietary Larch Arabinogalactan Extract: A Randomized, Double-Blind, Placebo-Controlled Clinical Trial in Healthy Subjects’.  <em>Food and Nutrition Sciences</em>, 2012, 3, 1533-1538 </li>
                 <li>Ashraf R, Shah N. Immune System Stimulation by Probiotic Microorganisms.</li>
                 <li>Critical Reviews in Food Science and Nutrition  2014:1;54</li>
                 <li>Hao, Qiukui et al, ‘Probiotics for Preventing Acute Upper Respiratory Tract Infections‘ (2011) <em>Cochr Database Syst Rev CD006895</em></li>
                 <li>Boge, Thierry et al, ‘A Probiotic Fermented Dairy Drink Improves Antibody Response to Influenza Vaccination in the Elderly in Two Randomised Controlled Trials‘ (2009) <em>27 Vaccine 5677</em></li>
                 <li>Rizzardini, Giuliano et al, ‘Evaluation of the Immune Benefits of Two Probiotic Strains Bifidobacterium Animalis Ssp. Lactis, BB-12® and Lactobacillus Paracasei Ssp. Paracasei, L. Casei 431® in an Influenza Vaccination Model: A Randomised, Double-Blind, Placebo-Controlled Study‘ (2012) <em>107 The Brit J Nutr 876</em></li>
                 <li>King S, et al. ‘Effectiveness of Probiotics on the Duration of Illness in Healthy Children and Adults Who Develop Common Acute Respiratory Infectious Conditions: A Systematic Review and Meta-Analysis‘  <em>Brit J of nutr.</em> 2014;112:41</li>
                 <li>Ozen M, Kocabas G, Dinleyici E. ‘Probiotics for the Prevention of Pediatric Upper Respiratory Tract Infections: A Systematic Review‘ <em>Exp Opin Biol Ther</em> (2015) 15</li>

                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
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
                    Mix one (1) level teaspoon (5g) into 100-200 mL of water and drink immediately, two (2) times per day or as directed by your healthcare practitioner.  
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
                                    <strong>Each scoop (5 g dose) contains:</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Lactoferrin
                                </p>
                            </td>
                            <td>
                                <p>
                                    200 mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Colostrum
                                </p>
                            </td>
                            <td>
                                <p>
                                    340 mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin-left:2em">
                                    Equiv. IgG
                                </p>
                            </td>
                            <td>
                                <p>
                                    100mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Arabinogalactactan
                                </p>
                            </td>
                            <td>
                                <p>
                                    2.25g
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Lactobacillus paracasei
                                </p>
                            </td>
                            <td>
                                <p>
                                    5 billion
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Bifidobacterium lactis
                                </p>
                            </td>
                            <td>
                                <p>
                                       5 billion
                                </p>
                            </td>
                        </tr>
                       
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Maltodextrin</p>
                                <p>silica</p>
                                <p>Stevia</p>
                                <p>Natural Vanilla Flavour</p>
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
                    Contains No Artificial Colours, Flavours or Sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
            'price_retail' => 45.75,
            'price_wholesale' => 30.50,
            'image_path' => '/img/products/immune-5/Immune-5-vanilla.png',
            'thumb_image_path' => '/img/products/immune-5/Immune-5-vanilla_thumb.png',
            'in_stock' => true,
            'slug' => 'immune-5-vanilla'
        ]);


        Product::create([

            'xero_item_id' => 24,
            'product_name_index' => "Immune-5 Raspberry",
            'product_name' => 'Immune-5&trade; Raspbery',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">Immune-5&trade; Raspberry</small></h4>
                <p>
                    <strong></strong>
                </p>
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with 
                    two specific probiotic species shown to assist with immune function and assist with upper respiratory tract infections. 
                </p>
                ',
            'patent' =>
                '
                <p>
                    <strong></strong>
                </p>
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
            'general_summary' =>
                '
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with two specific 
                    probiotic species shown to assist with immune function and assist with upper respiratory tract infections. ResistAid&trade; is a 
                    prebiotic soluble fibre with immune modulating properties while Lactoferrin is a naturally occurring protein found in the body 
                    with broad spectrum anti-microbial and anti-viral activity. Colostrum provides important innate immune supporting proteins 
                    including the antibody IgG that both activates and modulate the body defence processes.

                </p>
                ',
            'practitioner_summary' =>
                '
                
                <p>
                    <strong>Lactoferrin:</strong>
                </p>

                
                <p>
                    Lactoferrin is an abundant protein found in breast milk, and is secreted in tears, saliva, intestinal mucus, genital secretions 
                    and in found in granules of neutrophils. Lactoferrin is a glycoprotein belonging to the transferrin family of iron-binding 
                    proteins. As a multifunctional protein it demonstrates potent anti-microbial, anti-viral, anti-fungal, anti-inflammatory and 
                    immunomodulatory activity providing an effective defense mechanism for the mammalian body. 1 The bactericidal effect of lactoferrin 
                    is in part due to its ability to bind to and withhold iron that is essential for pathogenic bacterial growth, resulting in 
                    bacteriostatic effects. 2 Furthermore, lactoferrin disrupts the integrity of pathogenic bacterial cell walls by binding to 
                    lipopolysaccharides causing cell wall degradation. 1 Clinical evidence from a recent Cochrane review demonstrated the therapeutic 
                    activity of lactoferrin for the prevention of sepsis and NEC in preterm infants. 3

                </p>

                <p>
                    <strong>Colostrum:</strong> Often described as the first food of life, colostrum is a sweet sticky mammary secretion produced 
                    by mammals generally during the 24-48-hour perinatal period to provide essential immune-building nutrients to the offspring. 
                    Containing vital antibodies, vitamins and proteins, colostrum particularly of bovine origin has been used in the treatment and 
                    prevention of infectious diseases. 4 The diverse immune-enhancing factors of colostrum prove to have significant beneficial 
                    therapeutic applications, particularly due to its rich supply of immunoglobulin Ig (IgG). 2    Clinical trials have shown 
                    therapeutic benefit from the use of bovine colostrum in patients suffering chronic infection and pain; as well as being an 
                    effective prophylactic for gram negative sepsis, influenza and severe diarrhea. 4,5 It has also been shown to prevent gastric 
                    damage in patients using nonsteroidal anti-inflammatory medications; and not only proves to be a substance with superior 
                    immunological activity but is also an optimum dietary supplement. 5,6 There is some evidence which implies that a colostrum 
                    supplement is beneficial to those who are immunocompromised suffering from a severe diarrheal illness. 6

                </p>
                

                <p>
                    <strong>Arabinogalactan:</strong>
                </p>

                <p>
                    Arabinogalactans are highly branched, water-soluble polysaccharides with a high molecular weight that are found in a wide 
                    variety of plants. Arabinogalactans specifically from Larch are an excellent dietary fiber supplement that are capable of 
                    increasing beneficial gastrointestinal (GI) commensal bacteria as well as short-chain fatty acid production. 7,8 As an 
                    effective defense against the common cold infection, Larch arabinogalactan has also been shown in animal studies to 
                    stimulate natural killer cell cytotoxicity in vitro, demonstrating an increase in white blood cell counts i.e. neutrophils 
                    and eosinophil’s. 9,10 ResistAid™ is a proprietary arabinogalactan extracted from Larch (Larix laricina) supplied by Lonza 
                    Ltd, Switzerland. A number of human clinical studies have demonstrated ResistAid\'s™ immunomodulatory activity in which a 
                    daily dose of 4.5 g significantly increased IgG antibody response of healthy volunteers to the pneumonia vaccine when 
                    compared to placebo. 10 In a more recent study Udani 2013 demonstrated that ResistAid™ at a dose of 1.5 g daily significantly 
                    increased the IgG antibody response to tetanus vaccine compared to placebo. 11 ResistAid™ has clinical evidence of being 
                    well tolerated in healthy individuals with no demonstrable side-effects. 10,12

                </p>
                
                <strong>Lactobacillus paracasei and Bifidobacterium lactis</strong>

                <p>
                    The GI commensal microbiota significantly influences the health of the host, supported by extensive scientific evidence. 
                    Whilst there are numerous publications exemplifying the range of positive benefits of probiotic bacteria, the mechanisms 
                    by which they benefit health and the specific species and strains are of a growing interest within the scientific community. 
                    13 A recent Cochrane review examined clinical studies assessing live microorganism intervention in cold and flu treatment, 
                    and found that probiotic bacteria including various Lactobacillus and Bifidobacterium species were effective in reducing the 
                    symptoms of acute upper respiratory tract infections. 14 Two clinical trials demonstrated that daily consumption of a
                    probiotic product containing Lactobacillus paracasei increased the antibody response (IgG) to influenza vaccination in elderly 
                    participants. 15, 16 Additional research has shown that consumption of probiotics containing both Lactobacillus paracasei and 
                    Bifidobacterium lactis increases the antigen-specific immune response (IgG and sIgA) of patients receiving the influenza vaccine, 
                    further supporting their immune modulatory effects. 16  The results from two systematic reviews demonstrated that the use of 
                    probiotics in children is effective in diminishing the incidence and the severity of the symptoms of upper respiratory tract 
                    infections. 17,18

                </p>
                
               
                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    Who will benefit:
                </p>

                <p>
                    <ul>
                        <li>Suitable for the whole family (2 years and under require professional advice prior to using)</li>
                        <li>Those requiring immune support</li>
                        <li>Those undergoing stressful events</li>
                        <li>Those seeking to ease the severity and duration of the common cold</li>
                        <li>Those seeking symptomatic relief from upper respiratory tract infections</li>
                        <li>Those receiving influenza immunisation</li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    Not to be used in children under two years of age except on health professional advice. Colostrum is 
                    derived from cow’s milk and contains lactose and cow’s milk proteins. Vitamin supplements should not replace a balanced diet. 
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">

                 <li>Ochoa T,  Cleary T. Effect of lactoferrin on enteric pathogens. <em>Biochimie, 2009;91:30</li>
                 <li>Vitetta L, Coulson S, et al. ‘The Clinical Efficacy of a Bovine lactoferrin/whey Protein Ig-Rich Fraction (Lf/IgF) for the Common Cold: A Double Blind Randomized Study‘  <em>Complementary therapies in medicine</em> 2013;21:164</li>
                 <li>Pammi M, Abrams S. ‘Oral lactoferrin for the prevention of sepsis and necrotizing enterocolitis in preterm infants.’ <em>The Cochrane Database of Systematic Reviews</em>, 2015:CD007137.</li>
                 <li>Waaga-Gasser A. ‘Bovine Colostrum--Therapeutic Synergism Involving Immunomodulation, Nutritional Supplementation and Antibacterial Action?‘ <em>International journal of clinical pharmacology and therapeutics</em> 2007;45:191</li>
                 <li>Struff W, Sprotte G. ‘Bovine Colostrum as a Biologic in Clinical Medicine: A Review. Part I: Biotechnological Standards, Pharmacodynamic and Pharmacokinetic Characteristics and Principles of Treatment‘ <em>International journal of clinical pharmacology and therapeutics</em> 2007:45;193</li>
                 <li>Struff, W. G. and G. Sprotte, ‘Bovine Colostrum as a Biologic in Clinical Medicine: A Review--Part II: Clinical Studies‘ (2008) <em>46 International journal of clinical pharmacology and therapeutics 211</em></li>
                 <li>Kelly, G. S., ‘Larch Arabinogalactan: Clinical Relevance of a Novel Immune-Enhancing Polysaccharide‘ (1999) <em>4 Altern Med Rev 96</em></li>
                 <li>‘Larch Arabinogalactan‘ (2000) <em>5 Altern Med Rev 463</em></li>
                 <li>Riede L, Grube B, & Gruenwald J. ‘Larch Arabinogalactan Effects on Reducing Incidence of Upper Respiratory Infections‘ (2013) <em>29 Cur Med Res Opinion 251</em></li>
                 <li> Udani, Jay K. et al, ‘Proprietary Arabinogalactan Extract Increases Antibody Response to the Pneumonia Vaccine: A Randomized, Double-Blind, Placebo-Controlled, Pilot Study in Healthy Volunteers‘ (2010) <em>9 Nutri Journ 32</em></li>
                 <li>Udani, Jay K., ‘Immunomodulatory Effects of ResistAid™: A Randomized, Double-Blind, Placebo-Controlled, Multidose Study‘ (2013) <em>32 J Ameri Coll of Nutr 331</em></li>
                 <li>Grube B, &Riede L. ‘Tolerability of a Proprietary Larch Arabinogalactan Extract: A Randomized, Double-Blind, Placebo-Controlled Clinical Trial in Healthy Subjects’.  <em>Food and Nutrition Sciences</em>, 2012, 3, 1533-1538 </li>
                 <li>Ashraf R, Shah N. Immune System Stimulation by Probiotic Microorganisms.</li>
                 <li>Critical Reviews in Food Science and Nutrition  2014:1;54</li>
                 <li>Hao, Qiukui et al, ‘Probiotics for Preventing Acute Upper Respiratory Tract Infections‘ (2011) <em>Cochr Database Syst Rev CD006895</em></li>
                 <li>Boge, Thierry et al, ‘A Probiotic Fermented Dairy Drink Improves Antibody Response to Influenza Vaccination in the Elderly in Two Randomised Controlled Trials‘ (2009) <em>27 Vaccine 5677</em></li>
                 <li>Rizzardini, Giuliano et al, ‘Evaluation of the Immune Benefits of Two Probiotic Strains Bifidobacterium Animalis Ssp. Lactis, BB-12® and Lactobacillus Paracasei Ssp. Paracasei, L. Casei 431® in an Influenza Vaccination Model: A Randomised, Double-Blind, Placebo-Controlled Study‘ (2012) <em>107 The Brit J Nutr 876</em></li>
                 <li>King S, et al. ‘Effectiveness of Probiotics on the Duration of Illness in Healthy Children and Adults Who Develop Common Acute Respiratory Infectious Conditions: A Systematic Review and Meta-Analysis‘  <em>Brit J of nutr.</em> 2014;112:41</li>
                 <li>Ozen M, Kocabas G, Dinleyici E. ‘Probiotics for the Prevention of Pediatric Upper Respiratory Tract Infections: A Systematic Review‘ <em>Exp Opin Biol Ther</em> (2015) 15</li>

                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
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
                    Mix one (1) level teaspoon (5g) into 100-200 mL of water and drink immediately, two (2) times per day or as directed by your healthcare practitioner.  
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
                                    <strong>Each scoop (5 g dose) contains:</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Lactoferrin
                                </p>
                            </td>
                            <td>
                                <p>
                                    200 mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Colostrum
                                </p>
                            </td>
                            <td>
                                <p>
                                    340 mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin-left:2em">
                                    Equiv. IgG
                                </p>
                            </td>
                            <td>
                                <p>
                                    100mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Arabinogalactactan
                                </p>
                            </td>
                            <td>
                                <p>
                                    2.25g
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Lactobacillus paracasei
                                </p>
                            </td>
                            <td>
                                <p>
                                    5 billion
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Bifidobacterium lactis
                                </p>
                            </td>
                            <td>
                                <p>
                                       5 billion
                                </p>
                            </td>
                        </tr>
                       
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Maltodextrin</p>
                                <p>silica</p>
                                <p>Stevia</p>
                                <p>Natural Raspberry Flavour</p>
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
                    Contains No Artificial Colours, Flavours or Sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
            'price_retail' => 45.75,
            'price_wholesale' => 30.50,
            'image_path' => '/img/products/immune-5/Immune-5-raspberry.png',
            'thumb_image_path' => '/img/products/immune-5/Immune-5-raspberry_thumb.png',
            'in_stock' => true,
            'slug' => 'immune-5-raspberry'
        ]);
        

        Model::reguard();
    }
}