<?php
namespace ShoppingCart;
use \AcceptanceTester;
use Carbon\Carbon;

class ShoppingCartPromotionTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    protected function create_buy_one_get_one_free_promotion($I, $deal, $productId)
    {
        $I->haveInDatabase('promotions', [
            'id' => 100,
            'product_id' => $productId,
            'name' => $deal['name'],
            'type' => $deal['type'],
            'apply_to_group' => $deal['apply_to_group'],
            'description' => $deal['description'],
            'isActive' => $deal['isActive'],
            'starting_date' => $deal['starting_date'],
            'end_date' => $deal['end_date']
        ]);

        $I->haveInDatabase('buy_one_get_one_free', [
            'promotion_id' => 100,
            'minimum_qty' => $deal['minimum_qty'],
            'bonus_qty' => $deal['bonus_qty']
        ]);
    }

    protected function create_discount_promotion($I, $deal, $productId)
    {
        $I->haveInDatabase('promotions', [
            'id' => 101,
            'product_id' => $productId,
            'name' => $deal['name'],
            'type' => $deal['type'],
            'apply_to_group' => $deal['apply_to_group'],
            'description' => $deal['description'],
            'isActive' => $deal['isActive'],
            'starting_date' => $deal['starting_date'],
            'end_date' => $deal['end_date']
        ]);

        $I->haveInDatabase('price_discount', [
            'promotion_id' => 101,
            'discount_percentage' => $deal['discount_percentage']
        ]);
    }

    protected function loginAndBuyProduct($I, $productId)
    {
        $I->login('patientemailtest321@gmail.com', 'testtest');
        $I->amonPage('/nutraceuticals/products');
        $I->click('//button[@product="' . $productId . '" and @title="Add to Cart"]');
    }

    // tests
    public function buyProductWithTwoTypesOfPromotions(AcceptanceTester $I)
    {
        $buy_one_get_one_free_deal = [
            'name' => "Monthly Deal",
            'type' => "buy_one_get_one_free",
            'apply_to_group' => 'Patient',
            'description' => 'Get one free for every two purchase',
            'isActive' => true,
            'starting_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonth(1),
            'minimum_qty' => '2',
            'bonus_qty' => '1'
        ];

        $discount_deal = [
            'name' => "Monthly Deal",
            'type' => "price_discount",
            'apply_to_group' => 'Patient',
            'description' => '10% off All Products',
            'isActive' => true,
            'starting_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonth(1),
            'discount_percentage' => '10'
        ];

        $this->create_buy_one_get_one_free_promotion($I, $buy_one_get_one_free_deal, 14);
        $this->create_discount_promotion($I, $discount_deal, 14);
        $this->loginAndBuyProduct($I, 14);

        $I->click('//button[@data-qty-plus-button="" and @target="product_qty_0"]');
        $I->click('//button[@data-qty-plus-button="" and @target="product_qty_0"]');
        $I->click('//button[@data-qty-plus-button="" and @target="product_qty_0"]');
        $I->click('//button[@data-qty-plus-button="" and @target="product_qty_0"]');
        $I->click('//button[@type="submit" and @target="product_qty_0" and contains(., "Update")]');

        //
        // Check Line Item
        //
        $I->see('$42.44', '//table[@id="cart_list"]/tbody/tr[1]/td[5]');
        $I->see('$212.2', '//table[@id="cart_list"]/tbody/tr[1]/td[6]');

        //
        // Check Total
        //
        $I->see('$212.2', '//table[@id="cart_summary"]/tbody//th[contains(., "Subtotal")]/ancestor::tr/td');
        $I->see('$21.22', '//table[@id="cart_summary"]/tbody//th[contains(., "GST")]/ancestor::tr/td');
        $I->see('FREE', '//table[@id="cart_summary"]/tbody//th[contains(., "Shipping")]/ancestor::tr/td');
        $I->see('$233.42', '//table[@id="cart_summary"]/tbody//th[contains(., "Total")]/ancestor::tr/td');

        //
        // Check Order Creation
        //
        $I->click('//a[@href="/shoppingcart/address"]');
        $I->click('//button[@type="submit"]');

        $I->seeInDatabase('orders', array(
            'id' => 1001,
            'user_id' => 3,
            'order_status' => 'New Order',
            'subtotal' => 212.2,
            'GST' => 21.22,
            'shipping_cost' => 0,
            'discount' => 117.85,
            'grand_total' => 233.42
        ));

        $I->seeInDatabase('orderedProducts', array(
            'id' => 4,
            'order_id' => 1001,
            'product_name' => 'GastroDaily',
            'line_price' => 47.15,
            'line_quantity' => 5,
            'discount_percentage' => 10,
            'discounted_price' => 42.44,
            'line_total' => 212.2,
        ));

        $I->seeInDatabase('orderedProducts', array(
            'id' => 5,
            'order_id' => 1001,
            'product_name' => 'FREE - GastroDaily',
            'line_price' => 47.15,
            'line_quantity' => 2,
            'discount_percentage' => 100,
            'discounted_price' => 0,
            'line_total' => 0,
        ));

        $I->seeInDatabase('orderedProducts_Promotions', array(
            'id' => 4,
            'orderedProduct_id' => 4,
            'promotion_name' => 'Monthly Deal',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every two purchase',
            'promotion_apply_to_group' => 'Patient'
        ));

        $I->seeInDatabase('orderedProducts_Promotions', array(
            'id' => 5,
            'orderedProduct_id' => 5,
            'promotion_name' => 'Monthly Deal',
            'type' => 'buy_one_get_one_free',
            'promotion_description' => 'Get one free for every two purchase',
            'promotion_apply_to_group' => 'Patient'
        ));

        $I->seeInDatabase('orderedProducts_Promotions', array(
            'id' => 6,
            'orderedProduct_id' => 4,
            'promotion_name' => 'Monthly Deal',
            'type' => 'price_discount',
            'promotion_description' => '10% off All Products',
            'promotion_apply_to_group' => 'Patient'
        ));
    }
}
