<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $dates = ['starting_date', 'end_date'];

    //
    // Model Relationships
    //
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function buy_one_get_one_free()
    {
        return $this->hasOne('App\Buy_One_Get_One_Free');
    }

    public function price_discount()
    {
        return $this->hasOne('App\Price_Discount');
    }

    //
    // Helper Functions
    //
    /**
     * Check the user is eligible for the promotion
     *
     * @param $userGroup
     * @return boolean
     */
    public function isEligibleForPromotion($userGroup)
    {
        $eligible =
            ($this->apply_to_group == $userGroup) &
            ($this->isActive) &
            (Carbon::now()->between($this->starting_date, $this->end_date));

        return $eligible;
    }

    public function applyPromotion($price, $qty)
    {
        $promotion['name'] = $this->name;
        $promotion['type'] = $this->type;
        $promotion['description'] = $this->description;
        $promotion['apply_to_group'] = $this->apply_to_group;
        $promotion['starting_date'] = $this->starting_date;
        $promotion['end_date'] = $this->end_date;
        $promotion['free_qty'] = 0;
        $promotion['discount_from_free_qty'] = 0;
        $promotion['discount_percentage'] = 0;

        switch ($this->type) {

            case 'buy_one_get_one_free':
                $promotion = $this->processBuyOneGetOneFree($promotion, $price, $qty);
                break;

            case 'price_discount':
                $promotion = $this->processPriceDiscount($promotion, $price);
                break;

            default:
                return null;
        }

        return $promotion;
    }

    public function processBuyOneGetOneFree($promotion, $price, $qty)
    {
        $minimum_qty = $this->buy_one_get_one_free->minimum_qty;
        $bonus_qty = $this->buy_one_get_one_free->bonus_qty;

        $free_qty = floor($qty / $minimum_qty) * $bonus_qty;

        $promotion['free_qty'] = $free_qty;
        $promotion['discount_from_free_qty'] = $price * $free_qty;

        return $promotion;
    }

    public function processPriceDiscount($promotion, $price)
    {
        $discount_percentage = $this->price_discount->discount_percentage;

        $promotion['original_price'] = $price;
        $promotion['discount_percentage'] = $discount_percentage;

        return $promotion;
    }
}
