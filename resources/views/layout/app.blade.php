<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>

    <meta name="description" content="Vispa Perfume - Every Scent Tells A Story">
    <meta name="keywords" content="Vispa, Perfume, Parfum, Fragrance, Indonesia">
    <meta name="author" content="Vispa">

    <meta property="og:title" content="Vispa Perfume">
    <meta property="og:description" content="Every Scent Tells A Story">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">

    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
          rel="stylesheet">

    <style>

        body{

            font-family:'Inter',sans-serif;

        }

    </style>

</head>

<body>

    <x-navbar/>

    <main>

    @yield('content')

</main>

    <x-footer/>

</body>

</html>