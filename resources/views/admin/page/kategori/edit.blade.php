@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-edit"></i> Edit Kategori</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{url('/kategori')}}">Kategori</a>
          </li>
          <li class="breadcrumb-item active">Edit
            Kategori</li>
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
        <i class="far fa-list-alt"></i> Form Edit Kategori
      </h3>
      <div class="card-tools">
        <a href="{{url('/kategori')}}" class="btn btn-sm btn-warning 
          float-right"><i class="fas fa-arrow-alt-circle-left">
          </i> Back</a>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br>
    <div class="col-sm-10">
    </div>
    <form class="form-horizontal" method="post" action="{{ url('/kategori.' .$DataKategori->id_kategori) }}" enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="PUT" name="_method">
      <div class="card-body">
        <div class="form-group row">
          <label for="image" class="col-sm-3 col-form-label">
            Image </label>
          <div class="col-sm-7">
            <div class="custom-file">
              <input type="file" class="custom-file-input 
               @error('image') is-invalid @enderror" name="image" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
              <span>Saved Image :</span><br>
              <img src="{{asset('public/foto/'.$DataKategori->image)}}" class="img-fluid" width="200px;">
              <br>
              <span class="text-danger" style="font-weight:lighter;font-size:12px">
                *Only fill this field, if you want change image</span><br>
            </div>
          </div>
        </div>
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group row">
          <label for="kategori" class="col-sm-3 col-form-label">
            Kategori</label>
          <div class="col-sm-7">
            <input type="text" class="form-control @error('kategori') 
              is-invalid @enderror" name="kategori" id="title" value="{{ $DataKategori->kategori}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="Parent" class="col-sm-3 col-form-label">
            Parent</label>
          <div class="col-sm-7">
            <select name="parent" id="parent" class="form-control @error('parent') 
              is-invalid @enderror">
              <option value="{{ $DataKategori->kategori1->id_kategori1}}" hidden selected>{{ $DataKategori->kategori1->kategori1}}</option>
              @if (!empty($DataKategori1))
              @foreach($DataKategori1 as $key => $Kategori1)
              <option value="{{ $Kategori1->id_kategori1 }}">{{ $Kategori1->kategori1}}</option>
              @endforeach
              @endif
            </select>
          </div>
        </div>
        @error('ability')
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