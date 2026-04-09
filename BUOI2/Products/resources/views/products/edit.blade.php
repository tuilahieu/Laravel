
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="mb-0">Cập nhật tồn kho</h3>
        </div>

        <div class="card-body">
            <p><strong>Sản phẩm:</strong> {{ $product->name }}</p>
            <p><strong>Danh mục:</strong> {{ $product->category }}</p>

            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Số lượng mới</label>

                    <input
                        type="number"
                        name="quantity"
                        class="form-control @error('quantity') is-invalid @enderror"
                        value="{{ old('quantity', $product->quantity) }}"
                    >

                    @error('quantity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Cập nhật
                </button>

                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    Quay lại
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
