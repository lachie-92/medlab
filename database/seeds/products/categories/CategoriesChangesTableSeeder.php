<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesChangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Remove unwanted Categories from database
        //
        $categoriesToRemove = [
            'Gastrointestinal Health',
            'Energy',
            'Mitochondrial Function',
            'Nervous System',
        ];

        foreach ($categoriesToRemove as $category) {

            Category::where('category_name', '=', $category)->delete();
        }

        //
        // Execute Categories changes
        //
        $categoriesToChange = [
            'Mens' => [
                'newName' => 'Support for Men',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Support for Men</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Womens' => [
                'newName' => 'Support for Women',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Support for Women</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Kids' => [
                'newName' => 'Support for Teenagers',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Support for Teenagers</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Inflammation' => [
                'newName' => 'Anti-inflammatory',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Anti-inflammatory</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Cardiovascular' => [
                'newName' => 'Cardiovascular Support',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Cardiovascular Support</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Digestion' => [
                'newName' => 'Gastrointestinal Support',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Gastrointestinal Support</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Immunity' => [
                'newName' => 'Immunological Support',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Immunological Support</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Bone Health' => [
                'newName' => 'Musculoskeletal Support',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Musculoskeletal Support</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Pregnancy' => [
                'newName' => 'Support for Pregnancy',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Support for Pregnancy</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
            'Seniors' => [
                'newName' => 'Support for Seniors',
                'newDescription' =>
                    '
                    <p>
                        The following products may be useful for <strong>Support for Seniors</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    '
            ],
        ];

        foreach ($categoriesToChange as $category => $changes) {

            $categoryModel = Category::where('category_name', '=', $category)->first();
            $categoryModel->category_name = $changes['newName'];
            $categoryModel->category_description = $changes['newDescription'];
            $categoryModel->save();
        }

        //
        // Add New Categories
        //
        $newCategory = [
            'Endocrine Support' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Endocrine Support</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/Endocrine_Support_2.jpg',
            ],
            'Infants and Toddlers' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Infants and Toddlers</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/Support_forinfants_and_children.jpg',
            ],
            'Metabolic Support' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Metabolic Support</strong>.
                    </p>
                    <ul style="list-style-type: disc;">
                        <li><strong>Mitochondrial</strong></li>
                        <li><strong>Weight Management</strong></li>
                    </ul>
                    <br>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/metabolic_support.jpg',
            ],
            'Neurological Support' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Neurological Support</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/Neurological_Support_1.jpg',
            ],
            'Sports Performance' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Sports Performance</strong>.
                    </p>
                    <ul style="list-style-type: disc;">
                        <li><strong>Oral Rehydration</strong></li>
                    </ul>
                    <br>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/sports_performance.jpg',
            ],
            'Urogenital Support' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Urogenital Support</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/Urogential_support_2.jpg',
            ],
            'Weight Management' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Weight Management</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/weight_management_1.jpg',
            ],
        ];

        foreach ($newCategory as $category => $info) {

            Category::create([
                'category_name' => $category,
                'category_description' => $info['description'],
                'image_path' => $info['image_path'],
            ]);
        }
    }
}
