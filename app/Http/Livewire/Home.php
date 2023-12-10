<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
 
 

    public function render()
    {
        $home = "";
        return view('livewire.home', compact('home'));
    }
}
