@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> New Produk</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{url('/produk')}}">Produk</a>
                    </li>
                    <li class="breadcrumb-item active">New Data
                        Produk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('main-content')
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;">
                <i class="far fa-list-alt"></i> Form New Produk
            </h3>
            <div class="card-tools">
                <a href="{{url('/produk')}}" class="btn btn-sm btn-warning 
          float-right"><i class="fas fa-arrow-alt-circle-left">
                    </i> Back</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <div class="col-sm-10">
        </div>
        <form class="form-horizontal" method="post" action="{{ url('/produk') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">
                        Image </label>
                    <div class="col-sm-7">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input 
               @error('image') is-invalid @enderror" name="image" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">
                        Nama</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('nama') 
              is-invalid @enderror" name="nama" id="nama" value="">
                    </div>
                </div>
                @error('nama')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">
                        Deskripsi</label>
                    <div class="col-sm-7">
                        <textarea rows="5" class="form-control @error('content')  
              is-invalid @enderror" name="deskripsi" id="deskripsi" value=""></textarea>
                    </div>
                </div>
                @error('deskripsi')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">
                        Status</label>
                    <div class="col-sm-7">
                        <select name="status" id="status" class="form-control @error('status')  
              is-invalid @enderror">
                            <option value="Draft">Draft</option>
                            <option value="Complete">Complete</option>
                        </select>
                    </div>
                </div>
                @error('link')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">
                        Kategori</label>
                    <div class="col-sm-7">
                        @if (!empty($DataKategori))
                        @foreach($DataKategori as $key => $kategori)
                        <input type="checkbox" name="kategori[]" value="{{ $kategori->id_kategori }}">
                        {{ $kategori->kategori }}
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-3 col-form-label">
                        Harga</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control @error('harga') 
              is-invalid @enderror" name="harga" id="harga" value="">
                    </div>
                </div>
                @error('harga')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="berat" class="col-sm-3 col-form-label">
                        Berat</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control @error('berat') 
              is-invalid @enderror" name="berat" id="berat" value="">
                    </div>
                </div>
                @error('berat')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="stock" class="col-sm-3 col-form-label">
                        Stock</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control @error('stock') 
              is-invalid @enderror" name="stock" id="stock" value="1" readonly>
                    </div>
                </div>
                @error('stock')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Save</button>
        </div>
    </div>
    <!-- /.card-footer -->
    </form>
    </div>
    <!-- /.card -->

</section>
@endsection