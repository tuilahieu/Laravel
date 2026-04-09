<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $newestProducts = Product::latest()->take(5)->get();
        $categories = Category::withCount('products')->get(); // thống kê sản phẩm mỗi danh mục

        return view('dashboard.index', compact('totalProducts', 'totalCategories', 'newestProducts', 'categories'));
    }
}
