<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css')
</head>
<body class="p-10 bg-gray-100">

<h1 class="text-2xl font-bold mb-4">Danh sách sinh viên</h1>

<a href="/students/create" class="bg-blue-500 text-white px-4 py-2 rounded">Thêm</a>

<table class="mt-4 w-full bg-white shadow">
    <tr class="bg-gray-200">
        <th>ID</th>
        <th>Tên</th>
        <th>Chuyên ngành</th>
        <th>Ngày thêm</th>
        <th>Action</th>
    </tr>

    @foreach($students as $s)
    <tr class="text-center border">
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->major }}</td>
        <td>{{ $s->created_at }}</td>
        <td>
            <a href="/students/{{ $s->id }}/edit" class="text-blue-500">Sửa</a>
            <form action="/students/{{ $s->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="text-red-500">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
