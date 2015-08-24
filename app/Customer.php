<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Customer extends Model {

    protected $table='customers';

    /*allow mass assignment for these column
    protected $fillable = ['solve_id', 'status', 'subtype', 'starred', 'business_email', 'personal_email',
        'other_email', 'country', 'title', 'first_name', 'last_name', 'cellular', 'home_phone',
        'home_address_street', 'home_address_suburb', 'home_address_state', 'home_postcode',
        'newsletter_subscription', 'tier', 'approved_by'];
    */

    /**
     * @param $query
     * @param $value
     *
     * Search Logic
     */
    public function scopeSearchAll($query, $value) {
        if($value == "_empty_") {
            $query
                ->where(function($q) {
                    $q
                        ->orWhere('job_title', '=', '', 'or')
                        ->orWhere('modality', '=', '', 'or')
                        ->orWhere('title', '=', '', 'or')
                        ->orWhere('country', '=', '', 'or')
                        ->orWhere('modality', '=', '', 'or')
                        ->orWhere('job_title', '=', '', 'or')
                        ->orWhere(function ($q) {
                            $q
                                ->orWhereHas('customer_addresses', function ($q) {
                                    $q->where('address', '=', '');
                                })
                                ->orWhereHas('customer_addresses', function ($q) {
                                    $q->where('state', '=', '');
                                })
                                ->orWhereHas('customer_addresses', function ($q) {
                                    $q->where('suburb', '=', '');
                                })
                                ->orWhereHas('customer_addresses', function ($q) {
                                    $q->where('street', '=', '');
                                })
                                ->orWhereHas('customer_addresses', function ($q) {
                                    $q->where('postcode', '=', '');
                                });
                        })
                        ->OrWhereHas('customer_numbers', function($q) {
                            $q->where('number', '=', '');
                        })
                        ->OrWhereHas('customer_emails', function($q) {
                            $q->where('email_address', '=', '');
                        });

                });
        }
        else {
            $query
                ->where(function($q) use ($value) {
                    $q
                        ->orWhere('job_title', 'like', '%' . $value . '%', 'or')
                        ->orWhere('modality', 'like', '%' . $value . '%', 'or')
                        ->orWhere('title', 'like', '%' . $value . '%', 'or')
                        ->orWhere('country', 'like', '%' . $value . '%', 'or')
                        ->orWhere('modality', 'like', '%' . $value . '%', 'or')
                        ->orWhere('job_title', 'like', '%' . $value . '%', 'or')
                        ->orWhere(function ($q) use ($value) {
                            $q
                                ->orWhereHas('customer_addresses', function ($q) use ($value) {
                                    $q->where('address', 'like', '%' . $value . '%');
                                })
                                ->orWhereHas('customer_addresses', function ($q) use ($value) {
                                    $q->where('state', 'like', '%' . $value . '%');
                                })
                                ->orWhereHas('customer_addresses', function ($q) use ($value) {
                                    $q->where('suburb', 'like', '%' . $value . '%');
                                })
                                ->orWhereHas('customer_addresses', function ($q) use ($value) {
                                    $q->where('street', 'like', '%' . $value . '%');
                                })
                                ->orWhereHas('customer_addresses', function ($q) use ($value) {
                                    $q->where('postcode', 'like', '%' . $value . '%');
                                });
                        })
                        ->OrWhereHas('customer_numbers', function($q) use ($value) {
                            $q->where('number', 'like', '%' . $value . '%');
                        })
                        ->OrWhereHas('customer_emails', function($q) use ($value) {
                            $q->where('email_address', 'like', '%' . $value . '%');
                        });

                });
        }
    }

    public function scopeSearchTitle($query, $value) {

        if($value == "_empty_") {
            $query
                ->where('title', '=', '');
        }
        else {
            $query
                ->where('title', 'like', '%' . $value . '%');
        }

    }


    public function scopeSearchModality($query, $value) {

        if($value == "_empty_") {
            $query
                ->where(function($q) {
                    $q
                        ->orWhere('modality', '=', '')
                        ->orWhere('job_title', '=', '');
                });
        }
        else {
            $query
                ->where(function($q) use ($value) {
                    $q
                        ->orWhere('modality', 'like', '%' . $value . '%')
                        ->orWhere('job_title', 'like', '%' . $value . '%');
                });
        }
    }

    public function scopeSearchAddress($query, $value) {

        if($value == "_empty_") {
            $query
                ->where(function($q) {
                    $q
                        ->orWhereHas('customer_addresses', function($q) {
                            $q->where('address', '=', '');
                        })
                        ->orWhereHas('customer_addresses', function($q) {
                            $q->where('state', '=', '');
                        })
                        ->orWhereHas('customer_addresses', function($q) {
                            $q->where('suburb', '=', '');
                        })
                        ->orWhereHas('customer_addresses', function($q) {
                            $q->where('street', '=', '');
                        })
                        ->orWhereHas('customer_addresses', function($q) {
                            $q->where('postcode', '=', '');
                        });
                });
        }
        elseif($value == "_ungeocoded_") {
            $query
                ->where(function ($q) {
                    $q
                        ->orWhereHas('customer_addresses', function ($q) {
                            $q->where('valid_for_geocoding', '=', false);
                        });
                });
        }
        elseif($value == "_nomain_") {
            $query
                ->where(function($q) {
                    $q
                        ->orWhere('main_address_id', '=', 0);
                });
        }
        else {
            $query
                ->where(function($q) use ($value) {
                    $q
                        ->orWhereHas('customer_addresses', function($q) use ($value) {
                            $q->where('address', 'like', '%' . $value . '%');
                        })
                        ->orWhereHas('customer_addresses', function($q) use ($value) {
                            $q->where('state', 'like', '%' . $value . '%');
                        })
                        ->orWhereHas('customer_addresses', function($q) use ($value) {
                            $q->where('suburb', 'like', '%' . $value . '%');
                        })
                        ->orWhereHas('customer_addresses', function($q) use ($value) {
                            $q->where('street', 'like', '%' . $value . '%');
                        })
                        ->orWhereHas('customer_addresses', function($q) use ($value) {
                            $q->where('postcode', 'like', '%' . $value . '%');
                        });
                });
        }

    }

    public function scopeSearchState($query, $value) {

        if($value == "_empty_") {
            $query
                ->whereHas('customer_addresses', function($q) use ($value) {
                    $q->where('state', '=', '');
                });
        }
        else {
            $query
                ->whereHas('customer_addresses', function($q) use ($value) {
                    $q->where('state', 'like', '%' . $value . '%');
                });
        }
    }

    public function scopeSearchPostcode($query, $value) {

        if($value == "_empty_") {
            $query
                ->whereHas('customer_addresses', function($q) use ($value) {
                    $q->where('postcode', '=', '');
                });
        }
        else {
            $query
                ->whereHas('customer_addresses', function($q) use ($value) {
                    $q->where('postcode', 'like', '%' . $value . '%');
                });
        }
    }

    public function scopeSearchCountry($query, $value) {

        if($value == "_empty_") {
            $query
                ->orWhere('country', '=', '')
                ->orWhereHas('customer_addresses', function($q) {
                    $q->where('country', '=', '');
                });
        }
        else {
            $query
                ->orWhere('country', 'like', '%' . $value . '%')
                ->orWhereHas('customer_addresses', function($q) use ($value) {
                    $q->where('country', 'like', '%' . $value . '%');
                });
        }
    }

    public function scopeSearchEmail($query, $value) {

        if($value == "_empty_") {
            $query
                ->whereHas('customer_emails', function($q) {
                    $q->where('email_address', '=', '');
                });
        }
        else {
            $query
                ->whereHas('customer_emails', function($q) use ($value) {
                    $q->where('email_address', 'like', '%' . $value . '%');
                });
        }
    }

    public function scopeSearchPhone($query, $value) {

        if($value == "_empty_") {
            $query
                ->whereHas('customer_numbers', function($q) {
                    $q->where('number', '=', '');
                });
        }
        else {
            $query
                ->whereHas('customer_numbers', function($q) use ($value) {
                    $q->where('number', 'like', '%' . $value . '%');
                });
        }
    }

    public function scopeSearchProduct($query, $product_id) {
        $query
            ->whereHas('user', function($q) use($product_id){
                $q->whereHas('orders', function($q) use($product_id){
                    $q->whereHas('ordered_products', function($q) use ($product_id) {
                        $q->whereHas('product', function($q) use ($product_id) {
                            $q->where('id', $product_id);
                        });
                    });
                });
            });
    }

    public function scopePurchaseDate($query, $dates) {

        $query
            ->whereHas('user', function($q) use($dates){
                $q->whereHas('orders', function($q) use($dates){
                    $q->whereBetween('order_date',$dates);
                });
            });
    }

    public function scopeContactedBetween($query, $dates) {

        $query
            ->orWhereHas('customer_reminders', function($q) use($dates){
                $q->whereBetween('created_at',$dates);
            })
            ->orWhereHas('customer_notes', function($q) use($dates){
                $q->whereBetween('created_at',$dates);
            })
            ->orWhereHas('customer_calls', function($q) use($dates){
                $q->whereBetween('created_at',$dates);
            });
    }

    public function scopeFilterOut($query, $id_array) {
        $query
            ->whereNotIn('id', $id_array);
    }


    public function scopeSearchTags($query, $tags) {

        $query
            ->whereHas('customer_tags', function($q) use ($tags) {
                $q->whereIn('id', $tags);
            }, '=', count($tags));
    }

    public function scopeSearchName($query, $value) {

        $query
            ->where('name', 'like', '%' . $value . '%', 'and');
    }

    /**
     * Below are relationship functions
     */

    public function customer_addresses()
    {
        return $this->hasMany('App\Customer_Address');
    }

    public function customer_web_links()
    {
        return $this->hasMany('App\Customer_Web_Link');
    }

    public function customer_emails()
    {
        return $this->hasMany('App\Customer_Email');
    }

    public function customer_numbers()
    {
        return $this->hasMany('App\Customer_Number');
    }

    public function related_to()
    {
        return $this->hasMany('App\Related_To', 'this_customer_id');
    }

    public function customer_staffs()
    {
        return $this->hasMany('App\Customer_Staff');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function customer_tags()
    {
        return $this->belongsToMany('App\Customer_Tag', 'attach_customer_tag', 'customer_id', 'customer_tag_id')->withTimestamps();
    }

    public function customer_reminders()
    {
        return $this->hasMany('App\Customer_Reminder');
    }

    public function customer_notes()
    {
        return $this->hasMany('App\Customer_Note');
    }

    public function customer_files()
    {
        return $this->hasMany('App\Customer_File');
    }

    public function customer_calls()
    {
        return $this->hasMany('App\Customer_Call');
    }

    /**
     * Useful Functions
     */
    public function trashed_addresses()
    {
        $trashed_addresses = Customer_Address::onlyTrashed()->where('customer_id', $this->id)->get();
        return $trashed_addresses;
    }

    public function trashed_emails()
    {
        $trashed_emails = Customer_Email::onlyTrashed()->where('customer_id', $this->id)->get();
        return $trashed_emails;
    }

    public function trashed_numbers()
    {
        $trashed_numbers = Customer_Number::onlyTrashed()->where('customer_id', $this->id)->get();
        return $trashed_numbers;
    }

    public function trashed_web_links()
    {
        $trashed_web_links = Customer_Web_Link::onlyTrashed()->where('customer_id', $this->id)->get();
        return $trashed_web_links;
    }

    public function trashed_reminders()
    {
        $trashed_reminders = Customer_Reminder::onlyTrashed()->where('customer_id', $this->id)->get();
        return $trashed_reminders;
    }

    public function trashed_calls()
    {
        $trashed_calls = Customer_Call::onlyTrashed()->where('customer_id', $this->id)->get();
        return $trashed_calls;
    }

    public function trashed_notes()
    {
        $trashed_notes = Customer_Note::onlyTrashed()->where('customer_id', $this->id)->get();
        return $trashed_notes;
    }

    public function get_top_product_data() {

        $start_of_this_year = Carbon::createFromDate(null, 1, 1);
        $end_of_this_year = Carbon::createFromDate(null, 12, 31);
        $this_year_product = $this->get_product_sold_between_date($start_of_this_year, $end_of_this_year);

        $start_of_last_year = Carbon::createFromDate(null, 1, 1)->subYear();
        $end_of_last_year = Carbon::createFromDate(null, 12, 31)->subYear();
        $last_year_product = $this->get_product_sold_between_date($start_of_last_year, $end_of_last_year);

        $product_sold_list = [];

        foreach($this_year_product as $product => $quantity) {
            if($product !== 'rounding' && $product !== 'Freight') {
                $product_sold_list[$product] = [$quantity, 0];
            }
        }

        foreach($last_year_product as $product => $quantity) {

            if($product !== 'rounding' && $product !== 'Freight') {
                if (array_key_exists($product, $product_sold_list)) {

                    $product_sold_list[$product] = [$product_sold_list[$product][0], $quantity];
                } else {

                    $product_sold_list[$product] = [0, $quantity];
                }
            }
        }

        return $product_sold_list;
    }

    public function get_top_growth_data()
    {
        $start_of_six_month_ago = Carbon::createFromDate(null,null,1)->subMonths(6);
        $now = Carbon::now();
        $this_six_month_product = $this->get_product_sold_between_date($start_of_six_month_ago, $now);

        $twelve_month_ago = Carbon::createFromDate(null,null,1)->subMonths(12);
        $end_of_7_month_ago = Carbon::createFromDate(null,null,1)->subMonths(7)->endOfMonth();
        $previous_six_month_product = $this->get_product_sold_between_date($twelve_month_ago, $end_of_7_month_ago);

        $growth_data = [];

        foreach($previous_six_month_product as $product => $quantity) {
            if($product !== 'rounding' && $product !== 'Freight') {
                $growth_data[$product] = [$quantity, 0, 0];
            }
        }

        foreach($this_six_month_product as $product => $quantity) {

            if($product !== 'rounding' && $product !== 'Freight') {
                if (array_key_exists($product, $growth_data)) {

                    $growth_data[$product] = [$growth_data[$product][0], $quantity];
                }
                else {

                    $growth_data[$product] = [0, $quantity, 0];
                }
            }

        }

        foreach($growth_data as $product => $row_data) {
            $growth_data[$product] = [$growth_data[$product][0], $growth_data[$product][1], ($row_data[1]-$row_data[0])];
        }

        return $growth_data;
    }

    public function get_product_sold_between_date($start_date, $end_date)
    {
        $product_sold = [];

        foreach($this->user->orders as $order) {

            if($order->order_date >= $start_date && $order->order_date <= $end_date) {
                foreach($order->ordered_products as $order_line) {

                    if (array_key_exists($order_line->product->name, $product_sold)) {

                        $product_sold[$order_line->product->name] += $order_line->ordered_quantity;
                    }
                    else {

                        $product_sold[$order_line->product->name] = $order_line->ordered_quantity;
                    }
                }
            }
        }

        return $product_sold;
    }

}
