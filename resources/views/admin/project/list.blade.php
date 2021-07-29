@extends('admin.x-temp')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->type }}</td>
                    <td>{{ $project->status }}</td>
                    <td>{{ route('admin.projects.task', [$project->id]) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection