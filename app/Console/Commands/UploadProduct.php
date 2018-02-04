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
                'product_name_index' => 'StemGuard',
                'austl_number' => '296557',
                'product_name' => 'StemGuard',
                'short_description' =>
                    '
                <h4 class="medlab_product_content_title">StemGuard</h4>
                <p>
                    A scientifically formulated combination of nutraceuticals, botanical extracts, and concentrated 
                    wholefood powders to support and maintain healthy cell function. The unique combination of 
                    ingredients in StemGuard provides support for cellular energy production, cardiovascular health, 
                    liver detoxification pathways, healthy hormone metabolism, and a well-functioning immune system. 
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
                    The combination of Blueberry extract, Green tea extract, Vitamin D3 and broccoli sprout concentrate 
                    have been shown to beneficially influence the regulation of cellular pathways promoting healthy cell 
                    cycles. Broccoli sprout concentrate provides support for liver detoxification pathways, hormone 
                    metabolism, and the inhibition of inflammatory mediators. Organic Spirulina powder supports liver 
                    detoxification, immunity and cell function. It is a natural source of the photosynthetic pigments 
                    chlorophyll A and phycocyanin. The combination of a high dose of biologically active ubiquinol and 
                    L-carnitine maintain cellular energy metabolism to support the reduction of tiredness and fatigue.  
                    Cacoa powder may provide support  for healthy cognitive function and cardiovascular health. 
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
                        <li>
                            COQ10 plays a central role in cellular energy production. CoQ10 is critical for ATP synthesis. L-carnitine modulates energy expenditure in healthy individuals.
                            </li>
                            <li>
                            L-carnitine plays a key role in mitochondrial energy production and function.
                            </li>
                            <li>
                            Blueberries may support cell functions that decline as a result of normal aging.
                            </li>
                            <li>
                            Blueberries may protect against neuro-degenerative processes associated with aging. Spirulina may reduce inflammation and immune decline associated with aging. Vitamin D is immune-modulating hormone associated with healthy aging.
                            </li>
                            <li>
                            COQ10 supports normal/healthy cardiovascular function. 
                            </li>
                            <li>
                            Cocao flavanols may have favourable effects on cardiovascular health.
                            </li>
                            <li>
                            Spirulina is naturally rich in the pigments phycocyanin and chlorophyll.
                            </li>
                            <li>
                            Spirulina contains an array of phyto-nutritents including beta-carotene, iron, and Essential Fatty Acids (gamma-linolenic acid [GLA]). Assists in the function of detoxification pathways via the liver.
                            </li>
                            <li>
                            Contains broccoli sprout which may assist with healthy liver detoxification processes.
                            </li>
                            <li>
                            Contains broccoli sprout which may assist with phase II liver detoxification processes.
                            </li>
                            <li>                        
                            Vitamin D3 is required for proper cellular and immunological function.
                            </li>
                            <li>
                            Vitamin D3 binds to and activates the vitamin D receptor (VDR) that is responsible for the transcription and trans-repression of genes. 
                            </li>
                            <li>
                            Blueberry, green tea, spirulina and vitamin D were found to increase cell proliferation of human bone marrow cells in a dose-depended manner in vitro. Blueberry, green tea, spirulina and vitamin D may support healthy cell division
                        </li>
                    </ul>
                </p>

                <p>
                    <strong>WARNINGS</strong>
                </p>

                <p>
                    <ul>
                        <li>
                            Contains lactose. 
                        </li>
                        <li>
                            Vitamin Supplements should not replace a balanced diet.
                        </li>
                        <li>
                            Do not take while on warfarin therapy without medical advice.
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
                            Concomitant use with warfarin may decrease the anticoagulant effects of warfarin
                        </li>
                        <li>
                            Coenzyme Q10 may decrease blood pressure and may have additive effects with antihypertensives. Caution with patients taking blood pressure medication such as:
                            <ul>
                            <li>Beta blockers</li>
                            <li>Calcium channel blockers</li>
                            <li>ACE inhibitors</li>
                            <li>Angiotensin II receptor blockers</li>
                            </ul>
                        </li>
                        <li>
                            HMG CoA Reductase Inhibitors (statins) can reduce serum coenzyme Q10 levels
                        </li>
                    </ul>
                ',
                'dosage_information' =>
                    '
                <p>
                    Adults: Take 7 g (1 scoop), once daily, or as directed by your healthcare professional.
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
                                    <strong>Each 7g dose (1 scoop) Contains</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p>Broccoli Sprout Concentrate *</p>
                            </td>
                            <td width="136" valign="top">
                                <p>200 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Equiv. Brassica oleracea var. italica sprout </em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>4000 mg </p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Spirulina (Arthrospira platensis) Powder ** </em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>2000 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Levocarnitine tartrate </em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>1466 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Equiv. Levocarnitine </em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>1000 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Colecalciferol (Vitamin D3)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>1000 IU</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Ubiquinol-10 (Co Enzyme Q10)</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>300 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Green Tea (Camellia sinensis) Dry Leaf Extract *</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>6.26 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>    Equiv. green tea (Camellia sinensis) leaf</em></p>
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
                                <p style="text-align: right"><em>Equiv. Theanine</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>1.38 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Vaccinium myrtillus extract*</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>10 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Equiv. Vaccinium myrtillus  fresh fruit</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>1000 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p><em>Cocoa beans powder *</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>384.62 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="273" valign="top">
                                <p style="text-align: right"><em>Equiv. Cocoa beans (Theobroma cacao L) dry powder</em></p>
                            </td>
                            <td width="136" valign="top">
                                <p>2000 mg</p>
                            </td>
                            <td width="136" valign="top">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p>*GMO free</p>
                                <p>** Certified Organic</p>
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Xylitol</p>
                                <p>Peppermint flavor</p>
                                <p>Dark Chocolate flavour</p>
                                <p>Silica</p>
                                <p>Stevia</p>
                                <p>Thaumatin</p>
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
                        <a class="medlab_panel_content_link" href="/nutraceuticals/products/stemguard/cmi/english" target="_blank">
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
               
                ',
                'price_retail' => 70.54,
                'price_wholesale' => 64.13,
                'image_path' => '/img/products/stemguard/stemguard.jpg',
                'thumb_image_path' => '/img/products/stemguard/stemguard_thumb.jpg',
                'in_stock' => true,
                'slug' => 'stemguard',
            ]
        );

        $this->comment("Uploaded StemGuard");

        Model::reguard();
    }
}