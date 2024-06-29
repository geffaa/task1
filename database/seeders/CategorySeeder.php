<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Books'],
            ['name' => 'Clothing'],
            ['name' => 'Home & Kitchen'],
            ['name' => 'Sports'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
