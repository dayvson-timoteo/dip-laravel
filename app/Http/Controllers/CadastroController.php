<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppCadastro;


class CadastroController extends Controller
{
    public function cadastro(Request $request){
        if(empty($cadastro)){
            $cadastro = new AppCadastro();
            $cadastro->tipo = $request->input('tipo');
            $cadastro->numero = $request->input('numero');
            $cadastro->unidade = $request->input('unidade');
            $cadastro->data = $request->input('data');
            $cadastro->linkPdf = $request->input('linkPdf');
            $cadastro->conteudo = $request->input('conteudo');
            $cadastro->save();
        }
        return view('site.cadastro');
    }
    
    public function cadastroGet(Request $request){
        return view('site.cadastro');
    }
}

