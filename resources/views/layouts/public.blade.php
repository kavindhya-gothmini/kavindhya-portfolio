<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Kavindhya Gothmini Thilakarathna')</title>

    <meta name="description"
          content="@yield('description', 'Software Engineering Graduate, Software Developer and Technology Enthusiast.')">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @stack('styles')
</head>

<body>

    @include('layouts.partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @stack('scripts')

</body>
</html>