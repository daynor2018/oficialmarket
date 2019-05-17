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
                        <li class="breadcrumb-item">{{ucfirst($rol)}}</li>
                        <li class="breadcrumb-item active">Agregar</li>
                        </ol>
                        <div class="clearfix"></div>
                      </div>
                  </div>
            </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">           
                    <div class="card mb-3">
                        <div class="card-header">          
                        <h3><i class="fa fa-users"></i> Agregar nuevo</h3>
                        </div>
                        <div class="card-body">
                          @if($errors->any())
                              <div class="alert alert-danger">
                                @foreach($errors->all() as $erro)
                                <li>{{$erro}}</li>
                                @endforeach
                              </div>
                          @endif
                        <form  method="POST" action="{{route('registeruser')}}">
                          @csrf
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="name">Nombre</label>
                              <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"autocomplete="off" autofocus required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="second_name">Segundo Nombre</label>
                              <input type="text" class="form-control" id="second_name" name="second_name" value="{{ old('second_name') }}" autocomplete="off">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="paternal_last_name">Apellido Paterno</label>
                              <input type="text" class="form-control" id="paternal_last_name" name="paternal_last_name" value="{{ old('paternal_last_name') }}" autocomplete="off" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="maternal_last_name">Apellido Materno</label>
                              <input type="text" class="form-control" id="maternal_last_name" name="maternal_last_name" value="{{ old('maternal_last_name') }}" autocomplete="off">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="ci">CI</label>
                              <input type="text" class="form-control" id="ci" name="ci" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="department">Departamento</label>
                              <select id="department" name="department" class="form-control">
                                <option value="lpz" selected>La Paz</option>
                                <option value="oru">Oruro</option>
                                <option value="pot">Potosi</option>
                                <option value="chb">Cochabamba</option>
                                <option value="be">Beni</option>
                                <option value="pa">Pando</option>
                                <option value="scz">Santa Cruz</option>
                                <option value="ta">Tarija</option>
                                <option value="chu">Chuquisaca</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="birthdate">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" required>
                          </div>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                              @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="form-group col-md-6">
                              <label for="password-confirm">Confirmar Contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <input type="hidden" name="rol" id="rol" value="{{$rol}}">
                          <button type="submit" class="btn btn-primary">Añadir</button>
                        </form>                      
                      </div>           
                    </div><!-- end card-->          
                  </div>
                </div>
            </div>      
        </div>
    <!-- END container-fluid -->
    </div>
@endsection