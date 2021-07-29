@extends('admin.x-temp')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf

        <label for="client_id">Cliente</label>
        <select name="client_id" id="client_id">
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>

        <label for="title">Título</label>
        <input type="text" name="title" id="title">

        <label for="description">Descrição</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <label for="type">Tipo</label>
        <select name="type" id="type">
            <option value="Webapp">Webapp</option>
            <option value="Website">Website</option>
            <option value="eCommerce">eCommerce</option>
            <option value="Loja Virtual">Loja Virtual</option>
            <option value="Lançamento">Lançamento</option>
        </select>

        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Ativo">Ativo</option>
            <option value="Concluído">Concluído</option>
            <option value="Cancelado">Cancelado</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection