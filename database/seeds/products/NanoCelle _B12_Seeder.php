<?php

use Illuminate\Database\Seeder;
use App\Product;

class NanoCelle_B12_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 9,
            'product_name_index' => 'NanoCelle B12',
            'product_name' => 'NanoCelle&trade; B12',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">NanoCelle&trade; B12</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    NanoCelle&trade; B12 is developed from patent-protected nano-technology creating Vitamin B12
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
                    NanoCelle&trade; B12 is developed from patent-protected nano-technology creating Vitamin B12
                    nanoparticles that are easily absorbed across the oral mucosal epithelium. NanoCelle&trade; B12 is
                    indicated to assist in the management of dietary vitamin B12 deficiency that is particularly seen
                    in vegetarians, vegans, the elderly and people with altered intestinal digestive and absorptive
                    capabilities. It is the metabolic derivatives of Vitamin B12 that act as important cofactors of
                    certain enzymes required for numerous physiological pathways.
                </p>
                ',
            'practitioner_summary' =>
                '
                <p>
                    Oral cyanocobalamin supplementation exists in the free unbound state and is absorbed across the
                    gastrointestinal mucosa by passive diffusion, but only to the extent of approximately 1% over a
                    dosage range of 100 μg to 5 mg. Dietary B12 however, is protein bound and requires pepsin and
                    stomach acid for its release and subsequent binding to intrinsic factor for absorption across the
                    enterocytes.<sup>1</sup> Nanotechnology offers a form of oral drug delivery that enhances the absorptive
                    process and allows the release of the chosen drug/nutrient in a controlled manner. The
                    micellization of drugs and nutrients produces nano-sized particles consisting of an inner
                    hydrophobic core (drug/nutrient combined with lipid carrier or is itself fat-soluble) with a
                    hydrophilic outer shell (various surfactants) that interacts with the mucosal cells (Figure 1).
                    NanoCelle&trade; B12 consists of cyanocobalamin combined with d-alpha tocopherol (vitamin E) to form
                    the hydrophobic core coated with hydrophilic compounds obtaining a particle size approximately
                    50 - 200 nm (0.05 – 0.2 micron) that is soluble in aqueous solution. The uptake of the micelle
                    particles across the mucosal membrane and the extent of drug/nutrient absorption increases with
                    decreasing particle size.<sup>2,3</sup>
                </p>

                <p>
                    <img class="img-responsive" alt="Figure 1" src="/img/products/b12/B12figure1.png"><br>
                    <strong>Figure 1. Formation of drug/nutrient-loaded micelle.<sup>2</sup></strong>
                </p>

                <p>
                    <strong>NanoCelle&trade; B12: Hydrophobic polymer = d-alpha tocopherol; drug molecule = cyanocobalamin</strong>
                </p>

                <p>
                    Vitamin B12 (Cobalamin) is an organometallic compound that contains cobalt in its chemical
                    structure. Cyanocobalamin and hydroxycobalamin are relatively inert forms of B12 and must be
                    metabolised to the biologically active forms as methylcobalamin and adenosylcobalamin within the
                    cell cytosol and mitochondria respectively, which function as coenzymes for numerous biological
                    pathways.<sup>4,5,6</sup> It is the R-group attached to the cobalt element that chemically differentiates the
                    various forms of B12.<sup>4</sup>
                </p>

                <p>
                    Cobalamin is involved in one-carbon transfer pathways in the form of methylcobalamin, which
                    transfers methyl groups to homocysteine, converting it to methionine and is catalyzed by the
                    methionine synthase enzyme (Figure 2). In addition to lowering serum homocysteine levels, the
                    methionine produced is essential for protein synthesis and the synthesis of myelin that forms the
                    insulating myelin sheath surrounding the axons of neurons. Myelin, and therefore B12, is essential
                    for nerve transmission and proper functioning of the nervous system.<sup>4</sup> A deficiency of B12 may lead
                    to the inhibition of methionine synthase activity causing methyltetrahhydrofolate (CH3-THF) to
                    accumulate resulting in state of functional folate deficiency.<sup>6</sup>
                </p>

                <p>
                    <img class="img-responsive" alt="Figure 2" src="/img/products/b12/B12figure2.png"><br>
                    <strong>Figure 2. Cobalamin as a methyl carrier.<sup>6</sup></strong>
                </p>

                <p>
                    <strong>SAM – S-adenyslmethionine; CH3-THF – methyltetrahydrofolate; THF- tetrahydrofolate</strong>
                </p>

                <p>
                    Theactivation of folate by B12 is essential for DNA synthesis which is impacted by B12 deficiency.<sup>4</sup>
                    Adenosylcobalamin is essential for the synthesis of succinyl-CoA within the mitochondria from amino
                    acids and fatty acids, which then enters the tricarboxylic acid (TCA) cycle for energy (ATP)
                    production in cells.<sup>6</sup>
                </p>

                <p>
                    B12 is synthesized solely by bacteria or microorganisms, with gastrointestinal commensals such as
                    Lactobacillus, Streptococcus and Bacteroides species known to produce and release B12 within the
                    gut lumen, however not in sufficient amounts to maintain adequate serum levels.<sup>4</sup> Dietary B12
                    deficiency is prevalent in both developing and Western countries, particularly the elderly,
                    vegetarians, vegans and people with malabsorption issues causing functional deficiency (i.e.
                    low stomach acid, inadequate synthesis of intrinsic factor, coeliac disease and inflammatory
                    bowel disease).
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    NanoCelle&trade; B12 is a nano-particle formulation that may:
                </p>

                <p>
                    <ul>
                        <li>Assist in the management of dietary vitamin B12 deficiency.<sup>1, 2</sup></li>
                        <li>Enhance bioavailability through the nano-technology process.</li>
                        <li>Aid in the synthesis of DNA.<sup>3</sup></li>
                        <li>Support the methylation cycle and balance homocysteine levels.<sup>4, 6</sup></li>
                        <li>Assist in the conversion of homocysteine to methionine.<sup>4, 5</sup></li>
                        <li>Support healthy nerve function through the synthesis of myelin.<sup>3</sup></li>
                        <li>Promote the mitochondrial energy production cycle.<sup>4, 6</sup></li>
                        <li>Support the production of healthy red blo</li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>Healthy myelin and nerve function.<sup>3</sup></li>
                        <li>An essential cofactor required for the methylation of homocysteine to methionine.<sup>4,5</sup></li>
                        <li>
                            Vitamin B12 is a cofactor involved the methylation cycle that involves protein and DNA
                            methylation and synthesis of nucleotides (purines and pyrimidine’s).<sup>7</sup>
                        </li>
                    </ul>
                </p>
                ',
            'references' =>
                '
                <ol class="medlab_product_reference_list">
                    <li>Castelli MC, Wong DF, Friedman K, Riley MG. Pharmacokinetics of oral cyanocobalamin formulated with sodium N-[8-(2-hydroxybenzoyl) amino] capprylate (SNAC): An open-label, randomized, single-dose, parallel-group study in health male subjects. <em>Clinical Therapeutics</em> 2011;33:934 – 945.</li>
                    <li>Xu W, Ling P, Zhang T. Polymeric micelles, a promising drug delivery system to enhance bioavailability of poorly water-soluble drugs. <em>J Drug Deliv</em> 2013;2013:340315.</li>
                    <li>Francis MF, Cristea M, Winnik FM. Polymeric micelles for oral drug delivery: why and how. <em>Pure Appl Chem</em> 2004;76:1321-1335.</li>
                    <li>Pawlak R, James PS, Raj S, Cullum-Dugan D, Lucus D. Understanding Vitamin B12. <em>American Journal of Lifestyle Medicine</em> 2013;7:60-65.</li>
                    <li>Takahashi-Iniguez T, Garcia-Hernandez E, Arrenguin-Espinosa R, Flores ME. Review: Role of vitamin B12 on methylmalllonyl-CoA mutase activity. <em>Biomedicine & Biotechnology</em> 2012;13:423-437.</li>
                    <li>Depeint F, Bruce WR, Shangari N, Mehta R, O’Brien PJ. Mitochondrial function and toxicity: Role of B vitamins on the one-carbon transfer pathways. <em>Cehmico-Biological Interactions</em> 2006;163:113-132.</li>
                </ol>
                ',
            'side_effects' =>
                '
                <p>
                    Vitamin B12 has a low risk of side-effects when taken as directed.
                </p>
                ',
            'interactions' =>
                '
                <p>
                    Some medications interfere with vitamin B12 such as proton pump inhibitors, metformin and chloramphenicol if taken for extended duration.
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
                                    <strong>INGREDIENTS</strong>
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
                                <p>Vitamin B12 (as cyanocobalamin)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1000 mcg</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Peppermint flavour</p>
                            </td>
                            <td width="136" valign="top">
                                <p></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Citric acid</p>
                                <p>PEG-40 hydrogenated castor oil</p>
                                <p>Glycerol</p>
                                <p>Peppermint oil</p>
                                <p>Potassium sorbate</p>
                                <p>Stevia</p>
                                <p>Water</p>
                                <p>D-alpha tocopherol</p>
                                <p>Soy oil</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Russian.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Chinese.pdf" target="_blank">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleB12/Traditional_Chinese.pdf" target="_blank">中文翻譯</a>
                </p>
                ',
            'free_from' =>
                '
                    <p class="medlab_product_content_sub_title">
                        Gluten and Dairy free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                ',
            'price_retail' => 22.36,
            'price_wholesale' => 14.91,
            'image_path' => '/img/products/nanocelle_b12/b12_bottle_rough_cut_1.jpg',
            'thumb_image_path' => '/img/products/nanocelle_b12/thumb_b12_bottle_rough_cut_1.jpg',
            'in_stock' => false
        ]);
    }
}
