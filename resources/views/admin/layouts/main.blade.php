<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
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
    @vite('resources/css/app.css')

    
    <link rel="icon" href="../../../../bk.png">
    <title>{{$title}} - BK SMKN 6 Bandung</title>
</head>
<body>
    <div class="container my-10 ml-42">
        @yield('container')
        <div class="preloader">
            <div class="text-center loading">
                <img src="../../../../Spinner.svg" width="80">
                <p>Loading...</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script>
        $(document).ready(function(){
        $(".preloader").fadeOut(1500);
        })
    </script>
</body>
</html>