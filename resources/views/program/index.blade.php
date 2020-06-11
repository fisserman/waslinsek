@extends('/layout/master') 


@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<div class="panel panel-headline panel-primary">
        <div class="panel-heading"><h3 class="panel-title">PILIH PROGRAM PEMERINTAH
                    <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    </div>
                  
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/program/create">
                            {{ csrf_field() }}
                            <div class="form-group-sm">
                                <div class="form-group">
                                    <label>Prioritas Nasional</label>
                                    <select name="prinas" class="form-control">
                                        <option value="">--Select Prioritas Nasional--</option>
                                        @foreach ($prinas as $prinas => $value)
                                        <option value="{{ $prinas }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                     <label>Program Prioritas</label>
                                    <select name="program" class="form-control">
                                     <option>--Select Program Prioritas--</option>
                                 </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Kegiatan Prioritas</label>
                                    <select name="kegiatan" class="form-control">
                                     <option>--Select Kegiatan Prioritas--</option>
                                 </select>
                             </div>
                            </div>
                          </div>
                             <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah Program</button>          
                             <div class="col-md-1"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
                            </div>
                     </form>
             </div>
             		
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title"><center>Index Program Pengawasan</center>
        </div></h3>

    @if(session('sukses'))
      <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <i class="fa fa-check-circle">
          {{session('sukses')}}
      </i></div>
      @endif
        <div class="panel-body">
			<table class="table table-bordered table-striped table-hover" id="data_users_reguler" class="display" style="width:100%">
        <thead>
            <tr>
              <th scope="col" width="25%">Prioritas Nasional</th>
              <th scope="col" width="25%">Program Prioritas</th>
              <th scope="col" width="25%">Kegiatan Prioritas</th>
              <th scope="col" width="12%"><center>AKSI</center></th>
            </tr>
        </thead>
        <tbody>
            @foreach($program as $program)
            <tr>
              <td scope="row">{{$program -> prinas -> nama_pn}}</td>
              <td scope="row">{{$program -> progpri -> nama_pp}}</td>
              <td scope="row">{{$program -> kegpri -> nama_kp}}</td>
              <td scope="row">
              <a data-toggle="modal" data-target="#staticBackdrop2" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
              <a href="/program/{{$program->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Dihapus??')" title="Hapus"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach            
        </tbody>  
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection


