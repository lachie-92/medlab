<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Product;

class Product_BioticNatal_and_SB extends Command
{
    protected $signature = 'upload:bioticnatal_sb';

    protected $description = 'upload new product';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Model::unguard();

        Product::create([

            'xero_item_id' => 21,
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
        ]);

        Product::create([

            'xero_item_id' => 22,
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
                    <img alt="Human Mammary Microbiota" src="/img/products/bioticnatal/bioticnatal_figure1.jpg" class="img-responsive" title="Human Mammary Microbiota"><br>
                    <strong>Figure 1.</strong> Schematic representation of the acquisition and development of the human mammary microbiota.<sup>1</sup>
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
        ]);

        Model::reguard();
    }
}