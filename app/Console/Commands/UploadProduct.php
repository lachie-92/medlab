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
            [
                'product_name_index' => 'Lactoferrin Enhanced',
                'austl_number' => '290203',
                'product_name' => 'Lactoferrin Enhanced&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Lactoferrin Enhanced&trade;</h4>
                <p>
                    Lactoferrin Enhanced is a unique combination of lactoferrin, olive leaf extract, probiotics and
                    zinc to support a healthy immune response and regulate gastrointestinal health.
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
                    Lactoferrin Enhanced&trade; is a unique combination of lactoferrin, olive leaf extract, probiotics
                    and zinc to support a healthy immune response and regulate gastrointestinal health.
                    Lactoferrin is a naturally occurring glycoprotein found in mucosal secretions, human milk and
                    colostrum. It is a component of the innate immune response and protects against a variety of
                    pathogens. Lactoferrin provides anti-inflammatory and antimicrobial activity, and may help to
                    reduce inflammatory lesions associated with mild-moderate acne vulgaris.
                </p>
                <p>
                    Bonolive® is a clinically trialled extract of olive leaf. Intake of Bonolive® has been shown to
                    lead to excellent bioavailabilty of bioactive metabolites in pharmacokinetic research. Bonolive®
                    has been shown to promote bone health by stimulating osteoblast growth in a clinical study.
                    Olive leaf extract has been found to exhibit broad spectrum antimicrobial properties against
                    viruses and bacteria in vitro.
                </p>
                ',
                'practitioner_summary' =>
                    "

                <strong>SPECIFIC INDICATIONS</strong>

                <p>
                    <ul>
                        <li>
                            Contains Bifidobacteria species which may support the health and function of the digestive
                            tract.
                        </li>
                        <li>
                            Bifidobacteria may modulate the immune system at a local and systemic level, thereby
                            regulating immune defence mechanisms.
                        </li>
                        <li>
                            Lactoferrin is naturally found in colostrum and human milk and is a component of the
                            innate immune response.
                        </li>
                        <li>
                            Lactoferrin may provide broad-spectrum anti-microbial and anti-viral activity.
                        </li>
                        <li>
                            Lactoferrin significantly reduces acne lesions in mild to moderate acne vulgaris.
                        </li>
                        <li>
                            Olive Leaf extract contains oleuropeins and phenolic compounds that may support
                            the healthy function of the immune system.
                        </li>
                        <li>
                            Olive leaf extract, contains oleuropein and phenolic compounds, that may support
                            the immune system through broad-spectrum antimicrobial and anti-inflammatory activity.
                        </li>
                        <li>
                            The physiological requirements for zinc peak during periods of growth including
                            infancy, childhood, and adolescence.
                        </li>
                        <li>
                            Zinc has a catalytic and structural role in numerous biological activities including
                            cell growth, development, and differentiation.
                        </li>
                        <li>
                            Over 300 different enzymes depend on zinc for their ability to catalyze vital chemical
                            reactions. Zinc-dependent enzymes can be found in all known classes of enzymes.
                        </li>
                        <li>
                            Contains olive leaf extract rich in oleuropeins which may stimulate osteoblast activity
                            as seen in a clinical study with osteopenic women.
                        </li>
                        <li>
                            Lactoferrin may support bone health by promoting the regulation of bone tissue via
                            increased osteoblast growth and reduced osteoclastogenesis, as reported in in-vitro
                            and in-vivo studies.
                        </li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    <ul>
                        <li>Derived from cow's milk.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>
                ",
                'references' =>
                    '
                    ',
                'side_effects' =>
                    '
                <p>
                    Refer to CMI
                </p>
                ',
                'interactions' =>
                    '
                    <p>
                        <ul>
                            <li>
                                Use with caution in combination with anti-diabetic drugs of antihypertensive drugs.
                                Theoretically, olive leaf may enhance their effects.
                            </li>
                            <li>
                                If taking antibiotics, take 2 hours away from probiotics.
                            </li>
                            <li>
                                Advise patients to take penicillamine, quinolone antibiotics or tetracycline
                                antibiotics at least 2 hours before or 4-6 hours after zinc supplementation.
                                Zinc may interfere with the absorption and activity of these drugs.
                            </li>
                            <li>
                                Use with caution in combination with amiodarone. Amiloride can reduce urinary
                                zinc excretion, especially at doses of 10 mg/day or more.
                            </li>
                            <li>
                                Use with caution in combination with Cisplatin. Preliminary data suggests that
                                zinc may interfere with cisplatin in the body. Cisplatin might also increase
                                zinc excretion.
                            </li>
                        </ul>
                    </p>
                ',
                'dosage_information' =>
                    '
                <p>
                    Adults: two (2) capsules daily. Capsules not to be given to children under 4 years of age,
                    to be administered as directed by your healthcare professional.
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
                                <p>Lactoferrin (bovine)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>150 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Bonolive® ^ <em>Olea europaea</em> extract</p>
                            </td>
                            <td width="136" valign="top">
                                <p>500 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Bifidobacterium animalis ssp. lactis</em> (Med 13)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>100 million CFU*</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Bifidobacterium longum</em> (Med 15)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>100 million CFU*</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Zinc (from zinc glycinate)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>5 mg</p>
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
                                <p>Silica (colloidal anhydrous)</p>
                                <p>Citric acid</p>
                                <p>Magnesium stearate</p>
                                <p>Microcrystalline cellulose</p>
                                <p>Thaumatin</p>
                                <p><strong>^Bonolive® is a registered trademark of BioActor B.V.</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
                'cmi' =>
                    '
                <p>
                    Coming soon
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
                'price_retail' => 41.25,
                'price_wholesale' => 27.50,
                'image_path' => '/img/products/lactoferrin_enhanced_60s/lactoferrin_enhanched_60s.png',
                'thumb_image_path' => '/img/products/lactoferrin_enhanced_60s/lacoferrin_enhanched_60s_thumb.png',
                'in_stock' => true,
                'slug' => 'lactoferrin-enhanced-60s',
            ]
        );

        $this->comment("Uploaded Lactoferrin");

        Model::reguard();
    }
}