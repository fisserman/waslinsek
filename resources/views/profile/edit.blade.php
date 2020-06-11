@extends('/layout/master') 


@section('content')
<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-heading">
              <h3 class="panel-title">Ubah Data Unit</h3>
            </div>
      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
          {{session('sukses')}}
      </div>
      @endif
      <div class="row">
        <div class="modal-body">
        <form action="/profile/{{$bpkp->id}}/update" method="POST">
          {{csrf_field()}}
          <div class="panel-body">
            <div class="form-group">
            <label for="exampleFormControlInput1">Nama Unit</label>
            <input name='nama_unit' type="text" class="form-control" id="exampleFormControlInput1" disabled="true" placeholder="Unit" value="{{$bpkp->nama_unit}}">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Telepon</label>
            <input name='telepon' type="text" class="form-control" id="exampleFormControlInput1" placeholder="No. Telepon" value="{{$bpkp->telepon}}">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input name='email' type="text" class="form-control" id="exampleFormControlInput1" placeholder="@email" value="{{$bpkp->email}}">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Alamat Kantor</label>
            <textarea name='alamat' type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Kantor">{{$bpkp->alamat}}</textarea>
            </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>         
      </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection