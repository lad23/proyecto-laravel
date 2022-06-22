<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event;



class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $events = Event::all();

        return view('admin.index', ['events' => $events]);
    }

    public function create()
    {

        $categories = Category::all();

        return view('create',['categories' => $categories]);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        if($request->hasFile('featured') ){

            $file =$request->file('featured');
            
            $img_name = time().'_event.'.$file->getClientOriginalExtension();
            $detinationPath = 'images/uploads/events';
            $uploadSucces = $file->move($detinationPath, $img_name);
        }

        Event::create([
            "category_id" => $request -> category_id,
            "title" => $request -> title,
            "date_event" => $request -> date_event,
            "name_event" => $request -> name_event,
            "description" => $request -> description,
            "featured" => $img_name,
        ]);

        return redirect()->route('events.index');
    }

    public function edit($event)
    {
        $event = Event::find($event);
        $categories = Category::all();

        return view('edit', [
            'event' => $event,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $event)
    {
        $event = Event::find($event);

        if($request->hasFile('featured') ){
            $file =$request->file('featured');
            $img_name = time().'_event.'.$file->getClientOriginalExtension();
            $detinationPath = 'images/uploads/events';
            $uploadSucces = $file->move($detinationPath, $img_name);
        }

        $event->category_id  = $request->category_id;
        $event->title = $request->title;
        $event->date_event = $request->date_event;
        $event->name_event = $request->name_event;
        $event->description = $request->description;
        $event->featured = isset($img_name)? $img_name: $event->featured;

        $event->save();

        return redirect()->route('events.index');
    }

    public function delete($event)
    {
        $event = Event::find($event);
        $event->delete();

        return redirect()->route('events.index');

    }
}
   