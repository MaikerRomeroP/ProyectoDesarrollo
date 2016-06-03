@extends('layout.template')
@section('contenido')
	<div class="row">
		<div class="col-lg-12">
			<a href="{!!route('actas.index')!!}" class="badge bg-green">
				<i class="fa fa-arrow-left"></i>
				Regresar
			</a>
		</div>
		<div class="col-lg-12">
			<h1>Crear Acuerdos</h1>
		</div>
		<div class="col-md-6">
			{!!Form::open(['route' => 'acuerdos.store', 'method' => 'POST'])!!}
				<div class="form-group ">
					<label for="texto">Acuerdo</label>
					{{Form::textarea('texto', null, ['class' => 'form-control', 'required'])}}
				</div>
				<div class="form-group ">
					<label for="user_id">Usuario Asignado</label>
					{{Form::select('user_id', $usuarios, null, ['class' => 'form-control'])}}
				</div>
				<div class="form-group ">
					<label for="user_id">Acta Asignada</label>
					{{Form::select('acta_id', $actas, null, ['class' => 'form-control'])}}
				</div>
				<div class="form-group ">
					<label for="cumplimiento">Fecha Cumplimiento</label>
					{{Form::date('cumplimiento', null, ['class' => 'form-control', 'required'])}}
				</div>
				<input type="submit" class="btn btn-success btn-block"></input>
			{!!Form::close()!!}	
		</div>
	</div>
@endsection
