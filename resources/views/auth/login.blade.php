@extends('layouts.auth-master')

@section('content')
<div class="col-login-image">&nbsp;</div>
<div class="col-login-form">
    <div id="container-login">
        <div class="logo-login text-center">
            <img src="{{ asset('images/logo.png') }}" height="125px">
        </div>

        <div class="panel panel-default">
            <div class="panel-body box-login">
                @include('layouts.partials.messages')
                <form class="form-login" method="POST" action="{{ route('login.perform') }}">
                    {{ csrf_field() }}
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Usuário" required="required" autofocus>
                        <label for="floatingName">Usuário</label>
                        @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Senha" required="required">
                        <label for="floatingPassword">Senha</label>
                        @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                      <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                    </div>
                    <div class="col-xs-6">
                        <div class="register">
                          <a ui-sref="register" class="text-center" href="{{ route('register.show') }}">Criar uma conta</a>
                        </div>
                    </div>
                </form>
                <div class="text-version">Versão 2.0.3</div>
            </div>
        </div>
    </div>
</div>
@endsection
