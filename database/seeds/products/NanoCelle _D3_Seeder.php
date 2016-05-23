<?php

use Illuminate\Database\Seeder;
use App\Product;

class NanoCelle_D3_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 10,
            'product_name_index' => 'NanoCelle D3',
            'product_name' => 'NanoCelle&trade; D3',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">NanoCelle&trade; D3</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    NanoCelle&trade; D3 is developed from patent-protected nano-technology creating Vitamin D3
                    nanoparticles that are easily absorbed across the oral mucosal epithelium.
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
                    NanoCelle&trade; D3 is developed from patent-protected nano-technology creating Vitamin D3 nanoparticles
                    that are easily absorbed across the oral mucosal linning.  NanoCelle&trade; D3 is indicated to assist in
                    the management of medically diagnosed vitamin D deficiency. Vitamin D3 aids in dietary calcium and
                    phosphorus absorption, important for maintaining healthy bone mineral density. Vitamin D3 binds to
                    the vitamin D receptor (VDR), which is located on all body cells. Activation of the VDR has been
                    shown to regulate hundreds of genes. Because immune cells have the VDR, vitamin D may also assist
                    with immune system function. Vitamin D3 is a fat-soluble vitamin that is naturally synthesised in
                    the body from sun exposure (ultraviolet light) however the amount of vitamin D production depends
                    on geographic location, season, time of day and weather conditions. In addition, clothing habits,
                    lifestyle, and workplace (e.g., indoor versus outdoor), sunscreen use, and sun avoidance practices
                    have an impact on vitamin D synthesis. Vitamin D3 production is also determined by a persons skin
                    type, as the darker pigmented the skin is the less vitamin D3 is produced.
                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    In addition to its well-known classical effects in calcium/phosphate homeostasis, vitamin D is a
                    potent regulator of many other vital physiological functions in the body beyond that of bone
                    health such as immune regulation.<sup>1</sup> Vitamin D3 (cholecalciferol) is naturally synthesised in the
                    skin and may contribute to 80-90% of the vitamin D supply within the body but this is ultimately
                    dependent on factors such as sun exposure, geographic latitude, season, clothing habits,
                    sunscreen use and skin complexion. Dietary sources of vitamin D3 are limited but include fatty
                    fish, fish liver oil, beef liver, egg yolk and milk.<sup>1,2</sup> Cholecalciferol is biologically inert and
                    must undergo two hydroxylation reactions, first within the liver to produce 25-hydroxyvitamin
                    D [25(OH)D] also known as calcidiol, and then in the kidney to produce the active hormonal
                    metabolite 1,25-dihydroxyvitamin D [1,25(OH)2D] also know as calcitriol.<sup>3,4</sup> Further,
                    25(OH)D can be converted to 1,25(OH)2D in at least 10 extra-renal tissues including
                    immune cells (macrophages, dendritic cells and B-lymphocytes) and also vascular smooth muscle
                    cells and colonocytes.<sup>1</sup>
                </p>

                <p>
                    As a lipid-soluble compound, orally ingested cholecalciferol (D3) is naturally emulsified into
                    lipid droplets and combined with bile salts, phospholipids and cholesterol to form micelles that
                    enable absorption across in the intestinal mucosa. A fraction of D3 enters enterocytes via passive
                    diffusion when delivered at pharmacological doses, but the main intracellular transport of D3
                    into the enterocyte is via binding the micelle to apical membrane transporters. Intestinal
                    absorption of vitamin D3 varies between 55-99% (mean 78%) in healthy individuals<sup>2</sup> but is
                    decreased in individuals with conditions of malabsorption such as cystic fibrosis, inflammatory
                    bowel disease, coeliac disease, biliary obstruction, pancreatic dysfunction and intestinal
                    resection.<sup>5,6</sup> Furthermore, disruption in the conversion of vitamin D metabolites to the active
                    hormone will also impact vitamin D status within the body such as in chronic kidney disease.<sup>7</sup>
                </p>

                <p>
                    The micellization process of drugs and nutrients prior to ingestion produces nano-sized particles
                    consisting of an inner hydrophobic core (drug/nutrient combined with lipid carrier or is itself
                    lipid-soluble) with a hydrophilic outer shell (various surfactants) creating a water-soluble
                    solution that interacts with the mucosal cells. Figure 1 demonstrates an example of micellizing
                    the fat-soluble compound, beta-carotene.
                </p>

                <p>
                    <img class="img-responsive" alt="Figure 1" src="/img/products/d3/D3figure1.png"><br>
                    <strong>
                        Figure 1. (a) Micellized beta-carotene (a fat-soluble carotene) is completely soluble in water;
                        (b) non-micellized beta-carotene is not water soluble and sits on the water surface.
                    </strong>
                </p>

                <p>
                    NanoCelle&trade; D3 consists of cholecalciferol forming the hydrophobic core coated with
                    hydrophilic compounds to obtain a particle size approximately 50 - 200 nm (0.05 – 0.2 micron)
                    that is soluble in aqueous solution (Figure 2). The uptake of the micelle particles across the
                    mucosal membrane and the extent of drug/nutrient absorption increases with decreasing particle
                    size.<sup>8,9</sup> Drug delivery via the oral mucosa by-passes the gastrointestinal tract
                    and any conditions that may influence or inhibit its absorption across the intestinal mucosa.
                </p>

                <p>
                    <img class="img-responsive" alt="Figure 2" src="/img/products/d3/D3figure2.png"><br>
                    <strong>Figure 2. Formation of drug/nutrient-loaded micelle.<sup>7</sup></strong>
                </p>

                <p>
                    <strong>NanoCelle&trade; D3: Hydrophobic polymer/drug molecule = cholecalciferol</strong>
                </p>

                <p>
                    The secosteroid hormone 1,25(OH)2D is the biologically active form of vitamin D3 and initiates
                    physiological responses of more than 36 cell types that possess the vitamin D receptor (VDR)
                    on their cell membrane or in the cytosol, by regulating gene transcription and activating signal
                    transduction pathways similar to other steroid hormones.Cholecalciferol itself does not bind to
                    the VDR. It is estimated that the VDR can regulate the expression of 3% of the human
                    genome.<sup>10</sup> It is well established that 1,25(OH)2D plays a vital role in adaptive
                    and innate immune regulation from inducing the differentiation of monocytes into macrophages;
                    increasing macrophage activity and cytotoxic activity; inducing the synthesis of the antibacterial
                    proteins cathelicidin and beta-defensin; inducing IFN-gamma-mediated antimicrobial activity and
                    regulating Th1, Th2, Treg and Th17 responses (Figure 3).<sup>11</sup>
                </p>

                <p>
                    <img class="img-responsive" alt="Figure 3" src="/img/products/d3/D3figure3.png"><br>
                    <strong>Figure 3. Vitamin D and innate and adaptive immune function.<sup>11</sup></strong>
                </p>

                <p>
                    <strong>CYP27b1: 25-hydroxyvitamin D-1 alpha hydroxylase (converts 25(OH)D to 1,25(OH)2D); VDR: vitamin D receptor</strong>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    NanoCelle&trade; D3 is a nano-particle formulation that may:
                </p>

                <p>
                    <ul>
                        <li>Assist in the management of medically confirmed vitamin D deficiency.<sup>1, 2</sup></li>
                        <li>Enhance bioavailability through the nano-technology process.</li>
                        <li>Aid in dietary calcium absorption and metabolism.<sup>3</sup></li>
                        <li>Support proper cellular and immunological function.<sup>4</sup></li>
                        <li>Increase serum vitamin D levels and bone mass density in vitamin D deficient individuals.<sup>5</sup></li>
                        <li>Activate the transcription and transrepression of genes.<sup>6,7</sup></li>
                        <li>Activate the synthesis of the antimicrobial peptides cathelicidin and beta-defensin synthesis from immune cells.<sup>7</sup></li>
                        <li>Support proper innate and adaptive immune system function.<sup>7,8</sup></li>
                        <li>Help to promote a healthy respiratory function.<sup>9</sup></li>
                        <li>Reduce inflammatory responses and conditions within the body.<sup>4</sup></li>
                        <li>Assist in healthy musculoskeletal health.<sup>5</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>Vitamin D3 is essential proper cellular and immune (innate and adaptive) regulation via activation of the VDR.</li>
                        <li>Supplementation may be required by individuals with malabsorption conditions.</li>
                        <li>Vitamin D3 is essential for maintenance of bone mineralisation through the regulation of calcium and phosphorus homeostasis.</li>
                    </ul>
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Zitterman A, Gummert JF. Nonclassical Vitamin D Actions. <em>Nutrients</em> 2010;2:408-425.</li>
                    <li>Reboul E. Intestinal absorption of vitamin D: from the meal to the enterocyte. <em>Food Funct</em> 2014 [Epub ahead of print].</li>
                    <li>Vitamin D. National Institutes of Health Office of Dietary Supplements. Accessed 29 December 2015.</li>
                    <li>Institute of Medicine, Food and Nutrition Board. Dietary Reference Intakes for Calcium and Vitamin D. <em>Washington, DC: National Academy Press</em> 2010.</li>
                    <li>Yang L, Weaver V, Smith JP et al. Therapeutic effect of vitamin D supplementation in a pilot study of Crohn’s patients. <em>Clinical Translational Gastroenterology</em> 2013;4,e33.</li>
                    <li>Lo CW, Paris PW, Clemens TL et al. Vitamin D absorption in healthy subjects and in patients with intestinal malabsorption syndromes. <em>Am J Clin Nutr</em> 1985;42:644-649.</li>
                    <li>Zehnder D, Quinkler M, Eardley KS, et al. Reduction of the vitamin D hormonal system in kidney disease is associated with increased renal inflammation. <em>Kidney Int</em> 2008;74:1343-1353.</li>
                    <li>Xu W, Ling P, Zhang T. Polymeric micelles, a promising drug delivery system to enhance bioavailability of poorly water-soluble drugs. <em>J Drug Deliv</em> 2013;2013:340315</li>
                    <li>Francis MF, Cristea M, Winnik FM. Polymeric micelles for oral drug delivery: why and how. <em>Pure Appl Chem</em> 2004;76:1321-1335.</li>
                    <li>Norman AW. From vitamin D to hormone D: fundamentals of the vitamin D endocrine system essential for good health. <em>Am J Clin Nutr</em> 2008;88:491S</li>
                    <li>www.ortho.ucla.edu/body.cfm?id=208 (accessed 30 Dec 2014).</li>
                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    NanoCelle&trade; D3 has low risk side effects when taken as directed.
                </p>

                <p>
                    If you experience any of the following symptoms after taking a dose of NanoCelle&trade; D3,
                    tell your healthcare professional.
                </p>

                <p>
                    These symptoms may be from an allergic reaction:
                </p>

                <p>
                    - Difficulty breathing
                </p>

                <p>
                    - Swelling of the face and throat
                </p>

                <p>
                    - Skin rash
                </p>

                <p>
                    - Itching
                </p>

                <p>
                    <strong>Please refer to the CMI for this product for side effects.</strong>
                </p>

                <p>
                    WARNING: Take NanoCelle&trade; D3 exactly as your healthcare practitioner has prescribed.
                </p>

                <p>
                    <ul>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                        <li>Always read the label and use the product as directed.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                        <li>Always read the label and use the product as directed.</li>
                    </ul>
                </p>
                ',
            'interactions' =>
                '
                <p>
                    Some medicines may interfere with NanoCelle&trade; D3. These include:
                </p>

                <p>
                    <ul>
                        <li>Calcitriol medications</li>
                        <li>Steroid medication such as prednisone</li>
                        <li>Weight loss medication Orlistat</li>
                        <li>Cholesterol lowering medications such as Cholestyramine and Thiazide diuretics</li>
                        <li>Seizure medications such as Phenobarbital and Dilantin</li>
                    </ul>
                </p>

                <p>
                    These medicines may be affected by NanoCelle&trade; D3 or may affect how well it works. You may need
                    to take different amounts of your medicine, or you may need to take different medicines. Your
                    doctor will advise you.
                </p>
                ',
            'dosage_information' =>
                '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Deliver two (2) sprays into the mouth once per day before meals, or as directed by your
                    healthcare practitioner.
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
                                    <strong>PER 0.3 ml (2 SPRAYS)</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Vitamin D3 (as cholecalciferol)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1000 IU</p>
                            </td>
                        </tr>
                        <tr>
                        <td width="273" valign="top">
                            <p>Peppermint flavour</p>
                        </td>
                            <td width="136" valign="top">

                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/English.pdf">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Arabic.pdf">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Russian.pdf">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Spanish.pdf">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/French.pdf">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Chinese.pdf">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Traditional_Chinese.pdf">中文翻譯</a>
                </p>
                ',
            'free_from' =>
                '

                ',
            'price_retail' => 25.89,
            'price_wholesale' => 17.26,
            'image_path' => '/img/products/nanocelle_d3/d3_1.jpg',
            'thumb_image_path' => '/img/products/nanocelle_d3/thumb_d3_1.jpg',
            'in_stock' => true
        ]);
    }
}
