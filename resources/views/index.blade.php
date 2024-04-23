<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
</head>
<body class=" h-screen">

    @yield('content')


<footer class=" ">
    <nav class="navbar  bg-black">

        <div class="gap-5 flex">
            <a class="navbar-brand text-success text-white mx-5" href="#">SPACES.</a>
            <p class="text-white my-2 "> SITEMAP</p>
            <p class="text-white my-2  ">ONLINE PRIVACY POLICY</p>
            <p class="text-white my-2  ">TERMS AND CONDITIONS</p>
            <p class="text-white my-2  "> COOKIE POLICY</p>
           
        <div><p class="text-white my-2 mx-64">© 2024 IWG</p></div> </nav>
        </div>
        
    </nav>
</footer>
</body>
</html>