<?php

use Illuminate\Database\Seeder;
use App\Product;

class Biotic_Jnr_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 1,
            'product_name_index' => 'Biotic Jnr.',
            'product_name' => 'Biotic Jnr.&trade;',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">Biotic Jnr.&trade;</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    Biotic Jnr.&trade; is a multi-species probiotic preparation to promote gastrointestinal and immune
                    maturation.
                </p>
                ',
            'patent' =>
                '
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
            'general_summary' =>
                '
                <p>
                    Biotic Jnr.&trade; is a multi-species probiotic preparation to promote gastrointestinal and immune
                    maturation. Biotic Jnr.&trade; contains Lactoferrin that is naturally found in colostrum and human milk
                    and is a component of the innate immune response providing broad-spectrum anti-microbial and anti-viral
                    activity. The selected probiotic species have demonstrated safety and efficacy to help maintain healthy
                    digestive function, growth, development and immunological tolerance that may assist in the management
                    of allergies including eczema in infants, both pre-term and full-term.
                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    The microbiome evolves within a healthy host from birth to death, constantly re-adjusting to maintain
                    a homeostatic balance with the host&#39;s immune system. Continued evolution of the human microbiome after
                    birth is governed by host factors such as both the adaptive and innate immune system and external
                    factors such as diet, medication, environmental exposure&#39;s and illness. It was previously believed that
                    the in utero environment was sterile and that an infant is exposed to the bacterial assault during the
                    birthing process.<sup>1</sup> This notion has now been debunked. Colonization of the mucosa in the digestive,
                    respiratory, urogenital tracts and the skin likely occurs before the time of birth when a newborn is
                    exposed to the mother&#39;s microbiota.  Recent studies suggest the presence of a microbiome within the
                    placenta and foetal meconium with exposure to antenatal sources of commensal bacterial and the seeding
                    of the infant varying by length of gestation. This would help explain the variations in bacterial
                    colonization between full-term and pre-term infants.<sup>1</sup>
                </p>
                <p>
                    The mode of delivery and whether an infant is breast or bottle fed plays a major role on early
                    colonization patterns of the neonatal gut microbiota, with breast milk containing its own microbiome
                    but also mediators that can direct inflammatory responses to pathogens in the gut (see table 1). The
                    infant gastrointestinal microbial profile is relatively simple in contrast to that of adults and is
                    unstable until the age of approximately 3 years when it establishes its adult form. During this time
                    many factors have considerable effect on the composition and determination of the microbial
                    community.<sup>1,2</sup> Even after the microbiome is well established in healthy infants, dysbiosis, or shifts
                    in microbial composition or diversity, can occur in the setting of dietary changes, antibiotic exposure
                    or infection. Dysbiotic conditions can favour invasion and growth of pathogenic species and can disrupt
                    the finely tuned regulatory circuits of the immune system that maintain a system of pro- and
                    anti-inflammatory checks and balances.The manipulation of the infant microbiota with the use of
                    pre- and probiotics can have a significant impact with long lasting results.<sup>1</sup>
                </p>

                <p>
                    <strong>Table 1. Major differences in neonatal gut colonization by type of feeding.<sup>1</sup></strong>
                </p>

                <table cellspacing="0" cellpadding="0" border="1">
                    <tbody>
                        <tr>
                            <td width="213" valign="top">
                                <p>
                                    <strong>Breast Fed</strong>
                                </p>
                            </td>
                            <td width="213" valign="top">
                                <p>
                                    <strong>Formula Fed</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="213" valign="top">
                                <p>
                                    <em>Bifidobacteria</em>
                                </p>
                            </td>
                            <td width="213" valign="top">
                                <p>
                                    <em>Bifidobacteria species</em>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="213" valign="top">
                                <p>
                                    <em>Enterobacteria species*</em>
                                </p>
                            </td>
                            <td width="213" valign="top">
                                <p>
                                    <em>Escherichia coli</em>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="213" valign="top">
                                <p>

                                </p>
                            </td>
                            <td width="213" valign="top">
                                <p>
                                    <em>Clostridium difficile</em>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="213" valign="top">
                                <p>

                                </p>
                            </td>
                            <td width="213" valign="top">
                                <p>
                                    <em>Bacteroides species</em>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="213" valign="top">
                                <p>

                                </p>
                            </td>
                            <td width="213" valign="top">
                                <p>
                                    <em>Prevotella species</em>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="213" valign="top">
                                <p>

                                </p>
                            </td>
                            <td width="213" valign="top">
                                <p>
                                    <em>Lactobacillus species</em>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p>
                    <strong>
                        *Breast-fed infants have more colonization with Bifidobacteria species than their formula-fed counterparts
                    </strong>
                </p>

                <p>
                    <em>Probiotic Species for Infants</em>
                </p>

                <p>
                    Clinical evidence from a recent Cochrane Review conclude that the use of multi-species probiotics from
                    the <em>Lactobacillus, Bifidobacterium and Streptococcus</em> genera have unequivocally demonstrated clinical
                    evidence for preventing severe necrotising enterocolitis (NEC) and all cause mortality in preterm
                    infants, to which the authors concluded that the evidence strongly supports a change in practice.<sup>3</sup>
                    <em>Saccharomyces boulardii</em> has been extensively researched for the treatment of diarrhoea in both children
                    and adults and has shown a clinically significant benefit in reducing duration of acute infectious
                    diarrhoea in children by up to 24 hours and mean hospital stay by 36 hours. The percentage of
                    diarrhoea-free children in the <em>Saccharomyces</em> group was significantly larger after 48 and 72 hours when
                    compared to the control group.<sup>4</sup> Furthermore, <em>S. boulardii</em> stimulates host innate immune responses to
                    pathogens via secretory IgA release, stimulates small intestinal release of digestive enzymes, produces
                    anti-inflammatory molecules and secretes polyamines that regulate host gene expression and protein
                    synthesis.<sup>5</sup>
                </p>

                <p>
                    Breast milk oligosaccharides selectively nourish <em>Bifidobacterium</em> microbiota with species such as
                    <em>Bifidobacterium infantis</em> being isolated from breast-fed infants.  <em>B. infantis</em> colonizes the infant
                    gut mucosal lining assisting with pathogen elimination, improving epithelial tight junction homeostasis
                    decreasing  gut permeability and inducing host anti-inflammatory cytokine production. <em>Bifidobacteria
                    infantis</em> is a natural commensal isolated from breast-fed infants.<sup>6</sup> <em>Bifidobacterium longum</em> is a common
                    commensal in breast milk.
                </p>

                <p>
                    <em>Lactoferrin</em>
                </p>

                <p>
                    Lactoferrin is the second most abundant protein in human breast milk, and is also secreted in tears,
                    saliva, intestinal mucus, genital secretions and in granules of neutrophils. It is a glycoprotein
                    belonging to the transferrin family of iron-binding proteins. As a multifunctional protein it
                    demonstrates potent anti-microbial, anti-viral, anti-inflammatory and immunomodulatory activity
                    providing a defence mechanism for the mammalian body.  The bactericidal effect of lactoferrin is in
                    part due to its ability to bind iron that is essential for pathogenic bacterial growth resulting in
                    bacteriostasis. Furthermore, lactoferrin disrupts the integrity of pathogenic bacterial cell walls by
                    binding to lipopolysaccharides causing cell wall degradation.<sup>7</sup> Clinical evidence from a recent Cochrane
                    Review demonstrated the therapeutic activity of lactoferrin for the prevention of sepsis and NEC in
                    preterm infants.<sup>8</sup>
                </p>

                <p>
                    <em>Prebiotics</em>
                </p>

                <p>
                    Prebiotics are selectively fermented compounds, naturally produced in the body or provided in the diet,
                    that promote specific beneficial effects to the composition and activity of the gastrointestinal
                    microbiota. Prebiotics in breast milk consist of milk glycans comprising free oligosaccharides,
                    glycoproteins and glycolipids that drive the health of the infant gut.<sup>9</sup> Dietary sources of prebiotics
                    include oligosaccharides, inulin and resistant starches. A recent systematic review and meta-analysis
                    concluded that available evidence suggests that the preventative use of prebiotics decreases the rate
                    of infections requiring antibiotic therapy in infants and children aged 0-24 months with one study
                    indicating that prebiotics may also be effective in decreasing the rate of overall infections.<sup>10</sup>
                    Furthermore, a recent Cochrane Review found that there is some evidence that a prebiotic supplement
                    added to infant feeds may prevent eczema, however further research is needed.<sup>11</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>Assist in the management and provide relief of symptoms of eczema. <sup>11</sup></li>
                        <li>Support healthy digestive function. <sup>12</sup></li>
                        <li>Assist in the management of allergies. <sup>2,11</sup></li>
                        <li>Aid in the maintenance and improvement of general wellbeing. <sup>8,12,13</sup></li>
                        <li>Help to maintain immune function. <sup>2,3,11-13</sup></li>
                        <li>Relieve symptoms of diarrhoea. <sup>12</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Suitable for pregnant women.</li>
                        <li>Suitable for breast-fed and formula fed infants.</li>
                        <li>Suitable for toddlers and older children.</li>
                    </ul>
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Gritz EC, Bhandari V. The human neonatal gut microbiome: a brief review. <em>Frontiers Pediatr</em> 2015;3:1.</li>
                    <li>Jain N, Walker WA. Diet and host-microbial crosstalk in postnatal intestinal immune homeostasis. <em>Nat Rev Gastroenterol Hepatol</em> 2015;12:14.</li>
                    <li>Alfaleh K, Anabrees J. Probiotics for prevention of necrotizing enterocolitis in preterm infants. <em>Cochrane Database Syst Rev</em> 2014;4.</li>
                    <li>Dinleyici EC, et al. Saccharomyces boulardii CNCM I-745 reduces the duration of diarrhoea, length of emergency care and hospital stay in children with acute diarrhoea. <em>Benef Microbes</em> 2015 6;415.</li>
                    <li>Buts JP, De Keyser N. Effects of Saccharomyces boulardii on Intestinal Mucosa. <em>Dig Dis Sci</em> 2006;51:1485.</li>
                    <li>Chichlowski M, et al. Bifidobacteria isolated from infants and cultured on human milk oligosaccharides affect intestinal epithelial function. <em>J Pediatr Gastroenterol Nutr</em> 2012;55:321.</li>
                    <li>Ochoa TJ, Cleary TG. Effect of lactoferrin on enteric pathogens. <em>Biochimie</em> 2009;91:30.</li>
                    <li>Abrams PM, et al. Oral lactoferrin for the prevention of sepsis and necrotizing enterocolitis in preterm infants. <em>Cochrane Database Syst Rev</em> 2015;2.</li>
                    <li>Pacheco AR, et al. The impact of the milk glycobiome on the neonate gut microbiota. <em>Annu Rev Anim Biosci</em> 2015;3:419.</li>
                    <li>Lohner S, et al. Prebiotics in healthy infants and children for prevention of acute infectious diseases: a systematic review and meta-analysis. <em>Nutr Rev</em> 2014;72:523.</li>
                    <li>Osborn DA< Sinn JKH. Prebiotics in infants for prevention of allergy. <em>Cochrane Database Syst Rev</em> 2013;3.</li>
                    <li>Turroni F, et al. Diversity of Bifidobacteria within the infant gut microbiota. <em>PLoS ONE</em> 2012;7:e36957.</li>
                    <li>Walker WA, Lyengar SR. Breast milk, microbiota and intestinal immune homeostasis. <em>Pediatr Res</em> 2015;77:220.</li>
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
                    after the dose of Biotic Jnr.&trade; is lowered or stopped.
                </p>

                <p>
                    If symptoms persist parents should consult their healthcare practitioner. If diarrhoea persists for
                    more than 6 hours in infants under 6 months; 12 hours in children under 3 years; 24 hours in children
                    aged 3 - 6 years or 48 hours in children over 6 years and adults, seek medical advice.
                </p>

                <p>
                    Lactoferrin in Biotic Jnr.&trade; is derived from cow&#39;s milk and contains less than 0.1% Lactose.
                </p>

                <p>
                    Serious allergic reactions to these ingredients are rare however parents should contact their
                    healthcare professional or call an ambulance immediately if any of the following are experienced:
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
                    If the child experiences any allergic reaction or other side effects after consuming Biotic Jnr.&trade;
                    discontinue use and parents should consult with their healthcare practitioner or pharmacist.
                </p>

                <p>
                    Parents can also refer to the CMI for this product for symptoms and side effects.
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
                    Some medicines may interfere with Biotic Jnr.&trade;. These include:
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
                    Add 500mg of powder (1 scoop) to liquid or solid foods, one (1) to two (2) times per day or as directed
                    by your healthcare practitioner.
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
                                <p>
                                    <em>Bifidobacterium infantis </em>
                                    (Med 14)
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 million</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                <em>Bifidobacterium longum </em>
                                (Med 15)
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 million</p>
                            </td>
                        </tr>
                        <tr>
                        <td width="273" valign="top">
                            <p>
                                <em>Lactobacillus rhamnosus </em>
                                (Med 26)
                            </p>
                        </td>
                            <td width="136" valign="top">
                                <p>500 million</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <em>Streptococcus thermophilus </em>
                                    (Med 51)
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 million</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <em>Saccharomyces cerevisiae ssp. boulardii </em>
                                    (Med 41)
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 million</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <strong>Total</strong>
                                </p>
                            </td>
                            <td width="273" valign="top">
                                <p>
                                    <strong>2.5 billion CFU*</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Glycomax&trade; Lactoferrin</p>
                            </td>
                            <td width="136" valign="top">
                                <p>50 mg</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="medlab_product_content_sub_title">
                    *CFU: Colony Forming Units
                </p>
                <p class="medlab_product_content_sub_title">
                    Excipient Ingredients:
                </p>
                <p>
                    Inulin
                </p>

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
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Arabic.pdf">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Russian.pdf">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Spanish.pdf">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Japanese.pdf">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/French.pdf">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Chinese.pdf">中文翻译，中文翻譯</a>
                </p>
                ',
            'free_from' =>
                '
                <p class="medlab_product_content_sub_title">
                    Gluten and Casein Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Vegetarian Friendly
                </p>
                <p class="medlab_product_content_sub_title">
                    No artificial colours, flavours or sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate formula to maintain CFU stability
                </p>
                ',
            'price_retail' => 62.83,
            'price_wholesale' => 38.08,
            'image_path' => '/img/products/boitic_jnr/bioticjnr.png',
            'thumb_image_path' => '/img/products/boitic_jnr/thumb_bioticjnr.png'

        ]);
    }
}
