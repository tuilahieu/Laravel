@extends('layouts.master')
@section('title', 'Trang nhân viên')
@section('content')
    <h2>Danh sách nhân viên</h2>
    <x-alert :message="session('success')" />
    @forelse($employees as $emp)
        <p>{{ $emp->name }} - {{ $emp->email }}</p>
    @empty
        <p>Không có dữ liệu</p>
    @endforelse
{{ $employees->links() }}

@endsection
