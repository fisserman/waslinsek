@extends('/layout2/index') 


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Indeks Program</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Indeks Program</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

       @if(session('sukses'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-check-circle">
            {{session('sukses')}}
            </i></div>
      @endif

      @if(session('ubah'))
      <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-check-circle">
            {{session('ubah')}}
            </i></div>
      @endif

      @if(session('hapus'))
      <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-check-circle">
            {{session('hapus')}}
            </i></div>
      @endif

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">INDEKS SASARAN PROGRAM PRIORITAS</h3>
            <div class="card-tools"><a href="/sasaran/create_pp"><button class="btn btn-success btn-sm toastr"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Program Prioritas
            </span></button></a>
            <button type="button" class="btn btn-right btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
        </div>
        <div class="card-body">
        <table id="table1" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">Prioritas Nasional</th>
              <th scope="col">Program Prioritas</th>
              <th scope="col">Kegiatan Prioritas</th>
              <th scope="col">Sasaran Program Prioritas</th>
              <th scope="col">Indikator Program Prioritas</th>
              <th scope="col"><center>AKSI</center></th>
            </tr>
        </thead>
        <tbody>
            @foreach($program as $prog)
            <tr>
              <td scope="row">{{$prog -> prinas -> nama_pn}}</td>
              <td scope="row">{{$prog -> progpri -> nama_pp}}</td>
              <td scope="row">{{$prog -> kegpri -> nama_kp}}</td>
              <td scope="row">{{$prog -> sasaran_pp -> nama_sasaran_pp}}</td>
              <td scope="row"><a href="/sasaran/{{$prog->idk_sasaran_pp->id}}/edit" class="idk-pp" data-toggle="modal" data-target="#staticBackdrop" title="Edit"
              data-id="{{$prog->idk_sasaran_pp->id}}"
              data-nama_idk_pp="{{$prog->idk_sasaran_pp->nama_idk_pp}}"
              data-stn_idk_pp="{{$prog->idk_sasaran_pp->stn_idk_pp}}"
              data-tgt_idk_pp="{{$prog->idk_sasaran_pp->tgt_idk_pp}}"
              data-ktr_idk_pp="{{$prog->idk_sasaran_pp->ktr_idk_pp}}"
              >{{$prog -> idk_sasaran_pp -> nama_idk_pp}}</a></td>
              <td scope="row"><center>
              <a data-toggle="modal" data-target="#staticBackdrop3" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-pencil-alt"></i></a>
              <a href="/sasaran/{{$prog->id}}/delete_pp" class="btn btn-danger btn-sm delete" title="Hapus"><i class="fas fa-minus-circle"></i></a>
              </center></td>
            </tr>
            @endforeach
        </tbody>  
          </table>
         </div>
        </div>
     </div>
    </div>
  </section>
    
    @include('sasaran.\index2')

    <div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <span class="modal-title" id="staticBackdropLabel">Indikator Sasaran Kegiatan Prioritas</span>
      <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
          
      <div class="row">
        <div class="modal-body">
        <form action="/sasaran/update/kp" method="POST">
          {{csrf_field()}}
          <div class="panel-body">
            <div class="form-group">
            <label >Nama Indikator</label>
            <input name='nama_idk_kp' id='nama_idk_kp' type="text" class="form-control" placeholder="Input Indikator" >
            </div>
            <div class="form-group">
            <label >Satuan Indikator</label>
            <input name='stn_idk_kp' id='stn_idk_kp' type="text" class="form-control" placeholder="Input Satuan" >
            </div>
            <div class="form-group">
            <label >Target Indikator</label>
            <input name='tgt_idk_kp' id='tgt_idk_kp' type="text" class="form-control" placeholder="Input Target">
            </div>
            <div class="form-group">
            <label >Keterangan Lain</label>
            <input name='ktr_idk_kp' id='ktr_idk_kp' type="text" class="form-control" placeholder="Input Keteragan Lain">
            </div>
            <div class="form-group">
            <input name='id' id='id' type="hidden" class="form-control" placeholder="Input Target">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div></form>
            </div>
        </div>
        </div>     
      </div>
      </div>
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>

@include('sasaran.\indikator')
@endsection