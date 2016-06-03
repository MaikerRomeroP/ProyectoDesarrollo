<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeguimientosRequest;
use App\Negocio\Repositories\AcuerdoRepository;
use App\Negocio\Repositories\ActaRepository;
use App\Negocio\Repositories\UserRepository;
use App\Negocio\Repositories\SeguimientoRepository;
use App\Negocio\Entities\Seguimiento;
use App\Http\Requests;

class SeguimientoController extends Controller
{
	private $seguimiento, $acuerdo;
	public function __construct(SeguimientoRepository $seg, AcuerdoRepository $acu)
	{
		$this->seguimiento = $seg;
		$this->acuerdo = $acu;
	}
     public function index()
    {
        $seguimientos = $this->seguimiento->all();
        return view('admin.seguimientos.index', compact('seguimientos'));
    }
    public function create()
    {
    	$acuerdos = $this->acuerdo->all()->lists('texto', 'id');
        return view('admin.seguimientos.create', compact('acuerdos'));
    }
    public function store(SeguimientosRequest $request)
    {
        $seguimiento = new Seguimiento($request->all());
        $seguimiento->estado = 1;
        $seguimiento->save();
        return redirect()->route('seguimientos.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $seguimiento = $this->seguimiento->find($id);
        $acuerdos = $this->acuerdo->all()->lists('texto', 'id');
        return view('admin.seguimientos.edit', compact('seguimiento', 'acuerdos'));   
    }
    public function update(SeguimientosRequest $request, $id)
    {
        $seguimiento = $this->seguimiento->find($id);
        $seguimiento->fill($request->all());
        $seguimiento->save();
        return redirect()->route('seguimientos.index');
    }
    public function destroy($id)
    {
        $seguimiento = $this->seguimiento->find($id);
        $seguimiento->delete();
        return redirect()->route('seguimientos.index');
    }
}
