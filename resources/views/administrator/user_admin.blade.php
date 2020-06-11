@extends('/layout2/index') 


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Managements</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">UserManagements</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

          @if(session('sukses'))
         <div class="alert alert-success" role="alert">
          {{session('sukses')}}
          </div>
          @endif

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table User Managements
              </h3>
              <div class="card-tools">
              <button class="btn btn-primary btn-sm toastr"  data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus-square"></i><span id='class_name'> Tambah User</span></button>
              </div>
            </div>
              <div class="card-body">
              <table id="table1" class="table table-bordered table-striped table-hover">
              <thead>
             <tr background-color="red">
              <th scope="col">USERNAME</th>
              <th scope="col">Email</th>
              <th scope="col">Unit Kerja</th>
              <th scope="col">ROLE LEVEL</th>
              <th scope="col"><center>AKSI</center></th>
            </tr>
          </thead>
          <tbody>
          @foreach($user as $user)
            <tr>
              <td scope="row">{{$user -> name}}</td>
              <td scope="row">{{$user -> email}}</td>
              <td scope="row">{{$user -> bpkp -> nama_unit}}</td>
              <td scope="row">{{$user -> role}}</td>
              <td scope="row"><center>
              <a href="/administrator/{{$user->id}}/edit" class="btn btn-warning btn-sm"title="Edit"><i class="fa fa-edit"></i></a>
              <a href="/administrator/{{$user->id}}/delete" class="btn btn-danger btn-sm delete" title="Hapus"><i class="fa fa-trash"></i></a>
              </center></td>
            </tr>
            @endforeach
            </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->           

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="modal-title" id="staticBackdropLabel">Tambah User</span>
                      <span><button type="button" class="close" data-dismiss="modal" aria-label="Close"></span>
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="/user_admin/create" method="POST">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Masukkan Username</label>
                            <input name='name' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" required="true" invalid="true">
                      
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Masukkan Email</label>
                            <input name='email' type="email" class="form-control" id="exampleFormControlInput1" placeholder="@email" required="true" invalid="true">
                      
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Unit Kerja</label>
                            <select name='bpkp_id' type="text" class="form-control" id="exampleFormControlInput1">
                            @foreach($bpkp as $bpkp)
                              <option value="{{$bpkp->id}}" >{{$bpkp->nama_unit}}</option>
                            @endforeach
                            </select>
                          </div>

                          <div class="form-group field-user-password">
                            <label for="exampleFormControlInput1">Password</label>
                            <input name="password" type="password" class="form-control" id="signin-password" placeholder="Password" required="true" invalid="true">
                            <input type="checkbox" onclick="myFunction()"> Show Password
                          </div>
                         
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Role</label>
                            <select name='role' class="form-control" id="exampleFormControlSelect1">
                              <option>admin</option>
                              <option>member</option>
                              <option>pengawas</option>
                              <option>pelaksana</option>
                            </select>
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
                          </div>-->
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div></form> 
                  </div>
                </div>
              </div>

@endsection

