<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<form method="POST" action="/products/update/{{ $product->id }}"
      class="bg-white p-8 rounded-2xl shadow w-96">

    @csrf

    <h2 class="text-2xl font-bold mb-4 text-center">Sửa sản phẩm</h2>

    <input name="name" value="{{ $product->name }}"
        class="w-full border p-2 mb-3 rounded">

    <input name="price" value="{{ $product->price }}"
        class="w-full border p-2 mb-3 rounded">

    <input name="size" value="{{ $product->size }}"
        class="w-full border p-2 mb-3 rounded">

    <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded">
        Cập nhật
    </button>

</form>

</body>
</html>
