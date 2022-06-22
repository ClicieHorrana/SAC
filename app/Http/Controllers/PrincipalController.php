<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SiteLogin;

class PrincipalController extends Controller
{
    public function principal(){

        return view('site.principal');
    }
    public function autenticar(Request $request){

        
        //regras de validação
        $regras = [
            'Email'=>'Email',
            'Senha' => 'required',
        ];
        //mensagem de feedback de validaçao
        $feedback = [
            'Senha.required' => 'O campo senha é obrigatório',
        ];

        $regras = $request->validate($regras, $feedback);
        $Email = $request->get('Email');
        $Senha = $request->get('Senha');

        //iniciar o model user

        $SiteLogin = new SiteLogin();

        $usuario = $SiteLogin->where('Email', $Email)->where('Senha', $Senha)->get()->first();
        if ($usuario) {
            return redirect()->route('site.registro', $usuario);

        } else {
            return view('site.principal');
        }
    }

    //salvar o cadastro de login
    public function store(Request $request){

        $SiteLogin = new SiteLogin();
        $SiteLogin->EMAIL=$request->Email;
        $SiteLogin->SENHA=$request->Senha;
        $SiteLogin->NOME=$request->Nome;

        $SiteLogin->save();


    return redirect('/');    
    }
    
}
