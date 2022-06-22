<?php

namespace App\Http\Controllers;

use App\Models\SiteLogin;
use Illuminate\Http\Request;
use App\Models\Suporte;


class LoginController extends Controller
{
    public function login(){

        return view('site.chamado');
    }


   public function store(Request $request){

        
        
        $chamado = new Suporte;
        $chamado->Email = $request->input('Email');
        $chamado->Setor = $request->input('Setor');
        $chamado->Descricao = $request->input('Descricao');
        
        $chamado->save();

        
        return redirect('/login');
    }
    Public function sair(Request $request){
        
        return redirect('/');
    }
    
}