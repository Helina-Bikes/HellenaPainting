<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        return view('home.homepage');

    }
    public function interior(){
        return view('home.interior');
    }
    public function exterior(){
        return view('home.exterior');
    }
    public function commericial(){
        return view('home.commericial');
    }
}
