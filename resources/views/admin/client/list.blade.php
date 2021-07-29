@extends('admin.x-temp')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td><a href="{{ route('admin.tasks.client', [$client->id]) }}">Adicionar Tarefa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection