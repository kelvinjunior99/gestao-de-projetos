<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    

    public function lista() {

        $tarefas = '';
        return view('usuario.lista.tarefas', compact('tarefas'));
    }
}
