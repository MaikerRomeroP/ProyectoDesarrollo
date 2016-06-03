@extends('layout.template')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 block-center">
			<a href="{!!route('usuarios.index')!!}" class="badge bg-green">
				<i class="fa fa-arrow-left"></i>
				Regresar
			</a>
		</div>
        {!!debug($errors)!!}
		<div class="col-lg-6 block-center">
			<h1>Editar Usuario</h1>
		</div>
		<div class="col-md-6 block-center">
			{!!Form::model($usuario,['route' => ['usuarios.update', $usuario->id], 'method' => 'PUT'])!!}
				@include('admin.usuarios.campos')
			{!!Form::close()!!}	
		</div>
	</div>
@endsection