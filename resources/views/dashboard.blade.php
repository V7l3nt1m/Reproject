@extends('layouts.headfo')

@section('title','Dashboard')

@section('content')
<p class="col s12 l9 offset-l1 m8 white-text texto-principal">Dashboard dos Projectos</p>
        </div>
     </header>

  @if(session('msg'))
                <script class="msg">alert('{{session('msg')}}')</script> 
                @endif
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1 class="proj">Projectos</h1>
<div class="col-md-10 offset-md-1 dashboard-events-container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Criador do Projecto</th>
                <th scope="col">Area do Projecto</th>
                <th scope="col">Curso</th>
                <th scope="col">Data de Cadastro</th>
                <th scope="col">Acções</th>
            </tr>
        </thead>
        @foreach($aluno as $key => $NaoFazNada)
        <tbody>
            <tr>
                <td scropt="row">
                    {{$loop->index + 1}}
                </td>
                 <td>{{$projecto[$key]->nome_projecto}}</td>
                <td>{{$aluno[$key]->nome_aluno}}</td>
                <td>{{$area[$key]->nome_area}}</td>
                <td>{{$aluno[$key]->curso}}</td>
                <td>{{$projecto[$key]->data_cadastro}}</td>
                <td>
                    <a href="#" class="btn btn-info edit-btn indigo"><ion-icon name="create-outline"></ion-icon> Editar</a>
                <form action="#" method="POST"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn indigo"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                </form>
            </td>
            </tr>

            @endforeach
        </tbody>
    </table>

   </div>
</div>

@endsection

