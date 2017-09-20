<?php

namespace Massoterapia\ModuloLogin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function authenticate(Request $request)
    {
        $credencial = $request->only('usu_email');

        
    }

}
