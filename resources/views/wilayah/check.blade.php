<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="modal-title" id="staticBackdropLabel">Tambah Surat Tugas</span>
                      <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="/wilayah/post" method="POST">
                          {{csrf_field()}}
                      <div class="form-group">
                      <label >Kriteria</label>
                      <select name='kriteria' id="kriteria" class="form-control" placeholder="Select Kriteria">
                          <option>Kesehatan</option>
                          <option>Pendidikan</option>
                          <option>Lainnya</option>
                      </select>
                      </div>
                      <div class="form-group">
                      <label >Pertimbangan</label>
                      <textarea name='pertimbangan' id="pertimbangan" type="text" class="form-control" placeholder="Input Pertimbangan"></textarea>
                      </div>
                      <div class="form-group">
                      <label >Kesimpulan</label>
                      <select name='kesimpulan' id="kesimpulan" type="text" class="form-control" placeholder="Select Kesimpulan">
                            <option>Terpenuhi</option>
                            <option>Tidak Terpenuhi</option>

                      </select>  
                      </div>
                      <div class="form-group">
                      <input name='id' id='id' type="hidden" class="form-control" placeholder="Input Target">
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


 
