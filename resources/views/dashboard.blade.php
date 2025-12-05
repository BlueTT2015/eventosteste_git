@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-md-10 offset-md-1 dashboard-title-container">
            <h1>Meus Eventos</h1>
        </div>

        <div class="col-md-10 offset-md-1 dashboard-events-container">

            @if(count($events) > 0)
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>

                            <td>
                                <a href="/events/{{ $event->id }}">
                                    {{ $event->title }}
                                </a>
                            </td>

                            <td>0</td>

                            <td>
                                <a href="/edit/{{ $event->id }}" class="btn btn-info edit-btn">
                                    <ion-icon name="create-outline"></ion-icon>Editar
                                </a>

                                <form action="/events/{{ $event->id }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">
                                        <ion-icon name="trash-outline"></ion-icon>Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Não possui eventos registados!
                    <a href="/events/create">Criar Evento</a>
                </p>
            @endif

        </div>
    </div>

@endsection
