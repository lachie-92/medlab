<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Product;

class Product_ActivatedB12 extends Command
{
    protected $signature = 'upload:activatedb12';

    protected $description = 'upload new product';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Model::unguard();

        Product::create([

            'xero_item_id' => 20,
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
        ]);

        Model::reguard();
    }
}