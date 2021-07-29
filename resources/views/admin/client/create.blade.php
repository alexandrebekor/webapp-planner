@extends('admin.x-temp')

@section('content')
    <form action="{{ route('admin.clients.store') }}" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">

        <button type="submit">Salvar</button>
    </form>
@endsection