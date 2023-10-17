<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function home(){
        $title ='Admin Mukto';
        return view('index',compact('title'));
    }
    public function contact(){
        $title ='Admin Mukto';
        return view('contact',compact('title'));
    }
    public function about()
    {
        return view('about');
    }
}
