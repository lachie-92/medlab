<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredientList = [
            'Coenzyme Q10', 'Bifidobacterium bifidum', 'Bifidobacterium breve',
            'Bromelains', 'Amylase', 'Lactobacillus acidophilus',
            'Lactobacillus rhamnosus', 'Magnesium orotate', 'Lactobacillus plantarum',
            'Lipase', 'Papain', 'Protease', 'Streptococcus thermophilus',
            'Bifidobacterium Animalis'
        ];

        foreach ($ingredientList as $ingredient) {

            Ingredient::create([
                'ingredient_name' => $ingredient,
            ]);
        }
    }
}
