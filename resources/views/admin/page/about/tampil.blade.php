@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-database"></i> About</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> About</li>
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
              
              <!-- /.card-header -->
              <div class="card-body">
              @if (session('status'))
                <div class="col-sm-12">
                    <div class="alert alert-success" role="alert">
                    {!! session()->get('status') !!}</div>
                </div>
              @endif
              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        
                        <th width="30%">Title</th>
                        <th width="50%">Content</th>
                        <th width="20%"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    @if (!empty($DataAbout))
                    @foreach($DataAbout as $key => $about)
                    <tr>
                        <td>{{ $about->title }}</td>
                        <td>{{ $about->content }}</td>
                        <td align="center">
                         
                          @csrf
                   
                          
                   <a href="{{url('/about.'.$about->id_about.'.edit')}}" 
                   class="btn btn-xs btn-info" title="Edit">
                   <i class="fas fa-edit"></i> Edit</a>
                          
                                              
                        </td>
                      </tr>

                    @endforeach
                    @else
                    <tr><td colspan="5">there are no records
                    </td></tr>
                    @endif
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <!-- <div></div> -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 
                 float-right">
                {{ $DataAbout->links() }}
                </ul>
              </div>
            </div>
            <!-- /.card -->

</section>
<!-- /.content -->
@endsection
