<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function hello(){
        return view('hello', ['nama'=>'Desy Ayu']);
    }
    public function index(){
        return view('hello');
    }
}
