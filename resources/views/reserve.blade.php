@extends('index')


@section('content')
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
                <option value="{{ route('dashboard') }}">dashbord</option>
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
    <div class="flex m-5 justify-between container">
        <h1>Cowork :</h1>
      
        <button type="button" title="Edit"  data-bs-toggle="modal" data-bs-target="#exampleModal"
    class="px-6 py-2 rounded  text-sm tracking-wider font-medium outline-none border-2 border-yellow-400 hover:bg-yellow-300 hover:text-white transition-all duration-300 text-black">Add Reservation</button>
    </button>

    </div>
    <div class=" h-screen flex flex-col-reverse gap-y-9 items-center justify-center ">
        @include('modal')

        <div class="w-[50%]" id="calendar"></div>

    </div>





    {{-- <div id='calendar'></div> --}a}

    {{-- end: "2024-01-04 10:00:00"
start: "2024-01-04 09:00:00"
title: "Projet TEST" --}}


    <script >
        document.addEventListener('DOMContentLoaded', async function() {

            const {
                data
            } = await axios.get("/reserve/show")

            const events = data.events;
            // console.log(data);



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
                    // document.getElementById("Clichair").click()



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
    </script>
    <div class="flex justify-center gap-2 space-y-4">

        @foreach ($reserves as $resrve)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 font-[sans-serif]">
                    <thead class="bg-gray-100 whitespace-nowrap">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name:
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Start Date:
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Start Time:
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                End Date:
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-red-500 uppercase tracking-wider">
                                Delete
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium  text-blue-600 uppercase tracking-wider">
                                Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
                        <tr>
                            <td class="px-6 py-4 text-sm text-[#333]">
                                {{ $resrve->name }}
                            </td>
                            <td class="px-6 py-4 text-sm text-[#333]">
                                {{ $resrve->dateStart }}
                            </td>
                            <td class="px-6 py-4 text-sm text-[#333]">
                                {{ $resrve->timeStart }}
                            </td>
                            <td class="px-6 py-4 text-sm text-[#333]">
                                {{ $resrve->dateEnd }}
                            </td>
                            <td class="px-6 py-4 text-sm text-[#333]">
                                <button onclick="window.location.href='/session';"
                                    class="w-20 py-3 mt-3 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Pay
                                    Now</button>

                            </td>
                            <td>
                                <form action="{{ route('reserve.delete', ['reserves' => $resrve->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="mx-5" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" />
                                            <path
                                                d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" />
                                        </svg>
                                    </button>
                                </form>

                            </td>
                            <td>
                              <div class=" ">
                                @include('modal2')
                            </div>
                        
                              {{-- <form action="{{ route('reserve.update', ['reserves' => $resrve->id]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <!-- Button trigger modal -->
                                    <button type="button"  title="Edit" class="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"> --}}
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path
                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                data-original="#000000" />
                                            <path
                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                data-original="#000000" />
                                        </svg> --}}

{{--                                         
                                    </button>

                          
                                </form> --}}
                            </td>
                        </tr>
        @endforeach


        </tbody>
        </table>
    </div>
    </div>
    <style>
        /* CSS for tablet screens */
        @media (max-width: 768px) {

            /* Adjust calendar container size */
            #calendar {
                width: 90%;
                margin: 0 auto;
            }
        }

        /* CSS for mobile screens */
        @media (max-width: 576px) {

            /* Adjust calendar container size */
            #calendar {
                width: 100%;
                margin: 0 auto;
            }

            /* Adjust header toolbar buttons */
            .fc-header-toolbar {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
            }

            .fc-header-toolbar .fc-toolbar-chunk {
                margin: 5px;
            }
        }
    </style>
@endsection
