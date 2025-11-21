<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $search = request('search');
        if($search){
            $events = Event::where([
                [ 'title', 'like', '%'.$search.'%' ],
            ]) -> get();
        } else {
            $events = Event::all();
        }
        return view('events' , ['events'=>$events,'search'=>$search]);
    }

    public function index3() {
        $lista_evento = ['Evento1','Evento2','Evento3'];
        return view('create', ['lista_evento'=>$lista_evento]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request){
        $event = new Event(); //criar objeto da classe Event
        $event->title = $request->input('title');
        $event->city = $request->input('city');
        $event->private = $request->input('private');
        $event->description = $request->input('description');
        $event->items = $request->input('items');
        $event->date = $request->input('date');

        $user = auth()->user();
        $event -> user_id = $user->id;

        $event->save();
        return redirect('/')->with('msg', 'Evento adicionado com sucesso!');
    }
    public function show($id){
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();
        return view('show', ['event'=>$event, 'eventOwner'=>$eventOwner]);
    }

    public function dashboard(){
        $user = auth()->user();
        $events = $user->events;

        return view('dashboard', ['events'=>$events]);
    }
}
