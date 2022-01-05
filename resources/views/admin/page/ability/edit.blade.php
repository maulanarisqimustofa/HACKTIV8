@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Ability</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <a href="{{url('/ability')}}">Ability</a></li>
              <li class="breadcrumb-item active">Edit 
              Ability</li>
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
        <h3 class="card-title"style="margin-top:5px;">
        <i class="far fa-list-alt"></i> Form Edit Ability</h3>
        <div class="card-tools">
          <a href="{{url('/ability')}}" class="btn btn-sm btn-warning 
          float-right"><i class="fas fa-arrow-alt-circle-left">
         </i> Back</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
      </div>
      <form class="form-horizontal" method="post" 
      action="{{ url('/ability.' .$DataAbility->id_ability) }}">
      @csrf
      <input type="hidden" value="PUT" name="_method">
      <div class="card-body">
          <div class="form-group row">
            <label for="ability" class="col-sm-3 col-form-label">
             Ability</label>
            <div class="col-sm-7">
              <input type="text" class="form-control @error('ability') 
              is-invalid @enderror" name="ability" 
              id="title" value="{{ $DataAbility->ability}}">
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
