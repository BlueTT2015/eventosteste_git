@extends('layouts.main')
@section('title', 'Eventos')
@section('content')

    @if(session('msg'))
        <p class="msg">{{session('msg')}}</p>
    @endif
    <div id="search-container" class="col-md-12" >
        <h1>Procurar Eventos</h1>
        <form action="/events" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
            <h2>Pesquisa por: {{$search}}</h2>
        @else
            <h2>Próximos Eventos:</h2>
            <p class="subtitle">Veja os eventos dos próximos dias:</p>
        @endif
    </div>
    @foreach($events as $event)
        <p>===================</p>
        <p>{{$event['title']}}</p>
        <p>{{$event['description']}}</p>
        <a href="/events/{{ $event->id }}">Ver evento</a>

    @endforeach
    @if(count($events) ==0)
        <p>Não há eventos nos próximos dias</p>
    @endif
@endsection
