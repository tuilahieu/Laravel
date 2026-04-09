@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Danh sách sinh viên</h2>

        <a href="{{ route('students.create') }}" class="btn btn-success">
            Thêm sinh viên
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="{{ route('students.index') }}" class="row mb-3">
        <div class="col-md-4">
            <input
                type="text"
                name="keyword"
                class="form-control"
                placeholder="Tìm theo tên"
                value="{{ request('keyword') }}"
            >
        </div>

        <div class="col-md-3">
            <select name="sort" class="form-select">
                <option value="asc" {{ request('sort', 'asc') == 'asc' ? 'selected' : '' }}>
                    Tên A-Z
                </option>

                <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>
                    Tên Z-A
                </option>
            </select>
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">
                Tìm kiếm
            </button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Ngành</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->major }}</td>
                    <td>{{ $student->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        Không có sinh viên nào.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">
        {{ $students->links() }}
    </div>

</div>
@endsection
