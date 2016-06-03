<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Negocio\Entities\User;
use App\Negocio\Entities\Rol;
use App\Http\Requests\UsuarioRequest;
use App\Negocio\Repositories\UserRepository;

class UsuarioController extends Controller
{
    private $userRepo;
    public function __construct(UserRepository $user)
    {
        $this->userRepo = $user;
    }
    public function index()
    {
    	$usuarios = $this->userRepo->all();
    	return view('admin.usuarios.index', compact('usuarios'));
    }
    public function destroy($id='')
    {
    	$usuario = $this->userRepo->find($id);
        $usuario->delete();
        return redirect()->back();
    }
    public function show($id='')
    {
    	$usuario = $this->userRepo->find($id);
    	return view('admin.usuarios.show', compact('usuario'));
    }
    public function edit($id='')
    {
    	$usuario = $this->userRepo->find($id);
        $roles = Rol::lists('nombre', 'id');
        $estados = ['1' => 'Activo', '0' => 'Inactivo'];
    	return view('admin.usuarios.edit', compact('usuario', 'roles', 'estados'));
    }
    public function update(UsuarioRequest $request, $id)
    {
        $usuario = $this->userRepo->find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->route('usuarios.index');
    }
    public function create()
    {
        $roles = Rol::lists('nombre', 'id')->toArray();
        $estados = ['0' => 'Inactivo', '1' => 'Activo'];
        return view('admin.usuarios.create', compact('roles', 'estados'));
    }
    public function store(UsuarioRequest $request)
    {
        $usuario = new User($request->all());
        $usuario->estado = 1;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }
    public function getPassword($id)
    {
        if(\Auth::User()->id == $id || \Auth::User()->id == 1){

            return view('admin.usuarios.password', compact('id'));
        }else{
            return redirect()->back();
        }
    }
    public function postPassword(Request $request, $id)
    {
        $rules = [
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6'
            ];
        $val = \Validator::make($request->all(), $rules);
        if($val->passes() == true){
            $usuario = $this->userRepo->find($id);
            $usuario->password = $request->password;
            $usuario->save();
            return redirect()->route('usuarios.index');
        }
        return redirect()->back()
                        ->withErrors($val)
                        ->withInput();
    }
}
