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
            'product_name_index' => 'NanoCelle D3 + K2',
            'austl_number' => '273824',
            'product_name' => "NanoCelle&trade; D3 + K2",
            'short_description' =>
                '
                    <h4 class="medlab_product_content_title">NanoCelle&trade; D3 + K2</h4>
                    <p>
                        <strong>PATENT PENDING</strong>
                    </p>
                    <p>
                        NanoCelle&trade; D3 + K2 is indicated to sustain mineral homeostasis
                        facilitating optimal immune function, cardiovascular health and bone metabolism, and to assist
                        in the management of medically diagnosed vitamin D deficiency.
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
                        NanoCelle&trade; D3 + K2 is developed from patent-protected nanocellization
                        technology that produces Vitamin D3 and Vitamin K2 submicron nanoparticles that are easily absorbed
                        across the oral mucosal epithelia.<sup>1</sup> NanoCelle&trade; D3 + K2 is
                        indicated to sustain mineral homeostasis facilitating optimal immune function, cardiovascular health
                        and bone metabolism, and to assist in the management of medically diagnosed vitamin D deficiency.
                        Vitamin D3 is essential for cellular and immunological function and is also essential for skeletal
                        muscle maintenance and regeneration given its primary physiological role is the absorption and binding
                        of calcium within the body.<sup>2,3</sup> Vitamin K2 belongs to a group of fat-soluble vitamins that is
                        essential in the body for the synthesis of specific proteins required to initiate the process of blood
                        coagulation in the response to an injury and to optimize the integrity of blood vessels and bones.<sup>4</sup>
                    </p>
                ',
            'practitioner_summary' =>
                '
                    <p>
                        <strong>STANDARD INDICATIONS</strong>
                    </p>
                    <p>
                        Prevention/treatment of vitamin and/or mineral and/or nutritional deficiencie (NOTE: This indication
                        is not for the treatment of iron deficiency conditions). Vitamin D helps calcium absorption and a
                        diet deficient in calcium can lead to osteoporosis in later life.
                    </p>
                    <br>
                    <p>
                        <strong>SPECIFIC INDICATIONS</strong>
                    </p>

                    <p>
                        <ul>
                            <li>
                                Vitamin D is required for proper cellular and immunological function Vitamin D3
                                supplementation may increase serum vitamin D levels and bone mineral density (BMD) in
                                vitamin D deficient individuals.
                            </li>
                            <li>
                                Vitamin D3 binds to and activates the vitamin D receptor (VDR) that is responsible for
                                the transcription and transrepression of genes.
                            </li>
                            <li>
                                The VDR is a nuclear receptor found in immune cells and other cell types and is a control
                                system for the innate immune system.
                            </li>
                            <li>
                                Vitamin D3 binds to the VDR in immune cells and activates the transcription of cathelicidin
                                and beta-defensin that are antimicrobial peptides.
                            </li>
                            <li>
                                Vitamin D3 may help to promote healthy respiratory function.
                            </li>
                            <li>
                                Vitamin D3 is involved in the attenuation of inflammatory responses and conditions within the body.
                            </li>
                            <li>
                                The micellization process produces nano-sized particles that enhances nutrient absorption
                                and bioavailability.
                            </li>
                            <li>
                                Vitamin D3 is associated with musculoskeletal health (bone and muscle fibres).
                            </li>
                            <li>
                                Vitamin K2 (menaquinone-7) supplementation may improve serum vitamin K status and may
                                help to reduce bone loss in postmenopausal women Vitamin K is required for the post translational
                                carboxylation of glutamate into gamma-carboxyglutamate (Gla) residues in Gla-proteins that are
                                required for blood coagulation and bone mineralization.
                            </li>
                            <li>
                                Vitamin K2 serves as an obligatory cofactor for an essential carboxylase enzyme
                                that activates seven protein components of the blood-coagulation cascade.
                            </li>
                            <li>
                                Vitamin K is required for the carboxylation of two proteins essential for normal
                                bone metabolism, osteocalcin and matrix Gla protein.
                            </li>
                            <li>
                                Long term use of menaquinone-7 may improve arterial stiffness in health postmenopausal women,
                                especially in women having high arterial stiffness.
                            </li>
                            <li>
                                A number of blood coagulation factors including coagulation factors II (prothrombin), VII,
                                IX and X are well known examples of Gla-containing proteins (vitamin K dependent) which
                                are synthesised in the liver.
                            </li>
                            <li>
                                Osteocalcin, a bone specific protein synthesised by osteoblasts, and matrix Gla protein
                                synthesised in blood vessel and bone are Gla-containing proteins (vitamin K dependent)
                                synthesised at extra-hepatic sites.
                            </li>
                            <li>
                                Menaquinone-7 is a long chain menaquinone found in fermented foods and at particularly
                                high levels in natto.
                            </li>
                            <li>
                                The effects of long chain menaquinone-7 in normal blood coagulation is greater and
                                longer lasting than vitamin K1 found in leafy green vegetables and MK-4 that
                                is found in animal products.
                            </li>
                        </ul>
                    </p>
                    <br>
                    <p>
                        <strong>SPECIFIC CONDITIONS</strong>
                    </p>
                    <p>
                        No specific conditions included on record.
                    </p>
                    <br>
                    <p>
                        <strong>WARNINGS</strong>
                    </p>
                    <p>
                        <ul>
                            <li>Contains potassium sorbate.</li>
                            <li>Vitamin supplements should not replace a balanced diet.</li>
                        </ul>
                    </p>
                    <p>
                        NanoCelle&trade; D3 + K2 is not suitable for individuals with:
                    </p>
                    <p>
                        <ul>
                            <li>Hypercalcaemia</li>
                            <li>Hypervitaminosis D</li>
                            <li>Malabsorption syndrome</li>
                            <li>Kidney disease</li>
                            <li>Liver disease</li>
                            <li>Clotting disorder</li>
                            <li>Blood disease</li>
                        </ul>
                    </p>

                ',
            'interactions' =>
                '
                    <p>
                        Some medicines may interfere with NanoCelleTM D3 + K2. These include:
                    </p>
                    <p>
                        <ul>
                            <li>Calcitriol medications</li>
                            <li>Corticosteroid medication such as prednisone</li>
                            <li>Weight loss drug Orlistat</li>
                            <li>Cholesterol lowering medications such as Cholestyramine and Thiazide</li>
                            <li>Diuretic medications</li>
                            <li>Blood thinner medications such as Warfarin, Coumadin and Heparin</li>
                            <li>Anticoagulant / Thrombolytic medications</li>
                            <li>Antihypertensive agents</li>
                            <li>Seizure medications such as Phenobarbital and Dilantin</li>
                            <li>Immunosuppressant therapies</li>
                        </ul>
                    </p>
                    <p>
                        These medicines may be affected by NanoCelle&trade; D3 + K2 or may affect
                        how well it works. You may need to take different amounts of your medicine, or you may need to
                        take different medicines. Your doctor or practitioner will advise you.
                    </p>
                ',

            'dosage_information' =>
                '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>
                    <p>
                        Spray 300 µl dose (2 sprays) on the inside cheek of the mouth once per day before a meal,
                        or as directed by your healthcare practitioner.
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
                                        <strong>Each 0.3 mL Dose (2 sprays) Contains:</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Vitamin D3 (as cholecalciferol)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>25 µg (1000 IU)</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Vitamin K2 (as menaquinone-7)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>25 µg (1000 IU)</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Citric acid</p>
                                    <p>Potassium sorbate</p>
                                    <p>Peppermint oil</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                ',
            'cmi' =>
                '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3K2/English.pdf"target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                ',
            'free_from' =>
                '
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                ',
            'side_effects' =>
                "
                    <p>
                        NanoCelle&trade; D3 + K2 has low risk side effects when taken as directed. If you experience any
                        of the following symptoms after taking a dose of NanoCelle&trade; D3 + K2, tell your healthcare professional.
                    </p>
                    <p>
                        These symptoms may be from an allergic, or adverse reaction and may inbclude:
                    </p>
                    <p>
                        <ul>
                            <li>Difficulty breathing</li>
                            <li>Cough</li>
                            <li>Swelling of the face and throat</li>
                            <li>Skin rash</li>
                            <li>Itching</li>
                            <li>Abnormal colour to skin, blotching or bruising</li>
                            <li>Bleeding</li>
                            <li>Sudden onset of unexplained pain</li>
                            <li>Nausea</li>
                            <li>Diarrhoea / Vomiting</li>
                        </ul>
                    </p>
                    <p>
                        If experienced, please seek prompt medical attention.
                    </p>
                    <p>
                        <strong>Please refer to the CMI for this product for side effects.</strong>
                    </p>
                ",
            'price_retail' => 24.77,
            'price_wholesale' => 16.5,
            'image_path' => '/img/products/nanocelle_d3k2/nanocelle_d3k2.png',
            'thumb_image_path' => '/img/products/nanocelle_d3k2/nanocelle_d3k2_thumb.png',
            'in_stock' => true,
            'slug' => 'nanocelle-d3-k2'



            /*
        [
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
            */
        ]);
        

        Model::reguard();
    }
}