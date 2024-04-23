@extends('index')

@section('content')
    <div class="mt-3 space-y-1">
        <nav class="navbar bg-black">
            <div class="container-fluid flex">
                <a class="navbar-brand text-success text-white mx-5" href="{{ url('/dashboard') }}">SPACES.</a>
                <select class="bg-black text-yellow-200 mx-5 rounded border-amber-400 hover:bg-yellow-300" onchange="window.location.href = this.value;">
                    <option value="">Sandra Arnold</option>
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
    <div class="flex  gap-2 justify-between w-100">
        <img src="{{ asset('image/the-business-journals.webp') }}" class="h-screen w-75" alt="">
        <p class=" w-100 container m-5 h-100 ">Vous cherchez un espace où travailler vous et votre équipe à Casablanca ? Nos bureaux privés sont idéalement situés en <span class="fs-5 text-yellow-300">plein centre de Casablanca,</span> près de Casa Port et de la Place des Nations Unies. Ils sont soit <span class="fs-5 text-yellow-300">individuels</span>, soit <span class="fs-5 text-yellow-300">multipostes</span> et sont équipés de tout le mobilier de bureau nécessaire à votre activité (tables de travail, fauteuils et armoires/caissons). Ils sont destinés aux <span class="fs-5 text-yellow-300">entreprises ou indépendants</span> qui désirent profiter des <span class="fs-5 text-yellow-300">activités</span> de l’espace et de l’esprit de <span class="fs-5 text-yellow-300">communauté</span> et préserver en même temps la <span class="fs-5 text-yellow-300">confidentialité</span> de leur travail.
            <span class="fs-5 text-yellow-300 ">Les bureaux privés sont accessibles 7j/7 et pour la durée de votre choix. <br></span>
            
            <span class="text-gray-500 ">Vous souhaitez en savoir plus sur nos offres ? Remplissez le formulaire ci-dessous ou contactez-nous au +212 6 62 18 31 73</span></p>
    </div>
@endsection
