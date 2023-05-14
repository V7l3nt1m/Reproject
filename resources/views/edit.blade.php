@extends('layouts.main')

@section('title','Editando: '. $event->title)

@section('content')

	<div id="event-create-container" class="col-md-6 offset-md-3">
		<h1>Editando: {{$event->title}}</h1>
		<form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group">
			<label for="image">
				Imagem do Evento:
			</label>
			<input class="form-control-file" type="file" id="image" name="image">
			<img class="img-preview" alt="{{$event->title}}" src="/imagens/events/{{$event->image}}"></img>
		</div>
		<div class="form-group">
			<label for="title">
				Evento:
			</label>
			<input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento" value="{{$event->title}}">
		</div>
		<div class="form-group">
			<label for="title">
				Data do Evento:
			</label>
			<input type="date" name="date" id="date" class="form-control" value="{{$event->date->format('Y-m-d')}}">
		</div>
		<div class="form-group">
			<label for="city">
				Cidade:
			</label>
			<input type="text" name="city" id="city" class="form-control" placeholder="Local do Evento" value="{{$event->city}}">
		</div>
		<div class="form-group">
			<label for="evento">
				O evento é Privado?
			</label>
			<select name="private" id="private" class="form-control">
				<option value="0">Não</option>
				<option value="1" {{$event->private == 1? "selected ='selected'": ""}}>Sim</option>
			</select>
		</div>
		<div class="form-group">
			<label for="title">
				Descrição:
			</label>
			<textarea class="form-control" name="description" id="description" placeholder="O que é que vai acontecer no evento">{{$event->description}}</textarea>
		</div>
		<div class="form-group">
			<label for="title">
				Adicione itens de infraestrutura:
			</label>
			<div class="form-group">
				<input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
			</div>
			<div class="form-group">
				<input type="checkbox" name="items[]" value="Palco"> Palco
			</div>
			<div class="form-group">
				<input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja Grátis
			</div>
			<div class="form-group">
				<input type="checkbox" name="items[]" value="Open food"> Open food
			</div>
			<div class="form-group">
				<input type="checkbox" name="items[]" value="Brindes"> Brindes
			</div>
			<input type="submit" class="btn btn-primary" value="Editar Evento">
		</div>
		</form>
	</div> 
 @endsection