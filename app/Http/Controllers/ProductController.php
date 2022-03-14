<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        return product::all();
    }

    public function create(Request $request)
    {
       $product = new product;
       $product->nama = $request->nama;
       $product->price = $request->price;
       $product->description= $request->description;
       $product->save();
       return "Data Berhasil Masuk";
    }

    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $price = $request->price;
        $description= $request->description;

        $product = product::find($id);
        $product->nama = $request->nama;
        $product->price = $request->price;
        $product->description= $request->description;
        $product->save();
        return "Data Berhasil di Update";
      
    }
    public function delete($id)
    {
        $product= product::find($id);
        $product->delete();
        return "Data Berhasil di Hapus";
    }
}
