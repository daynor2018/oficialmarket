@extends('layouts.viewadmin')
@section('title')
<title>Proveedores "KIOS"</title>
@endsection
@section('css')
<!-- Bootstrap Core Css -->
    <link href="{{asset('homeadm/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="{{asset('homeadm/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('homeadm/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{asset('homeadm/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('homeadm/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('homeadm/css/themes/all-themes.css')}}" rel="stylesheet" />
@endsection
@section('content')
           @if(count($active)==0)
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body bg-red">
                           <h4>La lista esta vacia!</h4>
                            <p>
                                ¡En este momento no se encuentra registrado ningun proveedor!.
                                <a class="btn btn-primary waves-effect" href="{{route('addprovider')}}">Agregar registro</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           @else
            <div class="block-header">
                <h2>
                    Proveedores
                    <small>Lista con opciones para proveedores.</small>
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Todos los proveedores
                            </h2>
                            @if(session('successMsg'))
                           <br>
                            <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>{{ session('successMsg') }}</strong>
                            </div>                           
                            @endif
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{route('addprovider')}}">Agregar nuevo</a></li>
                                        <li><a href="{{route('showaprovider')}}">Proveedores activos</a></li>
                                        <li><a href="{{route('showiprovider')}}">Proveedores inactivos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="table" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>NIT</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>NIT</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody><?php $n=0;?>@foreach($active as $a)
                                        <tr>                                            
                                            <?php $n=$n+1;?>
                                            <td>{{$n}}</td>
                                            <td>{{strtoupper($a->name)}}</td>
                                            <td>{{$a->nit}}</td>
                                            <td><?php if($a->state=='1'){
                                            echo "Activo";}else{echo "Inactivo";}?></td>
                                            <td class="text-center"><div class="icon-button-demo">
                                               <a class="btn bg-amber btn-circle waves-effect waves-circle waves-float" href="{{route('editprovider',$a->id)}}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="material-icons">mode_edit</i></a>
                                            @if($a->state=='1')
                                               <a class="btn bg-red btn-circle waves-effect waves-circle waves-float" href="{{route('offprovider',$a->id)}}" data-toggle="tooltip" data-placement="top" title="Desactivar"><i class="material-icons">delete</i></a>
                                            @else
                                               <a class="btn bg-green btn-circle waves-effect waves-circle waves-float" href="{{route('onprovider',$a->id)}}" data-toggle="tooltip" data-placement="top" title="Activar"><i class="material-icons">loupe</i></a>
                                            @endif
                                               <a type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#modal{{$a->id}}" title="Ver imagen"><i class="material-icons">image</i></a>
                                               </div>
                                               
                                               <div class="modal fade" id="modal{{$a->id}}" tabindex="-1" role="dialog" style="display: none;">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="modal{{$a->id}}Label">Imagen de proveedor</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                          <center>
                                                           <img src="{{asset('img/provider/'.$a->image)}}" class="img-responsive">
                                                           </center>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           </td>
                                        </tr>@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
           @endif
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
    
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('homeadm/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('homeadm/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('homeadm/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('homeadm/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('homeadm/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('homeadm/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('homeadm/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('homeadm/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('homeadm/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('homeadm/js/admin.js')}}"></script>
    <script src="{{asset('homeadm/js/pages/ui/tooltips-popovers.js')}}"></script>
    <script src="{{asset('homeadm/js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('homeadm/js/demo.js')}}"></script>
@endsection