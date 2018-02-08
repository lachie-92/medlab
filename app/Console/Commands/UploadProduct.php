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
                'product_name_index' => 'Testo Restore',
                'austl_number' => '295972',
                'product_name' => 'Testo Restore',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">Testo Restore</h4>
                <p>
                    Testo Restore is an evidence-based formulation designed to increase the level of free testosterone, 
                    and support muscle strength and recovery. Zinc plays a central role in the regulation of cellular 
                    growth and tissue repair, as well as the maintenance of a healthy immune system. Magnesium is 
                    essential for the maintenance of electrolyte balance, energy production and normal neuromuscular function. 
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
                    An evidence-based formulation designed to increase free testosterone levels and support muscle strength 
                    and recovery. The active ingredient in Testo Restore has been shown to increase free testosterone and 
                    Insulin Like Growth Factor-1 (IGF-1), in a Placebo-controlled clinical trial, in healthy men. IGF-1 
                    and testosterone support muscle function and physical performance. 
                    Exercise and excess perspiration increases the demand for zinc and magnesium, which are involved in muscle repair and 
                    recovery. Through providing these nutrients, Testo Restore may support muscle strength and enhanced 
                    recovery from exercise. Zinc plays a role in androgen metabolism and interaction with steroid receptors. 
                    It is essential for the regulation of cellular growth and tissue repair. Magnesium supports energy 
                    production, normal neuromuscular function and may assist with sleep quality. 

                </p>
                ',
                'practitioner_summary' =>
                    "
                <strong>STANDARD INDICATIONS</strong>
                <p>
                    <ul>
                        <li>
                            Aids, assists or helps in the maintenance or improvement of general well-being. 
                        </li>
                    </ul>
                </p>
                <strong>SPECIFIC INDICATIONS</strong>
                <p>
                    <ul>
                        <li>The combination of Zinc, Magnesium and Pyridoxine has been shown in a clinical trial to increase free testosterone and IGF-I in participants supplemented with this combination of nutrients compared to placebo </li>
                        <li>The combination of Zinc, Magnesium and Pyridoxine has been shown in a clinical trial to increase muscle strength </li>
                        <li>Zinc is required for healthy blood glucose metabolism</li>
                        <li>Zinc is an essential component of a number of metalloenzymes, including lactate dehydrogenase, in skeletal muscle Zinc levels may be depleted during prolonged periods of exercise </li>
                        <li>Changes in both intra- and extra-cellular zinc affect muscle function</li>
                        <li>Exercise-induced fluctuations in serum zinc levels may be linked to muscle repair processes during exercise recovery</li>
                        <li>Zinc and magnesium are involved in hormone receptor binding</li>
                        <li>Zinc supports the health and function of male and female reproductive systems</li>
                        <li>Zinc supports healthy testosterone levels in men</li>
                        <li>Magnesium is involved in the production of ATP, or cellular energy</li>
                        <li>Magnesium is a cofactor in more than 300 enzymatic reactions needed for the structural function of proteins, nucleic acids and mitochondria Contains nutrients that are essential for carbohydrate and fat metabolism</li>
                        <li>Magnesium and zinc are involved in protein synthesis in the body.</li>
                        <li>Contains nutrients that support healthy metabolism of proteins (magnesium and zinc) </li>

                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    <ul>
                        <li>
                            Vitamin supplements should not replace a balanced diet. Contains zinc - may be dangerous if taken in large amounts or for a long period.
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
                            <b>Magnesium > Biphosphonates </b>(Alendronate, clodronate, etidronate, ibandronic acid, Risedronate, Tiludronate) Magnesium may interfere with absorption of biphosphonates. Magnesium supplements should be taken at least 2 hours before or 4 hours after taking these medications to minimize potential interference with absorption.
                        </li>
                        <li><b>Magnesium > Antibiotics </b>(Tetracyclines, Quinolones) Magnesium may form insoluble complexes with quinolones and tetracyclines and interfere with their absorption. Magnesium supplements should be taken at least 2 hours before or 4 hours after taking these medications to minimize potential interference with absorption.</li>
                       
                        <li><b>Magnesium > Gabapentin (Neurotin)</b> Magnesium may interfere with gabapentin absorption. Magnesium supplements should be taken at least 2 hours before or 4 hours after taking this medication to minimize potential interference with absorption.</li>
                        
                        <li><b>Magnesium > Calcium channel blockers</b> Theoretically, magnesium may have additive effects with calcium channel blockers. Caution is recommended when combining with high dose magnesium supplementation.</li>
                        
                        <li><b>Zinc >Antibiotics</b> (Tetracyclines and Quinolones) Zinc can form complexes with Tetracyclines and Quinolones in the gastrointestinal tract, which can reduce absorption of both the tetracycline and zinc when taken at the same time.  Zinc supplements should be taken 4 hours before, or 2 hours after these medications to minimize potential interference with absorption.</li>
                        
                        <li><b>Zinc > Antibiotics Cephalexin</b> (Keflex) High doses of zinc (250mg) may decrease cephalexin levels by interfering with intestinal absorption.  Zinc supplements should be taken 4 hours before, or 2 hours after these medications to minimize potential interference with absorption.</li>
                        
                        <li><b>Zinc > Penicillamine</b> (D-penamine) Zinc forms an insoluble complex with penicillamine, and may interfere with absorption. Zinc may reduce efficacy of low dose penicillamine. Zinc supplements should be taken 4 hours before, or 2 hours after these medications to minimize potential interference with absorption.</li>
                        
                        <li><b>Zinc > hypoglyceamic medications</b> Theoretically, zinc can have additive effects in patients treated with hypoglyceamic medications; use with caution, dose adjustments may be warranted, under professional recommendation.</li>
                        
                        <li><b>Zinc > Amiloride</b> Amiloride has a zinc sparing effect, reducing urinary zinc excretion. Use caution with high dose zinc supplementation.</li>
                        
                        <li><b>Vitamin B6 > Phenobarbitione</b> Preliminary research suggests that vitamin B6 (pyridoxine) 200 mg daily can reduce plasma levels of phenobarbital, possibly by increasing metabolism. It is not known whether lower doses have any effect. Avoid high doses of vitamin B6 (pyridoxine)</li>
                        
                        <li><b>Vitamin B6 > Phenytoin</b> Preliminary data suggests that vitamin B6 (pyridoxine) 200 mg daily can reduce plasma levels of phenytoin, possibly by increasing metabolism. It is not known whether lower doses have any effect. Advise people taking phenytoin to avoid high doses of vitamin B6 (pyridoxine).</li>

                    </ul>
                ',
                'dosage_information' =>
                    '
                <p>
                    Adult Men: Four (4) capsules a day; or as directed by your healthcare professional.
                    </p>
                    <p>
                    Adult Women: Three (3) capsules a day; or as directed by your healthcare professional.
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
                                    <strong>Each Capsule Contains</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Zinc (from Zinc Diaspartate, Zinc Methionine Sulfate and Zinc Oxide)</p>
                            </td>
                            <td width="136" valign="top">
                                <p>8.89 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Magnesium (from Magnesium Aspartate and Magnesium Oxide)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>124.185 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Vitamin B6 (from Pyridoxine Hydrochloride)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>3.12 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                                <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Hypromellose</p>
                                <p>Cellulose</p>
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
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/testorestore/cmi/english" target="_blank">
                            Click Here For English CMI
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
                    Dairy Free
                </p>
               
                ',
                'price_retail' => 36.75,
                'price_wholesale' => 24.50,
                'image_path' => '/img/products/testorestore/testorestore.jpg',
                'thumb_image_path' => '/img/products/testorestore/testorestore_thumb.jpg',
                'in_stock' => true,
                'slug' => 'testorestore',
            ]
        );

        $this->comment("Uploaded Testo Restore");

        Model::reguard();
    }
}