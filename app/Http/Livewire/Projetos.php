<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Projetos extends Component
{
    //dados 

    public $nome = "sksk";
    public $descricao;

    public function render()
    {
        return view('livewire.usuario.lista.projetos');
    }

}
