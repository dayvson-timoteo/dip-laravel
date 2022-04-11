<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppCadastro;

class SearchController extends Controller
{
    public function search(){  
        $cadastros = AppCadastro::all();     
        return view('site.search', compact('cadastros'));
    }

    public function searchPost(){
        $cadastros = AppCadastro::where('conteudo', 'LIKE', '%' .$_POST['pesquisa']. '%')->get();
        return view('site.search', compact('cadastros'));
    }



}

































    // public function txtPreview($doc, $search){
    //     $doc = strtolower($doc);
    //     $doc = explode(" ",$doc);
    //     $wordIndice =array_search($search, $doc);
    //     if ($wordIndice >=250) {
    //         $doc = array_slice($doc, $wordIndice - 249, 500);
    //     }
    //     else{
    //         $doc = array_slice($doc, $wordIndice, 500);
    //     }
    //     $doc = str_ireplace($search, "<strong>" . $search . "</strong>", $doc);
    //     $doc = implode(" ", $doc);
    //     return view('site.search');
    // }