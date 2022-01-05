@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> New Labs</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{url('/labs')}}">Labs</a>
                    </li>
                    <li class="breadcrumb-item active">New
                        Labs</li>
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
                <i class="far fa-list-alt"></i> Form New Labs
            </h3>
            <div class="card-tools">
                <a href="{{url('/labs')}}" class="btn btn-sm btn-warning 
          float-right"><i class="fas fa-arrow-alt-circle-left">
                    </i> Back</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <div class="col-sm-10">
        </div>
        <form class="form-horizontal" method="post" action="{{ url('/labs') }}" enctype="multipart/form-data">
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
                    <label for="title" class="col-sm-3 col-form-label">
                        Title</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('title') 
              is-invalid @enderror" name="title" id="title" value="">
                    </div>
                </div>
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="content" class="col-sm-3 col-form-label">
                        Content</label>
                    <div class="col-sm-7">
                        <textarea class="form-control @error('content')  
              is-invalid @enderror" name="content" id="content" value=""></textarea>
                    </div>
                </div>
                @error('content')
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