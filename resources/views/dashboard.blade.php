@extends('index')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var logoutSelect = document.querySelector('select');
            logoutSelect.addEventListener('change', function(event) {
                if (this.value === "{{ route('logout') }}") {
                    event.preventDefault();
                    document.getElementById('logout-form').submit();
                }
            });
        });
    </script>
    <div class="mt-3 space-y-1">
        <nav class="navbar bg-black">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>
            <div class="container-fluid flex">
                <a class="navbar-brand text-success text-white mx-5" href="{{ url('/dashboard') }}">L’BLA<span class=" text-yellow-300">SSA.</span></a>
                <select class="bg-black text-yellow-200 mx-5 rounded border-amber-400 hover:bg-yellow-300"
                    onchange="window.location.href = this.value;">
                    <option value="">Sandra Arnold</option>
                    <option value="{{ route('profile.edit') }}">Profile</option>
                    <option value="{{ route('reserve.index') }}">Reserve</option>
                    <option value="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('home').submit();">
                        Log Out
                    </option>
                </select>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>
    </div>
    {{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --}}
    {{-- <div class="flex">
        <h1 class="absolute z-10 bg-transparent text-yellow-300  justify-center items-center">SPACES</h1>
        <img src="{{ asset('image/Web_150DPI-191017_20_Level28_View_2771.avif') }}" class="w-100 h-96"
            alt="Workspace Image">
    </div> --}}
  
      <div class="relative bg-gradient-to-r from-purple-900 to-indigo-800 py-16 font-[sans-serif]">
        <div class="absolute inset-0">
          <img src="{{ asset('image/Web_150DPI-191017_20_Level28_View_2771.avif') }}" alt="Background Image" class="w-full h-full object-cover opacity-50" />
        </div>
        <div class="relative max-w-screen-xl mx-auto px-8 z-10 text-center text-white">
          <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Welcome to Our Premium Service</h1>
          <p class="text-lg md:text-xl mb-8">Find a coworking space you’ll love</p>
          <button type="button" class="   bg-yellow-200 hover:bg-yellow-500 text-white text-base font-semibold px-8 py-2.5 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl " > <a class="text-white decoration-transparent" href="{{ route('reserve.index') }}">Reserve</a></button>
        </div>
      </div>
      {{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --}}
    {{-- <div class="flex flex-col lg:flex-row container  lg:m-5 my-5">
        <div class="container">
            <p>À Propos</p>
            <h1 class="text-bold fs-1">SPACES</h1>
            <p>Hello Desk est un espace de travail <span class="fs-5 text-yellow-300">premium équipé et aménagé en bureaux
                    privés, coworking et salles de réunion / formation.</span> <br>
                Situé en plein cœur de Casablanca près de <span class="fs-5 text-yellow-300">la gare Casa Port</span> et de
                la ligne de <span class="fs-5 text-yellow-300">tramway</span>, l’espace est construit
                autour d’une communauté <span class="fs-5 text-yellow-300">d’entrepreneurs,</span> de <span
                    class="fs-5 text-yellow-300">porteurs de projet</span> et <span
                    class="fs-5 text-yellow-300">d’indépendants,</span> favorisant ainsi l’échange
                d’idées, la collaboration, la créativité et l’aboutissement de projet.</p>
        </div>
        <div>
            <video src="{{ asset('video/Coworking spaces and flexible offices _ Cloudworks.mp4') }}" controls></video>
        </div>
    </div> --}}
    <div class="flex flex-col lg:flex-row container lg:m-5 my-5">
        <div class="container lg:w-1/2">
          <p>À Propos</p>
          <h1 class="text-bold fs-1">L’BLASSA</h1>
          <p>Hello Desk est un espace de travail <span class="fs-5 text-yellow-300">premium équipé et aménagé en bureaux
              privés, coworking et salles de réunion / formation.</span> <br>
            Situé en plein cœur de Casablanca près de <span class="fs-5 text-yellow-300">la gare Casa Port</span> et de
            la ligne de <span class="fs-5 text-yellow-300">tramway</span>, l’espace est construit
            autour d’une communauté <span class="fs-5 text-yellow-300">d’entrepreneurs,</span> de <span
              class="fs-5 text-yellow-300">porteurs de projet</span> et <span
              class="fs-5 text-yellow-300">d’indépendants,</span> favorisant ainsi l’échange
            d’idées, la collaboration, la créativité et l’aboutissement de projet.</p>
        </div>
        <div class="lg:w-1/2">
          <video src="{{ asset('video/Coworking spaces and flexible offices _ Cloudworks.mp4') }}" controls></video>
        </div>
      </div>

    {{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!***************************************** --}}    <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/wanaka-tree.jpg">
    <div id="carousel">
      <figure id="spinner">
        <img src="{{ asset('image/images1.jpeg') }}" alt>
        <img src="{{ asset('image/images3.jpeg') }}" alt>
        <img src="{{ asset('image/daily-coworking-pass.jpg') }}" alt>
        <img src="{{ asset('image/lblassa-event-1.jpg') }}" alt>
        <img src="{{ asset('image/LBLASSA_GROUNDFLOOR_PEOPLE1-1-scaled.jpg.webp') }}" alt>
        <img src="{{ asset('image/meeting-room.jpg') }}" alt>
        <img src="{{ asset('image/images2.jpeg') }}" alt>
        <img src="{{ asset('image/monthly-coworking-pass.jpg') }}" alt>
      </figure>
    </div>
    <span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
    <span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>

    {{-- <div class="bg-yellow-200 ">
        <h1 class="text-center text-white p-5">Nos points forts</h1>
        <div class="flex flex-col lg:flex-row   justify-around container">
            <div class=" mx-14">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke=" white" class="w-10 h-10 mx-24  text-center">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                </svg>

                <p class="text-white m-3 w-100  fs-5">Pas de caution en coworking</p>
            </div>
            <div class=" mx-24">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
                    class="w-10 h-10 mx-14  text-center">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                </svg>

                <p class="text-white  m-3 fs-5 w-100">Durée flexible</p>
            </div>
            <div  class=" mx-20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
                    class="w-10 h-10 mx-16  text-center">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>

                <p class="text-white w-100  m-3 fs-5">Emplacement central</p>
            </div>
            <div class=" mx-28">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
                    class="w-10 h-10 mx-9  text-center">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                </svg>

                <p class="text-white  m-3 mx-6 fs-5">Rooftop</p>
            </div>
            <div class=" mx-20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
                    class="w-10 h-10 mx-16  text-center">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                </svg>

                <p class="text-white  m-3 fs-5">Places de parking</p>
            </div>
        </div>
    </div> --}}
    <div class="bg-[#F7F7F7] text-[#333] font-[sans-serif]">
        <div class="max-w-6xl mx-auto py-16 px-4">
          <h2 class="text-4xl font-extrabold text-center mb-16">Discover Our Exclusive Features</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-md:max-w-md mx-auto">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
              <div class="p-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4" viewBox="0 0 32 32">
                  <path d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z" data-original="#000000" />
                  <path d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z" data-original="#000000" />
                </svg>
                <h3 class="text-xl font-semibold mb-2">Customization</h3>
                <p class="text-gray-500 text-sm">Tailor our product to suit your needs. Tailor our product to suit your needs.</p>
              </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
              <div class="p-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4" viewBox="0 0 682.667 682.667">
                  <defs>
                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                      <path d="M0 512h512V0H0Z" data-original="#000000" />
                    </clipPath>
                  </defs>
                  <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="40" clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                    <path d="M256 492 60 410.623v-98.925C60 183.674 137.469 68.38 256 20c118.53 48.38 196 163.674 196 291.698v98.925z" data-original="#000000" />
                    <path d="M178 271.894 233.894 216 334 316.105" data-original="#000000" />
                  </g>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Security</h3>
                <p class="text-gray-500 text-sm">Your data is protected by the latest security measures.</p>
              </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
              <div class="p-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4" viewBox="0 0 24 24">
                  <g fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M17.03 8.97a.75.75 0 0 1 0 1.06l-4.2 4.2a.75.75 0 0 1-1.154-.114l-1.093-1.639L8.03 15.03a.75.75 0 0 1-1.06-1.06l3.2-3.2a.75.75 0 0 1 1.154.114l1.093 1.639L15.97 8.97a.75.75 0 0 1 1.06 0z" data-original="#000000" />
                    <path d="M13.75 9.5a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-1.25H14.5a.75.75 0 0 1-.75-.75z" data-original="#000000" />
                    <path d="M3.095 3.095C4.429 1.76 6.426 1.25 9 1.25h6c2.574 0 4.57.51 5.905 1.845C22.24 4.429 22.75 6.426 22.75 9v6c0 2.574-.51 4.57-1.845 5.905C19.571 22.24 17.574 22.75 15 22.75H9c-2.574 0-4.57-.51-5.905-1.845C1.76 19.571 1.25 17.574 1.25 15V9c0-2.574.51-4.57 1.845-5.905zm1.06 1.06C3.24 5.071 2.75 6.574 2.75 9v6c0 2.426.49 3.93 1.405 4.845.916.915 2.419 1.405 4.845 1.405h6c2.426 0 3.93-.49 4.845-1.405.915-.916 1.405-2.419 1.405-4.845V9c0-2.426-.49-3.93-1.405-4.845C18.929 3.24 17.426 2.75 15 2.75H9c-2.426 0-3.93.49-4.845 1.405z" data-original="#000000" />
                  </g>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Performance</h3>
                <p class="text-gray-500 text-sm">Experience blazing-fast performance with our product.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>

    <div class="flex  flex-col lg:flex-row  container justify-between items-center">
    <div class="mx-5" >
       
     
     


        
