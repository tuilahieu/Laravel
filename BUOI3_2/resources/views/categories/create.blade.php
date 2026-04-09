<!-- resources/views/categories/create.blade.php -->
@extends('layout.master')
@section('title', 'Thêm danh mục')
@section('content')

<h2>Thêm danh mục mới</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Tên danh mục</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <button type="submit" class="btn btn-success">Thêm danh mục</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Hủy</a>
</form>

@endsection