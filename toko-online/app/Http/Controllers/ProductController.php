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
public function show(){
return view('product.display');
}

}
