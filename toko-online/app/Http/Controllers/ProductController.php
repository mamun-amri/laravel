<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;

class ProductController extends Controller
{
  public function showAll(){
  $dataProductDariModel = Product::all();
  return view('product.display', [“products” =>
  $dataProductDariModel]);
  }

public function saveNew(Request $request){
  // kode logika untuk menyimpan product baru
}

//controler yang ada difolder product
public function indek(){
return view('product.index');
}

//ini menampilkan dengan ID
public function show($id){
  /** Nah sekarang kita bisa menggunakan $id
* untuk misalnya query ke DB product where id == $id
*/
}

}
