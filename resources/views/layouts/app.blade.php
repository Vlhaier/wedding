<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Katya & Carlos &raquo; {{ $title ?? 'Nos casamos' }}</title>
        <meta name="description" content="Sitio de nuestra boda - Katya & Carlos - 26 de Noviembre de 2022">
        <meta name="keywords" content="Boda, wedding, San Cristóbal de las Casas, Chiapas, noviembre, Katya, Carlos">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-1.png">

        <!-- fonts -->
        <link href="http://fonts.cdnfonts.com/css/butler" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;200;300;400;500;600;700;800&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <!-- styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-400 text-amber-500">
        <div id="app">

            <main class="app-container">
                @yield('content')
            </main>

        </div><!-- #app -->

        <script src="{{ asset('/js/manifest.js') }}"></script>
        <script src="{{ asset('/js/vendor.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
