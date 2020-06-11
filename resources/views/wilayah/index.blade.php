@extends('layout2.index')

@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
              
            @if(session('sukses'))
                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <i class="fa fa-check-circle">
                    {{session('sukses')}}
                </i></div>
            @endif

            <div class="container-fluid">
				<div class="panel panel-headline panel-primary">
                    <div class="panel-heading"><h3 class="panel-title">PILIH PEMERINTAH DAERAH
                    <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    </div>
                    </div>

                    <div class="panel-body" style="display: block;">
                        <form class="form-horizontal" role="form" method="POST" action="/wilayah/create">
                            {{ csrf_field() }}
                            <div class="form-group-sm">
                                <label class="label label-info">Pilih Daerah</label>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <select name="provinsi" class="form-control">
                                        <option value="">--Select provinsi--</option>
                                        @foreach ($provinsi as $provinsi => $value)
                                        <option value="{{ $provinsi }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="kabupaten" class="form-control">
                                     <option>--Select Kabupaten--</option>

                                 </select>
                                </div>

                                <div class="col-md-4">
                                    <select name="kecamatan" class="form-control">
                                     <option>--Select Kecamatan--</option>

                                 </select>
                             </div>
                            </div>
                         </div>

                         <div class="form-group-sm">
                            <label class="label label-info">Pilih Urusan</label>
                             <div class="form-group">
                             <div class="col-md-4">
                                    <select name="urusan" class="form-control">
                                        <option value="">--Select Urusan--</option>
                                        @foreach($urusan as $urusan => $value)
                                        <option value="{{ $urusan }}"> {{ $value }}</option>
                                        @endforeach   
                                    </select>
                                </div>

                             <div class="col-md-4">
                                    <select name="fungsi" class="form-control">
                                        <option value="">--Select Fungsi--</option>
                                        @foreach($fungsi as $fungsi => $value)
                                        <option value="{{ $fungsi }}"> {{ $value }}</option> 
                                        @endforeach 

                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="bidang" class="form-control">
                                     <option>--Select Bidang--</option>

                                 </select>
                                </div>
                            </div>
                             </div>

                            <div class="form-group-sm">
                            <label class="label label-info">Masukkan Nama Unit</label>
                            <div class="form-group">
                             <div class="col-md-6">
                             
                                    <select name="unit" class="form-control"> 
                                        <option>--Select Unit--</option>
                                  
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="subunit" class="form-control"> <option>--Select Sub Unit--</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                 <button type="submit" class="btn btn-primary">Tambah Satuan Kerja</button>
                                 <div class="col-md-1"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
                            </div>
                        </form>
             </div>	

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title"><center>INDEX SATUAN KERJA</center>
        </div></h3>

        <div class="panel-body">
			<table class="ui celled table table table-striped table-hover display table-sm" id="data_users_reguler" style="width:100%">
        <thead>
            <tr>
              <th scope="col" >Provinsi</th>
              <th scope="col" >Kabupaten</th>
              <th scope="col" >Urusan</th>
              <th scope="col" >Fungsi</th>
              <th scope="col" >Bidang</th>
              <th scope="col" >Unit</th>
              <th scope="col" >Sub Unit</th>
              <th scope="col" >Kriteria</th>
              <th scope="col" >Pertimbangan</th>
              <th scope="col" >Kesimpulan</th>
              <th scope="col" ><center>AKSI</center></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemda as $pemda)
            <tr @if($pemda -> check_pemda -> kesimpulan == "Terpenuhi") class="success" @endif
                @if($pemda -> check_pemda -> kesimpulan == "Tidak Terpenuhi") class="danger" @endif>
              <td scope="row" >{{$pemda -> provinsi -> name}}</td>
              <td scope="row" >{{$pemda -> kabupaten -> name}}</td>
              <td scope="row" >{{$pemda -> urusan -> nama_urusan}}</td>
              <td scope="row" >{{$pemda -> fungsi -> nama_fungsi}}</td>
              <td scope="row" >{{$pemda -> bidang -> nama_bidang}}</td>
              <td scope="row" >{{$pemda -> unit -> nama_unit}}</td>
              <td scope="row" >{{$pemda -> subunit -> nama_subunit}}</td>
              <td scope="row" >{{$pemda -> check_pemda -> kriteria}}</td>
              <td scope="row" >{{$pemda -> check_pemda -> pertimbangan}}</td>
              <td scope="row" >{{$pemda -> check_pemda -> kesimpulan}}</td>
              <td scope="row">
              <a data-toggle="modal" data-target="#staticBackdrop" class="cek-pemda btn btn-info btn-sm" title="Check" 
              data-id="{{$pemda->id}}"
              data-kriteria="{{$pemda->check_pemda -> kriteria}}"
              data-pertimbangan="{{$pemda -> check_pemda -> pertimbangan}}"
              data-kesimpulan="{{$pemda -> check_pemda -> kesimpulan}}"
              ><i class="fa fa-eye"></i></a>
              <a data-toggle="modal" data-target="#staticBackdrop2" class="btn btn-warning btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
              <a href="/pemda/{{$pemda->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Dihapus??')" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>

            @endforeach  
            
        </tbody>  
          </table>
          </div>
          <br>
        </div>
      </div>
    </div>
    </div>

@include("wilayah.\check")
@endsection