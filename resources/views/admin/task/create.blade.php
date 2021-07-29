@extends('admin.x-temp')

@section('content')
    <form action="{{ route('admin.tasks.store') }}" method="post">
        @csrf

        <label for="client_id">Cliente</label>
        <input type="text" name="client_id" id="client_id">
    </form>
@endsection