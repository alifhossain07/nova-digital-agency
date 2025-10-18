<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    {{-- Google Fonts --}}
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-xh6bq4+nZ1uT6O9uO3Y7LVb1v5+g5rZ4BbD3n3B8Ed3lVslh0nx8U6s1Yt3QhnkbTq5h3bqZITK+1zq0bO3nQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    {{-- Tailwind CSS and JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class=" text-gray-900 font-sans">

    {{-- HEADER / NAVBAR --}}
<x-header />

    {{-- PAGE CONTENT --}}
    <main class=">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <x-footer />

</body>
</html>
