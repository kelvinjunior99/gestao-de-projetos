<?php

namespace App\Http\Livewire;

use App\Models\Projetos;
use Livewire\Component;
use Livewire\WithPagination;

class AllProject extends Component
{
    use WithPagination;

    public function render()
    {
        $projetos = Projetos::paginate(3);

        return view('livewire.usuario.lista.all-project', compact('projetos'));
    }
}
