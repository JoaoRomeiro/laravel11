<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // Define variáveis para a view
        $greeting = "Hello World";
        //$users = User::paginate(3); // Busca todos os usuários do banco
        $perPage = $request->input('per_page', 3); // Padrão: 3
        $users = User::paginate($perPage);

        // Retorna a view 'users.index' passando as variáveis
        return view('users.index', compact('greeting', 'users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate(
            [
                'name' => 'required|min:3|max:60',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|min:3|max:255',
                'avatar' => 'file',
            ]
        );

        User::create($input);

        if (!empty($input['avatar']) && $input['avatar']->isValid()) {
            $input['avatar']->store();
        }

        return redirect()->route('users.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function show(User $user)
    {
        // Retorna a view 'users.show' passando um único usuário
        return view('users.show', compact('user'));
    }
}