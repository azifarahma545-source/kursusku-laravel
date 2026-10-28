<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'KursusKu')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('partials.navbar')

    <main class="container">
        @if (session('success'))
            <div class="alert alert-success mt-3" role="alert">
                🌸 {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="site-footer">
        <strong>KursusKu ♡</strong>
        <p class="mb-1">Belajar dengan semangat, raih masa depan.</p>
        <small>© {{ date('Y') }} KursusKu</small>
    </footer>

</body>
</html>