</div> 

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">date réservée</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="w-100 bg-white rounded-3xl border-none p-3" id="calendar"></div>
                        <h3>Un bureau privé et professionnel, accessible à la demande. Parfait quand vous avez besoin de
                            vous concentrer pour travailler au mieux.</h3>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" class="w-10">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                            <h5 class="mx-5 my-3">Au mois ou à l'année</h5>
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" class="w-10">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                            <h5 class="mx-5 my-3">Équipes de toute taille</h5>
                        </div>
                        <h3 class=" text-lime-600">À partir de MAD 100 par personne par hours</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{ route('reserve.index') }}"><button type="button" class="btn btn-outline-warning">
                                OBTENIR UN DEVIS </button></a>
                    </div>
                </div>
            </div>
        </div>



      
            <!-- Button  Bureaux privés-->
        
            

  



     

            <!-- Modal -->

        </div>
        <div class="bg-gray-100 md:px-10 px-4 py-12 font-[sans-serif]">
            <div class="max-md:max-w-lg mx-auto">
              <h2 class="text-4xl font-extrabold text-gray-800 mb-10">Nos solutions de travail</h2>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gradient-to-b from-indigo-800 to-indigo-600 text-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
                  <img src="{{ asset('image/images1.jpeg') }}" alt="Blog Post 1" class="w-full h-64 object-cover" />
                  <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">Bureaux privés</h3>
                    <p class="text-sm opacity-75">L’BLASSA is not only a coworking space in Casablanca.

                        it is above all a lab for creative entrepreneurs, creators & startups  to innovate, connect & build a network beyond the standards of corporate life.
                        
                        Located in Gueliz, Coworking L’BLASSA in casablanca has reimagined the ideal environment for  its members to achieve their full potential and professional goals.</p>
                    <a href="javascript:void(0);" class="mt-4 inline-block text-blue-200 text-sm hover:underline">   <button type="button" class="btn btn-outline-warning mx-5 m-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Découvrir
                    </button>
        </a>
                  </div>
                </div>
                <div class="bg-gradient-to-b from-purple-800 to-purple-600 text-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
                  <img src="{{ asset('image/images2.jpeg') }}" alt="Blog Post 2" class="w-full h-64 object-cover" />
                  <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">Positions en coworking</h3>
                    <p class="text-sm opacity-75">Our unique offering goes beyond the traditional coworking model to include a fully equipped cafeteria. We know that great ideas are often born over a cup of coffee or a refreshing drink.</p>
                    <a href="javascript:void(0);" class="mt-4 inline-block text-pink-200 text-sm hover:underline">   <button type="button" class="btn btn-outline-warning mx-5 m-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Découvrir
                    </button>
        </a>
                  </div>
                </div>
                <div class="bg-gradient-to-b from-teal-800 to-teal-600 text-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
                  <img src="https://readymadeui.com/team-image.webp" alt="Blog Post 3" class="w-full h-64 object-cover" />
                  <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">Salles de réunion / formation<</h3>
                    <p class="text-sm opacity-75">Cowork in casablanca at L’BLASSA, nestled in the lively Gueliz district, here you’ll find your perfect blend of modern convenience and professional atmosphere. This space is more than just a coworking space; it’s a hub where freelancers, digital nomads and professionals meet to transform their work experience. Designed with your productivity in mind, L’BLASSA offers a range of facilities from soundproof phone booths for quiet calls to a sophisticated meeting room ideal for brainstorming and collaboration. Convenience continues with accessible printing services, while our on-site cafeteria and serene terrace provide the perfect setting for work breaks and informal networking.</p>
                    <a href="javascript:void(0);" class="mt-4 inline-block text-green-200 text-sm hover:underline">   <button type="button" class="btn btn-outline-warning mx-5 m-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Découvrir
                    </button>
        </a>
                  </div>
                </div> @foreach ($admins as $admin)
