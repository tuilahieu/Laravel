<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-10">

<div class="max-w-5xl mx-auto">

    <h1 class="text-3xl font-bold mb-6 text-center">Shop Quần Áo</h1>

    <a href="/products/create"
       class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">
        + Thêm sản phẩm
    </a>

    <div class="mt-6 grid grid-cols-3 gap-6">

        @foreach($products as $p)
        <div class="bg-white rounded-2xl shadow p-4">

            <h2 class="text-xl font-semibold">{{ $p->name }}</h2>

            <p class="text-gray-500">Size: {{ $p->size }}</p>

            <p class="text-red-500 font-bold mt-2">
                {{ number_format($p->price) }} đ
            </p>

            <div class="flex justify-between mt-4">
                <a href="/products/edit/{{ $p->id }}"
                   class="text-blue-500 hover:underline">
                    Sửa
                </a>

                <a href="/products/delete/{{ $p->id }}"
                   class="text-red-500 hover:underline">
                    Xóa
                </a>
            </div>

        </div>
        @endforeach

    </div>

</div>

</body>
</html>
