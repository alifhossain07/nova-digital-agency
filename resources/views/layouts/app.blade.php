<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    {{-- Google Fonts --}}
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">


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


</body>
</html>
