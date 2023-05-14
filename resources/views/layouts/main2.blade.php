<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonte do google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https: //fonts.googleapis.com/css2? family= Roboto & display=swap" rel="stylesheet">
        <!-- Css Boostrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!--Css da aplicacao -->
<link rel="stylesheet" type="text/css" href="/css/style32.css">
<script src="/js/script.js"></script>
        

        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                 <a href="/" class="navbar-brand">
                     <img id="img" src="/imagens/logo.svg" alt="icone">
                 </a>   
                 <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a> 
                     </li>
                      <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a> 
                     </li>
                     @auth
                     <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Meus eventos</a> 
                        <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit()">Sair
                            </a>
                        </form>
                     </li>
                     @endauth
                     @guest
                      <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a> 
                     </li>
                      <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a> 
                     </li>
                     @endguest
                 </ul>
                 </div>
            </nav>
        </header>
    <main>
        <div class="container-field">
            <div class="row">
               @if(session('msg'))
                <script class="msg">alert('{{session('msg')}}')</script> 
                @endif
                @yield('content')
            </div>
        </div>    
    </main>
     <footer>
         <p>HDX: Events &copy; 2020</p>
     </footer>


 </body>
    </html>
