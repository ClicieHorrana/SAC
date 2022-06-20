<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suporte;

class RegistroController extends Controller
{
    public function index(){

        $chamado = Suporte::get();
        return view('site.login', compact('chamado'));
    }
}
