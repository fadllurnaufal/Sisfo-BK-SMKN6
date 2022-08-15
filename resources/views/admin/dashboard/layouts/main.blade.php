<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
    <div class="container-xl bg-white h-screen flex">
        <div class="sidebar-content">
            @include('admin.dashboard.layouts.sidebar')
        </div>
        <div class="main-content ml-52">
            @include('admin.dashboard.base')
        </div>
        
        @yield('container')
    </div>


    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
</body>
</html>