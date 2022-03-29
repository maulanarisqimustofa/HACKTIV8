@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-file"></i> Order</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> Order</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('main-content')
<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;">
                <i class="fas fa-list-ul"></i> Order List
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (session('status'))
            <div class="col-sm-12">
                <div class="alert alert-success" role="alert">
                    {!! session()->get('status') !!}</div>
            </div>
            @endif
            <div class="col-md-12">
                <form method="get" action="{{url('/order.cari')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                            <h7>Start :</h7>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                            <h7>End :</h7>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                            <div class="card-tools" style="margin-right: 2px; margin-top: 85px">
                                <input type="submit" class="btn btn-info" name="search" value="Search">
                            </div>
                            <div class="card-tools" style="margin-right: 2px; margin-top: 85px">
                                <input type="submit" class="btn btn-info" name="export" value="Export">
                            </div>
                    </div><!-- .row -->
                </form>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="15%">Invoice Id</th>
                        <th width="15%">Produk</th>
                        <th width="15%">Pelanggan</th>
                        <th width="10%">Jumlah</th>
                        <th width="10%">Total</th>
                        <th width="10%">Status</th>
                        <th width="10%">Tanggal</th>
                        <th width="15%">
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($DataOrder))
                    @foreach($DataOrder as $key => $order)
                    <tr>
                        <td>{{ $order->invoice_id }}</td>
                        <td>{{ $order->produk->nama }}</td>
                        <td>{{ $order->pelanggan }}</td>
                        <td>{{ $order->jumlah }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td align="center">
                            <form action="{{url('/order.'.$order->id_order)}}" method="Post" onsubmit="return 
                          confirm('Apakah data ingin dihapus?')">
                                @csrf
                                <input type="hidden" value="DELETE" name="_method">
                                <button type="submit" class="btn btn-xs btn-info" title="Hapus">
                                    <i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>


                    @endforeach
                    @else
                    <tr>
                        <td colspan="5">there are no records
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <!-- <div></div> -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection