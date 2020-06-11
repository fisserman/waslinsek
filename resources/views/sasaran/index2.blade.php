<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">INDEKS SASARAN KEGIATAN PRIORITAS</h3>
            <div class="card-tools">
            <a href="/sasaran/create_kp"><button class="btn btn-right btn-primary btn-sm toastr"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah Kegiatan Prioritas</span></button></a>
            <button type="button" class="btn btn-right btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
          </div>

        <div class="card-body">
        <table id="table3" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">Prioritas Nasional</th>
              <th scope="col">Program Prioritas</th>
              <th scope="col">Kegiatan Prioritas</th>
              <th scope="col">Sasaran Kegiatan Prioritas</th>
              <th scope="col">Indikator Kegiatan Prioritas</th>
              <th scope="col"><center>AKSI</center></th>
            </tr>
        </thead>
        <tbody>
          @foreach($program_kp as $prog)
            <tr>
              <td scope="row">{{$prog -> prinas -> nama_pn}}</td>
              <td scope="row">{{$prog -> progpri -> nama_pp}}</td>
              <td scope="row">{{$prog -> kegpri -> nama_kp}}</td>
              <td scope="row">{{$prog -> sasaran_kp -> nama_sasaran_kp}}</td>
              <td scope="row"><a href="" data-toggle="modal" data-target="#staticBackdrop2" class="idk-kp"  title="Edit"
              data-id="{{$prog->idk_sasaran_kp->id}}"
              data-nama_idk_kp="{{$prog->idk_sasaran_kp->nama_idk_kp}}"
              data-stn_idk_kp="{{$prog->idk_sasaran_kp->stn_idk_kp}}"
              data-tgt_idk_kp="{{$prog->idk_sasaran_kp->tgt_idk_kp}}"
              data-ktr_idk_kp="{{$prog->idk_sasaran_kp->ktr_idk_kp}}">
              {{$prog -> idk_sasaran_kp -> nama_idk_kp}}</a></td>

              <td scope="row"><center>
              <a data-toggle="modal" data-target="#staticBackdrop3" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-pencil-alt"></i></a>
              <a href="/sasaran/{{$prog->id}}/delete_kp" class="btn btn-danger btn-sm delete" title="Hapus"><i class="fa fa-trash"></i></a>
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
