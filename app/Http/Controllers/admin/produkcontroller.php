<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\produk;
use App\Models\kategori;
use Illuminate\Support\Facades\File;

class produkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 2;
        $data_produk = produk::orderBy('id_produk', 'desc')->paginate($batas);
        $no = ($batas * ($data_produk->currentpage()-1))+1;
        return view('admin.page.produk.tampil', 
        ['DataProduk' => $data_produk,  'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = kategori::orderBy('kategori')->get();
        return view('admin.page.produk.tambah', [
        'DataKategori' => $data_kategori]);

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
            'stock' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ])->validated();

        $produk= new produk();
        $produk->nama = $request->nama;
        $produk->deskripsi= $request->deskripsi;
        $produk->status = $request->status;
        $produk->harga= $request->harga;
        $produk->berat = $request->berat;
        $produk->stock = $request->stock;
        $image = $request->image;
        $namafile = time().'.'.$image->getClientOriginalExtension();
        $image->move('public/foto/',$namafile);
        $produk->image = $namafile;
        $produk->save();
        $produk->kategori()->attach($request->input("kategori"));
        return redirect('/produk') ->with('status', 'Data produk 
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
        $data_produk = produk::find($id);
        $data_kategori = kategori::orderBy('kategori','asc')->get();
        $kategori_produk = $data_produk->kategori->pluck('id_kategori')->toArray();
        return view('admin.page.produk.edit', ['DataProduk' => $data_produk, 
        'DataKategori' => $data_kategori, 'KategoriProduk' => $kategori_produk ]);
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'harga' => 'required',
            'berat' => 'required',
            'stock' => 'required',
        ])->validated();

        //$id = Auth::id(); 
        $produk = produk::find($id);
        if($request->has('image')){
            $namafileold = $produk->image;
            if(File::exists('public/foto/'.$namafileold)) {
                File::delete('public/foto/'.$namafileold);
            }
            $produk->nama = $request->nama;
            $produk->deskripsi= $request->deskripsi;
            $produk->status = $request->status;
            $produk->harga= $request->harga;
            $produk->berat = $request->berat;
            $produk->stock = $request->stock;
            $image = $request->image;
            $namafile = time().'.'.$image->getClientOriginalExtension();
            $image->move('public/foto/',$namafile);
            $produk->image = $namafile;
            
        }else{
            $produk->nama = $request->nama;
            $produk->deskripsi= $request->deskripsi;
            $produk->status = $request->status;
            $produk->harga= $request->harga;
            $produk->berat = $request->berat;
            $produk->stock = $request->stock;
        } 
        $produk->update();
        $produk->kategori()->sync($request->input("kategori"));
        return redirect('/produk')->with('status', 'Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_produk = produk::find($id);
        $namafile = $data_produk->foto;
        if(File::exists('public/foto/'.$namafile)) {
            File::delete('public/foto/'.$namafile);
        }
        $data_produk->delete();
        return redirect('/produk')->with('status', 
        'Data produk berhasil dihapus');;

    }
    public function search(Request $request)
    {
        $batas = 2;
        $cari = $request->katakunci;
        $data_produk = produk::where('nama','like',"%".$cari."%")
        ->orderBy('nama')->paginate($batas);
        $jumlah_data = $data_produk->count("id");
        $no = ($batas * ($data_produk->currentpage()-1))+1;
        return view('admin.page.produk.cari', ['DataProduk' =>
        $data_produk,'JumlahDataProduk'=>$jumlah_data,'no'=>$no, 
        'cari'=>$cari]);
    }


}
