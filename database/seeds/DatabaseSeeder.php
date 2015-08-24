<?php

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
        Product::truncate();
        Ingredient::truncate();
        Category::truncate();
        DB::statement("SET foreign_key_checks = 1");

        //$this->call(UserTableSeeder::class);

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
