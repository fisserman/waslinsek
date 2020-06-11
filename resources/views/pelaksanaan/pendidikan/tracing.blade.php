@extends('/layout2/index') 


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REKALKULASI DAN TRACING TARGET DAN REALISASI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="/pelaksanaan/index">Pelaksanaan Pengawasan</a></li>
               <li class="breadcrumb-item"><a href="/pelaksanaan/pendidikan">Pendidikan</a></li>
              <li class="breadcrumb-item active">Rekalkulasi dan Tracing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              <h3 class="card-title">Form Edit</h3>
                <div class="card-tools">
                <!-- <button data-toggle="modal" data-target="#sasaran_pp" class="btn btn-danger btn-sm toastr"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Sasaran Program</span></button> -->
                </div>
              </div>
        <font size="2">
        <form name="rekalkulasi" class="form-horizontal" role="form" method="POST" action="/pelaksanaan/pendidikan/tracing/create">
         <div class="card-body">
            {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Pilih Surat Tugas</label>
            <div class="col-sm-9">
            <select name='perenc_st_id' class="form-control form-control-sm" id="perenc_st_id">
            <option >-- Pilih ST --</option>
              @foreach ($st as $st) 
                <option value="{{$st->id}}">{{$st->no_st}}</option>
                @endforeach
              </select>
          </div>
          </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Sasaran</label>
            <div class="col-sm-9">
            <select name='sasaran' class="form-control form-control-sm" id="sasaran">
            <option >-- Pilih Sasaran PP --</option>
              @foreach ($sasaran_pp as $program => $value)
                <option value="{{$program}}">{{$value}}</option>
                @endforeach
              </select>
          </div>
          </div>
         <div class="form-group row">
            <label class="col-sm-3 col-form-label">Indikator Sasaran PP</label>
            <div class="col-sm-9">
            <select name="indikator" class="form-control form-control-sm">
                    <option value="">--Pilih Indikator Sasaran--</option>
                </select>
            </div>
         </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jenjang Usia</label>
                <div class="col-sm-9">
                <select name="usia" class="form-control form-control-sm" placeholder="Select Usia" disabled="true">
                </select>
              </div>
             </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Target</label>
                <div class="col-sm-9">
                <select name="target" type="text" class="form-control form-control-sm" placeholder="Select Target" disabled="true">
                </select>
            </div>
            </div> 

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jumlah Penduduk</label>
                <div class="col-sm-9">
                <input name="penduduk" type="number" class="form-control form-control-sm" placeholder="Jumlah Penduduk">
            </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jumlah Siswa</label>
                <div class="col-sm-9">
                <input name="siswa" type="number" class="form-control form-control-sm" placeholder="Jumlah Siswa">
            </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jumlah ATS</label>
                <div class="col-sm-9">
                <input name="jumlah_ats" type="number" class="form-control form-control-sm" placeholder="Total Jumlah ATS" value="" jAutoCalc="{penduduk} - {siswa}">
            </div>
            </div>

            <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>          
            
        </div>
        </div>
      </form></font>
      </div>
    </div>

    <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Tabel Sasaran</h3>
                <div class="card-tools">
                <!-- <button data-toggle="modal" data-target="#sasaran_pp" class="btn btn-danger btn-sm toastr"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Sasaran Program</span></button> -->
                </div>
              </div>
              <div class="card-body">
              <table class="table table-sm table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Sasaran Program Prioritas</th>
                </tr>
              </thead>
              <tbody>
                @php 
                  $no = 0;
                @endphp 
                <tr>
                  @foreach ($sasaran as $sasaran)
                    @php
                      $no++
                    @endphp
                  <td scope="row">{{$no}}</td>
                  <td scope="row">{{$sasaran->nama_sasaran_pp}}</td>
                </tr>
              </tbody>
              @endforeach
                </table>
              </div>
            </div>

            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Tabel Indikator Sasaran </h3>
                <div class="card-tools">
                <!-- <button data-toggle="modal" data-target="#sasaran_pp" class="btn btn-danger btn-sm toastr"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Sasaran Program</span></button> -->
                </div>
              </div>
              <div class="card-body">
              <font size="2">
              <table class="table table-sm table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Meningkatnya Partisipasi Pendidikan</th>
                </tr>
              </thead>
              <tbody>
                @php 
                  $no = 0;
                @endphp 
                <tr>
                  @foreach ($indikator as $indikator)
                    @php
                      $no++
                    @endphp
                  <td scope="row">{{$no}}</td>
                  <td scope="row">{{$indikator->nama_idk_pp}}</td>
                </tr>
              </tbody>
              @endforeach
                </table></font>
              </div>
            </div>

            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">Tabel Indikator Sasaran </h3>
                <div class="card-tools">
                <!-- <button data-toggle="modal" data-target="#sasaran_pp" class="btn btn-danger btn-sm toastr"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Sasaran Program</span></button> -->
                </div>
              </div>
              <div class="card-body">
              <font size="2">
              <table class="table table-sm table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Meningkatnya Kualitas Pendidikan</th>
                </tr>
              </thead>
              <tbody>
                @php 
                  $no = 0;
                @endphp 
                <tr>
                  @foreach ($idk as $idk)
                    @php
                      $no++
                    @endphp
                  <td scope="row">{{$no}}</td>
                  <td scope="row">{{$idk->nama_idk_pp}}</td>
                </tr>
              </tbody>
              @endforeach
                </table></font>
              </div>
            </div>



        </div>
     </div>
  </section>
</div>

@endsection