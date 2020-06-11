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
              <li class="breadcrumb-item active">Objek Pengawasan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

    <div class="container-card">
      <div class="row">
        <div class="col-4-lg ml-3">
          <div class="card card-hover" style="width:21.5rem;">
          <img src="{{asset('img/Gedung.jpg')}}" class="card-img-top" width="100%" height="225" focusable="false" role="img">
            <div class="card-body">
              <p class="card-title">Pengawasan Akuntabilitas dan Tata Kelola (ATKL)</p>
              <p class="card-text"><br>This card has supporting text below as a natural lead-in to additional content.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-info">INFO</button>
                </div>
                <small class="text-muted">coming soon</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4-lg ml-3">
          <div class="card card-hover" style="width:22rem;">
          <a href="/perencanaan/index2/PRKP">
            <img src="{{asset('img/Kesehatan.jpg')}}" class="card-img-top" width="100%" height="225" focusable="false" role="img"></a>
            <div class="card-body">
              <p class="card-title">Pengawasan Program Prioritas / Bidang (PRKP)</p>
              <p class="card-text"><br>This card has supporting text below as a natural lead-in to additional content.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-info">INFO</button>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4-lg ml-3">
          <div class="card card-hover" style="width:22rem;">
          <img src="{{asset('img/Tugas.jpg')}}" class="card-img-top" width="100%" height="225" focusable="false" role="img">
            <div class="card-body">
              <p class="card-title">Pengawasan Penugasan Presiden <br> (PP)</p>     
              <p class="card-text"><br>This card has supporting text below as a natural lead-in to additional content.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-info">INFO</button>
                </div>
                <small class="text-muted">coming soon</small>
              </div>
            </div>
          </div>
        </div>
        </div> 
    </div>
      </section>
      </div>
    </div>
  </div>
  </div>
    
@endsection


