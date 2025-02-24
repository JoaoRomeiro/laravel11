@extends('layouts.app')

@section('title', "Detalhes de {$user->name}")

@section('content')
    <h1>Usuário: {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Criado em: {{ $user->created_at->format('d/m/Y H:i') }}</p>

    @if ($user->id === 1)
        <p>Admin: Sim</p>
    @else
        <p>Admin: Não</p>
    @endif

    <a href="{{ route('users.index') }}">Voltar</a>
@endsection
