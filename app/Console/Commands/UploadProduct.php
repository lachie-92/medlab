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
            /*
            [
                'product_name_index' => 'BifidoBiotic',
                'austl_number' => '286501',
                'product_name' => 'BifidoBiotic&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">BifidoBiotic&trade;</h4>
                <p>
                    BifidoBiotic&trade; is a multi-species probiotic formulation to restore and maintain a healthy
                    intestinal microbiome, across the lifespan. BifidoBiotic&trade; may help to re-regulate pro-inflammatory
                    cytokine levels and support a healthy immune system.
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
                    BifidoBiotic&trade; is a scientifically formulated combination of bifidobacteria species to support
                    the health and function of the intestinal microbiome across the lifespan. Bifidobacteria species
                    may help to re-regulate pro-inflammatory cytokine levels and support a healthy immune response.
                    Bifidobacterium species have been documented to decrease in number, with the increasing age of the
                    host, contributing to a decline in immune system efficacy associated with ageing. <em>Bifidobacterium
                    longum</em>, and <em>Bifidobacterium bifidum</em> influence beneficial host-gene expression of immune
                    cells in the intestinal mucosa. <em>Bifidobacterium infantis</em> has been demonstrated in clinical
                    trials to normalise intestinal permeability, improve gastrointestinal health conditions and improve
                    the symptoms of diarrhoea-associated irritable bowel syndrome.
                </p>
                ',
                'practitioner_summary' =>
                "
                <strong>STANDARD INDICATIONS</strong>
                <p>
                    <ul>
                        <li>
                            For the symptomatic relief of medically diagnosed irritable bowel syndrome.
                        </li>
                        <li>
                            Aids, assists or helps in the maintenance of general well-being.
                        </li>
                    </ul>
                </p>
                <strong>SPECIFIC INDICATIONS</strong>
                <p>
                    <ul>
                        <li>
                            Influence healthy gene expression of immune cells in the intestinal mucosa.
                        </li>
                        <li>
                            Animal studies demonstrated increased longevity following Bifidobacteria supplementation,
                            and also re-regulating pro-inflammatory cytokine levels toward homeostasis.
                        </li>
                        <li>
                            Contains the probiotics <em>Bifidobacteria lactis</em>, <em>Bifidobacteria bifidum</em>,
                            <em>Bifidobacteria longum</em> which support the health and function of the immune system.
                        </li>
                        <li>
                            Contains the probiotics <em>Bifidobacteria lactis</em>, <em>Bifidobacteria bifidum</em>,
                            <em>Bifidobacteria longum</em> which may assist in maintaining healthy gut function.
                        </li>
                        <li>
                            <em>Bifidobacteria longum</em> can recover the intestinal commensal bacteria and in turn can
                            stimulate and regulate healthy immune function.
                        </li>
                        <li>
                            Contains the probiotics <em>Bifidobacteria lactis</em>, <em>Bifidobacteria bifidum</em>,
                            <em>Bifidobacteria longum</em> which support the health and function of the digestive tract.
                        </li>
                        <li>
                            Contains probiotic bacteria, which may assist in maintaining healthy gut microflora.
                        </li>
                        <li>
                            Contains Bifidobacteria probiotics, which may assist in supporting the health and function
                            of the gastrointestinal tract (GIT) following antibiotic therapy.
                        </li>
                        <li>
                            Contains probiotics which help support the health and function of the gastrointestinal
                            tract (GIT).
                        </li>
                        <li>
                            Contains probiotics, which support the integrity of the digestive tract.
                        </li>
                        <li>
                            Probiotics may assist in maintaining and stabilising healthy gut microflora.
                        </li>
                        <li>
                            Contains probiotics/friendly bacteria that may assist in maintaining healthy gut microflora.
                        </li>
                        <li>
                            Contains probiotics, which may assist in the digestion and absorption of nutrients.
                        </li>
                        <li>
                            Probiotic supplementation supports gastrointestinal/gut health.
                        </li>
                        <li>
                            Probiotic supplementation may support the health of the digestive system.
                        </li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    <ul>
                        <li>If symptoms persist consult your healthcare professional.</li>
                    </ul>
                </p>
                ",
                'references' =>
                    '
                    ',
                'side_effects' =>
                    '
                <p>
                    BifidoBiotic&trade; has low risk of side effects when taken as directed.
                    Refer to CMI for more information.
                </p>
                ',
                'interactions' =>
                    '
                    <p>
                        As BifidoBiotic&trade; contains probiotic strains, taking antibiotics along with probiotics
                        can reduce the effectiveness. To avoid this interaction, take BifidoBiotic&trade; at least 2
                        hours before or after antibiotics.
                    </p>
                ',
                'dosage_information' =>
                    '
                <p>
                    Adults: two (2) capsules daily. Capsules not to be given to children under 4 years of age,
                    to be administered as directed by your healthcare professional.
                    Take Bifidobiotic&trade; at least 2 hours apart from prescription drugs.
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
                                    <strong>EACH CAPSULES CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Bifidobacterium longum</em> subsp. <em>Infantis</em> (Med 14)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>30 billion CFU*</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Bifidobacterium longum</em> (Med15)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>10 billion CFU*</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Bifidobacterium bifidum</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>10 billion CFU*</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
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
                                <p>Cellulose</p>
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
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/bifidobiotic-60s/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Vegetarian friendly
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 74.93,
                'price_wholesale' => 49.95,
                'image_path' => '/img/products/bifidobiotic-60s/bifidobiotic_60s.png',
                'thumb_image_path' => '/img/products/bifidobiotic-60s/bifidobiotic_60s_thumb.png',
                'in_stock' => true,
                'slug' => 'bifidobiotic-60s',
            ]
            */
            [
                'product_name_index' => 'Quatrefolic',
                'austl_number' => '286501',
                'product_name' => 'Quatrefolic&reg;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Quatrefolic&reg;</h4>
                <p>
                    Medlab Quatrefolic&reg; contains levomefolate glucosamine which is a form of biologically active
                    folate, 5-methyltetrahydrofolate (5-MTHF). Folate is essential for DNA synthesis, cell division,
                    red blood cell production and homocysteine metabolism. Demands for folate increase during pregnancy
                    due to increased requirements for foetal growth and development.
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
                    Quatrefolic&reg; is a new generation folate with increased solubility and bioavailability. Medlab
                    Quatrefolic&reg; contains levomefolate glucosamine which is a form of biologically active folate,
                    5-methyltetrahydrofolate (5-MTHF). Dietary folate and synthetic folic acid are not biologically
                    active and need to be converted into 5-MTHF in a multistep process, requiring the enzyme
                    methylenetetrahydrofolate reductase (MTHFR). Individuals with polymorphic forms of this enzyme
                    cannot convert adequate amounts of biologically active folate. 5-MTHF can bypass the MTHFR enzyme
                    to meet nutritional demands. Folate is essential for DNA synthesis, cell division, red blood cell
                    production and homocysteine metabolism. Demands for folate increase during pregnancy due to
                    increased requirements for foetal growth and development.
                </p>
                ',
                'practitioner_summary' =>
                    "
                <strong>STANDARD INDICATIONS</strong>
                <p>
                    <ul>
                        <li>
                            Helps maintain normal blood/blood tonic (Note: These claims are appropriate for folic acid,
                            vitamin B12 and iron, but must not imply anaemic conditions).
                        </li>
                        <li>
                            Aids, assists or helps in the maintenance of general well-being.
                        </li>
                        <li>
                            Maintain/support healthy energy levels.
                        </li>
                        <li>
                            May assist in the management of dietary folate deficiency.
                        </li>
                    </ul>
                </p>
                <strong>SPECIFIC INDICATIONS</strong>
                <p>
                    <ul>
                        <li>
                            Contains Levomefolate glucosamine which provides Levomefolic acid, which is a form of
                            L-5-methyltetrahydrofolate (L-5-MTHF). L-5-methyltetrahydrofolate is the predominant
                            naturally occurring folate in foods.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine, which provides Levomefolic acid, a form of folate,
                            which helps the body to metabolise proteins.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine, which provides Levomefolic acid, a form of folate,
                            which is involved in the formation of DNA and cellular division.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine, which provides Levomefolic acid, a form of folate,
                            which supports a healthy pregnancy.
                        </li>
                        <li>
                            Supports a healthy brain and nervous system function.
                        </li>
                        <li>
                            Helps to form red blood cells and proper function of red blood cells.
                        </li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    <ul>
                        <li>If symptoms persist consult your healthcare professional.</li>
                        <li>Do not take while on warfarin therapy.</li>
                        <li>Do not exceed the stated dose.</li>
                        <li>If you have had a baby with a neural tube defect/spina bifida, seek specific medical advice.</li>
                        <li>Vitamin supplements should not replace a balanced diet.</li>
                    </ul>
                </p>
                ",
                'references' =>
                    '
                    ',
                'side_effects' =>
                    '
                <p>
                    Quatrefolic&reg; has a low risk of side effects when taken as directed.
                    Refer to CMI for more information.
                </p>
                ',
                'interactions' =>
                    '
                    <p>
                        Folic acid may interact with 5-fluorouracil, capecitabine (Xeloda), Fosphenytoin (Cerebyx),
                        Methotrexate (MTX), phenobarbital (luminal), Phenytoin (Dilantin) and primidone (Mysoline)
                        and Pyrimethamine (Daraprim). Interactions may possibly occur with other forms of folate.
                    </p>
                    <p>
                    <ul>
                        <li>
                            <b>Capecitabine</b> - High doses of folic acid may contribute to capecitabine toxicity.
                        </li>
                        <li>
                            <b>5-flourouracil</b> - High doses of folic acid may increase toxicity and and
                            gastrointestinal side effects of 5-flourouracil.
                        </li>
                        <li>
                            <b>Methotrexate</b> - Folic acid may reduce the efficacy of methotrexate in the treatment
                            of acute lymphoblastic leukaemia and possibly other cancers. It is advised to consult an
                            oncologist before using folic acid, as it may reduce the efficacy of methotrexate.
                        </li>
                        <li>
                            Folic acid can have direct convulsant activity in some people, reversing the effects of
                            phenobarbital and primidone, and worsening seizure control. Phenobarbital and Phenytoin
                            can reduce serum folate levels. If phenytoin and folic acid are introduced at the same
                            time and continued together, adverse effects may be avoided.
                        </li>
                        <li>
                            <b>Fosphenytoin</b> - Folic acid in doses over 1mg per day or more, can reduce serum levels
                            of fosphenytoin in some people.
                        </li>
                        <li>
                            <b>Pyrimethamine</b> - Folic acid may antagonise the antiparasitic effects of pyrimethamine,
                            except in the case of malria. Pyrimethamine  can reduce serum levels of folate.
                        </li>
                    </ul>
                ',
                'dosage_information' =>
                    '
                <p>
                    Adults: Take 1 capsule, once a day, or as directed by your healthcare professional.
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
                                    <strong>EACH CAPSULES CONTAINS</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Levomefolate glucosamine</p>
                            </td>
                            <td width="136" valign="top">
                                <p>926 mcg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Equiv. Levomefolic acid (5-MTHF)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 mcg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Cellulose</p>
                                <p>Silica</p>
                                <p>Magnesium stearate</p>
                                <p>
                                    Quatrefolic&reg; is covered by U.S. Patent No. 7,947,662 and is a
                                    registered trademark of Gnosis S.p.A.
                                </p>
                                <p>
                                    <img width="100%" alt="Quatrefolic Logo" src="/img/products/quatrefolic-60s/quatrefolic_logo.png">
                                <p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    <p>
                        <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/quatrefolic-60s/cmi/english" target="_blank">
                            Click Here For English CMI
                        </a>
                    </p>
                </p>
                ',
                'free_from' =>
                    '
                <p class="medlab_product_content_sub_title">
                    Gluten & Dairy Free
                </p>
                <p class="medlab_product_content_sub_title">
                    Vegetarian friendly
                </p>
                <p class="medlab_product_content_sub_title">
                    Refrigerate to maintain stability
                </p>
                ',
                'price_retail' => 19.65,
                'price_wholesale' => 13.10,
                'image_path' => '/img/products/quatrefolic-60s/quatrefolic_60s.png',
                'thumb_image_path' => '/img/products/quatrefolic-60s/quatrefolic_60s_thumb.png',
                'in_stock' => true,
                'slug' => 'quatrefolic-60s',
            ]
        );

        $this->comment("Uploaded BifidoBiotic and Quatrefolic");

        Model::reguard();
    }
}