<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Task as Task;

class TaskController extends Controller
{
    public function index(){

        return Event::all();

    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|max:255',
            'complete'=>'required'
        ]);

        $event = Event::create([
            'name'=>$request->input('name'),
            'complete'=>$request->input('complete')
        ]);

        return $event;

    }

    public function show(Event $event)
    {

        return $event;

    }

    public function update(Request $request, Event $event)
    {

        $request->validate([
            'name'=>'required|max:255'
        ]);

        $event->name = $request->input('name');

        $event->save();

        return $event;

    }

    public function destroy(Event $event)
    {

        $event->delete();

        return response()->json(['success'=>true]);

    }
}
