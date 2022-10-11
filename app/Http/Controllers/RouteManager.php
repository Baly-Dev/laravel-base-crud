<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteManager extends Controller
{
    public function home(){
        return redirect()->route('comics.index');
    }
    
    public function about(){
        return view('about');
    }
}
