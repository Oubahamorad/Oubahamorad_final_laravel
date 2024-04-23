@extends('index')

@section('content')
    <div class="mt-3 space-y-1">
        <nav class="navbar bg-black">
            <div class="container-fluid flex ">
                <a class="navbar-brand text-success text-white mx-5" href="{{ url('/dashboard') }}">SPACES.</a>
                <select class="bg-black text-yellow-200 mx-5 rounded border-amber-400 hover:bg-yellow-300"
                    onchange="window.location.href = this.value;">
                    <option class=" " value="">Sandra Arnold</option>
                    <option value="{{ route('profile.edit') }}">Profile</option>
                    <option value="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log Out
                    </option>
                </select>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>
    </div>
    <div class="flex ">
        <h1 class="absolute z-10  bg-transparent text-white ">SPACES</h1>
        <img src="{{ asset('image/Web_150DPI-191017_20_Level28_View_2771.avif') }}" class="w-100 h-96" alt="">
    </div>
    <div class="flex container m-5">
        <div class=" container m-5">
        <p>À Propos</p>
        <h1 class="text-bold fs-1">SPACES</h1>
        <p>Hello Desk est un espace de travail <span class="fs-5 text-yellow-300 "> premium équipé et aménagé en bureaux privés, coworking et salles de réunion /
            formation. </span> <br>
            Situé en plein cœur de Casablanca près de <span class="fs-5 text-yellow-300 "> la gare Casa Port </span>et de la ligne de <span class="fs-5 text-yellow-300 "> tramway </span>, l’espace est construit
            autour d’une communauté <span class="fs-5 text-yellow-300 "> d’entrepreneurs, </span> de <span class="fs-5 text-yellow-300 "> porteurs de projet </span> et <span class="fs-5 text-yellow-300 "> d’indépendants, </span> favorisant ainsi l’échange
            d’idées, la collaboration, la créativité et l’aboutissement de projet.</p>
        </div>
            <div>
             <video src="{{ asset('video/Coworking spaces and flexible offices _ Cloudworks.mp4') }}" controls></video>
            </div>
    </div>
    <div class=" bg-yellow-200">
        <h1 class="text-center text-white">Nos points forts</h1>
       <div class="flex justify-around container">
       <div>
            {{-- <p><i class="bi bi-grid-1x2-fill"></i></p> --}}
            <p class="text-white">Pas de caution en coworking</p>
       </div>
       <div>
        <p class="text-white">Durée flexible</p>
     </div>
       
        <div>
            <p class="text-white">Emplacement central</p>
        </div>
        <div>
            <p class="text-white">Rooftop</p>
        </div>
        <div>
            <p class="text-white">Places de parking</p>
        </div>
    </div>
</div>
@endsection
