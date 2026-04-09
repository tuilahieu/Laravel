<!-- resources/views/categories/index.blade.php -->
@extends('layout.master')
@section('title', 'Danh sách danh mục')
@section('content')

<a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Thêm danh mục</a>

<table class="table table-bordered">
    <tr>
        <th>Tên danh mục</th>
        <th>Số sản phẩm</th>
        <th>Hành động</th>
    </tr>
    @foreach($categories as $c)
    <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->products_count }}</td>
        <td>
            <a href="{{ route('categories.edit', $c->id) }}" class="btn btn-warning btn-sm">Sửa</a>
            <form action="{{ route('categories.destroy', $c->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $categories->links() }}

@endsection