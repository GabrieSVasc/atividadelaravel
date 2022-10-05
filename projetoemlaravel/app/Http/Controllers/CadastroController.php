<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro as Cadastro;

class CadastroController extends Controller
{
    public function salvar(Request $request){
        $cadastro = new Cadastro();
        $cadastro->nome = $request->nome;
        $cadastro->especie = $request->especie;
        $cadastro->foto = $request->foto;
        $cadastro->telefone = $request->telefone;
        $cadastro->save();
        return redirect('/procurados');
    }

    public function mostrar(){
        $cadastros = Cadastro::all();
        return view ('listagem', ['cadastros' => $cadastros]);
    }

    public function deletar($id){
        Cadastro::findorfail($id)->delete();
        return redirect('/');

    }

    public function editar($id){
        $cadastro = Cadastro::findorfail($id);

        return view('editar', ['cadastro' => $cadastro]);
    }

    public function atualizar(Request $request, $id){
        
        Cadastro::findorfail($id)->update($request->all());
        return redirect('/');
    }
}