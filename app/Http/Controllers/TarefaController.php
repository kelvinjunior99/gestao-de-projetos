<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    

    public function lista() {

        return view('usuario.lista.tarefas');
    }
}
