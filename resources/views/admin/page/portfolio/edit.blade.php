@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Portfolio</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{url('/portfolio')}}">Portfolio</a>
                    </li>
                    <li class="breadcrumb-item active">Edit
                        Portfolio</li>
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
                <i class="far fa-list-alt"></i> Form Edit Portfolio
            </h3>
            <div class="card-tools">
                <a href="{{url('/portfolio')}}" class="btn btn-sm btn-warning 
          float-right"><i class="fas fa-arrow-alt-circle-left">
                    </i> Back</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <div class="col-sm-10">
        </div>
        <form class="form-horizontal" method="post" action="{{ url('/portfolio.' .$DataPortfolio->id_portfolio) }}" enctype="multipart/form-data">
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
                            <img src="{{asset('public/foto/'.$DataPortfolio->image)}}" class="img-fluid" width="200px;">
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
                    <label for="title" class="col-sm-3 col-form-label">
                        Title</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('title') 
              is-invalid @enderror" name="title" id="title" value="{{ $DataPortfolio->title}}">
                    </div>
                </div>
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="content" class="col-sm-3 col-form-label">
                        Content</label>
                    <div class="col-sm-7">
                        <textarea rows="5" class="form-control @error('content')  
              is-invalid @enderror" name="content" id="content" value="">{{ $DataPortfolio->content}}</textarea>
                    </div>
                </div>
                @error('content')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="link" class="col-sm-3 col-form-label">
                        Link</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('link') 
              is-invalid @enderror" name="link" id="link" value="{{ $DataPortfolio->link}}">
                    </div>
                </div>
                @error('link')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group row">
                    <label for="ability" class="col-sm-3 col-form-label">
                        Ability</label>
                    <div class="col-sm-7">
                        @if (!empty($DataAbility))
                        @foreach($DataAbility as $key => $ability)
                        <input type="checkbox" name="ability[]" value="{{ $ability->id_ability }}" @if (in_array($ability->id_ability, $PortfolioAbility))
                        checked
                        @endif

                        >{{ $ability->ability }}
                        @endforeach
                        @endif
                    </div>
                </div>


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