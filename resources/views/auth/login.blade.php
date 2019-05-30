@extends('layouts.homelogin')
@section('logincontent')
<style type="text/css">
    body{
        background-image: url('homeadm/images/login2.png');
        width: 100%;
        background-repeat: no;
        background-size: cover;
    }
</style>
    <div class="login-box">
        <div class="card">
            <div class="logo">
            <a class="bg-cyan" href="/">TIENDA <b>KIOS</b></a>
            <small class="bg-blue">Bienvenido - Gracias por usar la plataforma</small>
            </div>
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line @if ($errors->has('name_user')) focused error @endif">
                        <input id="name_user" type="text" class="form-control{{ $errors->has('name_user') ? ' is-invalid' : '' }}" name="name_user" value="{{ old('name_user') }}" placeholder="Nombre de usuario" required autocomplete="off">
                        </div>
                        @if ($errors->has('name_user'))
                        <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('name_user') }}</p></div>
                        @endif
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Contraseña" required autocomplete="off">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input class="filled-in chk-col-orange" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                            {{ __('Recordar equipo') }}
                            </label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-orange waves-effect" type="submit">INGRESAR</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="{{route('register')}}">Registrarse</a>
                        </div>
                        @if (Route::has('password.request'))
                        <div class="col-xs-6 algin-right">
                        <a href="{{ route('password.request') }}">
                            {{ __('Recuperar contraseña') }}
                        </a>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="{{asset('homeadm/js/pages/examples/sign-in.js')}}"></script>
@endsection
