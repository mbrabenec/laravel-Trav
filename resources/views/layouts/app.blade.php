<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100">

    <nav class="flex justify-between bg-white p-6 mb-6">
        <ul class="flex items-center">
            <li>
                <a class="p-3" href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('dashboard') }} ">Dashboard</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('posts') }}">Posts</a>
            </li>
        </ul>

        <ul class="flex items-center">

            @auth

            <li>
                <a class="p-3" href="">{{ auth()->user()->username }}</a>
            </li>
            <li>
                <form action="{{ route('logout')}}" method="POST" class="p-3">
                    @csrf
                <button class="p-3">Logout</button>
                </form>
            </li>

            @endauth

            @guest
                
            <li>
                <a class="p-3" href="{{ route('login')}}">Login</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('register')}}">Register</a>
            </li>
            @endguest
        </ul>
            
        

    </nav>
    
    @yield('content')
    
</body>
</html>