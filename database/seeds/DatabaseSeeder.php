<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\Ingredient;

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
        Ingredient::truncate();
        Product::truncate();
        DB::statement("SET foreign_key_checks = 1");

        $this->call(Biotic_Jnr_Seeder::class);
        $this->call(Enbiotic_120s_Seeder::class);
        $this->call(Enbiotic_60s_Seeder::class);
        $this->call(MultiBiotic_120s_Seeder::class);
        $this->call(MultiBiotic_60s_Seeder::class);
        $this->call(MultiBiotic_30s_Seeder::class);
        $this->call(NRGBiotic_120s_Seeder::class);
        $this->call(NRGBiotic_60s_Seeder::class);

        $this->call(IngredientsTableSeeder::class);
        $this->call(IngredientProductSeeder::class);

        Model::reguard();
    }
}
