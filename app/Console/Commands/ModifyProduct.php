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

            [
                'product_name_index' => "BioticNatal",
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
