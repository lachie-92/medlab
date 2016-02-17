<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_and_slug = [

            'Musculoskeletal Support' => 'musculoskeletal-support',
            'Gastrointestinal Support' => 'gastrointestinal-support',
            'Cardiovascular Support' => 'cardiovascular-support',
            'Immunological Support' => 'immunological-support',
            'Anti-inflammatory' => 'anti-inflammatory',
            'Support for Teenagers' => 'support-for-teenagers',
            'Support for Men' => 'Support-for-Men',
            'Support for Pregnancy' => 'support-for-pregnancy',
            'Support for Seniors' => 'support-for-seniors',
            'Support for Women' => 'support-for-women',
            'Endocrine Support' => 'endocrine-support',
            'Infants and Toddlers' => 'infants-and-toddlers',
            'Metabolic Support' => 'metabolic-support',
            'Neurological Support' => 'neurological-support',
            'Sports Performance' => 'sports-performance',
            'Urogenital Support' => 'urogenital-support',
            'Weight Management' => 'weight-management'

        ];

        $this->buildTable($category_and_slug);
    }

    private function buildTable($category_and_slug) {

        $categoryList = $this->getCategoryList();

        foreach ($category_and_slug as $category => $slug) {

            $categoryList[$category]->slug = $slug;
            $categoryList[$category]->save();
        }
    }

    private function getCategoryList()
    {
        $categories = Category::all();
        $categoryList = [];

        foreach ($categories as $category) {

            $categoryList[$category->category_name] = $category;
        }

        return $categoryList;
    }
}
