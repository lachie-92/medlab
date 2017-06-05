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
                'product_name_index' => '12Mg Optima Relax 10pk Sachets Lemon Lime',
                'austl_number' => '262421',
                'product_name' => '<sup>12</sup>Mg Optima&trade; Relax 10pk Sachets Lemon Lime',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title"><sup>12</sup>Mg Optima&trade; Relax 10pk Sachets Lemon Lime</h4>
                    <p>
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients to support the natural metabolic
                        pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to promote
                        relaxation during times of stress.
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
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients that may support the natural
                        metabolic pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to
                        promote relaxation during times of stress. Albion ® Magnesium bisglycinate is scientifically
                        designed to provide a highly bioavailable form of magnesium. Magnesium may act as a GABA
                        receptor agonist and also has a binding site on the glutamate receptors helping to regulate
                        the activity of this main excitatory neurotransmitter.<sup>1</sup> Glycine functions as an
                        inhibitory neurotransmitter in the nervous system while glutamine is a precursor to
                        GABA production.<sup>2</sup> Theanine is an amino acid from Green Tea that may promote
                        relaxation via binding to glutamate receptors.<sup>3</sup> Pyridoxal (vitamin B6) is a cofactor
                        for the enzyme Glutamate decarboxylase that synthesises GABA from glutamate.<sup>4</sup> Zinc also
                        has a binding site on the glutamate receptor and may act as a modulator for both excitatory and
                        inhibitory neurotransmission.<sup>5</sup>
                    </p>
                    ',
                'practitioner_summary' =>
                    '
                    <strong>STANDARD INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Help reduce effects of mild anxiety and nervous tension.</li>
                            <li>Non-vitamin active ingredients in this product help relieve nervous tension, stress and mild anxiety. For the symptomatic relief of stress disorders. </li>
                            <li>May assist in the management of stress disorders. </li>
                            <li>Beneficial during times of stress. </li>
                            <li>Non-vitamin active ingredients in this product may be beneficial during times of stress. </li>
                            <li>Non-vitamin active ingredients may improve stress adaptation.</li>
                            <li>Herbal blend which helps relieve stress of study or work.</li>
                            <li>May help reduce the frequency of migraines.</li>
                            <li>Helps relieve nervous tension, stress and mild anxiety. </li>
                            <li>For the symptomatic relief of anxiety. </li>
                            <li>May assist in the management of anxiety. </li>
                            <li>Relief of muscular aches and pains. </li>
                        </ul>
                    </p>

                    <strong>SPECIFIC INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Magnesium is primarily found within the cell where it acts as a counter ion for the energy-rich ATP and nuclear acids.</li>
                            <li>Magnesium is a cofactor in more than 300 enzymatic reactions. It critically stabilises enzymes, including many ATP-generating reactions. ATP is required universally for glucose utilisation, synthesis of fat, proteins, nucleic acid and coenzymes, muscles contraction, methyl group transfer and many other processes.</li>
                            <li>ATP metabolism, muscle contraction and relaxation, normal neurological function and release of neurotransmitters are all magnesium dependent.</li>
                            <li>Magnesium contributes to the regulation of vascular tone, heart rhythm, proper blood coagulation and bone formation.</li>
                            <li>Magnesium may modulate blood sugar regulation and cell proliferation in healthy individuals and is important for cell adhesion and transmembrane transport including transport of potassium and calcium ions.</li>
                            <li>Magnesium maintains the conformation of nucleic acids and is essential for the structural function of proteins and mitochondria.</li>
                            <li>Early signs of magnesium deficiency may include loss of appetite, nausea, vomiting, fatigue and weakness and as magnesium deficiency worsens it may be associated with numbness, tingling, muscle contractions and cramps.</li>
                            <li>Hypomagnesaemia is common in hospitalised patients.</li>
                            <li>Glycine is the major inhibitory neurotransmitter in caudal regions of the adult mammalian central nervous system with high densities of glycinergic synapses being found in spinal cord and brain stem.</li>
                            <li>Glycine has important neurotransmitter functions at inhibitory and excitatory synapses in the central nervous system.</li>
                            <li>L-theanine is one of the primary amino acids found in green tea and can pass over the blood-brain brain barrier increasing levels of concentration in the brain.</li>
                            <li>L-theanine can affect the secretion and function of neurotransmitter in the central nervous system.</li>
                            <li>L-theanine has an affinity to bind to the glutamate receptor subtypes. L-theanine blocks the binding of L-glutameric acid to the glutamate receptors in the brain, resulting in an anti-stress effect through inhibition of cortical neutron excitation.</li>
                            <li>L-theanine through competitive action against excitation of glutamate receptor subtypes, neurochemical studies suggest that L-theanine affects emotions by interacting with serotonin, dopamine and GABA neurotransmitter levels.</li>
                            <li>Dose-dependant administration of L-theanine may affect metabolism and/or the release of specific neurotransmitters in the brain.</li>
                            <li>L-theanine induces alpha wave brain activity, which relates to a perceived state of relaxation.</li>
                            <li>L-theanine may help to reduce anxiety levels and attenuate increased blood pressure in high-stress response adults.</li>
                            <li>L-theanine has a positive effect on mood and cognitive performance, resulting in increased energy, clarity of thought, efficiency, increased alertness and increased perceived work performance.</li>
                            <li>L-theanine may result in a reduction of heart rate and salivary immunoglobulin A responses during times of acute stress.</li>
                            <li>Zinc may function as an inhibitory neuromodulator of glutamate release in the brain.</li>
                            <li>Approximately 10% of total zinc in the brain exists in synaptic vesicles of glutamatergic neutrons.</li>
                            <li>Zinc is likely to modulate neurotransmission mediated via excitatory and inhibitory amino acid receptors at specific synapses.</li>
                            <li>Pyridoxal (B6) is involved in the regeneration of tetrahydrofolate into the active methyl- bearing form and in glutathione biosynthesis from homocysteine.</li>
                            <li>L-Glutamine is an amino acid precursor to the neurotransmitter GABA, the major inhibitory neurotransmitter in the central nervous system.</li>
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
                        <ul>
                            <li>Vitamin supplements should not replace a balanced diet.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
                        </ul>
                    </p>
                ',
                'references' =>
                    '
                    <ol class="medlab_product_reference_list">
                        <li>Held K, Antonijevic IA, Künzel H, et al. Oral Mg(2+) supplementation reverses age-related neuroendocrine and sleep EEG changes in humans. <em>Pharmacopsychiatry</em> 2002;35(4):135-143</li>
                        <li>Legendre P. The glycinergic inhibitory synapse. Cell. Mol. Life Sci 2001;58:760–793</li>
                        <li>Kimura K1, Ozeki M, Juneja LR, et al. L-Theanine reduces psychological and physiological stress responses. <em>Biol Psychol</em> 2007;74(1):39-45</li>
                        <li>Qu K, Martin DL, Lawrence C. Motifs and structural fold of the cofactor binding site of human glutamate decarboxylase. <em>Protein Sci</em> 1998;7:1092-1105.</li>
                        <li>Takeda A, Minami A, Seki Y, et al. Differential effects of zinc on glutamatergic and GABAergic neurotransmitter systems in the hippocampus. <em>J Neurosci Res</em> 2004; 15;75(2):225-9.</li>
                        <li>Jahnen-Dechent W, Ketteler M. Magnesium basics. <em>Clin Kidney J</em> 2012;5 (1);i3–i14.</li>
                        <li>Nygaard IH, Valbo A, Oethick SV, et al. Does oral magnesium substitution relieve pregnancy-inducede leg cramps? <em>Eur J Obstet Gynecol Reprod Biol</em> 2008;141:23-6.</li>
                        <li>Garrison SR, Birmingham CL, Koehler BE, et al. The effect of magnesium infusion on rest cramps: a randomized controlled trial. <em>J Gerontol A Biol Sci Med Sci</em> 2011;66:661-6.</li>
                        <li>Setaro L, Santos-Silva PR, Nakano EY, et al. Magnesium status and the physical performance of volleyball players: effects of magnesium supplementation. <em>J Sports Sci</em> 2014;32:438-45.</li>
                        <li>Veronese N, Berton L, Carraro S, et al. Effect of oral magnesium supplementation on physical performance in healthy elderly women involved in a weekly exercise program: a randomized controlled trial. <em>Am J Nutr</em> 2014;100:974-81.</li>
                        <li>Monaghan DT, Jane DE. Pharmacology of NMDA receptors. In: Van Dongen AM, editor. Biology of the NMDA receptor. Boca Raton (FL): CRC Press/Taylor &amp; Francis; 2009. Chapter 12.</li>
                        <li>Gecz, J. Glutamate receptors and learning and memory. Nat. Genet 2010;42:925</li>
                        <li>Berger AJ, Dieudonne S, Ascher P. Glycine uptake governs glycine site occupancy at NMDA receptors of excitatory synapses. <em>J. Neurophysiol</em> 1998;80: 3336–3340.</li>
                        <li>Hubner CA, Stein V, Hermans-Borgmeyer I, et al. Disruption of KCC2 reveals an essential role of K-Cl cotransport already in early synaptic inhibition. <em>Neuron</em> 2001;30:515–524.</li>
                        <li>Chen SW, Kong WX, Zhang YJ, et al. Possible anxiolytic effects of taurine in the mouse elevated plus-maze. <em>Life Sci</em> 2004;75(12):1503-1511.</li>
                        <li>Hertz L, Kvamme E, McGeer, EG, et al. Glutamine, Glutamate, and Gaba in the Central Nervous System. Alan R Liss Inc. New York; 1983.</li>
                        <li>Bowtell JL, Gelly K, Jackman ML, et al. Effect of oral glutamine on whole body carbohydrate storage during recovery from exhaustive exercise. <em>J.Appl Physiol</em> 1999:1770-1777.</li>
                        <li>Welbourne TC. Increased plasma bicarbonate and growth hormone after an oral glutamine load. <em>Am J Clin Nutr</em> 1995;61(5):1058-1061.</li>
                        <li>Hasler G, Van der Veen JW, Tumonis, T, et al. Reduced Prefrontal Glutamate/Glutamine and Aminobutyric Acid Levels in Major Depression Determined Using Proton Magnetic Resonance Spectroscopy. <em>Arch Gen Psych</em> 2007;64 (2):193-200.</li>
                        <li>Owens DF, Krieg Stein AR. Is there more to GABA than synaptic inhibition? Nat. Rev. Neurosci 2002;3:715</li>
                        <li>Kakuda T, Nozawa A, Sugimoto A, et al. Inhibition by Theanine of binding of [3H]AMPA, [3H]Kainate and [3H]MDL 105,519 to glutamate receptors. <em>Biosci Biotechnol Biochem</em> 2002;66:2683-86.</li>
                        <li>Kimura R, Murata T. Influence of alkylamides of glutamic acid and related compounds on the central nervous system I. Central depressant effect of theanine. <em>Chem Pharm Bull</em> 1971;19:1257–1261.</li>
                        <li>Nathan PJ, Lu K, Gray M, et al.; The neuropharmacology of L-theanine (N-ethyl-L-glutamine): a possible neuroprotective and cognitive enhancing agent. <em>J Herb Pharmacother</em> 2006;6(2):21-30.</li>
                        <li>Heese T, Jenkinson J, Love C, et al.& Anxiolytic effects of L-theanine - a component of green tea - when combined with midazolam, in the male Sprague-Dawley rat. <em>AANA J</em> 2009;77(6):445-449.</li>
                        <li>Ito K, Nagato Y, Aoi N, et al. Effects of L-theanine on the release of alpha brain waves in human volunteers. <em>Nippon Nogeikagaku Kaishi</em> 1998;72:153-157.</li>
                        <li>Lu K., Gray MA, Oliver C, et al. The acute effects of L-theanine in comparison with alprazolam on anticipatory anxiety in humans. <em>Hum Psychopharmacol</em> 2004;19(7):457-465.</li>
                        <li>Lardner AL. Neurobiological effects of the green tea constituent Theanine and its potential role in the treatment of psychiatric and neurodegenerative disorders. <em>Nutr Neurosci</em> 2014;17:145-55.</li>
                        <li>Smart TG, Hosie AM, Miller PS. Zn2+ ions: modulators of excitatory and inhibitory synaptic activity. <em>Neuroscientist</em> 2004;10(5):432-42.</li>
                        <li>Gröber U. Magnesium. In: Gröber U., editor. Micronutrients: Metabolic Tuning-Prevention-Therapy. 1st ed. MedPharm Scientific Publishers; Stuttgart, Germany: 2009:159–166.</li>
                        <li>Foca FJ. Motor and sensory neuropathy secondary to excessive pyridoxine ingestion. <em>Arch Phys Med Rehabil</em> 1985;66(9):634-6.</li>
                        <li>Dalton K, Dalton MJ. Characteristics of pyridoxine overdose neuropathy syndrome. <em>Acta Neurol Scand</em> 1987;76(1):8-11.</li>
                    </ol>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Magnesium supplementation is likely well tolerated for most people but may cause stomach upset,
                        diarrhoea, nausea and vomiting in some individuals.
                    </p>
                    <p>
                        Caution should be used in patients with kidney problems as poorly functioning kidneys do not
                        excrete magnesium from the body well leading to dangerous levels of serum magnesium levels.<sup>29</sup>
                    </p>
                    <p>
                        Vitamin B6 is toxic when ingested in mega doses i.e. greater than 200 mg per day for a prolonged
                        period of time and may cause peripheral neuropathy<sup>30,31</sup>
                    </p>
                    <p>
                         You can also refer to the CMI for this product for symptoms and side effects.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Concomitant use of magnesium and urinary excretion-reducing drugs, such as glucagons, calcitonin,
                        and potassium-sparing diuretics, may increase serum magnesium levels, as may doxercalciferol.
                        Concomitant oral intake of magnesium may influence the absorption of antibiotics (aminoglycosides,
                        quinolone, tetracycline), bisphosphonates, calcium channel blockers and muscle relaxants.<sup>27</sup>
                    </p>
                    ',
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Add 5g (1 scoop) to 100-200mL of cold water or juice, one (1) to two (2) times per day, or as directed by your
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
                                        <strong>EACH 5g DOSE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Magnesium as amino acid chelate TRAACS®</p>
                                    <p>(bisglycinate chelate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>150mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-glutamine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Green Tea Dry Leaf Extract.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. green tea dry leaf.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>40g</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. L-theanine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>NLT 100mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Pyridoxal 5-Phosphate (Vitamin B6)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>15.6mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>equiv. pyridoxine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Zinc (as citrate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>5mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Maltodextrin</p>
                                    <p>Malic acid</p>
                                    <p>Lemon lime flavour</p>
                                    <p>Citric acid</p>
                                    <p>Stevia</p>
                                    <p>Silica</p>
                                    <strong>Note: Botanical extracts present in this product may result in variations in colour and taste from batch to batch.</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'cmi' =>
                    '
                        <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/arabic" target="_blank">الترجمة العربية </a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/spanish" target="_blank">Traducción en español</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/russian" target="_blank">Перевод на русском языке</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/japanese" target="_blank">日本語翻訳</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/french" target="_blank">Traduction en français</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/chinese" target="_blank">中文翻译</a>
                        </p>
                        <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/italian" target="_blank">Traduzione italiana</a>
                        </p>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Dairy and Gluten Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    ',
                'price_retail' => 17.33,
                'price_wholesale' => 11.55,
                'image_path' => '/img/products/12mg_optima/mg_optima_relax_10pk_sachets_lemon_lime.jpg',
                'thumb_image_path' => '/img/products/12mg_optima/thumb_mg_optima_relax_10pk_sachets_lemon_lime.jpg',
                'slug' => '12mg-optima-relax-10pk-sachets-lemon-lime',
                'in_stock' => true,
            ],
            [
                'product_name_index' => '12Mg Optima Relax 150g Citrus Tea',
                'austl_number' => '280236',
                'product_name' => '<sup>12</sup>Mg Optima&trade; Relax 150g Citrus Tea',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title"><sup>12</sup>Mg Optima&trade; Relax 150g Citrus Tea</h4>
                    <p>
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients to support the natural metabolic
                        pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to promote
                        relaxation during times of stress.
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
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients that may support the natural
                        metabolic pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to
                        promote relaxation during times of stress. Albion ® Magnesium bisglycinate is scientifically
                        designed to provide a highly bioavailable form of magnesium. Magnesium may act as a GABA
                        receptor agonist and also has a binding site on the glutamate receptors helping to regulate
                        the activity of this main excitatory neurotransmitter.<sup>1</sup> Glycine functions as an
                        inhibitory neurotransmitter in the nervous system while glutamine is a precursor to
                        GABA production.<sup>2</sup> Theanine is an amino acid from Green Tea that may promote
                        relaxation via binding to glutamate receptors.<sup>3</sup> Pyridoxal (vitamin B6) is a cofactor
                        for the enzyme Glutamate decarboxylase that synthesises GABA from glutamate.<sup>4</sup> Zinc also
                        has a binding site on the glutamate receptor and may act as a modulator for both excitatory and
                        inhibitory neurotransmission.<sup>5</sup>
                    </p>
                    ',
                'practitioner_summary' =>
                    '
                    <strong>STANDARD INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>May assist in the management of anxiety.</li>
                            <li>Relief of muscular aches and pains.</li>
                            <li>Help reduce effects of mild anxiety and nervous tension.</li>
                            <li>Herbal blend which helps relieve stress of study or work.</li>
                            <li>Non-vitamin active ingredients in this product help relieve nervous tension, stress and mild anxiety. For the symptomatic relief of stress disorders.</li>
                            <li>May assist in the management of stress disorders.</li>
                            <li>Beneficial during times of stress.</li>
                            <li>Non-vitamin active ingredients in this product may be beneficial during times of stress.</li>
                            <li>Non-vitamin active ingredients may improve stress adaptation.</li>
                            <li>May help reduce the frequency of migraines.</li>
                            <li>Helps relieve nervous tension, stress and mild anxiety.</li>
                            <li>For the symptomatic relief of anxiety.</li>
                        </ul>
                    </p>

                    <strong>SPECIFIC INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Magnesium is primarily found within the cell where it acts as a counter ion for the energy-rich ATP and nuclear acids.</li>
                            <li>Magnesium is a cofactor in more than 300 enzymatic reactions. It critically stabilises enzymes, including many ATP-generating reactions. ATP is required universally for glucose utilisation, synthesis of fat, proteins, nucleic acid and coenzymes, muscles contraction, methyl group transfer and many other processes.</li>
                            <li>ATP metabolism, muscle contraction and relaxation, normal neurological function and release of neurotransmitters are all magnesium dependent.</li>
                            <li>Magnesium contributes to the regulation of vascular tone, heart rhythm, proper blood coagulation and bone formation.</li>
                            <li>Magnesium may modulate blood sugar regulation and cell proliferation in healthy individuals and is important for cell adhesion and transmembrane transport including transport of potassium and calcium ions.</li>
                            <li>Magnesium maintains the conformation of nucleic acids and is essential for the structural function of proteins and mitochondria.</li>
                            <li>Early signs of magnesium deficiency may include loss of appetite, nausea, vomiting, fatigue and weakness and as magnesium deficiency worsens it may be associated with numbness, tingling, muscle contractions and cramps.</li>
                            <li>Hypomagnesaemia is common in hospitalised patients.</li>
                            <li>Glycine is the major inhibitory neurotransmitter in caudal regions of the adult mammalian central nervous system with high densities of glycinergic synapses being found in spinal cord and brain stem.</li>
                            <li>Glycine has important neurotransmitter functions at inhibitory and excitatory synapses in the central nervous system.</li>
                            <li>L-theanine is one of the primary amino acids found in green tea and can pass over the blood-brain brain barrier increasing levels of concentration in the brain.</li>
                            <li>L-theanine can affect the secretion and function of neurotransmitter in the central nervous system.</li>
                            <li>L-theanine has an affinity to bind to the glutamate receptor subtypes. L-theanine blocks the binding of L-glutameric acid to the glutamate receptors in the brain, resulting in an anti-stress effect through inhibition of cortical neutron excitation.</li>
                            <li>L-theanine through competitive action against excitation of glutamate receptor subtypes, neurochemical studies suggest that L-theanine affects emotions by interacting with serotonin, dopamine and GABA neurotransmitter levels.</li>
                            <li>Dose-dependant administration of L-theanine may affect metabolism and/or the release of specific neurotransmitters in the brain.</li>
                            <li>L-theanine induces alpha wave brain activity, which relates to a perceived state of relaxation.</li>
                            <li>L-theanine may help to reduce anxiety levels and attenuate increased blood pressure in high-stress response adults.</li>
                            <li>L-theanine has a positive effect on mood and cognitive performance, resulting in increased energy, clarity of thought, efficiency, increased alertness and increased perceived work performance.</li>
                            <li>L-theanine may result in a reduction of heart rate and salivary immunoglobulin A responses during times of acute stress.</li>
                            <li>Zinc may function as an inhibitory neuromodulator of glutamate release in the brain.</li>
                            <li>Approximately 10% of total zinc in the brain exists in synaptic vesicles of glutamatergic neutrons.</li>
                            <li>Zinc is likely to modulate neurotransmission mediated via excitatory and inhibitory amino acid receptors at specific synapses.</li>
                            <li>Pyridoxal (B6) is involved in the regeneration of tetrahydrofolate into the active methyl- bearing form and in glutathione biosynthesis from homocysteine.</li>
                            <li>L-Glutamine is an amino acid precursor to the neurotransmitter GABA, the major inhibitory neurotransmitter in the central nervous system.</li>
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
                        <ul>
                            <li>Vitamin supplements should not replace a balanced diet.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
                        </ul>
                    </p>
                ',
                'references' =>
                    '
                    <ol class="medlab_product_reference_list">
                        <li>Held K, Antonijevic IA, Künzel H, et al. Oral Mg(2+) supplementation reverses age-related neuroendocrine and sleep EEG changes in humans. <em>Pharmacopsychiatry</em> 2002;35(4):135-143</li>
                        <li>Legendre P. The glycinergic inhibitory synapse. Cell. Mol. Life Sci 2001;58:760–793</li>
                        <li>Kimura K1, Ozeki M, Juneja LR, et al. L-Theanine reduces psychological and physiological stress responses. <em>Biol Psychol</em> 2007;74(1):39-45</li>
                        <li>Qu K, Martin DL, Lawrence C. Motifs and structural fold of the cofactor binding site of human glutamate decarboxylase. <em>Protein Sci</em> 1998;7:1092-1105.</li>
                        <li>Takeda A, Minami A, Seki Y, et al. Differential effects of zinc on glutamatergic and GABAergic neurotransmitter systems in the hippocampus. <em>J Neurosci Res</em> 2004; 15;75(2):225-9.</li>
                        <li>Jahnen-Dechent W, Ketteler M. Magnesium basics. <em>Clin Kidney J</em> 2012;5 (1);i3–i14.</li>
                        <li>Nygaard IH, Valbo A, Oethick SV, et al. Does oral magnesium substitution relieve pregnancy-inducede leg cramps? <em>Eur J Obstet Gynecol Reprod Biol</em> 2008;141:23-6.</li>
                        <li>Garrison SR, Birmingham CL, Koehler BE, et al. The effect of magnesium infusion on rest cramps: a randomized controlled trial. <em>J Gerontol A Biol Sci Med Sci</em> 2011;66:661-6.</li>
                        <li>Setaro L, Santos-Silva PR, Nakano EY, et al. Magnesium status and the physical performance of volleyball players: effects of magnesium supplementation. <em>J Sports Sci</em> 2014;32:438-45.</li>
                        <li>Veronese N, Berton L, Carraro S, et al. Effect of oral magnesium supplementation on physical performance in healthy elderly women involved in a weekly exercise program: a randomized controlled trial. <em>Am J Nutr</em> 2014;100:974-81.</li>
                        <li>Monaghan DT, Jane DE. Pharmacology of NMDA receptors. In: Van Dongen AM, editor. Biology of the NMDA receptor. Boca Raton (FL): CRC Press/Taylor &amp; Francis; 2009. Chapter 12.</li>
                        <li>Gecz, J. Glutamate receptors and learning and memory. Nat. Genet 2010;42:925</li>
                        <li>Berger AJ, Dieudonne S, Ascher P. Glycine uptake governs glycine site occupancy at NMDA receptors of excitatory synapses. <em>J. Neurophysiol</em> 1998;80: 3336–3340.</li>
                        <li>Hubner CA, Stein V, Hermans-Borgmeyer I, et al. Disruption of KCC2 reveals an essential role of K-Cl cotransport already in early synaptic inhibition. <em>Neuron</em> 2001;30:515–524.</li>
                        <li>Chen SW, Kong WX, Zhang YJ, et al. Possible anxiolytic effects of taurine in the mouse elevated plus-maze. <em>Life Sci</em> 2004;75(12):1503-1511.</li>
                        <li>Hertz L, Kvamme E, McGeer, EG, et al. Glutamine, Glutamate, and Gaba in the Central Nervous System. Alan R Liss Inc. New York; 1983.</li>
                        <li>Bowtell JL, Gelly K, Jackman ML, et al. Effect of oral glutamine on whole body carbohydrate storage during recovery from exhaustive exercise. <em>J.Appl Physiol</em> 1999:1770-1777.</li>
                        <li>Welbourne TC. Increased plasma bicarbonate and growth hormone after an oral glutamine load. <em>Am J Clin Nutr</em> 1995;61(5):1058-1061.</li>
                        <li>Hasler G, Van der Veen JW, Tumonis, T, et al. Reduced Prefrontal Glutamate/Glutamine and Aminobutyric Acid Levels in Major Depression Determined Using Proton Magnetic Resonance Spectroscopy. <em>Arch Gen Psych</em> 2007;64 (2):193-200.</li>
                        <li>Owens DF, Krieg Stein AR. Is there more to GABA than synaptic inhibition? Nat. Rev. Neurosci 2002;3:715</li>
                        <li>Kakuda T, Nozawa A, Sugimoto A, et al. Inhibition by Theanine of binding of [3H]AMPA, [3H]Kainate and [3H]MDL 105,519 to glutamate receptors. <em>Biosci Biotechnol Biochem</em> 2002;66:2683-86.</li>
                        <li>Kimura R, Murata T. Influence of alkylamides of glutamic acid and related compounds on the central nervous system I. Central depressant effect of theanine. <em>Chem Pharm Bull</em> 1971;19:1257–1261.</li>
                        <li>Nathan PJ, Lu K, Gray M, et al.; The neuropharmacology of L-theanine (N-ethyl-L-glutamine): a possible neuroprotective and cognitive enhancing agent. <em>J Herb Pharmacother</em> 2006;6(2):21-30.</li>
                        <li>Heese T, Jenkinson J, Love C, et al.& Anxiolytic effects of L-theanine - a component of green tea - when combined with midazolam, in the male Sprague-Dawley rat. <em>AANA J</em> 2009;77(6):445-449.</li>
                        <li>Ito K, Nagato Y, Aoi N, et al. Effects of L-theanine on the release of alpha brain waves in human volunteers. <em>Nippon Nogeikagaku Kaishi</em> 1998;72:153-157.</li>
                        <li>Lu K., Gray MA, Oliver C, et al. The acute effects of L-theanine in comparison with alprazolam on anticipatory anxiety in humans. <em>Hum Psychopharmacol</em> 2004;19(7):457-465.</li>
                        <li>Lardner AL. Neurobiological effects of the green tea constituent Theanine and its potential role in the treatment of psychiatric and neurodegenerative disorders. <em>Nutr Neurosci</em> 2014;17:145-55.</li>
                        <li>Smart TG, Hosie AM, Miller PS. Zn2+ ions: modulators of excitatory and inhibitory synaptic activity. <em>Neuroscientist</em> 2004;10(5):432-42.</li>
                        <li>Gröber U. Magnesium. In: Gröber U., editor. Micronutrients: Metabolic Tuning-Prevention-Therapy. 1st ed. MedPharm Scientific Publishers; Stuttgart, Germany: 2009:159–166.</li>
                        <li>Foca FJ. Motor and sensory neuropathy secondary to excessive pyridoxine ingestion. <em>Arch Phys Med Rehabil</em> 1985;66(9):634-6.</li>
                        <li>Dalton K, Dalton MJ. Characteristics of pyridoxine overdose neuropathy syndrome. <em>Acta Neurol Scand</em> 1987;76(1):8-11.</li>
                    </ol>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Magnesium supplementation is likely well tolerated for most people but may cause stomach upset,
                        diarrhoea, nausea and vomiting in some individuals.
                    </p>
                    <p>
                        Caution should be used in patients with kidney problems as poorly functioning kidneys do not
                        excrete magnesium from the body well leading to dangerous levels of serum magnesium levels.<sup>29</sup>
                    </p>
                    <p>
                        Vitamin B6 is toxic when ingested in mega doses i.e. greater than 200 mg per day for a prolonged
                        period of time and may cause peripheral neuropathy<sup>30,31</sup>
                    </p>
                    <p>
                         You can also refer to the CMI for this product for symptoms and side effects.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Concomitant use of magnesium and urinary excretion-reducing drugs, such as glucagons, calcitonin,
                        and potassium-sparing diuretics, may increase serum magnesium levels, as may doxercalciferol.
                        Concomitant oral intake of magnesium may influence the absorption of antibiotics (aminoglycosides,
                        quinolone, tetracycline), bisphosphonates, calcium channel blockers and muscle relaxants.<sup>27</sup>
                    </p>
                    ',
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Add 5g (1 scoop) to 100-200mL of cold water or juice, one (1) to two (2) times per day, or as directed by your
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
                                        <strong>EACH 5g DOSE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Magnesium as amino acid chelate TRAACS®</p>
                                    <p>(bisglycinate chelate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>150mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-glutamine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Green Tea Dry Leaf Extract.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. green tea dry leaf.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>40g</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. L-theanine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>NLT 100mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Pyridoxal 5-Phosphate (Vitamin B6)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>15.6mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>equiv. pyridoxine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Zinc (as citrate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>5mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Maltodextrin</p>
                                    <p>Malic acid</p>
                                    <p>Citrus tea flavour</p>
                                    <p>Citric acid</p>
                                    <p>Stevia</p>
                                    <p>Silica</p>
                                    <strong>Note: Botanical extracts present in this product may result in variations in colour and taste from batch to batch.</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-citrus-tea/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Dairy and Gluten Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    ',
                'price_retail' => 44.01,
                'price_wholesale' => 29.32,
                'image_path' => '/img/products/12mg_optima/mg_optima_relax_150g_citrus_tea.jpg',
                'thumb_image_path' => '/img/products/12mg_optima/thumb_mg_optima_relax_150g_citrus_tea.png',
                'slug' => '12mg-optima-relax-150g-citrus-tea',
                'in_stock' => true,
            ],
            [
                'product_name_index' => '12Mg Optima Relax 150g',
                'austl_number' => '262421',
                'product_name' => '<sup>12</sup>Mg Optima&trade; Relax 150g Lemon Lime',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title"><sup>12</sup>Mg Optima&trade; Relax 150g Lemon Lime</h4>
                    <p>
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients to support the natural metabolic
                        pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to promote
                        relaxation during times of stress.
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
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients that may support the natural
                        metabolic pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to
                        promote relaxation during times of stress. Albion ® Magnesium bisglycinate is scientifically
                        designed to provide a highly bioavailable form of magnesium. Magnesium may act as a GABA
                        receptor agonist and also has a binding site on the glutamate receptors helping to regulate
                        the activity of this main excitatory neurotransmitter.<sup>1</sup> Glycine functions as an
                        inhibitory neurotransmitter in the nervous system while glutamine is a precursor to
                        GABA production.<sup>2</sup> Theanine is an amino acid from Green Tea that may promote
                        relaxation via binding to glutamate receptors.<sup>3</sup> Pyridoxal (vitamin B6) is a cofactor
                        for the enzyme Glutamate decarboxylase that synthesises GABA from glutamate.<sup>4</sup> Zinc also
                        has a binding site on the glutamate receptor and may act as a modulator for both excitatory and
                        inhibitory neurotransmission.<sup>5</sup>
                    </p>
                    ',
                'practitioner_summary' =>
                '
                    <strong>STANDARD INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Help reduce effects of mild anxiety and nervous tension.</li>
                            <li>Non-vitamin active ingredients in this product help relieve nervous tension, stress and mild anxiety. For the symptomatic relief of stress disorders. </li>
                            <li>May assist in the management of stress disorders. </li>
                            <li>Beneficial during times of stress. </li>
                            <li>Non-vitamin active ingredients in this product may be beneficial during times of stress. </li>
                            <li>Non-vitamin active ingredients may improve stress adaptation.</li>
                            <li>Herbal blend which helps relieve stress of study or work.</li>
                            <li>May help reduce the frequency of migraines.</li>
                            <li>Helps relieve nervous tension, stress and mild anxiety. </li>
                            <li>For the symptomatic relief of anxiety. </li>
                            <li>May assist in the management of anxiety. </li>
                            <li>Relief of muscular aches and pains. </li>
                        </ul>
                    </p>

                    <strong>SPECIFIC INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Magnesium is primarily found within the cell where it acts as a counter ion for the energy-rich ATP and nuclear acids.</li>
                            <li>Magnesium is a cofactor in more than 300 enzymatic reactions. It critically stabilises enzymes, including many ATP-generating reactions. ATP is required universally for glucose utilisation, synthesis of fat, proteins, nucleic acid and coenzymes, muscles contraction, methyl group transfer and many other processes.</li>
                            <li>ATP metabolism, muscle contraction and relaxation, normal neurological function and release of neurotransmitters are all magnesium dependent.</li>
                            <li>Magnesium contributes to the regulation of vascular tone, heart rhythm, proper blood coagulation and bone formation.</li>
                            <li>Magnesium may modulate blood sugar regulation and cell proliferation in healthy individuals and is important for cell adhesion and transmembrane transport including transport of potassium and calcium ions.</li>
                            <li>Magnesium maintains the conformation of nucleic acids and is essential for the structural function of proteins and mitochondria.</li>
                            <li>Early signs of magnesium deficiency may include loss of appetite, nausea, vomiting, fatigue and weakness and as magnesium deficiency worsens it may be associated with numbness, tingling, muscle contractions and cramps.</li>
                            <li>Hypomagnesaemia is common in hospitalised patients.</li>
                            <li>Glycine is the major inhibitory neurotransmitter in caudal regions of the adult mammalian central nervous system with high densities of glycinergic synapses being found in spinal cord and brain stem.</li>
                            <li>Glycine has important neurotransmitter functions at inhibitory and excitatory synapses in the central nervous system.</li>
                            <li>L-theanine is one of the primary amino acids found in green tea and can pass over the blood-brain brain barrier increasing levels of concentration in the brain.</li>
                            <li>L-theanine can affect the secretion and function of neurotransmitter in the central nervous system.</li>
                            <li>L-theanine has an affinity to bind to the glutamate receptor subtypes. L-theanine blocks the binding of L-glutameric acid to the glutamate receptors in the brain, resulting in an anti-stress effect through inhibition of cortical neutron excitation.</li>
                            <li>L-theanine through competitive action against excitation of glutamate receptor subtypes, neurochemical studies suggest that L-theanine affects emotions by interacting with serotonin, dopamine and GABA neurotransmitter levels.</li>
                            <li>Dose-dependant administration of L-theanine may affect metabolism and/or the release of specific neurotransmitters in the brain.</li>
                            <li>L-theanine induces alpha wave brain activity, which relates to a perceived state of relaxation.</li>
                            <li>L-theanine may help to reduce anxiety levels and attenuate increased blood pressure in high-stress response adults.</li>
                            <li>L-theanine has a positive effect on mood and cognitive performance, resulting in increased energy, clarity of thought, efficiency, increased alertness and increased perceived work performance.</li>
                            <li>L-theanine may result in a reduction of heart rate and salivary immunoglobulin A responses during times of acute stress.</li>
                            <li>Zinc may function as an inhibitory neuromodulator of glutamate release in the brain.</li>
                            <li>Approximately 10% of total zinc in the brain exists in synaptic vesicles of glutamatergic neutrons.</li>
                            <li>Zinc is likely to modulate neurotransmission mediated via excitatory and inhibitory amino acid receptors at specific synapses.</li>
                            <li>Pyridoxal (B6) is involved in the regeneration of tetrahydrofolate into the active methyl- bearing form and in glutathione biosynthesis from homocysteine.</li>
                            <li>L-Glutamine is an amino acid precursor to the neurotransmitter GABA, the major inhibitory neurotransmitter in the central nervous system.</li>
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
                        <ul>
                            <li>Vitamin supplements should not replace a balanced diet.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
                        </ul>
                    </p>
                ',
                'references' =>
                    '
                    <ol class="medlab_product_reference_list">
                        <li>Held K, Antonijevic IA, Künzel H, et al. Oral Mg(2+) supplementation reverses age-related neuroendocrine and sleep EEG changes in humans. <em>Pharmacopsychiatry</em> 2002;35(4):135-143</li>
                        <li>Legendre P. The glycinergic inhibitory synapse. Cell. Mol. Life Sci 2001;58:760–793</li>
                        <li>Kimura K1, Ozeki M, Juneja LR, et al. L-Theanine reduces psychological and physiological stress responses. <em>Biol Psychol</em> 2007;74(1):39-45</li>
                        <li>Qu K, Martin DL, Lawrence C. Motifs and structural fold of the cofactor binding site of human glutamate decarboxylase. <em>Protein Sci</em> 1998;7:1092-1105.</li>
                        <li>Takeda A, Minami A, Seki Y, et al. Differential effects of zinc on glutamatergic and GABAergic neurotransmitter systems in the hippocampus. <em>J Neurosci Res</em> 2004; 15;75(2):225-9.</li>
                        <li>Jahnen-Dechent W, Ketteler M. Magnesium basics. <em>Clin Kidney J</em> 2012;5 (1);i3–i14.</li>
                        <li>Nygaard IH, Valbo A, Oethick SV, et al. Does oral magnesium substitution relieve pregnancy-inducede leg cramps? <em>Eur J Obstet Gynecol Reprod Biol</em> 2008;141:23-6.</li>
                        <li>Garrison SR, Birmingham CL, Koehler BE, et al. The effect of magnesium infusion on rest cramps: a randomized controlled trial. <em>J Gerontol A Biol Sci Med Sci</em> 2011;66:661-6.</li>
                        <li>Setaro L, Santos-Silva PR, Nakano EY, et al. Magnesium status and the physical performance of volleyball players: effects of magnesium supplementation. <em>J Sports Sci</em> 2014;32:438-45.</li>
                        <li>Veronese N, Berton L, Carraro S, et al. Effect of oral magnesium supplementation on physical performance in healthy elderly women involved in a weekly exercise program: a randomized controlled trial. <em>Am J Nutr</em> 2014;100:974-81.</li>
                        <li>Monaghan DT, Jane DE. Pharmacology of NMDA receptors. In: Van Dongen AM, editor. Biology of the NMDA receptor. Boca Raton (FL): CRC Press/Taylor &amp; Francis; 2009. Chapter 12.</li>
                        <li>Gecz, J. Glutamate receptors and learning and memory. Nat. Genet 2010;42:925</li>
                        <li>Berger AJ, Dieudonne S, Ascher P. Glycine uptake governs glycine site occupancy at NMDA receptors of excitatory synapses. <em>J. Neurophysiol</em> 1998;80: 3336–3340.</li>
                        <li>Hubner CA, Stein V, Hermans-Borgmeyer I, et al. Disruption of KCC2 reveals an essential role of K-Cl cotransport already in early synaptic inhibition. <em>Neuron</em> 2001;30:515–524.</li>
                        <li>Chen SW, Kong WX, Zhang YJ, et al. Possible anxiolytic effects of taurine in the mouse elevated plus-maze. <em>Life Sci</em> 2004;75(12):1503-1511.</li>
                        <li>Hertz L, Kvamme E, McGeer, EG, et al. Glutamine, Glutamate, and Gaba in the Central Nervous System. Alan R Liss Inc. New York; 1983.</li>
                        <li>Bowtell JL, Gelly K, Jackman ML, et al. Effect of oral glutamine on whole body carbohydrate storage during recovery from exhaustive exercise. <em>J.Appl Physiol</em> 1999:1770-1777.</li>
                        <li>Welbourne TC. Increased plasma bicarbonate and growth hormone after an oral glutamine load. <em>Am J Clin Nutr</em> 1995;61(5):1058-1061.</li>
                        <li>Hasler G, Van der Veen JW, Tumonis, T, et al. Reduced Prefrontal Glutamate/Glutamine and Aminobutyric Acid Levels in Major Depression Determined Using Proton Magnetic Resonance Spectroscopy. <em>Arch Gen Psych</em> 2007;64 (2):193-200.</li>
                        <li>Owens DF, Krieg Stein AR. Is there more to GABA than synaptic inhibition? Nat. Rev. Neurosci 2002;3:715</li>
                        <li>Kakuda T, Nozawa A, Sugimoto A, et al. Inhibition by Theanine of binding of [3H]AMPA, [3H]Kainate and [3H]MDL 105,519 to glutamate receptors. <em>Biosci Biotechnol Biochem</em> 2002;66:2683-86.</li>
                        <li>Kimura R, Murata T. Influence of alkylamides of glutamic acid and related compounds on the central nervous system I. Central depressant effect of theanine. <em>Chem Pharm Bull</em> 1971;19:1257–1261.</li>
                        <li>Nathan PJ, Lu K, Gray M, et al.; The neuropharmacology of L-theanine (N-ethyl-L-glutamine): a possible neuroprotective and cognitive enhancing agent. <em>J Herb Pharmacother</em> 2006;6(2):21-30.</li>
                        <li>Heese T, Jenkinson J, Love C, et al.& Anxiolytic effects of L-theanine - a component of green tea - when combined with midazolam, in the male Sprague-Dawley rat. <em>AANA J</em> 2009;77(6):445-449.</li>
                        <li>Ito K, Nagato Y, Aoi N, et al. Effects of L-theanine on the release of alpha brain waves in human volunteers. <em>Nippon Nogeikagaku Kaishi</em> 1998;72:153-157.</li>
                        <li>Lu K., Gray MA, Oliver C, et al. The acute effects of L-theanine in comparison with alprazolam on anticipatory anxiety in humans. <em>Hum Psychopharmacol</em> 2004;19(7):457-465.</li>
                        <li>Lardner AL. Neurobiological effects of the green tea constituent Theanine and its potential role in the treatment of psychiatric and neurodegenerative disorders. <em>Nutr Neurosci</em> 2014;17:145-55.</li>
                        <li>Smart TG, Hosie AM, Miller PS. Zn2+ ions: modulators of excitatory and inhibitory synaptic activity. <em>Neuroscientist</em> 2004;10(5):432-42.</li>
                        <li>Gröber U. Magnesium. In: Gröber U., editor. Micronutrients: Metabolic Tuning-Prevention-Therapy. 1st ed. MedPharm Scientific Publishers; Stuttgart, Germany: 2009:159–166.</li>
                        <li>Foca FJ. Motor and sensory neuropathy secondary to excessive pyridoxine ingestion. <em>Arch Phys Med Rehabil</em> 1985;66(9):634-6.</li>
                        <li>Dalton K, Dalton MJ. Characteristics of pyridoxine overdose neuropathy syndrome. <em>Acta Neurol Scand</em> 1987;76(1):8-11.</li>
                    </ol>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Magnesium supplementation is likely well tolerated for most people but may cause stomach upset,
                        diarrhoea, nausea and vomiting in some individuals.
                    </p>
                    <p>
                        Caution should be used in patients with kidney problems as poorly functioning kidneys do not
                        excrete magnesium from the body well leading to dangerous levels of serum magnesium levels.<sup>29</sup>
                    </p>
                    <p>
                        Vitamin B6 is toxic when ingested in mega doses i.e. greater than 200 mg per day for a prolonged
                        period of time and may cause peripheral neuropathy<sup>30,31</sup>
                    </p>
                    <p>
                         You can also refer to the CMI for this product for symptoms and side effects.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Concomitant use of magnesium and urinary excretion-reducing drugs, such as glucagons, calcitonin,
                        and potassium-sparing diuretics, may increase serum magnesium levels, as may doxercalciferol.
                        Concomitant oral intake of magnesium may influence the absorption of antibiotics (aminoglycosides,
                        quinolone, tetracycline), bisphosphonates, calcium channel blockers and muscle relaxants.<sup>27</sup>
                    </p>
                    ',
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Add 5g (1 scoop) to 100-200mL of cold water or juice, one (1) to two (2) times per day, or as directed by your
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
                                        <strong>EACH 5g DOSE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Magnesium as amino acid chelate TRAACS®</p>
                                    <p>(bisglycinate chelate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>150mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-glutamine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Green Tea Dry Leaf Extract.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. green tea dry leaf.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>40g</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. L-theanine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>NLT 100mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Pyridoxal 5-Phosphate (Vitamin B6)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>15.6mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>equiv. pyridoxine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Zinc (as citrate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>5mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Maltodextrin</p>
                                    <p>Malic acid</p>
                                    <p>Lemon lime flavour</p>
                                    <p>Citric acid</p>
                                    <p>Stevia</p>
                                    <p>Silica</p>
                                    <strong>Note: Botanical extracts present in this product may result in variations in colour and taste from batch to batch.</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'cmi' =>
                    '
                        <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/arabic" target="_blank">الترجمة العربية </a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/spanish" target="_blank">Traducción en español</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/russian" target="_blank">Перевод на русском языке</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/japanese" target="_blank">日本語翻訳</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/french" target="_blank">Traduction en français</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/chinese" target="_blank">中文翻译</a>
                        </p>
                        <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-150g-lemon-lime/cmi/italian" target="_blank">Traduzione italiana</a>
                        </p>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Dairy and Gluten Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    ',
                'price_retail' => 44.01,
                'price_wholesale' => 29.32,
                'image_path' => '/img/products/12mg_optima/mg_optima_relax_150g.jpeg',
                'thumb_image_path' => '/img/products/12mg_optima/thumb_mg_optima_relax_150g.png',
                'slug' => '12mg-optima-relax-150g-lemon-lime'
            ],
            [
                'product_name_index' => '12Mg Optima Relax 300g Lemon Lime',
                'austl_number' => '262421',
                'product_name' => '<sup>12</sup>Mg Optima&trade; Relax 300g Lemon Lime',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title"><sup>12</sup>Mg Optima&trade; Relax 300g Lemon Lime</h4>
                    <p>
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients to support the natural metabolic
                        pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to promote
                        relaxation during times of stress.
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
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients that may support the natural
                        metabolic pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to
                        promote relaxation during times of stress. Albion ® Magnesium bisglycinate is scientifically
                        designed to provide a highly bioavailable form of magnesium. Magnesium may act as a GABA
                        receptor agonist and also has a binding site on the glutamate receptors helping to regulate
                        the activity of this main excitatory neurotransmitter.<sup>1</sup> Glycine functions as an
                        inhibitory neurotransmitter in the nervous system while glutamine is a precursor to
                        GABA production.<sup>2</sup> Theanine is an amino acid from Green Tea that may promote
                        relaxation via binding to glutamate receptors.<sup>3</sup> Pyridoxal (vitamin B6) is a cofactor
                        for the enzyme Glutamate decarboxylase that synthesises GABA from glutamate.<sup>4</sup> Zinc also
                        has a binding site on the glutamate receptor and may act as a modulator for both excitatory and
                        inhibitory neurotransmission.<sup>5</sup>
                    </p>
                    ',
                'practitioner_summary' =>
                    '
                    <strong>STANDARD INDICATIONS</strong>
                    <p>
                        <ul>
                            <li>Help reduce effects of mild anxiety and nervous tension.</li>
                            <li>Non-vitamin active ingredients in this product help relieve nervous tension, stress and mild anxiety. For the symptomatic relief of stress disorders. </li>
                            <li>May assist in the management of stress disorders. </li>
                            <li>Beneficial during times of stress. </li>
                            <li>Non-vitamin active ingredients in this product may be beneficial during times of stress. </li>
                            <li>Non-vitamin active ingredients may improve stress adaptation.</li>
                            <li>Herbal blend which helps relieve stress of study or work.</li>
                            <li>May help reduce the frequency of migraines.</li>
                            <li>Helps relieve nervous tension, stress and mild anxiety. </li>
                            <li>For the symptomatic relief of anxiety. </li>
                            <li>May assist in the management of anxiety. </li>
                            <li>Relief of muscular aches and pains. </li>
                        </ul>
                    </p>

                    <strong>SPECIFIC INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Magnesium is primarily found within the cell where it acts as a counter ion for the energy-rich ATP and nuclear acids.</li>
                            <li>Magnesium is a cofactor in more than 300 enzymatic reactions. It critically stabilises enzymes, including many ATP-generating reactions. ATP is required universally for glucose utilisation, synthesis of fat, proteins, nucleic acid and coenzymes, muscles contraction, methyl group transfer and many other processes.</li>
                            <li>ATP metabolism, muscle contraction and relaxation, normal neurological function and release of neurotransmitters are all magnesium dependent.</li>
                            <li>Magnesium contributes to the regulation of vascular tone, heart rhythm, proper blood coagulation and bone formation.</li>
                            <li>Magnesium may modulate blood sugar regulation and cell proliferation in healthy individuals and is important for cell adhesion and transmembrane transport including transport of potassium and calcium ions.</li>
                            <li>Magnesium maintains the conformation of nucleic acids and is essential for the structural function of proteins and mitochondria.</li>
                            <li>Early signs of magnesium deficiency may include loss of appetite, nausea, vomiting, fatigue and weakness and as magnesium deficiency worsens it may be associated with numbness, tingling, muscle contractions and cramps.</li>
                            <li>Hypomagnesaemia is common in hospitalised patients.</li>
                            <li>Glycine is the major inhibitory neurotransmitter in caudal regions of the adult mammalian central nervous system with high densities of glycinergic synapses being found in spinal cord and brain stem.</li>
                            <li>Glycine has important neurotransmitter functions at inhibitory and excitatory synapses in the central nervous system.</li>
                            <li>L-theanine is one of the primary amino acids found in green tea and can pass over the blood-brain brain barrier increasing levels of concentration in the brain.</li>
                            <li>L-theanine can affect the secretion and function of neurotransmitter in the central nervous system.</li>
                            <li>L-theanine has an affinity to bind to the glutamate receptor subtypes. L-theanine blocks the binding of L-glutameric acid to the glutamate receptors in the brain, resulting in an anti-stress effect through inhibition of cortical neutron excitation.</li>
                            <li>L-theanine through competitive action against excitation of glutamate receptor subtypes, neurochemical studies suggest that L-theanine affects emotions by interacting with serotonin, dopamine and GABA neurotransmitter levels.</li>
                            <li>Dose-dependant administration of L-theanine may affect metabolism and/or the release of specific neurotransmitters in the brain.</li>
                            <li>L-theanine induces alpha wave brain activity, which relates to a perceived state of relaxation.</li>
                            <li>L-theanine may help to reduce anxiety levels and attenuate increased blood pressure in high-stress response adults.</li>
                            <li>L-theanine has a positive effect on mood and cognitive performance, resulting in increased energy, clarity of thought, efficiency, increased alertness and increased perceived work performance.</li>
                            <li>L-theanine may result in a reduction of heart rate and salivary immunoglobulin A responses during times of acute stress.</li>
                            <li>Zinc may function as an inhibitory neuromodulator of glutamate release in the brain.</li>
                            <li>Approximately 10% of total zinc in the brain exists in synaptic vesicles of glutamatergic neutrons.</li>
                            <li>Zinc is likely to modulate neurotransmission mediated via excitatory and inhibitory amino acid receptors at specific synapses.</li>
                            <li>Pyridoxal (B6) is involved in the regeneration of tetrahydrofolate into the active methyl- bearing form and in glutathione biosynthesis from homocysteine.</li>
                            <li>L-Glutamine is an amino acid precursor to the neurotransmitter GABA, the major inhibitory neurotransmitter in the central nervous system.</li>
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
                        <ul>
                            <li>Vitamin supplements should not replace a balanced diet.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
                        </ul>
                    </p>
                ',
                'references' =>
                    '
                    <ol class="medlab_product_reference_list">
                        <li>Held K, Antonijevic IA, Künzel H, et al. Oral Mg(2+) supplementation reverses age-related neuroendocrine and sleep EEG changes in humans. <em>Pharmacopsychiatry</em> 2002;35(4):135-143</li>
                        <li>Legendre P. The glycinergic inhibitory synapse. Cell. Mol. Life Sci 2001;58:760–793</li>
                        <li>Kimura K1, Ozeki M, Juneja LR, et al. L-Theanine reduces psychological and physiological stress responses. <em>Biol Psychol</em> 2007;74(1):39-45</li>
                        <li>Qu K, Martin DL, Lawrence C. Motifs and structural fold of the cofactor binding site of human glutamate decarboxylase. <em>Protein Sci</em> 1998;7:1092-1105.</li>
                        <li>Takeda A, Minami A, Seki Y, et al. Differential effects of zinc on glutamatergic and GABAergic neurotransmitter systems in the hippocampus. <em>J Neurosci Res</em> 2004; 15;75(2):225-9.</li>
                        <li>Jahnen-Dechent W, Ketteler M. Magnesium basics. <em>Clin Kidney J</em> 2012;5 (1);i3–i14.</li>
                        <li>Nygaard IH, Valbo A, Oethick SV, et al. Does oral magnesium substitution relieve pregnancy-inducede leg cramps? <em>Eur J Obstet Gynecol Reprod Biol</em> 2008;141:23-6.</li>
                        <li>Garrison SR, Birmingham CL, Koehler BE, et al. The effect of magnesium infusion on rest cramps: a randomized controlled trial. <em>J Gerontol A Biol Sci Med Sci</em> 2011;66:661-6.</li>
                        <li>Setaro L, Santos-Silva PR, Nakano EY, et al. Magnesium status and the physical performance of volleyball players: effects of magnesium supplementation. <em>J Sports Sci</em> 2014;32:438-45.</li>
                        <li>Veronese N, Berton L, Carraro S, et al. Effect of oral magnesium supplementation on physical performance in healthy elderly women involved in a weekly exercise program: a randomized controlled trial. <em>Am J Nutr</em> 2014;100:974-81.</li>
                        <li>Monaghan DT, Jane DE. Pharmacology of NMDA receptors. In: Van Dongen AM, editor. Biology of the NMDA receptor. Boca Raton (FL): CRC Press/Taylor &amp; Francis; 2009. Chapter 12.</li>
                        <li>Gecz, J. Glutamate receptors and learning and memory. Nat. Genet 2010;42:925</li>
                        <li>Berger AJ, Dieudonne S, Ascher P. Glycine uptake governs glycine site occupancy at NMDA receptors of excitatory synapses. <em>J. Neurophysiol</em> 1998;80: 3336–3340.</li>
                        <li>Hubner CA, Stein V, Hermans-Borgmeyer I, et al. Disruption of KCC2 reveals an essential role of K-Cl cotransport already in early synaptic inhibition. <em>Neuron</em> 2001;30:515–524.</li>
                        <li>Chen SW, Kong WX, Zhang YJ, et al. Possible anxiolytic effects of taurine in the mouse elevated plus-maze. <em>Life Sci</em> 2004;75(12):1503-1511.</li>
                        <li>Hertz L, Kvamme E, McGeer, EG, et al. Glutamine, Glutamate, and Gaba in the Central Nervous System. Alan R Liss Inc. New York; 1983.</li>
                        <li>Bowtell JL, Gelly K, Jackman ML, et al. Effect of oral glutamine on whole body carbohydrate storage during recovery from exhaustive exercise. <em>J.Appl Physiol</em> 1999:1770-1777.</li>
                        <li>Welbourne TC. Increased plasma bicarbonate and growth hormone after an oral glutamine load. <em>Am J Clin Nutr</em> 1995;61(5):1058-1061.</li>
                        <li>Hasler G, Van der Veen JW, Tumonis, T, et al. Reduced Prefrontal Glutamate/Glutamine and Aminobutyric Acid Levels in Major Depression Determined Using Proton Magnetic Resonance Spectroscopy. <em>Arch Gen Psych</em> 2007;64 (2):193-200.</li>
                        <li>Owens DF, Krieg Stein AR. Is there more to GABA than synaptic inhibition? Nat. Rev. Neurosci 2002;3:715</li>
                        <li>Kakuda T, Nozawa A, Sugimoto A, et al. Inhibition by Theanine of binding of [3H]AMPA, [3H]Kainate and [3H]MDL 105,519 to glutamate receptors. <em>Biosci Biotechnol Biochem</em> 2002;66:2683-86.</li>
                        <li>Kimura R, Murata T. Influence of alkylamides of glutamic acid and related compounds on the central nervous system I. Central depressant effect of theanine. <em>Chem Pharm Bull</em> 1971;19:1257–1261.</li>
                        <li>Nathan PJ, Lu K, Gray M, et al.; The neuropharmacology of L-theanine (N-ethyl-L-glutamine): a possible neuroprotective and cognitive enhancing agent. <em>J Herb Pharmacother</em> 2006;6(2):21-30.</li>
                        <li>Heese T, Jenkinson J, Love C, et al.& Anxiolytic effects of L-theanine - a component of green tea - when combined with midazolam, in the male Sprague-Dawley rat. <em>AANA J</em> 2009;77(6):445-449.</li>
                        <li>Ito K, Nagato Y, Aoi N, et al. Effects of L-theanine on the release of alpha brain waves in human volunteers. <em>Nippon Nogeikagaku Kaishi</em> 1998;72:153-157.</li>
                        <li>Lu K., Gray MA, Oliver C, et al. The acute effects of L-theanine in comparison with alprazolam on anticipatory anxiety in humans. <em>Hum Psychopharmacol</em> 2004;19(7):457-465.</li>
                        <li>Lardner AL. Neurobiological effects of the green tea constituent Theanine and its potential role in the treatment of psychiatric and neurodegenerative disorders. <em>Nutr Neurosci</em> 2014;17:145-55.</li>
                        <li>Smart TG, Hosie AM, Miller PS. Zn2+ ions: modulators of excitatory and inhibitory synaptic activity. <em>Neuroscientist</em> 2004;10(5):432-42.</li>
                        <li>Gröber U. Magnesium. In: Gröber U., editor. Micronutrients: Metabolic Tuning-Prevention-Therapy. 1st ed. MedPharm Scientific Publishers; Stuttgart, Germany: 2009:159–166.</li>
                        <li>Foca FJ. Motor and sensory neuropathy secondary to excessive pyridoxine ingestion. <em>Arch Phys Med Rehabil</em> 1985;66(9):634-6.</li>
                        <li>Dalton K, Dalton MJ. Characteristics of pyridoxine overdose neuropathy syndrome. <em>Acta Neurol Scand</em> 1987;76(1):8-11.</li>
                    </ol>
                    ',
                'side_effects' =>
                    '
                    <p>
                        Magnesium supplementation is likely well tolerated for most people but may cause stomach upset,
                        diarrhoea, nausea and vomiting in some individuals.
                    </p>
                    <p>
                        Caution should be used in patients with kidney problems as poorly functioning kidneys do not
                        excrete magnesium from the body well leading to dangerous levels of serum magnesium levels.<sup>29</sup>
                    </p>
                    <p>
                        Vitamin B6 is toxic when ingested in mega doses i.e. greater than 200 mg per day for a prolonged
                        period of time and may cause peripheral neuropathy<sup>30,31</sup>
                    </p>
                    <p>
                         You can also refer to the CMI for this product for symptoms and side effects.
                    </p>
                    ',
                'interactions' =>
                    '
                    <p>
                        Concomitant use of magnesium and urinary excretion-reducing drugs, such as glucagons, calcitonin,
                        and potassium-sparing diuretics, may increase serum magnesium levels, as may doxercalciferol.
                        Concomitant oral intake of magnesium may influence the absorption of antibiotics (aminoglycosides,
                        quinolone, tetracycline), bisphosphonates, calcium channel blockers and muscle relaxants.<sup>27</sup>
                    </p>
                    ',
                'dosage_information' =>
                    '
                    <h4 class="medlab_product_content_title">
                        Serving Information
                    </h4>

                    <p>
                        Add 5g (1 scoop) to 100-200mL of cold water or juice, one (1) to two (2) times per day, or as directed by your
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
                                        <strong>EACH 5g DOSE CONTAINS</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Magnesium as amino acid chelate TRAACS®</p>
                                    <p>(bisglycinate chelate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>150mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>L-glutamine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Green Tea Dry Leaf Extract.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>500mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. green tea dry leaf.</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>40g</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>Equiv. L-theanine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>NLT 100mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Pyridoxal 5-Phosphate (Vitamin B6)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>15.6mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;" width="273" valign="top">
                                    <p>equiv. pyridoxine</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>10mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="273" valign="top">
                                    <p>Zinc (as citrate)</p>
                                </td>
                                <td width="136" valign="top">
                                    <p>5mg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Maltodextrin</p>
                                    <p>Malic acid</p>
                                    <p>Lemon lime flavour</p>
                                    <p>Citric acid</p>
                                    <p>Stevia</p>
                                    <p>Silica</p>
                                    <strong>Note: Botanical extracts present in this product may result in variations in colour and taste from batch to batch.</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
                'cmi' =>
                    '
                        <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-300g-lemon-lime/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-300g-lemon-lime/cmi/arabic" target="_blank">الترجمة العربية </a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-300g-lemon-lime/cmi/spanish" target="_blank">Traducción en español</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-300g-lemon-lime/cmi/russian" target="_blank">Перевод на русском языке</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-300g-lemon-lime/cmi/japanese" target="_blank">日本語翻訳</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-300g-lemon-lime/cmi/french" target="_blank">Traduction en français</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                            <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-300g-lemon-lime/cmi/chinese" target="_blank">中文翻译</a>
                        </p>
                        <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/12mg-optima-relax-300g-lemon-lime/cmi/italian" target="_blank">Traduzione italiana</a>
                        </p>
                    ',
                'free_from' =>
                    '
                    <p class="medlab_product_content_sub_title">
                        Dairy and Gluten Free
                    </p>
                    <p class="medlab_product_content_sub_title">
                        Suitable for Vegetarians
                    </p>
                    <p class="medlab_product_content_sub_title">
                        No artificial colours, flavours or sweeteners
                    </p>
                    ',
                'price_retail' => 71.98,
                'price_wholesale' => 47.00,
                'image_path' => '/img/products/12mg_optima/mg_optima_relax_300g.jpeg',
                'thumb_image_path' => '/img/products/12mg_optima/thumb_mg_optima_relax_300g.jpeg',
                'slug' => '12mg-optima-relax-300g-lemon-lime'
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 120s',
                'austl_number' => '261255',
                'product_name' => 'BioClean EPA:DHA + CoQ10 120s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">BioClean EPA:DHA + CoQ10 120s</h4>
                <p>
                    BioClean EPA:DHA + CoQ10 is a scientifically formulated combination of
                    Omega-3 Fatty Acids and Coenzyme Q10 targeted to support healthy
                    cardiovascular and neurocognitive health.
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
                    <strong>
                        BioClean EPA:DHA + CoQ10 is a scientifically formulated combination of Omega-3 Fatty Acids and
                        Coenzyme Q10 targeted to support cardiovascular and neurocognitive health.
                    </strong>
                </p>
                <p>
                    Omega-3 Fatty Acids are essential nutrients that are incorporated into all cellular membranes,
                    improving cell function and integrity.  The formulation contains Coenzyme Q10, also a vital
                    nutrient required for the regulation of cellular and tissue function particularly those of
                    the cardiovascular and neurocognitive systems with elevated metabolic need.  Ubiquinol, the
                    reduced form of CoQ10, has a superior absorption profile and higher bioavailability than
                    other forms, therefore increasing therapeutic efficacy.  Together this has created an advanced
                    formulation to support cardiovascular and neurocognitive health and function.
                </p>
                ',
                'practitioner_summary' =>
                    "
                    <strong>STANDARD INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                            <li>May temporarily relieve joint pain/aches associated with mild arthritis.</li>
                            <li>May help enhance/improve/promote/increase joint mobility in mild arthritis.</li>
                            <li>May temporarily relieve joint inflammation/ swelling associated with mild arthritis.</li>
                            <li>May temporarily relieve swollen and aching joints associated with mild arthritis.</li>
                        </ul>
                    </p>

                    <strong>SPECIFIC INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>CoQ10 transports electrons from mitochondrial respiratory chain complexes I and II to complex III and so is critical for ATP synthesis.</li>
                            <li>CoQ10 functions as a cofactor for uncoupling proteins that are mitochondrial transporters presenting the inner membrane of mitochondria.</li>
                            <li>Ubiquinol is the reduced form of CoQ10 and Ubiquinone is the oxidized form. These redox forms allows CoQ10 to act as an antioxidant and also as a prooxidant mainly through the semiquinone intermediate.</li>
                            <li>CoQ10 is synthesised by all mammalian cells and is required for the biosynthesis of pyrimidine nucleotides because it is a natural substrate of dihydroorotate dehydrogenase, an enzyme located at the inner mitochondrial membrane.</li>
                            <li>Coenzyme Q10 plays a central role in cellular bioenergy generation and its regulation.</li>
                            <li>Coenzyme Q10 functions in prooxidant formation of small amounts of second messenger superoxide anion and hydrogen peroxide that are critical to overall metabolome function.</li>
                            <li>Coenzyme Q10 acting through formation of its semiquinone is a major source of cellular and mitochondrial superoxide anion and consequently production of the second messenger hydrogen peroxide.</li>
                            <li>Coenzyme Q10 plays a major role in mitochondrial energy generation actively participating in the establishment of the mitochondrial membrane's proton motive force.</li>
                            <li>Coenzyme Q10 functions as a source of superoxide anion to activate the uncoupler proteins and is an obligatory co-factor for uncoupling protein function.</li>
                            <li>Omega 3 fatty acids stabilise the electrical activity of cardiac myocytes by inhibiting sarcolemmal ion channels, resulting in a prolonged relative refractory period.</li>
                            <li>Omega 3 fatty acids supports healthy cardiovascular and endothelial function in healthy individuals Omega 3 fatty acids support healthy cholesterol and triglyceride levels in healthy individuals.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 500 mg of omega 3 oils per day to maintain healthy cardiovascular function in healthy individuals.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 1000 mg per day omega 3 oils in those with documented heart conditions.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 1200 mg to 4000 mg of omega 3 oils in those with documented elevated triglyceride levels.</li>
                            <li>Omega 3 fatty acids are incorporated into cell membranes, and increasing the amount of polyunsaturated fatty acids in the membranes increases its fluidity and deformability.</li>
                            <li>Omega 3 fatty acids are essential because they are not synthesised by the body and must be obtained through diet or supplementation.</li>
                            <li>Omega 3 fatty acids help maintain normal blood coagulation function in healthy individuals.</li>
                            <li>Omega 3 fatty acids help maintain healthy endothelial function in healthy individuals.</li>
                            <li>Omega 3 fatty acids may result in a favourable change in high density lipoproteins (HDL) levels.</li>
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
                        <ul>
                            <li>Do not take while on warfarin therapy without medical advice.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
                        </ul>
                    </p>
                ",
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2006; 5(6):52-59.</li>
                    <li>Jain AP, et al. Omega-3 fatty acids and cardiovascular disease. <em>Eur Rev Med Pharmacol Sci</em> 2015; 19:441-445.</li>
                    <li>Djoussé L, et al. Fish consumption, omega-3 fatty acids and risk of heart failure: a meta-analysis. <em>Clin Nutr</em> 2012; 31(6):846-53.</li>
                    <li>Marik PE, Varon J. Omega-3 dietary supplements and the risk of cardiovascular events: a systematic review. <em>Clin Cardiol</em> 2009; 32(7):365-72.</li>
                    <li>Lopez–Garcia E, Schulze MB, Manson JE, etal. Consumption of (n-3) fatty acids is related to plasma biomarkers of inflammation and endothelial activation in women. <em>J Nutr</em> 2004; 134(7):1806–11.</li>
                    <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2007; 6(1):48-51.</li>
                    <li>Innis SM. Dietary omega 3 fatty acids and the developing brain. <em>Brain Res</em> 2008; 1237:35-43.</li>
                    <li>Docosahexaenoic acid (DHA). Monograph. <em>Altern Med Rev</em> 2009; 14(4):391-399.</li>
                    <li>Uauy R, Dangour AD. Nutrition in brain development and aging: role of essential fatty acids. <em>Nutr Rev</em> 2006; 64(5 Pt 2):S24-33; discussion S72-91.</li>
                    <li>Issa AM, et al. The efficacy of omega-3 fatty acids on cognitive function in aging and dementia: a systematic review. <em>Dement Geriatr Cogn Disord</em> 2006;21(2):88-96.</li>
                    <li>Linnane AW, Kios M, Vitetta L. Coenzyme Q(10)--its role as a prooxidant in the formation of superoxide anion/hydrogen peroxide and the regulation of the metabolome. <em>Mitochondrion</em> 2007; 7 Suppl:S51-61.</li>
                    <li>Yang YK, et al. Coenzyme Q10 treatment of cardiovascular disorders of ageing including heart failure, hypertension and endothelial dysfunction. <em>Clin Chim Acta</em> 2015;450:83-9.</li>
                    <li>Martinet W, Knaapen MW, Kockx MM, De Meyer GR. Autophagy in cardiovascular disease. <em>Trends Mol Med</em> 2007; 13(11):482-91.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Consuming Fish Oils and CoQ10 is likely well tolerated by most people but may cause minor side effects.
                    <sup>30,31</sup> Your patients should not be alarmed by this list of possible side effects
                    as they may not experience any of them, but as their healthcare practitioner symptom should
                    be monitored:
                </p>
                <p>
                    <ul>
                        <li>Belching</li>
                        <li>Bad breath (refrigeration of fish oils or taking them with meals helps to prevent this)</li>
                        <li>May lower blood pressure</li>
                        <li>May reduce blood clotting when taking more than 3 g /day of fish oils</li>
                    </ul>
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    <ul>
                        <li>If you have an allergic reaction to BioClean EPA:DHA + COQ10 or any of its ingredients.</li>
                        <li>Do not take on Warfarin therapy without medical advice.</li>
                        <li>
                            Patients taking blood pressure medication such as:
                            <ul>
                                <li>Betta blockers</li>
                                <li>Calcium channel blockers</li>
                                <li>ACE inhibitors</li>
                                <li>Angiotensin II receptor blockers</li>
                            </ul>
                        </li>
                    </ul>
                </p>
                ',
                'dosage_information' =>
                    '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Take one (1) to two (2) capsules, twice per day, or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/bioclean_epa_dha_coq10_120s/2partcap.png">
                </div>
                ',
                'ingredients' =>
                    '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <strong>INGREDIENTS COMPOSITION</strong>
                                </p>
                                <p>
                                    Active ingredients in each capsule
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                    <strong>EACH CAPSULE CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Fish Oil – Natural</p>
                            </td>
                            <td width="136" valign="top">
                                <p>950 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p style="padding-left: 30px;">Equiv. Eicosapentaenoic acid</p>
                            </td>
                            <td valign="top" width="136">
                                <p>171 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p style="padding-left: 30px;">Equiv. Docosahaxaenoic acid</p>
                            </td>
                            <td valign="top" width="136">
                                <p>114 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p>Ubiquinol (Coenzyme Q10)</p>
                            </td>
                            <td valign="top" width="136">
                                <p>50 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Gelatin</p>
                                <p>Vanillin</p>
                                <p>Glycerol</p>
                                <p>Titanium oxide</p>
                                <p>Iron oxide red</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-120s/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-120s/cmi/arabic" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-120s/cmi/spanish" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-120s/cmi/russian" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-120s/cmi/japanese" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-120s/cmi/french" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-120s/cmi/chinese" target="_blank">中文翻译</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-120s/cmi/italian" target="_blank">Traduzione italiana</a>
                    </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Dairy Free
                </p>
                ',
                'price_retail' => 52.68,
                'price_wholesale' => 34.95,
                'image_path' => '/img/products/bioclean_epa_dha_coq10_120s/bioclean_epadha_coq10_120s.png',
                'thumb_image_path' => '/img/products/bioclean_epa_dha_coq10_120s/thumb_bioclean_epadha_coq10_120s.png',
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 60s',
                'austl_number' => '261255',
                'product_name' => 'BioClean EPA:DHA + CoQ10 60s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">BioClean EPA:DHA + CoQ10 60s</h4>
                <p>
                    BioClean EPA:DHA + CoQ10 is a scientifically formulated combination of
                    Omega-3 Fatty Acids and Coenzyme Q10 targeted to support healthy
                    cardiovascular and neurocognitive health.
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
                    <strong>
                        BioClean EPA:DHA + CoQ10 is a scientifically formulated combination of Omega-3 Fatty Acids and
                        Coenzyme Q10 targeted to support cardiovascular and neurocognitive health.
                    </strong>
                </p>
                <p>
                    Omega-3 Fatty Acids are essential nutrients that are incorporated into all cellular membranes,
                    improving cell function and integrity.  The formulation contains Coenzyme Q10, also a vital
                    nutrient required for the regulation of cellular and tissue function particularly those of
                    the cardiovascular and neurocognitive systems with elevated metabolic need.  Ubiquinol, the
                    reduced form of CoQ10, has a superior absorption profile and higher bioavailability than
                    other forms, therefore increasing therapeutic efficacy.  Together this has created an advanced
                    formulation to support cardiovascular and neurocognitive health and function.
                </p>
                ',
                'practitioner_summary' =>
                    "
                    <strong>STANDARD INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                            <li>May temporarily relieve joint pain/aches associated with mild arthritis.</li>
                            <li>May help enhance/improve/promote/increase joint mobility in mild arthritis.</li>
                            <li>May temporarily relieve joint inflammation/ swelling associated with mild arthritis.</li>
                            <li>May temporarily relieve swollen and aching joints associated with mild arthritis.</li>
                        </ul>
                    </p>

                    <strong>SPECIFIC INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>CoQ10 transports electrons from mitochondrial respiratory chain complexes I and II to complex III and so is critical for ATP synthesis.</li>
                            <li>CoQ10 functions as a cofactor for uncoupling proteins that are mitochondrial transporters presenting the inner membrane of mitochondria.</li>
                            <li>Ubiquinol is the reduced form of CoQ10 and Ubiquinone is the oxidized form. These redox forms allows CoQ10 to act as an antioxidant and also as a prooxidant mainly through the semiquinone intermediate.</li>
                            <li>CoQ10 is synthesised by all mammalian cells and is required for the biosynthesis of pyrimidine nucleotides because it is a natural substrate of dihydroorotate dehydrogenase, an enzyme located at the inner mitochondrial membrane.</li>
                            <li>Coenzyme Q10 plays a central role in cellular bioenergy generation and its regulation.</li>
                            <li>Coenzyme Q10 functions in prooxidant formation of small amounts of second messenger superoxide anion and hydrogen peroxide that are critical to overall metabolome function.</li>
                            <li>Coenzyme Q10 acting through formation of its semiquinone is a major source of cellular and mitochondrial superoxide anion and consequently production of the second messenger hydrogen peroxide.</li>
                            <li>Coenzyme Q10 plays a major role in mitochondrial energy generation actively participating in the establishment of the mitochondrial membrane's proton motive force.</li>
                            <li>Coenzyme Q10 functions as a source of superoxide anion to activate the uncoupler proteins and is an obligatory co-factor for uncoupling protein function.</li>
                            <li>Omega 3 fatty acids stabilise the electrical activity of cardiac myocytes by inhibiting sarcolemmal ion channels, resulting in a prolonged relative refractory period.</li>
                            <li>Omega 3 fatty acids supports healthy cardiovascular and endothelial function in healthy individuals Omega 3 fatty acids support healthy cholesterol and triglyceride levels in healthy individuals.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 500 mg of omega 3 oils per day to maintain healthy cardiovascular function in healthy individuals.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 1000 mg per day omega 3 oils in those with documented heart conditions.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 1200 mg to 4000 mg of omega 3 oils in those with documented elevated triglyceride levels.</li>
                            <li>Omega 3 fatty acids are incorporated into cell membranes, and increasing the amount of polyunsaturated fatty acids in the membranes increases its fluidity and deformability.</li>
                            <li>Omega 3 fatty acids are essential because they are not synthesised by the body and must be obtained through diet or supplementation.</li>
                            <li>Omega 3 fatty acids help maintain normal blood coagulation function in healthy individuals.</li>
                            <li>Omega 3 fatty acids help maintain healthy endothelial function in healthy individuals.</li>
                            <li>Omega 3 fatty acids may result in a favourable change in high density lipoproteins (HDL) levels.</li>
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
                        <ul>
                            <li>Do not take while on warfarin therapy without medical advice.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
                        </ul>
                    </p>
                ",
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2006; 5(6):52-59.</li>
                    <li>Jain AP, et al. Omega-3 fatty acids and cardiovascular disease. <em>Eur Rev Med Pharmacol Sci</em> 2015; 19:441-445.</li>
                    <li>Djoussé L, et al. Fish consumption, omega-3 fatty acids and risk of heart failure: a meta-analysis. <em>Clin Nutr</em> 2012; 31(6):846-53.</li>
                    <li>Marik PE, Varon J. Omega-3 dietary supplements and the risk of cardiovascular events: a systematic review. <em>Clin Cardiol</em> 2009; 32(7):365-72.</li>
                    <li>Lopez–Garcia E, Schulze MB, Manson JE, etal. Consumption of (n-3) fatty acids is related to plasma biomarkers of inflammation and endothelial activation in women. <em>J Nutr</em> 2004; 134(7):1806–11.</li>
                    <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2007; 6(1):48-51.</li>
                    <li>Innis SM. Dietary omega 3 fatty acids and the developing brain. <em>Brain Res</em> 2008; 1237:35-43.</li>
                    <li>Docosahexaenoic acid (DHA). Monograph. <em>Altern Med Rev</em> 2009; 14(4):391-399.</li>
                    <li>Uauy R, Dangour AD. Nutrition in brain development and aging: role of essential fatty acids. <em>Nutr Rev</em> 2006; 64(5 Pt 2):S24-33; discussion S72-91.</li>
                    <li>Issa AM, et al. The efficacy of omega-3 fatty acids on cognitive function in aging and dementia: a systematic review. <em>Dement Geriatr Cogn Disord</em> 2006;21(2):88-96.</li>
                    <li>Linnane AW, Kios M, Vitetta L. Coenzyme Q(10)--its role as a prooxidant in the formation of superoxide anion/hydrogen peroxide and the regulation of the metabolome. <em>Mitochondrion</em> 2007; 7 Suppl:S51-61.</li>
                    <li>Yang YK, et al. Coenzyme Q10 treatment of cardiovascular disorders of ageing including heart failure, hypertension and endothelial dysfunction. <em>Clin Chim Acta</em> 2015;450:83-9.</li>
                    <li>Martinet W, Knaapen MW, Kockx MM, De Meyer GR. Autophagy in cardiovascular disease. <em>Trends Mol Med</em> 2007; 13(11):482-91.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Consuming Fish Oils and CoQ10 is likely well tolerated by most people but may cause minor side effects.
                    <sup>30,31</sup> Your patients should not be alarmed by this list of possible side effects
                    as they may not experience any of them, but as their healthcare practitioner symptom should
                    be monitored:
                </p>
                <p>
                    <ul>
                        <li>Belching</li>
                        <li>Bad breath (refrigeration of fish oils or taking them with meals helps to prevent this)</li>
                        <li>May lower blood pressure</li>
                        <li>May reduce blood clotting when taking more than 3 g /day of fish oils</li>
                    </ul>
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    <ul>
                        <li>If you have an allergic reaction to BioClean EPA:DHA + COQ10 or any of its ingredients.</li>
                        <li>Do not take on Warfarin therapy without medical advice.</li>
                        <li>
                            Patients taking blood pressure medication such as:
                            <ul>
                                <li>Betta blockers</li>
                                <li>Calcium channel blockers</li>
                                <li>ACE inhibitors</li>
                                <li>Angiotensin II receptor blockers</li>
                            </ul>
                        </li>
                    </ul>
                </p>
                ',
                'dosage_information' =>
                    '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Take one (1) capsule, one (1) to two (2) times daily, or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/bioclean_epa_dha_coq10_60s/2partcap.png">
                </div>
                ',
                'ingredients' =>
                    '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <strong>INGREDIENTS COMPOSITION</strong>
                                </p>
                                <p>
                                    Active ingredients in each capsule
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                    <strong>EACH CAPSULE CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Fish Oil – Natural</p>
                            </td>
                            <td width="136" valign="top">
                                <p>950 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p style="padding-left: 30px;">Equiv. Eicosapentaenoic acid</p>
                            </td>
                            <td valign="top" width="136">
                                <p>171 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p style="padding-left: 30px;">Equiv. Docosahaxaenoic acid</p>
                            </td>
                            <td valign="top" width="136">
                                <p>114 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p>Ubiquinol (Coenzyme Q10)</p>
                            </td>
                            <td valign="top" width="136">
                                <p>50 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Gelatin</p>
                                <p>Vanillin</p>
                                <p>Glycerol</p>
                                <p>Titanium oxide</p>
                                <p>Iron oxide red</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-60s/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-60s/cmi/arabic" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-60s/cmi/spanish" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-60s/cmi/russian" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-60s/cmi/japanese" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-60s/cmi/french" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-60s/cmi/chinese" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-coq10-60s/cmi/italian" target="_blank">Traduzione italiana</a>
                    </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Dairy Free
                </p>
                ',
                'price_retail' => 29.95,
                'price_wholesale' => 19.95,
                'image_path' => '/img/products/bioclean_epa_dha_coq10_60s/bioclean_epadha_coq10_60s.png',
                'thumb_image_path' => '/img/products/bioclean_epa_dha_coq10_60s/thumb_bioclean_epadha_coq10_60s.png',
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 120s',
                'austl_number' => '261256',
                'product_name' => 'BioClean EPA:DHA + Plant Sterols 120s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">BioClean EPA:DHA + Plant Sterols 120s</h4>
                <p>
                    BioClean EPA:DHA + Plant Sterols is a scientifically formulated combination of Omega-3 Fatty Acids
                    and Plant Sterols targeted to support healthy cholesterol levels and cardiovascular health.
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
                    <strong>
                        BioClean EPA:DHA + Plant Sterols is a scientifically formulated combination of Omega-3 Fatty
                        Acids and Plant Sterols targeted to support healthy cholesterol levels and cardiovascular health.
                    </strong>
                </p>
                <p>
                    Clinical evidence has shown that a combination of Omega-3 Fatty Acids and Plant Sterols reduces
                    serum LDL cholesterol and triglyceride levels, inducing shifts in the lipoprotein distribution
                    that may provide additional cardiovascular benefits than either nutrient taken alone.
                    Omega-3 essential Fatty Acids stabilise the electrical activity of cardiac myocytes, support
                    membrane fluidity and integrity of blood vessels.  Combined with Plant Sterols this formulation
                    helps maintain healthy blood cholesterol and triglyceride levels in healthy individuals.
                </p>
                ',
                'practitioner_summary' =>
                    "
                    <strong>STANDARD INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>May assist in the maintenance of cholesterol within the normal/healthy range in healthy individuals and improve the LDL:HDL ratio.</li>
                            <li>May assist in the maintenance of cholesterol within the normal range in healthy individuals.</li>
                            <li>May assist in the maintenance of normal/healthy cholesterol levels in healthy individuals.</li>
                            <li>May help to reduce intestinal absorption of cholesterol from dietary sources.</li>
                            <li>May assist in the maintenance of a normal/healthy LDL:HDL cholesterol ratio.</li>
                        </ul>
                    </p>

                    <strong>SPECIFIC INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Vegetable oil phytosterol esters (plant sterols) may help maintain normal healthy cholesterol levels in healthy individuals.</li>
                            <li>Vegetable oil phytosterol esters (plant sterols) may assist in the improvement of the LDL:HDL ratio as well as reducing oxidation of LDL cholesterol.</li>
                            <li>Vegetable oil phytosterol esters (plant sterols) may help reduce intestinal absorption of cholesterol from dietary sources.</li>
                            <li>Contains Omega-3 triglyceride essential fatty acids which may support healthy function of the cardiovascular system.</li>
                            <li>Omega-3 fatty acids stabilise the electrical activity of cardiac myocytes by inhibiting sarcolemmal ion channels, resulting in a prolonged relative refractory period.</li>
                            <li>Omega-3 fatty acids support healthy cardiovascular and endothelial function in healthy individuals.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 500 mg of omega 3 per day to maintain healthy cardiovascular function in healthy individuals.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 1000 mg per day omega 3 oils in those with documented heart conditions.</li>
                            <li>Omega-3 fatty acids are incorporated into cell membranes, and increasing the amount of polyunsaturated fatty acids in the membranes increases its fluidity and deformability.</li>
                            <li>Omega-3 fatty acids are essential because they are not synthesised by the body and must be obtained through diet or supplementation.</li>
                            <li>Omega 3 fatty acids support healthy cholesterol and triglyceride levels in healthy individuals.</li>
                            <li>Omega 3 fatty acids help maintain normal blood coagulation function in healthy individuals .</li>
                            <li>Omega 3 fatty acids may result in a favourable change in high density lipoprotein (HDL) levels in healthy individuals.</li>
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
                        <ul>
                            <li>Not recommended for use by pregnant and lactating women.</li>
                            <li>There is no benefit from taking more than 3g/day of phytosterols from all sources.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
                        </ul>
                    </p>
                ",
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2006; 5(6):52-59.</li>
                    <li>Jain AP, et al. Omega-3 fatty acids and cardiovascular disease. <em>Eur Rev Med Pharmacol Sci</em> 2015; 19:441-445.</li>
                    <li>Djoussé L, et al. Fish consumption, omega-3 fatty acids and risk of heart failure: a meta-analysis. <em>Clin Nutr</em> 2012; 31(6):846-53.</li>
                    <li>Marik PE, Varon J. Omega-3 dietary supplements and the risk of cardiovascular events: a systematic review. <em>Clin Cardiol</em> 2009; 32(7):365-72.</li>
                    <li>Lopez–Garcia E, Schulze MB, Manson JE, etal. Consumption of (n-3) fatty acids is related to plasma biomarkers of inflammation and endothelial activation in women. <em>J Nutr</em> 2004; 134(7):1806–11.</li>
                    <li>Stipanuk, Martha H. Biochemical Physiological and Molecular Aspects of Human Nutrition. Saunders Publisher. 2nd Edition. Pp24-25. 2006.</li>
                    <li>Gylling H, Simonen P. Phytosterols, Phytostanols, and Lipoprotein Metabolism. <em>Nutrients</em> 2015; 7(9):7965-77.</li>
                    <li>Plat J, et al. Mechanisms underlying the health benefits of plant sterol and stanol ester consumption. <em>J AOAC Int</em> 2015; 98(3):697-700.</li>
                    <li>Plat J, et al. A plant stanol yogurt drink alone or combined with a low-dose statin lowers serum triacylglycerol and non-HDL cholesterol in metabolic syndrome patients. <em>J Nutr</em> 2009; 139(6):1143-1149.</li>
                    <li>Plat J, et al. Protective role of plant sterol and stanol esters in liver inflammation: insights from mice and humans. <em>PLoS ONE</em> 2014; 9(1): e110758.</li>
                    <li>Katan MB, et al. Efficacy and safety of plant stanols and sterols in the management of blood cholesterol levels. <em>Mayo Clin Proc</em> 2003; 78(8):965-78.</li>
                    <li>Abumweis SS, Barake R, Jones PJ. Plant sterols/stanols as cholesterol lowering agents: A meta-analysis of randomized controlled trials. <em>Food Nutr Res</em> 2008;52.</li>
                    <li>Ras RT, et al. Low doses of Eicosapentaenoic acid and Docosahexaenoic acid from fish oil dose-dependantly decrease serum triglyceride concentrations in the presence of plant sterols in hypercholesterolemic men and women. <em>J Nutr </em> 2014; 144:1564-1570.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Consuming Fish Oils and Plant Sterols is likely well tolerated by most people but may cause minor side
                    effects. Your patients should not be alarmed by this list of possible side effects as they may not
                    experience any of them, but as their healthcare practitioner symptom should be monitored:
                </p>
                <p>
                    <ul>
                        <li>Belching</li>
                        <li>Bad breath (refrigeration of fish oils or taking them with meals helps to prevent this)</li>
                        <li>May reduce blood clotting when taking more than 3 g /day of fish oils</li>
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
                    Take two (2) capsules, twice per day, or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/bioclean_epa_dha_plant_sterols_120s/2partcap.png">
                </div>
                ',
                'ingredients' =>
                    '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <strong>INGREDIENTS COMPOSITION</strong>
                                </p>
                                <p>
                                    Active ingredients in each capsule
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                    <strong>EACH CAPSULE CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Fish Oil – Natural</p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p style="padding-left: 30px;">Equiv. Eicosapentaenoic acid</p>
                            </td>
                            <td valign="top" width="136">
                                <p>90 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p style="padding-left: 30px;">Equiv. Docosahaxaenoic acid</p>
                            </td>
                            <td valign="top" width="136">
                                <p>60 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p>
                                    Vegetable oil phytosterol esters (Plant Sterols)
                                </p>
                            </td>
                            <td valign="top" width="136">
                                <p>500 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Gelatin</p>
                                <p>Vanillin</p>
                                <p>Glycerol</p>
                                <p>Titanium oxide</p>
                                <p>Iron oxide red</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-120s/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-120s/cmi/arabic" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-120s/cmi/spanish" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-120s/cmi/russian" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-120s/cmi/japanese" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-120s/cmi/french" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-120s/cmi/chinese" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-120s/cmi/italian" target="_blank">Traduzione italiana</a>
                    </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Dairy Free
                </p>
                ',
                'price_retail' => 45.41,
                'price_wholesale' => 29.95,
                'image_path' => '/img/products/bioclean_epa_dha_plant_sterols_120s/bioclean_epadha_plant_sterols_120s.png',
                'thumb_image_path' => '/img/products/bioclean_epa_dha_plant_sterols_120s/thumb_bioclean_epadha_plant_sterols_120s.png',
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 60s',
                'austl_number' => '261256',
                'product_name' => 'BioClean EPA:DHA + Plant Sterols 60s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">BioClean EPA:DHA + Plant Sterols 60s</h4>
                <p>
                    BioClean EPA:DHA + Plant Sterols is a scientifically formulated combination of Omega-3 Fatty Acids
                    and Plant Sterols targeted to support healthy cholesterol levels and cardiovascular health.
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
                    <strong>
                        BioClean EPA:DHA + Plant Sterols is a scientifically formulated combination of Omega-3 Fatty
                        Acids and Plant Sterols targeted to support healthy cholesterol levels and cardiovascular health.
                    </strong>
                </p>
                <p>
                    Clinical evidence has shown that a combination of Omega-3 Fatty Acids and Plant Sterols reduces
                    serum LDL cholesterol and triglyceride levels, inducing shifts in the lipoprotein distribution
                    that may provide additional cardiovascular benefits than either nutrient taken alone.
                    Omega-3 essential Fatty Acids stabilise the electrical activity of cardiac myocytes, support
                    membrane fluidity and integrity of blood vessels.  Combined with Plant Sterols this formulation
                    helps maintain healthy blood cholesterol and triglyceride levels in healthy individuals.
                </p>
                ',
                'practitioner_summary' =>
                    "
                    <strong>STANDARD INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>May assist in the maintenance of cholesterol within the normal/healthy range in healthy individuals and improve the LDL:HDL ratio.</li>
                            <li>May assist in the maintenance of cholesterol within the normal range in healthy individuals.</li>
                            <li>May assist in the maintenance of normal/healthy cholesterol levels in healthy individuals.</li>
                            <li>May help to reduce intestinal absorption of cholesterol from dietary sources.</li>
                            <li>May assist in the maintenance of a normal/healthy LDL:HDL cholesterol ratio.</li>
                        </ul>
                    </p>

                    <strong>SPECIFIC INDICATIONS</strong>

                    <p>
                        <ul>
                            <li>Vegetable oil phytosterol esters (plant sterols) may help maintain normal healthy cholesterol levels in healthy individuals.</li>
                            <li>Vegetable oil phytosterol esters (plant sterols) may assist in the improvement of the LDL:HDL ratio as well as reducing oxidation of LDL cholesterol.</li>
                            <li>Vegetable oil phytosterol esters (plant sterols) may help reduce intestinal absorption of cholesterol from dietary sources.</li>
                            <li>Contains Omega-3 triglyceride essential fatty acids which may support healthy function of the cardiovascular system.</li>
                            <li>Omega-3 fatty acids stabilise the electrical activity of cardiac myocytes by inhibiting sarcolemmal ion channels, resulting in a prolonged relative refractory period.</li>
                            <li>Omega-3 fatty acids support healthy cardiovascular and endothelial function in healthy individuals.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 500 mg of omega 3 per day to maintain healthy cardiovascular function in healthy individuals.</li>
                            <li>The Australian Heart Foundation Position Statement recommends 1000 mg per day omega 3 oils in those with documented heart conditions.</li>
                            <li>Omega-3 fatty acids are incorporated into cell membranes, and increasing the amount of polyunsaturated fatty acids in the membranes increases its fluidity and deformability.</li>
                            <li>Omega-3 fatty acids are essential because they are not synthesised by the body and must be obtained through diet or supplementation.</li>
                            <li>Omega 3 fatty acids support healthy cholesterol and triglyceride levels in healthy individuals.</li>
                            <li>Omega 3 fatty acids help maintain normal blood coagulation function in healthy individuals .</li>
                            <li>Omega 3 fatty acids may result in a favourable change in high density lipoprotein (HDL) levels in healthy individuals.</li>
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
                        <ul>
                            <li>Not recommended for use by pregnant and lactating women.<li>
                            <li>There is no benefit from taking more than 3g/day of phytosterols from all sources.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
                        </ul>
                    </p>
                ",
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Vitetta L, Sali A.  Omega–3 Fatty Acids PUFA. PART I. <em>J Comp Med</em> 2006; 5(6):52-59.</li>
                    <li>Jain AP, et al. Omega-3 fatty acids and cardiovascular disease. <em>Eur Rev Med Pharmacol Sci</em> 2015; 19:441-445.</li>
                    <li>Djoussé L, et al. Fish consumption, omega-3 fatty acids and risk of heart failure: a meta-analysis. <em>Clin Nutr</em> 2012; 31(6):846-53.</li>
                    <li>Marik PE, Varon J. Omega-3 dietary supplements and the risk of cardiovascular events: a systematic review. <em>Clin Cardiol</em> 2009; 32(7):365-72.</li>
                    <li>Lopez–Garcia E, Schulze MB, Manson JE, etal. Consumption of (n-3) fatty acids is related to plasma biomarkers of inflammation and endothelial activation in women. <em>J Nutr</em> 2004; 134(7):1806–11.</li>
                    <li>Stipanuk, Martha H. Biochemical Physiological and Molecular Aspects of Human Nutrition. Saunders Publisher. 2nd Edition. Pp24-25. 2006.</li>
                    <li>Gylling H, Simonen P. Phytosterols, Phytostanols, and Lipoprotein Metabolism. <em>Nutrients</em> 2015; 7(9):7965-77.</li>
                    <li>Plat J, et al. Mechanisms underlying the health benefits of plant sterol and stanol ester consumption. <em>J AOAC Int</em> 2015; 98(3):697-700.</li>
                    <li>Plat J, et al. A plant stanol yogurt drink alone or combined with a low-dose statin lowers serum triacylglycerol and non-HDL cholesterol in metabolic syndrome patients. <em>J Nutr</em> 2009; 139(6):1143-1149.</li>
                    <li>Plat J, et al. Protective role of plant sterol and stanol esters in liver inflammation: insights from mice and humans. <em>PLoS ONE</em> 2014; 9(1): e110758.</li>
                    <li>Katan MB, et al. Efficacy and safety of plant stanols and sterols in the management of blood cholesterol levels. <em>Mayo Clin Proc</em> 2003; 78(8):965-78.</li>
                    <li>Abumweis SS, Barake R, Jones PJ. Plant sterols/stanols as cholesterol lowering agents: A meta-analysis of randomized controlled trials. <em>Food Nutr Res</em> 2008;52.</li>
                    <li>Ras RT, et al. Low doses of Eicosapentaenoic acid and Docosahexaenoic acid from fish oil dose-dependantly decrease serum triglyceride concentrations in the presence of plant sterols in hypercholesterolemic men and women. <em>J Nutr </em> 2014; 144:1564-1570.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Consuming Fish Oils and Plant Sterols is likely well tolerated by most people but may cause minor side
                    effects. Your patients should not be alarmed by this list of possible side effects as they may not
                    experience any of them, but as their healthcare practitioner symptom should be monitored:
                </p>
                <p>
                    <ul>
                        <li>Belching</li>
                        <li>Bad breath (refrigeration of fish oils or taking them with meals helps to prevent this)</li>
                        <li>May reduce blood clotting when taking more than 3 g /day of fish oils</li>
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
                    Take two (2) capsules, twice per day, or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/bioclean_epa_dha_plant_sterols_60s/2partcap.png">
                </div>
                ',
                'ingredients' =>
                    '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <strong>INGREDIENTS COMPOSITION</strong>
                                </p>
                                <p>
                                    Active ingredients in each capsule
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                    <strong>EACH CAPSULE CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Fish Oil – Natural</p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p style="padding-left: 30px;">Equiv. Eicosapentaenoic acid</p>
                            </td>
                            <td valign="top" width="136">
                                <p>90 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p style="padding-left: 30px;">Equiv. Docosahaxaenoic acid</p>
                            </td>
                            <td valign="top" width="136">
                                <p>60 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" width="273">
                                <p>
                                    Vegetable oil phytosterol esters (Plant Sterols)
                                </p>
                            </td>
                            <td valign="top" width="136">
                                <p>500 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Gelatin</p>
                                <p>Vanillin</p>
                                <p>Glycerol</p>
                                <p>Titanium oxide</p>
                                <p>Iron oxide red</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-60s/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-60s/cmi/arabic" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-60s/cmi/spanish" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-60s/cmi/russian" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-60s/cmi/japanese" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-60s/cmi/french" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-60s/cmi/chinese" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioclean-epa-dha-plant-sterols-60s/cmi/italian" target="_blank">Traduzione italiana</a>
                    </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Dairy Free
                </p>
                ',
                'price_retail' => 25.41,
                'price_wholesale' => 16.95,
                'image_path' => '/img/products/bioclean_epa_dha_plant_sterols_60s/bioclean_epadha_plant_sterols_60s.png',
                'thumb_image_path' => '/img/products/bioclean_epa_dha_plant_sterols_60s/thumb_bioclean_epadha_plant_sterols_60s.png',
            ],
            [
                'product_name_index' => 'Biotic Jnr.',
                'austl_number' => '239097',
                'product_name' => 'Biotic Jnr.&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Biotic Jnr.&trade;</h4>
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
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Relief or treatment of diarrhoea.</li>
                        <li>Helps maintain healthy digestive function.</li>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>Relief of the symptoms of eczema.</li>
                        <li>May assist in the management of allergies.</li>
                        <li>May assist in the management of eczema.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Enteral supplementation of multi-strain probiotics have shown to decrease the occurrence of necrotising enterocolitis in preterm infants.</li>
                        <li>Clinical research demonstrates Lactoferrin alone or in combination with Lactobacillus rhamnosus decreases the occurrence of necrotizing enterocolitis in preterm infants.</li>
                        <li>Supports a healthy immune system.</li>
                        <li>Helps to maintain immune function.</li>
                        <li>Supports and/or assists with a healthy gastrointestinal microbial profile.</li>
                        <li>Lactoferrin is naturally found in colostrum and human milk and is a component of the innate immune response providing broad-spectrum anti-microbial and anti-viral activity.</li>
                        <li>The probiotic species have demonstrated ability to develop and maintain healthy digestive function, growth and immunological tolerance that may assist in the management of allergies including eczema.</li>
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
                    <ul>
                        <li>If diarrhoea persists for more than 6 hours in infants under 6 months, 12 hours in children under 3 years, 24 hours in children aged 3-6 years or 48 hours in adults and children over 6 years, seek medical advice.</li>
                        <li>Derived from cows milk.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>

               
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Crane F. Biochemical functions of CoQ10. <em>J Am Coll Nutr</em> 2001;20:591-598.</li>
                    <li>Kon M et al. Reducing exercise-induced muscular injury in Kendo athletes with supplementation of CoQ10. <em>Br Nutr</em> 2008;100:903-909.</li>
                    <li>Giuseppe C et al. Effect of CoQ10 on myopathic symptoms in patients treated with statins. <em>Am J Cardiol</em> 2007;99:1409-1412. </li>
                    <li>Ishizuka A et al. Effects of administration of Bifidobacterium animalis ssp. lactis GCL2505 on defecation frequency and bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91. </li>
                    <li>de Vrese M & Schrezenmeir J. Probiotics, prebiotics, and synbiotics. <em>Adv Biochem Eng Biotechnol</em> 2008;111:1-66. </li>
                    <li>Agarwal R et al. Pathogenic role of magnesium deficiency in ophthalmic diseases. <em>Biometals</em> 2013 [Epub ahead of print].</li>
                    <li>Dongarra L et al. Mucosal immunology and probiotics. <em>Curr Allergy Asthma Rep</em> 2013;13:19-26. </li>
                    <li>Shambaugh GE. Pyrimidine biosynthesis. <em>AJCN</em> 1979;32:1290 –1297.</li>
                    <li>Traut TW, Jones ME. Uracil metabolism--UMP synthesis from orotic acid or uridine and conversion of uracil to beta-alanine: enzymes and cDNAs. <em>Prog Nucleic Acids Res Mol Biol</em> 1996;53:1-78.</li>
                    <li>Moyer JD, Henderson JF. Salvage of uridine in the mouse. Effect of uridine phosphorylase pre-treatment. <em>Biochem Pharmacol</em> 1985;34:101–105.</li>
                    <li>Löffler M, Fairbanks LD, Zameitat E, Marinaki AM, Simmonds HA. Pyrimidine pathways in health and disease. <em>Trends Mol Med</em> 2005;11(9):430-7.</li>
                    <li>Fuke C, Krikorian SA, Couris RR. Coenzyme Q10: a review of essential functions and clinical trials. <em>US Pharmacist</em> 2000;28-41.</li>
                    <li>Hodgson JM, Watts GF, Playford DA, Burke V, Croft KD. Coenzyme Q10 improves blood pressure and glycaemic control: a controlled trial in subjects with type 2 diabetes. <em>Eur J Clin Nutr</em> 2002;56:1137-42.</li>
                    <li>Langsjoen PH, Langsjoen AM. The clinical use of HMG CoA-reductase inhibitors and the associated depletion of coenzyme Q10. A review of animal and human publications. <em>Biofactors</em> 2003;18:101-11.</li>
                    <li>Vitetta L, Manuel R, Zhou JY, et al. The overarching influence of the gut microbiome on end-organ function: the role of live probiotic cultures. <em>Pharmaceuticals (Basel)</em> 2014;7(9):954-89.</li>
                    <li>Morelli L, Capurso L. FAO/WHO Guidelines on Probiotics: 10 years on. <em>J Clin Gastroenterol</em> 2012;46(1): S1-S2.</li>
                    <li>Timmerman HM, Koning CJ, Mulder L, Rombouts FM, Beynen AC: Monostrain, multistrain and multispecies probiotics--A comparison of functionality and efficacy. <em>Int J Food Microbiol</em> 2004;96:219-233.</li>
                    <li>Vitetta L, Briskey D, Hayes E, Shing C, Peake J: A review of the pharmacobiotic regulation of gastrointestinal inflammation by probiotics, commensal bacteria and prebiotics. <em>Inflammopharmacology</em> 2012;20:251-266.</li>
                </ol>

                ',
                'side_effects' =>
                    '
                <p>
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                </p>
                <p>
                    If symptoms persist parents should consult their healthcare practitioner. If diarrhoea persists for more than 6 hours in infants under 6 months; 12 hours in children under 3 years; 24 hours in children aged 3 - 6 years or 48 hours in children over 6 years and adults, seek medical advice.
                </p>
                <p>
                Lactoferrin in Biotic Jnr.™ is derived from cow\'s milk and contains less than 0.1% Lactose.
                </p>
                <p>
                    You can also refer to the CMI for this product for symptoms and side effects.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    Some medicines may interfere with Biotic Jnr.&trade;. These include:
                    <li>Antibiotics</li>
                </p>
                
                
                ',
                'dosage_information' =>
                    '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Add 500 mg of powder (1 scoop) to liquid or solid foods, one (1) to two (2) times per day or as directed
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
                                <p>Lactoferrin</p>
                            </td>
                            <td width="136" valign="top">
                                <p>50 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                *CFU: Colony Forming Units
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Inulin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/biotic-jnr/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/biotic-jnr/cmi/arabic" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/biotic-jnr/cmi/spanish" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/biotic-jnr/cmi/russian" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/biotic-jnr/cmi/japanese" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/biotic-jnr/cmi/french" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/biotic-jnr/cmi/chinese" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/biotic-jnr/cmi/traditional_chinese" target="_blank">中文翻譯</a>
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
                    Refrigerate to maintain stability
                </p>
                ',
                'side_effects' =>
                    "
                <p>
                   Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually
                   temporary and can be relieved by reducing the dose.
                </p>
                <br>
                <p>
                   If symptoms persist parents should consult their healthcare practitioner. If diarrhoea persists for
                   more than 6 hours in infants under 6 months; 12 hours in children under 3 years; 24 hours in children
                   aged 3 - 6 years or 48 hours in children over 6 years and adults, seek medical advice.
                </p>
                <br>
                <p>
                    Lactoferrin in Biotic Jnr.™ is derived from cow's milk and contains less than 0.1% Lactose.
                </p>
                <br>
                <p>
                    You can also refer to the CMI for this product for symptoms and side-effects.
                </p>
                ",
                'price_retail' => 37.73,
                'price_wholesale' => 24.95,
                'image_path' => '/img/products/biotic_jnr/biotic_jnr.png',
                'thumb_image_path' => '/img/products/biotic_jnr/thumb_biotic_jnr.png',
            ],
            [
                'product_name_index' => "BioticNatal",
                'austl_number' => '260283',
                'product_name' => 'BioticNatal&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">BioticNatal&trade;</h4>
                <p>
                    BioticNatal&trade; is intended for both the pregnant and breast feeding mother aiding to support and maintain
                    the integrity and function of her own GIT and her immune system. BioticNatal&trade; may also
                    support breast milk colonisation of beneficial bacterial species that can be transferred to the breast fed infant.
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
                    BioticNatal&trade; is formulated according to current scientific evidence that demonstrates the vital
                    role of the gastrointestinal (GIT) microbiome on the health and development of newborn infants. BioticNatal&trade;
                    is intended for both the pregnant and breast feeding mother aiding to support and maintain the integrity and function
                    of her own GIT and her immune system. BioticNatal™ may also be indicated to provide support for breast
                    milk colonisation of beneficial bacterial species that can be transferred to the breast fed infant. Lactoferrin is
                    a naturally occurring milk protein found in breast milk, providing antibacterial, antiviral and antiparasitic activity,
                    protecting both the mother and the infant.
                </p>

                ',
                'practitioner_summary' =>
                    '
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being. </li>
                        <li>May assist in the management of allergies.</li>
                        <li>Relief or treatment of diarrhoea. </li>
                        <li>May assist in the management of eczema. </li>
                        <li>Aids digestion.</li>
                        <li>Treatment of mild digestive disorders. </li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>May help to mature and maintain healthy immune function.</li>
                        <li>Supports and/or assists with a healthy gastrointestinal microbial profile. </li>
                        <li>Lactoferrin is naturally found in colostrum and human milk and is a component of the innate immune response providing broad-spectrum anti-microbial and anti-viral activity. </li>
                        <li>The placental microbiome is closely related to that of the mother\'s microbiome.</li>
                        <li>Commensal bacteria found in breast milk include species from the Streptococcus, Bifidobacterium and Lactobacillus genera. </li>
                        <li>At least some of the bacteria present in the maternal gut is thought to reach the mammary gland through an endogenous route, called the enteromammary pathway and likely contributes to the bacterial composition of breast milk. </li>
                        <li>Saccharomyces boulardii may help to support intestinal secretory IgA release by the host\'s immune system.</li>
                        <li>Saccharomyces boulardii demonstrates probiotic activity assisting with the maintenance of healthy commensal bacterial growth and viability. </li>
                        <li>Saccharomyces boulardii may help to mediate inflammatory mediators in the gastrointestinal tract. </li>
                        <li>Saccharomyces boulardii produces metabolites that have a trophic effect on the intestinal mucosa.</li>
                        <li>Lactoferrin in combination with Lactobacillus rhamnosus may assist with a healthy gastrointestinal tract in infants. </li>
                        <li>A multispecies probiotic may assist to maintain healthy digestive function, growth, development and immunological tolerance that may assist in the management of atopic conditions. </li>
                        <li>Saccharomyces boulardii may relieve the severity and duration of diarrhoea due to various triggers in children and adults. </li>
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
                    <ul>
                        <li>If diarrhoea persists for more than 6 hours in infants under 6 months; 12 hours in children under 3 years; 24 hours in children aged 3 - 6 years or 48 hours in children over 6 years and adults, seek medical advice.</li>
                        <li>Derived from cows milk.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>

               
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Fernandez L, Langa S, Martin V, at al. The human milk microbiota: origin and potential roles in health and disease. <em>Pharmacol Res</em> 2013;69:1-10.</li>
                    <li>Gritz EC, Bhandari V. The human neonatal gut microbiome: a brief review. <em>Front Pediatr</em> 2015;3:1-12.</li>
                    <li>Aagaard K, Ma J, Antony KM, et al. The placenta harbors a unique microbiome. <em>Sci Transl Med</em> 2014;6:254lr3.</li>
                    <li>Bergmann H, Rodriguez JM, Slaminen S, et al. Probiotics in human milk and probiotic supplementation in infant nutrition: a workshop report. <em>Br J Nutr</em> 2014;112:1119-1128.</li>
                    <li>Sanz Y. Gut microbiotand probiotics in maternal and infant health. <em>Am J Clin Nutr</em> 2011;94(suppl):2000S-5S.</li>
                    <li>Gueimonde M, Sakata S, Killiomaki M, et al. Effect of maternal consumption of Lactobacillus GG on transfer and establishment of fecal bifidobacterial microbiota in neonates. <em>J Pediatr Gastroenterol Nutr</em> 2006;42:166-70.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Probiotics and lactoferrin are well tolerated during pregnancy. Gastrointestinal symptoms such as bloating and discomfort may occur but is temporary.
                </p>
                <p>
                    You can also refer to the CMI for this product for symptoms and side effects.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    Antibiotics will reduce the efficacy of probiotics. If taking antibiotics, take 2 hours away from probiotics.
                </p>
                ',
                'dosage_information' =>
                    '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Take one (1) capsule, one (1) to two (2) times daily, or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/bioticnatal/2partcap.png">
                </div>
                ',
                'ingredients' =>
                    '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <strong>Active Ingredients</strong>
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                    <strong>Each vegetarian capsule contains:</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Bifidobacterium infantis</em> (Med 14)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>2 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Bifidobacterium longum</em> (Med 15)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>2 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Lactobacillus rhamnosus</em> (Med 26)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>2 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Streptococcus thermophilus</em> (Med 51)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>2 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Saccharomyces cerevisiae ssp. boulardii</em> (Med 41)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>2 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Lactoferrin</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>100 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><strong>Total</strong></p>
                            </td>
                            <td width="136" valign="top">
                                <p><strong>10 billion CFU*</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                *CFU: Colony Forming Units
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Cellulose-microcrystalline</p>
                                <p>Silica</p>
                                <p>Magnesium Stearate</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/bioticnatal/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioticnatal/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioticnatal/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioticnatal/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioticnatal/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioticnatal/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioticnatal/cmi/chinese"target="_blank">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/bioticnatal/cmi/italian"target="_blank">Traduzione italiana</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Casein Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
                'price_retail' => 53.93,
                'price_wholesale' => 35.95,
                'image_path' => '/img/products/bioticnatal/bioticnatal.jpg',
                'thumb_image_path' => '/img/products/bioticnatal/bioticnatal_thumb.jpg',
                'slug' => 'bioticnatal'
            ],
            [
                'product_name_index' => "Enbiotic 60's",
                'austl_number' => '227586',
                'product_name' => 'Enbiotic&trade; 60&#39;s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Enbiotic&trade; 60&#39;s</h4>
                <p>
                    <strong>Australian Innovation Patent No. 2015100952</strong>
                </p>
                <p>
                    EnBiotic&trade; is a high quality, high strength digestive enzyme and probiotic combination developed to
                    assist with digestive function and nutrient absorption.
                </p>
                ',
                'patent' =>
                    '
                <p>
                    <strong>Australian Innovation Patent No. 2015100952</strong>
                </p>
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
                'general_summary' =>
                    '
                <p>
                    EnBiotic&trade; is a digestive enzyme and multi-species probiotic formulation. EnBiotic&trade;
                    contains 241.6 mg of plant and fungal-derived digestive enzymes and 8.75 billion CFU
                    (colony forming units) of bacteria per capsule. This combination may support digestive function of
                    dietary fats, proteins and carbohydrates and assist in the management of indigestion, altered bowel
                    habits and gastrointestinal discomfort.
                </p>
                ',
                'practitioner_summary' =>
                    '
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Helps maintain healthy digestive function.</li>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>Aids digestion.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Relieves gastrointestinal discomfort.</li>
                        <li>Aspergillus oryzae (fungal) - derived amylase enzymes may assist in the digestion of dietary carbohydrates.</li>
                        <li>Rhizopus oryzae (fungal) - derived lipase enzymes may assist in the digestion of dietary lipids (fats).</li>
                        <li>Aspergillus oryzae (fungal) - derived protease enzymes may assist in the digestion of dietary proteins.</li>
                        <li>Supports skin health.</li>
                        <li>Supports and assists with a healthy gastrointestinal microbial profile.</li>
                        <li>Ananas comosus and Carica papaya (plant) - derived proteolytic enzymes may assist with the digestion of dietary proteins Supports healthy immune function.</li>
                        <li>Helps to maintain healthy skin.</li>
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
                    <ul>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>

               
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Roxas M. The role of enzyme supplementation in digestive disorders. <em>Altern Med Rev</em> 2008;13(4):307-14.</li>
                    <li>Rachman B. Unique features and application of non-animal derived enzymes. <em>Clin Nutr Insights</em> 1997;5:1-4.</li>
                    <li>Jones ML, et al. Emerging science of the human microbiome. <em>Gut Microbes</em> 2014;5(4). Epub ahead of print.</li>
                    <li>Yoon JS, et al. Effect of multispecies probiotics on irritable bowel syndrome: a randomized, double-blind, placebo controlled trial. <em>J Gastro Hepatol</em> 2013;29:52-59.</li>
                    <li>Vitetta L, et al. Probiotic, prebiotics and the gastrointestinal tract in health and disease. <em>Inflammopharmacology</em> 2014;22:135-54.</li>
                    <li>Ishizuka A, et al. Effects of administration of Bifidobacterium animalis subsp. Lactis GCL2505 on defecation frequency and Bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91.</li>
                    <li>Machida M, Yamada O, Gomi K et al. Genomics of Aspergillus oryzae: learning from the history of Koji Mold and exploration of its future. <em>DNA Research</em> 2008;15:173-183.</li>
                    <li>Salah RB, Mosbah H, Fendri A et al. Biochemical and molecular characterization of a lipase produced by Rhizopus oryzae. <em>FEMS Micrbiolo Lett</em> 2006;260:241-8.</li>
                    <li>Alariya SS, Sethi S, Gupta S, et al. Amylase activity of a starch degrading bacteria isolated from soil. <em>Arch Appl Sci Res</em> 2013;5:15-24.</li>
                    <li>Digestive System (www.teachers.concordiashanghai.org). accessed 20 Sep 2014.</li>
                    <li>Roxas M. The role of enzyme supplementation in digestive disorders. <em>Alt Med Rev</em> 2008;13:307-314.</li>
                    <li>Rachman B. Unique features and application of non-animal derived enzymes. <em>Clin Nutr Insights</em> 1997;5:1-4.</li>
                    <li>Ishizuka A et al. Effects of administration of Bifidobacterium animalis ssp. lactis GCL2505 on defecation frequency and bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91.</li>
                    <li>Del Piano M et al. The use of probiotics in healthy volunteers with evacuation disorders and hard stools. <em>J Clin Gastroenterol</em> 2010;44:30-34.</li>
                    <li>Vitetta L et al. Probiotic, prebiotics and the gastrointestinal tract in health and disease. <em>Inflammopharmacology</em> 2014;22:135-54.</li>
                    <li>Yoon S et al. Effect of multispecies probiotics on irritable bowel syndrome: a randomised, double-blind, placebo controlled trial. <em>J Gastro & Hepatol</em> 2013;29:52-59. </li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    Antibiotics will reduce the efficacy of probiotics. If talking antibiotics, take 2 hours away from probiotics.
                </p>
                ',
                'dosage_information' =>
                    '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Take two (2) capsules with water with each meal, up to three (3) times per day, or as directed by
                    your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/enbiotic_60s/2partcap_4_3_1.png">
                </div>
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
                                    <strong>EACH VEGETARIAN CAPSULE CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Lactobacillus acidophilus (Med 27 and Med 28)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>5 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Lactobacillus rhamnosus (Med 26)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>2.5 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bifidobacterium bifidum (Med 11)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>125 million</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bifidobacterium animalis ssp. lactis (Med13)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1.125 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                <strong>Total</strong>
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                <strong>8.75 billion CFU*</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Amylase (from Aspergillus oryzae) </p>
                            </td>
                            <td width="136" valign="top">
                                <p>165 mg (750 DU)</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Protease - acid / alkaline active (from Aspergillus oryzae)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>11 mg (3,790 HUT)</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">Lipase (from Rhizopus oryzae)</td>
                            <td width="136" valign="top">16.5 mg (525 LipU)</td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">Bromelain (from Ananas comosus)</td>
                            <td width="136" valign="top">9.9mg </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">Papain (from Carica papaya) </td>
                            <td width="136" valign="top">39.2 mg </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                *CFU: Colony Forming Units
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Maltodextrin</p>
                                <p>Silica</p>
                                <p>Magnesium stearate</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/enbiotic-60s/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/enbiotic-60s/cmi/arabic" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/enbiotic-60s/cmi/spanish" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/enbiotic-60s/cmi/russian" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/enbiotic-60s/cmi/japanese" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/enbiotic-60s/cmi/french" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/enbiotic-60s/cmi/chinese" target="_blank">中文翻译</a>
                    </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Vegetarian Friendly
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 41.86,
                'price_wholesale' => 27.91,
                'image_path' => '/img/products/enbiotic_60s/enbiotic-60s_1.jpg',
                'thumb_image_path' => '/img/products/enbiotic_60s/thumb_enbiotic-60s_1.jpg',
            ],
            [
                'product_name_index' => 'GastroDaily',
                'austl_number' => '242372',
                'product_name' => 'GastroDaily&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">GastroDaily&trade;</h4>
                <p>
                    <strong>Australian Innovation Patent No. 2016100499</strong>
                </p>
                <p>
                    GastroDaily&trade; is scientifically formulated to assist in supporting healthy gastrointestinal
                    and natural immunological function and to help relieve symptoms of medically diagnosed Irritable
                    Bowel Syndrome.
                </p>
                ',
                'patent' =>
                    '
                <p>
                    <strong>Australian Innovation Patent No. 2016100499</strong>
                </p>
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
                'general_summary' =>
                    '
                <p>
                    GastroDaily&trade; is scientifically formulated to assist in supporting healthy gastrointestinal
                    and natural immunological function and to help relieve symptoms of medically diagnosed Irritable
                    Bowel Syndrome.
                </p>
                <p>
                    <em>Saccharomyces boulardii </em>is a beneficial yeast indicated for assisting with symptoms of
                    diarrhoea due to various triggers and supports a healthy gastrointestinal microbial profile.
                    ResistAid&trade; is a proprietary natural immune support ingredient from the Larch tree. It
                    consists of the soluble fiber Arabinogalactan and bioactive flavonoids with immune modulating
                    and prebiotic properties. L-Glutamine is an amino acid that is an important fuel for rapidly
                    dividing cells such as enterocytes, colonocytes and immune cells helping to decrease bacterial
                    translocation and help maintain healthy digestive function. Peppermint (<em>Mentha piperita</em>)
                    contains active chemical constituents that provide anti-emetic, anti-spasmodic &amp; anti-microbial
                    activity.
                </p>
                ',
                'practitioner_summary' =>
                    '
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Helps maintain healthy digestive function.</li>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>May assist in the management of medically diagnosed irritable bowel syndrome.</li>
                        <li>Relief or treatment of diarrhoea.</li>
                        <li>For the symptomatic relief of medically diagnosed irritable bowel syndrome.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Short-chain fatty acids produced from fermentation of Arabinogalactan (ResistAid&trade;) supports healthy immune function in healthy individuals.</li>
                        <li>Relieves gastrointestinal discomfort such as abdominal pain, bloating, gas and altered bowel habits.</li>
                        <li>ResistAid is a proprietary natural immune support ingredient. It consists of the soluble fibre Arabinogalactan and bioactive flavonoids with clinical evidence of immune modulating properties that may support healthy immune function via various mechanisms.</li>
                        <li>Arabinogalactan (ResistAid&trade;) is a prebiotic and produces short-chain fatty acids upon fermentation by gut bacteria, maintaining healthy colonic mucosal structure and function.</li>
                        <li>Saccharomyces boulardii is indicated for assisting with symptoms of diarrhoea due to various triggers and supports a healthy gastrointestinal microbial profile and healthy immune system in healthy individuals.</li>
                        <li>L-glutamine is an amino acid that improves trophism (nourishment and function) of enterocytes and colonocytes; enhances the immunological barrier due to its trophic action on the immune system and decreases bacterial translocation and so helps maintain healthy healthy digestive function.</li>
                        <li>Peppermint (Mentha piperita) contains active chemical constituents that provide antiemetic, antispasmodic and anti-microbial activity.</li>
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
                    <ul>
                        <li>If diarrhoea persists for more than 6 hours in infants under 6 months, 12 hours in children under 3 years, 24 hours in children aged 3 - 6 years or 48 hours in children over 6 years and adults, seek medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>

               
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>McFarland L. Systematic review and meta-analysis of Saccharomyces boulardii in adult patients. <em>World J Gastroenterol</em>2010;16:2202. </li>
                    <li>Pineton de Chambrun G, et al. A randomised clinical trial with Saccharomyces cerevisiae versus placebo in Irritable Bowel Syndrome. <em>Dig and Liver Dis</em> 2015;47:119.</li>
                    <li>Kelesidis T, Pothoulakis C. Efficacy and safety of the probiotic Saccharomyces boulardii for the prevention and therapy of gastrointestinal disorders. <em>Therap Adv Gastroenterol</em> 2012;5:111. </li>
                    <li>Udani JK, et al. Proprietary arabinogalactan extract increases antibody response to the pneumonia vaccine: a randomized double-blind, placebo-controlled pilot  study in health volunteers. <em>Nutr J</em> 2010;9:32.</li>
                    <li>Udani JK. Immunomodulatory effects of ResistAid<sup>TM</sup>: A randomized, double-blind, placebo-controlled, multi dose study. <em>J Am Coll Nutr</em> 2013;32:331. </li>
                    <li>Grube B, et al. Tolerability of a Proprietary Larch Arabinogalactan Extract: a randomized, double-blind, placebo-controlled clinical trial in healthy subjects. <em>Food Nutr Sci</em> 2012;3:1533.</li>
                    <li>Garcia-de-Lorenzo A, et al. Clinical Evidence for the Enteral Nutritional Support with Glutamine: A Systematic Review. <em>Nutrition</em> 2003;19:9. </li>
                    <li>Neu J, et al. Intestinal mucosal defense system, Part 1. Consensus recommendation for immunonutrients. <em>J Pediatr</em> 2013;162:S56.</li>
                    <li>Gardiner P. Peppermint (Mentha piperita). <em>Longwood Herbal Task Force </em>2000;1-22.  </li>
                    <li>Wall GC, et al. Irritable bowel syndrome: a concise review of current treatment concepts. <em>World J Gastroenterol</em> 2014;20:8796.</li>
                    <li>Moco S, etr al. Metabolomics view on gut microbiome modulation by polyphenol rich foods. <em>J Proteome Res</em> 2012;11:4781.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    Some medicines may interfere with GastroDaily&trade;. These include:
                </p>

                <p>
                    <ul>
                        <li>Antibiotics</li>
                        <li>Immunosuppressant Drugs</li>
                    </ul>
                </p>
                ',
                'dosage_information' =>
                    '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Mix one 6 g dose (1 scoop) into 250 mL of cold water, stir well and consume immediately. Take one
                    (1) to two (2) times per day before meals or as directed by your healthcare practitioner.
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
                                <p><em>Saccharomyces cerevisiae ssp. boulardii</em> (Med 41)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>5 million CFU*</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>L-Glutamine</p>
                            </td>
                            <td width="136" valign="top">
                                <p>2g</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Arabinogalactan (ResistAid&trade;)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>2g</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Peppermint leaf dry</p>
                            </td>
                            <td width="136" valign="top">
                                <p>100mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="padding-left: 30px">Equiv. peppermint dry&nbsp; &nbsp; &nbsp;&nbsp;</p>
                            </td>
                            <td width="136" valign="top">
                                <p>500mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                *CFU: Colony Forming Units
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Silica</p>
                                <p>Cocoa Powder</p>
                                <p>Stevia</p>
                                <p>Chocolate flavour</p>
                                <p>Peppermint flavour</p>
                            </td>
                        </tr>
                        </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/gastrodaily/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/gastrodaily/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/gastrodaily/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/gastrodaily/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/gastrodaily/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/gastrodaily/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/gastrodaily/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten & Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for vegetarians
                </p>
                <p class="medlab_product_content_sub_title">
                    No artificial colours, flavours or sweeteners
                </p>
                ',
                'price_retail' => 42.86,
                'price_wholesale' => 28.57,
                'image_path' => '/img/products/gastrodaily/gastro.png',
                'thumb_image_path' => '/img/products/gastrodaily/thumb_gastro.png',
            ],
            [
                'product_name_index' => "Manuka-C 105g",
                'austl_number' => '274057',
                'product_name' => 'Manuka-C&trade; 105g',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Manuka-C&trade; 105g</small></h4>
                <p>
                    Manuka-C&trade; is scientifically formulated to support optimal immune system function. It includes evidence-based
                    ingredients containing a blend of three ascorbates combined with glutathione and Manuka honey powder.
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
                        <li>For the symptomatic relief of upper respiratory tract infections.</li>
                        <li>Treatment of symptoms of mild infections of upper respiratory tract.</li>
                        <li>Relief of symptoms of mild upper respiratory infections.</li>
                        <li>May assist in the management of upper respiratory tract infections.</li>
                        <li>For the symptomatic relief of recurrent upper respiratory tract infections.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>May assist in supporting and maintaining healthy immune function.</li>
                        <li>The combination of vitamin C and zinc supports healthy connective tissue function.</li>
                        <li>Vitamin C assists with normal iron metabolism.</li>
                        <li>Requirements for vitamin C may be increased during times of stress.</li>
                        <li>Zinc may assist in the healing of minor skin wounds.</li>
                        <li>Vitamin C is a vital cofactor for several enzymatic reactions in the body.</li>
                        <li>Vitamin C is required for the antimicrobial activity of white blood cells.</li>
                        <li>Dehydroascorbic acid is immediately reduced to ascorbic acid upon entering the cell which is mediated by two major pathways; chemical reduction by glutathione and enzymatic reduction using glutaredoxin, a glutathione-dependent enzyme.</li>
                        <li>Glutathione is vital constituent of cells throughout the body, acting as a redox buffer and as a cofactor for signal transduction.</li>
                        <li>Honey has traditionally been used as a therapy to help heal wounds and conditions of the gut.</li>
                        <li>Honey is well documented to have anti-microbial, anti-viral and anti-fungal activity.</li>
                        <li>When exposed to bacteria, neutrophils oxidize extracellular ascorbic acid to form dehydroascorbic acid, which is transported into the neutrophil and rapidly reduced to ascorbic acid by the protein glutaredoxin. As a result of this recycling of extracellular ascorbic acid, the neutrophil internal concentration of ascorbic acid increases 10-fold.</li>
                        <li>Ascorbic acid is transported into the cell by sodium-dependent vitamin C transporters SVCT1 and SVCT2, one or both of which are found in most tissues. Dehydroascorbic acid is transported by glucose transporters GLUT1 and GLUT3, and, in insulin-sensitive tissues, also by GLUT4.</li>
                        <li>Neutrophils, monocytes and lymphocytes become saturated with vitamin C when dosed at 100 mg per day and demonstrate a concentration at least 14-fold higher than plasma vitamin C.</li>
                        <li>Bioavailability of vitamin C decreases with increasing dosage. Bioavailability is demonstrated to be complete at a dose of 200 mg daily whereas at higher doses at 1250 mg daily, bioavailability declines to less than 50%.</li>
                        <li>Vitamin C daily doses above 400 mg have no evident value as with increasing doses the bioavailability decreases and excess vitamin C is excreted in urine.</li>
                        <li>Plateau plasma vitamin C is close to maximum when dosed at 200 mg daily with plasma concentrations near saturation at 400 mg daily. Complete plasma saturation occurrs at 1000 mg daily but at the expense of decreased bioavailability increased urinary excretion.</li>
                        <li>At vitamin C doses of 1000 mg daily, urine uric acid and oxalate may become elevated.</li>
                        <li>At doses greater than 100 mg/day, plasma concentrations reach a plateau but at doses greater than 400 mg/day, further increases in plasma concentrations are minimal.</li>
                        <li>Tight control of plasma vitamin C levels are due to absorption (bioavailability), tissue transport, renal reabsorption and excretion and utilisation.</li>
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
                    <ul>
                        <li>Contains Manuka Honey.</li>
                        <li>Vitamin supplements should not replace a balanced diet.</li>
                        <li>Not recommended for use by pregnant and lactating women.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                        <li>Not suitable for infants under the age of twelve months. Adults only.</li>
                        <li>Not to be used in children under two years of age without medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
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
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-105g/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-105g/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-105g/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-105g/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-105g/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-105g/cmi/italian" target="_blank">Traduzione italiana</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-105g/cmi/chinese" target="_blank">中文翻译</a>
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
                'image_path' => '/img/products/manuka-c-105g/manuka-c-105g.png',
                'thumb_image_path' => '/img/products/manuka-c-105g/manuka-c-105g_thumb.png',
                'slug' => 'manuka-c-105g'
            ],
            [
                'product_name_index' => "Manuka-C 210g",
                'austl_number' => '274057',
                'product_name' => 'Manuka-C&trade; 210g',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Manuka-C&trade; 210g</small></h4>
                <p>
                    Manuka-C&trade; is scientifically formulated to support optimal immune system function. It includes evidence-based
                    ingredients containing a blend of three ascorbates combined with glutathione and Manuka honey powder.
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
                        <li>For the symptomatic relief of upper respiratory tract infections.</li>
                        <li>Treatment of symptoms of mild infections of upper respiratory tract.</li>
                        <li>Relief of symptoms of mild upper respiratory infections.</li>
                        <li>May assist in the management of upper respiratory tract infections.</li>
                        <li>For the symptomatic relief of recurrent upper respiratory tract infections.</li>
                    </ul>
                </p>

                <strong>SPECIFIC INDICATIONS</strong>

                <p>
                    <ul>
                        <li>May assist in supporting and maintaining healthy immune function.</li>
                        <li>The combination of vitamin C and zinc supports healthy connective tissue function.</li>
                        <li>Vitamin C assists with normal iron metabolism.</li>
                        <li>Requirements for vitamin C may be increased during times of stress.</li>
                        <li>Zinc may assist in the healing of minor skin wounds.</li>
                        <li>Vitamin C is a vital cofactor for several enzymatic reactions in the body.</li>
                        <li>Vitamin C is required for the antimicrobial activity of white blood cells.</li>
                        <li>Dehydroascorbic acid is immediately reduced to ascorbic acid upon entering the cell which is mediated by two major pathways; chemical reduction by glutathione and enzymatic reduction using glutaredoxin, a glutathione-dependent enzyme.</li>
                        <li>Glutathione is vital constituent of cells throughout the body, acting as a redox buffer and as a cofactor for signal transduction.</li>
                        <li>Honey has traditionally been used as a therapy to help heal wounds and conditions of the gut.</li>
                        <li>Honey is well documented to have anti-microbial, anti-viral and anti-fungal activity.</li>
                        <li>When exposed to bacteria, neutrophils oxidize extracellular ascorbic acid to form dehydroascorbic acid, which is transported into the neutrophil and rapidly reduced to ascorbic acid by the protein glutaredoxin. As a result of this recycling of extracellular ascorbic acid, the neutrophil internal concentration of ascorbic acid increases 10-fold.</li>
                        <li>Ascorbic acid is transported into the cell by sodium-dependent vitamin C transporters SVCT1 and SVCT2, one or both of which are found in most tissues. Dehydroascorbic acid is transported by glucose transporters GLUT1 and GLUT3, and, in insulin-sensitive tissues, also by GLUT4.</li>
                        <li>Neutrophils, monocytes and lymphocytes become saturated with vitamin C when dosed at 100 mg per day and demonstrate a concentration at least 14-fold higher than plasma vitamin C.</li>
                        <li>Bioavailability of vitamin C decreases with increasing dosage. Bioavailability is demonstrated to be complete at a dose of 200 mg daily whereas at higher doses at 1250 mg daily, bioavailability declines to less than 50%.</li>
                        <li>Vitamin C daily doses above 400 mg have no evident value as with increasing doses the bioavailability decreases and excess vitamin C is excreted in urine.</li>
                        <li>Plateau plasma vitamin C is close to maximum when dosed at 200 mg daily with plasma concentrations near saturation at 400 mg daily. Complete plasma saturation occurrs at 1000 mg daily but at the expense of decreased bioavailability increased urinary excretion.</li>
                        <li>At vitamin C doses of 1000 mg daily, urine uric acid and oxalate may become elevated.</li>
                        <li>At doses greater than 100 mg/day, plasma concentrations reach a plateau but at doses greater than 400 mg/day, further increases in plasma concentrations are minimal.</li>
                        <li>Tight control of plasma vitamin C levels are due to absorption (bioavailability), tissue transport, renal reabsorption and excretion and utilisation.</li>
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
                    <ul>
                        <li>Contains Manuka Honey.</li>
                        <li>Vitamin supplements should not replace a balanced diet.</li>
                        <li>Not recommended for use by pregnant and lactating women.</li>
                        <li>Not suitable for infants under the age of twelve months. Adults only.</li>
                        <li>Not to be used in children under two years of age without medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
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
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-210g/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-210g/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-210g/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-210g/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-210g/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-210g/cmi/italian" target="_blank">Traduzione italiana</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/manuka-c-210g/cmi/chinese" target="_blank">中文翻译</a>
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
                'image_path' => '/img/products/manuka-c-210g/manuka-c-210g.png',
                'thumb_image_path' => '/img/products/manuka-c-210g/manuka-c-210g_thumb.png',
                'slug' => 'manuka-c-210g'
            ],
            [
                'product_name_index' => "MultiBiotic 30's",
                'austl_number' => '227562',
                'product_name' => 'MultiBiotic&trade; 30&#39;s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">MultiBiotic&trade; 30&#39;s</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    MultiBiotic&trade; is formulated to target both the small and large bowel for gastrointestinal
                    microbial balance. MultiBiotic™ may assist in maintaining optimal gastrointestinal care and
                    immune function.
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
                    MultiBiotic&trade; is a multi-species probiotic that helps to support the natural balance of commensal
                    bacteria in the gastrointestinal tract (GIT). MultiBiotic&trade; is used to improve symptoms of medically
                    diagnosed Irritable Bowel Syndrome; support healthy immune function; restore GIT microbial balance
                    after certain medication use and to relieve gastrointestinal discomfort. MultiBiotic&trade; contains
                    21.075 billion CFU of bacteria per capsule, including Streptococcus, Lactobacillus and
                    Bifidobacterium species. These species are predominately found in the gastrointestinal tract.
                </p>
                ',
                'practitioner_summary' =>
                    '
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>Relief of symptoms of mild upper respiratory infections.</li>
                        <li>Relief or treatment of diarrhoea.</li>
                        <li>Helps maintain healthy digestive function.</li>
                        <li>For the symptomatic relief of medically diagnosed irritable bowel syndrome.</li>
                        <li>May assist in the management of medically diagnosed irritable bowel syndrome.</li>
                        <li>May assist in the maintenance of normal/healthy cholesterol levels in healthy individuals.</li>
                        <li>Aids digestion.</li>
                    </ul>

                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Relieves gastrointestinal discomfort.</li>
                        <li>Supports and/or assists with a healthy gastrointestinal microbial profile.</li>
                        <li>Supports a healthy immune system.</li>
                        <li>Helps to maintain healthy skin.</li>
                        <li>Supports skin health.</li>
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
                    <ul>
                        <li>If diarrhoea persists for more than 6 hours in infants under 6 months, 12 hours in children under 3 years, 24 hours in children aged 3-6 years or 48 hours in adults and children over 6 years, seek medical advice.</li>
                        <li>Not to be used in children under two years of age without medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Ishizuka A et al. Effects of administration of Bifidobacterium animalis ssp. lactis GCL2505 on defecation frequency and bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91.</li>
                    <li>de Vrese M & Schrezenmeir J. Probiotics, prebiotics, and synbiotics. <em>Adv Biochem Eng Biotechnol.</em> 2008;111:1-66.</li>
                    <li>Dongarra L et al. Mucosal immunology and probiotics. <em>Curr Allergy Asthma Rep</em> 2013;13:19-26.</li>
                    <li>Yoon S et al. Effect of multispecies probiotics on irritable bowel syndrome: a randomised, double-blind, placebo controlled trial. <em>J Gastro & Hepatol</em> 2013;29:52-59.</li>
                    <li>Vitetta L et al. Probiotic, prebiotics and the gastrointestinal tract in health and disease. <em>Inflammopharmacology</em> 2014;22:135-54. </li>
                    <li>Hao Q et al. Probiotics for preventing acute upper respiratory tract infections. <em>Cochrane Database of Systematic Reviews</em> 2011, Issue 9.</li>
                    <li>Guo Z et al. Influence of consumption of probiotics on the plasma lipid profile: A meta-analysis of randomised controlled trial. <em>Nutrition, Metabolism & Cardiovascular disease</em> 2011;21:844-850. </li>
                    <li>Jung W et al. Prospective, randomized, open-label trial comparing the safety, efficacy and tolerability of an acne treatment regimen with and without a probiotic supplement and minocycline in subjects with mild to moderate acne. <em>J Cutan Med Surg</em> 2013;17:114-22. </li>
                    <li>Drouault-Holowacz S, Bieuvelet S, Burckel A et al. A double blind randomized controlled trial of a probiotic combination in 100 patients with irritable bowel syndrome. <em>Gastroenterol Clin Biol</em> 2008; 32 (2): 147-52.</li>
                    <li>Ki Cha B, Mun Jung S, Hwan Choi C et al. The Effect of a Multispecies Probiotic Mixture on the Symptoms and Fecal Microbiota in Diarrhea-dominant Irritable Bowel Syndrome: A Randomized, Double-blind, Placebo-controlled Trial. <em>J Clin Gastroenterol</em> 2011 Dec 5.</li>
                    <li>Fuller R. Probiotics in man and animals. <em>J Appl Bacteriol</em> 1989; 66 (5): 365-78.</li>
                    <li>Dominguez-Bello G, Costello K, Contreras M et al. Delivery mode shapes the acquisition and structure of the initial microbiota across multiple body habitats in newborns. <em>PNAS</em> 2010; 107: 11971–5. </li>
                    <li>Vitetta L, Manuel R, Zhou JY et al. The Overarching Influence of the Gut Microbiome on End-Organ Function: The Role of Live Probiotic Cultures. <em>Pharmaceuticals</em> 2014;9:954-989.</li>
                    <li>Pepper J & Rosenfeld S. The emerging medical ecology of the human gut microbiome. <em>Trends Ecol Evol</em> 2012; 27 (7): 381-4.</li>
                    <li>Vitetta L & Alford H. The Pharmacobiotic Potential of the Gastrointestinal Tract Micro-Biometabolome-Probiotic Connect: A Brief Commentary. <em>Drug Development Research</em> 2013; 74: 353-359</li>
                    <li>Vitetta L, Briskey D, Hayes E, Shing, C & Peake J. Probiotics, Commensal Bacteria and the Pharmacobiotic Regulation of Gastrointestinal Inflammation. <em>Inflammapharmacology</em> 2012; 20 (5): 251-266.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    Some medicines may interfere with MultiBiotic&trade;. These include:
                </p>

                <p>
                    <ul>
                        <li>Immunosuppressant Drugs</li>
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
                    Take 1-2 capsule(s) morning and night with water before meals or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/ngrbiotic_120s/2partcap_4_3_1_3.png">
                </div>
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
                                    <strong>EACH VEGETARIAN CAPSULE CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Lactobacillus rhamnosus (Med 26)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>9 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Lactobacillus acidophilus (Med 27)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>3.75 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Lactobacillus plantarum (Med 25)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1.575 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bifidobacterium animalis spp. lactis (Med 13)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>3 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bifidobacterium breve (Med 12)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1.75 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bifidobacterium bifidum (Med 11)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 million</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Streptococcus thermophilus (Med 51)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1.5 billion</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <th width="136" valign="top">
                                <p>Total</p>
                            </th>
                            <th width="273" valign="top">
                                <p>21.075 Billion CFU* (1 capsule)</p>
                            </th>
                        </tr>
                        <tr>
                            <td></td>
                            <th width="273" valign="top">
                                <p>42.15 Billion CFU* (2 capsules)</p>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                *CFU: Colony Forming Units
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Maltodextrin</p>
                                <p>Silica</p>
                                <p>Magnesium stearate</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/multibiotic-30s/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-30s/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-30s/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-30s/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-30s/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-30s/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-30s/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Vegetarian Friendly
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 28.89,
                'price_wholesale' => 19.26,
                'image_path' => '/img/products/multibiotic_30s/multibiotic-30s-3d-bottle-master-sept14-v1_10_2_1.jpg',
                'thumb_image_path' => '/img/products/multibiotic_30s/thumb_multibiotic-30s-3d-bottle-master-sept14-v1_10_2_1.jpg',
            ],
            [
                'product_name_index' => "MultiBiotic 60's",
                'austl_number' => '227562',
                'product_name' => 'MultiBiotic&trade; 60&#39;s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">MultiBiotic&trade; 60&#39;s</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    MultiBiotic&trade; is formulated to target both the small and large bowel for gastrointestinal
                    microbial balance. MultiBiotic™ may assist in maintaining optimal gastrointestinal care and
                    immune function.
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
                    MultiBiotic&trade; is a multi-species probiotic that helps to support the natural balance of commensal
                    bacteria in the gastrointestinal tract (GIT). MultiBiotic&trade; is used to improve symptoms of medically
                    diagnosed Irritable Bowel Syndrome; support healthy immune function; restore GIT microbial balance
                    after certain medication use and to relieve gastrointestinal discomfort. MultiBiotic&trade; contains
                    21.075 billion CFU of bacteria per capsule, including Streptococcus, Lactobacillus and
                    Bifidobacterium species. These species are predominately found in the gastrointestinal tract.
                </p>
                ',
                'practitioner_summary' =>
                    '
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>Relief of symptoms of mild upper respiratory infections.</li>
                        <li>Relief or treatment of diarrhoea.</li>
                        <li>Helps maintain healthy digestive function.</li>
                        <li>For the symptomatic relief of medically diagnosed irritable bowel syndrome.</li>
                        <li>May assist in the management of medically diagnosed irritable bowel syndrome.</li>
                        <li>May assist in the maintenance of normal/healthy cholesterol levels in healthy individuals.</li>
                        <li>Aids digestion.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Relieves gastrointestinal discomfort.</li>
                        <li>Supports and/or assists with a healthy gastrointestinal microbial profile.</li>
                        <li>Supports a healthy immune system.</li>
                        <li>Helps to maintain healthy skin.</li>
                        <li>Supports skin health.</li>
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
                    <ul>
                        <li>If diarrhoea persists for more than 6 hours in infants under 6 months, 12 hours in children under 3 years, 24 hours in children aged 3-6 years or 48 hours in adults and children over 6 years, seek medical advice.</li>
                        <li>Not to be used in children under two years of age without medical advice. </li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>

               
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Ishizuka A et al. Effects of administration of Bifidobacterium animalis ssp. lactis GCL2505 on defecation frequency and bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91.</li>
                    <li>de Vrese M & Schrezenmeir J. Probiotics, prebiotics, and synbiotics. <em>Adv Biochem Eng Biotechnol.</em> 2008;111:1-66.</li>
                    <li>Dongarra L et al. Mucosal immunology and probiotics. <em>Curr Allergy Asthma Rep</em> 2013;13:19-26.</li>
                    <li>Yoon S et al. Effect of multispecies probiotics on irritable bowel syndrome: a randomised, double-blind, placebo controlled trial. <em>J Gastro & Hepatol</em> 2013;29:52-59.</li>
                    <li>Vitetta L et al. Probiotic, prebiotics and the gastrointestinal tract in health and disease. <em>Inflammopharmacology</em> 2014;22:135-54. </li>
                    <li>Hao Q et al. Probiotics for preventing acute upper respiratory tract infections. <em>Cochrane Database of Systematic Reviews</em> 2011, Issue 9.</li>
                    <li>Guo Z et al. Influence of consumption of probiotics on the plasma lipid profile: A meta-analysis of randomised controlled trial. <em>Nutrition, Metabolism & Cardiovascular disease</em> 2011;21:844-850. </li>
                    <li>Jung W et al. Prospective, randomized, open-label trial comparing the safety, efficacy and tolerability of an acne treatment regimen with and without a probiotic supplement and minocycline in subjects with mild to moderate acne. <em>J Cutan Med Surg</em> 2013;17:114-22. </li>
                    <li>Drouault-Holowacz S, Bieuvelet S, Burckel A et al. A double blind randomized controlled trial of a probiotic combination in 100 patients with irritable bowel syndrome. <em>Gastroenterol Clin Biol</em> 2008; 32 (2): 147-52.</li>
                    <li>Ki Cha B, Mun Jung S, Hwan Choi C et al. The Effect of a Multispecies Probiotic Mixture on the Symptoms and Fecal Microbiota in Diarrhea-dominant Irritable Bowel Syndrome: A Randomized, Double-blind, Placebo-controlled Trial. <em>J Clin Gastroenterol</em> 2011 Dec 5.</li>
                    <li>Fuller R. Probiotics in man and animals. <em>J Appl Bacteriol</em> 1989; 66 (5): 365-78.</li>
                    <li>Dominguez-Bello G, Costello K, Contreras M et al. Delivery mode shapes the acquisition and structure of the initial microbiota across multiple body habitats in newborns. <em>PNAS</em> 2010; 107: 11971–5. </li>
                    <li>Vitetta L, Manuel R, Zhou JY et al. The Overarching Influence of the Gut Microbiome on End-Organ Function: The Role of Live Probiotic Cultures. <em>Pharmaceuticals</em> 2014;9:954-989.</li>
                    <li>Pepper J & Rosenfeld S. The emerging medical ecology of the human gut microbiome. <em>Trends Ecol Evol</em> 2012; 27 (7): 381-4.</li>
                    <li>Vitetta L & Alford H. The Pharmacobiotic Potential of the Gastrointestinal Tract Micro-Biometabolome-Probiotic Connect: A Brief Commentary. <em>Drug Development Research</em> 2013; 74: 353-359</li>
                    <li>Vitetta L, Briskey D, Hayes E, Shing, C & Peake J. Probiotics, Commensal Bacteria and the Pharmacobiotic Regulation of Gastrointestinal Inflammation. <em>Inflammapharmacology</em> 2012; 20 (5): 251-266.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    Some medicines may interfere with MultiBiotic&trade;. These include:
                </p>

                <p>
                    <ul>
                        <li>Immunosuppressant Drugs</li>
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
                    Take 1-2 capsule(s) morning and night with water before meals or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/ngrbiotic_120s/2partcap_4_3_1_3.png">
                </div>
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
                                    <strong>EACH VEGETARIAN CAPSULE CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Lactobacillus rhamnosus (Med 26)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>9 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Lactobacillus acidophilus (Med 27)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>3.75 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Lactobacillus plantarum (Med 25)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1.575 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bifidobacterium animalis spp. lactis (Med 13)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>3 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bifidobacterium breve (Med 12)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1.75 billion</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bifidobacterium bifidum (Med 11)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 million</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Streptococcus thermophilus (Med 51)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1.5 billion</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <th width="136" valign="top">
                                <p>Total</p>
                            </th>
                            <th width="273" valign="top">
                                <p>21.075 Billion CFU* (1 capsule)</p>
                            </th>
                        </tr>
                        <tr>
                            <td></td>
                            <th width="273" valign="top">
                                <p>42.15 Billion CFU* (2 capsules)</p>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                *CFU: Colony Forming Units
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Maltodextrin</p>
                                <p>Silica</p>
                                <p>Magnesium stearate</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/multibiotic-60s/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-60s/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-60s/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-60s/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-60s/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-60s/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/multibiotic-60s/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 52.14,
                'price_wholesale' => 34.76,
                'image_path' => '/img/products/multibiotic_60s/multibiotic-60s-3d-bottle-master-sept14-v1.jpg',
                'thumb_image_path' => '/img/products/multibiotic_60s/thumb_multibiotic-60s-3d-bottle-master-sept14-v1.jpg',
            ],
            [
                'product_name_index' => "NanoCelle Activated B12",
                'austl_number' => '262637',
                'product_name' => 'NanoCelle&trade; Activated B12',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">NanoCelle&trade; Activated B12</h4>
                <p>
                    <strong>PATENT PENDING</strong>
                </p>
                <p>
                    NanoCelle&trade; Activated B12 may assist in the management of dietary vitamin B12 deficiency as may
                    occur in vegetarians, vegans, the elderly, and those taking certain medications that lower stomach
                    acid.
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
                    NanoCelle&trade; Activated B12 may assist in the management of dietary vitamin B12 deficiency as may occur
                    in vegetarians, vegans, the elderly, and those taking certain medications that lower stomach acid.
                    Mecobalamin is a biologically active form of vitamin B12 that is involved in the methylation of
                    homocysteine to methionine, therefore helping to lower serum homocysteine levels. Vitamin B12 is required
                    for red blood cell production, synthesis of myelin that is vital to healthy neurological function and
                    DNA methylation. NanoCelle&trade; delivers nanoparticle-sized molecules of the vitamin for absorption across
                    the oral buccal mucosa, bypassing the gastrointestinal tract.
                </p>
                ',
                'practitioner_summary' =>
                    '
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>May assist in the management of dietary vitamin B12 deficiency.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>The vitamin B12 nanoparticles have an average size between 100 nm to 300 nm (0.1-0.3 microns).</li>
                        <li>Vitamin B12 is a cofactor involved in the methylation cycle that involves protein and DNA methylation and synthesis of nucleotides (purines and pyrimidines).</li>
                        <li>Vitamin B12 is essential for DNA synthesis.</li>
                        <li>Methionine is required for the synthesis of myelin and therefore vitamin B12 is required for healthy myelin production and nerve impulses.</li>
                        <li>Vitamin B12 is required for red blood cell production (erythropoiesis) and other haematological cells.</li>
                        <li>Vitamin B12 is a mitochondrial enzyme cofactor involved in the synthesis of succinyl-CoA from amino acids and fatty acids which then enters the tricarboxylic acid (TCA) cycle for energy (ATP) production in cells.</li>
                        <li>Vitamin B12 is an essential cofactor for the conversion of homocysteine to methionine.</li>
                        <li>Vitamin B12 may assist in lowering plasma homocysteine levels.</li>
                        <li>Vitamin B12 supports healthy neurological function.</li>
                        <li>Suitable for population groups at increased risk of vitamin B12 deficiency, including strict vegetarians and vegans, due to dietary vitamin B12 being obtained from foods of animal origin including meat, fish, dairy and eggs.</li>
                        <li>Suitable for population groups at increased risk of vitamin B12 deficiency, including the elderly who are reported to have lower serum concentrations of vitamin B12 than their younger counter parts. Low stomach acid secretion reported in the elderly results in decreased bioavailability of vitamin B12 from food.</li>
                        <li>Methylcobalamin is a biologically active form of vitamin B12.</li>
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
                    <ul>
                        <li>Contains potassium sorbate.</li>
                        <li>Vitamin supplements should not replace a balanced diet.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>

               
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Carmel R. Efficacy and safety of fortification and supplementation with vitamin B12: biochemical and physiological effects. <em>Food Nutr Bull</em> 2008;29:S177-S187.</li>
                    <li>Nielsen, HM 2014, &#39;Epithelial permeation and absorption mechanisms of biopharmaceuticals&#39;, in J das Neves & B Sarmento (eds), Mucosal Delivery of Biopharmaceuticals, Springer, New York, pp. 99-124.</li>
                    <li>Laffleur F, Bernkop-Schn&uuml;rch A. Strategies for improving drug delivery. <em>Future Medicine</em> 2013;8:2061-75.</li>
                    <li>Ansari Z. Homocysteine and mild cognitive impairment: are these the tools for early intervention in the dementia spectrum? <em>J Nutr health Aging</em> 2016;20:155-60.</li>
                    <li>Ganguly P, Alam SF. Role of homocysteine in the development of cardiovascular disease. <em>Nutr J</em> 2015;14:6.</li>
                    <li>Obeid R, Fedosov SN, Nexo E. Cobalamin coenzyme forms are not likely to be superior to cyano- and hydroxyl-cobalamin in prevention or treatment of cobalamin deficiency. <em>Mol Nutr Food Res</em> 2015;59:1364-1372.</li>
                    <li>Thakkar K, Billa G. Treatment of vitamin B12 deficiency &ndash; Methylcobalamine? Cyanocobalamine? Hydroxycobalamin? &ndash; clearing the confusion. <em>Eur J Clin Nutr</em> 2015;69:1-2.</li>
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
                                    <strong>ACTIVE INGREDIENTS</strong>
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                    <strong>Per 2 sprays (0.3 ml) contains:</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Vitamin B12 (as Mecobalamin)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>1000 mcg</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Water</p>
                                <p>Modified vegetable oil</p>
                                <p>Glycerol</p>
                                <p>Anhydrous citric acid</p>
                                <p>Potassium sorbate</p>
                                <p>Steviol glycosides</p>
                                <p>Peppermint oil</p>
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
                <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-activated-b12/cmi/english" target="_blank">
                    Click Here For English CMI
                </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-activated-b12/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-activated-b12/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-activated-b12/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-activated-b12/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-activated-b12/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                <p>
                <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-activated-b12/cmi/italian" target="_blank">Traduzione italiana</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Dairy and Gluten Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
                'price_retail' => 23.88,
                'price_wholesale' => 15.90,
                'image_path' => '/img/products/nanocelle_activated_b12/activated_b12.png',
                'thumb_image_path' => '/img/products/nanocelle_activated_b12/activated_b12_thumb.png',
                'slug' => 'nanocelle-activated-b12'
            ],
            [
                'product_name_index' => 'NanoCelle B12',
                'austl_number' => '232089',
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
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                    <li>May assist in the management of dietary vitamin B12 deficiency.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>The micellization process produces nanoparticle-sized molecules that enhances nutrient bioavailability.</li>
                        <li>Vitamin B12 is a cofactor involved in the methylation cycle that involves protein and DNA methylation and synthesis of nucleotides (purines and pyrimidines).</li>
                        <li>Vitamin B12 is essential for DNA synthesis.</li>
                        <li>Vitamin B12 is an essential cofactor for the conversion of homocysteine to methionine.</li>
                        <li>Methionine is required for the synthesis of myelin and therefore vitamin B12 is required for healthy myelin production and nerve impulses.</li>
                        <li>Vitamin B12 is a mitochondrial enzyme cofactor involved in the synthesis of succinyl-CoA from amino acids and fatty acids which then enters the tricarboxylic acid (TCA) cycle for energy (ATP) production in cells.</li>
                        <li>Vitamin B12 is required for red blood cell production (erythropoiesis) and other haematological cells.</li>
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
                    <ul>
                        <li>Vitamin supplements should not replace a balanced diet.</li>
                        <li>Contains potassium sorbate.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
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
                                <p>Water</p>
                                <p>Modified vegetable oil</p>
                                <p>Glycerol</p>
                                <p>Anhydrous citric acid</p>
                                <p>Potassium sorbate</p>
                                <p>Steviol glycosides</p>
                                <p>Peppermint oil</p>
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
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/nanocelle-b12/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-b12/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-b12/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-b12/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-b12/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-b12/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-b12/cmi/traditional_chinese" target="_blank">中文翻譯</a>
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
            ],
            [
                'product_name_index' => 'NanoCelle D3',
                'austl_number' => '232096',
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
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Vitamin D helps calcium absorption, and a diet deficient in calcium can lead to osteoporosis in later life.</li>
                        <li>Prevention/treatment of vitamin D and/or nutritional deficiency.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Vitamin D3 is required for proper cellular and immunological function.</li>
                        <li>Vitamin D3 supplementation increases serum vitamin D levels and bone mineral density (BMD) in vitamin D deficient individuals.</li>
                        <li>Vitamin D3 binds to and activates the vitamin D receptor (VDR) that is responsible for the transcription and transrepression of genes.</li>
                        <li>The VDR is a nuclear receptor found in immune and other cell types and is a control system for the innate immune system.</li>
                        <li>Vitamin D3 may help to promote healthy respiratory function.</li>
                        <li>Vitamin D3 is involved in the attenuation of inflammatory responses and conditions within the body.</li>
                        <li>The micellization process produces nano-sized particles that enhances nutrient bioavailability.</li>
                        <li>Vitamin D3 is associated with proper musculoskeletal health (bone and muscle fibres).</li>
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
                    <ul>
                        <li>Vitamin supplements should not replace a balanced diet.</li>
                        <li>Contains potassium sorbate.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
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
                    Vitamin D3 has a low risk of side-effects when taken as directed.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    We advise NanoCelle™ D3 should not be given to patients currently taking:
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
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Water</p>
                                <p>Modified vegetable oil</p>
                                <p>Glycerol</p>
                                <p>Anhydrous citric acid</p>
                                <p>Potassium sorbate</p>
                                <p>Steviol glycosides</p>
                                <p>Peppermint oil</p>
                                <p>Maize oil</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/nanocelle-d3/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-d3/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-d3/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-d3/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-d3/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-d3/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-d3/cmi/traditional_chinese" target="_blank">中文翻譯</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
                'price_retail' => 21.77,
                'price_wholesale' => 14.50,
                'image_path' => '/img/products/nanocelle_d3/d3_1.jpg',
                'thumb_image_path' => '/img/products/nanocelle_d3/thumb_d3_1.jpg',
            ],
            [
                'product_name_index' => "NOS",
                'product_name' => 'NOS <small>Nitric Oxide Support</small>',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">NOS <small>Nitric Oxide Support</small></h4>
                <p>
                    A targeted pre-exercise sports food containing a selection of evidence-based ingredients combined to support and optimise exercise performance.
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
                    A targeted pre-exercise sports food containing a selection of evidence-based ingredients combined to support and optimise exercise performance.
                    Creatine, L-arginine and the B vitamins support energy production during strenuous exercise while beta-alanine helps to increase muscle carnosine levels.
                    The amino acid L-arginine is also the precursor for nitric oxide production, a signaling molecule involved in blood vessel relaxation and vasodilation.
                    Coconut powder contains important electrolytes required during exercise and Guarana seed powder naturally contains caffeine.
                </p>
                ',
                'practitioner_summary' =>
                    '
                <p>
                    <ul>
                        <li>L-arginine is the precursor to nitric oxide (NO) synthesis, an important cellular signaling molecule involved in many physiological processes and is most well known as a powerful vasodilator of blood vessels that regulates blood flow.</li>
                        <li>The ergogenic affects of creatine are evident for high-intensity exercise of short duration and have been shown to increase muscle mass when combined with an exercise program.</li>
                        <li>Supplementation of beta-alanine is required to achieve the active daily dose required to significantly elevate intramuscular carnosine and it increases dose-dependently. Increasing muscle carnosine concentration may improve athletic performance in exercise tasks that accrue a high level of muscle acidosis, improving high-intensity intermittent exercise performance and time to fatigue.</li>
                        <li>Tyrosine is the amino acid precursor to the synthesis of neurotransmitters involved in cognitive performance and stress resistance; namely dopamine, noradrenaline and adrenaline.</li>
                        <li>Caffeine is widely used as an enhancement for athletic performance via its broad range of metabolic, hormonal and physiologic effects. Guarana is a natural source of caffeine. Caffeine has been shown to enhance exercise performance and reduce time to exhaustion.</li>
                    </ul>
                </p>
                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    <ul>
                       <li>Not to be used as a sole source of nutrition, should be used in conjunction with a balanced diet and appropriate exercise program.</li>
                       <li>Not suitable for children under 15 years of age or pregnant women.</li>
                       <li>Should only be used under medical or dietetic supervision.</li>
                       <li>Contains not less than 30mg of caffeine per serve.</li>
                    </ul>
                </p>
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Hristina K, Langerholc T, Trapecar M. Novel metabolic roles of L-arginine in body energy metabolism and possible clinical applications. <em>J Nutr, Health & Aging</em> 2014;18:213-18.</li>
                    <li>Zhao Y, Vanhoutte PM, Leung, SWS. Vascular nitric oxide: beyond eNOS. <em>J Pharmacol Sci </em> 2015;129:83-94.</li>
                    <li>Lorin J, Zeller M, Guilland JC, et al. Arginine and nitric oxide synthase: regulatory mechanisms and cardiovascular aspects. <em>Mol Nutr Food Res</em> 2014;58:101-116.</li>
                    <li>Goubareva I, Gkalaiagkousi E, Shah A, et al. Age decreases nitric oxide synthesis and responsiveness in human platelets and increases formation of monocyte-platelet aggregates. <em>Cardiovascular Res</em> 2007;75:793-802.</li>
                    <li>Taddei S, Virdis A, Ghiadoni L, et al. Age-related reduction of NO availability and oxidative stress in humans. <em>Hypertension</em> 2001;38:274-279.</li>
                    <li>Luiking YC, Poeze M, Dejong CH, et al. Sepsis:an arginine deficiency state? <em>Crit Care Med</em> 2004;32:2135-45.</li>
                    <li>Cooper R, Naclerio F, Allgrove J, et al. Creatine supplementation with specific view to exercise/sports performance: an update. <em>J Int Soc Sports Nutr</em> 2012;9:33.</li>
                    <li>Terjung RL, Clarkson P, Eichner ER, et al. American college of sports medicine roundtable. The physiological and health effects of oral creatine supplementation. <em>Med Sci Sports Exerc</em> 2000;32:706-717.</li>
                    <li>Brosnan JT, Brosnan ME. Creatine: endogenous metabolite, dietary and therapeutic supplementation. <em>Annu Rev Nutr</em> 2007;27:241-61.</li>
                    <li>Muscle fiber contraction and relaxation. <em>Openstax CNX.</em> http://cnx.org/contents/EtWWcJM-@3/Muscle-Fiber-Contraction-and-R (accessed 14th April 2016).</li>
                    <li>Bellinger PM. &beta;-alanine supplementation for athletic performance: an update. <em>J Strength Cond Res</em> 2013;28:1751-1770.</li>
                    <li>Culbertson JY, Kreider RB, Greenwood M, et al. Effects of beta-alanine on muscle carnosine and exercise performance: a review of the current literature. <em>Nutrients</em> 2010;2:75-98.</li>
                    <li>Luckose F, Pandey MC, Radhakrishna. Effects of amino acid derivatives on physical, mental and physiological activities. <em>Crit Rev Food Sci Nutr</em> 2015;55:1793-1807.</li>
                    <li>Huskisson E, Maggini S, Ruf M. The role of vitramins and minerals in energy metabolism and well-being. <em>J Int Med Res</em> 2007;35:277-289.</li>
                    <li>Sokmen B, Armstrong LE, Kraemer WJ, et al. Caffeine use in sports: considerations for the athlete. <em>J Strength Cond Res</em> 2008;22:978-986.</li>
                    <li>Lorist MM, Tops M. Caffeine, fatigue and cognition. <em>Brain Cog</em> 2003;53:82-94.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                
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
                    Mix one scoop (5 g) into 200 mL of cold water and drink 20 minutes prior to exercising. To be taken once per day.
                </p>
                ',
                'ingredients' =>
                    '
                <a class="product_modal_link" href="#">
                    <img class="product_image" alt="NOS Ingredient Label" src="/img/products/nos/ingredient_label.png" width="100%"/>
                </a>
                <br><br>
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
                                    <strong>Per serve (5g)</strong>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <strong>Per 100g</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Creatine monohydrate</p>
                            </td>
                            <td>
                                <p>1 g</p>
                            </td>
                            <td>
                                <p>20 g</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>L-arginine</p>
                            </td>
                            <td>
                                <p>1 g</p>
                            </td>
                            <td>
                                <p>20 g</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Beta-alanine</p>
                            </td>
                            <td>
                                <p>1.2 g</p>
                            </td>
                            <td>
                                <p>24 g</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ascorbic acid (Vitamin C)</p>
                            </td>
                            <td>
                                <p>80mg</p>
                            </td>
                            <td>
                                <p>1.6 g</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>L-Tyrosine</p>
                            </td>
                            <td>
                                <p>200 mg</p>
                            </td>
                            <td>
                                <p>4 g</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Guarana (Paullinia cupana kunth) dried seeds powder</p>
                            </td>
                            <td>
                                <p>1 g</p>
                            </td>
                            <td>
                                <p>20 g</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Nicotinic acid (Vitamin B3)</p>
                            </td>
                            <td>
                                <p>20 mg</p>
                            </td>
                            <td>
                                <p>400 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Pyridoxine 5-phosphate (Vitamin B6)</p>
                            </td>
                            <td>
                                <p>3.2 mg</p>
                            </td>
                            <td>
                                <p>64 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Cyanocobalamin (Vitamin B12)</p>
                            </td>
                            <td>
                                <p>4 mcg</p>
                            </td>
                            <td>
                                <p>80 mcg</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Folic acid (Vitamin B9)</p>
                            </td>
                            <td>
                                <p>250 mcg</p>
                            </td>
                            <td>
                                <p>5 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tender green coconut water powder</p>
                            </td>
                            <td>
                                <p>25 mg</p>
                            </td>
                            <td>
                                <p>500 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Citric acid</p>
                                <p>Malic acid</p>
                                <p>Stevia</p>
                                <p>Silica</p>
                                <p>Flavour</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    'none',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Contains No Artificial Colours or Sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Gluten & Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
                'price_retail' => 36.63,
                'price_wholesale' => 24.40,
                'image_path' => '/img/products/nos/nos.png',
                'thumb_image_path' => '/img/products/nos/nos_thumb.png',
                'slug' => 'NOS'
            ],
            [
                'product_name_index' => "NRGBiotic 60's",
                'austl_number' => '227515',
                'product_name' => 'NRGBiotic&trade; 60&#39;s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">NRGBiotic&trade; 60&#39;s</h4>
                <p>
                    <strong>PATENT PROTECTED</strong>
                </p>
                <p>
                    NRGBiotic™ is a probiotic formula combined with Coenzyme Q10 and Magnesium Orotate.
                    NRGBiotic&trade; is indicated to support healthy cellular energy production with magnesium and Coenzyme Q10
                    required for ATP (energy) production in the cell. The probiotic species may help to support a healthy
                    gut microbial profile and support a healthy immune system.
                </p>
                ',
                'patent' =>
                    '
                <p>
                    <strong>PATENT PROTECTED</strong>
                </p>
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
                'general_summary' =>
                    '
                <p>
                    NRGBiotic™ is a probiotic formula combined with Coenzyme Q10 and Magnesium Orotate. NRGBiotic&trade; is
                    indicated to support healthy cellular energy production with magnesium and Coenzyme Q10 required for
                    ATP (energy) production in the cell. The probiotic species may help to support a healthy gut microbial
                    profile and support a healthy immune system.
                </p>
                ',
                'practitioner_summary' =>
                    '
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>May assist in the maintenance of normal/healthy cholesterol levels in healthy individuals.</li>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Supports energy production.</li>
                        <li>Helps to maintain proper muscle function.</li>
                        <li>Helps to assist in muscle cell recovery after exercise.</li>
                        <li>Helps to maintain healthy skin.</li>
                        <li>Supports a healthy immune system.</li>
                        <li>May assist with muscle action deficits due to low levels of Coenzyme Q10.</li>
                        <li>Magnesium is required by most ATP-using enzymes in the form of Mg-ATP.</li>
                        <li>Magnesium orotate is required for normal intracellular function.</li>
                        <li>Magnesium plays a significant role as a cofactor for more then 350 enzymes in the body and regulates neuro-excitability and several ion channels.</li>
                        <li>Coenzyme Q10 is present in all cells and membranes and is critical for ATP (energy) production.</li>
                        <li>Supports and/or assists with a healthy gastrointestinal microbial profile.</li>
                        <li>Supports skin health.</li>
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
                    <ul>
                        <li>Do not take while on warfarin therapy without medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>

               
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>Crane F. Biochemical functions of CoQ10. <em>J Am Coll Nutr</em> 2001;20:591-598.</li>
                    <li>Kon M et al. Reducing exercise-induced muscular injury in Kendo athletes with supplementation of CoQ10. <em>Br Nutr</em> 2008;100:903-909.</li>
                    <li>Giuseppe C et al. Effect of CoQ10 on myopathic symptoms in patients treated with statins. <em>Am J Cardiol</em> 2007;99:1409-1412. </li>
                    <li>Ishizuka A et al. Effects of administration of Bifidobacterium animalis ssp. lactis GCL2505 on defecation frequency and bifidobacterial microbiota composition in humans. <em>J Biosci Bioeng</em> 2012;113:587-91. </li>
                    <li>de Vrese M & Schrezenmeir J. Probiotics, prebiotics, and synbiotics. <em>Adv Biochem Eng Biotechnol</em> 2008;111:1-66. </li>
                    <li>Agarwal R et al. Pathogenic role of magnesium deficiency in ophthalmic diseases. <em>Biometals</em> 2013 [Epub ahead of print].</li>
                    <li>Dongarra L et al. Mucosal immunology and probiotics. <em>Curr Allergy Asthma Rep</em> 2013;13:19-26. </li>
                    <li>Shambaugh GE. Pyrimidine biosynthesis. <em>AJCN</em> 1979;32:1290 –1297.</li>
                    <li>Traut TW, Jones ME. Uracil metabolism--UMP synthesis from orotic acid or uridine and conversion of uracil to beta-alanine: enzymes and cDNAs. <em>Prog Nucleic Acids Res Mol Biol</em> 1996;53:1-78.</li>
                    <li>Moyer JD, Henderson JF. Salvage of uridine in the mouse. Effect of uridine phosphorylase pre-treatment. <em>Biochem Pharmacol</em> 1985;34:101–105.</li>
                    <li>Löffler M, Fairbanks LD, Zameitat E, Marinaki AM, Simmonds HA. Pyrimidine pathways in health and disease. <em>Trends Mol Med</em> 2005;11(9):430-7.</li>
                    <li>Fuke C, Krikorian SA, Couris RR. Coenzyme Q10: a review of essential functions and clinical trials. <em>US Pharmacist</em> 2000;28-41.</li>
                    <li>Hodgson JM, Watts GF, Playford DA, Burke V, Croft KD. Coenzyme Q10 improves blood pressure and glycaemic control: a controlled trial in subjects with type 2 diabetes. <em>Eur J Clin Nutr</em> 2002;56:1137-42.</li>
                    <li>Langsjoen PH, Langsjoen AM. The clinical use of HMG CoA-reductase inhibitors and the associated depletion of coenzyme Q10. A review of animal and human publications. <em>Biofactors</em> 2003;18:101-11.</li>
                    <li>Vitetta L, Manuel R, Zhou JY, et al. The overarching influence of the gut microbiome on end-organ function: the role of live probiotic cultures. <em>Pharmaceuticals (Basel)</em> 2014;7(9):954-89.</li>
                    <li>Morelli L, Capurso L. FAO/WHO Guidelines on Probiotics: 10 years on. <em>J Clin Gastroenterol</em> 2012;46(1): S1-S2.</li>
                    <li>Timmerman HM, Koning CJ, Mulder L, Rombouts FM, Beynen AC: Monostrain, multistrain and multispecies probiotics--A comparison of functionality and efficacy. <em>Int J Food Microbiol</em> 2004;96:219-233.</li>
                    <li>Vitetta L, Briskey D, Hayes E, Shing C, Peake J: A review of the pharmacobiotic regulation of gastrointestinal inflammation by probiotics, commensal bacteria and prebiotics. <em>Inflammopharmacology</em> 2012;20:251-266.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    Some medicines may interfere with NRGBiotic&trade;. These include:
                </p>

                <p>
                    <ul>
                        <li>Warfarin</li>
                        <li>Calcium Channel Blockers</li>
                        <li>Immunosuppressant Drugs</li>
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
                    Take two(2) capsules morning and night with water before meals or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/ngrbiotic_120s/2partcap_4_3_1_3.png">
                </div>
                ',
                'ingredients' =>
                    '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td valign="top">
                                <p>
                                    <strong>ACTIVE INGREDIENTS</strong>
                                </p>
                            </td>
                            <td valign="top">
                                <p>
                                    <strong>EACH CAPSULE CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <p>Lactobacillus Acidophilus (Med 27)</p>
                            </td>
                            <td valign="top">2.5 billion</td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <p>Bifidobacterium Bifidum (Med11)</p>
                            </td>
                            <td valign="top">1 Billion</td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <p>Streptococcus Thermophilus (Med51)</p>
                            </td>
                            <td valign="top">1.5 Billion</td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <p>
                                    <strong>Total</strong>
                                </p>
                            </td>
                            <td valign="top">
                                <strong>5 billion CFU*</strong>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <p>Magnesium Orotate</p>
                            </td>
                            <td valign="top">400 mg</td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <p>Equivalent to Magnesium:</p>
                            </td>
                            <td valign="top">25.5mg</td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <p>Coenzyme Q10 (as Ubidecarenone</p>
                            </td>
                            <td valign="top">37.5 mg</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                *CFU: Colony Forming Units
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Maltodextrin</p>
                                <p>Silica</p>
                                <p>Magnesium stearate</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/nrgbiotic-60s/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nrgbiotic-60s/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nrgbiotic-60s/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nrgbiotic-60s/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nrgbiotic-60s/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nrgbiotic-60s/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/nrgbiotic-60s/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten & Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 46.47,
                'price_wholesale' => 30.98,
                'image_path' => '/img/products/ngrbiotic_60s/nrgbiotic-60s-3d-bottle-master-sept14-v1_10_2_1.jpg',
                'thumb_image_path' => '/img/products/ngrbiotic_60s/thumb_nrgbiotic-60s-3d-bottle-master-sept14-v1_10_2_1.jpg',
            ],
            [
                'product_name_index' => 'ORSBiotic',
                'austl_number' => '239102',
                'product_name' => 'ORSBiotic&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">ORSBiotic&trade;</h4>
                <p>
                    <strong>Australian Innovation Patent No. 2016100500</strong>
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
                    <strong>Australian Innovation Patent No. 2016100500</strong>
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
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>Relief or treatment of diarrhoea.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Helps replace water and electrolytes lost due to vomiting, diarrhoea, heavy sweating, fever, vigorous exercise and other dehydrating conditions.</li>
                        <li>Probiotic species from the genera Saccharomyces, Lactobacillus and Bifidobacterium have clinical evidence for providing therapeutic support for various triggers of diarrhoea including infectious agents, antibiotic-associated, Clostridium difficile-associated, irritable bowel syndrome, inflammatory bowel syndrome and malabsorption causes and may therefore help to reduce the frequency and duration of diarrhoea.</li>
                        <li>Saccharomyces, Lactobacillus and Bifidobacterium help maintain healthy gastrointestinal homeostasis and permeability.</li>
                        <li>Supplementary zinc benefits children with diarrhoea because it is a vital micronutrient essential for protein synthesis, cell growth and differentiation, immune function and intestinal transport of water and electrolytes. Clinical research demonstrates zinc reduces severity and duration of diarrhoea in children.</li>
                        <li>Zinc deficiency is associated with an increased risk of gastrointestinal infections, adverse effects on the structure and function of the gastrointestinal tract and impaired immune function.</li>
                        <li>Supports a healthy immune system.</li>
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
                    <ul>
                        <li>Contains sugar (glucose).</li>
                        <li>Contains zinc which may be dangerous if taken in large amounts or for a long period.</li>
                        <li>If diarrhoea persists for more than 6 hours in infants under 6 months, 12 hours in children under 3 years, 24 hours in children aged 3-6 years or 48 hours in adults and children over 6 years, seek medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
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
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
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
                                <p>2 billion</p>
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
                        <tr>
                            <td colspan="3" style="text-align: right">
                                *CFU: Colony Forming Units
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Flavours</p>
                                <p>Silica</p>
                                <p>Stevia</p>
                                <p>Carrot powder</p>
                                <p>Thaumatin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/orsbiotic/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/russian" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/japanese" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/orsbiotic/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Lactose Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for vegetarians
                </p>
                <p class="medlab_product_content_sub_title">
                    No artificial colours, flavours or sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 30.09,
                'price_wholesale' => 20.06,
                'image_path' => '/img/products/orsbiotic/orsbiotic.png',
                'thumb_image_path' => '/img/products/orsbiotic/thumb_orsbiotic.png',
            ],
            [
                'product_name_index' => "SB 5B",
                'austl_number' => '269432',
                'product_name' => 'SB 5B&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">SB 5B&trade;</h4>
                <p>
                    <em>Saccharomyces cerevisiae ssp. boulardii</em> (SB) is a beneficial probiotic yeast that helps to
                    maintain gastrointestinal function and integrity by supporting a healthy gut microbial profile. SB 5B&trade;
                    assists in supporting healthy immune function and may help to reduce inflammatory mediators in the gastrointestinal tract.
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
                    <em>Saccharomyces cerevisiae ssp. boulardii</em> (SB) is a beneficial probiotic yeast that helps to
                    maintain gastrointestinal function and integrity by supporting a healthy gut microbial profile; by increasing
                    the production of secretory IgA (sIgA), short-chain fatty acids (SCFAs) and helping to promote the
                    activity of brush border disaccharide enzymes. SB has demonstrated efficacy in relieving diarrhoea
                    severity and duration in both adults and children due to various triggers. SB assists in supporting healthy
                    immune function and may help to reduce inflammatory mediators in the gastrointestinal tract.
                </p>
                ',
                'practitioner_summary' =>
                    '
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>May assist in the management of medically diagnosed irritable bowel syndrome.</li>
                        <li>For the symptomatic relief of medically diagnosed irritable bowel syndrome.</li>
                        <li>Helps maintain healthy digestive function.</li>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>Relief or treatment of diarrhoea.</li>
                        <li>Aids digestion.</li>
                        <li>Treatment of mild digestive disorders.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Assists in the management of mild digestive disturbances including bloating, flatulence and digestive discomfort.</li>
                        <li>May be used as a prophylactic for, or to support the relief of symptoms of infectious, antibiotic associated and traveller\'s diarrhoea.</li>
                        <li>Helps to support healthy immune function.</li>
                        <li>Saccharomyces boulardii may competitively inhibit the binding of Candida albicans to the gastrointestinal mucosa.</li>
                        <li>May help to reduce inflammatory mediators originating in the gastrointestinal tract.</li>
                        <li>May assismulating secretion of disaccharidase brush border enzymes - sucrase, lactase and maltase assisting in the digestion and absorption of associated dietary compounds.</li>
                        <li>Saccharomyces boulardii aids in the stimulation of secretory IgA release in the gastrointestinal tract that then targets potential pathogens.</li>
                        <li>Saccahromyces boulardii produces protein digesting enzymes (protease) that has shown in in vitro studies the ability to degrade/destroy Clostridium difficile toxin A and B.</li>
                        <li>In vitro research demonstrates that Saccharomyces boulardii can block pathogen toxin receptor sites or can act as a decoy receptor for pathogenic toxins.</li>
                        <li>Saccharomyces boulardii assists in preservation of tight junctions between enterocytes and colonocytes that may help to reduce gut permeability and the translocation of bacteria from the gut lumen to the blood stream.</li>
                        <li>Research has demonstrated that when giving Saccharomyces boulardii at the same time as antibiotics that the normal microbiota is re-established more rapidly than when antibiotics are given without Saccharomyces boulardii.</li>
                        <li>Saccharomyces boulardii increases the production of short chain fatty acids that function as signalling molecules to the body.</li>

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
                    <ul>
                        <li>If diarrhoea persists for more than 6 hours in infants under 6 months, 12 hours in children under 3 years, 24 hours in children aged 3-6 years or 48 hours in adults and children over 6 years, seek medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>

               
                ',
                'references' =>
                    '
                <ol class="medlab_product_reference_list">
                    <li>McFarland LV. Systematic review and meta-analysis of <em>Saccharomyces boulardii</em> in adult patients. <em>World J Gastroenterol</em> 2010;16:2202-2222.</li>
                    <li>More MI, Swidsinski A. <em>Saccharomyces boulardii</em> CNCM I-745 supports regeneration of the intestinal microbiota after diarrhoeic dysbiosis – a review. <em>Clin Exp Gastroenterol</em> 2015;8:237-255.</li>
                    <li>Dinleyici EC, Eren M, Ozen M, et al. Effectiveness and safety of Saccharomyces boulardii for acute infectious diarrhoea. <em>Expert Opin Biol Ther</em> 2012;12:395-410.</li>
                    <li>Goldenberg JZ, Ma SSY, Saxton JD, et al. Probiotics for the prevention of Clostridium difficile-associated diarrhea in adults and children. Cochrane Database of Systematic Reviews 2013, Issue 5. Art. No.: CD006095. DOI:10.1002/14651858.CD006095.pub3.</li>
                    <li>Szajewska H, Kotodziej M. Systematic review with meta-analysis: Saccharomyces boulardii in the prevention of antibiotic-associated diarrhoea. <em>Ailment Pharmacol Ther</em> 2015;42:793-801.</li>
                    <li>Bufutto M, Almeida JR, Leite NV, et al. Treatment of diarrhea-predominant irritable bowel syndrome with mesalazine and/or <em>Saccharomyces boulardii</em>. <em>Arg Gastroenterol</em> 2013;50:304-9.</li>
                    <li>Abbas Z, Yakoob J, Ahmad Z, et al. Cytokine and clinical response to <em>Saccharomyces boulardii</em> therapy in diarrhea-dominant irritable bowel syndrome: a randomised trial. <em>Eur J Gastroenterol Hepatol</em> 2014;26:630-9.</li>
                    <li>Choi CH, Jo SY, Oark HJ, et al. A randomized, double-blind, placebo-controlled multicentre trial of <em>Saccharomyces boulardii</em> in irritable bowel syndrome: effect on quality of life. <em>J Clin Gastroenterol</em> 2011;45:679-83.</li>
                </ol>
                ',
                'side_effects' =>
                    '
                <p>
                    SB has shown to be well tolerated in adults when taken orally for up to 15 month’s duration. It can cause flatulence
                    in some people. Infrequent cases of fungaemia have been reported in case reports but only in patients with
                    serious diseases in which they have been hospitalised. SB has shown to be well tolerated in children when taken orally
                    appropriately. However, a healthcare practitioner should evaluate diarrhoea in children before using SB 5B&trade;.
                </p>
                <p>
                    You can also refer to the CMI for this product for symptoms and side effects.
                </p>
                ',
                'interactions' =>
                    '
                <p>
                    Medications for fungal infections (i.e. dicflonac) interact with and reduce the therapeutic effectiveness of SB due to SB being a yeast.
                </p>
                ',
                'dosage_information' =>
                    '
                <h4 class="medlab_product_content_title">
                    Serving Information
                </h4>

                <p>
                    Take one (1) capsule, one (1) to two (2) times daily, or as directed by your healthcare practitioner.
                </p>

                <h4 class="medlab_product_content_title">
                    Dosage Size
                </h4>

                <div style="text-align: center">
                    <img src="/img/products/sb_5b/2partcap.png">
                </div>
                ',
                'ingredients' =>
                    '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td width="273" valign="top">
                                <p>
                                    <strong>Active Ingredients</strong>
                                </p>
                            </td>
                            <td width="136" valign="top">
                                <p>
                                    <strong>Each vegetarian capsule contains:</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Saccharomyces cerevisiae ssp. boulardii</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>250 mg</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Equiv.</p>
                            </td>
                            <td width="136" valign="top">
                                <p>5 bill CFU</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Cellulose</p>
                                <p>Calcium hydrogen phosphate</p>
                                <p>Magnesium stearate</p>
                                <p>Silica</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="/nutraceuticals/products/SB-5B/cmi/english"target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/SB-5B/cmi/arabic"target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/SB-5B/cmi/spanish"target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/SB-5B/cmi/russian"target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/SB-5B/cmi/japanese"target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/SB-5B/cmi/french"target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/SB-5B/cmi/chinese"target="_blank">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/SB-5B/cmi/italian"target="_blank">Traduzione italiana</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Dairy and Gluten Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
                'price_retail' => 41.70,
                'price_wholesale' => 27.80,
                'image_path' => '/img/products/sb_5b/sb5b.png',
                'thumb_image_path' => '/img/products/sb_5b/sb5b_thumb.png',
                'slug' => 'SB-5B'
            ],
            [
                'product_name_index' => 'W8Biotic Strawberries & Cream',
                'austl_number' => '260424',
                'product_name' => 'W8Biotic&trade; Strawberries & Cream',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">W8Biotic&trade; Strawberries & Cream</h4>
                <p>
                    <strong>Australian Innovation Patent No. 2016100501</strong>
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
                    <strong>Australian Innovation Patent No. 2016100501</strong>
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
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>May aid or assist weight loss by suppression of appetite in conjunction with (or as part of) a kilojoule/calorie controlled eating plan.</li>
                        <li>Maintain/support healthy energy levels.</li>
                        <li>May help enhance/improve/promote/increase energy levels.</li>
                        <li>May assist in the maintenance of normal healthy blood sugar/glucose balance in healthy individuals.</li>
                        <li>May assist in the maintenance of normal healthy blood sugar/glucose levels in healthy individuals.</li>
                        <li>Treatment of mild digestive disorders.</li>
                        <li>Helps maintain healthy digestive function.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Hi-Maize resistant starch increases satiety and so helps to reduce hunger.</li>
                        <li>Hi-Maize resistant starch is a prebiotic and produces short-chain fatty acids upon fermentation by gut bacteria, maintaining healthy colonic mucosal structure and function.</li>
                        <li>Hi-Maize resistant starch helps to maintain healthy blood glucose levels in healthy individuals.</li>
                        <li>Leucine has a unique role in the metabolic regulation of healthy blood glucose levels and in regulating skeletal muscle protein synthesis and enhancing mitochondrial function.</li>
                        <li>Lactobacillus plantarum (Med 25) and Lactobacillus paracasei (Med 24) naturally synthesise alpha-hydroxy isocaproic acid (HICA) from leucine which is indicated to increase lean muscle mass.</li>
                        <li>L-carnitine modulates energy expenditure in healthy individuals.</li>
                        <li>L-carnitine is responsible for beta-oxidation of long-chain fatty acids and plays a key role in mitochondrial energy production and function.</li>
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
                    <ul>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
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
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
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
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Strawberries and cream flavour</p>
                                <p>Malic acid</p>
                                <p>Stevia</p>
                                <p>Silica</p>
                                <p>Thaumatin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-strawberries-and-cream/cmi/english" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-strawberries-and-cream/cmi/arabic" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-strawberries-and-cream/cmi/spanish" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-strawberries-and-cream/cmi/italian" target="_blank">Traduzione italiana</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-strawberries-and-cream/cmi/french" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-strawberries-and-cream/cmi/chinese" target="_blank">中文翻译</a>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Lactose Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                <p class="medlab_product_content_sub_title">
                    No artificial colours, flavours or sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 44.16,
                'price_wholesale' => 29.44,
                'image_path' => '/img/products/w8biotic/w8biotic.png',
                'thumb_image_path' => '/img/products/w8biotic/thumb_w8biotic.png',
            ],
            [
                'product_name_index' => 'W8Biotic Lemon & Lime',
                'austl_number' => '239105',
                'product_name' => 'W8Biotic&trade; Lemon & Lime',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">W8Biotic&trade; Lemon & Lime</h4>
                <p>
                    <strong>Australian Innovation Patent No. 2016100501</strong>
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
                    <strong>Australian Innovation Patent No. 2016100501</strong>
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
                
                
                <strong>STANDARD INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>May aid or assist weight loss by suppression of appetite in conjunction with (or as part of) a kilojoule/calorie controlled eating plan.</li>
                        <li>Maintain/support healthy energy levels.</li>
                        <li>May help enhance/improve/promote/increase energy levels.</li>
                        <li>May assist in the maintenance of normal healthy blood sugar/glucose balance in healthy individuals.</li>
                        <li>May assist in the maintenance of normal healthy blood sugar/glucose levels in healthy individuals.</li>
                        <li>Treatment of mild digestive disorders.</li>
                        <li>Helps maintain healthy digestive function.</li>
                    </ul>
                </p>
                
                <strong>SPECIFIC INDICATIONS</strong>
                
                <p>
                    <ul>
                        <li>Hi-Maize resistant starch increases satiety and so helps to reduce hunger.</li>
                        <li>Hi-Maize resistant starch is a prebiotic and produces short-chain fatty acids upon fermentation by gut bacteria, maintaining healthy colonic mucosal structure and function.</li>
                        <li>Hi-Maize resistant starch helps to maintain healthy blood glucose levels in healthy individuals.</li>
                        <li>Leucine has a unique role in the metabolic regulation of healthy blood glucose levels and in regulating skeletal muscle protein synthesis and enhancing mitochondrial function.</li>
                        <li>Lactobacillus plantarum (Med 25) and Lactobacillus paracasei (Med 24) naturally synthesise alpha-hydroxy isocaproic acid (HICA) from leucine which is indicated to increase lean muscle mass.</li>
                        <li>L-carnitine modulates energy expenditure in healthy individuals.</li>
                        <li>L-carnitine is responsible for beta-oxidation of long-chain fatty acids and plays a key role in mitochondrial energy production and function.</li>
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
                    <ul>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
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
                    Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
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
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Lemon lime flavour</p>
                                <p>Malic acid</p>
                                <p>Stevia</p>
                                <p>Silica</p>
                                <p>Thaumatin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-lemon-and-lime/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-lemon-and-lime/cmi/arabic" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-lemon-and-lime/cmi/russian" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-lemon-and-lime/cmi/spanish" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-lemon-and-lime/cmi/japanese" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-lemon-and-lime/cmi/french" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/w8biotic-lemon-and-lime/cmi/traditional_chinese" target="_blank">中文翻譯</a>
                    </p>
                    ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten and Lactose Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                <p class="medlab_product_content_sub_title">
                    No artificial colours, flavours or sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 44.16,
                'price_wholesale' => 29.44,
                'image_path' => '/img/products/w8biotic/w8biotic.png',
                'thumb_image_path' => '/img/products/w8biotic/thumb_w8biotic.png',
            ],
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
                        across the oral mucosal epithelia. NanoCelle&trade; D3 + K2 is
                        indicated to sustain mineral homeostasis facilitating optimal immune function, cardiovascular health
                        and bone metabolism, and to assist in the management of medically diagnosed vitamin D deficiency.
                        Vitamin D3 is essential for cellular and immunological function and is also essential for skeletal
                        muscle maintenance and regeneration given its primary physiological role is the absorption and binding
                        of calcium within the body. Vitamin K2 belongs to a group of fat-soluble vitamins that is
                        essential in the body for the synthesis of specific proteins required to initiate the process of blood
                        coagulation in the response to an injury and to optimize the integrity of blood vessels and bones.
                    </p>
                ',
                'practitioner_summary' =>
                    '
                    <p>
                        <strong>STANDARD INDICATIONS</strong>
                    </p>
                    <p>
                        Prevention/treatment of vitamin D3 and/or K2 nutritional deficiency. Vitamin D helps calcium absorption and a
                        diet deficient in calcium can lead to osteoporosis in later life.
                    </p>
                    <br>
                    <p>
                        <strong>SPECIFIC INDICATIONS</strong>
                    </p>

                    <p>
                        <ul>
                            <li>
                                Vitamin D is required for proper cellular and immunological function.
                            </li>
                            <li>
                                Vitamin D3 supplementation may increase serum vitamin D levels and bone mineral density (BMD) in
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
                                help to reduce bone loss in postmenopausal women.
                            </li>
                            <li>
                                Vitamin K is required for the post translational carboxylation of glutamate into gamma-carboxyglutamate
                                (Gla) residues in Gla-proteins that are required for blood coagulation and bone mineralization.
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
                    <p>
                        <strong>WARNINGS</strong>
                    </p>
                    <p>
                        <ul>
                            <li>Contains potassium sorbate.</li>
                            <li>Vitamin supplements should not replace a balanced diet.</li>
                            <li>If symptoms persist consult your healthcare practitioner.</li>
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
                                    <p>45 µg</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <strong>Excipient Ingredients</strong>
                                    </p>
                                    <p>Water-purified</p>
                                    <p>Steviol glycosides</p>
                                    <p>Modified vegetable oil</p>
                                    <p>Glycerol</p>
                                    <p>Olive oil</p>
                                    <p>Maize oil</p>
                                    <p>Anhydrous citric acid</p>
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
                        <a class="medlab_panel_content_link"href="/nutraceuticals/products/nanocelle-d3-k2/cmi/english"target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-d3-k2/cmi/french" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/nanocelle-d3-k2/cmi/chinese" target="_blank">中文翻译</a>
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
                'slug' => 'nanocelle-d3-k2'
            ],

            [
                'product_name_index' => "Immune-5 Vanilla",
                'austl_number' => '276097',
                'product_name' => 'Immune-5&trade; Vanilla',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Immune-5&trade; Vanilla</small></h4>
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with
                    two specific probiotic species shown to assist with immune function and assist with upper respiratory tract infections.
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
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with two specific
                    probiotic species shown to assist with immune function and may assist with upper respiratory tract infections. ResistAid&trade; is a
                    prebiotic soluble fibre with immune modulating properties while Lactoferrin is a naturally occurring protein found in the body
                    with broad spectrum anti-microbial and anti-viral activity. Colostrum provides important innate immune supporting proteins
                    including the antibody IgG that both activates and modulate the body defence processes.
                </p>
                ',
                'practitioner_summary' =>
                    "
                <p>
                    <strong>STANDARD INDICATIONS</strong>
                </p>
                <p>
                    <ul>
                        <li>Relief of the symptoms of colds.</li>
                        <li>Helps maintain healthy digestive function.</li>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>Relief of symptoms of mild upper respiratory infections.</li>
                        <li>For the symptomatic relief of upper respiratory tract infections.</li>
                        <li>May assist in the management of upper respiratory tract infections.</li>
                        <li>Treatment of symptoms of mild infections of upper respiratory tract.</li>
                    </ul>
                </p>
                <p>
                    <strong>SPECIFIC INDICATIONS</strong>
                </p>

                <p>
                    <ul>
                        <li>
                            May assist in supporting and maintaining healthy immune function.
                        </li>
                        <li>
                            Short-chain fatty acids produced from the metabolism of Arabinogalactan (ResistAid&trade;)
                            supports healthy immune function in healthy individuals.
                        </li>
                        <li>
                            Arabinogalactan (ResistAid&trade;) is a prebiotic and produces short-chain fatty acids upon
                            metabolism by gut bacteria, maintaining healthy colonic mucosal structure and function.
                        </li>
                        <li>
                            Lactoferrin is naturally found in colostrum and human milk and is a component of the
                            innate immune response providing broad-spectrum anti-microbial and anti-viral activity.
                        </li>
                        <li>
                            Lactoferrin combined with bovine milk-derived IgG immunoglobulins may decrease the
                            incidence of colds and may also reduce the duration of cold associated symptoms.
                        </li>
                        <li>
                            Colostrum and IgG immunoglobulins provide important innate immune supporting proteins that
                            modulate the body's defence processes and provide anti-bacterial effects.
                        </li>
                        <li>
                            Bovine colostrum is a rich source of immune factors, growth factors and bioactive proteins
                            which may support healthy immune function.
                        </li>
                        <li>
                            Immunoglobulins (Ig) are protein molecules that function as antibodies against many
                            pathogenic and potentially pathogenic microorganisms, such as bacteria and viruses.
                        </li>
                        <li>
                            The functional activities of IgG molecules, such as bactericidal effect mediated by
                            complement, viral neutralisation, inactivation of toxins and opsonisation, are important
                            for the development of an effective immune response against a large range of microorganisms
                            and their toxic products.
                        </li>
                        <li>
                            Arabinogalactan may increase the body's IgG antibody immune response to bacterial antigens.
                        </li>
                        <li>
                            Lactobacillus paracasei and Bifidobacterium animalis ssp. lactis have shown to enhance both
                            mucosal and systemic antibody (IgG and salivary IgA) responses to various vaccine challenges
                            in healthy individuals.
                        </li>
                        <li>
                            Lactobacillus paracasei and Bifidobacterium animalis ssp. lactis may improve specific immune
                            responses and influence immune regulation.
                        </li>
                    </ul>
                </p>
                <p>
                    <strong>WARNINGS</strong>
                </p>
                <p>
                    <ul>
                        <li>Bovine colostrum powder is derived from cow's milk and may contain lactose.</li>
                        <li>This product is not suitable for use in children under the age of 2 years except on professional medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>
                ",
                'side_effects' =>
                    "
                <p>
                    If symptoms persist consult your healthcare practitioner. Not to be used in children under two years of
                    age except on professional health advice. Colostrum is derived from cow’s milk and contains lactose and cow's
                    milk proteins.
                </p>
                ",
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
                                    Arabinogalactan (ResistAid&trade;)
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
                                    Lactobacillus paracasei (MED 24)
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
                                    Bifidobacterium lactis (MED 13)
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
                                <p>Natural Vanilla Flavour</p>
                                <p>Stevia</p>
                                <p>Silica</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/immune-5-vanilla/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/immune-5-vanilla/cmi/spanish" target="_blank">Traducción en español</a>
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
                'slug' => 'immune-5-vanilla'
            ],

            [
                'product_name_index' => "Immune-5 Raspberry",
                'austl_number' => '276104',
                'product_name' => 'Immune-5&trade; Raspberry',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Immune-5&trade; Raspberry</small></h4>
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with
                    two specific probiotic species shown to assist with immune function and assist with upper respiratory tract infections.
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
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with two specific
                    probiotic species shown to assist with immune function and may assist with upper respiratory tract infections. ResistAid&trade; is a
                    prebiotic soluble fibre with immune modulating properties while Lactoferrin is a naturally occurring protein found in the body
                    with broad spectrum anti-microbial and anti-viral activity. Colostrum provides important innate immune supporting proteins
                    including the antibody IgG that both activates and modulate the body defence processes.
                </p>
                ',
                'practitioner_summary' =>
                    "
                <p>
                    <strong>STANDARD INDICATIONS</strong>
                </p>
                <p>
                    <ul>
                        <li>May assist in the management of upper respiratory tract infections.</li>
                        <li>Relief of the symptoms of colds.</li>
                        <li>Helps maintain healthy digestive function.</li>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being.</li>
                        <li>For the symptomatic relief of upper respiratory tract infections.</li>
                        <li>Relief of symptoms of mild upper respiratory infections.</li>
                        <li>Treatment of symptoms of mild infections of upper respiratory tract.</li>
                    </ul>
                </p>
                <p>
                    <strong>SPECIFIC INDICATIONS</strong>
                </p>

                <p>
                    <ul>
                        <li>
                            May assist in supporting and maintaining healthy immune function.
                        </li>
                        <li>
                            Short-chain fatty acids produced from the metabolism of Arabinogalactan (ResistAid&trade;) supports healthy immune
                            function in healthy individuals.
                        </li>
                        <li>
                            Arabinogalactan (ResistAid&trade;) is a prebiotic and produces short-chain fatty acids upon
                            metabolism by gut bacteria, maintaining healthy colonic mucosal structure and function.
                        </li>
                        <li>
                            Lactoferrin is naturally found in colostrum and human milk and is a component of the
                            innate immune response providing broad-spectrum anti-microbial and anti-viral activity.
                        </li>
                        <li>
                            Colostrum and IgG immunoglobulins provide important innate immune supporting proteins that
                            modulate the body's defence processes and provide anti-bacterial effects.
                        </li>
                        <li>
                            Bovine colostrum is a rich source of immune factors, growth factors and bioactive proteins
                            which may support healthy immune function.
                        </li>
                        <li>
                            Immunoglobulins (Ig) are protein molecules that function as antibodies against many
                            pathogenic and potentially pathogenic microorganisms, such as bacteria and viruses.
                        </li>
                        <li>
                            The functional activities of IgG molecules, such as bactericidal effect mediated by
                            complement, viral neutralisation, inactivation of toxins and opsonisation, are important
                            for the development of an effective immune response against a large range of microorganisms
                            and their toxic products.
                        </li>
                        <li>
                            Arabinogalactan may increase the body's IgG antibody immune response to bacterial antigens.
                        </li>
                        <li>
                            Lactobacillus paracasei and Bifidobacterium animalis ssp. lactis have shown to enhance both
                            mucosal and systemic antibody (IgG and salivary IgA) responses to various vaccine challenges
                            in healthy individuals.
                        </li>
                        <li>
                            Lactobacillus paracasei and Bifidobacterium animalis ssp. lactis may improve specific immune
                            responses and influence immune regulation.
                        </li>
                        <li>
                            Lactoferrin combined with bovine milk-derived IgG immunoglobulins may decrease the
                            incidence of colds and may also reduce the duration of cold associated symptoms.
                        </li>
                    </ul>
                </p>
                <p>
                    <strong>WARNINGS</strong>
                </p>
                <p>
                    <ul>
                        <li>Bovine colostrum powder is derived from cow's milk and may contain lactose.</li>
                        <li>This product is not suitable for use in children under the age of 2 years except on professional medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>
                ",
                'side_effects' =>
                    "
                <p>
                    If symptoms persist consult your healthcare practitioner. Not to be used in children under two years of
                    age except on professional health advice. Colostrum is derived from cow’s milk and contains lactose and cow's
                    milk proteins.
                </p>
                ",
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
                                    Arabinogalactan (ResistAid&trade;)
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
                                    Lactobacillus paracasei (MED 24)
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
                                    Bifidobacterium lactis (MED 13)
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
                                <p>Natural Raspberry Flavour</p>
                                <p>Stevia</p>
                                <p>Silica</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/immune-5-raspberry/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/immune-5-raspberry/cmi/spanish" target="_blank">Traducción en español</a>
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
                'slug' => 'immune-5-raspberry'
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
        if(!empty($modify_array['austl_number'])) {
            $product->austl_number = $modify_array['austl_number'];
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
        if(!empty($modify_array['ingredients'])) {
            $product->ingredients = $modify_array['ingredients'];
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
        /*
        if(!empty($modify_array['in_stock'])) {
            $product->in_stock = $modify_array['in_stock'];
        }*/
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
