@extends('/layout2/index') 


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INFORMASI UMUM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="/pelaksanaan/index">Pelaksanaan Pengawasan</a></li>
              <li class="breadcrumb-item"><a href="/pelaksanaan/pendidikan">Bidang Pendidikan</a></li>
              <li class="breadcrumb-item active">Informasi Umum</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              <h3 class="card-title">Form Edit</h3>
                <div class="card-tools">
                <!-- <button data-toggle="modal" data-target="#sasaran_pp" class="btn btn-danger btn-sm toastr"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Sasaran Program</span></button> -->
                </div>
              </div>
        <form class="form-horizontal" role="form" method="POST" action="/pelaksanaan/pendidikan/informasi/create">
         <div class="card-body">
            {{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pilih Surat Tugas</label>
            <div class="col-sm-10">
            <select name='perenc_st_id' class="form-control" id="perenc_st_id">
            <option >-- Pilih ST --</option>
              @foreach ($st as $st) 
                <option value="{{$st->id}}">{{$st->no_st}}</option>
                @endforeach
              </select>
          </div>
          </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Provinsi</label>
            <div class="col-sm-10">
            <select name="provinsi" class="form-control">
                    <option value="">--Select Provinsi--</option>
                    @foreach ($provinsi as $provinsi => $value)
                    <option value="{{ $provinsi }}"> {{ $value }}</option>   
                    @endforeach
                </select>
            </div>
         </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kabupaten / Kota</label>
                <div class="col-sm-10">
                <select name="kabupaten" class="form-control">
                    <option>--Select Kabupaten--</option>
                </select>
              </div>
             </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kepala Daerah</label>
                <div class="col-sm-10">
                <input name="kepala_daerah" type="text" class="form-control" placeholder="Nama Kepala Daerah">
                </select>
            </div>
            </div> 

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">OPD</label>
                <div class="col-sm-10">
                <input name="opd" type="text" class="form-control" placeholder="Nama OPD">
                </select>
            </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kepala OPD</label>
                <div class="col-sm-10">
                <input name="kepala_opd" type="text" class="form-control" placeholder="Nama Kepala OPD">
            </div>
            </div>

            <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>          
            
        </div>
        </div>
    </form>
</div>
        </div>
        </div>
     </div>
  </section>
</div>

@endsection