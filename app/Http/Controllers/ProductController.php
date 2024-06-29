<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function indexByCategory($categoryId = null)
    {
        $categories = Category::all();

        if (is_null($categoryId)) {
            $categoryId = $categories->first()->id;
        }

        $products = Product::getByCategory($categoryId);
        return view('products.index', compact('products', 'categories', 'categoryId'));
    }
}
