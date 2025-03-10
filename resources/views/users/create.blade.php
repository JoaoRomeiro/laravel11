@extends('layouts.app')

@section('title', 'Usuario: Cadastrar')

@section('content')
    <h2 class="title">Usuario: Cadastrar</h2>

    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" name="password">
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" id="avatar">
        </div>

        <div>
            <a href="{{ route('users.index') }}">Voltar</a>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
@endsection
