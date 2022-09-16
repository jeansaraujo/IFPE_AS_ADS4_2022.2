<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event as Event;

class EventController extends Controller
{
    public function index(){
        return Event::all();
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->name = $request->name;
        $event->dtevent = $request->dtevent;
        $event->save();
        return $event;
    }

    public function show(Event $event)
    {
        return $event;
    }

    public function update(Request $request)
    {
        $event = Event::find($request->id);
        $event->name = $request->name;
        $event->save();
        $events = Event::all();
        return $events;
    }

    public function destroy($event)
    {
        $event = Event::find($event);
        $event->delete();
        $events = Event::all();
        return $events;
    }
}
