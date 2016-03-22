<?php

namespace App\Console\Commands;

use App\Buy_One_Get_One_Free;
use App\Price_Discount;
use App\Promotion;
use DB;
use Carbon\Carbon;
use App\Product;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class ModifyProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modify:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete old deals to replace with new';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Model::unguard();


        $modify_array = [

            [
                'product_name_index' => "ORSBiotic",
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

            ],

            [
                'product_name_index' => "NanoCelle B12",
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

            ],

            [
                'product_name_index' => 'NanoCelle D3',
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

            ],

            [
                'product_name_index' => "NanoCelle Activated B12",
                'practitioner_summary' =>
                    '
                <p>
                    Vitamin B12 is one of the most complex vitamins in regards to its absorption and transport within the
                    body and depends critically on a very tightly regulated transport system. Vitamin B12 is continually
                    partnered with binding proteins throughout the digestive tract and blood stream and then requires a binder
                    specific cellular receptor for intracellular transport. Intrinsic factor (IF), which is released from the
                    stomach and is required to mediate transport of B12 into enterocytes in the ileum, is saturable, the
                    rate at which varies inversely with the amount of B12 ingested. The IF-mediated transport rarely allows
                    more than 1 to 2 &micro;g of B12 to be absorbed at any one time, therefore high doses quickly exceed the absorptive
                    capacity of the body, with unabsorbed B12 being excreted in the faeces. Nonspecific and linear non-saturable
                    diffusion does occur, in which a receptor is not required, however this fraction is extremely small and
                    estimated to be approximately 1%.<sup>1</sup>
                </p>

                <p>
                    <strong>NanoCelle&trade; Delivery of Vitamin B12</strong>
                </p>

                <p>
                    A novel way to bypass the limited absorptive capacity of vitamin B12 in the gastrointestinal tract (GIT) is to
                    utilize the rich blood supply of the buccal mucosa. The buccal mucosa is non-keratinized and is therefore more permeable
                    to water-soluble particles than keratinized epithelium such as the hard palate. The buccal mucosa is 40-50 cell layers
                    thick, and compared to intestinal cells, may also have less tight junctions but a higher level of lipid intercellular matrix.<sup>1</sup>
                    Once the NanoCelle&trade; molecule diffuses through the mucus layer and aqueous boundary layer on the surface of the epithelium,
                    it may then transverse across the epithelium via passive diffusion (See Figure 1).<sup>2</sup> There are no B12 receptors on
                    oral epithelium cells i.e. such as the cubam receptor on ileum enterocytes that facilitate the entry of IF-bound cobalamin
                    into the enterocytes for transport into the blood stream.
                </p>

                <p>
                    <img class="img-responsive" alt="Oro-Buccal Nutrient Delievery" src="/img/products/nanocelle_activated_b12/act_b12_figure1.png"><br>
                    <strong>Figure 1. Formation of drug/nutrient-loaded micelle.<sup>2</sup></strong>
                </p>

                <p>
                    <strong>Function of Methylcobalamin</strong>
                </p>

                <p>
                    Vitamin B12 (Cobalamin &ndash; Cbl) exists in two active forms, methylcobalamin (MeCbl) and adenosylcobalamin (AdoCbl)
                    that participate in specific physiological processes in the cell. MeCbl is a cofactor for the cytosolic
                    methionine synthase enzyme and AdoCbl is the cofactor for the mitochondrial methylmalonyl-CoA mutase.
                    In the cytosol, MeCbl is involved in transferring its methyl group to homocysteine to form methionine,
                    which is part of the S-adenosyl methionine cycle. Elevated serum homocysteine levels are associated with
                    increased risk of heart attack, stroke, blood clots and cognitive impairment.<sup>4, 5</sup> AdoCbl is
                    a key component of the tricarboxylic acid (TCA) pathway of carbohydrate metabolism, catalyzing the isomerization
                    of methylmalonyl-CoA to succinyl-CoA resulting in ATP generation in cells (see Figure 2).<sup>6, 7</sup>
                    Methionine is required for the synthesis of myelin, therefore MeCbl is required for healthy nerve function.
                    Further, while AdoCbl and CNCbl can increase DNA-methylation by methyltransferase, MeCbl is the most efficient
                    compound.<sup>6</sup>
                </p>

                <p>
                    <img class="img-responsive" alt="Methylcobalamin Cylcles" src="/img/products/nanocelle_activated_b12/act_b12_figure2.jpg"><br>
                    <strong>Figure 2. Methylcobalamin acts in the cytoplasm where it is involved in the Methionine cycle and
                    Adenosylcobalamin in the mitochondria where it is involved in the Krebs cycle.<sup>7</sup></strong>

                </p>

                <p>
                    Both hydroxy- (HOCbl) and cyanocobalamin (CNCbl) are able to convert to both the methyl- and adenosylcobalamin forms.
                    It has been shown that this conversion can occur just after supplementation in the blood stream. There are some rare
                    genetic conditions in which cyanocobalamin cannot be converted to the active forms.<sup>6, 7</sup> Both hydroxy-
                    (HOCbl) and cyanocobalamin (CNCbl) are able to convert to both the methyl- and adenosylcobalamin forms.
                    It has been shown that this conversion can occur just after supplementation in the blood stream.
                    There are some rare genetic conditions in which cyanocobalamin cannot be converted to the active forms.<sup>6, 7</sup>
                    All forms of Cbl appear to be absorbed and efficient in treating vitamin B12 deficiency.
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    Who will benefit:
                </p>

                <p>
                    <ul>
                        <li>Those needing to target their homocysteine levels.</li>
                        <li>Those with dietary vitamin B12 deficiency.</li>
                        <li>Vegans, vegetarians and the elderly.</li>
                        <li>Those taking certain medications such as proton pump inhibitors and metformin.</li>
                        <li>Those with achlorhydria, gastritis and those who have undergone gastrectomy.</li>
                        <li>Those who cannot convert cobalamin to methylcobalamin.</li>
                    </ul>
                </p>
                ',
            ]

        ];

        $this->modify_products($modify_array);

        Model::reguard();
    }

    private function modify_products($modify_array)
    {
        foreach($modify_array as $modify_product) {

            if ($modify_product['product_name_index'] == 'All') {
                $product_all = Product::all();
                foreach ($product_all as $product) {
                    $this->update_product($product, $modify_product);
                    $this->comment('test');
                }
            }

            else {
                $product = Product::where('product_name_index', 'like', '%' . $modify_product['product_name_index'] . '%')->firstOrFail();
                $this->update_product($product, $modify_product);
            }

        }
    }

    private function update_product($product, $modify_array)
    {
        if(!empty($modify_array['product_name'])) {
            $product->product_name = $modify_array['product_name'];
        }
        if(!empty($modify_array['short_description'])) {
            $product->short_description = $modify_array['short_description'];
        }
        if(!empty($modify_array['patent'])) {
            $product->patent = $modify_array['patent'];
        }
        if(!empty($modify_array['general_summary'])) {
            $product->general_summary = $modify_array['general_summary'];
        }
        if(!empty($modify_array['practitioner_summary'])) {
            $product->practitioner_summary = $modify_array['practitioner_summary'];
        }
        if(!empty($modify_array['references'])) {
            $product->references = $modify_array['references'];
        }
        if(!empty($modify_array['side_effects'])) {
            $product->side_effects = $modify_array['side_effects'];
        }
        if(!empty($modify_array['interactions'])) {
            $product->interactions = $modify_array['interactions'];
        }
        if(!empty($modify_array['dosage_information'])) {
            $product->dosage_information = $modify_array['dosage_information'];
        }
        if(!empty($modify_array['cmi'])) {
            $product->cmi = $modify_array['cmi'];
        }
        if(!empty($modify_array['free_from'])) {
            $product->free_from = $modify_array['free_from'];
        }
        if(!empty($modify_array['in_stock'])) {
            $product->in_stock = $modify_array['in_stock'];
        }
        if(!empty($modify_array['patent'])) {
            $product->patent = $modify_array['patent'];
        }
        if(!empty($modify_array['price_retail'])) {
            $product->price_retail = $modify_array['price_retail'];
        }
        if(!empty($modify_array['patent'])) {
            $product->patent = $modify_array['patent'];
        }
        if(!empty($modify_array['price_wholesale'])) {
            $product->price_wholesale = $modify_array['price_wholesale'];
        }
        if(!empty($modify_array['image_path'])) {
            $product->image_path = $modify_array['image_path'];
        }
        if(!empty($modify_array['thumb_image_path'])) {
            $product->thumb_image_path = $modify_array['thumb_image_path'];
        }
        if(!empty($modify_array['slug'])) {
            $product->slug = $modify_array['slug'];
        }
        $product->save();
    }
}
