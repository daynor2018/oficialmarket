@extends('layouts.admin')
@section('contentadmin')
<div class="content-page">
    <!-- Start content -->
        <div class="content">   
        <div class="container-fluid">  
            <div class="row">
                  <div class="col-xl-12">
                      <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Usuarios</h1>
                        <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Clientes</li>
                        </ol>
                        <div class="clearfix"></div>
                      </div>
                  </div>
            </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">           
                    <div class="card mb-3">
                        <div class="card-header">          
                        <h3><i class="fa fa-users"></i> Clientes</h3>
                        @if(count($alluser)==0)
                            <p>No se cuenta con registro de usuarios</p>
                        @else
                            <br>
                            <p>La lista ha sido actualizada!</p>
                        @endif
                        <a href="{{route('adduser')}}" class="btn btn-primary">Agregar</a>
                        <a href="#" class="btn btn-warning">Imprimir</a>
                        <a href="#" class="btn btn-info">Inactivos</a>
                        </div>
                        @if(session('successMsg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>{{ session('successMsg') }}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        @endif
                        @if(count($alluser)!=0)
                        <div class="card-body">
                        <table id="example1" class="table table-bordered table-responsive-xl table-hover display">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Apellidos</th>
                              <th>Cedula</th>
                              <th>Email</th>
                              <th>Usuario</th>
                              <th>Edad</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>                          
                          <tbody>
                            @foreach($alluser as $c)
                            <tr>
                              <td>{{$c->name}} {{$c->second_name}}</td>
                              <td>{{$c->paternal_last_name}} {{$c->maternal_last_name}}</td>
                              <td>{{$c->ci}} {{$c->department}}</td>
                              <td>{{$c->email}}</td>
                              <td>{{$c->name_user}}</td>
                              <td><?php $a=date("Y");
                              $anio = date("Y", strtotime($c->birthdate));?>
                              {{$a-$anio}}
                              </td>
                              {{--  --}}
                              <td>
  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_edit_user_5"><i class="fa fa-pencil" aria-hidden="true"></i></a>
  <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_5">
  <div class="modal-dialog">
  <div class="modal-content">
  <form action="#" method="post" enctype="multipart/form-data">       
    <div class="modal-header">
    <h5 class="modal-title">Edit user</h5>
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>           
    </div>

    <div class="modal-body">                      
      <div class="row">
        <div class="col-lg-12">
        <div class="form-group">
        <label>Full name (required)</label>
        <input class="form-control" name="name" type="text" required value="Gabriel Gaby" />
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
        <div class="form-group">
        <label>Valid Email (required)</label>
        <input class="form-control" name="email" type="email" required value="webmaster@website.com" />
        </div>
        </div>  
        
        <div class="col-lg-6">
        <div class="form-group">
        <label>Password (empty not to change)</label>
        <input class="form-control" name="password" type="text" />
        </div>
        </div>  
      </div>

      <div class="row">
      <div class="col-lg-6">
      <div class="form-group">
      <label>Role</label>
      <select name="role_id" class="form-control" required>
      <option value="">- select -</option>
      <optgroup label="Staff member">
                  <option  value="1">Administrator</option>
                    <option  value="2">Manager</option>
                    <option selected="selected" value="3">Author</option>
                  </optgroup>
      
      <optgroup label="Registered member">
        <option  value="4">User</option>
      </optgroup>
      </select>
      </div>
      </div>                         

      <div class="col-lg-6">
      <div class="form-group">
      <label>Skype (optional)</label>
      <input class="form-control" name="skype" type="text" value="pppp" />
      </div>
      </div>          
      </div>

      <div class="row">
      <div class="col-lg-6">
      <div class="form-group">
      <label>Email verified</label>
      <select name="email_verified" class="form-control">
      <option selected="selected" value="1">YES</option>
      <option  value="0">NO</option>
      </select>
      </div>
      </div>

      <div class="col-lg-6">
      <div class="form-group">
      <label>Active</label>
      <select name="active" class="form-control">
      <option selected="selected" value="1">YES</option>
      <option  value="0">NO</option>
      </select>
      </div>
      </div>
    </div>
    <div class="form-group">
      <label>Change avatar (optional):</label> <br />
      <input type="file" name="image">
    </div>

    </div>             
    <div class="modal-footer">
    <input type="hidden" name="user_id" value="5" />
    <button type="button" class="btn btn-primary">Edit user</button>
    </div>
  </form> 
  </div>
</div>
</div> 
  <a href="javascript:deleteRecord_5('5');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
  <script>
  function deleteRecord_5(RecordId)
  {
    if (confirm('Confirm delete')) {
      window.location.href = '#';
    }
  }
  </script>
</td>

                              {{--  --}}
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>                        
                      </div>           
                      @endif                 
                    </div><!-- end card-->          
                  </div>
                </div>
            </div>      
        </div>
    <!-- END container-fluid -->
    </div>
@endsection