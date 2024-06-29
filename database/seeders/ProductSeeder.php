<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            ['name' => 'Smartphone', 'price' => 699.99, 'category_id' => 1],
            ['name' => 'Laptop', 'price' => 999.99, 'category_id' => 1],
            ['name' => 'E-book Reader', 'price' => 149.99, 'category_id' => 2],
            ['name' => 'Science Fiction Novel', 'price' => 19.99, 'category_id' => 2],
            ['name' => 'T-Shirt', 'price' => 25.99, 'category_id' => 3],
            ['name' => 'Jeans', 'price' => 49.99, 'category_id' => 3],
            ['name' => 'Blender', 'price' => 29.99, 'category_id' => 4],
            ['name' => 'Coffee Maker', 'price' => 79.99, 'category_id' => 4],
            ['name' => 'Basketball', 'price' => 24.99, 'category_id' => 5],
            ['name' => 'Tennis Racket', 'price' => 89.99, 'category_id' => 5],
        ];

        // Additional product names for each category
        $additionalProducts = [
            'Electronics' => ['Tablet', 'Smart Watch', 'Camera', 'Headphones', 'Speaker'],
            'Books' => ['Mystery Novel', 'Fantasy Novel', 'Non-fiction Book', 'Biography', 'History Book'],
            'Clothing' => ['Sweater', 'Jacket', 'Shorts', 'Skirt', 'Dress'],
            'Home & Kitchen' => ['Microwave', 'Toaster', 'Dishwasher', 'Refrigerator', 'Oven'],
            'Sports' => ['Soccer Ball', 'Baseball Bat', 'Golf Club', 'Hockey Stick', 'Yoga Mat'],
        ];

        $categoryIds = [
            'Electronics' => 1,
            'Books' => 2,
            'Clothing' => 3,
            'Home & Kitchen' => 4,
            'Sports' => 5,
        ];

        // Generate additional products to make a total of 100
        foreach ($categoryIds as $categoryName => $categoryId) {
            foreach ($additionalProducts[$categoryName] as $productName) {
                for ($i = 0; $i < 18; $i++) {
                    $products[] = [
                        'name' => $productName . ' ' . ($i + 1),
                        'price' => rand(10, 1000) / 10, // Random price between 1.0 and 100.0
                        'category_id' => $categoryId,
                    ];
                }
            }
        }

        foreach ($products as $product) {
            Product::firstOrCreate(
                ['name' => $product['name'], 'category_id' => $product['category_id']],
                ['price' => $product['price']]
            );
        }
    }
}
