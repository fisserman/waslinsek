
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <span class="modal-title" id="staticBackdropLabel">Indikator Sasaran Program Prioritas</span>
            <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <div class="row">
        <div class="modal-body">
        <form action="/sasaran/update/pp" method="POST">
          {{csrf_field()}}
          <div class="panel-body">
            <div class="form-group">
            <label >Nama Indikator</label>
            <input name='nama_idk_pp' id="nama_idk_pp" type="text" class="form-control" placeholder="Input Indikator">
            </div>
            <div class="form-group">
            <label >Satuan Indikator</label>
            <input name='stn_idk_pp' id='stn_idk_pp' type="text" class="form-control" placeholder="Input Satuan">
            </div>
            <div class="form-group">
            <label >Target Indikator</label>
            <input name='tgt_idk_pp' id='tgt_idk_pp' type="text" class="form-control"  placeholder="Input Target">
            </div>
            <div class="form-group">
            <label >Keterangan Lain</label>
            <input name='ktr_idk_pp' id='ktr_idk_pp' type="text" class="form-control" placeholder="Input Keteragan Lain">
            </div>
            <div class="form-group">
            <input name='id' id='id' type="hidden" class="form-control"  placeholder="Input Target">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div></form>
                  </div>
                </div>
              </div></form>      
      </div>
      </div>
</div>





  