@extends('layouts.main')
@section('title','Contactos')
@section('content')

    <h2>Contacts</h2>

    @foreach($contacts as $contact)
        <p>{{$contact->nome}} -- {{$contact->numero}} -- {{$contact->email}}</p>
    @endforeach

@endsection
