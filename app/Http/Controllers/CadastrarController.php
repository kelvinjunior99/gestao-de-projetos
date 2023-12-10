<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    
    public function create() {

        return view('cadastrar');
    }
}
