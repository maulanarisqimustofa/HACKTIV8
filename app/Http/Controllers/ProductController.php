<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Validator;

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
    public function show($id)
    {
        $produk = product::find($id);
        return $produk;
    }
    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product->nama = $request->nama;
        $product->price = $request->price;
        $product->description= $request->description;
        $product->update();
        return "Data Berhasil di Update";
      
    }
    public function delete($id)
    {
        $product= product::find($id);
        $product->delete();
        return "Data Berhasil di Hapus";
    }
}
