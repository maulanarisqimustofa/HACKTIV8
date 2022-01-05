<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\portfolio;
use App\Models\ability;
use Illuminate\Support\Facades\File;

class portfoliocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 2;
        $data_portfolio = portfolio::orderBy('title')->paginate($batas);
        $no = ($batas * ($data_portfolio->currentpage()-1))+1;
        return view('admin.page.portfolio.tampil', 
        ['DataPortfolio' => $data_portfolio,  'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_ability = ability::orderBy('ability','asc')->get();
        return view('admin.page.portfolio.tambah', [
        'DataAbility' => $data_ability]);

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
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ])->validated();

        $portfolio= new portfolio();
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;
        $portfolio->content = $request->content;
        $image = $request->image;
        $namafile = time().'.'.$image->getClientOriginalExtension();
        $image->move('public/foto/',$namafile);
        $portfolio->image = $namafile;
        $portfolio->save();
        $portfolio->ability()->attach($request->input("ability"));
        return redirect('/portfolio') ->with('status', 'Data portfolio 
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
        $data_portfolio = portfolio::find($id);
        $data_ability = ability::orderBy('ability','asc')->get();
        $portfolio_ability = $data_portfolio->ability->pluck('id_ability')->toArray();
        return view('admin.page.portfolio.edit', ['DataPortfolio' => $data_portfolio, 
        'DataAbility' => $data_ability, 'PortfolioAbility' => $portfolio_ability ]);
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
            'link' => 'required',
        ])->validated();

        //$id = Auth::id(); 
        $portfolio = portfolio::find($id);
        if($request->has('image')){
            $namafileold = $portfolio->image;
            if(File::exists('public/foto/'.$namafileold)) {
                File::delete('public/foto/'.$namafileold);
            }
            $portfolio->title = $request->title;
            $portfolio->link = $request->link;
            $portfolio->content = $request->content;
            $image = $request->image;
            $namafile = time().'.'.$image->getClientOriginalExtension();
            $image->move('public/foto/',$namafile);
            $portfolio->image = $namafile;
            
        }else{
            $portfolio->title = $request->title;
            $portfolio->link = $request->link;
            $portfolio->content = $request->content;
        } 
        $portfolio->update();
        $portfolio->ability()->sync($request->input("ability"));
        return redirect('/portfolio')->with('status', 'Portfolio berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_portfolio = portfolio::find($id);
        $namafile = $data_portfolio->foto;
        if(File::exists('public/foto/'.$namafile)) {
            File::delete('public/foto/'.$namafile);
        }
        $data_portfolio->delete();
        return redirect('/portfolio')->with('status', 
        'Data portfolio berhasil dihapus');;

    }
    public function search(Request $request)
    {
        $batas = 2;
        $cari = $request->katakunci;
        $data_portfolio = portfolio::where('title','like',"%".$cari."%")
        ->orderBy('title')->paginate($batas);
        $jumlah_data = $data_portfolio->count("id");
        $no = ($batas * ($data_portfolio->currentpage()-1))+1;
        return view('admin.page.portfolio.cari', ['DataPortfolio' =>
        $data_portfolio,'JumlahDataPortfolio'=>$jumlah_data,'no'=>$no, 
        'cari'=>$cari]);
    }


}
