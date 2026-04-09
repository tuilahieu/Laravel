<!-- resources/views/categories/edit.blade.php -->
@extends('layout.master')
@section('title', 'Sửa danh mục')
@section('content')

<h2>Sửa danh mục</h2>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Tên danh mục</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <button type="submit" class="btn btn-success">Cập nhật</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Hủy</a>
</form>

@endsection