<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\File;

class profilcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.profil.tampil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.page.profil.edit');
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
            'email' => 'required|email',
        ])->validated();

        //$id = Auth::id(); 
        $user = User::find($id);
        if($request->has('foto')){
            $namafileold = $user->foto;
            if(File::exists('public/foto/'.$namafileold)) {
                File::delete('public/foto/'.$namafileold);
            }
            if($request->input('password')){
                $user->name = $request->nama;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $foto = $request->foto;
                $namafile = time().'.'.$foto->getClientOriginalExtension();
                $foto->move('public/foto/',$namafile);
                $user->foto = $namafile;
            }else{
                $user->name = $request->nama;
                $user->email = $request->email;
                $foto = $request->foto;
                $namafile = time().'.'.$foto->getClientOriginalExtension();
                $foto->move('public/foto/',$namafile);
                $user->foto = $namafile;
            }
        }else{
            if($request->input('password')){
                $user->name = $request->nama;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
            }else{
                $user->name = $request->nama;
                $user->email = $request->email;
            }
            
        } 
        $user->update();

        return redirect('/profil')->with('status', 'Profil berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
