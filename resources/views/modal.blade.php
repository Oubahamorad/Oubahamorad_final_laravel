<!-- Button trigger modal -->
<button id="clickMe" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
    {{-- Launch demo modal --}}
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ajouter event</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="w-full flex flex-col gap-y-5" action="/reserve/store">
                    @csrf
                    <label for="">Event Title</label>
                    <input class="" required name="title" placeholder="Event Title" type="text">
                    <label for="">Start Day</label>
                    <input name="dateStart" required  min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start" type="date">
                    <label for="">Start time</label>
                    <input name="timeStart" step="1800" required min="08:00:00" max="19:00:00" value="09:30:00" id="time-start" type="time">
                    <label for="">Select Table</label>
                    <select required name="table" class="text-black" id="">
                        <option selected disabled value="">Select Table</option>
                        <option value="table 1">Table 1</option>
                        <option value="table 2">Table 2</option>
                        <option value="table 3">Table 3</option>
                        <option value="table 4">Table 4</option>
                        <option value="table 5">Table 5</option>
                    </select>
                    <label   for="">End Day</label>
                    <input required  name="dateEnd" id="date-end" type="date">
                    <label for="">End time</label>
                    <input required  name="timeEnd" id="time-end" type="time">
                     <button class="w-f
                py-3 bg-yellow-300 text-white">Reservation</button>
                </form>
                <!-- Separate button for payment, assuming it's a separate action -->
               
              
            </div>
        </div>
    </div>
</div>