<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventCategoriesController extends Controller
{
    public function categories(){

        return view('categories');

    }
}
