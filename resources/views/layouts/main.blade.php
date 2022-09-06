<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="../../../../bk.png">
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }
            .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
        }
        </style>
    <title>BK SMKN 6 Bandung | {{ $title }}</title>
    </head>
    <body>
        @yield('content')
        <div class="preloader">
            <div class="text-center loading">
                <img src="../../../../DRing.svg" width="80">
                <p>Loading...</p>
                </div>
            </div>
        </div>
        
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
        <script>
            $(document).ready(function(){
            $(".preloader").fadeOut(2000);
            })
        </script>
    </body>
</html>
