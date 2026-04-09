@extends('layouts.master')
@section('title', 'Thêm nhân viên')
@section('content')
    <h2>Thêm nhân viên</h2>
    <form method="POST" action="{{ route('employees.store') }}">
        @csrf
        <input name="name" placeholder="Name">
        <input name="email" placeholder="Email">
        <input name="position" placeholder="Position">
        <button type="submit">Save</button>
    </form>
@endsection
