<!-- resources/views/dashboard.blade.php -->
@extends('layout.master')
@section('title', 'Dashboard')
@section('content')

<h2>Dashboard</h2>
<div class="row mb-3 align-items-center">
    <div class="col-auto">
        <a href="{{ route('products.index') }}" class="btn btn-success">Quản lý sản phẩm</a>
    </div>
    <div class="col-auto">
        <a href="{{ route('categories.index') }}" class="btn btn-success">Quản lý danh mục</a>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-4">
        <div class="card p-3">Tổng sản phẩm: {{ $totalProducts }}</div>
    </div>
    <div class="col-md-4">
        <div class="card p-3">Tổng danh mục: {{ $totalCategories }}</div>
    </div>
</div>

<h3>5 sản phẩm mới nhất</h3>
<ul>
    @foreach($newestProducts as $p)
    <li>{{ $p->name }} ({{ $p->category->name }})</li>
    @endforeach
</ul>

<h3>Thống kê sản phẩm theo danh mục</h3>
<table class="table table-bordered">
    <tr>
        <th>Danh mục</th>
        <th>Số sản phẩm</th>
    </tr>
    @foreach($categories as $c)
    <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->products_count }}</td>
    </tr>
    @endforeach
</table>

@endsection