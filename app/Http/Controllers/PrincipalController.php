<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SiteLogin;


class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal');
    }
    
}
