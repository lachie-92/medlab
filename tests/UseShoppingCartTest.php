<?php

use App\Medlab\ShoppingCart\ShoppingCart;
use App\Medlab\Repositories\ShoppingCartRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UseShoppingCartTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function it_updates_the_basket()
    {
        $auth = Mockery::mock(Guard::class);
        $session = Mockery::mock(Store::class);
        $repository = Mockery::mock(ShoppingCartRepository::class);

        $shoppingCart = new ShoppingCart($repository, $session, $auth);
        $shoppingCart->updateBasket(['1' => '2']);
    }
}
