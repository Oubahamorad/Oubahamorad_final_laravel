<?php

namespace App\Http\Controllers;

use App\Models\Calonder;
use App\Models\Reserve;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CalonderController extends Controller
{
    public function index(Request $request)
    {
        return view("reserve");

    }
    public function show(Reserve $calendar)
    {
        //

        $events = Reserve::all()->map(function (Reserve $event) {
            $start = $event->dateStart . " " . $event->timeStart;
            $end = $event->dateEnd . " " . $event->timeEnd;
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->name,
                "color" => "#000",



            ];
        });

        return response()->json([
            "events" => $events
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserve $Reserve)
    {
        //
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
}
