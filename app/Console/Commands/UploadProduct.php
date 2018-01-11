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
                'product_name_index' => 'NeuroActiv',
                'austl_number' => '287564',
                'product_name' => 'NeuroActiv&trade;',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">NeuroActiv&trade;</h4>
                <p>
                    NeuroActiv&trade; is a synergistic combination of biologically active nutrients designed to support 
                    a healthy nervous system, promote a healthy mood, and maintain normal cognitive function. 
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
                    NeuroActiv&trade; provides key nutrients to support essential metabolic pathways in the Central 
                    Nervous System (CNS) for healthy brain function, healthy mood and healthy cognitive function. 
                    Vitamins B6, B12 and folate support the methylation of proteins, membrane phospholipids, and 
                    metabolism of neurotransmitters in the CNS. Vitamin B6 is an essential co-factor in the synthesis 
                    of neurotransmitters such as dopamine, serotonin, γ-aminobutyric acid (GABA), noradrenaline and 
                    melatonin. Low plasma levels of vitamins B6, B12 and folate have been associated with elevated 
                    homocysteine levels, impaired neurotransmitter synthesis, mild cognitive decline, and a range of 
                    neurological symptoms. NeuroActiv&trade; provides a therapeutic dose of Ubiquinol-10, the reduced 
                    form of coenzyme Q10, with a superior absorption profile and higher bioavailability compared to 
                    ubiquinone. Coenzyme Q10 is essential for mitochondrial energy production. Coenzyme Q10 provides 
                    upport for the high energy requirements in the brain, and may offer neuroprotective support for 
                    conditions associated with impaired mitochondrial function.
                </p>
                ',
                'practitioner_summary' =>
                    "
                <strong>STANDARD INDICATIONS</strong>
                <p>
                    <ul>
                        <li>
                            May assist in the management of dietary folate deficiency.
                        </li>
                        <li>
                            May assist in the management of dietary vitamin B12 deficiency.
                        </li>
                        <li>
                            Helps maintain normal blood/blood tonic.
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
                            May assist in managing of Folic acid deficiency when dietary intake is inadequate.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine, which provides Levomefolic acid, a form of folate, which 
                            helps the body to metabolise proteins.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine, which provides Levomefolic acid, a form of folate, which 
                            is involved in the formation of DNA and cellular division.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine, which provides Levomefolic acid, a form of folate, which 
                            supports normal/healthy cardiovascular function and helps to metabolise homocysteine when 
                            taken with Vitamin B6 and Vitamin B12.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine which provides Levomefolic acid, which is a form of 
                            L-5-methyltetrahydrofolate (L-5- MTHF). L-5-methyltetrahydrofolate is the predominant 
                            naturally occurring folate in foods.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine, which provides Levomefolic acid, a form of folate, 
                            which supports a healthy pregnancy.
                        </li>
                        <li>
                            Contains Levomefolate glucosamine, which provides Levomefolic acid, a form of folate, 
                            which may reduce homocysteine levels to improve vascular endothelium function though its 
                            influence on nitric oxide and exerts direct antioxidative effects.
                        </li>
                        <li>
                            Contains Vitamin B12, which helps the body metabolise proteins, carbohydrates and fats - 
                            vitamin B12 is involved in the production of energy in the body.
                        </li>
                        <li>
                            Contains Vitamin B12, which is required for red blood cell formation and is involved in 
                            DNA synthesis.
                        </li>
                        <li>
                            Contains Vitamin B12, which supports normal/healthy nervous system function, maybe mediated 
                            by the methylation cycle.
                        </li>
                        <li>
                            Contains Vitamin B12, which may supports normal/healthy cardiovascular function.
                        </li>
                        <li>
                            Vitamin B12 may support the cellular immunity.
                        </li>
                        <li>
                            Contains Mecobalamin, one of the active forms of vitamin B12.
                        </li>
                        <li>
                            Contains Vitamin B12, which is required for synthesis of nerve-signalling molecules 
                            (amines) and for facilitation of the body's normal nerve repair mechanisms.
                        </li>
                        <li>
                            Vitamin B12 and folate may help maintain normal cognitive function.
                        </li>
                            May assist in managing Pyridoxine (Vitamin B6) deficiency when dietary intake is inadequate.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which may contribute to to normal energy metabolism.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which is involved in the synthesis of several 
                            neurotransmitters, such as serotonin, GABA and dopamine and may support the normal 
                            healthy nervous system function.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which supports normal/healthy immune system function.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which supports normal/healthy cardiovascular function.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which is involved in the formation of haemoglobin and 
                            the growth of red blood cells.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which is involved in the regulation of normal 
                            hormonal activity.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which is involved in DNA synthesis.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which is required for synthesis of nerve-signalling 
                            molecules (amines) and for facilitation of the body's normal nerve repair mechanisms.
                        </li>
                        <li>
                            Contains Pyridoxine (Vitamin B6), which may inhibit formation of advanced glycation 
                            end products and has a protective effect under homocysteine-induced oxidative stress.
                        </li>
                        <li>
                            Pyridoxine (Vitamin B6)-dependent enzymes are involved in many biochemical reactions, 
                            including the transsulfuration of homocysteine and decarboxylation of amino acids that 
                            yield biogenic amines (neurotransmitters).
                        </li>
                        <li>
                            Clinical trials suggest the combination of Levomefolic acid, Vitamin B, and Vitamin B12 
                            can reduce symptoms of neuropathy.
                        </li>
                        <li>
                            The combination of supplemental folate and vitamin B12 has been shown to reduce 
                            homocysteine more than folic acid alone.
                        </li>
                        <li>
                            Contains pyridoxal 5 phosphate, which is an active form of Vitamin B6 in the body.
                        </li>
                        <li>
                            Contains Vitamin B12, which may act as an efficient intracellular superoxide scavenger 
                            and improves glutathione redox status.
                        </li>
                        <li>
                            Pyridoxal 5-phosphate and vitamin B12 may help maintain normal healthy stress levels.
                        </li>
                        <li>
                            Folate and vitamin B6 are required as co-factors for neurotransmitter metabolism and 
                            therefore may help to support normal health mood.
                        </li>
                        <li>
                            Contains Coenzyme Q10, which plays an essential role in the production of ATP and assists 
                            energy production in the mitochondria.
                        </li>
                        <li>
                            Contains Coenzyme Q10, which helps to support/maintain cardiovascular health.
                        </li>
                        <li>
                            Contains coenzyme Q10, which is an antioxidant and can therefore assist in protecting 
                            the body from the damaging effects of free radical damage.
                        </li>
                        <li>
                            Contains Coenzyme Q10, which plays a role in normal/healthy immune function.
                        </li>
                        <li>
                            Contains ubiquinol, the reduced form of Coenzyme Q10.
                        </li>
                        <li>
                            Both animal and human studies have demonstrated an inverse correlation between homocysteine 
                            levels and endothelial function, perhaps through impairment of vasodilation mediated by 
                            endothelium-derived nitric oxide.
                        </li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    <ul>
                        <li>
                            Vitamin Supplements should not replace a balanced diet.
                        </li>
                        <li>
                            If symptoms persist consult your healthcare professional.
                        </li>
                        <li>
                            Do not take while on warfarin therapy without medical advice.
                        </li>
                        <li>
                            Stop taking this medication if you experience tingling, burning or numbness and see your 
                            healthcare practitioner as soon as possible.
                        </li>
                        <li>
                            Do not exceed the stated dose except on medical advice.
                        </li>
                        <li>
                            If you have had a baby with a neural tube defect/spina bifida, seek specific medical advice.
                        </li>
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
                    <ul>
                        <li>
                            <b>Folic acid</b> may interact with 5-fluorouracil, capecitabine (Xeloda), Fosphenytoin (Cerebyx), 
                            Methotrexate (MTX), phenobarbital (luminal), Phenytoin (Dilantin) and primidone (Mysoline) 
                            and Pyrimethamine (Daraprim). Interactions may possibly occur with other forms of folate.
                        </li>
                        <li>
                            High doses of <b>Folic acid</b> may contribute to capecitabine toxicity.
                        </li>
                        <li>
                            High doses of folic acid may increase toxicity and and gastrointestinal side effects of 
                            5-flourouracil.
                        </li>
                        <li>
                            <b>Folic acid</b> may reduce the efficacy of methotrexate in the treatment of acute lymphoblastic 
                            leukaemia and possibly other cancers. It is advised to consult an oncologist before using 
                            folic acid, as it may reduce the efficacy of methotrexate.
                        </li>
                        <li>
                            <b>Folic acid</b> can have direct convulsant activity in some people, reversing the effects of 
                            phenobarbital and primidone, and worsening seizure control. Phenobarbital and Phenytoin 
                            can reduce serum folate levels. If phenytoin and folic acid are introduced at the same 
                            time and continued together, adverse effects may be avoided.
                        </li>
                        <li>
                            <b>Folic acid</b> in doses over 1mg/ day or more, can reduce serum levels of fosphenytoin in 
                            some people.
                        </li>
                        <li>
                            <b>Folic acid</b> may antagonise the anti-parasitic effects of pyrimethamine, except in the 
                            case of malaria. Pyrimethamine can reduce serum levels of folate.
                        </li>
                        <li>
                            <b>Vitamin B6</b> Use with caution in combination with amiodarone. Preliminary research suggests 
                            that can exacerbate amiodarone-induced photosensitivity. Other research suggests a 
                            protective effect.
                        </li>
                        <li>
                            <b>Vitamin B6 and coenzyme Q-10</b> Use with caution in combination with antihypertensive drugs 
                            as <b>Vitamin B6 and Coenzyme Q-10</b> can decrease blood pressure in hypertensive patients and 
                            may increase the risk of hypotension when used in combination with drugs that lower blood 
                            pressure.
                        </li>
                        <li>
                            <b>Vitamin B6 200 mg daily</b> may interact with phenobarbital. Preliminary research suggests that 
                            Vitamin B6 200 mg daily can reduce plasma levels of phenobarbital, possibly by increasing
                            metabolism. It is not known whether lower doses have any effect.
                        </li>
                        <li>
                            <b>Vitamin B6 200 mg daily</b> may interact with Phenytoin. Preliminary data suggests that Vitamin 
                            B6 200 mg daily can reduce plasma levels of phenytoin, possibly by increasing metabolism. 
                            It is not known whether lower doses have any effect.
                        </li>
                        <li>
                            <b>Vitamin B6</b> use with caution in combination with Levodopa (minor risk). <b>Vitamin B6</b> enhances 
                            the metabolism of levodopa, reducing its anti-parkinsonism effects. However, this 
                            interaction does not occur when carbidopa is used concurrently with levodopa (Sinemet). 
                            Therefore, it is not likely to be a problem in most people.
                        </li>
                        <li>
                            <b>Vitamin B12</b> Avoid in combination with chloramphenicol. Limited case reports suggest that 
                            chloramphenicol can delay or interrupt the reticulocyte response to supplemental Vitamin 
                            B12 in some patients. Monitor blood counts closely if this combination cannot be avoided.
                        <li>
                            <b>Coenzyme Q10</b> use with caution in combination with chemotherapy and radiotherapy. There is 
                            concern that Coenzyme Q10 might protect tumor cells from chemotherapeutic agents that work 
                            by inducing oxidative stress, such as the alkylating agents (e.g. cyclophosphamide, 
                            Cytoxan), doxorubicin and radiation therapy.
                        </li>
                        <li>
                            Use with caution in combination with warfarin. Concomitant use of <b>Coenzyme Q10</b> might 
                            reduce the anticoagulation effects of warfarin.
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
                                <p>463 µg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Equiv. Levomefolic acid (5-MTHF)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>250 µg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Mecobalamin (Vitamin B12)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>200 µg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Pyridoxal 5-phosphate monohydrate</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>47.02 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Equiv. pyridoxine (vitamin B6)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>30 µg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Ubiquinol-10 (CoQ10)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>100 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Calcium hydrogen phosphate dihydrate</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>23.6 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Equiv. calcium</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>5.5 mg</p>
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
                                <p>Hypermellose</p>
                                <p>Silica (colloidal anhydrous)</p>
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
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/neuroactiv/cmi/english" target="_blank">
                            Click Here For English CMI
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
                    No artificial colours, flavours or sweeteners
                </p>
                ',
                'price_retail' => 42.14,
                'price_wholesale' => 24.74,
                'image_path' => '/img/products/neuroactiv/neuroactiv.png',
                'thumb_image_path' => '/img/products/neuroactiv-60s/neuroactiv_thumb.png',
                'in_stock' => true,
                'slug' => 'neuroactiv',
            ]
        );

        $this->comment("Uploaded NeuroActiv");

        Model::reguard();
    }
}