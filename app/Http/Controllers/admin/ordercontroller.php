<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use \Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_order = order::all();
        return view('admin.page.order.tampil', 
        ['DataOrder' => $data_order]);
    }
    public function search(Request $request)
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $data_order = order::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $data_order = order::latest()->get();
        }
        if($request->search){
        return view('admin.page.order.tampil', ['DataOrder' => $data_order]);
        }
        if($request->export){
            $pdf = PDF::loadView('admin.page.order.pdf_view', ['DataOrder' => $data_order]);
            return $pdf->download('pdf_file.pdf');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_order = order::find($id);
        $data_order->delete();
        return redirect('/order')->with('status', 
        'Data Kategori berhasil dihapus');
    }
}
