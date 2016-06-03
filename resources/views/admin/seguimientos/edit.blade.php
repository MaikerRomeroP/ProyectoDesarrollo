@extends('layout.template')
@section('contenido')
	<div class="row">
		<div class="col-lg-12">
			<a href="{!!route('seguimientos.index')!!}" class="badge bg-green">
				<i class="fa fa-arrow-left"></i>
				Regresar
			</a>
		</div>
		<div class="col-lg-12">
			<h1>Editar Seguimiento</h1>
		</div>
		<div class="col-md-12">
			{!!Form::model($seguimiento,['route' => ['seguimientos.update', $seguimiento->id], 'method' => 'PUT'])!!}
				<div class="form-group ">
					<label for="texto">Seguimiento</label>
					{{Form::textarea('texto', null, ['class' => 'form-control', 'required'])}}
				</div>
				<div class="form-group ">
					<label for="user_id">Acuerdo</label>
					{{Form::select('acuerdo_id', $acuerdos, null, ['class' => 'form-control'])}}
				</div>
				<div class="form-group">
					<label for="fechaFin">Fecha Fin</label>
					{{Form::date('fechaFin', null, ['class' => 'form-control'])}}
				</div>
				
				<input type="submit" class="btn btn-success btn-block"></input>
			{!!Form::close()!!}	
			@include('layout.errors')
		</div>
	</div>
@endsection
