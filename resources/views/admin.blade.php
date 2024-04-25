@extends('index')

@section('content')
<nav class="navbar bg-black">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid flex">
        <a class="navbar-brand text-success text-white mx-5" href="{{ url('/dashboard') }}">SPACES.</a>
 
    </div>
</nav>
<style>
    /* Form styling */
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="file"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    /* List of administrators styling */
    .admins-container {
        margin-top: 30px;
    }

    .admin-card {
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 15px;
    }

    .admin-card h1 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .admin-card img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>

<!-- Your HTML content -->
<form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data" class="form">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Insert name" value="{{ old('name') }}">
    </div> 
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" placeholder="Insert Image">
    </div>
    <button type="submit">Insert</button>
</form>

<div class="admins-container">
    @foreach ($admins as $admin)
    <div class="admin-card">
        <h1>{{ $admin->name }}</h1>
     
        <img width="200" src="{{ asset("storage/image/" . $admin->image) }}" alt="{{ $admin->image }}">
    </div>
    @endforeach
</div>

@endsection
