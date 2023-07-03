<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <title>@yield('title') | {{ config('app.seo_name') }}</title>
    <meta name="description" content="@yield('description')">
    @vite('resources/css/app.css')
    <!-- Favorite Icons -->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}"> --}}
</head>

<!-- Google tag (gtag.js) -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-B8JTF9B99T"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-B8JTF9B99T');
</script> --}}

<body>

    <div class="flex flex-col min-h-screen" id="app">

        <!-- Define the header/nav section -->
        @include('layouts.nav')

        <!-- Define the content section -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Define the footer section -->
        @include('layouts.footer')

    </div>


    @vite('resources/js/app.js')
</body>

</html>
