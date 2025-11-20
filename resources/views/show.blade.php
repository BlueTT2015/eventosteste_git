@extends('layouts.main')

@section('content')
    <h1>{{ $event->title }}</h1>
    <p><strong>Cidade:</strong> {{ $event->city }}</p>
    <p><strong>Data:</strong> {{ date('d/m/Y', strtotime($event->date)) }}</p>
    <p><strong>Descrição:</strong> {{ $event->description }}</p>

    <h3> O Evento Contém:</h3>
    <ul id="items-list">
        @foreach($event->items as $item)
            <li> {{$item}} </li>
        @endforeach
    </ul>

@endsection
