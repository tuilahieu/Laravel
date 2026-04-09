<!-- resources/views/layout/master.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Quản lí SP</a>
        </div>
    </nav>
</header>

<body>
    <div class="container mt-4">
        @include('components.alert')
        @yield('content')
    </div>
</body>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <p class="text-center text-muted">&copy; Laravel Chuyên đề 1</p>
    </div>
</footer>

</html>