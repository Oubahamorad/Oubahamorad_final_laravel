@extends('index')



@section('content')

<nav class="navbar   bg-black">

    <div class="container-fluid">
        <a class="navbar-brand text-success text-white mx-5" href="{{ url('/dashboard') }}">SPACES</a>
       
            </nav>

    


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
<div  class="flex container gap-5 m-5">
    <img src="{{ asset('image/cowork3.jpg') }}" class="h-[90%] w-[80%]  " alt="">


<div class="flex flex-col w-full">
        <!-- Email Address -->
        <div class="" >
            <x-input-label for="email" :value="__('Email')" class="text-black"/>
            <x-text-input id="email" class="block mt-1 w-full bg-transparent" placeholder="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-black"/>

            <x-text-input id="password" class="block mt-1 w-full bg-transparent"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded  border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-yellow-400 dark:hover:text-yellow-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 bg-warning">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </div>
    </div>
    </form>
@endsection
