@extends('/layout/master') 


@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
              @foreach ($objek as $objek) 
              <h3 class="panel-title">Objek Pengawasaan Pilihan
                <!-- <button style="float: right"><a href="/perencanaan/{{$objek->id}}/delete2" class="btn btn-danger btn-sm"  onclick="return confirm('Yakin ingin Dihapus??')" title="Hapus"><i class="fa fa-trash"><span id='class_name'> Hapus</span></i></a></button> -->
              @if (auth()->user()->role == 'admin')
              <button style="float: right"><a class="btn btn-warning btn-toastr" title="Edit"  data-toggle="modal" data-target="#staticBackdrop1"><i class="fa fa-edit"></i><span id='class_name'> Edit</span></a></button></h3>
              @endif
              @endforeach
            </div>
    @if(session('sukses1'))
      <div class="alert alert-success" role="alert">
          {{session('sukses1')}}
      </div>
      @endif
        <div class="panel-body">
			<table class="table table-hover table-bordered">
        <thead>
            <tr>
              <th scope="col" width="15%">Obj Pengawasan</th>
              <th scope="col">Uraian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td scope="row">Obj Pengawasan 1</td>
              <td scope="row">{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_1}}</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
              <td scope="row">Obj Pengawasan 2</td>
              <td scope="row">{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_2}}</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
              <td scope="row">Obj Pengawasan 3</td>
              <td scope="row">{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_3}}</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
              <td scope="row">Obj Pengawasan 4</td>
              <td scope="row">{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_4}}</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
              <td scope="row">Obj Pengawasan 5</td>
              <td scope="row">{{auth()->user()->bpkp->perenc_objek->obj_pengawasan_5}}</td>
            </tr>
        </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="staticBackdrop1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <span class="modal-title" id="staticBackdropLabel">Tambah Objek Pengawasan</span>
            <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/perencanaan/{{$objek->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Objek Pengawasan 1</label>
                    <input name='obj_pengawasan_1' type="text" class="form-control" id="exampleFormControlInput1" value="{{$objek->obj_pengawasan_1}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Objek Pengawasan 2</label>
                    <input name='obj_pengawasan_2' type="text" class="form-control" id="exampleFormControlInput1" value="{{$objek->obj_pengawasan_2}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Objek Pengawasan 3</label>
                    <input name='obj_pengawasan_3' type="text" class="form-control" id="exampleFormControlInput1" value="{{$objek->obj_pengawasan_3}}">
                 </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Objek Pengawasan 4</label>
                     <input name='obj_pengawasan_4' type="text" class="form-control" id="exampleFormControlInput1" value="{{$objek->obj_pengawasan_4}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Objek Pengawasan 5</label>
                    <input name='obj_pengawasan_5' type="text" class="form-control" id="exampleFormControlInput1" value="{{$objek->obj_pengawasan_5}}">
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


