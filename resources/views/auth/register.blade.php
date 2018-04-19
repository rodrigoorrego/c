@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <img src="/images/cadastreSeTopo.png" width="100%" height="100%" alt="Cadastre-se">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--<div class="panel panel-default">-->
                <!--<div class="panel-heading"></div>-->

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-lg-4 col-form-label col-form-label-lg"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="NOME" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-lg-4 col-form-label col-form-label-lg"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-MAIL" required>

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
                                <input id="password" type="password" class="form-control" name="password" placeholder="SENHA" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-lg-4 col-form-label col-form-label-lg"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="CONFIRME A SENHA" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <button type="submit" class="btn-link">
                                    <img src="/images/btnPronto.png" width="80%" height="80%" alt="Entrar!">
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
