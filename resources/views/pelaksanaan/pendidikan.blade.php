@extends('/layout2/index') 


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>PELAKSANAAN PENGAWASAN</h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="/pelaksanaan/index">Pelaksanaan Pengawasan</a></li>
              <li class="breadcrumb-item active">Pendidikan</li>
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
                <h3 class="card-title">Pengawasan Program Prioritas / Bidang Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
              <div class="container-card">
                <div class="row">
                  <div class="col-3">
                    <div class="card card-hover" style="width:15rem;">
                    <a href="/pelaksanaan/pendidikan/informasi">
                    <img src="{{asset('img/informasi_umum.jpg')}}" class="card-img-top" width="100%" height="155" focusable="false" role="img"></a>
                      <div class="card-body">
                        <p class="card-title">INFORMASI UMUM</p>
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
                  <div class="col-3">
                    <div class="card card-hover" style="width:15rem;">
                    <a href="/pelaksanaan/pendidikan/tracing">
                    <img src="{{asset('img/tracking.jpg')}}" class="card-img-top" width="100%" height="155" focusable="false" role="img">
                      <div class="card-body"></a>
                        <p class="card-title">REKALKULASI DAN TRACING ATAS TARGET DAN REALISASI</p>
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
                  <div class="col-3">
                    <div class="card card-hover" style="width:15rem;">
                    <a href="/perencanaan/index2/PRKP">
                      <img src="{{asset('img/identifikasi.jpg')}}" class="card-img-top" width="100%" height="155" focusable="false" role="img"></a>
                      <div class="card-body">
                        <p class="card-title">IDENTIFIKASI MASYARAKAT BELUM TERLAYANI</p>
                        <p class="card-text"><br>This card has supporting text below as a natural lead-in to additional content.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-sm btn-info">INFO</button>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-hover" style="width:15rem;">
                    <img src="{{asset('img/kebijakan.jpg')}}" class="card-img-top" width="100%" height="155" focusable="false" role="img">
                      <div class="card-body">
                        <p class="card-title">KEBIJAKAN</p>     
                        <p class="card-text"><br>Keselarasan Kebijakan Pemerintah Daerah Dalam Pencapaian Rencana Kerja Pemerintah</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-info">INFO</button>
                          </div>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-hover" style="width:15rem;">
                    <img src="{{asset('img/lembaga.jpg')}}" class="card-img-top" width="100%" height="155" focusable="false" role="img">
                      <div class="card-body">
                        <p class="card-title">KELEMBAGAAN</p>     
                        <p class="card-text"><br>Keberadaan Kelembagaan Pemerintah Daerah dalam Pencapaian Rencana Kerja Pemerintah</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-info">INFO</button>
                          </div>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-hover" style="width:15rem;">
                    <img src="{{asset('img/penganggaran.jpg')}}" class="card-img-top" width="100%" height="155" focusable="false" role="img">
                      <div class="card-body">
                        <p class="card-title">PERENCANAAN & PENGANGGARAN</p>     
                        <p class="card-text"><br>Keselarasan Perencanaan & Penganggaran Pemerintah Daerah Dalam mendukung Pencapaian Rencana Kerja Pemerintah</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-info">INFO</button>
                          </div>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-hover" style="width:15rem;">
                    <img src="{{asset('img/progress.jpg')}}" class="card-img-top" width="100%" height="155" focusable="false" role="img">
                      <div class="card-body">
                        <p class="card-title">CAPAIAN / PROGRESS  IMPLEMENTASI</p>     
                        <p class="card-text"><br>Progress Pencapaian Program/Kegiatan Pemerintah Daerah yang mendukung Rencana Kerja Pemerintah</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-info">INFO</button>
                          </div>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-hover" style="width:15rem;">
                    <img src="{{asset('img/dampak.jpg')}}" class="card-img-top" width="100%" height="155" focusable="false" role="img">
                      <div class="card-body">
                        <p class="card-title">DAMPAK</p>     
                        <p class="card-text"><br>Dampak Program/Kegiatan Pemerintah Daerah yang mendukung Rencana Kerja Pemerintah bagi Masyarakat</p>
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


