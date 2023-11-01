<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ControllerProduto extends Controller
{
    
    public function lista() {

        return Produto::all();
    }

    public function create(Request $request) {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        return Produto::create($request->all());
    }

    public function show($id) {

        return Produto::find($id);
    }

    public function update(Request $request, $id) {

        $produto = Produto::find($id);

        $produto->update($request->all());

        return $produto;
    }

    public function delete($id) {

        return Produto::destroy($id);
    }

    public function search($name) {

        return Produto::where('name', 'like', '%'.$name.'%')->get();
    }
}
