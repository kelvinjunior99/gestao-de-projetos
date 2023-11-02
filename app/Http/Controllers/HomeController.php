<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home() {

        $home = '';
        return view('usuario.home', compact('home'));
    }
}
