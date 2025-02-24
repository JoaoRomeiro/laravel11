@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
    <h2>Lista de Usuários</h2>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
