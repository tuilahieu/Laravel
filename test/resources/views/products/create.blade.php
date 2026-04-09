<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<form method="POST" action="/products/store"
      class="bg-white p-8 rounded-2xl shadow w-96">

    @csrf

    <h2 class="text-2xl font-bold mb-4 text-center">Thêm sản phẩm</h2>

    <input name="name" placeholder="Tên sản phẩm"
        class="w-full border p-2 mb-3 rounded">

    <input name="price" placeholder="Giá"
        class="w-full border p-2 mb-3 rounded">

    <input name="size" placeholder="Size (S, M, L...)"
        class="w-full border p-2 mb-3 rounded">

    <button class="w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded">
        Thêm
    </button>

</form>

</body>
</html>