<div class="bg-gradient-to-b from-indigo-800 to-indigo-600 text-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
    <img src="{{ asset('storage/image/' . $admin->image) }}" alt="Blog Post 1" class="w-full h-64 object-cover" />
    <div class="p-6">
      <h3 class="text-2xl font-semibold mb-2">{{ $admin->name }}</h3>
      <p class="text-sm opacity-75"> {{$admin->description}}</p>
      <a href="javascript:void(0);" class="mt-4 inline-block text-blue-200 text-sm hover:underline">   <button type="button" class="btn btn-outline-warning mx-5 m-2" data-bs-toggle="modal"
          data-bs-target="#exampleModal">
          Découvrir
      </button>
</a>
    </div>
  </div>
 @endforeach
              </div>
            </div>
          </div>


    </div>
{{-- !!!!!!!:::::::::::::::::::::!<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< --}}


    <div class="testimonial-slider">
      <div id="carouselExampleControls" class="carousel carousel-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="testimonial-title">
                <i class="bi bi-quote display-1"></i>
                <h2 class="fw-bold display-6 my-5">WHAT OUR CUSTOMERS SAY</h2>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="col-md-8">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="card">
                    <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                      <h5 class="card-title">Aouzal Soumia</h5>
                      <i class="bi bi-star-fill text-warning pe-1"></i>
                      <i class="bi bi-star-fill text-warning pe-1"></i>
                      <i class="bi bi-star-fill text-warning pe-1"></i>
                      <i class="bi bi-star-fill text-warning pe-1"></i>
                      <i class="bi bi-star-fill text-warning pe-1"></i>
                      <p class="card-text">Voilà un excellent espace de co-working au cœur de Marrakech ! Très bien équipé, très bien entretenu et avec un personnel aux petits soins !
                        J'ai réservé le box insonorisé pour 2h à raison de 50 dirhams par heure (un peu moins de 5€). Le WiFi y est de très bonne qualité (2h de visio non stop avec le bout du monde et aucune coupure ou faiblesse du signal).
                        Merci pour le café et le jus d'orange préparés avec soin 🙏🏽
                        Bravo pour ce bel objet et bonne continuation 👏</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card">
                    <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-2-scaled.jpg" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                      <h5 class="card-title">Avis Perso</h5>
                      <p class="card-text">It was such a relief finding this place after trying to work remotely from terrible airbnb wifi. Its got a cute cafe as well and 3 phone booths for meetings (its a quiet space so no meetings in shared spaces) i had all day meetings and didn't have an issue finding a free booth. Super friendly staff, lots of desks/plugs and zero issues with wifi (several networks). Would 10/10 recommend if you need a reliable place to get work done!</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card">
                    <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-3-scaled.jpg" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                      <h5 class="card-title">Sara Cullen-Fong</h5>
                      <p class="card-text">Ein toller Platz zum Arbeiten im Herzen von Guilez, der einem von dem freundlichen & hilfsbereiten Team vom L'Blassa noch angenehmer gemacht wird.
                        Das Internet ist schnell & stabil, es gibt Noise-Cancellation-Kabinen zum Telefonieren und Arbeitsplätze zur freien Wahl auf der Fläche.
                        Wir fanden das Preis-Leistungsverhältnis absolut fair. Auch das Angebot Kaffee, Getränke & Snacks vor Ort ist super...
                        Wir sind bei unserem nächsten Aufenthalt in Marrakesch gerne wieder hier! :</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card">
                    <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-4-scaled.jpg" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                      <h5 class="card-title">Amal Eddbali</h5>
                      <p class="card-text">Très honnêtement, je n y vais pas pour travailler mais pour savourer leur délicieux cappuccino au lait de soja. Meilleur café de Marrakech . Très bon service , endroit propre et très agréable. Je recommande fortement.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card">
                    <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-5-scaled.jpg" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                      <h5 class="card-title">Ali Simona</h5>
                      <p class="card-text">Beautiful space! Staff very welcoming and friendly.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card">
                    <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-6-scaled.jpg" class="d-block w-100" alt="..."> </div>
                    <div class="card-body">
                      <h5 class="card-title">Aouzal Aziz</h5>
                      <p class="card-text">Merci pour le bon service et bon relation client, tout est super parfait, je recommande cette très belle place .</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    {{-- !!!!!!!!!!!!!!!!!!!!! --}}

    {{-- <style>div#carousel { 
        perspective: 1300px; 
        background: #100000; 
        padding-top: 10%; 
        font-size:0; 
        margin-bottom: 3rem; 
        height: 100%;
        overflow: hidden; 
      }
      figure#spinner { 
        transform-style: preserve-3d; 
        height: 300px; 
        transform-origin: 50% 50% -500px; 
        transition: 1s; 
      } 
      figure#spinner img { 
        width: 40%; max-width: 425px; 
        position: absolute; left: 30%;
        transform-origin: 50% 50% -500px;
        outline:1px solid transparent; 
      }
      figure#spinner img:nth-child(1) { transform:rotateY(0deg); 
      }
      figure#spinner img:nth-child(2) { transform: rotateY(-45deg); }
      figure#spinner img:nth-child(3) { transform: rotateY(-90deg); }
      figure#spinner img:nth-child(4) { transform: rotateY(-135deg); }
      figure#spinner img:nth-child(5){ transform: rotateY(-180deg); }
      figure#spinner img:nth-child(6){ transform: rotateY(-225deg); }
      figure#spinner img:nth-child(7){ transform: rotateY(-270deg); }
      figure#spinner img:nth-child(8){ transform: rotateY(-315deg); }
      div#carousel ~ span { 
        color: #fff; 
        margin: 5%; 
        display: inline-block; 
        text-decoration: none; 
        font-size: 2rem; 
        transition: 0.6s color; 
        position: relative; 
        margin-top: -6rem; 
        border-bottom: none; 
        line-height: 0; }
      div#carousel ~ span:hover { color: #888; cursor: pointer; }</style> --}}

      <script> var angle = 0;
        function galleryspin(sign) { 
        spinner = document.querySelector("#spinner");
        if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
        spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
        }</script>

