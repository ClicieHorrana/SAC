<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteLogin;

class LoginController extends Controller
{
    public function login(){
        return view('site.login');
    }
    public function autenticar(Request $request){
        //regras de validação
        $regras = [
            'Email'=>'Email',
            'Senha' => 'required'
        ];
        //mensagem de feedback de validaçao
        $feedback = [
            'Email.Email' => 'O campo de usuário(EMAIL) é obrigatório',
            'Senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);
        $Email = $request->get('Email');
        $Senha = $request->get('Senha');

        echo"Email: $Email | Senha: $Senha";
        echo 'br';

        //iniciar o model user
        $SiteLogin = new SiteLogin();

        $usuario = $SiteLogin->where('Email', $Email)->where('Senha', $Senha)->get()->first();

        if($usuario){
            return redirect()->route('site.login');
        }else{
            return redirect()->route('site.principal');
        }

    }
}