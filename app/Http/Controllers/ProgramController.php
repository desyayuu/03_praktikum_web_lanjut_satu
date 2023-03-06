<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    public function karir(){
        return view('program', ['namaprogram'=>'Karir']);
    }
    public function magang(){
        return view('program', ['namaprogram'=>'Magang']);
    }
    public function industri(){
        return view('program', ['namaprogram'=>'Industri']);
    }

}
