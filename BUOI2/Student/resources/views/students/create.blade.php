@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Thêm sinh viên</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Tên</label>
            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name') }}"
            >
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Ngành</label>
            <input
                type="text"
                name="major"
                class="form-control"
                value="{{ old('major') }}"
            >
            @error('major')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email') }}"
            >
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Thêm sinh viên
        </button>
    </form>
</div>
@endsection
