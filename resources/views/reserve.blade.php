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

</nav>
<div class="flex justify-between container">
<h1>Cowork :</h1>

</div>
    <div class=" h-screen flex flex-col-reverse gap-y-9 items-center justify-center ">
        @include('modal')

        <div class="w-[50%]"  id="calendar"></div>

    </div>

  



    {{-- <div id='calendar'></div> --}a}

    {{-- end: "2024-01-04 10:00:00"
start: "2024-01-04 09:00:00"
title: "Projet TEST" --}}


<script>
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
    @foreach ($resrves as $resrve)
    <div class="border border-gray-800 p-4">
        <h1 class="text-xl font-bold">Reservation Details</h1>
        <p><span class="font-bold">Name:</span> {{ $resrve->name }}</p>
        <p><span class="font-bold">Start Date:</span> {{ $resrve->dateStart }}</p>
        <p><span class="font-bold">Start Time:</span> {{ $resrve->timeStart }}</p>
        <p><span class="font-bold">End Date:</span> {{ $resrve->dateEnd }}</p>
        <p><span class="font-bold">End Time:</span> {{ $resrve->timeEnd }}</p>
        <p><span class="font-bold">Table:</span> {{ $resrve->table }}</p>
        <button onclick="window.location.href='/session';" class="w-20 py-3 mt-3 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Pay Now</button>
    </div>
    @endforeach
</div>

@endsection