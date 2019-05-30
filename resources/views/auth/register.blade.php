@extends('layouts.homelogin')

@section('logincontent')
<link href="{{asset('homeadm/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<style type="text/css">
    body{
        background-image: url('homeadm/images/login2.png');
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<div class="login-box">
    <div class="card">
        <div class="logo">
            <a class="bg-cyan" href="/">TIENDA <b>KIOS</b></a>
            <small class="bg-blue">Bienvenido - ¡Registrarse es gratis!</small>
            </div>
        <div class="body">
            <form method="POST" action="{{ route('register') }}" id="sign-up">
                @csrf
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line @if ($errors->has('name')) focused error @endif">
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre" autocomplete="off" required autofocus>
                    </div>
                    @if ($errors->has('name'))
                    <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('name') }}</p></div>
                    @endif
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person_add</i>
                    </span>
                    <div class="form-line @if ($errors->has('second_name')) focused error @endif">
                        <input id="second_name" type="text" class="form-control{{ $errors->has('second_name') ? ' is-invalid' : '' }}" name="second_name" value="{{ old('second_name') }}" placeholder="Nombres secundarios" autocomplete="off">
                    </div>
                    @if ($errors->has('second_name'))
                    <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('second_name') }}</p></div>
                    @endif
                </div>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person_add</i>
                    </span>
                    <div class="form-line @if ($errors->has('paternal_last_name')) focused error @endif">
                        <input type="text" class="form-control{{ $errors->has('paternal_last_name') ? ' is-invalid' : '' }}" id="paternal_last_name" name="paternal_last_name" value="{{ old('paternal_last_name') }}" placeholder="Apellido paterno" autocomplete="off" required>
                    </div>
                    @if ($errors->has('paternal_last_name'))
                    <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('paternal_last_name') }}</p></div>
                    @endif
                </div>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person_add</i>
                    </span>
                    <div class="form-line @if ($errors->has('maternal_last_name')) focused error @endif">
                        <input id="maternal_last_name" type="text" class="form-control{{ $errors->has('maternal_last_name') ? ' is-invalid' : '' }}" name="maternal_last_name" value="{{ old('maternal_last_name') }}" required placeholder="Apellido Materno" autocomplete="off">
                    </div>
                    @if ($errors->has('maternal_last_name'))
                    <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('maternal_last_name') }}</p></div>
                    @endif
                </div>

                
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line @if ($errors->has('email')) focused error @endif">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Correo electrónico" required>
                    </div>
                    @if ($errors->has('email'))
                    <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('email') }}</p></div>
                    @endif
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">date_range</i>
                    </span>
                    <div class="form-line">
                    <input type="date" class="form-control" placeholder="Fecha de nacimiento" id="birthdate" value="{{old('birthdate')}}" name="birthdate" required>
                    </div>
                    @if ($errors->has('birthdate'))
                    <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('birthdate') }}</p></div>
                    @endif
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line @if ($errors->has('password')) focused error @endif">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="8" required placeholder="Contraseña">
                    </div>
                    @if ($errors->has('password'))
                    <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('password') }}</p></div>
                    @endif
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-orange" required checked>
                    <label for="terms">Estoy de acuerdo con los <a href="#">términos de uso</a>.</label>
                </div>
                <input type="hidden" name="rol" value="user">
                <button class="btn btn-block btn-lg bg-orange waves-effect" type="submit">REGISTRARSE</button> 
            </form>
            <div class="m-t-25 m-b--5 align-center">
                    <a href="{{route('login')}}">¿Tienes una cuenta?.</a>
                </div>
        </div>
    </div>
</div>
@endsection
