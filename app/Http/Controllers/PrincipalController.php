<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SiteLogin;
use App\Models\Suporte;


class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal');
    }
    public function autenticar(Request $request){
        //regras de validação
        $regras = [
            'Email'=>'Email',
            'Senha' => 'required'
        ];
        //mensagem de feedback de validaçao
        $feedback = [
            'Senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);
        $Email = $request->get('Email');
        $Senha = $request->get('Senha');

        //iniciar o model user

        $SiteLogin = new SiteLogin();

        $usuario = $SiteLogin->where('Email', $Email)->where('Senha', $Senha)->get()->first();
        if($usuario){
            return redirect()->route('site.registro');
           
        }else{
            return view('site.principal');
            
        }
        
    }

    public function store(Request $request){
       

        $SiteLogin = new SiteLogin;
        $SiteLogin->Email = $request->Email;
        $SiteLogin->Senha = $request->Senha;

        $SiteLogin->save();

        return redirect('/.');    
    }
    
    
}
