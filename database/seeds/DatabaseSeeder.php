<?php

use App\Company;
use App\Company_Address;
use App\Company_Email;
use App\Company_Number;
use App\Customer;
use App\Customer_Address;
use App\Customer_Email;
use App\Customer_Number;
use App\Patient;
use App\Practitioner;
use App\Related_To;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\Ingredient;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement("SET foreign_key_checks = 0");

        User::truncate();
        Patient::truncate();
        Practitioner::truncate();
        Company::truncate();
        Company_Address::truncate();
        Company_Number::truncate();
        Company_Email::truncate();
        Related_To::truncate();
        Customer::truncate();
        Customer_Address::truncate();
        Customer_Email::truncate();
        Customer_Number::truncate();

        Product::truncate();
        Ingredient::truncate();
        Category::truncate();

        DB::statement("SET foreign_key_checks = 1");

        $this->call(UserTableSeeder::class);

        $this->call(Biotic_Jnr_Seeder::class);
        $this->call(Enbiotic_120s_Seeder::class);
        $this->call(Enbiotic_60s_Seeder::class);
        $this->call(MultiBiotic_120s_Seeder::class);
        $this->call(MultiBiotic_60s_Seeder::class);
        $this->call(MultiBiotic_30s_Seeder::class);
        $this->call(NRGBiotic_120s_Seeder::class);
        $this->call(NRGBiotic_60s_Seeder::class);
        $this->call(NanoCelle_B12_Seeder::class);
        $this->call(NanoCelle_D3_Seeder::class);
        $this->call(W8Biotic_Seeder::class);
        $this->call(ORSBiotic_Seeder::class);
        $this->call(GastroDaily_Seeder::class);

        $this->call(IngredientsTableSeeder::class);
        $this->call(IngredientProductSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryProductSeeder::class);

        Model::reguard();
    }
}
