<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    //
    // Query Scope
    //
    public function scopeAlphabeticalOrder($query, $letter)
    {
        return $query->where('product_name', 'like', $letter.'%')
            ->orderBy('product_name_index', 'ASC');
    }

    public function scopePractitionerPricing($query, $practitioner)
    {
        return $query->with(['practitioner_pricing' => function($query) use ($practitioner) {
            return $query->where('user_id', $practitioner);
        }]);
    }

    //
    // Model Relationships
    //
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredient_product', 'product_id', 'ingredient_id')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id')->withTimestamps();
    }

    public function promotions()
    {
        return $this->hasMany('App\Promotion');
    }

    public function practitioner_pricing()
    {
        return $this->belongsToMany('App\User')->withPivot('price_discounted');
    }

    //
    // Helper Functions
    //
    /**
     * Determine the price of the product on user's group
     *
     * @param $userGroup
     * @return double|null
     */
    public function getProductPriceByUserGroup($userGroup)
    {
        switch($userGroup) {
            case 'Practitioner':
                $price = $this->price_wholesale;
                break;
            case 'Patient':
                $price = $this->price_retail;
                break;
            default:
                $price = null;
        }

        return $price;
    }
}
