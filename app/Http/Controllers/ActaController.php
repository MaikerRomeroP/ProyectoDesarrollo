<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ActasRequest;
use App\Negocio\Entities\Acta;
use App\Negocio\Entities\Asistente;
use App\Negocio\Entities\User;
use App\Negocio\Repositories\UserRepository;
use App\Negocio\Repositories\ActaRepository;
class ActaController extends Controller
{
    private $userRepo;
    private $actaRepo;
    public function __construct(UserRepository $user, ActaRepository $acta) //Injeccion de dependencia
    {
        $this->userRepo = $user;
        $this->actaRepo = $acta;
    }
    public function index()
    {
    	$actas = $this->actaRepo->all();
    	return view('admin.actas.index', compact('actas'));
    }

    public function create(Request $request)
    {
        $asistentes = null;
        #4 - gerente #5 - empleados
        if($request['tipo'] == 2){ 
            $asistentes = $this->userRepo->getUsuarios(['4', '5']);
        }else{
            $asistentes = $this->userRepo->getUsuarios(['2', '3']); 
        }
        return view('admin.actas.create', compact('asistentes'));
    }

    public function store(ActasRequest $request)
    {
        $asistentes = $request->get('asistentes');
        
        $acta = new Acta($request->all());
        $acta->estado = 1;
        $acta->save();
        for($i = 0; $i<count($asistentes); $i++){
            $asistente = new Asistente();
            $asistente->acta_id = $acta->id;
            $asistente->user_id = $asistentes[$i];
            $asistente->estado = 1;
            $asistente->save();
        }
        return redirect()->route('actas.index');
    }

    public function show($id)
    {
        $acta = $this->actaRepo->find($id);
        $asistentes = $this->actaRepo->getAsistentes($id);
        $usuarios = $this->userRepo->all()->lists('nombre', 'id')->toArray();
        return view('admin.actas.show', compact('acta', 'usuarios', 'asistentes'));
    }

    public function edit($id)
    {
        $acta = $this->actaRepo->find($id);
        $asistentes = $this->actaRepo->getAsistentes($id);
        return view('admin.actas.edit', compact('acta', 'asistentes'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $acta = $this->actaRepo->find($id);
        $acta->delete();
        return redirect()->route('actas.index');
    }
    public function asistentes($id)
    {
        
    }

}
