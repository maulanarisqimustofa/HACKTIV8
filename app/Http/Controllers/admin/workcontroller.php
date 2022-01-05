<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\work;
use Illuminate\Support\Facades\File;

class workcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 2;
        $data_work = work::orderBy('title')->paginate($batas);
        $no = ($batas * ($data_work->currentpage()-1))+1;
        return view('admin.page.work.tampil', 
        ['DataWork' => $data_work,  'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.work.tambah');
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
        ])->validated();

        $work= new work;
        $work->title = $request->title;
        $work->content = $request->content;
        $work->save();
        return redirect('/work') ->with('status', 'Data work 
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
        $data_work = work::find($id);
        return view('admin.page.work.edit', ['DataWork' => 
        $data_work]);
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
        ])->validated();

        $data_work = work::find($id);
        $data_work->title = $request->title; 
        $data_work->content = $request->content; 
        $data_work->update();
        return redirect('/work')->with('status', 
        'Data work berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_work = work::find($id);
        $data_work->delete();
        return redirect('/work')->with('status', 
        'Data Work berhasil dihapus');;
    }
    public function search(Request $request)
    {
        $batas = 2;
        $cari = $request->katakunci;
        $data_work = work::where('title','like',"%".$cari."%")
        ->orderBy('title')->paginate($batas);
        $jumlah_data = $data_work->count("id_work");
        $no = ($batas * ($data_work->currentpage()-1))+1;
        return view('admin.page.work.cari', ['DataWork' =>
        $data_work,'JumlahDataWork'=>$jumlah_data,'no'=>$no, 
        'cari'=>$cari]);
    }

}
