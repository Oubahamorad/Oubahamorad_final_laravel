<?php

namespace App\Http\Controllers;

use App\Models\Calonder;
use Illuminate\Http\Request;

class CalonderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Calonder::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
        }

        return view('MyCalaendar');
    }
    public function store(Request $request)
    {
        switch ($request->type) {
            case 'add':
                $event = Calonder::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
                break;

            case 'update':
                $event = Calonder::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
                break;

            case 'delete':
                $event = Calonder::find($request->id)->delete();
                return response()->json($event);
                break;

            default:
                break;
        }
    }

}
