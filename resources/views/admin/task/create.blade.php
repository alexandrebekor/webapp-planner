@extends('admin.x-temp')

@section('content')
    <form action="{{ route('admin.tasks.store') }}" method="post">
        @csrf

        @isset($client)
            <label for="client_id">{{ $client->name }}</label>
            <input type="hidden" name="client_id" value="{{ $client->id }}">
        @endisset

        @isset($project)
            <label for="project_id">{{ $project->title }}</label>
            <input type="hidden" name="project_id" value="{{ $project->id }}">
        @endisset

        <label for="title">Título</label>
        <input type="text" name="title" id="title">

        <label for="description">Descrição</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <label for="price">Preço</label>
        <input type="number" name="price" id="price" step="0.01">

        <label for="do_at">Feito em</label>
        <input type="date" name="do_at" id="do_at">

        <label for="type">Tipo</label>
        <select name="type" id="type">
            <option value="Teste 1">Teste 1</option>
            <option value="Teste 2">Teste 2</option>
        </select>

        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Teste 3">Teste 3</option>
            <option value="Teste 4">Teste 4</option>
        </select>

        <button type="submit">Salvar Atividade</button>
    </form>
@endsection