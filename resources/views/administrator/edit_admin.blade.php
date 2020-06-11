@extends('/layout2/index') 


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">User Managements</a></li>
              <li class="breadcrumb-item active">Edit Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/user_admin/{{$user->id}}/update" method="POST">
                <div class="card-body">
                  {{csrf_field()}}
                  <div class="form-group">
                        <label for="exampleFormControlInput1">Masukkan Nama</label>
                         <input name='nama' type="string" class="form-control" id="exampleFormControlInput1" placeholder="Username" value="{{$user->nama}}" required="true" invalid="true">
                  </div>
                  <div class="form-group">
                        <label for="exampleFormControlInput1">Masukkan NPM</label>
                         <input name='npm' type="string" class="form-control" id="exampleFormControlInput1" placeholder="Username" value="{{$user->npm}}" required="true" invalid="true">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                        <label for="exampleFormControlInput1">Masukkan Username</label>
                         <input name='name' type="string" class="form-control" id="exampleFormControlInput1" placeholder="Username" value="{{$user->name}}" required="true" invalid="true">
                      </div>
                      <div class="col-sm-6">
                        <label for="exampleFormControlInput1">Masukkan Email</label>
                          <input name='email' type="email" class="form-control" id="exampleFormControlInput1" placeholder="@email" value="{{$user->email}}" required="true" invalid="true">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="exampleFormControlInput1">Password ( Jika Ingin Dirubah )</label>
                        <input name="password" type="password" class="form-control" id="signin-password" placeholder="Masukkan Password Baru" invalid="true">
                        <input type="checkbox" onclick="myFunction()"> Show Password
                        </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                      <label for="exampleFormControlInput1">Unit Kerja</label>
                      <select name='bpkp_id' type="text" class="form-control" id="exampleFormControlInput1">
                        @foreach($bpkp as $bpkp)
                      <option value="{{$bpkp->id}}">{{$bpkp->nama_unit}}</option>
                         @endforeach
                      </select>
                     </div>
                    <div class="col-sm-6">
                      <label for="exampleFormControlSelect1">Pilih Role</label>
                      <select name='role' class="form-control" id="exampleFormControlSelect1" @if(auth()->user()->role != 'admin') disabled="true" @endif>
                          <option value="admin" @if($user->role == "admin") selected @endif>admin</option>
                          <option value="member" @if($user->role == "member") selected @endif>member</option>
                          <option value="pengawas" @if($user->role == "pengawas") selected @endif>pengawas</option>
                          <option value="pelaksana" @if($user->role== "pelaksana") selected @endif>pelaksana</option>
                     </select>
                     </div>
                   </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                  </div> 
                </form> 
            </div>
            <!-- /.card -->
      </div>
      </div>
    </div>
</section>
</div>

@endsection
