<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request) {
        if($request->ajax()) {
            $data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end', '<=', 'end')
                       ->get(['id', 'title', 'description', 'start', 'end']);
            return response()->json($data);
        }
        return view('calendar');
    }

    public function action(Request $request) {
        if($request->ajax()) {
            if($request->type == 'add') {
                $event = Event::create([
                    'title'         => $request->title,
                    'description'   => $request->description,
                    'start'         => $request->start,
                    'end'           => $request->end
                ]);
                return response()->json($event);
            }

            if($request->type == 'update') {
                $event = Event::find($request->id)->update([
                    'title'         => $request->title,
                    'description'   => $request->description,
                    'start'         => $request->start,
                    'end'           => $request->end
                ]);
                return response()->json($event);
            }

            if($request->type == 'delete') {
                $event = Event::find($request->id)->delete();

                return response()->json($event);
            }
        }
    }
}
