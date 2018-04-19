@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <img src="/images/logo.png" width="100%" height="100%" alt="CANTAÊ">
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- <div class="panel panel-default"> -->

                <div class="panel-body">
                    <form class="form-horizontal">

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                    <!--<img src="/images/inicieSuaCarreira.png" width="100%" height="100%">-->
                                    INICIE SUA CARREIRA!
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    <img src="/images/cadastreSeHome.png" width="100%" height="100%" alt="Cadastre-se">
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    <img src="/images/login.png" width="100%" height="100%" alt="Fazer Login">
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                <a class="btn btn-link">
                                    <img src="/images/entrarComFacebook.png" width="100%" height="100%" alt="Entrar com Facebook">
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 text-center">
                                    <!--<img src="/images/creditos.png" width="100%" height="100%" alt="Entrar com Facebook">-->
                                    DESENVOLVIDO POR...
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
