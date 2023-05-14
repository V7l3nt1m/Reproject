@extends('layouts.headfo2')

@section('title','Login Admin')

@section('content')

<div class="row container">
        <h5 class="white-text">Inicie Sessão para cadastrar Projectos <i class="material-icons">info</i></h6>
        <div class="col s12 l6">
            <form method="POST" action="/dashboard">
                @csrf
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="name" id="nome-usuario" class="validate" placeholder="Insira o seu Nome de Usuário" required="required">
                    <label for="nome-usuario">Nome de Usuário</label>
                    <span class="helper-text" data-error="ERRO!"  data-success="CERTO!"></span>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">password</i>
                    <input type="password" name="password" id="senha_admin" class="validate" placeholder="Insira a sua Senha" required="required">
                    <label for="senha_admin">Senha</label>
                    <span class="helper-text" data-error="ERRO!"  data-success="CERTO!"></span>
                </div>
                <button class="btn green waves-effect waves-light" type="submit">Iniciar Sessão
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>



        <div class="col l4 offset-l2 white-text texto-principal" id="texto-principal">Repositório de Projectos do ITEL</div>

    </div>
    <br>
    <br>
    <br>

@endsection

