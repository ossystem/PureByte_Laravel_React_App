<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
  public function index()
  {
    return Event::all();
  }

  public function show(Event $event)
  {
    return $event;
  }

  public function store(Request $request)
  {
    $event = Event::create($request->all());
    return response()->json($event, 201);
  }

  public function update(Request $request, Event $event)
  {
    $event->update($request->all());
    return response()->json($event, 200);
  }

  public function delete(Event $event)
  {
    $event->delete();
    return response()->json(null, 204);
  }
}
