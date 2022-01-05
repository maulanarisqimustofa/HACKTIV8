@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-list"></i> Ability</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Ability</li>
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
                <i class="fas fa-list-ul"></i> Ability List</h3>
                <div class="card-tools">
                  <a href="{{url('/ability.tambah')}}" 
                  class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> New Ability</a>
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
                  <form method="get" 
                  action="{{url('/ability.cari')}}">
                  @csrf
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" 
                          id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn- 
                          primary"><i class="fas fa-search">
                          </i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                @if($JumlahDataAbility>0)

                <div class="col-sm-12">                  
                      <div class="alert alert-success" 
                       role="alert">Found {{ $JumlahDataAbility }} 
                        data keyword : {{ $cari }}
                      </div>
                </div>

              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="80%">Ability</th>
                        <th width="15%"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    @if (!empty($DataAbility))
                    @foreach($DataAbility as $key => $ability)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $ability->ability }}</td>
                        <td align="center">
                         <form action="{{url('/ability.'.$ability->id_ability)}}" 
                          method="Post" onsubmit="return 
                          confirm('Apakah data ingin dihapus?')">
                          @csrf
    
                          
                   <a href="{{url('/ability.'.$ability ->id_ability.'.edit')}}" 
                   class="btn btn-xs btn-info" title="Edit">
                   <i class="fas fa-edit"></i></a>
                          
                          <input type="hidden" value="DELETE" 
                          name="_method">
                          <button type="submit" 
                         class="btn btn-xs btn-info" 
                        title="Hapus">
                         <i class="fas fa-trash"></i></button> 
                          </form>                        
                        </td>
                      </tr>
                      @php
                      $no++
                      @endphp

                    @endforeach
                    @else
                    <tr><td colspan="5">there are no records
                    </td></tr>
                    @endif
                    </tbody>
                  </table>  
                  @else
                  <div class="col-sm-12">                  
                      <div class="alert alert-danger" 
                       role="alert">Data keyword : 
                        {{ $cari }}
                        is not found, 
                        <a href="{{url('/ability')}}"><input 
                        type="button" value="Back" class="btn btn-default"/></a>
                      </div>
                  @endif 
              </div>
              <!-- /.card-body -->
              <!-- <div></div> -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 
                 float-right">
                {{ $DataAbility->links() }}
                </ul>
              </div>
            </div>
            <!-- /.card -->

</section>
<!-- /.content -->
@endsection
