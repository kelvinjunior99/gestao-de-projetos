<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Teste extends Component
{

    public $teste = "texto";
    
    public function render()
    {
        return view('livewire.teste');
    }
}
