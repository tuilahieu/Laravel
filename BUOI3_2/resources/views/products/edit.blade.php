<!-- resources/views/products/edit.blade.php -->
@extends('layout.master')
@section('title', 'Sửa sản phẩm')
@section('content')

<h2>Sửa sản phẩm: {{ $product->name }}</h2>

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
        <label>Giá</label>
        <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}">
        @error('price')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
        <label>Số lượng</label>
        <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}">
        @error('quantity')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
        <label>Danh mục</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ (old('category_id', $product->category_id) == $cat->id) ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
            @endforeach
        </select>
        @error('category_id')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
        <label>Ảnh hiện tại</label><br>
        @if($product->image)
        <img src="{{ asset('storage/'.$product->image) }}" width="100">
        @endif
    </div>

    <div class="mb-3">
        <label>Thay ảnh mới</label>
        <input type="file" name="image" class="form-control">
        @error('image')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <button type="submit" class="btn btn-success">Cập nhật</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Hủy</a>
</form>

@endsection