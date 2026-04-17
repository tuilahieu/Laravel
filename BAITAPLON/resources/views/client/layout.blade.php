<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Fashion Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- HEADER -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between gap-4">

            {{-- LOGO --}}
            <a href="/" class="text-2xl font-bold tracking-wide">
                <img src="https://tokyolife.vn/_next/static/media/logo-chu-hac.79825a1d.png" alt="Fashion Shop" class="w-32">
            </a>

            {{-- SEARCH --}}
            <div class="flex-1 mx-6">
                <form action="/shop" method="GET" class="flex">
                    <input
                        type="text"
                        name="keyword"
                        placeholder="Tìm kiếm sản phẩm..."
                        class="w-full border rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black">
                    <button class="bg-black text-white px-4 rounded-r-lg">
                        🔍
                    </button>
                </form>
            </div>

            {{-- ICONS --}}
            <div class="flex items-center gap-5 text-xl">

                {{-- CART --}}
                <a href="/cart" class="relative">
                    🛒
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs w-4 h-4 flex items-center justify-center rounded-full">
                        0
                    </span>
                </a>

                {{-- USER --}}
                <a href="/login">
                    👤
                </a>

            </div>

        </div>
    </div>
    <!-- CATEGORY BAR -->
    <div class="bg-gray-50 border-b">
        <div class="max-w-7xl mx-auto px-4 py-2 flex justify-center">

            <div class="flex gap-6 overflow-x-auto whitespace-nowrap">

                <a href="/shop" class="text-sm font-medium hover:text-red-500">
                    Tất cả
                </a>

                @foreach($globalCategories as $c)
                <a href="/shop?category={{ $c->slug }}"
                    class="text-sm font-medium hover:text-red-500">
                    {{ $c->name }}
                </a>
                @endforeach

            </div>

        </div>
    </div>

    {{-- CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    <div class="bg-black text-white text-center py-6 mt-10">
        <p>© 2026 Fashion Shop</p>
    </div>

</body>

</html>