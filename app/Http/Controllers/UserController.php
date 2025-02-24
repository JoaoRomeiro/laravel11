<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Define variáveis para a view
        $greeting = "Hello World";
        $users = User::all(); // Busca todos os usuários do banco

        // Retorna a view 'users.index' passando as variáveis
        return view('users.index', compact('greeting', 'users'));
    }

    public function show(User $user)
    {
        // Retorna a view 'users.show' passando um único usuário
        return view('users.show', compact('user'));
    }
}