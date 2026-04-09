<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateQuantityRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Tìm kiếm theo tên
        if ($request->filled('keyword')) {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        $products = $query
            ->orderBy('created_at', 'desc')
            ->paginate(5)
            ->withQueryString();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
{
    Product::create($request->validated());

    return redirect()
        ->route('products.index')
        ->with('success', 'Thêm sản phẩm thành công.');
}

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(UpdateQuantityRequest $request, Product $product)
    {
        $product->update([
            'quantity' => $request->quantity
        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Cập nhật tồn kho thành công.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Xóa sản phẩm thành công.');
    }
}
