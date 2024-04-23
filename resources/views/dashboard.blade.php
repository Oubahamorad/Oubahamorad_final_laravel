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
            <a class="navbar-brand text-success text-white mx-5" href="{{ url('/dashboard') }}">SPACES.</a>
            <select class="bg-black text-yellow-200 mx-5 rounded border-amber-400 hover:bg-yellow-300"
                onchange="window.location.href = this.value;">
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
<div class="flex">
    <h1 class="absolute z-10 bg-transparent text-white">SPACES</h1>
    <img src="{{ asset('image/Web_150DPI-191017_20_Level28_View_2771.avif') }}" class="w-100 h-96" alt="Workspace Image">
</div>
<div class="flex container m-5">
    <div class="container m-5">
        <p>À Propos</p>
        <h1 class="text-bold fs-1">SPACES</h1>
        <p>Hello Desk est un espace de travail <span class="fs-5 text-yellow-300">premium équipé et aménagé en bureaux privés, coworking et salles de réunion / formation.</span> <br>
            Situé en plein cœur de Casablanca près de <span class="fs-5 text-yellow-300">la gare Casa Port</span> et de la ligne de <span class="fs-5 text-yellow-300">tramway</span>, l’espace est construit
            autour d’une communauté <span class="fs-5 text-yellow-300">d’entrepreneurs,</span> de <span class="fs-5 text-yellow-300">porteurs de projet</span> et <span class="fs-5 text-yellow-300">d’indépendants,</span> favorisant ainsi l’échange
            d’idées, la collaboration, la créativité et l’aboutissement de projet.</p>
    </div>
    <div>
        <video src="{{ asset('video/Coworking spaces and flexible offices _ Cloudworks.mp4') }}" controls></video>
    </div>
</div>
<div class="bg-yellow-200 ">
    <h1 class="text-center text-white p-5">Nos points forts</h1>
    <div class="flex justify-around container">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke=" white" class="w-10 h-10 mx-24  text-center">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
              </svg>
              
            <p class="text-white m-3 fs-5">Pas de caution en coworking</p>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 mx-14  text-center">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
              </svg>
              
            <p class="text-white  m-3 fs-5">Durée flexible</p>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 mx-16  text-center">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
              </svg>
              
            <p class="text-white  m-3 fs-5">Emplacement central</p>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 mx-9  text-center">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
              </svg>
              
            <p class="text-white  m-3 mx-6 fs-5">Rooftop</p>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 mx-16  text-center">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
              </svg>
              
            <p class="text-white  m-3 fs-5">Places de parking</p>
        </div>
    </div>
</div>

<div>
    <h1 class="text-center m-5">Nos solutions de travail</h1>
