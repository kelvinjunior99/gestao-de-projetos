<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use Illuminate\Http\Request;

class MembroController extends Controller
{
    
    public function create(Request $request) {

        $request->validate([
            'nome' => 'required',
            'cargo' => 'required',
        ]);

        return Membro::create($request->all());

    }

    public function lista() {

        return view('usuario.lista.membros');
    }

    public function perfil() {
        
        return view('usuario.perfil');
    }

    public function cadastrar() {

        return view('cadastrar');
    }

   

   

  

   

   
    
}
