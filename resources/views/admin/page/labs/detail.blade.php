@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-eye"></i> Detail Labs</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{url('/labs')}}">Labs</a>
                    </li>
                    <li class="breadcrumb-item active">Detail
                        Labs</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('main-content')
<section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="{{url('/labs')}}" class="btn btn-sm 
                  btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> 
                 Back</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-eye
                     "></i> <strong>Data Labs<strong></td>
                      </tr>                      
                      <tr>
                        <td><strong>Image<strong></td>
                        <td><img 
                    src="{{asset('public/foto/'.$DataLabs->image)}}" 
                    class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>Title<strong></td>
                        <td width="80%">{{ $DataLabs->title}}</td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Content<strong></td>
                        <td width="80%">{{ $DataLabs->content}}</td>
                      </tr>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>

@endsection