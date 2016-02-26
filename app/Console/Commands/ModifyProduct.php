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

            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 120s',
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

            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + CoQ10 60s',
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

            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 120s',
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

            ],
            [
                'product_name_index' => 'BioClean EPA:DHA + Plant Sterols 60s',
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

            ],
            [
                'product_name_index' => 'NanoCelle Activated B12',
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
                        <img width="24" height="24" alt="Spain" src="/img/products/cmi/Spain.png">
                        <a class="medlab_panel_content_link" href="https://s3.amazonaws.com/medlab-pdfs/NanoCelleActivatedB12/Spanish.pdf" target="_blank">Traducción en español</a>
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

            ],
            [
                'product_name_index' => 'Biotic Jnr.',
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

            ],
            [
                'product_name_index' => "Enbiotic 120's",
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

            ],
            [
                'product_name_index' => "Enbiotic 60's",
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

            ],

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
