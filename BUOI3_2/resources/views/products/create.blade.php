<!-- resources/views/products/create.blade.php -->
@extends('layout.master')
@section('title', 'Thêm sản phẩm')
@section('content')

<h2>Thêm sản phẩm mới</h2>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
        <label>Giá</label>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}">
        @error('price')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
        <label>Số lượng</label>
        <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
        @error('quantity')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
        <label>Danh mục</label>
        <select name="category_id" class="form-control">
            <option value="">-- Chọn danh mục --</option>
            @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
            @endforeach
        </select>
        @error('category_id')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
        <label>Ảnh</label>
        <input type="file" name="image" class="form-control">
        @error('image')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Hủy</a>
</form>

@endsection