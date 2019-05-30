@extends('layouts.admin')
@section('contentadmin')
<div class="content-page">
    <!-- Start content -->
        <div class="content">   
        <div class="container-fluid">  
            <div class="row">
                  <div class="col-xl-12">
                      <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Productos</h1>
                        <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Producto</li>
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
                        <form  method="POST" action="{{route('registerproduct')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label for="name">Nombre del producto</label>
                            <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}" autocomplete="off">
                          </div>
                          <div class="form-group">   
                          <label for="image">Subir Imagen</label>
                          <input type="file" class="form-control-file" id="image" name="image">    
                          </div>
                          <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                          </div>
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