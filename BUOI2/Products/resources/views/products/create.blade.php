
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="mb-0">Thêm sản phẩm</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                    >

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá</label>
                    <input
                        type="number"
                        name="price"
                        step="0.01"
                        class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price') }}"
                    >

                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Số lượng</label>
                    <input
                        type="number"
                        name="quantity"
                        class="form-control @error('quantity') is-invalid @enderror"
                        value="{{ old('quantity') }}"
                    >

                    @error('quantity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <input
                        type="text"
                        name="category"
                        class="form-control @error('category') is-invalid @enderror"
                        value="{{ old('category') }}"
                    >

                    @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Lưu sản phẩm
                </button>

                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    Quay lại
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
