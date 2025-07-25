<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        @include('partials.header') <!-- Include header -->
    </div>

    <div class="container mt-4">
        @yield('content') <!-- Content Section -->
    </div>

    @include('partials.footer') <!-- Include footer -->
</body>
</html>
