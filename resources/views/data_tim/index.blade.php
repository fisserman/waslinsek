@extends('/layout/master') 


@section('content')    
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">

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

					<!-- OVERVIEW -->
					<div class="panel panel-headline">
          <div class="panel-heading">   
          <h3 class="panel-title">Data Tim                          
            <button style="float: right"><a class="btn btn-primary toastr"  data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Pegawai</span></a></button>
            <form style="float: right" method="GET" action="/data_tim/index/">
            <select onchange="this.form.submit()" name='cari' class="form-control" id="exampleFormControlSelect1">
                <option >Pilih Tim</option>
                <option >Tim 1</option>
                <option >Tim 2</option>
                <option >Tim 3</option>
                <option >Tim 4</option>
              </select>
              </form></h3>
        </div>
        <div class="panel-body">
        <table class="ui celled table table table-bordered table-striped table-hover" id="data_users_reguler" class="display" style="width:100%">
            <thead>
            <tr>
              <th>NIP</th>
              <th>NAMA PEGAWAI</th>
              <th>Kedudukan</th>
              <th>Jabatan</th>
              <th>Tim</th>
              <th><center>AKSI</center></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data_pegawai as $pegawai)
            <tr class="data-row">
              <td>{{$pegawai -> nip}}</td>
              <td>{{$pegawai -> nama_pegawai}}</td>
              <td>{{$pegawai -> kedudukan}}</td>
              <td>{{$pegawai -> jabatan}}</td>
              <td>@if($pegawai -> kode_tim == "Tim 1")
                <label class="label label-primary">
                {{$pegawai -> kode_tim}} 
                </label>
                @endif

                @if($pegawai -> kode_tim == "Tim 2")
                <label class="label label-success">
                {{$pegawai -> kode_tim}} 
                </label>
                @endif
                
                @if($pegawai -> kode_tim == "Tim 3")
                <label class="label label-warning">
                {{$pegawai -> kode_tim}} 
                </label>
                @endif 

                @if($pegawai -> kode_tim == "Tim 4")
                <label class="label label-danger">
                {{$pegawai -> kode_tim}} 
                </label>
                @endif 
              </td>
              <td>
                <center>
                <a data-toggle="modal" data-target="#Mymodal" class="edit-tim btn btn-warning btn-sm" 
                data-id="{{$pegawai->id}}" 
                data-pegawai="{{$pegawai->nama_pegawai}}" 
                data-kedudukan="{{$pegawai->kedudukan}}" 
                data-jabatan="{{$pegawai->jabatan}}" 
                data-kode_tim="{{$pegawai->kode_tim}}" 
                data-nip="{{$pegawai->nip}}">
                <i class="glyphicon glyphicon-pencil"></i>
                </a>
                <a href="/data_tim/{{$pegawai->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Dihapus??')" title="Hapus">
                <i class="glyphicon glyphicon-trash"></i>
               </a>
                </center>
              </td>
                @endforeach
            </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="modal-title" id="staticBackdropLabel">Tambah Pegawai</span>
                      <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="/pegawai/create" method="POST">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Masukkan NIP</label>
                            <input name='nip' type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIP">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Masukkan Nama Pegawai</label>
                            <input name='nama_pegawai' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Kedudukan</label>
                            <select name='kedudukan' class="form-control" id="exampleFormControlSelect1">
                              <option>Anggota Tim</option>
                              <option>Ketua Tim</option>
                              <option>Pengendali Teknis</option>
                              <option>Pengendali Mutu</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Jabatan</label>
                            <select name='jabatan' class="form-control" id="exampleFormControlSelect1">
                              <option>Auditor Pelaksana</option>
                              <option>Auditor Pertama</option>
                              <option>Auditor Muda</option>
                              <option>Auditor Madya</option>
                              <option>Auditor Terampil</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Anggota Tim</label>
                            <select name='kode_tim' class="form-control" id="exampleFormControlSelect1">
                              <option>Tim 1</option>
                              <option>Tim 2</option>
                              <option>Tim 3</option>
                              <option>Tim 4</option>
                            </select>
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
                          </div> -->
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      </div></form>
                  </div>
                </div>
              </div>

@include('data_tim.\edit')
@endsection

