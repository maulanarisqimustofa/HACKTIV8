<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\labs;
use Illuminate\Support\Facades\File;

class labscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 2;
        $data_labs = labs::orderBy('title')->paginate($batas);
        $no = ($batas * ($data_labs->currentpage()-1))+1;
        return view('admin.page.labs.tampil', 
        ['DataLabs' => $data_labs,  'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.labs.tambah');
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
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ])->validated();

        $labs= new labs();
        $labs->title = $request->title;
        $labs->content = $request->content;
        $image = $request->image;
        $namafile = time().'.'.$image->getClientOriginalExtension();
        $image->move('public/foto/',$namafile);
        $labs->image = $namafile;
        $labs->save();
        return redirect('/labs') ->with('status', 'Data labs 
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
        $data_labs = labs::find($id);
        return view('admin.page.labs.detail', ['DataLabs' => 
        $data_labs]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_labs = labs::find($id);
        return view('admin.page.labs.edit', ['DataLabs' => 
        $data_labs]);    
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
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ])->validated();

        $data_labs = labs::find($id);
        if($request->has('image')){
            $namafileold = $data_labs->foto;
            if(File::exists('public/foto/'.$namafileold)) {
                File::delete('public/foto/'.$namafileold);
            }
                $data_labs->title = $request->title;
                $data_labs->content = $request->content;
                $image = $request->image;
                $namafile = time().'.'.$image->
                getClientOriginalExtension();
                $image->move('public/foto/',$namafile);
                $data_labs->image = $namafile;
           
        }else{
                $data_labs->title = $request->title;
                $data_labs->content = $request->content;  
        }
        $data_labs->update();
        return redirect('/labs')->with('status', 
        'Data labs berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_labs = labs::find($id);
        $namafile = $data_labs->foto;
        if(File::exists('public/foto/'.$namafile)) {
            File::delete('public/foto/'.$namafile);
        }
        $data_labs->delete();
        return redirect('/labs')->with('status', 
        'Data labs berhasil dihapus');;

    }
    public function search(Request $request)
    {
        $batas = 2;
        $cari = $request->katakunci;
        $data_labs = labs::where('title','like',"%".$cari."%")
        ->orderBy('title')->paginate($batas);
        $jumlah_data = $data_labs->count("id_labs");
        $no = ($batas * ($data_labs->currentpage()-1))+1;
        return view('admin.page.labs.cari', ['DataLabs' =>
        $data_labs,'JumlahDataLabs'=>$jumlah_data,'no'=>$no, 
        'cari'=>$cari]);
    }

}
