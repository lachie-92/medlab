<?php

use App\Buy_One_Get_One_Free;
use App\Price_Discount;
use App\Product;
use App\Promotion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buy_one_get_one_free_deals = [

            [
                'product' => 'Biotic Jnr.',
                'name' => "Biotic Jnr. Promotion",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Patient',
                'description' => 'Get one free for every three purchase',
                'isActive' => true,
                'starting_date' => Carbon::now(),
                'end_date' => Carbon::now()->addYear(10),
                'minimum_qty' => '3',
                'bonus_qty' => '1',

            ],
            [
                'product' => 'NanoCelle D3',
                'name' => "NanoCelle D3 Promotion",
                'type' => "buy_one_get_one_free",
                'apply_to_group' => 'Practitioner',
                'description' => 'Get two free for every ten purchase',
                'isActive' => true,
                'starting_date' => Carbon::now()->subWeeks(3),
                'end_date' => Carbon::now()->subWeeks(2),
                'minimum_qty' => '10',
                'bonus_qty' => '2'
            ]
        ];

        $discount_deals = [

            [
                'product' => 'Enbiotic 120',
                'name' => "Enbiotic 120's Sales",
                'type' => "price_discount",
                'apply_to_group' => 'Patient',
                'description' => '20% off Enbiotic 120',
                'isActive' => true,
                'starting_date' => Carbon::now(),
                'end_date' => Carbon::now()->addYear(10),
                'discount_percentage' => '20'
            ],
            [
                'product' => 'MultiBiotic 60',
                'name' => "MultiBiotic 60's Sales",
                'type' => "price_discount",
                'apply_to_group' => 'Practitioner',
                'description' => '30% off MultiBiotic 60',
                'isActive' => true,
                'starting_date' => Carbon::now(),
                'end_date' => Carbon::now()->addYear(10),
                'discount_percentage' => '30'
            ]
        ];

        $this->create_buy_one_get_one_free_deals($buy_one_get_one_free_deals);
        $this->create_discount_deals($discount_deals);
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