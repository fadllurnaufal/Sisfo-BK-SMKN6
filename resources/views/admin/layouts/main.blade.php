<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <style type="text/css">
        .preloader {
            position: absolute;
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
        .active{
            background-color: #ffffff;
            width: 320px;
            color: #4A797C;
        }
        .input{
            resize: none;
        }
        
        </style>
    @vite('resources/css/app.css')

    
    <link rel="icon" href="../../../../bk.png">
    <title>{{$title}} - BK SMKN 6 Bandung</title>
</head>
<body>
    @yield('profile')
    <div class="my-10 ml-34 px-10">
        @yield('container')
        @yield('content-detail')
    </div>
    <div class="preloader fixed">
        <div class="text-center loading">
            <img src="../../../../DRing.svg" width="100">
            <p>Loading...</p>
        </div>
    </div>
    
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <!-- Preloader Script -->
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <!-- Preloader JS-->
    <script>
        $(document).ready(function(){
        $(".preloader").fadeOut(2000);
        })
    </script>
    <!-- Dropdown -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Date Picker -->
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
    <!-- Live Date -->
    <script>
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }
            const interval = setInterval(() => {
            const now = new Date();
            const dateTime = zeroFill(now.getUTCDate()) + '-' + zeroFill((now.getMonth() + 1)) + '-' + now.getFullYear();
            document.getElementById('date-time').innerHTML = dateTime;
        }, 1000);
    </script>
</body>
</html>