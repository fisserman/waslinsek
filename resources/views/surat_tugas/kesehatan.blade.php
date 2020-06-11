@extends('/layout2/index') 


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h3>ST Pengawasan Program Prioritas / Bidang Kesehatan</h3>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="/perencanaan/index2">Objek Pengawasan</a></li>
              <li class="breadcrumb-item active"><a href="/perencanaan/index2/PRKP">PRKP</a></li>
              <li class="breadcrumb-item active">Surat Tugas</li>
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
          <div class="card card-success">
            <div class="card-header">
            <h5 class="card-title">Tabel Surat Tugas</h5>
            <div class="card-tools">
            <button type="button" class="btn right btn-primary btn-sm btn-toastr"  data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah ST</span></button>
            <button type="button" class="btn right btn-primary btn-sm btn-toastr" ><i class="fa fa-plus-square"></i><span id='class_name'> Import Data ST / SKI</span></button>
            <button type="button" class="btn right btn-primary btn-sm btn-toastr" ><i class="fa fa-plus-square"></i><span id='class_name'> Import Data SIMA</span></button>
            </div>
            </div>
        <div class="card-body">
        <font size="2">
        <table id="table1" class="table table-bordered table-striped table-hover table-sm">
            <thead>
            <tr>
              <th scope="col">No ST</th>
              <th scope="col">Tugas</th>
              <th scope="col">Tanggal ST</th>
              <th scope="col">Hari Penugasan</th>
              <th scope="col">Tgl Mulai</th>
              <th scope="col">Tgl Selesai</th>
              <th scope="col">Unit Pelaksana</th>
              <th scope="col">Diupdate Oleh</th>
              <th scope="col">Upload File</th>
              <th scope="col"><center>AKSI</center></th>
            </tr>
            </thead>
            <tbody>
              @foreach($surat_tugas as $st)
            <tr>
              <td scope="row">{{$st -> no_st}}</td>
              <td scope="row">{{$st -> tugas}}</td>
              <td scope="row">{{$st -> tgl_st}}</td>
              <td scope="row">{{$st -> hari_penugasan}}</td>
              <td scope="row">{{$st -> tgl_mulai}}</td>
              <td scope="row">{{$st -> tgl_selesai}}</td>
              <td scope="row">{{$st -> unit_pelaksana}}</td>
              <td scope="row">{{$st -> updated_by}}</td>
              <td scope="row">@if($st -> file != null)
              <a href="/surat_tugas/download/{{$st->id}}" class="badge badge-success">File Sudah Diupload</a>
              @endif
              @if($st -> file == null)
              <label class="badge badge-danger">Belum Upload File</label>
              @endif
              <td scope="row"><center>
              <a data-toggle="modal" data-target="#staticBackdrop2" class="edit-st btn btn-warning btn-sm"title="Edit"
              data-id="{{$st->id}}"
              data-no_st="{{$st -> no_st}}"
              data-tgl_st="{{$st -> tgl_st}}"
              data-hari_penugasan="{{$st -> hari_penugasan}}"
              data-tgl_mulai="{{$st -> tgl_mulai}}"
              data-tgl_selesai="{{$st -> tgl_selesai}}"
              data-tugas="{{$st -> tugas}}"
              data-file="{{$st -> file}}" >
              <i class="fas fa-pencil-alt"></i></a>
              <a href="/surat_tugas/{{$st->id}}/delete" class="btn btn-danger btn-sm delete" title="Hapus"><i class="fas fa-minus-circle"></i></a>
            </center></td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </font>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="modal-title" id="staticBackdropLabel">Tambah Surat Tugas</span>
                      <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="/st/create/kesehatan" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="form-group input-group-sm">
                            <label for="exampleFormControlInput1">No ST</label>
                            <input name='no_st' type="text" class="form-control" id="exampleFormControlInput1" placeholder="No ST">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal ST</label>
                            <div class="input-group item-required  input-group-sm">                            
                            <input 
                            name='tgl_st' 
                            type="text" 
                            class="datepicker-here form-control"  
                            data-language="en" 
                            id="datepicker" 
                            placeholder="Hari/Bulan/Tahun">
                            <div class="input-group-append">
                            <span class="input-group-text">
                          <i class="fa fa-calendar"></i></span>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Tanggal Mulai</label>
                          <div class="input-group item-required input-group-sm">
                            <input 
                            name='tgl_mulai' 
                            type='text' 
                            class='datepicker-here form-control' 
                            data-language="en" 
                              id="datepicker" 
                              placeholder="Hari/Bulan/Tahun">
                              <div class="input-group-append">
                                <span class="input-group-text">
                          <i class="fa fa-calendar"></i></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Selesai</label>
                            <div class="input-group input-group-sm">
                            <input 
                            name='tgl_selesai' 
                            type='text' 
                              class='datepicker-here form-control' 
                              data-language="en"
                              id="datepicker" 
                              placeholder="Hari/Bulan/Tahun">
                              <div class="input-group-append">
                                <span class="input-group-text">
                          <i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group input-group-sm">
                      <label for="exampleFormControlSelect1">Hari Penugasan</label>
                      <input name='hari_penugasan' type="text" class="form-control" id="exampleFormControlInput3" placeholder="Hari Penugasan">
                    </div>
                    <div class="form-group input-group-sm">
                            <label for="exampleFormControlSelect1">Tugas</label>
                            <textarea name='tugas' type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tugas"></textarea>
                          </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Upload File</label>
                      <div class="input-group">
                      <div class="custom-file">
                        <input name='file' type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih File ST</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    </div>

                          <!-- <div class="form-group">
                            <label for="exampleFormControlSelect2">Example multiple select</label>
                            <select multiple class="form-control" id="exampleFormControlSelect2">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div> -->
                          <!-- <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </form> -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div></form>
                  </div>
                </div>
              </div>

@include('surat_tugas.\edit_kesehatan')

@endsection

