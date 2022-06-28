<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Katya & Carlos &raquo; {{ $title ?? 'Nuestra boda' }}</title>
        <meta name="description" content="Sitio de nuestra boda - Katya & Carlos - 26 de Noviembre de 2022">
        <meta name="keywords" content="Boda, wedding, San Cristóbal de las Casas, Chiapas, noviembre, Katya, Carlos">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-1.png">

        <!-- styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Mulish&family=Poppins:wght@500;600;700&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-red-500">
        <div id="app" class="bg-gray-700">
            {{-- @include('layouts._navbar') --}}

            <main class="bg-gray-100 app-container">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil excepturi, quidem officia minima, voluptatum molestias provident optio quaerat ipsum repellendus temporibus totam illum? Accusamus neque alias ad, porro impedit eius!</p>
            </main>

            {{-- @include('layouts._footer') --}}
        </div><!-- #app -->

        <script src="{{ mix('/js/manifest.js') }}"></script>
        <script src="{{ mix('/js/vendor.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
