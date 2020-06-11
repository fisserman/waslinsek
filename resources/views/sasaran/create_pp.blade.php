@extends('/layout2/index') 


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INDIKATOR SASARAN PROGRAM PRIORITAS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Indeks Program</a></li>
              <li class="breadcrumb-item active">Sasaran Program Prioritas</li>
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
                <button data-toggle="modal" data-target="#sasaran_pp" class="btn btn-danger btn-sm toastr"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Sasaran Program</span></button>
                </div>
              </div>
        <form class="form-horizontal" role="form" method="POST" action="/create/idk_pp">
         <div class="card-body">
            {{ csrf_field() }}
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

            <div class="form-group">
            <div class="row">
            <div class="col-md-8">
                <label>Sasaran Program Prioritas</label>
                <select name="sasaran_pp" class="form-control">
                <option>--Select Sasaran Program Prioritas--</option>
                </select>
            </div>
            <div class="col-md-4">
                <label>Bidang Pengawasan</label>
                <select name="objek_pengawasan_id" class="form-control">
                <option value=21>Bidang Kependudukan</option>
                <option value=22>Bidang Pendidikan</option>
                <option value=23>Bidang Kesehatan</option>
                </select>
            </div>
            </div>
            </div>

            <div class="card bg-info col-md-12">
                    <div class="card-header">INDIKATOR SASARAN PROGRAM PRIORITAS</div>

            <div class="form-group">
                <label>Nama Indikator</label>
                <input name="nama_idk_pp" type="text" class="form-control" placeholder="Input Nama Indikator">
            </div>
            
            <div class="form-group">
            <div class="row">
            <div class="col-md-3">
                <label>Satuan Indikator</label>
                <input name="stn_idk_pp" type="text" class="form-control" placeholder="Input Satuan Indikator">
            </div>
              <div class="col-md-3">
                <label>Target Indikator </label>
                <input name="tgt_idk_pp" type="text" class="form-control" placeholder="Input Target Indikator">
              </div>
            <div class="col-md-6">
                <label>Keterangan Lain</label>
                <input name="ktr_idk_pp" type="text" class="form-control" placeholder="Contoh: Jenjang Usia 5 - 10 tahun">
            </div>
            </div>
            </div>
            </div>

            <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>          
            
        </div>
        </div>
    </form>
</div>

        <div class="modal fade" id="sasaran_pp" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <span class="modal-title" id="staticBackdropLabel">Tambah Sasaran Program Prioritas</span>
                 <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
                
            <div class="row">
                <div class="modal-body">
                <form action="/create/sasaran_pp" method="POST">
                {{csrf_field()}}
                <div class="panel-body">
                <div class="form-group">
                <label>Prioritas Nasional</label>
                    <select name="prinas" class="form-control">
                        <option value="">--Select Prioritas Nasional--</option>
                        @foreach ($tasnas as $prinas => $value)
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
                    <div class="form-group">
                    <label>Sasaran Program Prioritas</label>
                    <input name='nama_sasaran_pp' id='nama_sasaran_pp' type="text" class="form-control" required="true" invalid="true" placeholder="Input Sasaran Program Baru" >
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
  </section>
</div>

@endsection