@extends('layouts.headfo2')

@section('title','Login Admin')

@section('content')

<div class="row container container2 ">
        <h5 class="white-text">Inicie Sessão para cadastrar Projectos <i class="material-icons">info</i></h6>
                @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
                @endif
            <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="col s12 l6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                     <x-jet-label for="auth" value="{{ __('Nome de Usuário') }}" />
                    <x-jet-input id="auth" class="block mt-1 w-full validate" type="text" name="auth" :value="old('auth')" placeholder="Insira o seu Nome de Usuário" required autofocus />
                    <span class="helper-text" data-error="ERRO!"  data-success="CERTO!"></span>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">password</i>
                     <x-jet-label for="password" value="{{ __('Password') }}" />
                     <x-jet-input id="password" class="block mt-1 w-full validate" type="password" placeholder="Insira a sua Senha" name="password" required autocomplete="current-password" />
                    <span class="helper-text" data-error="ERRO!"  data-success="CERTO!"></span>
                </div>

                <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <br>
            <x-jet-button class="ml-4 btn green waves-effect waves-light"> 
                    {{ __('Iniciar Sessão') }}
                    <i class="material-icons right">send</i>
                </x-jet-button>
            </form>
        </div>



   

    </div>
    <br>
    <br>
    <br>

@endsection

