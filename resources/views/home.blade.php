@extends('index')

@section('content')

<nav class="navbar bg-black">
    <div class="container-fluid flex flex-col md:flex-row justify-between items-center">
        <a class="navbar-brand text-success text-white mx-5" href="{{ url('/dashboard') }}">SPACES</a>
        @if (Route::has('login'))
            <div class="flex flex-1 text-white justify-end">
                <a href="{{ route('login') }}" class="text-white text-lg md:text-2xl mx-3 rounded p-2 text-decoration-none hover:bg-yellow-300">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white text-lg md:text-2xl mx-3 rounded p-2 text-decoration-none hover:bg-yellow-300">
                        Register
                    </a>
                @endif
            </div>
        @endif
    </div>
</nav>

<div class="flex flex-col md:flex-row">
    <div class="absolute z-10 bg-transparent p-4 md:m-32 my-8 md:my-64 items-start">
        <h4 class="text-black text-lg md:text-xl">Welcome</h4>
        <h1 class="text-black text-xl md:text-3xl font-bold">Let's find the right workspace for you.</h1>
    </div>
    <div class="bg-black opacity-60 w-full h-auto">
        <img src="{{ asset('image/image_home_cowrking.jpg') }}" class="w-full h-auto" alt="Workspace Image">
    </div>
</div>

@endsection