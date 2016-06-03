<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check())
            return redirect('/');
    	return view('login.ingresar');
    }
    public function ingresar(LoginRequest $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']], false)){
            return redirect()->to('/');
        }
        return redirect('login')
                        ->withInput($request->all())
                        ->with('mensaje', 'Usuario o Password incorrecto verifique los datos ingresados');
    }
    public function salir()
    {
        Auth::logout();
        return redirect('login');
    }
}
