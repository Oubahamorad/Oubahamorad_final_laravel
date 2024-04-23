@extends('index')

@section('content')

    <nav class="navbar bg-black">
        <div class="container-fluid">
            <a class="navbar-brand text-success text-white mx-5" href="{{ url('/dashboard') }}">SPACES</a>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 text-white justify-end">
              
                        <a href="{{ route('login') }}" class="text-white text-2xl mx-3 rounded p-2 text-decoration-none hover:bg-yellow-300">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white text-2xl mx-3 rounded p-2 text-decoration-none hover:bg-yellow-300">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
     
        </div>
    </nav>

    <div class="flex">
        <div class="absolute z-10 bg-transparent flex justify-content-start m-32 my-64 items-start flex-col">
            <h4 class="text-black">Welcome</h4>
            <h1 class="text-black fs-1 font-bold">Let's find the right workspace for you.</h1>
        </div>
        <div class="bg-black opacity-60 h-[90%]">
            <img src="{{ asset('image/image_home_cowrking.jpg') }}" class="h-[90%] w-[100%]" alt="Workspace Image">
        </div>
    </div>

@endsection
