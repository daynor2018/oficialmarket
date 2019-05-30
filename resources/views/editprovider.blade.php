@extends('layouts.viewadmin')
@section('title')
<title>Editar | Proveedor | "KIOS"</title>
@endsection
@section('css')
<!-- Bootstrap Core Css -->
    <link href="{{asset('homeadm/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="{{asset('homeadm/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('homeadm/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('homeadm/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{asset('homeadm/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{asset('homeadm/plugins/waitme/waitMe.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{asset('homeadm/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('homeadm/css/style.css')}}" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('homeadm/css/themes/all-themes.css')}}" rel="stylesheet" />
    
    <style>
          .previa {
            height: 100%;
            width: 100%;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
    </style>
    
@endsection
@section('content')
<div class="block-header">
    <h2>Proveedores "KIOS"</h2>
</div>
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Editar proveedor
                    <small>¿Desea actualizar datos del proveedor?</small>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{route('showaprovider')}}">Cancelar</a></li>
                        </ul>
                    </li>
                </ul>
                @if($errors->any())
                    <br>
                     @foreach($errors->all() as $error)
                     <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>{{ $error }}</strong>
                            </div> 
                     @endforeach
                @endif
            </div>
            <div class="body">
               <form action="{{route('updateprovider',$campos->id)}}" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group">
                           <h5 class="text-center m-t-0">Imagen de proveedor</h5> 
                            <label class="btn btn-block btn-lg bg-grey waves-effect" for="files">
                                  <input type="file" id="files" name="files" style="display: none; "/>
                                  <output id="list">
                                      <img class="previa" src="{{ asset('img/provider/' . $campos->image) }}">
                                      
                                  </output>
                                  <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                  </div>
                                  
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-9">
                       <h5 class="text-center m-t-0">Datos requeridos</h5>             
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="{{$campos->name}}"/>
                                <label class="form-label">Nombre de proovedor</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nit" id="nit" autocomplete="off" value="{{$campos->nit}}"/>
                                <label class="form-label">NIT de proveedor</label>
                            </div>
                        </div>
                        <div class="form-group">
                           @if($campos->state=='1')
                            <input type="checkbox" id="state" name="state" checked/>
                            <label for="state">Los productos del proveedor estarán activos</label>
                            @else
                            <input type="checkbox" id="state" name="state"/>
                            <label for="state">Los productos del proveedor estarán activos</label>
                            @endif
                        </div>                        
                    </div>
                </div>
                <div class="row clearfix">
                    <button type="submit" class="btn btn-block btn-lg bg-cyan waves-effect">Actualizar</button>
                </div>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('javascript')
    <!-- Jquery Core Js -->
    <script src="{{asset('homeadm/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('homeadm/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('homeadm/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('homeadm/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('homeadm/plugins/node-waves/waves.js')}}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{asset('homeadm/plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{asset('homeadm/plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('homeadm/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{asset('homeadm/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('homeadm/js/admin.js')}}"></script>
    <script src="{{asset('homeadm/js/pages/forms/basic-form-elements.js')}}"></script>
    <script>
          function archivo(evt) {
              var files = evt.target.files; // FileList object

              // Obtenemos la imagen del campo "file".
              for (var i = 0, f; f = files[i]; i++) {
                //Solo admitimos imágenes.
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                reader.onload = (function(theFile) {
                    return function(e) {
                      // Insertamos la imagen
                     document.getElementById("list").innerHTML = ['<img class="previa" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                    };
                })(f);

                reader.readAsDataURL(f);
              }
          }

          document.getElementById('files').addEventListener('change', archivo, false);
      </script>

    <!-- Demo Js -->
    <script src="{{asset('homeadm/js/demo.js')}}"></script>

@endsection