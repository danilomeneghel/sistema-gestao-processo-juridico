@extends('layouts.auth-master')

@section('content')
<div class="col-login-form">
    <div id="container-login">
        <h3>Cadastro</h3><br>

        <form method="post" action="{{ route('register.perform') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome" required="required" autofocus>
                <label for="floatingName">Nome</label>
                @if ($errors->has('name'))
                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required="required" autofocus>
                <label for="floatingEmail">E-mail</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Usuário" required="required" autofocus>
                <label for="floatingUsername">Usuário</label>
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

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmar Senha" required="required">
                <label for="floatingConfirmPassword">Confirmar Senha</label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Criar conta</button>
            <div class="col-xs-6">
                <div class="register">
                  <a ui-sref="register" class="text-center" href="{{ route('login.show') }}">Já tenho conta</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-login-image2">&nbsp;</div>
@endsection
