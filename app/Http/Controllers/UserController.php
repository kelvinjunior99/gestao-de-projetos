<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /* criar usuario */
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'cargo' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'cargo' => $request->cargo,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('primeirotoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function update(Request $request, $id) {

        $membro = User::find($id);

        $membro->update($request->all());

        return $membro;
    }

    public function delete($id) {

        return User::destroy($id);
    }

    public function lista()
    {

        return User::all();
    }

    public function show($id) {

        return User::find($id);
    }

    public function search($nome) {

        return User::where('name', 'like', '%'.$nome.'%')->get();
    }

    public function membroProjeto()
    {
        return User::with('projeto')->get();
    }
}
