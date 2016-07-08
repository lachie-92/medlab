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
                'product_name_index' => '12Mg Optima Relax',
                'product_name' => '<sup>12</sup>Mg Optima&trade; Relax',
                'short_description' =>
                    '
                    <h4 class="medlab_product_content_title"><sup>12</sup>Mg Optima&trade; Relax</h4>
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
                    <p>
                        Mg Optima<sup>TM</sup> Relax contains evidenced-based ingredients to support the natural metabolic
                        pathways for gamma-aminobutyric acid (GABA) production and activity, indicated to promote relaxation
                        during times of stress. Albion ® Magnesium bisglycinate is scientifically designed to provide a
                        highly bioavailable form of magnesium. Magnesium may act as a GABA receptor agonist and also has a
                        binding site on the glutamate receptors helping to regulate the activity of this main excitatory
                        neurotransmitter.<sup>1</sup> Glycine functions as an inhibitory neurotransmitter in the nervous
                        system while glutamine is a precursor to GABA production.<sup>2</sup> Theanine is an amino acid
                        from Green Tea that promotes relaxation via binding to glutamate receptors.<sup>3</sup> Pyridoxal
                        (vitamin B6) is a cofactor for the enzyme Glutamate decarboxylase that synthesises GABA from
                        glutamate.<sup>4</sup> Zinc also has a binding site on the glutamate receptor and may act as a
                        modulator for both excitatory and inhibitory neurotransmission.<sup>5</sup>
                    </p>
                    <p>
                        <strong>Magnesium</strong>
                    </p>
                    <p>
                        Magnesium is predominantly located intra-cellular in bone, muscles and non-muscular soft tissues
                        while only 1% of total magnesium is found in serum and red blood cells. Magnesium needs to be
                        consumed in the diet regularly to prevent the risk of magnesium deficiency and due to the increased
                        consumption of processed foods; magnesium intake in the western world is decreasing. Magnesium is a
                        cofactor in more than 300 enzymatic reactions, critically stabilising enzymes, including many
                        ATP-generating reactions. ATP metabolism, muscle contraction and relaxation, normal neurological
                        function and release of neurotransmitters are all magnesium dependent.<sup>6</sup> While evidence
                        generally does not support the use of magnesium for skeletal muscle cramps with many studies
                        producing null effect<sup>7,8</sup>, there is evidence to suggest oral magnesium supplementation
                        can improve anaerobic metabolism in athletes, decreasing lactate production<sup>9</sup> and
                        improving physical performance in healthy elderly women involved in an exercise program.<sup>10</sup>
                    </p>
                    <p>
                        Magnesium may function as a GABA receptor agonist promoting the effects of GABA. Further, in the
                        central nervous system (CNS), magnesium ions block NMDAR channels at resting membrane potentials.
                        The binding site for magnesium ions is deep within the channel. This block is voltage-dependent but
                        ion flux occurs when the membrane potential is depolarized. NMDAR receptors are glutamate-binding
                        sites, being the major excitatory neurotransmitter in the CNS.<sup>11</sup> See Figure 1.
                    </p>
                    <p>
                        <img class="img-responsive" src="/img/products/12mg_optima/GABA_Glutamate_fig1.jpg" alt="">
                    </p>
                    <p>
                        <strong>Fig 1. Neurotransmitter signalling<sup>12</sup></strong>
                    </p>
                    <p>
                        <strong>Glycine</strong>
                    </p>
                    <p>
                        Glycine functions as one of the major inhibitory neurotransmitters in the CNS with a high density
                        of glycine containing neurons being found in spinal cord and brain stem. When glycine binds to its
                        receptor it opens the anion channel allowing an influx of chloride ions into the postsynaptic
                        neuron causing hyperpolarization that raises the threshold for neuronal firing and thereby inhibits
                        the postsynaptic neuron.<sup>2,13</sup>
                    </p>
                    <p>
                        <strong>Glutamine</strong>
                    </p>
                    <p>
                        Glutamine and glutamate are amino acids. Several studies show that concentrations of serum
                        glutamine in the body are diminished during times of physical or psychological stress and further
                        that patients presenting with exhaustion, anxiety, sleeplessness and lack of concentration have
                        low serum glutamate concentration. Glutamine and glutamate synthesis occur interchangeably
                        (see figure 2). Glutamine converts to glutamate using NADPH as a cofactor and glutamate is a
                        precursor for GABA production using vitamin B6 as a cofactor.<sup>15-19</sup>
                    </p>
                    <p>
                        <img class="img-responsive" src="/img/products/12mg_optima/Mgoptima_Fig2.jpg" alt="">
                    </p>
                    <p>
                        <strong>Fig 2. GABA is synthesized from Glutamine and Glutamate<sup>20</sup></strong>
                    </p>
                    <p>
                        <strong>L-Theanine</strong>
                    </p>
                    <p>
                        Theanine is a novel plant-based amino acid found in tea (<em>Camellia sinensis</em>) leaves.
                        Theanine is an analog of glutamic acid and is able to bind to glutamate receptor subtypes (AMPA,
                        kainite and NMDA receptors) and block the binding of glutamate to the receptors, albeit with less
                        affinity for the receptor than glutamate.<sup>21</sup> Studies have shown that L-Theanine is
                        useful in the treatment of anxiety due to its ability to regulate neurotransmitter function in
                        the CNS as well as improving the quality of sleep. L-Theanine supplementation in the standard
                        dosages (50-250mg) has been shown to increase α-brainwaves in otherwise healthy persons, which
                        is indicative of a perceived state of relaxation. This may only occur in persons with higher
                        baseline anxiety or under periods of stress, but has been shown to occur during closed eye rest
                        as well as during visuospatial tasks around 30 minutes after ingestion.<sup>22-26</sup> See Figure
                        1.
                    </p>
                    <p>
                        When administered orally, L-Theanine peaks in serum within an hour and appears in the urine after
                        5 hours. Theanine reaches maximum concentration in the brain within 5 hours and gradually
                        disappears within 24 hours. It freely crosses the blood-brain barrier and appears in the brain
                        within an hour after ingestion.<sup>27</sup> A recent study demonstrated that L-Theanine could
                        cause anti-stress activity via inhibition of cortical neuron excitation. The results showed that
                        L-Theanine intake resulted in a reduction in the heart rate (HR) and salivary immunoglobulin A
                        (s-IgA) responses to an acute stress task relative to the placebo control group that the authors
                        attributed to an attenuation of sympathetic nervous activation.<sup>3</sup>
                    </p>
                    <p>
                        <strong>Pyridoxal 5-Phosphate (Vitamin B6)</strong>
                    </p>
                    <p>
                        Pyridoxine is the cofactor required by Glutamate decarboxylase to convert glutamate to GABA in the
                        CNS.<sup>4</sup> See Figure 2.
                    </p>
                    <p>
                        <strong>Zinc</strong>
                    </p>
                    <p>
                        Approximately 10% of total zinc in the brain is located in synaptic vesicles of certain
                        glutamatergic neurons.<sup>5</sup> Zinc may modulate neurotransmission mediated via both excitatory
                        and inhibitory amino acid receptors at specific synapses for example the NMDA glutamate receptor is
                        directly inhibited by zinc whereas GABA release from the presynapse can be potentiated
                        (see Figure 1).<sup>28</sup>
                    </p>
                    <p>
                       <strong>Clinical Summary:</strong>
                    </p>

                    <p>
                        <ul>
                            <li>To naturally increase GABA production to induce relaxation</li>
                            <li>Helps relieve symptoms of nervous tension, stress and mild anxiety </li>
                            <li>For the symptomatic relief of stress disorders. </li>
                            <li>Herbal blend which helps relieve stress of study or work </li>
                            <li>May help reduce the frequency of migraines. </li>
                            <li>
                                L-Theanine has a positive effect on mood and cognitive performance, resulting in increased
                                energy, clarity of thought, efficiency, increased alertness and increased perceived work
                                performance.
                            </li>
                        </ul>
                    </p>

                    <p>
                        <strong>Who will benefit:</strong>
                    </p>

                    <p>
                        <ul>
                            <li>Those with symptoms of anxiety and nervous tension</li>
                            <li>Those who are experiencing mild stress and associated disorders</li>
                            <li>Those who are experiencing stress associated with work and/or study</li>
                            <li>Those with magnesium deficiency</li>
                            <li>Those who are experiencing frequent migraines</li>
                            <li>Those who wish to improve their cognitive performance and mood. </li>
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
                        Magnesium supplementation is well tolerated and safe for most people but may cause stomach upset,
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
                                    <p>Silica</p>
                                    <p>Malic acid</p>
                                    <p>Silica</p>
                                    <p>Lemon lime flavour</p>
                                    <p>Stevia</p>
                                    <p>Citric acid</p>
                                    <p>Maltodextrin</p>
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
                'price_retail' => 44.01,
                'price_wholesale' => 29.32,
                'image_path' => '/img/products/12mg_optima/mg_optima_relax_150g.jpeg',
                'thumb_image_path' => '/img/products/12mg_optima/thumb_mg_optima_relax_150g.jpeg',
                'in_stock' => true
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 120s',
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
                    '
                <p>
                    <strong>Omega-3 Fatty Acids and the Cardiovascular System</strong>
                </p>
                <p>
                    Important fats that enhance the functional physiology of the cardiovascular system are
                    alpha–linolenic acid (ALA), the parent compound of the omega–3 fatty acid family, and
                    linoleic acid (LA), the parent compound of the omega–6 family. ALA and LA are essential
                    fatty acids obtained from the diet, as they cannot be synthesised. Omega–3 fatty acids
                    consist of the long-chain, polyunsaturated fatty acids (PUFA) docosahexaenoic acid (DHA)
                    and eicosapentaenoic acid (EPA) that are of marine origin with oily fish being the richest
                    dietary source.<sup>1</sup>Omega-3 fatty acids have important physiological properties that
                    include anti-inflammatory, antiarrhythmic and antithrombotic properties.<sup>2</sup>
                </p>
                <p>
                    Numerous reviews have summarised the cardiovascular benefits of fish and fish oil consumption
                    in the primary<sup>3</sup> and secondary<sup>4</sup> prevention of cardiovascular conditions.
                    Research on nutrient intakes has shown that regular consumption of omega-3 fats significantly
                    lowers heart-disease risk.<sup>3,4</sup> For example, a report of a cohort from the Nurses
                    Health Study<sup>5</sup> showed that women who ate two-to-four servings of fish a week
                    reduced heart disease risk by 30 per cent. Further, it has been shown that omega–3s reduce
                    blood pressure and heart rate, lower blood triglycerides and increase HDL cholesterol, and
                    make blood less likely to form clots and create life-threatening thromboses.<sup>5</sup>
                </p>
                <p>
                    <strong>Omega-3 Fatty Acids and the Neurocognitive System</strong>
                </p>
                <p>
                    As a predominant structural component of neural membranes in the brain and retina, DHA has
                    demonstrated to have a positive effect on membrane fluidity and permeability, receptor
                    structure and quantity, carrier mediated transport of nutrients into and out of the cell,
                    enzymatic activities, cell to cell communication and signaling as well as the microenvironment
                    of retinal photoreceptor outer segments.<sup>6,7</sup>
                </p>
                <p>
                    DHA has been reported to be of significant importance for foetal brain development, for the
                    optimal development of visual acuity and overall motor skills in infants, to help maintain
                    healthy and balanced lipid metabolism in children and adults, and to support cognition in
                    the elderly.<sup>8</sup> In the area of anti-ageing medicine, essential fatty-acids, in
                    particular the omega-3 long-chain PUFAs, are also increasingly being investigated as
                    therapeutic agents with potential to limit the cognitive decline that accompanies the ageing
                    brain. Furthermore, during ageing, there is also a decrease in brain levels of DHA, and the
                    consumption of fish correlates with a decreased risk of dementia and Alzheimer’s disease.
                    The reported daily use of fish-oil supplements, although limited in evidence status,
                    suggests a possible association between omega–3 fatty acids and reduced risk of
                    dementia.<sup>9,10</sup>
                </p>
                <p>
                    <strong>Coenzyme Q10 as Ubiquinol for Cardiovascular Health</strong>
                </p>
                <p>
                    There is nothing more critical for all anabolic and catabolic cellular functions than an adequate,
                    constant supply of bioenergy.<sup>11</sup> Coenzyme Q10 (CoQ10) plays a central role in cellular
                    bioenergy generation and its regulation. Closed membrane systems generate a proton motive force to
                    create transient localized bio-capacitors; the captured energy is used for the synthesis of
                    mitochondrial ATP but also for many other processes, such as metabolite translocations, nerve
                    conduction and a host of other bioenergy requiring processes. Coenzyme Q10 plays a key role
                    in many of these sub-cellular membrane energy generating systems. Integral to this phenomenon
                    is the prooxidant role of coenzyme Q10 in generating the major superoxide anion/hydrogen
                    peroxide second messenger system.<sup>11</sup>
                </p>
                <p>
                    A recent review has reported that with advancing age there is a major risk factor for the
                    development of cardiovascular conditions.<sup>12</sup> Moreover that the aetiology of several
                    cardiovascular disorders are thought to involve impaired mitochondrial function and metabolic
                    dysfunction and more importantly of mitochondrial loss (mytophagy and autophagy).<sup>13</sup>
                    CoQ10 acts as both an antioxidant and as a pro-oxidant at the level of the
                    mitochondria.<sup>11</sup> Furthermore, in patients with cardiac conditions, plasma
                    CoQ10 has been found to be an independent predictor of mortality. Based on the fundamental
                    role of CoQ10 in mitochondrial bioenergetics and its well-acknowledged metabolic promoting
                    properties, several clinical trials evaluating CoQ10 have been undertaken in cardiovascular
                    disorders of ageing including chronic heart failure, hypertension and endothelial
                    dysfunction.<sup>12</sup>
                </p>
                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being</li>
                        <li>Supports healthy cardiovascular and neurocognitive health</li>
                        <li>Supports healthy cholesterol and triglyceride levels in healthy individuals</li>
                        <li>Supports healthy endothelial and blood coagulation function in healthy individuals</li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Those requiring cardiovascular support</li>
                        <li>Those requiring neurocognitive support</li>
                    </ul>
                </p>
                ',
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
                    Consuming Fish Oils and CoQ10 is likely safe for most people but may cause minor side effects.
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
                                <p style="padding-left: 30px;">Ubiquinol (Coenzyme Q10)</p>
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
                                <p>Gelatin capsules</p>
                                <p>Vanillin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Italian.pdf" target="_blank">Traduzione italiana</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 60s',
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
                    '
                <p>
                    <strong>Omega-3 Fatty Acids and the Cardiovascular System</strong>
                </p>
                <p>
                    Important fats that enhance the functional physiology of the cardiovascular system are
                    alpha–linolenic acid (ALA), the parent compound of the omega–3 fatty acid family, and
                    linoleic acid (LA), the parent compound of the omega–6 family. ALA and LA are essential
                    fatty acids obtained from the diet, as they cannot be synthesised. Omega–3 fatty acids
                    consist of the long-chain, polyunsaturated fatty acids (PUFA) docosahexaenoic acid (DHA)
                    and eicosapentaenoic acid (EPA) that are of marine origin with oily fish being the richest
                    dietary source.<sup>1</sup>Omega-3 fatty acids have important physiological properties that
                    include anti-inflammatory, antiarrhythmic and antithrombotic properties.<sup>2</sup>
                </p>
                <p>
                    Numerous reviews have summarised the cardiovascular benefits of fish and fish oil consumption
                    in the primary<sup>3</sup> and secondary<sup>4</sup> prevention of cardiovascular conditions.
                    Research on nutrient intakes has shown that regular consumption of omega-3 fats significantly
                    lowers heart-disease risk.<sup>3,4</sup> For example, a report of a cohort from the Nurses
                    Health Study<sup>5</sup> showed that women who ate two-to-four servings of fish a week
                    reduced heart disease risk by 30 per cent. Further, it has been shown that omega–3s reduce
                    blood pressure and heart rate, lower blood triglycerides and increase HDL cholesterol, and
                    make blood less likely to form clots and create life-threatening thromboses.<sup>5</sup>
                </p>
                <p>
                    <strong>Omega-3 Fatty Acids and the Neurocognitive System</strong>
                </p>
                <p>
                    As a predominant structural component of neural membranes in the brain and retina, DHA has
                    demonstrated to have a positive effect on membrane fluidity and permeability, receptor
                    structure and quantity, carrier mediated transport of nutrients into and out of the cell,
                    enzymatic activities, cell to cell communication and signaling as well as the microenvironment
                    of retinal photoreceptor outer segments.<sup>6,7</sup>
                </p>
                <p>
                    DHA has been reported to be of significant importance for foetal brain development, for the
                    optimal development of visual acuity and overall motor skills in infants, to help maintain
                    healthy and balanced lipid metabolism in children and adults, and to support cognition in
                    the elderly.<sup>8</sup> In the area of anti-ageing medicine, essential fatty-acids, in
                    particular the omega-3 long-chain PUFAs, are also increasingly being investigated as
                    therapeutic agents with potential to limit the cognitive decline that accompanies the ageing
                    brain. Furthermore, during ageing, there is also a decrease in brain levels of DHA, and the
                    consumption of fish correlates with a decreased risk of dementia and Alzheimer’s disease.
                    The reported daily use of fish-oil supplements, although limited in evidence status,
                    suggests a possible association between omega–3 fatty acids and reduced risk of
                    dementia.<sup>9,10</sup>
                </p>
                <p>
                    <strong>Coenzyme Q10 as Ubiquinol for Cardiovascular Health</strong>
                </p>
                <p>
                    There is nothing more critical for all anabolic and catabolic cellular functions than an adequate,
                    constant supply of bioenergy.<sup>11</sup> Coenzyme Q10 (CoQ10) plays a central role in cellular
                    bioenergy generation and its regulation. Closed membrane systems generate a proton motive force to
                    create transient localized bio-capacitors; the captured energy is used for the synthesis of
                    mitochondrial ATP but also for many other processes, such as metabolite translocations, nerve
                    conduction and a host of other bioenergy requiring processes. Coenzyme Q10 plays a key role
                    in many of these sub-cellular membrane energy generating systems. Integral to this phenomenon
                    is the prooxidant role of coenzyme Q10 in generating the major superoxide anion/hydrogen
                    peroxide second messenger system.<sup>11</sup>
                </p>
                <p>
                    A recent review has reported that with advancing age there is a major risk factor for the
                    development of cardiovascular conditions.<sup>12</sup> Moreover that the aetiology of several
                    cardiovascular disorders are thought to involve impaired mitochondrial function and metabolic
                    dysfunction and more importantly of mitochondrial loss (mytophagy and autophagy).<sup>13</sup>
                    CoQ10 acts as both an antioxidant and as a pro-oxidant at the level of the
                    mitochondria.<sup>11</sup> Furthermore, in patients with cardiac conditions, plasma
                    CoQ10 has been found to be an independent predictor of mortality. Based on the fundamental
                    role of CoQ10 in mitochondrial bioenergetics and its well-acknowledged metabolic promoting
                    properties, several clinical trials evaluating CoQ10 have been undertaken in cardiovascular
                    disorders of ageing including chronic heart failure, hypertension and endothelial
                    dysfunction.<sup>12</sup>
                </p>
                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>Aids, assists or helps in the maintenance or improvement of general well-being</li>
                        <li>Supports healthy cardiovascular and neurocognitive health</li>
                        <li>Supports healthy cholesterol and triglyceride levels in healthy individuals</li>
                        <li>Supports healthy endothelial and blood coagulation function in healthy individuals</li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Those requiring cardiovascular support</li>
                        <li>Those requiring neurocognitive support</li>
                    </ul>
                </p>
                ',
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
                    Consuming Fish Oils and CoQ10 is likely safe for most people but may cause minor side effects.
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
                                <p style="padding-left: 30px;">Ubiquinol (Coenzyme Q10)</p>
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
                                <p>Gelatin capsules</p>
                                <p>Vanillin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanCoQ1/Italian.pdf" target="_blank">Traduzione italiana</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 120s',
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
                    '
                <p>
                    <strong>Omega-3 Fatty Acids and the Cardiovascular System</strong>
                </p>
                <p>
                    Important fats that enhance the functional physiology of the cardiovascular system are
                    alpha–linolenic acid (ALA), the parent compound of the omega–3 fatty acid family, and
                    linoleic acid (LA), the parent compound of the omega–6 family. ALA and LA are essential
                    fatty acids obtained from the diet, as they cannot be synthesised. Omega–3 fatty acids
                    consist of the long-chain, polyunsaturated fatty acids (PUFA) docosahexaenoic acid (DHA)
                    and eicosapentaenoic acid (EPA) that are of marine origin with oily fish being the richest
                    dietary source.<sup>1</sup>Omega-3 fatty acids have important physiological properties that
                    include anti-inflammatory, antiarrhythmic and antithrombotic properties.<sup>2</sup>
                </p>
                <p>
                    Numerous reviews have summarised the cardiovascular benefits of fish and fish oil consumption
                    in the primary<sup>3</sup> and secondary<sup>4</sup> prevention of cardiovascular conditions.
                    Research on nutrient intakes has shown that regular consumption of omega-3 fats significantly
                    lowers heart-disease risk.<sup>3,4</sup> For example, a report of a cohort from the Nurses
                    Health Study<sup>5</sup> showed that women who ate two-to-four servings of fish a week
                    reduced heart disease risk by 30 per cent. Further, it has been shown that omega–3s reduce
                    blood pressure and heart rate, lower blood triglycerides and increase HDL cholesterol, and
                    make blood less likely to form clots and create life-threatening thromboses.<sup>5</sup>
                </p>
                <p>
                    <strong>Plant Sterols for Healthy Blood Cholesterol and Triglyceride Support</strong>
                </p>
                <p>
                    Plant sterols were first described for their cholesterol lowering effects in the 1950’s, when they
                    were isolated from vegetable fats/oils and pine trees and were chemically analyzed for their
                    effectiveness. Plant sterol and stanols can lower blood cholesterol by decreasing intestinal
                    absorption of cholesterol. Given that sterols and stanols structurally resemble cholesterol,
                    they interfere with micellar solubilisation of dietary and biliary cholesterol present in the
                    intestinal lumen and therefore less cholesterol is absorbed into the systemic circulation.
                    <sup>6-8</sup> Besides lowering serum LDL-C concentrations, it has been shown that plant sterol
                    and stanol esters lower serum TAG levels, particularly in subjects with the metabolic syndrome
                    who are characterized by elevated TAG concentrations. The mechanism of lowering TAGs has
                    theoretically been proposed to be due to either acting on enhanced clearance from the circulation
                    or decreased TAG appearance in the circulation.<sup>9</sup> Furthermore, murine studies have shown
                    that plant sterols and stanols can protect against a high fat, high cholesterol diet-induced
                    non-alcoholic steatohepatitis (NASH) – liver inflammation but not from liver fatty acid
                    accumulation. <sup>10</sup>
                </p>
                <p>
                    A meta-analysis of 41 trials concluded that on average, an intake of 1.5-2.0 g/day of stanol and
                    sterols decreased LDL-C by 10%.<sup>11</sup> An additional study of 59 clinical studies concluded
                    that plant sterol containing products reduced LDL concentrations but the reduction was related to
                    individuals\' baseline LDL levels, food carrier, and frequency and time of intake.<sup>12</sup>
                    Both studies similarly concluded that ingesting greater than 2.5 grams per day of plant sterols
                    and stanols did not add any greater benefits of lowering a greater percentage of blood cholesterol.
                    <sup>11,12</sup>
                </p>
                <p>
                    <strong>Omega-3 Fatty Acids combined with Plant Sterols</strong>
                </p>
                <p>
                    A recent randomized, double-blind, placebo-controlled, parallel efficacy study investigated the
                    dose-response relation between a low dose (&lt;2 g/d) of EPA + DHA from fish oil combined with
                    plant sterols and the affect on serum TAGs and LDL-C levels.<sup>13</sup>A total of 247
                    participants were included in the study and randomised to either the control group or 1 of 4
                    interventions containing a fixed amount of plant sterols (2.5 g/d) and varying amounts of EPA +
                    DHA (0-1.8 g/d) for 4 weeks. The authors reported that a combination of EPA + DHA from fish oil
                    and plant sterols decreases serum TAGs concentrations in a dose-dependent manner (9-16%) while
                    also decreasing LDL-C concentrations (≈ 13%) in a population with elevated cholesterol but normal
                    TAG levels.<sup>13</sup>
                </p>
                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>May help to reduce intestinal absorption of cholesterol from dietary and biliary sources.</li>
                        <li>May assist in the maintenance of serum cholesterol and triglyceride levels within the normal range in healthy individuals.</li>
                        <li>May assist in maintenance of a healthy LDL:HDL cholesterol ratio. </li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Those needing to maintain healthy cholesterol levels whilst prescribed cholesterol lowering medications.</li>
                        <li>Those adhering to lifestyle interventions consisting of prudent nutritional practices and physical activity.</li>
                    </ul>
                </p>
                ',
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
                    Consuming Fish Oils and Plant Sterols is likely safe for most people but may cause minor side
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
                                <p style="padding-left: 30px;">
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
                                <p>Gelatin capsules</p>
                                <p>Vanillin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Italian.pdf" target="_blank">Traduzione italiana</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 60s',
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
                    '
                <p>
                    <strong>Omega-3 Fatty Acids and the Cardiovascular System</strong>
                </p>
                <p>
                    Important fats that enhance the functional physiology of the cardiovascular system are
                    alpha–linolenic acid (ALA), the parent compound of the omega–3 fatty acid family, and
                    linoleic acid (LA), the parent compound of the omega–6 family. ALA and LA are essential
                    fatty acids obtained from the diet, as they cannot be synthesised. Omega–3 fatty acids
                    consist of the long-chain, polyunsaturated fatty acids (PUFA) docosahexaenoic acid (DHA)
                    and eicosapentaenoic acid (EPA) that are of marine origin with oily fish being the richest
                    dietary source.<sup>1</sup>Omega-3 fatty acids have important physiological properties that
                    include anti-inflammatory, antiarrhythmic and antithrombotic properties.<sup>2</sup>
                </p>
                <p>
                    Numerous reviews have summarised the cardiovascular benefits of fish and fish oil consumption
                    in the primary<sup>3</sup> and secondary<sup>4</sup> prevention of cardiovascular conditions.
                    Research on nutrient intakes has shown that regular consumption of omega-3 fats significantly
                    lowers heart-disease risk.<sup>3,4</sup> For example, a report of a cohort from the Nurses
                    Health Study<sup>5</sup> showed that women who ate two-to-four servings of fish a week
                    reduced heart disease risk by 30 per cent. Further, it has been shown that omega–3s reduce
                    blood pressure and heart rate, lower blood triglycerides and increase HDL cholesterol, and
                    make blood less likely to form clots and create life-threatening thromboses.<sup>5</sup>
                </p>
                <p>
                    <strong>Plant Sterols for Healthy Blood Cholesterol and Triglyceride Support</strong>
                </p>
                <p>
                    Plant sterols were first described for their cholesterol lowering effects in the 1950’s, when they
                    were isolated from vegetable fats/oils and pine trees and were chemically analyzed for their
                    effectiveness. Plant sterol and stanols can lower blood cholesterol by decreasing intestinal
                    absorption of cholesterol. Given that sterols and stanols structurally resemble cholesterol,
                    they interfere with micellar solubilisation of dietary and biliary cholesterol present in the
                    intestinal lumen and therefore less cholesterol is absorbed into the systemic circulation.
                    <sup>6-8</sup> Besides lowering serum LDL-C concentrations, it has been shown that plant sterol
                    and stanol esters lower serum TAG levels, particularly in subjects with the metabolic syndrome
                    who are characterized by elevated TAG concentrations. The mechanism of lowering TAGs has
                    theoretically been proposed to be due to either acting on enhanced clearance from the circulation
                    or decreased TAG appearance in the circulation.<sup>9</sup> Furthermore, murine studies have shown
                    that plant sterols and stanols can protect against a high fat, high cholesterol diet-induced
                    non-alcoholic steatohepatitis (NASH) – liver inflammation but not from liver fatty acid
                    accumulation. <sup>10</sup>
                </p>
                <p>
                    A meta-analysis of 41 trials concluded that on average, an intake of 1.5-2.0 g/day of stanol and
                    sterols decreased LDL-C by 10%.<sup>11</sup> An additional study of 59 clinical studies concluded
                    that plant sterol containing products reduced LDL concentrations but the reduction was related to
                    individuals\' baseline LDL levels, food carrier, and frequency and time of intake.<sup>12</sup>
                    Both studies similarly concluded that ingesting greater than 2.5 grams per day of plant sterols
                    and stanols did not add any greater benefits of lowering a greater percentage of blood cholesterol.
                    <sup>11,12</sup>
                </p>
                <p>
                    <strong>Omega-3 Fatty Acids combined with Plant Sterols</strong>
                </p>
                <p>
                    A recent randomized, double-blind, placebo-controlled, parallel efficacy study investigated the
                    dose-response relation between a low dose (&lt;2 g/d) of EPA + DHA from fish oil combined with
                    plant sterols and the affect on serum TAGs and LDL-C levels.<sup>13</sup>A total of 247
                    participants were included in the study and randomised to either the control group or 1 of 4
                    interventions containing a fixed amount of plant sterols (2.5 g/d) and varying amounts of EPA +
                    DHA (0-1.8 g/d) for 4 weeks. The authors reported that a combination of EPA + DHA from fish oil
                    and plant sterols decreases serum TAGs concentrations in a dose-dependent manner (9-16%) while
                    also decreasing LDL-C concentrations (≈ 13%) in a population with elevated cholesterol but normal
                    TAG levels.<sup>13</sup>
                </p>
                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>May help to reduce intestinal absorption of cholesterol from dietary and biliary sources.</li>
                        <li>May assist in the maintenance of serum cholesterol and triglyceride levels within the normal range in healthy individuals.</li>
                        <li>May assist in maintenance of a healthy LDL:HDL cholesterol ratio. </li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Those needing to maintain healthy cholesterol levels whilst prescribed cholesterol lowering medications.</li>
                        <li>Those adhering to lifestyle interventions consisting of prudent nutritional practices and physical activity.</li>
                    </ul>
                </p>
                ',
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
                    Consuming Fish Oils and Plant Sterols is likely safe for most people but may cause minor side
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
                                <p style="padding-left: 30px;">
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
                                <p>Gelatin capsules</p>
                                <p>Vanillin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioCleanPlant/Italian.pdf" target="_blank">Traduzione italiana</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => 'Biotic Jnr.',
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
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticJnr/TraditionalChinese.pdf" target="_blank">中文翻譯</a>
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
                'price_retail' => 57.12,
                'price_wholesale' => 38.08,
                'image_path' => '/img/products/boitic_jnr/bioticjnr.png',
                'thumb_image_path' => '/img/products/boitic_jnr/thumb_bioticjnr.png',
                'in_stock' => true
            ],
            [
                'product_name_index' => "BioticNatal",
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
                <p>
                    It is only within the last decade that a complex microbiome was discovered in the placenta, amniotic fluid and
                    breast milk, which were once believed to be sterile. Infants were only thought to be exposed to microbes during birth,
                    i.e. the mother’s vaginal microbiome or that of the hospital staff and surgical environment when delivered via cesarean
                    section. The evolution of the infant gut microbiome does however begin <em>in utero</em>. Continued evolution of the microbiome
                    after birth is influenced by numerous factors including diet, medications, toxins, illness and other stressors.<sup>1,2</sup>
                </p>

                <p>
                    <strong><em>In Utero Exposure to Bacteria</em></strong>
                </p>

                <p>
                    Colonisation of the mucosa of the digestive, respiratory, urogenital tracts and the skin begins before birth.
                    The placental microbiome has recently been characterised and comprises non-pathogenic commensal microbiota from
                    the Firmicutes, Tenericutes, Proteobacteria, Bacteroides and Fusobacteria phyla, which do share some
                    similarities of the oral microbiome.<sup>2,3</sup> During the first week of life, a full term infant is largely
                    colonised by bacteria from the Actinobacteria, Proteobacteria, Bacteroides and much less by the Firmicutes.
                    Firmicutes and Tenericutes, however, dominate the gut microbiota of a pre-term infant. It is understood that
                    the exposure to antenatal sources of commensal bacteria, varies by length of gestation. During the third trimester
                    of pregnancy the bacterial density in the placenta and also that of the breast milk significantly increases.
                    Further, at this time the foetus begins to swallow large amounts of amniotic fluid that harbours commensal
                    bacteria (see Figure 1).<sup>1,2</sup>
                </p>

                <p>
                    <img alt="Human Mammary Microbiota" src="/img/products/bioticnatal/bioticnatal_figure1.jpg" class="img-responsive" title="Human Mammary Microbiota"><br>
                    <strong>Figure 1.</strong> Schematic representation of the acquisition and development of the human mammary microbiota.<sup>1</sup>
                </p>

                <p>
                    <strong><em>Breast Milk Microbiome</em></strong>
                </p>

                <p>
                    Breast milk not only provides bioactive molecules to the infant, including: immunocompetent cells, immunoglobulins,
                    fatty acids, oligosaccharides, lactoferrin and antimicrobial peptides, but constitutes one of the main sources of
                    bacteria to the breast fed infant gut and a baby consuming approximately 800 mL/day of milk would ingest between
                    1 x10<sup>5</sup> – 1 x 10<sup>7</sup> bacteria per day. The oligosaccharides play a vital role in driving the
                    diversity of the infant gut microbiota.<sup>1</sup> Potential sources of bacteria present in human colostrum and milk
                    are proposed to be through the Enteromammary pathway, based on a plausible scientific basis. Dendritic cells (DC) are
                    able to penetrate the gut epithelium, extending dendrites into the gut lumen and directly sample/collect the bacteria.
                    Intestinal DCs and macrophages can retain small numbers of live commensal bacteria for several days in the mesenteric
                    lymph nodes. DCs can then translocate these bacteria to other body sites including the lactating mammary gland.<sup>1,4</sup>
                    The proposed method of bacterial transfer from the maternal GIT to the mammary gland is shown in Figure 2.
                </p>

                <p>
                    <img alt="Enteromammary Pathway" src="/img/products/bioticnatal/bioticnatal_figure2.jpg" class="img-responsive" title="Enteromammary Pathway"><br>
                    <strong>Figure 2. Enteromammary Pathway: </strong> Dendritic cells in the lamina propria send dendrites into the maternal gut lumen via
                    tight junctions and trap commensal gut bacteria and transport them back to the lamina propria and from here to mesenteric lymph nodes.
                    Once inside dendritic cells and/or macrophages, gut bacteria can spread to other locations such as the mammary gland and therefore into
                    breast milk and possibly the placenta, as there is a circulation of lymphocytes within the mucosal-associated lymphoid system.<sup>4</sup>
                </p>

                <p>
                    <em>Staphylococcus</em> and <em>Streptococcus</em> are among the most abundant genera found in breast milk.
                    Lactic acid bacteria in breast milk generates an anaerobic environment in the neonate gut by consuming oxygen, promoting
                    <em>Bifidobacterium</em> growth and later for several intestinal strains after weaning. The milk microbiota is
                    vital for the neonates immune and GIT maturation. Without bacteria this simply does not occur.<sup>4</sup> There are
                    large differences in neonatal gut colonisation between breastfed and formula fed infants. It has been demonstrated that
                    term breast fed infants are dominated by <em>Bifidobacteria</em> species but decreased <em>Enterobacteria</em> species,
                    whereas formula fed infants demonstrate a more diverse array of bacteria including <em>Escherichia coli, Clostridium, Bacteroides, Prevotella
                    </em> and <em>Lactobacillus</em> species.<sup>2</sup>
                </p>

                <p>
                    <strong><em>Maternal Dysbiosis</em></strong>
                </p>

                <p>
                    Alterations in the GIT microbiome is reported in numerous conditions such as obesity, type 2 diabetes mellitus, inflammatory bowel conditions,
                    depression etc. For example overweight pregnant women demonstrate low numbers of <em>Bifidobacterium</em> and <em>Bacteroides</em> species compared
                    to normal weight pregnant women.<sup>5</sup> It is apparent that the maternal GIT microbiome provides the cue for foetal and neonate colonisation
                    via the proposed bacterial translocation to breast milk, placenta and amniotic fluid. If the mother therefore has a dysbiotic gut, it will impact
                    on the type of bacteria available for colonisation of the infant. Research has shown that supplementing women during their pregnancy with probiotics
                    can lead to those selected species colonisation in the infants gut. Further studies have shown that administering <em>Lactobacillus rhamnosus</em>
                    to mothers 4 weeks before delivery and 3 weeks after delivery induced specific changes in the transfer and initial establishment of <em>Bifidobacteria</em>
                    in neonates compared to those that received placebo.<sup>5,6</sup> The administration of probiotics during pregnancy and after birth is supported by
                    numerous research papers, particularly with <em>L. rhamnosus</em> and various <em>Bifidobacteruim</em> species, however the results are not consistent.
                    Furthermore, the GIT microbiome in the neonate is responsible for re-establishing a T<sub>H</sub>1 to T<sub>H</sub>2 balance, with a stimulation of
                    T<sub>H</sub>17 and T<sub>Reg</sub> Cells involved in infant immune maturation.<sup>2</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    Who will benefit:
                </p>

                <p>
                    <ul>
                        <li>Pregnant and breast feeding mothers.</li>
                        <li>Women planning on becoming pregnant.</li>
                        <li>Women experiencing vaginosis.</li>
                        <li>Women with gastrointestinal dysbiosis and symptoms of gastrointestinal discomfort.</li>
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
                    Probiotics and lactoferrin are safe during pregnancy. Gastrointestinal symptoms such as bloating and discomfort may occur but is temporary.
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
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/English.pdf"target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/Arabic.pdf"target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/Spanish.pdf">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/Russian.pdf"target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/Japanese.pdf"target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/French.pdf"target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/Chinese.pdf"target="_blank">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/Italian.pdf"target="_blank">Traduzione italiana</a>
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
                'in_stock' => true,
                'slug' => 'bioticnatal'
            ],
            [
                'product_name_index' => "Enbiotic 120's",
                'product_name' => 'Enbiotic&trade; 120&#39;s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Enbiotic&trade; 120&#39;s</h4>
                <p>
                    <strong>PATENT PROTECTED</strong>
                </p>
                <p>
                    EnBiotic&trade; is a high quality, high strength digestive enzyme and probiotic combination developed to
                    assist with digestive function and nutrient absorption.
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
                    EnBiotic&trade; is a digestive enzyme and multi-species probiotic formulation. EnBiotic&trade;
                    contains 241.6 mg of plant and fungal-derived digestive enzymes and 8.75 billion CFU
                    (colony forming units) of bacteria per capsule. This combination may support digestive function of
                    dietary fats, proteins and carbohydrates and assist in the management of indigestion, altered bowel
                    habits and gastrointestinal discomfort.
                </p>
                ',
                'practitioner_summary' =>
                    '
                <p>
                    Several factors are known to contribute to the development of poor digestive function including
                    stress, medications, poor eating habits and dietary choices, dysbiosis, ageing, illness,
                    injury/trauma and toxic exposure.<sup>1,2</sup> Symptoms of digestive dysfunction can have an debilitating
                    impact on an individuals quality of life. Symptoms range in severity and can include indigestion,
                    reflux, heartburn, constipation, diarrhoea, nausea, abdominal pain and bloating, steatorrhoea,
                    flatulence, unintentional weight loss and undigested food particles in the stool.<sup>2</sup> In conjunction
                    with addressing dietary and lifestyle choices; therapeutic options available to reduce symptomology
                    and improve digestive function and nutrient absorption include probiotic bacterial species and
                    digestive enzymes.
                </p>
                <p>
                    Commensal gastrointestinal tract (GIT) microbiota play a critical role in digestive function
                    contributing to extensive metabolism of dietary compounds (and drugs), regulating energy metabolism
                    and maintaining healthy GIT mucosal function and immune modulation.<sup>3</sup> Alteration of the GIT
                    bacteria can occur through stress, dietary changes, medication use, inflammatory conditions and
                    illness. There is extensive evidence to support the supplementation of probiotics for improving
                    digestive function, reducing symptoms and improving GIT barrier function.<sup>4,5,6</sup>
                </p>
                <p>
                    Digestive enzymes available for supplementation include pharmaceutical grade enzymes such as Creon
                    and Creon Forte, which are porcine sourced, therefore not suitable for vegetarians.  Also available
                    are fungal (from Aspergillus oryzae and Rhizopus oryzae) and plant-derived (bromelain and papain)
                    enzymes. Plant derived proteolytic enzymes include bromelain (sourced from Ananas comosus) and
                    papain (sourced from Carica papaya). Aspergillus oryzae and Rhizopus oryzae are filamentous
                    fungi that secrete vast amounts of digestive enzymes such as amylase, protease and lipase.<sup>7,8</sup>
                    Commensal bacteria are also capable of producing enzymes that assist with digestion.<sup>9</sup> Proteolytic
                    enzymes breakdown proteins into polypeptides, dipeptides and amino acids; amylolytic enzymes
                    (amylase) hydrolyze starches and other carbohydrates (not including cellulose) into disaccharides
                    and trisaccharides and lipolytic enzymes (lipase) hydrolyze fats into fatty acids and
                    monoglycerides.<sup>1</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    EnBiotic&trade; is formulated to assist digestive function and nutrient absorption.
                </p>

                <p>
                    <ul>
                        <li>Support digestion of dietary proteins, carbohydrates and lipids.<sup>11,12</sup></li>
                        <li>Assist with supporting healthy digestive function.<sup>11</sup></li>
                        <li>Aid in the management of indigestion.<sup>12</sup></li>
                        <li>Help relieve gastrointestinal discomfort.<sup>13,14</sup></li>
                        <li>Assist in the management of altered bowel habits.<sup>15,16</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>To assist with digestion of dietary proteins, carbohydrates and lipids;</li>
                        <li>For relief of gastrointestinal discomfort including bloating and altered bowel habits.</li>
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
                    <img src="/img/products/enbiotic_120s/2partcap_4_3_1_1.png">
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
                                <p>Silica</p>
                                <p>Maltodextrin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
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
                'price_retail' => 76.75,
                'price_wholesale' => 51.17,
                'image_path' => '/img/products/enbiotic_120s/enbiotic-120s-bottle-jun15-v1.jpg',
                'thumb_image_path' => '/img/products/enbiotic_120s/thumb_enbiotic-120s-bottle-jun15-v1.jpg',
                'in_stock' => true
            ],
            [
                'product_name_index' => "Enbiotic 60's",
                'product_name' => 'Enbiotic&trade; 60&#39;s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Enbiotic&trade; 60&#39;s</h4>
                <p>
                    <strong>PATENT PROTECTED</strong>
                </p>
                <p>
                    EnBiotic&trade; is a high quality, high strength digestive enzyme and probiotic combination developed to
                    assist with digestive function and nutrient absorption.
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
                    EnBiotic&trade; is a digestive enzyme and multi-species probiotic formulation. EnBiotic&trade;
                    contains 241.6 mg of plant and fungal-derived digestive enzymes and 8.75 billion CFU
                    (colony forming units) of bacteria per capsule. This combination may support digestive function of
                    dietary fats, proteins and carbohydrates and assist in the management of indigestion, altered bowel
                    habits and gastrointestinal discomfort.
                </p>
                ',
                'practitioner_summary' =>
                    '
                <p>
                    Several factors are known to contribute to the development of poor digestive function including
                    stress, medications, poor eating habits and dietary choices, dysbiosis, ageing, illness,
                    injury/trauma and toxic exposure.<sup>1,2</sup> Symptoms of digestive dysfunction can have an debilitating
                    impact on an individuals quality of life. Symptoms range in severity and can include indigestion,
                    reflux, heartburn, constipation, diarrhoea, nausea, abdominal pain and bloating, steatorrhoea,
                    flatulence, unintentional weight loss and undigested food particles in the stool.<sup>2</sup> In conjunction
                    with addressing dietary and lifestyle choices; therapeutic options available to reduce symptomology
                    and improve digestive function and nutrient absorption include probiotic bacterial species and
                    digestive enzymes.
                </p>
                <p>
                    Commensal gastrointestinal tract (GIT) microbiota play a critical role in digestive function
                    contributing to extensive metabolism of dietary compounds (and drugs), regulating energy metabolism
                    and maintaining healthy GIT mucosal function and immune modulation.<sup>3</sup> Alteration of the GIT
                    bacteria can occur through stress, dietary changes, medication use, inflammatory conditions and
                    illness. There is extensive evidence to support the supplementation of probiotics for improving
                    digestive function, reducing symptoms and improving GIT barrier function.<sup>4,5,6</sup>
                </p>
                <p>
                    Digestive enzymes available for supplementation include pharmaceutical grade enzymes such as Creon
                    and Creon Forte, which are porcine sourced, therefore not suitable for vegetarians.  Also available
                    are fungal (from Aspergillus oryzae and Rhizopus oryzae) and plant-derived (bromelain and papain)
                    enzymes. Plant derived proteolytic enzymes include bromelain (sourced from Ananas comosus) and
                    papain (sourced from Carica papaya). Aspergillus oryzae and Rhizopus oryzae are filamentous
                    fungi that secrete vast amounts of digestive enzymes such as amylase, protease and lipase.<sup>7,8</sup>
                    Commensal bacteria are also capable of producing enzymes that assist with digestion.<sup>9</sup> Proteolytic
                    enzymes breakdown proteins into polypeptides, dipeptides and amino acids; amylolytic enzymes
                    (amylase) hydrolyze starches and other carbohydrates (not including cellulose) into disaccharides
                    and trisaccharides and lipolytic enzymes (lipase) hydrolyze fats into fatty acids and
                    monoglycerides.<sup>1</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    EnBiotic&trade; is formulated to assist digestive function and nutrient absorption.
                </p>

                <p>
                    <ul>
                        <li>Support digestion of dietary proteins, carbohydrates and lipids.<sup>11,12</sup></li>
                        <li>Assist with supporting healthy digestive function.<sup>11</sup></li>
                        <li>Aid in the management of indigestion.<sup>12</sup></li>
                        <li>Help relieve gastrointestinal discomfort.<sup>13,14</sup></li>
                        <li>Assist in the management of altered bowel habits.<sup>15,16</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>To assist with digestion of dietary proteins, carbohydrates and lipids;</li>
                        <li>For relief of gastrointestinal discomfort including bloating and altered bowel habits.</li>
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
                                <p>Silica</p>
                                <p>Maltodextrin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                    <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Enbiotic/Chinese.pdf" target="_blank">中文翻译</a>
                    </p>
                    <p>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => 'GastroDaily',
                'product_name' => 'GastroDaily&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">GastroDaily&trade;</h4>
                <p>
                    <strong>PATENT PENDING</strong>
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
                    <strong>PATENT PENDING</strong>
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
                <p>
                    A French microbiologist, Henri Boulard discovered the beneficial yeast <em>Saccharomyces boulardii</em>
                    in 1920. When he was visiting IndoChina he noticed that certain people who drank a special tea did
                    not develop cholera during an outbreak. He isolated the agent in the fruit tea responsible for the
                    therapeutic effects, being S. boulardii.<sup>1</sup> <em>S. boulardii</em> has several different
                    mechanisms of action including luminal action, trophic action and mucosal anti-inflammatory
                    signalling effects. Within the intestinal lumen, <em>S. boulardii</em> may interfere with
                    pathogenic toxins, preserve cellular physiology, interfere with pathogen attachment, interact
                    with normal microbiota and assist in re-establishing short chain fatty acid levels.
                    <em>S. boulardii </em>may also act as an immune regulator, both within the lumen and systemically.
                    Factors that disrupt the normal barrier function of commensal bacteria, such as antibiotic use or
                    surgery, results in host susceptibility to pathogen colonization until the normal microbiota can
                    become re-established. Typically it takes six to eight weeks for normal microbiota to recover after
                    antibiotic use but when <em>S. boulardii</em> is supplemented, normal microbiota is re-established
                    rapidly.<sup>1</sup>Furthermore, <em>S. boulardii</em> has proven effective in treating
                    antibiotic-associated diarrhoea, <em>Clostridium difficile</em> infections, reducing side-effects
                    of triple therapy to treat <em>Helicobacter pylori</em>, acute diarrhoea, travellers diarrhoea,
                    Irritable Bowel Syndrome (IBS) and inflammatory bowel disease (IBD). <em>S. boulardii</em> has
                    also been assessed for efficacy in treating <em>Giardiasis</em> when combined with metronidazole
                    resulting in significantly less detection of <em>giardia </em>cysts compared to placebo.<sup>1-3</sup>
                </p>
                <p>
                    Arabinogalactans are high molecular weight, highly branched, water-soluble polysaccharides
                    containing units of D-galactose and L-arabinose. Arabinogalactans from Larch have been shown to
                    stimulate natural killer cell cytotoxicity <em>in vitro</em> with animal studies demonstrating
                    increases in white blood cell counts i.e. neutrophils and eosinophil’s.<sup>4</sup> ResistAid&trade;
                    is a proprietary arabinogalactan extracted from Larch (<em>Larix laricina</em>) supplied by Lonza
                    Ltd, Switzerland. A number of human clinical studies have demonstrated ResistAid&#39;s&trade;
                    immunomodulatory activity. Udani 2010 demonstrated a daily dose of 4.5 g significantly increased
                    IgG antibody response of healthy volunteers to the pneumococcal vaccine when compared to
                    placebo.<sup>4</sup> In a more recent study Udani 2013 demonstrated that ResistAid&trade; at a dose
                    of 1.5 g daily significantly increased the IgG antibody response to tetanus vaccine compared to
                    placebo.<sup>5</sup> ResistAid&trade; has clinical evidence of being well tolerated in healthy
                    individuals with no demonstrable side-effects.<sup>6</sup>
                </p>
                <p>
                    Glutamine is the most abundant amino acid in the body and plays a central role in inter-organ
                    carbon and nitrogen flux. Glutamine is considered a non-essential amino acid because it is
                    synthesized endogenously, however it can be depleted rapidly in certain clinical settings
                    particularly in response to injury, infection, IBD and short bowel syndrome.<sup>7,8</sup>
                    Glutamine is an important fuel for rapidly dividing cells such as enterocytes, colonocytes and
                    immune cells as it is critical for the biosynthesis of nucleotides required for cell replication
                    and hexosamines. Glutamine and nucleosides act synergistically to promote differentiation and
                    proliferation of intestinal epithelial cells.<sup>8</sup> Furthermore, glucosamine is reported to
                    enhance the immunological barrier due to its trophic action on the immune system and its ability
                    to decreased bacterial translocation.<sup>7</sup>
                </p>
                <p>
                    Peppermint leaf and peppermint oil have traditionally been considered to have anti-spasmodic,
                    anti-emetic, carminative and anti-microbial properties. Peppermint is indicated to treat a
                    variety of digestive disorders such as flatulence, diarrhoea, indigestion, nausea and vomiting,
                    and as a spasmolytic to reduce gas and cramping.<sup>9</sup> Peppermint is reported to block
                    calcium channels resulting in gastrointestinal smooth muscle relaxation with a 2008 meta-analysis
                    supporting the use of peppermint for providing short-term relief of discomfort and abdominal pain
                    in IBS patients.<sup>10</sup>
                </p>
                <p>
                    Cocoa is naturally rich in polyphenols that have been reported to modulate the gastrointestinal
                    tract. Plasma and urine of chocolate eaters led to the discovery of distinct metabolic profiles
                    according to the behavioural/psychological dietary preference for chocolate products. The
                    metabolism of cocoa polyphenols can induce selective bacterial growth, i.e.
                    <em>Bifidobacterium spp</em>, <em>Clostridium coccoides-Eubacterium rectale</em> group
                    and <em>Escherichia coli</em> and significantly inhibit the growth of the
                    <em>Clostridium histolyticum</em> group. Further, bacterial fermentation of the insoluble
                    material of cocoa is associated with an increase in <em>Lactobacilli</em> and
                    <em>Bifidobacterium</em> species as well as butyrate production.<sup>11</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>Support healthy gastrointestinal tract function and physiology </li>
                        <li>Help maintain healthy digestive function and relieve gastrointestinal  discomfort </li>
                        <li>Support optimal immune function</li>
                        <li>Relieve symptoms of medically diagnosed Irritable Bowel Syndrome</li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>
                            Those requiring relief from gastrointestinal complaints such as abdominal pain and
                            bloating, flatulence, diarrhoea and/or constipation
                        </li>
                        <li>Those with intestinal permeability</li>
                        <li>Those requiring prebiotic support for gastrointestinal microbial health</li>
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
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Russian.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Chinese.pdf" target="_blank">中文翻译</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => "Manuka-C",
                'product_name' => 'Manuka-C&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Manuka-C&trade;</small></h4>
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
                <p>
                    Manuka-C&trade; is a novel combination of ingredients to support optimal immune system function containing a blend of three
                    ascorbates to be gentle on the stomach. Ascorbic acid and glutathione are essential nutrients for optimal immune function,<sup>1-3</sup>
                    ensuring effective anti-microbial and anti-inflammatory activity of white blood cells (WBC)<sup>2,4</sup> with glutathione aiding
                    the physiological role of ascorbic acid recycling and activity within the cell. <sup>4-7</sup> Ascorbic acid together with zinc
                    is also required for wound healing and healthy connective tissue function.<sup>1,3,8</sup> Manuka honey has been used for centuries
                    in the treatment of infections having anti-microbial and anti-inflammatory activity.<sup>9-11</sup>
                </p>

                <p>
                    <strong>Ascorbic Acid:</strong>
                </p>

                <p>
                    Ascorbic acid is a water-soluble vitamin essential for healthy immune system activity and can only be obtained from the
                    diet due to lack of endogenous synthesis in humans. It is an important catalyst for extensive biochemical reactions and
                    enzymatic processes, and further is a vital redox cofactor.<sup>3</sup> Pharmacokinetic data demonstrates that plasma ascorbic
                    acid levels are tightly regulated, which significantly impacts on the bioavailability of orally administered vitamin C
                    supplements.<sup>1</sup> Optimum bioavailability of ascorbic acid occurs between 200 – 500 mg per day and as the oral dosage
                    increases, bioavailability decreases and excess ascorbic acid is excreted in urine. Plasma ascorbic acid levels plateau at a
                    dose between 500 – 1000 mg and does not increase with increasing doses (see Figure 1).<sup>1</sup> Data demonstrates that
                    circulating WBCs become saturated at an intake of 100 mg per day. Ascorbic acid bioavailability in plasma is near 100% at a
                    single dose of 200 mg but at higher oral vitamin C doses, bioavailability declines significantly with a 1250 mg dose resulting
                    in less than 50% bioavailability (see Figure 2).<sup>1</sup> As the oral dose of ascorbic acid increases so does its excretion
                    in urine (see Figure 3). Elevated doses may have adverse consequences as a 1000 mg dose has been shown to elevate urine uric
                    acid and oxalate levels.  High doses of ascorbic acid are not recommended, as there is no clear benefit of excess excreted
                    or unabsorbed vitamin C.<sup>1</sup> Physiologically, ascorbic acid is required for the effective anti-microbial function of
                    WBCs acting as a reducing agent. It is also a key compensatory factor in the regulation of plasma glutathione concentration.<sup>7</sup>
                    The prophylactic use of ascorbic acid may reduce the incidence, duration and severity of the common cold. <sup>8,12</sup>
                </p>
                <br>
                <p>
                    <img alt="Figure 1-3" src="/img/products/manuka-c/manuka_figure1-3.png" class="img-responsive"><br>
                </p>

                <p>
                    <strong>Glutathione:</strong>
                </p>

                <p>
                    Glutathione is an intrinsic tripeptide essential for optimal immune function; this is exemplified predominantly in
                    its capacity to facilitate cellular protection and repair as a vital cofactor in the redox process.<sup>2,6</sup>
                    Glutathione is critical for the physiological role of ascorbic acid in white blood cell anti-microbial activity.
                    When exposed to bacteria, neutrophils oxidize extracellular ascorbic acid to form dehydroascorbic acid that is
                    transported into the neutrophil and rapidly reduces back to ascorbic acid within the cell by the redox enzyme
                    glutaredoxin that requires glutathione as a cofactor.<sup>13</sup> As a result of the recycling of ascorbic acid,
                    the internal concentration of ascorbic acid within the WBC increases 10-fold in which it functions to quench oxidants
                    generated during phagocytosis, a natural and controlled physiological process (see Figure 4).<sup>13</sup>
                </p>

                <p>
                    <img alt="Figure 4" src="/img/products/manuka-c/manuka_figure4.png" width="400px;" class="img-responsive center-block"><br>
                    <strong>Figure 4. Dehydroascorbic acid (DHA) and ascorbic acid (AA) transport and recycling in neutrophils.<sup>7</sup></strong>
                    AA and DHA are transported differently into the cell. With activation (i.e. bacterial exposure), neutrophils secrete reactive
                    oxygen species that oxidize extracellular AA to DHA that is then rapidly transported into the neutrophil via the glucose
                    transporters, GLUT1 and GLUT3. Intracellular DHA is immediately reduced to AA via Glutaredoxin (GRX), a glutathione requiring redox enzyme.
                    As a result of DHA transport and reduction, a 10-fold higher AA internal concentration is achieved compared to activity of the AA
                    transporter alone. AA may quench oxidants generated during phagocytosis, a regulated physiological occurrence.
                </p>
                <p>
                    GSH: reduced glutathione; GSSG: oxidized glutathione; GRD: glutathione reductase
                </p>
                <br>

                <p>
                    <strong>Zinc:</strong>
                </p>

                <p>
                    Zinc is necessary for numerous metabolic functions, particularly gene expression; cell growth and differentiation.<sup>8</sup>
                    It is a critical nutrient for immune function due to its role in supporting a range of immune reactions.<sup>14</sup> Zinc is
                    a vital component of many proteins, over 300 enzymes; and is regarded as a key nutrient in the support of cellular mediators
                    of innate immunity.<sup>14</sup> Zinc functions in the maturation of T cells and is also responsible for the activity of
                    natural killer cells as well as waste management in WBC.<sup>15</sup> Zinc together with ascorbic acid is shown to produce
                    additive effects in supporting immune function; and together have shown to be effective in reducing the severity
                    and/or duration of the common cold.<sup>8</sup>
                </p>

                <p>
                    <strong>Manuka Honey:</strong>
                </p>

                <p>
                    Manuka honey has been used as a traditional anti-microbial therapy for the treatment of infection.<sup>11</sup> Honey has
                    well documented anti-bacterial activity,<sup>9</sup> together with anti-viral and anti-fungal properties.<sup>16</sup>
                    The anti-inflammatory effects of Manuka honey are effective in assisting the recovery from the common cold;<sup>17</sup>
                    as well as treating symptoms of upper-respiratory tract infections.<sup>18</sup> Emerging evidence has illustrated that
                    honey added to oral rehydration solution (ORS) improved recovery in children following episodes of diarrheal illness.<sup>10</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    Who will benefit:
                </p>

                <p>
                    <ul>
                        <li>Those requiring immune support.</li>
                        <li>Those seeking symptomatic relief from upper respiratory tract infections.</li>
                        <li>Those requiring dietary vitamin C support.</li>
                        <li>For healthy collagen production.</li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    Not to be used in children under 2 years of age without medical advice. Not suitable for infants under
                    the age of twelve months. Adults only. Not recommended for use by pregnant and lactating women. Vitamin
                    supplements should not replace a balanced diet. Contains sugars. Always read the label. Use only as directed.
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
                'price_retail' => 28.9,
                'price_wholesale' => 19.25,
                'image_path' => '/img/products/manuka-c/manuka-c.png',
                'thumb_image_path' => '/img/products/manuka-c/mauka-c_thumb.png',
                'in_stock' => true,
                'slug' => 'manuka-c'
            ],
            [
                'product_name_index' => "MultiBiotic 30's",
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
                <p>
                    Probiotics are living organisms found in food and dietary supplements, which upon ingestion can
                    improve the health of the host beyond their inherent basic nutritional content.<sup>9</sup>
                </p>

                <p>
                    The gastrointestinal (GIT) mucosal surface is a complex and interactional environment, which is
                    continuously exposed to a range of commensal microorganisms. The human-microbial gastrointestinal
                    interface is an ecosystem that participates in a variety of important roles in human health and
                    disease.<sup>10, 11</sup>
                </p>

                <p>
                    The microbiome interacts with the human host’s GIT by providing the necessary prompts for the
                    development of regulated pro- and anti-inflammatory signals, that overall promote immunological
                    tolerance as well as metabolic and inflammatory homeostasis. This then, exerting regulatory control
                    over local and extra-intestinal activities (e.g. skin, liver, brain).<sup>10, 11</sup>
                </p>

                <p>
                    To ensure proper immune-digestive efficiency and overall intestinal function, a balance in the
                    overall composition of the gut microbiota would seem to be a necessary prerequisite throughout a
                    lifetime.  The continued understanding of this functionality presents a view of the GIT that is
                    wide ranging in health importance and with implications in a variety of health issues from
                    immunological tolerance, obesity and metabolic disorders.<sup>11, 12</sup>
                </p>

                <p>
                    The number of bacterial cells in the body exceed human cells by a factor of 10 to 1, with the
                    largest concentration being in the GIT.<sup>12</sup> Hence, it would not be unexpected that such a
                    concentration of microorganisms in the GIT may have strong correlations with colonic
                    conditions such as Inflammatory Bowel Diseases (IBDs), constipation, obesity, chronic diseases
                    of metabolism (e.g., Type II Diabetes Mellitus) and some cancers.
                </p>

                <p>
                    Recent research has focused on elucidating the inter-relationships that may exist between
                    the GIT microbiome and its host in health and disease.<sup>9,13</sup> It is reported that the GIT
                    microbiome is being continuously compromised with factors such as over consumption of
                    dietary fat, <sup>10, 11</sup> gut-stressing physical exercise,<sup>12</sup> increasing urbanisation <sup>14</sup> and
                    medical therapies.<sup>15</sup>
                </p>

                <p>
                    Recent studies for example, have shown that a short course of antibiotics can be the source of
                    long-term changes in the gut microbiome.<sup>16</sup> This suggests that antibiotic administration in early
                    life could permanently and adversely alter the gut microbiome. This in conjunction with continued
                    exacerbations of the gut commensal microbiome driven by adverse lifestyle choices may predispose
                    to the development of chronic diseases.<sup>12</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    MultiBiotic&trade; may help to promote optimal gastrointestinal care and immune function.
                </p>

                <p>
                    <ul>
                        <li>Help maintain a healthy gastrointestinal microbial profile.<sup>1</sup></li>
                        <li>Promote general well being and a healthy immune system.<sup>2,3</sup></li>
                        <li>Relieve gastrointestinal discomfort.<sup>1</sup></li>
                        <li>Assist in managing symptoms of medically diagnosed Irritable Bowel Syndrome.<sup>4,5</sup></li>
                        <li>Provide symptomatic relief of altered bowel habits.<sup>5</sup></li>
                        <li>Help relieve symptoms of mild upper respiratory tract infections.<sup>6</sup></li>
                        <li>Support healthy cholesterol levels in healthy individuals.<sup>7</sup></li>
                        <li>Support and maintain healthy skin.<sup>8</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>To support healthy immune function;</li>
                        <li>For symptoms of medically diagnosed Irritable Bowel Syndrome;</li>
                        <li>To restore gastrointestinal microbial balance after certain medication use; and;</li>
                        <li>For relief of gastrointestinal discomfort.</li>
                    </ul>
                </p>

                <p>
                    <strong>Potential Claims:</strong>
                </p>

                <p>
                    <ul>
                        <li>Help maintain healthy digestive function.</li>
                        <li>Relieve gastrointestinal discomfort.</li>
                        <li>For the maintenance of a healthy gastrointestinal microbial profile.</li>
                        <li>Assist in managing symptoms of medically diagnosed irritable bowel syndrome.</li>
                        <li>Provide symptomatic relief of constipation and diarrhoea.</li>
                        <li>Relieve the symptoms of mild upper respiratory tract infections.</li>
                        <li>Support healthy cholesterol levels.</li>
                        <li>Support and maintain healthy skin.</li>
                        <li>Promote general well being.</li>
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
                                <p>Silica</p>
                                <p>Maltodextrin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Russion.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Chinese.pdf" target="_blank">中文翻译</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => "MultiBiotic 60's",
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
                <p>
                    Probiotics are living organisms found in food and dietary supplements, which upon ingestion can
                    improve the health of the host beyond their inherent basic nutritional content.<sup>9</sup>
                </p>

                <p>
                    The gastrointestinal (GIT) mucosal surface is a complex and interactional environment, which is
                    continuously exposed to a range of commensal microorganisms. The human-microbial gastrointestinal
                    interface is an ecosystem that participates in a variety of important roles in human health and
                    disease.<sup>10, 11</sup>
                </p>

                <p>
                    The microbiome interacts with the human host’s GIT by providing the necessary prompts for the
                    development of regulated pro- and anti-inflammatory signals, that overall promote immunological
                    tolerance as well as metabolic and inflammatory homeostasis. This then, exerting regulatory control
                    over local and extra-intestinal activities (e.g. skin, liver, brain).<sup>10, 11</sup>
                </p>

                <p>
                    To ensure proper immune-digestive efficiency and overall intestinal function, a balance in the
                    overall composition of the gut microbiota would seem to be a necessary prerequisite throughout a
                    lifetime.  The continued understanding of this functionality presents a view of the GIT that is
                    wide ranging in health importance and with implications in a variety of health issues from
                    immunological tolerance, obesity and metabolic disorders.<sup>11, 12</sup>
                </p>

                <p>
                    The number of bacterial cells in the body exceed human cells by a factor of 10 to 1, with the
                    largest concentration being in the GIT.<sup>12</sup> Hence, it would not be unexpected that such a
                    concentration of microorganisms in the GIT may have strong correlations with colonic
                    conditions such as Inflammatory Bowel Diseases (IBDs), constipation, obesity, chronic diseases
                    of metabolism (e.g., Type II Diabetes Mellitus) and some cancers.
                </p>

                <p>
                    Recent research has focused on elucidating the inter-relationships that may exist between
                    the GIT microbiome and its host in health and disease.<sup>9,13</sup> It is reported that the GIT
                    microbiome is being continuously compromised with factors such as over consumption of
                    dietary fat, <sup>10, 11</sup> gut-stressing physical exercise,<sup>12</sup> increasing urbanisation <sup>14</sup> and
                    medical therapies.<sup>15</sup>
                </p>

                <p>
                    Recent studies for example, have shown that a short course of antibiotics can be the source of
                    long-term changes in the gut microbiome.<sup>16</sup> This suggests that antibiotic administration in early
                    life could permanently and adversely alter the gut microbiome. This in conjunction with continued
                    exacerbations of the gut commensal microbiome driven by adverse lifestyle choices may predispose
                    to the development of chronic diseases.<sup>12</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    MultiBiotic&trade; may help to promote optimal gastrointestinal care and immune function.
                </p>

                <p>
                    <ul>
                        <li>Help maintain a healthy gastrointestinal microbial profile.<sup>1</sup></li>
                        <li>Promote general well being and a healthy immune system.<sup>2,3</sup></li>
                        <li>Relieve gastrointestinal discomfort.<sup>1</sup></li>
                        <li>Assist in managing symptoms of medically diagnosed Irritable Bowel Syndrome.<sup>4,5</sup></li>
                        <li>Provide symptomatic relief of altered bowel habits.<sup>5</sup></li>
                        <li>Help relieve symptoms of mild upper respiratory tract infections.<sup>6</sup></li>
                        <li>Support healthy cholesterol levels in healthy individuals.<sup>7</sup></li>
                        <li>Support and maintain healthy skin.<sup>8</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>To support healthy immune function;</li>
                        <li>For symptoms of medically diagnosed Irritable Bowel Syndrome;</li>
                        <li>To restore gastrointestinal microbial balance after certain medication use; and;</li>
                        <li>For relief of gastrointestinal discomfort.</li>
                    </ul>
                </p>

                <p>
                    <strong>Potential Claims:</strong>
                </p>

                <p>
                    <ul>
                        <li>Help maintain healthy digestive function.</li>
                        <li>Relieve gastrointestinal discomfort.</li>
                        <li>For the maintenance of a healthy gastrointestinal microbial profile.</li>
                        <li>Assist in managing symptoms of medically diagnosed irritable bowel syndrome.</li>
                        <li>Provide symptomatic relief of constipation and diarrhoea.</li>
                        <li>Relieve the symptoms of mild upper respiratory tract infections.</li>
                        <li>Support healthy cholesterol levels.</li>
                        <li>Support and maintain healthy skin.</li>
                        <li>Promote general well being.</li>
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
                                <p>Silica</p>
                                <p>Maltodextrin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Russion.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Multibiotic/Chinese.pdf" target="_blank">中文翻译</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => "NanoCelle Activated B12",
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
                    Methylcobalamin is a biologically active form of vitamin B12 that is involved in the methylation of
                    homocysteine to methionine, therefore helping to lower serum homocysteine levels. Vitamin B12 is required
                    for red blood cell production, synthesis of myelin that is vital to healthy neurological function and
                    DNA methylation. NanoCelle&trade; delivers nanoparticle-sized molecules of the vitamin for absorption across
                    the oral buccal mucosa, bypassing the gastrointestinal tract and greatly enhancing nutrient absorption
                    with superior bioavailability.
                </p>
                ',
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
                                <p>Co-methylcobalamin</p>
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
                <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/English.pdf" target="_blank">
                    Click Here For English CMI
                </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Russian.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Chinese.pdf" target="_blank">中文翻译</a>
                </p>
                <p>
                <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Italian.pdf" target="_blank">Traduzione italiana</a>
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
                'in_stock' => true,
                'slug' => 'nanocelle-activated-b12'
            ],
            [
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
            ],
            [
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
                    Vitamin D3 has a low risk of side-effects when taken as directed.
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
                                <p>Citric acid</p>
                                <p>PEG-40 hydrogenated castor oil</p>
                                <p>Glycerol</p>
                                <p>Peppermint oil</p>
                                <p>Potassium sorbate</p>
                                <p>Stevia</p>
                                <p>Water</p>
                                <p>D-alpha tocopherol</p>
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
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Russian.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Chinese.pdf" target="_blank">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleD3/Traditional_Chinese.pdf" target="_blank">中文翻譯</a>
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
                'price_retail' => 25.89,
                'price_wholesale' => 17.26,
                'image_path' => '/img/products/nanocelle_d3/d3_1.jpg',
                'thumb_image_path' => '/img/products/nanocelle_d3/thumb_d3_1.jpg',
                'in_stock' => true
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
                    <strong>L-Arginine</strong>
                </p>

                <p>
                    L-arginine is a semi-essential amino acid with numerous metabolic roles within the body. It is a building block for proteins
                    (hormones, histones, collagen and intra-cellular structural proteins) and the synthesis of creatine – the high-phosphate energy
                    stores in cells. L-arginine is the precursor to nitric oxide (NO) synthesis, an important cellular signaling molecule involved
                    in many physiological processes and is most well known as a powerful vasodilator of blood vessels that regulates
                    blood flow (see Figure 1). NO also has anti-inflammatory, anti-microbial and anti-viral activity, playing an important role in
                    immunological function.<sup>1-3</sup> Endothelium-derived NO causes vasorelaxation and inhibits platelet adhesion and aggregation, thus
                    maintaining blood fluidity and preventing thrombosis.<sup>4,5</sup> Platelets also produce NO that inhibits platelet aggregation, adhesion to
                    vascular endothelium, recruitment to growing thrombi and the formation of leukocyte-platelet aggregates.
                    Endothelial dysfunction is a common trait of essentially all cardiovascular risk factors. Impaired NO-mediated endothelial function
                    is characteristic of cardiovascular diseases, correlates with risk factor profiles and is an independent predictor of adverse cardiac
                    events.<sup>3</sup> Ageing is associated with an increase in atherothrombotic conditions, including. hypertension, and it has been suggested
                    that there is an age-related decline in nitric oxide (NO) production in arterial endothelium and platelets. It has been reported that exogenous
                    administration of L-arginine restores NO bioavailability.<sup>3</sup>
                </p>

                <p>
                    <img alt="How L-Arginine Works in the Body" src="/img/products/nos/nos_figure1.png" class="img-responsive"><br>
                    <strong>Figure 1. Metabolic pathways of L-arginine.<sup>6</sup></strong> NO, nitric oxide; NOS, nitric oxide synthase.
                </p>

                <p>
                    <strong>Creatine</strong>
                </p>

                <p>
                    Extensive research has been conducted on the ergogenic effects of creatine on improving physical and cognitive
                    performance and increasing fat free mass, however the exact mechanisms are not clear.<sup>7</sup> Creatine increases cellular
                    phosphocreatine content and together act as an intracellular buffer for adenosine triphosphate (ATP) and also as an
                    energy shuttle for the movement of high-energy phosphates from mitochondrial sites of production to cytoplasmic sites
                    of utilisation in a variety of cells and creatine must be continuously replenished (see Figure 2).<sup>8</sup>
                    Creatine can be synthesised in the body from arginine and glycine, but muscle cells cannot synthesise creatine and so
                    depend on the uptake from the circulation which can further be promoted by exercise.<sup>7,8</sup> Creatine is particularly found
                    in cells with high and fluctuating energy demands, such as skeletal muscle and the heart.<sup>9</sup> The ergogenic affects of
                    creatine are evident for high-intensity exercise of short duration and has been shown to increase muscle mass when
                    combined with an exercise program.<sup>7,9</sup>
                </p>

                <p>
                    <img alt="Muscle Metabolism" src="/img/products/nos/nos_figure2.png" class="img-responsive"><br>
                    <strong>Figure 2. Some ATP is stored in a resting muscle and as contraction starts it is used up in seconds and more ATP
                    is generated from creatine phosphate.<sup>10</sup></strong> ATP - adenosine triphosphate.
                </p>

                <p>
                    <strong>Beta-Alanine</strong>
                </p>

                <p>
                    Beta-alanine is a non-essential amino acid and the rate-limiting precursor to carnosine synthesis in muscle cells,
                    an important physiological buffer that readily accepts protons during contraction-induced acidosis. Supplementation
                    of beta-alanine is required to achieve the active daily dose required to significantly elevate intramuscular carnosine
                    and it increases dose-dependently. Increasing muscle carnosine concentration may improve athletic performance in exercise
                    tasks that accrue a high level of muscle acidosis, improving high-intensity intermittent exercise performance and time to fatigue.
                    Carnosine is also involved in maintaining ATP stores in muscle cells and skeletal muscle cell contraction.<sup>11,12</sup>
                    When combined with creatine, there is an additive effect on reducing fatigue and training intensity.<sup>12</sup>
                </p>

                <p>
                    <strong>Tyrosine and Vitamins</strong>
                </p>

                <p>
                    Tyrosine is the amino acid precursor to the synthesis of neurotransmitters involved in cognitive performance and stress resistance;
                    namely dopamine, noradrenaline and adrenaline. Tyrosine may aid in mental activity and in improving cognitive performance under
                    stressful conditions due to its direct role in increasing catecholamine synthesis in the brain.<sup>13</sup> The B vitamins are involved in
                    the transformation of dietary energy sources such as carbohydrates, fats and proteins into cellular energy in the form of ATP,
                    functioning as cofactors and coenzymes for numerous enzymatic reactions. Vitamin C is required for the synthesis of catecholamine
                    hormones, dopamine, adrenaline and noradrenaline.<sup>14</sup>
                </p>

                <p>
                    <strong>Guarana Seed Powder</strong>
                </p>

                <p>
                    Caffeine is widely used as an enhancement for athletic performance via its broad range of metabolic, hormonal and physiologic effects.
                    Guarana is a natural source of caffeine. Caffeine has been shown to enhance exercise performance and reduce time to exhaustion.
                    Mechanisms include stimulation of the sympathetic nervous system, increase intracellular Ca<sup>2+</sup> concentrations and spare
                    glycogen via increasing lipolysis.<sup>15</sup> Furthermore, caffeine affects cognition, mood and alertness via binding to adenosine
                    receptors in the brain. Adenosine, a neuromodulator, binds to adenosine receptors and slows nerve cell activity, whereas caffeine
                    blocks adenosine receptors and speeds up the activity of cells.<sup>15,16</sup> Research has demonstrated that small to moderate doses
                    (i.e. 3 – 6 mg•kg-1) of caffeine has superior ergogenic effectiveness than higher doses (9 mg•kg-1) and also reduces any negative side-effects.<sup>15</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    Who will benefit:
                </p>

                <p>
                    <ul>
                        <li>Those wanting to improve exercise performance and time to fatigue</li>
                        <li>Those wanting to improve cognitive performance</li>
                        <li>Those wanting to improve cellular energy metabolism</li>
                        <li>Those wanting to improve blood flow, tissue oxygenation and blood pressure</li>
                        <li>The aging population who may demonstrate reduced ability to synthesise NO</li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    Not to be used as a sole source of nutrition. Should be used in conjunction with a balanced diet and appropriate exercise program.
                    Not suitable for children under 15 years of age or pregnant women. Should only be used under medical or dietetic supervision.
                    Contains not less than 30 mg of caffeine per serve.
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
                <p>
                    <ul>
                        <li>Caffeine may cause side-effects in some individuals including dizziness, headache, jitteriness, nervousness, insomnia and gastrointestinal distress.</li>
                        <li>Beta-alanine may cause paraesthesia - pins and needles of the skin in some individuals.</li>
                        <li>Creatine may cause muscles to retain water. Do not supplement creatine in individuals with kidney disease.</li>
                        <li>Do not supplement L-arginine in individuals with Guanidinoacetate methyltransferase deficiency and avoid in people with herpes virus.</li>
                        <li>
                            L-arginine may decrease blood pressure therefore caution is required in individuals taking blood pressure medications. Medications that
                            increase blood flow to the heart (Nitrates) interact with L-arginine.
                        </li>
                        <li>
                            Tyrosine may decrease how much levodopa the body absorbs and it is advised to not combine the two.
                        </li>
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
                'in_stock' => true,
                'slug' => 'NOS'
            ],
            [
                'product_name_index' => "NRGBiotic 60's",
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
                <p>
                    All tissues have a requisite for uridine. Uridine is an important nucleoside precursor in the
                    pyrimidine salvage pathway.<sup>8,9,10</sup> Except for erythrocytes and the liver and kidney, which maintain
                    de novo pyrimidine biosynthesis and supply other tissues with uridine for salvage, most normal
                    tissues in adults rely on the salvage of uridine from plasma.<sup>9</sup>
                </p>
                <p>
                    Uridine also participates in the regulation of several physiological and pathological
                    processes.<sup>11</sup> In the absence of sugar, uridine can serve as an essential precursor for both
                    carbohydrate metabolism and nucleic acid synthesis. Besides the direct salvage to pyrimidine
                    nucleotides, the ribose moiety produced by the phosphorolysis of uridine can either enter the
                    pentose cycle to meet cellular energy requirements or form phosphoribosyl pyrophosphate, which
                    is used in the biosynthesis of purine nucleotides.11 In the nervous system, uridine acts as a
                    physiological regulator of sleep function and demonstrates the ability to maintain brain metabolism
                    during ischemia and severe hypoglycemia.
                </p>
                <p>
                    Coenzyme Q10 (CoQ10) is a compound that is naturally found intracellularly and bound to organelle
                    membranes such as for example the mitochondria, endoplasmic reticulum, and golgi apparatus.
                    CoQ10 is found with the highest concentrations in tissues such as the heart, liver, kidneys, and
                    pancreas. This compound is intricate to the production of adenosine triphosphate (ATP).
                    ATP is essential to all bodily functions, including the generation of energy and a multitude of
                    metabolic functions.<sup>12,13,14</sup>
                </p>
                <p>
                    Over the past several decades, research has seen a refocus towards thinking and efforts directed
                    in elucidating the critical inter–relationships that exist between the GIT microbiome and its host.
                    This research has redefined the interactions between gut microbes and vertebrates, now recognising
                    that the microbial active cohort and its mammalian host have shared co–evolutionary metabolic
                    interactions that span millennia. Microbial interactions in the GIT provide the necessary cues for
                    the development of regulated pro– and anti–inflammatory signals that promotes immunological
                    tolerance, metabolic regulation and other factors which may then control local and extra–intestinal
                    inflammation.<sup>15</sup> Furthermore, it is also becoming apparent that the GIT with its commensal cohort is
                    a central regulator for the activities of end organs such as the kidneys, brain, adipose tissue,
                    muscle and liver and as such may provide local prompts that are transmitted extra–intestinally to
                    end organ sites.  A scientific insight therefore has emerged that plausibly links the GIT with the
                    physiology of end organ function that may influence health maintenance or trigger and support a
                    disease state. Maintaining a healthy GIT milieu and epithelium with the administration of
                    probiotics may constitute a novel therapeutic strategy for health.
                </p>
                <p>
                    Probiotics are those live bacterial cultures that are added to foods (e.g., yoghurts) and employed
                    as dietary supplements, that when orally administered can improve the health of the host beyond
                    their fundamental basic nutritional content.<sup>16</sup> Probiotic bacteria encompass those from different
                    genera (as for example Lactobacilli, Bifidobacterium, Escherichia, Saccharomyces
                    (a yeast), Streptococcus) giving rise to a variety of different species of each genera
                    (i.e., Lactobacillus acidophilus; Lactobacillus bulgaricus, Lactobacillus rhamnosus); that lead to
                    different strains within a species (i.e., Lactobacillus acidophilus La–1, Lactobacillus acidophilus
                    NCFM). This taxonomic differentiation, importantly emphasizing that different strains from the same
                    bacterial species can be different and may elaborate different physiological functions within the
                    GIT<sup>17</sup> whilst exhibiting overlapping or specific therapeutic actions to different organ systems.<sup>18</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    NRGBiotic&trade; may improve mitochondrial function and intracellular energy production.
                </p>

                <p>
                    <ul>
                        <li>Support intracellular energy production<sup>1</sup></li>
                        <li>Help to assist in muscle cell recovery after exercise<sup>2</sup></li>
                        <li>Assist with muscle action deficits due to low levels of Coenzyme Q10<sup>3</sup></li>
                        <li>Support a healthy gastrointestinal microbial profile<sup>4</sup></li>
                        <li>Help improve general health and wellbeing<sup>5</sup></li>
                        <li>Support normal intracellular function with Magnesium Orotate<sup>6</sup></li>
                        <li>Support a healthy immune system<sup>7</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>Assist in muscle cell recovery after exercise.</li>
                        <li>Support normal intracellular function with Magnesium Orotate.</li>
                        <li>Support muscle function during and after exercise;</li>
                        <li>Assist with muscle action deficits associated with low Coenzyme Q10 levels, and;</li>
                        <li>Help improve intracellular energy production.</li>
                    </ul>
                </p>

                <p>
                    <strong>Potential Claims:</strong>
                </p>

                <p>
                    <ul>
                        <li>Support cellular energy production.</li>
                        <li>Help to assist in muscle cell repair and function after exercise.</li>
                        <li>Assist with symptoms of Coenzyme Q10 deficiencies such as muscle pain.</li>
                        <li>Support a healthy gastrointestinal microbial profile.</li>
                        <li>Provide a source of magnesium to support cellular function.</li>
                        <li>Help improve general health</li>
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
                                <p>Silica</p>
                                <p>Maltodextrin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Russion.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Chinese.pdf" target="_blank">中文翻译</a>
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
                'in_stock' => false
            ],
            [
                'product_name_index' => "NRGBiotic 120's",
                'product_name' => 'NRGBiotic&trade; 120&#39;s',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">NRGBiotic&trade; 120&#39;s</h4>
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
                <p>
                    All tissues have a requisite for uridine. Uridine is an important nucleoside precursor in the
                    pyrimidine salvage pathway.<sup>8,9,10</sup> Except for erythrocytes and the liver and kidney, which maintain
                    de novo pyrimidine biosynthesis and supply other tissues with uridine for salvage, most normal
                    tissues in adults rely on the salvage of uridine from plasma.<sup>9</sup>
                </p>
                <p>
                    Uridine also participates in the regulation of several physiological and pathological
                    processes.<sup>11</sup> In the absence of sugar, uridine can serve as an essential precursor for both
                    carbohydrate metabolism and nucleic acid synthesis. Besides the direct salvage to pyrimidine
                    nucleotides, the ribose moiety produced by the phosphorolysis of uridine can either enter the
                    pentose cycle to meet cellular energy requirements or form phosphoribosyl pyrophosphate, which
                    is used in the biosynthesis of purine nucleotides.11 In the nervous system, uridine acts as a
                    physiological regulator of sleep function and demonstrates the ability to maintain brain metabolism
                    during ischemia and severe hypoglycemia.
                </p>
                <p>
                    Coenzyme Q10 (CoQ10) is a compound that is naturally found intracellularly and bound to organelle
                    membranes such as for example the mitochondria, endoplasmic reticulum, and golgi apparatus.
                    CoQ10 is found with the highest concentrations in tissues such as the heart, liver, kidneys, and
                    pancreas. This compound is intricate to the production of adenosine triphosphate (ATP).
                    ATP is essential to all bodily functions, including the generation of energy and a multitude of
                    metabolic functions.<sup>12,13,14</sup>
                </p>
                <p>
                    Over the past several decades, research has seen a refocus towards thinking and efforts directed
                    in elucidating the critical inter–relationships that exist between the GIT microbiome and its host.
                    This research has redefined the interactions between gut microbes and vertebrates, now recognising
                    that the microbial active cohort and its mammalian host have shared co–evolutionary metabolic
                    interactions that span millennia. Microbial interactions in the GIT provide the necessary cues for
                    the development of regulated pro– and anti–inflammatory signals that promotes immunological
                    tolerance, metabolic regulation and other factors which may then control local and extra–intestinal
                    inflammation.<sup>15</sup> Furthermore, it is also becoming apparent that the GIT with its commensal cohort is
                    a central regulator for the activities of end organs such as the kidneys, brain, adipose tissue,
                    muscle and liver and as such may provide local prompts that are transmitted extra–intestinally to
                    end organ sites.  A scientific insight therefore has emerged that plausibly links the GIT with the
                    physiology of end organ function that may influence health maintenance or trigger and support a
                    disease state. Maintaining a healthy GIT milieu and epithelium with the administration of
                    probiotics may constitute a novel therapeutic strategy for health.
                </p>
                <p>
                    Probiotics are those live bacterial cultures that are added to foods (e.g., yoghurts) and employed
                    as dietary supplements, that when orally administered can improve the health of the host beyond
                    their fundamental basic nutritional content.<sup>16</sup> Probiotic bacteria encompass those from different
                    genera (as for example Lactobacilli, Bifidobacterium, Escherichia, Saccharomyces
                    (a yeast), Streptococcus) giving rise to a variety of different species of each genera
                    (i.e., Lactobacillus acidophilus; Lactobacillus bulgaricus, Lactobacillus rhamnosus); that lead to
                    different strains within a species (i.e., Lactobacillus acidophilus La–1, Lactobacillus acidophilus
                    NCFM). This taxonomic differentiation, importantly emphasizing that different strains from the same
                    bacterial species can be different and may elaborate different physiological functions within the
                    GIT<sup>17</sup> whilst exhibiting overlapping or specific therapeutic actions to different organ systems.<sup>18</sup>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    NRGBiotic&trade; may improve mitochondrial function and intracellular energy production.
                </p>

                <p>
                    <ul>
                        <li>Support intracellular energy production<sup>1</sup></li>
                        <li>Help to assist in muscle cell recovery after exercise<sup>2</sup></li>
                        <li>Assist with muscle action deficits due to low levels of Coenzyme Q10<sup>3</sup></li>
                        <li>Support a healthy gastrointestinal microbial profile<sup>4</sup></li>
                        <li>Help improve general health and wellbeing<sup>5</sup></li>
                        <li>Support normal intracellular function with Magnesium Orotate<sup>6</sup></li>
                        <li>Support a healthy immune system<sup>7</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Specific Use:</strong>
                </p>

                <p>
                    <ul>
                        <li>Assist in muscle cell recovery after exercise.</li>
                        <li>Support normal intracellular function with Magnesium Orotate.</li>
                        <li>Support muscle function during and after exercise;</li>
                        <li>Assist with muscle action deficits associated with low Coenzyme Q10 levels, and;</li>
                        <li>Help improve intracellular energy production.</li>
                    </ul>
                </p>

                <p>
                    <strong>Potential Claims:</strong>
                </p>

                <p>
                    <ul>
                        <li>Support cellular energy production.</li>
                        <li>Help to assist in muscle cell repair and function after exercise.</li>
                        <li>Assist with symptoms of Coenzyme Q10 deficiencies such as muscle pain.</li>
                        <li>Support a healthy gastrointestinal microbial profile.</li>
                        <li>Provide a source of magnesium to support cellular function.</li>
                        <li>Help improve general health</li>
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
                    <img src="/img/products/ngrbiotic_60s/2partcap_4_6_1.png">
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
                                <p>Silica</p>
                                <p>Maltodextrin</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Russion.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NRGBiotic/Chinese.pdf" target="_blank">中文翻译</a>
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
                'price_retail' => 81.87,
                'price_wholesale' => 54.58,
                'image_path' => '/img/products/ngrbiotic_120s/nrgbiotic-120s-bottle-jun15.jpg',
                'thumb_image_path' => '/img/products/ngrbiotic_120s/thumb_nrgbiotic-120s-bottle-jun15.jpg',
                'in_stock' => true
            ],
            [
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
                                <p>Silica</p>
                                <p>Stevia</p>
                                <p>Carrot powder</p>
                                <p>Flavours</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/ORSBiotic/Chinese.pdf" target="_blank">中文翻译</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => 'W8Biotic Lemon & Lime',
                'side_effects' =>
                    '
                    <p>
                        Probiotics may cause minor gastrointestinal symptoms such as bloating and discomfort but are usually temporary and can be relieved by reducing the dose.
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
                'cmi' =>
                    '
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/English.pdf" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Spanish.pdf" target="_blank">Traducción en español</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/French.pdf" target="_blank">Traduction en français</a>
                    </p>
                    <p>
                        <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Chinese.pdf" target="_blank">中文翻译</a>
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
                                    <p>Silica</p>
                                    <p>Thaumatin</p>
                                    <p>Malic acid</p>
                                    <p>Stevia</p>
                                    <p>lemon lime flavour</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    ',
            ],
            [
                'product_name_index' => "SB 5B",
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
                <p>
                    <em>Saccharomyces cerevisiae ssp. boulardii</em> was discovered in 1920 by Henri Boulard, who isolated the yeast
                    from the skins of lychee and mangosteen fruit when visiting IndoChina. During a cholera outbreak he noticed
                    that the people who drank tea made from these fruit skins did not contract the infection. Over the last few decades,
                    interest in the therapeutic applications of using SB has increased with now well over 53 randomised controlled
                    clinical studies published in peer reviewed journals that encompass over 8000 participants, both adults and children
                    to assess safety and efficacy. Of these clinical trials, over 80% have found clinically significant efficacy for
                    SB when supplemented for various conditions.<sup>1</sup>
                </p>

                <p>
                    SB is an anaerobic yeast which is absent from the natural gut microbiota and does not permanently colonise
                    the gastrointestinal tract (GIT) after supplementation. SB will achieve a steady-state concentration in the
                    large bowel after 3 days of supplementation and is not detected in faeces within one week after discontinuing.
                    It is stable at room temperature 24&deg;C but thrives at 37&deg;C i.e. body temperature and has a high tolerance to
                    low pH and bile acids.<sup>1,2</sup> Furthermore, another advantage of SB as a probiotic yeast is that it is antibiotic
                    resistant due to being a fungi and also they do not exchange DNA with bacteria.<sup>2</sup> SB can therefore be supplemented
                    simultaneously with antibiotic therapy and assist with managing symptoms such as antibiotic associated diarrhoea.
                    The predominant therapeutic effect of SB is associated with treating diarrhoea due to various causes, including
                    antibiotic, infectious including <em>Clostridium difficile</em>, viral and parasitic, travelers diarrrhoea and diarrhoea
                    induced by inflammatory GIT conditions.
                </p>

                <p>
                    <strong>Efficacy of <em>Saccharomyces boulardii</em> for Diarrhoea:</strong>
                </p>

                <p>
                    <ul>
                        <li>
                           <strong><em>Acute Infectious Diarrhoea</em></strong>
                        </li>
                    </ul>
                </p>

                <p>
                    Extensive clinical studies have assessed the efficacy of SB in treating diarrhoea due to infectious causes.
                    A recent systematic review and meta-analysis found that SB significantly reduced the duration of diarrhoea
                    due to acute infection by approximately 24 hours and that of hospitalization by up to 20 hours.<sup>3</sup> The authors
                    assessed 381 articles and 19 clinical trials with 17 of the studies performed in children from 3 months and older.
                    The dose of SB varied between 250 and 750 mg. From an evidence-based recommendation, the World Gastroenterology
                    Organization states that SB is not only useful in reducing the severity and duration (approximately 1 day) of acute
                    infectious diarrhoea in children, but is also safe.<sup>3</sup> Furthermore, SB supports regeneration of the intestinal commensal
                    bacterial cohort after episodes of diarrhoea such as increasing SCFA-producing bacteria, <em>Bacteroides</em> and
                    <em>Prevotella</em> genera.<sup>2</sup>
                </p>

                <p>
                    <ul>
                        <li>
                            <strong><em>Clostridium difficile infection and associated diarrhoea</em></strong>
                        </li>
                    </ul>
                </p>

                <p>
                    <em>Clostridium difficile</em> infection is strongly associated with antibiotic use, particularly in the hospital
                    setting but is also prevalent in the community setting. A recent Cochrane review reported that by co-prescribing
                    probiotic’s, importantly including SB, with antibiotics reduces the risk of contracting <em>C. difficile</em> infection by
                    up to 64% than when compared to that of a placebo.<sup>4</sup> It has been demonstrated that SB directly degrades <em>C.
                    difficile</em> toxin A and B via its release of protease enzymes. Further SB stimulates sIgA release in the intestine
                    regulating host immune responses and also is associated with higher serum IgG levels to <em>C. difficile
                    toxins</em> A and B.<sup>1</sup>
                </p>

                <p>
                    <ul>
                        <li>
                            <strong><em>Antibiotic-associated diarrhoea (AAD)</em></strong>
                        </li>
                    </ul>
                </p>

                <p>
                    AAD can occur within a few hours after administering antibiotics for up to several months after ceasing treatment.
                    The prevalence of AAD varies from 5% to 30% in paediatrics and as high as 80% in very young hospitalized children.
                    In adults the prevalence ranges from 5% to 70%.<sup>5</sup> As SB is a yeast it is not affected by antibiotics. Furthermore,
                    when co-prescribed, SB promotes the re-establishment of a normal commensal microbial cohort at a faster rate than
                    when antibiotics are prescribed without SB.<sup>1,2</sup>
                </p>

                <p>
                    <ul>
                        <li>
                            <strong><em>Irritable Bowel Syndrome (IBS)</em></strong>
                        </li>
                    </ul>
                </p>

                <p>
                    A number of studies have been conducted assessing the efficacy of SB in treating the symptoms of IBS.
                    A recent study demonstrated that supplementing IBS-diarrhoea dominant patients with SB (200 mg t.i.d. for 30 days)
                    alone or together with mesalazine (anti-inflammatory drug) significantly reduced symptom scores of stool frequency,
                    stool form and consistency, abdominal pain and bloating (p < 0.003).<sup>6</sup> Other studies have also shown that SB
                    (750 mg - 1000 mg per day for 4-6 weeks) significantly decreases pro-inflammatory cytokines and improves
                    quality of life (QoL) in IBS-D patients.<sup>7,8</sup>
                </p>

                <p>
                    <ul>
                        <li>
                            <strong><em>Gastrointestinal Function and Integrity</em></strong>
                        </li>
                    </ul>
                </p>

                <p>
                    Research has shown that SB regulates host immune responses by acting as an immune stimulant or by reducing
                    inflammatory cytokines. SB stimulates the release of sIgA in the intestine which targets pathogenic bacteria
                    present; it is associated with increased serum IgG to C. <em>difficile</em> toxins and interferes with NF-&kappa;B signaling.
                    SB is able to promote SCFA synthesis; restore fluid transport pathways within the intestine i.e. the sodium-glucose
                    transporter which is important for rehydration during diarrhoea and vomiting; preserve tight junction integrity;
                    stimulate protein and energy production and aid in enterocyte maturation via stimulating the release of spermine and
                    spermidine or other brush border enzymes. SB is also capable in preventing the growth of <sup>Candida albicans</sup> and other
                    pathogens such as <em>Salmonella</em> and <em>Yersinia</em>.<sup>1,2</sup>
                </p>

                <p>
                    <img alt="Effects of Difference Pathogens" src="/img/products/sb_5b/sb5b_figure1.png" class="img-responsive"><br>
                    <strong>Figure 1. Multiple potential mechanisms of action of <em>Saccharomyces boulardii</em>.<sup>1</sup></strong>
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    Who will benefit:
                </p>

                <p>
                    <ul>
                        <li>Those with symptoms of diarrhoea due to various triggers including:</li>
                            <ul style="list-style-type: circle">
                                <li>Infectious (bacteria, virus, parasitic).</li>
                                <li>Traveler’s diarrhoea.</li>
                                <li>Anti-biotic use.</li>
                                <li>Bowel disorders.</li>
                            </ul>
                        <li>Those with mild digestive disturbances including bloating, flatulence and digestive discomfort.</li>
                        <li>Those with medically diagnosed Irritable Bowel Syndrome – particularly diarrhoea predominant.</li>
                        <li>Those with <em>Candida</em> infection (thrush).</li>
                        <li>Those taking anti-biotics.</li>
                        <li>Those wanting to assist healthy digestive and immune function.</li>
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
                    SB has shown to be safe in adults when taken orally for up to 15 month’s duration. It can cause flatulence
                    in some people. Infrequent cases of fungaemia have been reported in case reports but only in patients with
                    serious diseases in which they have been hospitalised. SB has shown to be safe in children when taken orally
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
                                <p>Cellulose-microcrystalline</p>
                                <p>Calcium hydrogen phosphate</p>
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
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/SB5B/English.pdf"target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/SB5B/Arabic.pdf"target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/BioticNatal/Spanish.pdf"target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/SB5B/Russian.pdf"target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/SB5B/Japanese.pdf"target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/SB5B/French.pdf"target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/SB5B/Chinese.pdf"target="_blank">中文翻译</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/Italy.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/SB5B/Italian.pdf"target="_blank">Traduzione italiana</a>
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
                'in_stock' => true,
                'slug' => 'SB-5B'
            ],
            [
                'product_name_index' => 'W8Biotic Strawberries & Cream',
                'product_name' => 'W8Biotic&trade; Strawberries & Cream',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">W8Biotic&trade; Strawberries & Cream</h4>
                <p>
                    <strong>PATENT PENDING</strong>
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
                    <strong>PATENT PENDING</strong>
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
                <p>
                    A significant body of research has been conducted demonstrating digestive and colonic health
                    benefits of High Amylose Maize Starch (HAMS) with research also showing metabolic advantages.<sup>1</sup>
                    Resistant starch is the total amount of starch, and the products of starch degradation that
                    resists digestion in the small intestine. Hi-Maize demonstrates numerous health benefits
                    such as increasing satiety and helping with weight control, assisting with glycaemic
                    management and promoting digestive health. Hi-Maize demonstrates increased satiety compared
                    to other forms of fibre helping people to feel fuller in the hours after consuming it<sup>2</sup> and
                    has also shown to help people eat less after 2 hours<sup>3</sup> as well over the proceeding 24 hours.<sup>4</sup>
                    Hi-Maize consumption has been shown to increase insulin sensitivity in healthy people,<sup>5,6</sup>
                    in people with type 2 diabetes<sup>7</sup> and in individuals with insulin resistance.<sup>8-10</sup> Furthermore,
                    as a prebiotic, Hi-Maize supports beneficial bacterial growth and activity, increasing
                    short-chain fatty acid production and  assisting with normal intestinal function.<sup>11-13</sup>
                </p>
                <p>
                    Leucine has a unique role in metabolic regulation beyond the fundamental role of being an
                    amino acid, a substrate for the synthesis of proteins. Leucine has a direct link to the
                    maintenance of glucose homeostasis by enhancing the recycling of glucose via the glucose-alanine
                    cycle and stimulates muscle protein synthesis through the insulin-signaling cascade during
                    catabolic periods such as fasting or energy restriction.<sup>14,15</sup> Further, leucine supplementation
                    stimulates recovery of muscle protein synthesis after exercise. The mechanisms of leucine
                    appear to contribute to a metabolic advantage during weight loss.<sup>15</sup> Acetyl-L-Carnitine is
                    crucial for beta-oxidation, facilitating the transport of long-chain fatty acids across the
                    mitochondrial membrane for oxidation. When combined with weight loss motivation, the beneficial
                    effects of L-Carnitine are amplified including significant body weight loss and a decrement of
                    serum triglyceride levels when compared to participants supplementing with L-Carnitine but
                    being assigned to a non-motived group for weight loss.<sup>16</sup> DL-α-hydroxy isocaproic acid (HICA)
                    is an end product of leucine metabolism in human tissues such as muscle and connective tissue
                    and is considered an anti-catabolic substance. HICA has demonstrated to increase whole lean
                    body mass in healthy athletes and also decreased whole body delayed-onset muscle soreness
                    (DOMS) symptoms.<sup>17</sup> The Medlab Lactobacilli plantarum (Med 25) and Lactobacillus paracasei
                    (Med 24) have demonstrated the highest production of HICA when co-cultured with leucine.
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>Increase satiety and assist with weight management<sup>4</sup></li>
                        <li>Modulate carbohydrate and lipid metabolism<sup>2,5</sup></li>
                        <li>Promote digestive health<sup>6,7</sup></li>
                        <li>Regulate blood-glucose levels & skeletal muscle protein synthesis in  healthy individuals<sup>1,2</sup></li>
                        <li>Promote HICA synthesis indicated to increase lean muscle mass<sup>3</sup></li>
                        <li>Modulate energy expenditure in healthy individuals<sup>8</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Those seeking weight management support and lean body mass support</li>
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
                                <p>Silica</p>
                                <p>Thaumatin</p>
                                <p>Malic acid</p>
                                <p>Stevia</p>
                                <p>Strawberries and cream flavour</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Chinese.pdf" target="_blank">中文翻译</a>
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
                'in_stock' => true
            ],
            [
                'product_name_index' => 'W8Biotic Lemon & Lime',
                'product_name' => 'W8Biotic&trade; Lemon & Lime',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">W8Biotic&trade; Lemon & Lime</h4>
                <p>
                    <strong>PATENT PENDING</strong>
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
                    <strong>PATENT PENDING</strong>
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
                <p>
                    A significant body of research has been conducted demonstrating digestive and colonic health
                    benefits of High Amylose Maize Starch (HAMS) with research also showing metabolic advantages.<sup>1</sup>
                    Resistant starch is the total amount of starch, and the products of starch degradation that
                    resists digestion in the small intestine. Hi-Maize demonstrates numerous health benefits
                    such as increasing satiety and helping with weight control, assisting with glycaemic
                    management and promoting digestive health. Hi-Maize demonstrates increased satiety compared
                    to other forms of fibre helping people to feel fuller in the hours after consuming it<sup>2</sup> and
                    has also shown to help people eat less after 2 hours<sup>3</sup> as well over the proceeding 24 hours.<sup>4</sup>
                    Hi-Maize consumption has been shown to increase insulin sensitivity in healthy people,<sup>5,6</sup>
                    in people with type 2 diabetes<sup>7</sup> and in individuals with insulin resistance.<sup>8-10</sup> Furthermore,
                    as a prebiotic, Hi-Maize supports beneficial bacterial growth and activity, increasing
                    short-chain fatty acid production and  assisting with normal intestinal function.<sup>11-13</sup>
                </p>
                <p>
                    Leucine has a unique role in metabolic regulation beyond the fundamental role of being an
                    amino acid, a substrate for the synthesis of proteins. Leucine has a direct link to the
                    maintenance of glucose homeostasis by enhancing the recycling of glucose via the glucose-alanine
                    cycle and stimulates muscle protein synthesis through the insulin-signaling cascade during
                    catabolic periods such as fasting or energy restriction.<sup>14,15</sup> Further, leucine supplementation
                    stimulates recovery of muscle protein synthesis after exercise. The mechanisms of leucine
                    appear to contribute to a metabolic advantage during weight loss.<sup>15</sup> Acetyl-L-Carnitine is
                    crucial for beta-oxidation, facilitating the transport of long-chain fatty acids across the
                    mitochondrial membrane for oxidation. When combined with weight loss motivation, the beneficial
                    effects of L-Carnitine are amplified including significant body weight loss and a decrement of
                    serum triglyceride levels when compared to participants supplementing with L-Carnitine but
                    being assigned to a non-motived group for weight loss.<sup>16</sup> DL-α-hydroxy isocaproic acid (HICA)
                    is an end product of leucine metabolism in human tissues such as muscle and connective tissue
                    and is considered an anti-catabolic substance. HICA has demonstrated to increase whole lean
                    body mass in healthy athletes and also decreased whole body delayed-onset muscle soreness
                    (DOMS) symptoms.<sup>17</sup> The Medlab Lactobacilli plantarum (Med 25) and Lactobacillus paracasei
                    (Med 24) have demonstrated the highest production of HICA when co-cultured with leucine.
                </p>

                <p>
                    <strong>Clinical Summary:</strong>
                </p>

                <p>
                    <ul>
                        <li>Increase satiety and assist with weight management<sup>4</sup></li>
                        <li>Modulate carbohydrate and lipid metabolism<sup>2,5</sup></li>
                        <li>Promote digestive health<sup>6,7</sup></li>
                        <li>Regulate blood-glucose levels & skeletal muscle protein synthesis in  healthy individuals<sup>1,2</sup></li>
                        <li>Promote HICA synthesis indicated to increase lean muscle mass<sup>3</sup></li>
                        <li>Modulate energy expenditure in healthy individuals<sup>8</sup></li>
                    </ul>
                </p>

                <p>
                    <strong>Who will benefit:</strong>
                </p>

                <p>
                    <ul>
                        <li>Those seeking weight management support and lean body mass support</li>
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
                                <p>Silica</p>
                                <p>Thaumatin</p>
                                <p>Malic acid</p>
                                <p>Stevia</p>
                                <p>lemon lime flavour</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/English.pdf" target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Arabic.pdf" target="_blank">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Russian.pdf" target="_blank">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Spanish.pdf" target="_blank">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Japanese.pdf" target="_blank">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/French.pdf" target="_blank">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Chinese.pdf" target="_blank">中文翻译</a>
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
                'in_stock' => true
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
