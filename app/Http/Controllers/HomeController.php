<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $events = Event::all();
        $banner = Event::where('is_banner', '=', 1)->first();

   

        return view('events',[
            'categories' => $categories,
            'events' => $events,
            'banner' => $banner
        ]);
        
    }

    public function filter(Request $request)
    {
        //dd($request)->all();

        $category_id = $request->category_id;

        $events = Event::where('category_id', '=', $category_id)->get();

        return response()->json([
            'succes' => true,
            'message' => 'eventos encontrados',
            'events' => $events
        ]);
    }
}
