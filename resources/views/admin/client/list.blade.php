@extends('admin.x-temp')

@section('content')
    <section class="p-4 flex justify-end">
        <a class="flex space-x-1 p-2 rounded-md bg-green-300" href="{{ route('admin.clients.create') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </span>
            <p>Novo Cliente</p>
        </a>
    </section>
    <section class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 p-4">
        @foreach ($clients as $client)
            <article class="flex flex-col p-4 bg-white">
                <p class="pb-2 font-semibold">{{ $client->name }}</p>
                <footer class="flex justify-end space-x-1 items-center">
                    <span class="p-1 bg-blue-500 rounded-md" >
                        <a href="{{ route('admin.clients.task', [$client->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </a>
                    </span>
                    <span class="p-1 bg-red-500 rounded-md">
                        <form class="flex items-center" action="{{ route('admin.clients.destroy', [$client->id]) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg>
                            </button>
                        </form>
                    </span>
                </footer>
            </article>
        @endforeach
    </section>
@endsection