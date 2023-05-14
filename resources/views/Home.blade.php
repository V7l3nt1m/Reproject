@extends('layouts.headfo')

@section('title','Home Reproject')

@section('content')
<p class="col s12 l9 offset-l1 m8 white-text texto-principal">Repositório de Projectos do ITEL</p>
        </div>
</header>
       <div>
    <h2 class="center indigo-text text-darken-4" id="servicos">projectos</h2>
    @if($search)
    <h2 class="col s12 l4 offset-l1 m8 buscando">Buscando por: {{$search}}</h2>
     @if($projecto2 == "[]")
         <div class="col s12 l4 offset-l1 m8 buscando">
                <h5 class="h5">Não há projectos com o nome: {{$search}}</h5>
           </div>
           @endif
            <p class="row container p">
                @foreach($projecto2 as $proj)
                       <div class="cardes">
            <!-- Aqui -->
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light img">
                    <img src="img/imagens/{{$proj->image}}" alt="" class="activator">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$proj->nome_projecto}}<p>Cadastrado desde: {{$proj->data_cadastro}}</p><i class="material-icons right">more_vert</i></span>
                    <p><a href="/projecto/{{$proj->id}}">Ver mais</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4 "> Descrição
                         <i class="material-icons right">close</i></span>
                    <p>{{$proj->descricao_projecto}}</p>
                    <img src="img/braulio-dos-santos.jpg" alt="" class="img-responsive circle card-reveal-img">
                </div>
            </div>
        </div>
                @endforeach
            </p>
    @else
        <p class=" row container p"> 
 @foreach($projecto as $key => $qualquer)
        <div class="cardes">
            <!-- Aqui -->
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light img">
                    <img src="img/imagens/{{$projecto[$key]->image}}" alt="" class="activator">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$projecto[$key]->nome_projecto}}<p>Cadastrado desde: {{$projecto[$key]->data_cadastro}}</p><i class="material-icons right">more_vert</i></span>
                    <p><a href="/projecto/{{$projecto[$key]->id}}">Ver mais</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4 "> Descrição
                         <i class="material-icons right">close</i></span>
                    <p>{{$projecto[$key]->descricao_projecto}}</p>
                    <img src="img/braulio-dos-santos.jpg" alt="" class="img-responsive circle card-reveal-img">
                </div>
            </div>
            
            <!--começa aqui a segunda showbox-->
        </div>
         @endforeach    
    @endif
        </p>
    




      <div class="row" id="apoiadores">
        <h2 class="center indigo-text text-darken-4">Apoiadores</h2>
        
        <div class="col s12 l3">
            <img src="img/itel.jpg" alt="ITEL"> </a>
           
        </div>
        <div class="col s12 l3">
            <img src="img/itel.jpg" alt="ITEL"> </a>
                      
        </div>
        <div class="col s12 l3">
            <img src="img/itel.jpg" alt="ITEL"> </a>
                  
        </div>
        <div class="col s12 l3">
            <img src="img/itel.jpg" alt="ITEL"> </a>
                       
        </div>
    </div>
@endsection
   
