<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>Poty</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex item-center">
            <li class="p-3">
                <a href="">Home</a>
            </li>
            <li class="p-3">
                <a href="">Dashboard</a>
            </li>
            <li class="p-3">
                <a href="">Post</a>
            </li>
        </ul>
        <ul class="flex item-center">
            @auth
            
            <li class="p-3">
                <a href="/"><b>{{auth()->user()->username}}🤗</b></a>
            </li>
            <li class="p-3">
                <a href="{{route('logout')}}">Logout</a>
            </li>
            @endauth

            @guest
            <li class="p-3">
                <a href="{{route('login')}}">Login</a>
            </li>
            <li class="p-3">
                <a href="{{route('register')}}">Register</a>
            </li>
            @endguest
        </ul>
    </nav>
        @yield('content')
</body>
</html>