@extends('layouts.master')

@section('content')
    <h1>Dashboard</h1>

    <div style="margin-bottom: 20px;">
        <p>Tổng NV: {{ $totalEmp }}</p>
        <p>Tổng PB: {{ $totalDep }}</p>
    </div>

    <h3>5 nhân viên mới nhất</h3>

    @forelse($newEmp as $e)
        <p>{{ $e->name }}</p>
    @empty
        <p>Chưa có nhân viên nào.</p>
    @endforelse
@endsection
