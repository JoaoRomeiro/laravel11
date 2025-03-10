@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
    <h2 class="title">Lista de Usuários</h2>

    <img src="{{ Vite::asset('resources/images/astronauta.jpg') }}" alt="" width="100">

    <label for="per_page">Itens por página:</label>
    <form method="GET" action="{{ route('users.index') }}">
        <label for="per_page">Itens por página:</label>
        <select name="per_page" id="per_page" onchange="this.form.submit()">
            <option value="3" {{ request('per_page') == 3 ? 'selected' : '' }}>3</option>
            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
        </select>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                <a class="user-name" href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
            </li>
        @endforeach

        {{ $users->links() }}
    </ul>
@endsection
