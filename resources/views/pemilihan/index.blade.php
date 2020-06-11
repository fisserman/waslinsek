@extends('/layout/master') 


@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
	<div class="main-content">
     <div class="container-fluid">
        <!-- OVERVIEW -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Pemilihan Objek Pengawasaan<button><a type="button" class="btn right btn-primary btn-toastr"  data-toggle="modal" data-target="#staticBackdrop2"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah </span></a></button>
             </div></h3>

    @if(session('sukses2'))
      <div class="alert alert-success" role="alert">
          {{session('sukses2')}}
      </div>
      @endif
        <div class="panel-body">
			<table class="ui celled table table table-bordered table-striped table-hover">
        <thead>
            <tr>
              <th scope="col" width="10%">Tim</th>
              <th scope="col">Objek Pengawasan</th>
              <th scope="col">No ST</th>
              <th scope="col">Tujuan</th>
              <th scope="col">Progres</th>
              <th scope="col" width="15%"><center>AKSI</center></th>
            </tr>
        </thead>
        <tbody>
            @foreach($team as $team)
            <tr>
              <td scope="row">{{$team -> pelaksana_tim}}</td>
              <td scope="row">{{$team -> objek}}</td>
              <td scope="row">{{$team -> no_st}}</td>
              <td scope="row">{{$team -> tujuan}}</td>
              <td scope="row">{{$team -> progres}}</td>
              <td scope="row"><center>
              <a data-toggle="modal" data-target="#staticBackdrop" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
              <a href="/pemilihan/{{$team->id}}/delete1" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Dihapus??')" title="Hapus"><i class="fa fa-trash"></i></a>
              </center></td>
            </tr>


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
        <form action="/pemilihan/{{$team->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Tim Pelaksana</label>
                <select name='pelaksana_tim' class="form-control" id="exampleFormControlInput1">
                <option value="Tim 1" @if($team->pelaksana_tim == "Tim 1") selected @endif>Tim 1</option>
                <option value="Tim 2" @if($team->pelaksana_tim == "Tim 2") selected @endif>Tim 2</option>
                <option value="Tim 3" @if($team->pelaksana_tim == "Tim 3") selected @endif>Tim 3</option>
                <option value="Tim 4" @if($team->pelaksana_tim == "Tim 4") selected @endif>Tim 4</option>
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
            @if(auth()->user()->bpkp->perenc_objek->id == $obj_tahap->perenc_objek_id)   
                <option>{{$obj_tahap->no_st}}</option>
            @endif
            @endforeach
            </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tujuan Pengawasan</label>
                <input name='tujuan' type="text" class="form-control" id="exampleFormControlInput4" placeholder="Tujuan" value="{{$team->tujuan}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Progres</label>
                <input name='progres' type="text" class="form-control" id="exampleFormControlInput5" placeholder="Progres %" value="{{$team->progres}}">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div></form> 
        </div>
        </div>
        </div>

            @endforeach
        </tbody>  
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="staticBackdropLabel">Tambah Objek Pengawasan</span>
                <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/pemilihan/make" method="POST">
                    {{csrf_field()}}
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


    
@endsection


