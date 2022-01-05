@extends('admin.layouts.app')
<!-- Content Header (Page header) -->
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user"></i> Profile</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Profile</li>
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
                <div class="card-tools">
                 <a href="{{url('/profil.'.Auth::user()->id.'.edit')}}" class="btn btn-sm btn-info float-right">
               <i class="fas fa-edit"></i> Edit Profile</a>
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
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas 
                       fa-user-circle"></i> 
                      <strong>PROFILE<strong></td>
                      </tr>    
                      <tr>
                        <td width="20%"><strong>Photo<strong></td>
                        <td><img 
                    src="{{asset('public/foto/'. Auth::user()->foto)}}" 
                    class="img-fluid" width="200px;"></td>
                      </tr>        
                      <tr>
                        <td width="20%"><strong>Name<strong></td>
                        <td width="80%">{{ Auth::user()->name }}
                        </td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%">{{ Auth::user()->email }}                    
                       </td>
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
