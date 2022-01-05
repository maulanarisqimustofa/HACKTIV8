<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ability;

class abilitycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 2;
        $data_ability = ability::orderBy('ability')->paginate($batas);
        $no = ($batas * ($data_ability->currentpage()-1))+1;
        return view('admin.page.ability.tampil', 
        ['DataAbility' => $data_ability,  'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.ability.tambah');
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
            'ability' => 'required',
        ])->validated();

        $ability= new ability;
        $ability->ability = $request->ability;
        $ability->save();
        return redirect('/ability') ->with('status', 'Data ability 
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
        $data_ability = ability::find($id);
        return view('admin.page.ability.edit', ['DataAbility' => 
        $data_ability]);
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
            'ability' => 'required',
        ])->validated();

        $data_ability = ability::find($id);
        $data_ability->ability = $request->ability; 
        $data_ability->update();
        return redirect('/abilty')->with('status', 
        'Data abilit berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_ability = ability::find($id);
        $data_ability->delete();
        return redirect('/ability')->with('status', 
        'Data Ability berhasil dihapus');
    }
    public function search(Request $request)
    {
        $batas = 2;
        $cari = $request->katakunci;
        $data_ability = ability::where('ability','like',"%".$cari."%")
        ->orderBy('ability')->paginate($batas);
        $jumlah_data = $data_ability->count("id_ability");
        $no = ($batas * ($data_ability->currentpage()-1))+1;
        return view('admin.page.ability.cari', ['DataAbility' =>
        $data_ability,'JumlahDataAbility'=>$jumlah_data,'no'=>$no, 
        'cari'=>$cari]);
    }
}
