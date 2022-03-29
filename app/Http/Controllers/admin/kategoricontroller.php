<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\kategori;
use App\Models\kategori1;
use Illuminate\Support\Facades\File;

class kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 4;
        $data_kategori = kategori::orderBy('id_kategori', 'desc')->paginate($batas);
        $no = ($batas * ($data_kategori->currentpage() - 1)) + 1;
        return view(
            'admin.page.kategori.tampil',
            ['DataKategori' => $data_kategori,  'no' => $no]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori1 = kategori1::orderBy('kategori1', 'asc')->get();;
        return view('admin.page.kategori.tambah', ['DataKategori1' => $data_kategori1]);
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
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ])->validated();

        $kategori = new kategori();
        $kategori->kategori = $request->kategori;
        $kategori->id_kategori1 = $request->parent;
        $image = $request->image;
        $namafile = time() . '.' . $image->getClientOriginalExtension();
        $image->move('public/foto/', $namafile);
        $kategori->image = $namafile;
        $kategori->save();

        $kategori1 = new kategori1();
        $kategori1->kategori1 = $request->kategori;
        $kategori1->save();
        return redirect('/kategori')->with('status', 'Data kategori
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
        $data_kategori = kategori::find($id);
        $data_kategori1 = kategori1::orderBy('kategori1', 'asc')->get();;
        return view('admin.page.kategori.edit', ['DataKategori' =>
        $data_kategori], ['DataKategori1' => $data_kategori1]);
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
            'kategori' => 'required',
        ])->validated();

        $data_kategori = kategori::find($id);
        if ($request->has('image')) {
            $namafileold = $data_kategori->image;
            if (File::exists('public/foto/' . $namafileold)) {
                File::delete('public/foto/' . $namafileold);
            }
            $data_kategori->kategori = $request->kategori;
            $data_kategori->id_kategori1 = $request->parent;
            $image = $request->image;
            $namafile = time() . '.' . $image->getClientOriginalExtension();
            $image->move('public/foto/', $namafile);
            $data_kategori->image = $namafile;
        } else {
            $data_kategori->kategori = $request->kategori;
            $data_kategori->id_kategori1 = $request->parent;
        }
        $data_kategori->update();
        return redirect('/kategori')->with(
            'status',
            'Data kategori berhasil diubah'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_kategori = kategori::find($id);
        $namafile = $data_kategori->foto;
        if(File::exists('public/foto/'.$namafile)) {
            File::delete('public/foto/'.$namafile);
        }
        $data_kategori->delete();
        return redirect('/kategori')->with(
            'status',
            'Data Kategori berhasil dihapus'
        );
    }
    public function search(Request $request)
    {
        $batas = 2;
        $cari = $request->katakunci;
        $data_kategori = kategori::where('kategori', 'like', "%" . $cari . "%")
            ->orderBy('kategori')->paginate($batas);
        $jumlah_data = $data_kategori->count("id_kategori");
        $no = ($batas * ($data_kategori->currentpage() - 1)) + 1;
        return view('admin.page.kategori.cari', [
            'DataKategori' =>
            $data_kategori, 'JumlahDataKategori' => $jumlah_data, 'no' => $no,
            'cari' => $cari
        ]);
    }
}
