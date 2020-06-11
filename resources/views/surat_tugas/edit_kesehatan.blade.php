
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="modal-title" id="staticBackdropLabel">Tambah Surat Tugas</span>
                      <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="/st/update/kesehatan" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}} 
                          <div class="form-group input-group-sm">
                            <label for="exampleFormControlInput1">No ST</label>
                            <input name='no_st' id='no_st' type="text" class="form-control" id="exampleFormControlInput1" placeholder="No ST">
                          </div>
                          <div class="form-group">
                          <label for="exampleFormControlInput1">Tanggal ST</label>
                            <div class='input-group item-required input-group-sm'>
                            <input  
                              type='text' 
                              class='datepicker-here form-control' 
                              data-language="en"
                              name='tgl_st' id='tgl_st'
                              placeholder="Hari/Bulan/Tahun"
                              >
                              <div class="input-group-append">
                                <span class="input-group-text">
                                <i class="fa fa-calendar"></i></span>
                              </div>
                          </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Mulai</label>
                            <div class="input-group item-required input-group-sm">
                              <input 
                              name='tgl_mulai' 
                              type='text' 
                              class='datepicker-here form-control' 
                              data-language="en" 
                              placeholder="Hari/Bulan/Tahun" 
                              id='tgl_mulai'>
                              <div class="input-group-append">
                                <span class="input-group-text">
                              <i class="fa fa-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                          <div class="form-group">
                          <label for="exampleFormControlInput1">Tanggal Selesai</label>
                          <div class="input-group item-required input-group-sm">
                            <input 
                              name='tgl_selesai' 
                              type='text' 
                              class='datepicker-here form-control' 
                              data-language="en"
                              placeholder="Hari/Bulan/Tahun" 
                              id='tgl_selesai'>
                              <div class="input-group-append">
                                <span class="input-group-text">
                              <i class="fa fa-calendar"></i></span>
                            </div>
                            </div>
                          </div>
                          <div class="form-group input-group-sm">
                            <label for="exampleFormControlSelect1">Hari Penugasan</label>
                            <input name='hari_penugasan' id='hari_penugasan' type="text" class="form-control" id="exampleFormControlInput3" placeholder="Hari">
                          </div>
                          <div class="form-group input-group-sm">
                            <label for="exampleFormControlSelect1">Tugas</label>
                            <textarea name='tugas' id='tugas' class="form-control" id="exampleFormControlInput3" placeholder="Tugas"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Upload File ( Jika Belum / File Berubah )</label>
                            <div class="input-group">
                            <div class="custom-file">
                              <input name='file' type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Pilih File ST</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                          </div>
                          <div class="form-group">
                            <input name='id' id='id' type="hidden" class="form-control" id="exampleFormControlInput3" placeholder="Hari">
                          </div>
                          <!-- <div class="form-group">
                            <label for="exampleFormControlSelect2">Example multiple select</label>
                            <select multiple class="form-control" id="exampleFormControlSelect2">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div> -->
                          <!-- <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </form> -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div></form>
                  </div>
                </div>
              </div>
              </div>


