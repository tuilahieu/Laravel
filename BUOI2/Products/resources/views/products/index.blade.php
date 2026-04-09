
@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Danh sách sản phẩm</h2>

        <a href="{{ route('products.create') }}" class="btn btn-success">
            Thêm sản phẩm
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">

            <form method="GET" action="{{ route('products.index') }}" class="row mb-3">
                <div class="col-md-5">
                    <input
                        type="text"
                        name="keyword"
                        class="form-control"
                        placeholder="Tìm theo tên sản phẩm..."
                        value="{{ request('keyword') }}"
                    >
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">
                        Tìm kiếm
                    </button>
                </div>
            </form>

            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                        <th width="220">Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>

                            <td>{{ $product->name }}</td>

                            <td>{{ $product->category }}</td>

                            <td>{{ number_format($product->price, 0, ',', '.') }} đ</td>

                            <td>{{ $product->quantity }}</td>

                            <td>
                                @if($product->quantity == 0)
                                    <span class="badge bg-danger">
                                        Hết hàng
                                    </span>
                                @elseif($product->quantity < 5)
                                    <span class="badge bg-warning text-dark">
                                        Sắp hết hàng
                                    </span>
                                @else
                                    <span class="badge bg-success">
                                        Còn hàng
                                    </span>
                                @endif
                            </td>

                            <td>
                                <a
                                    href="{{ route('products.edit', $product) }}"
                                    class="btn btn-warning btn-sm"
                                >
                                    Sửa tồn kho
                                </a>

                                <form
                                    action="{{ route('products.destroy', $product) }}"
                                    method="POST"
                                    class="d-inline"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                    >
                                        Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Không có sản phẩm nào.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{ $products->links() }}
            </div>

        </div>
    </div>
</div>
@endsection
