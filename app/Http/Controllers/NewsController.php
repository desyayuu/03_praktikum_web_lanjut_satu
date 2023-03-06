<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function news($nama=""){
        if ($nama== ""){
            return view('news', ['namaberita'=>'COVID 19']);
        }else{
            $pesan="Tidak dapat diakses";
            echo "<script>alert('$pesan')</script>";
            return view('hello', ['nama'=>'dayudayoo']);
        }

    }
}
