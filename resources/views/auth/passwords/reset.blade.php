@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <img src="/images/novaSenha.png" width="100%" height="100%" alt="Faça seu Login!">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--<div class="panel panel-default">-->
                <!--<div class="panel-heading">Reset Password</div>-->

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Seu E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-MAIL" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Nova Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" placeholder="NOVA SENHA" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Nova Senha</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="CONFIRMAR NOVA SENHA" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-link">
                                    <img src="/images/salvarSenha.png" width="80%" height="80%" alt="Entrar!">
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <a class="btn btn-link" href="{{ route('home') }}">
                                    <img src="/images/setaVoltar.png" width="50%" height="50%" alt="Entrar!">
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            <!--</div>-->
        </div>
    </div>
</div>
@endsection
