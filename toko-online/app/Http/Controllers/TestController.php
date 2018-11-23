<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{                            //ini menggunakan callback
  public function pintuMasuk(Request $request){
    return "selamat datang di pintu masuk (dari controler)";
  }
}
