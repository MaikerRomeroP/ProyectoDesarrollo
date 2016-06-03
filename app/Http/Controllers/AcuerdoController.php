<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Negocio\Repositories\AcuerdoRepository;
use App\Negocio\Repositories\ActaRepository;
use App\Negocio\Repositories\UserRepository;
use App\Negocio\Entities\Acuerdo;
use App\Http\Requests;
use App\Http\Requests\AcuerdosRequest;

class AcuerdoController extends Controller
{
	private $acuerdoRepo, $actaRepo, $userRepo;
	public function __construct(AcuerdoRepository $acuerdo, ActaRepository $acta, UserRepository $user)
	{
		$this->acuerdoRepo = $acuerdo;
		$this->actaRepo = $acta;
		$this->userRepo = $user;
	}
     public function index()
    {
    	$acuerdos = $this->acuerdoRepo->all();
        return view('admin.acuerdos.index', compact('acuerdos'));
    }

    public function create()
    {
    	$actas = $this->actaRepo->all()->lists('titulo', 'id');
    	$usuarios = $this->userRepo->all()->lists('nombre', 'id')->toArray();
        return view('admin.acuerdos.create', compact('actas', 'usuarios'));
    }

    public function store(AcuerdosRequest $request)
    {
        $acuerdo = new Acuerdo($request->all());
        $acuerdo->estado = 1;
        $acuerdo->save();
        return redirect()->route('acuerdos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acuerdo = $this->acuerdoRepo->find($id);
        $actas = $this->actaRepo->all()->lists('titulo', 'id');
        $usuarios = $this->userRepo->all()->lists('nombre', 'id');
        return view('admin.acuerdos.edit', compact('acuerdo',  'actas', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcuerdosRequest $request, $id)
    {
        $acuerdo = $this->acuerdoRepo->find($id);
        $acuerdo->fill($request->all());
        $acuerdo->save();
        return redirect()->route('acuerdos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
