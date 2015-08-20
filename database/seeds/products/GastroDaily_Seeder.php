<?php

use Illuminate\Database\Seeder;
use App\Product;

class GastroDaily_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'xero_item_id' => 13,
            'product_name_index' => 'GastroDaily',
            'product_name' => 'GastroDaily&trade;',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">GastroDaily&trade;</h4>
                <p>
                    GastroDaily&trade; is scientifically formulated to assist in supporting healthy gastrointestinal
                    and natural immunological function and to help relieve symptoms of medically diagnosed Irritable
                    Bowel Syndrome.
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
                    Consuming probiotics and enzymes may cause side effects. Do not be alarmed by this list of
                    possible side effects, as you may not experience any of them. Tell your healthcare practitioner
                    if you notice any of the following and they worry you.
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
                    after the dose of GastroDaily&trade; is lowered or stopped.
                </p>

                <p>
                    Serious allergic reactions to these ingredients are rare however tell your healthcare practitioner
                    immediately if you experience any of the following:
                </p>

                <p>
                    <ul>
                        <li>Skin rash</li>
                        <li>Swelling of face and/or throat</li>
                        <li>Difficulty breathing</li>
                        <li>Itching of the skin</li>
                    </ul>
                </p>

                <p>
                    If symptoms persist consult your healthcare practitioner. If Diarrhoea persists for more than 6
                    hours in infants under 6 months; 12 hours in children under 3 years; 24 hours in children aged
                    3 - 6 years or 48 hours in children over 6 years and adults, seek medical advice.
                </p>

                <p>
                    You can also refer to the CMI for this product for symptoms and side effects.
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
                <p>
                    Your healthcare practitioner or pharmacist will tell you how much GastroDaily&trade; powder to take each
                    day. This depends on the condition being treated and whether any other medicines are being used.
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
                                <p>5 million</p>
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
                        </tbody>
                </table>
                <p class="medlab_product_content_sub_title">
                    Excipient Ingredients:
                </p>
                <p>
                    Silica
                </p>
                <p>
                    Cocoa Powder
                </p>
                <p>
                    Stevia
                </p>
                <p>
                    Chocolate flavour
                </p>
                <p>
                    Peppermint flavour
                </p>
                ',
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/English.pdf">
                        Click Here For English CMI
                    </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Saudi Arabia" src="/img/products/cmi/Saudi-Arabia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Arabic.pdf">الترجمة العربية </a>
                </p>
                <p>
                    <img width="24" height="24" alt="Russia" src="/img/products/cmi/Russia.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Russian.pdf">Перевод на русском языке</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Spanish.pdf">Traducción en español</a>
                </p>
                <p>
                    <img width="24" height="24" alt="Japan" src="/img/products/cmi/Japan.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/Japanese.pdf">日本語翻訳</a>
                </p>
                <p>
                    <img width="24" height="24" alt="France" src="/img/products/cmi/France.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/Gastrodaily/French.pdf">Traduction en français</a>
                </p>
                <p>
                    <img width="24" height="24" alt="China" src="/img/products/cmi/China.png">
                    <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/W8Biotic/Chinese.pdf">中文翻译，中文翻譯</a>
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
            'price_retail' => 47.15,
            'price_wholesale' => 28.57,
            'image_path' => '/img/products/gastrodaily/gastro.png',
            'thumb_image_path' => '/img/products/gastrodaily/thumb_gastro.png'
        ]);
    }
}
