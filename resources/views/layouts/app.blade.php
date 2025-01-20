<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="main-container d-flex">
        @include('components.sidebar')
        <div class="content d-flex flex-column">
            @include('components.navbar')
            <div class="dashboard-content px-4 py-4">
                @yield('content')
            </div>
            @include('components.footer')
        </div>
    </div>
</body>
</html>
