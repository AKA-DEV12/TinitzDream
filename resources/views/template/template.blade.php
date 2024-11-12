<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/font-awesome/6.6.0/css/all.min.css">   
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/style/css/style.css">
    <link rel="stylesheet" href="/style/css/reseaux-style.css">
    <link rel="stylesheet" href="/style/css/footer-style.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include('layouts.navigation')
    @include('template.reseaux')
            
            @yield('container')  

    @include('template.footer')
    
    <script src="https://unpkg.com/alpinejs@3.14.2/dist/cdn.min.js"></script>
    <script src="/style/js/style.js"></script>

</body>
</html>