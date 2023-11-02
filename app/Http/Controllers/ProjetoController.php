<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    
    public function lista() {

        $projetos = '';
        return view('usuario.lista.projetos', compact('projetos'));
    }

    public function create(Request $request) {

       /* $request->validate([
            'nome' => 'required',
            //'descricao' => 'required',
            'id_membro' => 'required',
           // 'data' => 'required',
            //'estado' => 'required',
        ]); */
        

        $dados = $request->all();
        $dados['slug'] = Str::slug($request->nome);

        return Projeto::create($dados);
    }

    public function update($id, Request $request) {

        $dados = $request->all();
        //$id['slug'] = Str::slug($request->nome);

        $projeto = Projeto::find($id);

        $projeto->update($dados);

        return $projeto;
    }

    public function show($id) {

        return Projeto::find($id);
    }

    public function delete($id) {

        return Projeto::destroy($id);
    }

    public function search($nome) {

        return Projeto::where('nome', 'like', '%'.$nome.'%')->get();
    }
}
