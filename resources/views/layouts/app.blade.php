<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>

    @include('partials.header')

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>
