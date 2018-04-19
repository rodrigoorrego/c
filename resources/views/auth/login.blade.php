@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <img src="/images/facaSeuLogin.png" width="100%" height="100%" alt="Faça seu Login!">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- <div class="panel panel-default"> -->

                <div class="panel-body" style="background-color: #eeeeee">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-lg-4 col-form-label col-form-label-lg"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-MAIL" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-lg-4 col-form-label col-form-label-lg"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" placeholder="SENHA" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 text-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar de Mim na Próxima Vez
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <button type="submit" class="btn-link">
                                    <img src="/images/btnEntrar.png" width="80%" height="80%" alt="Entrar!">
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <img src="/images/esqueceuSuaSenha.png" width="50%" height="50%" alt="Entrar!">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <img src="/images/cliqueAqui.png" width="50%" height="50%" alt="Entrar!">
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <img src="/images/aindaNaoTemConta.png" width="50%" height="50%" alt="Entrar!">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    <img src="/images/cadastreSe.png" width="50%" height="50%" alt="Entrar!">
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>
@endsection
