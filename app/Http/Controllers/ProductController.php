<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function edugames(){
        return view('product', ['namaproduk'=>'edugames']);
    }
    public function kidsgames(){
        return view('product', ['namaproduk'=>'Kids games']);
    }
    public function riristory(){
        return view('product', ['namaproduk'=>'Riri Story']);
    }
    public function kolakkids(){
        return view('product', ['namaproduk'=>'Kolak kids']);
    }
}

