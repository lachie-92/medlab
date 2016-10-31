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

class UpdateDeal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:deal';

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

        DB::statement("SET foreign_key_checks = 0");
        Buy_One_Get_One_Free::truncate();
        Price_Discount::truncate();
        Promotion::truncate();
        DB::statement("SET foreign_key_checks = 1");

        $buy_one_get_one_free_deals = [

            //Till End of October
            [
                'product' => 'Manuka-C 210g',
                'name' => "October 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],

            //Till End of November
            [
                'product' => 'GastroDaily',
                'name' => "November 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],
            [
                'product' => 'ORSBiotic',
                'name' => "November 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 4 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'minimum_qty' => '4',
                'bonus_qty' => '1'
            ],
            [
                'product' => "MultiBiotic 60's",
                'name' => "November 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
            [
                'product' => "MultiBiotic 30's",
                'name' => "November 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
            [
                'product' => "W8Biotic Lemon & Lime",
                'name' => "November 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
            [
                'product' => "W8Biotic Strawberries & Cream",
                'name' => "November 2016 Deals",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Buy 3 get 1 free',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'minimum_qty' => '3',
                'bonus_qty' => '1'
            ],
        ];

        $discount_deals = [


            //Till End of October
            [
                'product' => 'NanoCelle Activated B12',
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $12',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '24.53'
            ],
            [
                'product' => 'NanoCelle B12',
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $11',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '26.22'
            ],
            [
                'product' => 'BioClean EPA:DHA + Plant Sterols 120s',
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $20',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '33.22'
            ],
            [
                'product' => 'BioClean EPA:DHA + Plant Sterols 60s',
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $10',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '41.00'
            ],
            [
                'product' => 'Biotic Jnr.',
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $20',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '19.84'
            ],
            [
                'product' => 'BioticNatal',
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $25',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '30.46'
            ],
            [
                'product' => 'NanoCelle D3',
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $10',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '31.03'
            ],
            [
                'product' => 'NanoCelle D3 + K2',
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $13',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '21.21'
            ],
            [
                'product' => "Enbiotic 60's",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $20',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '28.34'
            ],
            [
                'product' => "GastroDaily",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $21',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '26.50'
            ],
            [
                'product' => "Manuka-C 105g",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $14',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '27.27'
            ],
            [
                'product' => "12Mg Optima Relax",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $20',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '31.79'
            ],
            [
                'product' => "MultiBiotic 30's",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $16',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '16.93'
            ],
            [
                'product' => "MultiBiotic 60's",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $26',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '25.20'
            ],
            [
                'product' => "NOS",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $15',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '38.52'
            ],
            [
                'product' => "NRGBiotic 60's",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $22',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '28.99'
            ],
            [
                'product' => "ORSBiotic",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $16',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '20.24'
            ],
            [
                'product' => "Immune-5 Raspberry",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $27',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '11.48'
            ],
            [
                'product' => "SB 5B",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $18',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '35.25'
            ],
            [
                'product' => "W8Biotic Strawberries & Cream",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $21',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '28.67'
            ],
            [
                'product' => "Immune-5 Vanilla",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $27',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '11.48'
            ],
            [
                'product' => "W8Biotic Lemon & Lime",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $21',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '28.67'
            ],
            [
                'product' => "NRGBiotic 120's",
                'name' => "October 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => 'Discounted Price $40',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/10/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '31/10/2016 23:59:59'),
                'discount_percentage' => '26.71'
            ],

            //Till End of November
            [
                'product' => "NanoCelle B12",
                'name' => "November 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '30% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'discount_percentage' => '30'
            ],
            [
                'product' => "NanoCelle D3",
                'name' => "November 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '30% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'discount_percentage' => '30'
            ],
            [
                'product' => "NanoCelle Activated B12",
                'name' => "November 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '30% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'discount_percentage' => '30'
            ],
            [
                'product' => "NanoCelle D3 + K2",
                'name' => "November 2016 Deals",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '30% Discount',
                'isActive' => true,
                'starting_date' => Carbon::createFromFormat('d/m/Y H:i:s', '01/11/2016 00:00:00'),
                'end_date' => Carbon::createFromFormat('d/m/Y H:i:s', '30/11/2016 23:59:59'),
                'discount_percentage' => '30'
            ],

        ];


        $this->create_buy_one_get_one_free_deals($buy_one_get_one_free_deals);
        $this->create_discount_deals($discount_deals);

        Model::reguard();
    }

    private function create_buy_one_get_one_free_deals($deals)
    {
        foreach ($deals as $deal) {

            if ($deal['product'] == 'All') {
                $products = Product::all();
                foreach ($products as $product) {
                    $this->create_buy_one_get_one_free_promotion($deal, $product);
                }
            }
            else {
                $product = Product::where('product_name_index', 'like', '%' . $deal['product'] . '%')->firstOrFail();
                $this->create_buy_one_get_one_free_promotion($deal, $product);
            }
        }
    }

    private function create_buy_one_get_one_free_promotion($deal, $product)
    {
        $promotion = Promotion::create([

            'product_id' => $product->id,
            'name' => $deal['name'],
            'type' => $deal['type'],
            'apply_to_group' => $deal['apply_to_group'],
            'description' => $deal['description'],
            'isActive' => $deal['isActive'],
            'starting_date' => $deal['starting_date'],
            'end_date' => $deal['end_date']
        ]);

        Buy_One_Get_One_Free::create([

            'promotion_id' => $promotion->id,
            'minimum_qty' => $deal['minimum_qty'],
            'bonus_qty' => $deal['bonus_qty']
        ]);
    }

    private function create_discount_deals($deals)
    {
        foreach ($deals as $deal) {

            if ($deal['product'] == 'All') {
                $products = Product::all();
                foreach ($products as $product) {
                    $this->create_discount_promotion($deal, $product);
                }
            }
            else {
                $product = Product::where('product_name_index', 'like', '%' . $deal['product'] . '%')->firstOrFail();
                $this->create_discount_promotion($deal, $product);
            }
        }
    }

    private function create_discount_promotion($deal, $product)
    {
        $promotion = Promotion::create([

            'product_id' => $product->id,
            'name' => $deal['name'],
            'type' => $deal['type'],
            'apply_to_group' => $deal['apply_to_group'],
            'description' => $deal['description'],
            'isActive' => $deal['isActive'],
            'starting_date' => $deal['starting_date'],
            'end_date' => $deal['end_date']
        ]);

        Price_Discount::create([

            'promotion_id' => $promotion->id,
            'discount_percentage' => $deal['discount_percentage']
        ]);
    }
}
