<?php

namespace App\Http\Controllers;

use App\Models\SiteLogin;
use Illuminate\Http\Request;
use App\Models\Suporte;

class RegistroController extends Controller
{
    public function index(){

        $chamado = Suporte::get();
        $usuario = SiteLogin::get();
        return view('site.login', compact('chamado', 'usuario'));
    }
}
