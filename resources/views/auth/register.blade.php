@extends('index')



@section('content')



    <nav class="navbar   bg-black">

            <div class="container-fluid">
                <a class="navbar-brand text-success text-white mx-5" href="#">SPACES</a>
                @if (Route::has('login'))
              
              
                        <a href="{{ route('login') }}" class="text-white text-2xl mx-3 rounded p-2 text-decoration-none hover:bg-yellow-300">
                            Login
                        </a>

                  
                    @endauth
                

    <form method="POST" action="{{ route('register') }}" class="bg-white">
        @csrf
    <div class="flex container gap-5 m-5">
    <img src="{{ asset('image/Co-working.jpg') }}" class="h-[90%] w-[50%]  " alt="">
             
      
<div class="flex flex-col w-full bg-white">
        <!-- Name -->
        <div >
            <x-input-label for="name" :value="__('Name')" class="text-black" />
            <x-text-input id="name" class="block mt-1 bg-transparent  w-full" type="text" placeholder="name" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-black"/>
            <x-text-input id="email" class="block mt-1 w-full  bg-transparent" type="email" name="email" placeholder="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-black" />
            <x-text-input id="password" class="block mt-1 w-full  bg-transparent"
                            type="password"
                            name="password"
                           placeholder="Password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-black" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full  bg-transparent"
                            type="password" placeholder="Confirm Password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm   dark:text-gray-400 text-black hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 bg-warning">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </div>
    </div>
    </form>

    
@endsection