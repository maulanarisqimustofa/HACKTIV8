@extends('admin.layouts.app')
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Profile</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <a href="profil.php">Profile</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
@endsection

<!-- Main content -->
@section('main-content')
<section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;">
        <i class="far fa-list-alt"></i> Form Edit Profile</h3>
        <div class="card-tools">
          <a href="{{url('/profil')}}" class="btn btn-sm 
           btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Back</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <br>
      
      
      <form class="form-horizontal" method="post"
      action="{{url('/profil.'.Auth::user()->id)}}" enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="PUT" name="_method">
        <div class="card-body">          
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label">
           <span class="text-info">
            <i class="fas fa-user-circle"></i> <u>
           PROFILE USER</u></span></label>
          </div>
          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Photo
            </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" 
                name="foto" id="customFile">
                <label class="custom-file-label"  
                for="customFile">Choose file</label>
                <span class="text-danger" 
                style="font-weight:lighter;font-size:12px">
               *Only fill this field, if you want change photo</span>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">
           Name</label>
            <div class="col-sm-7">
              <input type="text" class="form-control 
              @error('nama') is-invalid @enderror" 
              name="nama" id="nama" 
              value="{{ Auth::user()->name }}">
            </div>
          </div>
          @error('nama')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">
            Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control 
               @error('email') is-invalid @enderror"" 
              name="email" id="email" 
             value="{{ Auth::user()->email }}">
            </div>
          </div>
          @error('email')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">
             Password</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" 
              name="password" id="password" value="">
              <span class="text-danger" style="font-weight:lighter;font-size:12px">
              *Only fill this field, if you want change password</span>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info 
           float-right"><i class="fas fa-save"></i> Save</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

</section>
@endsection
