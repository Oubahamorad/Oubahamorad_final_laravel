<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    //
    public function index()
    {
        return view('reserve');
    }
    
    public function store(Request $request)
    {

        $data = [
            "name" => $request->title,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "dateEnd" => $request->dateEnd,
            "timeEnd" => $request->timeEnd,
            "table"=>$request->table,
        ];
        // dd($request);

        Reserve::create($data);

        return back();
    }


  public function show(Reserve $calendar ,)
  
   
  {
   

        $events = Reserve::all()->map(function (Reserve $event) {
            $start = $event->dateStart . " " . $event->timeStart;
            $end = $event->dateEnd . " " . $event->timeEnd;
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->name,
                "color" => "#55664",
            ];
        });

        return response()->json([
            "events" => $events
        ]);
    }
    public function dostroy(Reserve $reserves){
        $reserves->delete();
        return back();

    }
    public function sho(Reserve $reserve){
        return view("reserve", compact( 'reserve)'));
    }
    public function update(Request $request, Reserve $reserve)
    {
        $request->validate([
            "name" => 'required',
            "dateStart" => 'required',
            "timeStart" => 'required',
            "dateEnd" => 'required',
            "timeEnd" => 'required',
            "table" => 'required',
        ]);
        
        $reserve->update([
            $reserve->name => $request->title,
            $reserve->dateStart => $request->dateStart,
            $reserve->timeStart => $request->timeStart,
            $reserve->dateEnd => $request->dateEnd,
            $reserve->timeEnd => $request->timeEnd,
            $reserve-> table => $request->table,
        ]);

        return back();
    }
}
