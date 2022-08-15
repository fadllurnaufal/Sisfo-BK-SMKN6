<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>BK SMKN 6 Bandung | {{ $title }}</title>
    </head>
    <body>
        <div class="container-xl">
            @yield('container')
        </div>

        <script src="../path/to/flowbite/dist/flowbite.js"></script>
    </body>
</html>
