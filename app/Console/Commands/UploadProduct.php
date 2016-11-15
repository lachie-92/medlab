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
            'product_name_index' => '12Mg Optima Relax 300',
            'austl_number' => '262421',
            'product_name' => '<sup>12</sup>Mg Optima&trade; Relax 300g',
            'short_description' =>
                '
                    <h4 class="medlab_product_content_title"><sup>12</sup>Mg Optima&trade; Relax 300g</h4>
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
                            <li>Help reduce effects of mild anxiety and nervous tension. [Warning S required]</li>
                            <li>For the symptomatic relief of stress disorders. [Warning S required]</li>
                            <li>May assist in the management of stress disorders. [Warning S required]</li>
                            <li>Beneficial during times of stress. [Warning S required]</li>
                            <li>Non-vitamin active ingredients in this product may be beneficial during times of stress. [Warning S required]</li>
                            <li>Non-vitamin active ingredients may improve stress adaptation.</li>
                            <li>Herbal blend which helps relieve stress of study or work. [Warning S required]</li>
                            <li>May help reduce the frequency of migraines.</li>
                            <li>Helps relieve nervous tension, stress and mild anxiety. [Warning S required]</li>
                            <li>Relief of muscular aches and pains. [Warning S required]</li>
                            <li>May assist in the management of anxiety. [Warning S required]</li>
                            <li>Non-vitamin active ingredients in this product help relieve nervous tension, stress and mild anxiety. [Warning S required]</li>
                            <li>For the symptomatic relief of anxiety. [Warning S required]</li>
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
                        Vitamins can only be of assistance if the dietary vitamin intake is inadequate. OR Vitamin supplements should not replace a balanced diet. If symptoms persist consult your healthcare practitioner (or words to that effect).
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
                                    <p>(bislgycinate chelate)</p>
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
                                <td width="273" valign="top">
                                    <p>L-theanine</p>
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            'cmi' =>
                '
                        <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Mg-Optima/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                            <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Mg-Optima/Arabic.pdf" target="_blank">الترجمة العربية </a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                            <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Mg-Optima/Spanish.pdf">Traducción en español</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                            <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Mg-Optima/Russian.pdf" target="_blank">Перевод на русском языке</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                            <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Mg-Optima/Japanese.pdf" target="_blank">日本語翻訳</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                            <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Mg-Optima/French.pdf" target="_blank">Traduction en français</a>
                        </p>
                        <p>
                            <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                            <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Mg-Optima/Chinese.pdf" target="_blank">中文翻译</a>
                        </p>
                        <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Mg-Optima/Italian.pdf" target="_blank">Traduzione italiana</a>
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
            'price_wholesale' => 47.99,
            'image_path' => '/img/products/12mg_optima/mg_optima_relax_300g.jpeg',
            'thumb_image_path' => '/img/products/12mg_optima/thumb_mg_optima_relax_300g.jpeg',
            'slug' => '12mg-optima-relax-300g',
            'in_stock' => true,
        ]);
        

        Model::reguard();
    }
}