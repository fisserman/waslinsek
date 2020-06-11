@extends('/layout/master') 


@section('content')
<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="panel panel-headline">
<div class="panel-heading"><h3 class="panel-title">TAMBAH OBJEK PENGAWASAN
</h3>
</div>
<div class="row">
<div class="modal-body">
    <form action="/pemilihan/make" method="POST">
        {{csrf_field()}}
        <div class="panel-body">
        <div class="form-group">
        <label>Pilih Pemda</label>
        <div class="col-6">
          <label>Provinsi</label>
          <select name='provinsi' class='form-control'>
            <option>--Select Provinsi--</option>
            <option value="{{$auth()->$user()->bpkp->id}}">
          </select>
        </div>

        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tim Pelaksana</label>
            <select name='pelaksana_tim' class="form-control" id="exampleFormControlInput1">
            <option>Tim 1</option>
            <option>Tim 2</option>
            <option>Tim 3</option>
            <option>Tim 4</option>
        </select>
        </select>
        </div>
        <div class="form-group">
        <label for="exampleFormControlSelect1">Objek Pengawasan</label>
        <select name='objek' class="form-control" id="exampleFormControlSelect2">
            <option>{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_1}}</option>
            <option>{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_2}}</option>
            <option>{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_3}}</option>
            <option>{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_4}}</option>
            <option>{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_5}}</option>
        </select>
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">No Surat Tugas</label>
        
        <select name='no_st' type="text" class="form-control" id="exampleFormControlInput3">
        @foreach($st as $obj_tahap)
        @if(auth()->user()->bpkp->id == $obj_tahap->bpkp_id)   
            <option>{{$obj_tahap->no_st}}</option>
        @endif
        @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tujuan Pengawasan</label>
            <input name='tujuan' type="text" class="form-control" id="exampleFormControlInput4" placeholder="Tujuan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Progres</label>
            <input name='progres' type="text" class="form-control" id="exampleFormControlInput5" placeholder="Progres %">
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div></form> 
    </div>
    </div>
</div>
