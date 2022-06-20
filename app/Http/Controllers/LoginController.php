<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suporte;

class LoginController extends Controller
{
    public function login(){

        return view('site.login');
    }


   public function store(Request $request){
        
        $chamado = new Suporte;
        $chamado->Email = $request->input('Email');
        $chamado->Setor = $request->input('Setor');
        $chamado->Descricao = $request->input('Descricao');
        
        $chamado->save();

        
        return view('site.login');     
    }
}