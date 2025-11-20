@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Formulário - Adicionar Evento:</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div>
            <div class="form-group">
                <label for="title">Evento Publico ou Privado:</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Publico</option>
                    <option value="1">Privado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="start">Start date:</label>

                <input type="date" id="date" name="date" value="2024-07-22" min="2024-01-01" max="2024-12-31" />
            </div>

            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição geral do evento"></textarea>
                <div class="form-group">
                    <label for="description">Itens:</label>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cadeiras" />Cadeiras
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Palco" />Palco
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Bar" />Bar
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Acessibilidade" />Acessibilidade
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Adicionar Evento">
        </form>

    </div>


@endsection