</div>
<div class="flex gap-10 container justify-around items-center">
    <div>
        <h4>Bureaux privés</h4>
    <img src="{{ asset('image/images1.jpeg') }}" width="100%"  class="h-80" alt="">
    <button type="button" class="btn btn-outline-warning mx-5 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Découvrir
      </button>
      
      <!-- Modal -->
      <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Bureaux privés</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12 mt-4 w-100 ">
                    <div id='calendar'></div>
                </div>
               
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save </button>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div>
        <h4 class="">Positions en coworking</h4>
        <img src="{{ asset('image/images2.jpeg') }}" width="100%"  class="h-80"  alt="">
        <button type="button" class="btn btn-outline-warning mx-5 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Découvrir
          </button>
          
          <!-- Modal -->
          <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Positions en coworking</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12 mt-4 w-100 ">
                        <div id='calendar'></div>
                    </div>
                    <div class="bg-gray-900 h-screen flex flex-col-reverse gap-y-9 items-center justify-center ">



                        <div class="w-1/2 bg-white rounded-3xl border-none p-3" id="calendar"></div>
                
                
                        
                
                    </div>
                
                
                    {{-- end: "2024-01-04 10:00:00"
                start: "2024-01-04 09:00:00"
                title: "Projet TEST" --}}
                
                
                    {{-- <script>
                        document.addEventListener('DOMContentLoaded', async function() {
                
                            const {
                                data
                            } = await axios.get("/calendar/show")
                
                            const events = data.events;
                
                
                
                            var myCalendar = document.getElementById('calendar');
                
                
                            var calendar = new FullCalendar.Calendar(myCalendar, {
                                headerToolbar: {
                                    left: 'dayGridMonth,timeGridWeek,timeGridDay',
                                    center: 'title',
                                    right: 'listMonth,listWeek,listDay'
                                },
                                views: {
                                    listDay: { // Customize the name for listDay
                                        buttonText: 'Day Events',
                                    },
                                    listWeek: { // Customize the name for listWeek
                                        buttonText: 'Week Events'
                                    },
                                    listMonth: { // Customize the name for listMonth
                                        buttonText: 'Month Events'
                                    },
                                    timeGridWeek: {
                                        buttonText: 'Week', // Customize the button text
                                    },
                                    timeGridDay: {
                                        buttonText: "Day",
                                    },
                                    dayGridMonth: {
                                        buttonText: "Month",
                                    },
                
                                },
                
                
                                initialView: "timeGridWeek",
                                slotMinTime: "09:00:00", // min  time  appear in the calendar
                                slotMaxTime: "19:00:00",
                                nowIndicator: true,
                                selectable: true,
                                selectMirror: true,
                                selectOverlap: true,
                                weekends: true,
                
                                // events  hya  property dyal full calendar
                                //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
                                events: events,
                
                                selectAllow: (info) => {
                                    let instant = new Date()
                                    return info.start > instant
                                },
                
                                select: (info) => {
                
                                    let start = info.start
                                    let end = info.end
                
                
                                    if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                                        alert("rak khditi bzaf dyal l wa9t")
                                        calendar.unselect()
                                        return
                                    }
                                    document.getElementById("date-start").value = formatDate(start).day
                                    if (info.allDay) {
                                        document.getElementById("date-end").value = formatDate(start).day
                                        document.getElementById("time-start").value = "09:00:00"
                                        document.getElementById("time-end").value = "19:00:00"
                                    } else {
                                        document.getElementById("date-end").value = formatDate(end).day
                                        document.getElementById("time-start").value = formatDate(start).time
                                        document.getElementById("time-end").value = formatDate(end).time
                                    }
                
                
                                    document.getElementById("clickMe").click()
                
                
                                },
                
                                eventClick: (info) => {
                                    // alert("event clicked")
                
                                    console.log(info);
                                }
                
                
                            });
                
                
                            calendar.render();
                
                
                            function formatDate(date) {
                                let year = String(date.getFullYear())
                                let month = String(date.getMonth() + 1).padStart(2, 0)
                                let day = String(date.getDate()).padStart(2, 0)
                
                                let hour = String(date.getHours()).padStart(2, 0)
                                let min = String(date.getMinutes()).padStart(2, 0)
                                let sec = String(date.getSeconds()).padStart(2, 0)
                
                                return {
                                    day: `${year}-${month}-${day}`,
                                    time: `${hour}:${min}:${sec}`
                                }
                
                
                            }
                        });
                    </script> --}}
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save </button>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div> 
        <h4>Salles de réunion / formation</h4>
        <img src="{{ asset('image/images3.jpeg') }}" width="80%" class="h-80"   alt="">
   
          <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-warning mx-5 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Découvrir
  </button>
  
  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Salles de réunion</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-12 mt-4 w-100 ">
                <div id='calendar'></div>
            </div>
            <script >
           
                $(document).ready(function() {
    
                    var calendar = $('#calendar').fullCalendar({
                        editable: true,
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        events: '/',
                        selectable: true,
                        selectHelper: true,
    
                        select: function(start, end, allDay) {
                            var title = prompt('Event Title:');
    
                            if (title) {
                                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
    
                                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
    
                                $.ajax({
                                    url: "{{ route('event.store') }}",
                                    type: "POST",
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    data: {
                                        title: title,
                                        start: start,
                                        end: end,
                                        type: 'add'
                                    },
                                    success: function(data) {
                                        calendar.fullCalendar('refetchEvents');
                                        alert("Event created");
                                    }
                                })
                            }
    
                        },
    
                        editable: true,
                        eventResize: function(event, delta) {
                            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                            var title = event.title;
                            var id = event.id;
                            $.ajax({
                                url: "{{ route('event.store') }}",
                                type: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    id: id,
                                    type: 'update'
                                },
                                success: function(response) {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("Event updated");
                                }
                            })
                        },
                        eventDrop: function(event, delta) {
                            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                            var title = event.title;
                            var id = event.id;
                            $.ajax({
                                url: "{{ route('event.store') }}",
                                type: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    id: id,
                                    type: 'update'
                                },
                                success: function(response) {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("Event updated");
                                }
                            })
                        },
                        eventClick: function(event) {
                            if (confirm("Are you sure you want to remove it?")) {
                                var id = event.id;
                                $.ajax({
                                    url: "{{ route('event.store') }}",
                                    type: "POST",
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    data: {
                                        id: id,
                                        type: "delete"
                                    },
                                    success: function(response) {
                                        calendar.fullCalendar('refetchEvents');
                                        alert("Event successfully deleted!");
                                    }
                                })
                            }
                            document.getElementById("clickMe").click()
                        }
                    });
                });
            </script>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save </button>
        </div>
    </div>
    </div>
</div>
    </div>

</div>

<div class="flex m-5  gap-2 justify-between ">
    <img src="{{ asset('image/the-business-journals.webp') }}" class="h-screen w-70" alt="">
    <p class=" w-100 container m-5 h-100 ">Vous cherchez un espace où travailler vous et votre équipe à Casablanca ? Nos bureaux privés sont idéalement situés en <span class="fs-5 text-yellow-300">plein centre de Casablanca,</span> près de Casa Port et de la Place des Nations Unies. Ils sont soit <span class="fs-5 text-yellow-300">individuels</span>, soit <span class="fs-5 text-yellow-300">multipostes</span> et sont équipés de tout le mobilier de bureau nécessaire à votre activité (tables de travail, fauteuils et armoires/caissons). Ils sont destinés aux <span class="fs-5 text-yellow-300">entreprises ou indépendants</span> qui désirent profiter des <span class="fs-5 text-yellow-300">activités</span> de l’espace et de l’esprit de <span class="fs-5 text-yellow-300">communauté</span> et préserver en même temps la <span class="fs-5 text-yellow-300">confidentialité</span> de leur travail.
        <span class="fs-5 text-yellow-300 ">Les bureaux privés sont accessibles 7j/7 et pour la durée de votre choix. <br></span>
        
        <span class="text-gray-500 ">Vous souhaitez en savoir plus sur nos offres ? Remplissez le formulaire ci-dessous ou contactez-nous au +212 6 62 18 31 73</span></p>
</div>

@endsection
