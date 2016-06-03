@extends('layout.template')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 block-center">
			<a href="{!!route('usuarios.index')!!}" class="badge bg-green">
				<i class="fa fa-arrow-left"></i>
				Regresar
			</a>
		</div>
		<div class="col-lg-6 block-center">
			<h1>Crear Usuario</h1>
		</div>
		<div class="col-md-6 block-center">
			{!!Form::open(['route' => 'usuarios.store', 'method' => 'POST'])!!}
				@include('admin.usuarios.campos')
			{!!Form::close()!!}	
		</div>
	</div>
@endsection