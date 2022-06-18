<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

//controlador
class HomeController extends Controller
{
    public function index(){

        $categories = Category::all();

        //dd($categories);

        return view('events', ['categories' => $categories]);
    }


    public function sobrenosotros(){

        return view('sobrenosotros');
    }


    public function contacto(){

        return view('contacto');

    }
}

