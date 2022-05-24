<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        error_log("estoy en login");
        return view('login');
    }

    public function cargarBienvenidos()
    {
        return view('bienvenidos');
    }

    public function validarLogin(Request $request)
    {
        error_log('validarLogin=>' . $request);

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:3',
        ]);

        return view('bienvenidos');
    }

}
