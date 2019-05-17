<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tienda "KIOS"</title>
    <!-- Scripts -->
    <link rel="stylesheet" type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <!-- Fonts -->
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('/fontastik/styles.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-md custom-navbar navbar-dark">
        <img class="navbar-brand bg-dark" src="{{asset('admin/assets/images/logo.png')}}" id="logo_custom" width="10%"  alt="logo">
        <button class="navbar-toggler navbar-toggler-right custom-toggler bg-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
                <a class="nav-link text-dark" href="#offer"><b>Quienes somos</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#offer"><b>Nuestras Ofertas</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#"><b>Como trabajamos</b></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-warning btn-sm nav-link text-dark" data-toggle="modal" data-target="#loginModal"><b>Ingresar</b></a>
            </li>
            {{-- inicio de login --}}
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    {{-- inicio modal --}}
                    <div class="card">
                        <div class="card-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <span><img src="{{asset('admin/assets/images/logo.png')}}" class="w-50" alt="Logo"></span><br/>            
                        </div>
                    <div class="card-body">
                    <center>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="col-md-10">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon icon-user"></i></span>
                            </div>
                            <input id="name_user" type="text" class="form-control{{ $errors->has('name_user') ? ' is-invalid' : '' }}" name="name_user" value="{{ old('name_user') }}" required placeholder="Usuario" autofocus>
                                @if ($errors->has('name_user'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name_user') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="input-group form-group row">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon icon-key"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                            <span class="input-group-addon">
                                {{--  --}}
                            <input type="checkbox" id="show" style="display: none;" /><label for="show" class="btn btn-primary"><span class="icon icon-key-1"></span></label>
                                {{--  --}}
                            </span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        {{--  --}}
                        <div class="form-group row">
                            <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">Recordar equipo</label>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Iniciar') }}
                                </button>
                                <a class="btn btn-warning" href="{{ route('register')}}">
                                    {{ __('Registrarse') }}
                                </a>
                            </div>
                        </div>
                    </form>
                    </center>
                </div>
            </div>
                    {{-- fin modal --}}
                  </div>
                </div>
              </div>
            </div>
            {{-- fin de login --}}
            </ul>
        </div>  
    </nav>

    <div class="container-fluid">
        @yield('usercontent')
    </div>
{{--  --}}
        <div class="container-fluid bg-dark">
            <br>
            <div class="row">
            <div class="col-lg-8">
                <h4 class="text-white">Información importante</h4>
            <nav class="nav justify-content-center">
              <a class="nav-link" href="#">Carrito de compras</a>
              <a class="nav-link" href="#">Compra por internet</a>
              <a class="nav-link" href="#">Metódos de pago</a>
              <a class="nav-link" href="#">Sucursales</a>
            </nav>
            </div>
            <div class="col-lg-4">
                <h4 class="text-white">Redes Sociales</h4>
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="icon icon-twitter1 nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="icon icon-facebook2 nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="icon icon-youtube1 nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="icon icon-instagram nav-link" href="#"></a>
              </li>
            </ul>
            </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                <ul class="nav justify-content-center">
                  <li class="nav-item">
                    <div class="nav-link disabled text-dark">Copyright©2019 keydayp@gmail.com Derechos Reservados.</div>
                  </li>
                </ul>
                </div>
            </div>
        </div>
{{--  --}}
    <script type="text/javascript" src="{{asset('jquery/jquery-3.3.1.slim.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('popper/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('jquery/jquery-1.4.2.min.js')}}"></script>
    <script type="text/javascript">  
    $(document).ready( function(){
        $('#show').attr('checked', false);
        $('#show').click(function(){
            name = $('#password').attr('name');
            value = $('#password').attr('value');
            if($(this).attr('checked'))
            {
                html = '<input class="form-control" type="text" name="'+ name + '" value="' + value + '" id="password"/>';
                $('#password').after(html).remove();
            }
            else
            {
                html = '<input class="form-control" type="password" name="'+ name + '" value="' + value + '" id="password"/>';
                $('#password').after(html).remove();
            }
        });
    });
      </script>
</body>
</html>
