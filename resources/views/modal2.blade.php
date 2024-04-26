<!-- Button trigger modal -->
<button type="button" class=" px-3 py-1 rounded-lg" data-bs-toggle="modal" data-bs-target="#reserves{{ $resrve->id }}">
         <svg xmlns="http://www.w3.org/2000/svg"
    class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
    <path
        d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
        data-original="#000000" />
    <path
        d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
        data-original="#000000" />
</svg>


</button>

<!-- Modal -->


<div class="modal fade" id="reserves{{ $resrve->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ajouter event</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('reserve.update', $resrve) }}" class="w-full flex flex-col gap-y-5">
                    @csrf
                    @method('PUT')
                    <label for="">Event Title</label>
                    <input class="" required value="{{ old('name', $resrve->name) }}" name="title" placeholder="Event Title" type="text">
                    <label for="">Start Day</label>
                    <input name="dateStart" required value="{{ old("dateStart", $resrve->dateStart) }}"  min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start" type="date">
                    <label for="">Start time</label>
                    <input name="timeStart" step="1800" value="{{ old("timeStart", $resrve->timeStart) }}" required min="08:00:00" max="19:00:00" value="09:30:00" id="time-start" type="time">
                    <label for="">Select Table</label>
                    <select required name="table" class="text-black" id="" value="{{ old("table", $resrve->table) }}">
                        <option selected disabled value="">Select Table</option>
                        <option value="table 1">Table 1</option>
                        <option value="table 2">Table 2</option>
                        <option value="table 3">Table 3</option>
                        <option value="table 4">Table 4</option>
                        <option value="table 5">Table 5</option>
                    </select>
                    <label   for="">End Day</label>
                    <input required  name="dateEnd" id="date-end" value="{{ old("dateEnd", $resrve->dateEnd) }}" type="date">
                    <label for="">End time</label>
                    <input required  name="timeEnd" id="time-end" value="{{ old("timeEnd", $resrve->timeEnd) }}" type="time">
                     <button class="w-f
                py-3 bg-yellow-300 text-white">Reservation</button>
                </form>
                <!-- Separate button for payment, assuming it's a separate action -->
               
              
            </div>
        </div>
    </div>
</div>