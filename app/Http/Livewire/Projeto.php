<?php

namespace App\Http\Livewire;

use App\Models\Projetos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use Livewire\Component;

class Projeto extends Component
{
    public $nome;
    public $slug;
    public $descricao;

    protected $rules = [
        'nome' => 'required|min:20'
    ];

    public function render()
    {
        return view('livewire..usuario.cadastrar.projeto');
    }

    public function create() 
    {
        $this->slug = Str::slug($this->nome);
        $nome = $this->nome;

        $sql = DB::table('projetos')->where('nome', $nome)->first();
        if($sql) {
            dd('nome é igual');
        }
        else {
            dd('nome não é igual');
        }

        Projetos::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'slug' => $this->slug,
            //'id_user' => 1,
            'estado' => "activo",
        ]);
        return back()->with('sucesso', 'Cadastrado com sucesso!');
    }
}
