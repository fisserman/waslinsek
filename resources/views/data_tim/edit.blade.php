
<div class="modal fade" id="Mymodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <span class="modal-title" id="staticBackdropLabel">Ubah Pegawai</span>
            <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
        <form id="productForm" name="productForm" method="POST" action="/data_tim/update">
          {{csrf_field()}}
            <div class="form-group">
            <label for="exampleFormControlInput1">Masukkan NIP</label>
            <input name='nip' type="text" class="form-control" for="modal-input-nip" id="nip" placeholder="NIP" >
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Masukkan Nama Pegawai</label>
            <input name='nama_pegawai' type="text" class="form-control" for="modal-input-nama" id="nama_pegawai" placeholder="Nama">
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Kedudukan</label>
            <select name='kedudukan' class="form-control" for="modal-input-kedudukan" id="kedudukan" >
                <option value="Anggota Tim" @if($pegawai->jabatan == "Anggota Tim") selected @endif>Anggota Tim</option>
                <option value="Ketua Tim" @if($pegawai->jabatan == "Ketua Tim") selected @endif>Ketua Tim</option>
                <option value="Pengendali Teknis" @if($pegawai->jabatan == "Pengendali Teknis") selected @endif>Pengendali Teknis</option>
                <option value="Pengendali Mutu" @if($pegawai->jabatan == "Pengendali Mutu") selected @endif>Pengendali Mutu</option>
            </select>
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Jabatan</label>
            <select name='jabatan' class="form-control" id="jabatan" >
                <option value="Auditor Pelaksana" @if($pegawai->jabatan == "Auditor Pelaksana") selected @endif>Auditor Pelaksana</option>
                <option value="Auditor Pertama" @if($pegawai->jabatan == "Auditor Pertama") selected @endif>Auditor Pertama</option>
                <option value="Auditor Muda" @if($pegawai->jabatan == "Auditor Muda") selected @endif>Auditor Muda</option>
                <option value="Auditor Madya" @if($pegawai->jabatan == "Auditor Madya") selected @endif>Auditor Madya</option>
            </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Anggota Tim</label>
                  <select name='kode_tim' class="form-control" id="kode_tim">
                    <option value="Tim 1" @if($pegawai->kode_tim == "Tim 1") selected @endif>Tim 1</option>
                    <option value="Tim 2" @if($pegawai->kode_tim == "Tim 2") selected @endif>Tim 2</option>
                    <option value="Tim 3" @if($pegawai->kode_tim == "Tim 3") selected @endif>Tim 3</option>
                    <option value="Tim 4" @if($pegawai->kode_tim == "Tim 4") selected @endif>Tim 4</option>
                  </select>
                  </div>
            <div class="form-group">
            <input name='id' type="hidden" class="form-control" for="modal-input-nip" id="id">
            </div>
                    <div class="modal-footer">
                      <button type="button" class="edit btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" id="saveBtn" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>    
      </div>
      </div>
