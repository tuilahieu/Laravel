<!-- resources/views/products/index.blade.php -->
@extends('layout.master')
@section('title', 'Danh sách sản phẩm')
@section('content')
<a href="{{ route('products.create') }}" class="btn btn-primary mb-2">Thêm sản phẩm</a>
<form method="GET" class="mb-2">
    <input type="text" name="search" placeholder="Tìm kiếm..." value="{{ request('search') }}">
    <select name="sort">
        <option value="">-- Sắp xếp theo giá --</option>
        <option value="asc" {{ request('sort')=='asc'?'selected':'' }}>Tăng dần</option>
        <option value="desc" {{ request('sort')=='desc'?'selected':'' }}>Giảm dần</option>
    </select>
    <button type="submit" class="btn btn-secondary">Lọc</button>
</form>

<table class="table table-bordered">
    <tr>
        <th>Tên</th>
        <th>Giá</th>
        <th>Danh mục</th>
        <th>Ảnh</th>
        <th>Hành động</th>
    </tr>
    @foreach($products as $p)
    <tr>
        <td>{{ $p->name }}</td>
        <td>{{ $p->price }}</td>
        <td>{{ $p->category->name }}</td>
        <td>@if($p->image)<img src="{{ asset('storage/'.$p->image) }}" width="50">@endif</td>
        <td>
            <a href="{{ route('products.edit', $p->id) }}" class="btn btn-warning btn-sm">Sửa</a>
            <form method="POST" action="{{ route('products.destroy', $p->id) }}" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $products->links() }}
@endsection