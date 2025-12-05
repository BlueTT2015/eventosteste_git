@extends('layouts.main')

@section('title', 'Editar Evento')

@section('content')


<div id="event-create.container" class="col-md-6 offset-md-3">
    <h1>Editar Evento: {{$event->title}}</h1>
    <form action="/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image"> Imagem do Evento: </label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">


        </div>
    </form>
</div>
