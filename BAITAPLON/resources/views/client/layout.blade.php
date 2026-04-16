<!DOCTYPE html>
<html>

<head>
    <title>Fashion Shop</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    {{-- HEADER --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
        <a class="navbar-brand fw-bold" href="/">Fashion</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-4">
                <li class="nav-item">
                    <a class="nav-link" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">Sản phẩm</a>
                </li>
            </ul>
        </div>

        <div>
            <a href="/cart" class="btn btn-outline-dark btn-sm">Giỏ hàng</a>
            <a href="/login" class="btn btn-dark btn-sm">Login</a>
        </div>
    </nav>

    {{-- CONTENT --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer class="bg-dark text-white text-center p-3 mt-5">
        Fashion Shop © 2026
    </footer>

</body>

</html>