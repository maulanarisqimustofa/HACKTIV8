<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\produk;
use App\Models\kategori;
use Illuminate\Support\Facades\File;

class produk1controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = kategori::orderBy('kategori', 'asc')->get();
        return view('admin.page.produk.massupload', [
            'DataKategori' => $data_kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'harga' => 'required',
            'berat' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ])->validated();
        $produk = new produk();
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->status = $request->status;
        $produk->harga = $request->harga;
        $produk->berat = $request->berat;
        $produk->stock = $request->stock;
        $image = $request->image;
        $namafile = time() . '.' . $image->getClientOriginalExtension();
        $image->move('public/foto/', $namafile);
        $produk->image = $namafile;
        $produk->save();
        $produk->kategori()->attach($request->input("kategori"));
        return redirect('/produk')->with('status', 'Data produk 
        berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    public function search(Request $request)
    {
    }
}
