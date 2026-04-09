<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css')
</head>
<body class="p-10">

<h1 class="text-xl mb-4">Thêm sinh viên</h1>

<form method="POST" action="/students">
    @csrf
    <input name="name" placeholder="Tên" class="border p-2 block mb-2">
    <input name="major" placeholder="Chuyên ngnahf" class="border p-2 block mb-2">
    <button class="bg-green-500 text-white px-4 py-2">Lưu</button>
</form>

</body>
</html>
