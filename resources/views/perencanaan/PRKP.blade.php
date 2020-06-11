@extends('/layout2/index') 


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PEMILIHAN OBJEK PENGAWASAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="/perencanaan/index2">Objek Pengawasan</a></li>
              <li class="breadcrumb-item active">PRKP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pengawasan Program Prioritas / Bidang (PRKP)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">

        <div class="col-4-lg">
          <div class="card card-hover" style="width:21rem;">
          <a href="/surat_tugas/kependudukan">
          <img src="{{asset('img/kependudukan.jpg')}}" class="card-img-top" width="100%" height="225" focusable="false" role="img"></a>
            <div class="card-body">
              <p class="card-title">Pengawasan Program Prioritas / Bidang Administrasi Kependudukan</p>
              <p class="card-text"><br>This card has supporting text below as a natural lead-in to additional content.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-info">INFO</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4-lg ml-3">
          <div class="card card-hover" style="width:21rem;">
          <a href="/surat_tugas/pendidikan">
            <img src="{{asset('img/edukasi.jpg')}}" class="card-img-top" width="100%" height="225" focusable="false" role="img"></a>
            <div class="card-body">
              <p class="card-title">Pengawasan Program Prioritas / Bidang Pendidikan</p>
              <p class="card-text"><br>This card has supporting text below as a natural lead-in to additional content.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-info">INFO</button>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4-lg ml-3">
          <div class="card card-hover" style="width:21rem;">
          <a href="/surat_tugas/kesehatan">
          <img src="{{asset('img/kesehatan_2.jpg')}}" class="card-img-top" width="100%" height="225" focusable="false" role="img"></a>
            <div class="card-body">
              <p class="card-title">Pengawasan Program Prioritas / Bidang Kesehatan</p>     
              <p class="card-text"><br>This card has supporting text below as a natural lead-in to additional content.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-info">INFO</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
        </div> 
      </section>
    </div>
      </div>
    </div>
  </div>
  </div>
    
@endsection


