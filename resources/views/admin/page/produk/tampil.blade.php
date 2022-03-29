@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-book"></i> Produk</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> Produk</li>
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
                <i class="fas fa-list-ul"></i> Produk List
            </h3>
            <div class="card-tools">
                <a href="{{url('/produk.tambah')}}" class="btn btn-sm btn-info float-right">
                    <i class="fas fa-plus"></i> New Produk</a>
            </div>
            <div class="card-tools" style="margin-right: 5px;">
                <a href="{{url('/produk.massupload')}}" class="btn btn-sm btn-danger float-right">
                    <i class="fas fa-plus"></i> Mass Upload</a>
            </div>
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
                <form method="get" action="{{url('/produk.cari')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                            <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                            <button type="submit" class="btn btn- 
                          primary"><i class="fas fa-search">
                                </i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                </form>
            </div><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Image</th>
                        <th width="15%">Produk</th>
                        <th width="15%">Harga</th>
                        <th width="10%">Stock</th>
                        <th width="15%">Created At</th>
                        <th width="10%">Status</th>
                        <th width="10%">
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($DataProduk))
                    @foreach($DataProduk as $key => $produk)
                    <tr>
                        <td>{{ $no }}</td>
                        <td><img 
                    src="{{asset('public/foto/'. $produk->image)}}" 
                    class="img-fluid" width="200px;"></td>
                        <td>
                            <p style="font-weight: bold;">{{ $produk->nama }}</p>
                            <p style="font-weight: bold;">Kategori :
                            <ul>
                                @foreach($produk->kategori as $kategori)
                                <li> {{ $kategori->kategori }}</p>
                                    @endforeach
                            </ul>
                            </p>
                            <p style="font-weight: bold;">Berat : {{ $produk->berat }} gr</p>
                        </td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ $produk->stock }}</td>
                        <td>{{ $produk->created_at }}</td>
                        <td><p style="width: fit-content; background: grey">{{ $produk->status }}</p></td>
                        <td align="center">
                            <form action="{{url('/produk.'.$produk->id_produk)}}" method="Post" onsubmit="return 
                          confirm('Apakah data ingin dihapus?')">
                                @csrf

                                <a href="{{url('/produk.'.$produk ->id_produk.'.edit')}}" class="btn btn-xs btn-info" title="Edit">
                                    <i class="fas fa-edit"></i></a>

                                <input type="hidden" value="DELETE" name="_method">
                                <button type="submit" class="btn btn-xs btn-info" title="Hapus">
                                    <i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @php
                    $no++
                    @endphp

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
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 
                 float-right">
                {{ $DataProduk->links() }}
            </ul>
        </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection