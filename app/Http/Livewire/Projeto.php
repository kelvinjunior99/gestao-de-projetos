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
    public $visibilidade;
    public $tipo;
    public $github;
    public $data_final;

    public $teste = "teste";

    protected $rules = [
        'nome' => 'required|min:20'
    ];

    public function render()
    {
        return view('livewire.usuario.cadastrar.projeto');
    }

    public function create() 
    {
        $this->slug = Str::slug($this->nome);
        $nome = $this->nome;

        $sql = DB::table('projetos')->where('nome', $nome)->first();
        if($sql) {
            
            return back()->with('erroNome', 'Mude o nome, já existe um projeto com este nome!');
        }
        else {
            
            Projetos::create([
                'nome' => $this->nome,
                'descricao' => $this->descricao,
                'slug' => $this->slug,
                //'id_user' => 1,
                'estado' => "activo",
                 'visibilidade' => $this->visibilidade,
                 'github' => $this->github,
                 'data_final' => $this->data_final,
                 'tipo' => $this->tipo,
            ]);
            return back()->with('sucesso', 'Cadastrado com sucesso!');
        }

        
    }


    
}