<div
class="grid md:grid-cols-2 items-center overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-3xl max-w-6xl mx-auto bg-white my-6 font-[sans-serif]">
<div class="sm:p-10 max-sm:px-4 max-sm:py-8 bg-gray-900">
    <h2 class="text-3xl font-extrabold text-white">Get In <span class="text-yellow-500">Touch</span></h2>
    <p class="text-sm text-gray-400 mt-3">Have a specific inquiry or looking to explore new opportunities? Our
        experienced team is ready to engage with you.</p>
    <form  >
        <div class="space-y-4 mt-8">
            <input type="text" placeholder="Full Name"
                class="px-2 py-3 bg-transparent text-white w-full text-sm border-b border-gray-400 focus:border-white outline-none" />
     
            <input type="number" placeholder="Phone No."
                class="px-2 py-3 bg-transparent text-white w-full text-sm border-b border-gray-400 focus:border-white outline-none" />

            <input type="email" placeholder="Email"
                class="px-2 py-3 bg-transparent text-white w-full text-sm border-b border-gray-400 focus:border-white outline-none" />

            <textarea placeholder="Write Message"
                class="px-2 pt-3 bg-transparent text-white w-full text-sm border-b border-gray-400 focus:border-white outline-none"></textarea>
        </div>
        <button type="button"
            class="mt-8 flex items-center justify-center text-sm w-full rounded px-4 py-2.5 font-semibold bg-yellow-600 text-white hover:bg-yellow-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2"
                viewBox="0 0 548.244 548.244">
                <path fill-rule="evenodd"
                    d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                    clip-rule="evenodd" data-original="#000000" />
            </svg>
            Send Message
        </button>
    </form>
    <ul class="mt-4 flex justify-center lg:space-x-6 max-lg:flex-col max-lg:items-center max-lg:space-y-2 ">
        <li class="flex items-center text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor'
                viewBox="0 0 479.058 479.058">
                <path
                    d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                    data-original="#000000" />
            </svg>
            <a href="javascript:void(0)" class="text-current text-sm ml-3">
                <strong>info@example.com</strong>
            </a>
        </li>
        <li class="flex items-center text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor'
                viewBox="0 0 482.6 482.6">
                <path
                    d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                    data-original="#000000"></path>
            </svg>
            <a href="javascript:void(0)" class="text-current text-sm ml-3">
                <strong>+158 996 888</strong>
            </a>
        </li>
    </ul>
</div>
<div class="z-10 relative h-full max-md:min-h-[350px]">
    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
        class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0"
        allowfullscreen></iframe>
</div>
</div>

<script>var multipleCardCarousel = document.querySelector("#carouselExampleControls");

  if (window.matchMedia("(min-width: 576px)").matches) {
    var carousel = new bootstrap.Carousel(multipleCardCarousel, {
      interval: false
    });
    var carouselWidth = $(".carousel-inner")[0].scrollWidth;
    var cardWidth = $(".carousel-item").width();
    var scrollPosition = 0;
    $("#carouselExampleControls .carousel-control-next").on("click", function () {
      if (scrollPosition < carouselWidth - cardWidth * 3) {
        scrollPosition += cardWidth;
        $("#carouselExampleControls .carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
    $("#carouselExampleControls .carousel-control-prev").on("click", function () {
      if (scrollPosition > 0) {
        scrollPosition -= cardWidth;
        $("#carouselExampleControls .carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });
  } else {
    $(multipleCardCarousel).addClass("slide");
  }
  </script>
@endsection
