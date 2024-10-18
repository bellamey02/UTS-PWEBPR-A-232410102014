<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Link Tailwind CSS -->
</head>
<body class="bg-gray-100">
    @include('partials.navbar')  <!-- Include navbar di sini -->
    <div class="container mx-auto mt-5">
        @yield('content') <!-- Area untuk konten halaman -->
    </div>
</body>
</html>
