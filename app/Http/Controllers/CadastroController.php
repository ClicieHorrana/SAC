<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteLogin;
use App\Models\Suporte;

class CadastroController extends Controller

{
    public function principal() {
        return view('site.cadastro');
    }
    
    public function store(Request $request){

        $SiteLogin = new SiteLogin();
        $SiteLogin->EMAIL=$request->Email;
        $SiteLogin->SENHA=$request->Senha;

        $SiteLogin->save();


    return redirect('site.login');    
    }
    
}
