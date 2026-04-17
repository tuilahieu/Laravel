<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'hien')
            ->latest()
            ->take(8)
            ->get();
        $categories = Category::where('status', 'hien')->get();

        return view('client.home', compact('products', 'categories'));
    }
}
