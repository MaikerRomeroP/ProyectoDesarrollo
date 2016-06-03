@extends('layout.template')
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<a href="{{route('usuarios.index')}}" class="badge bg-green">
			<i class="fa fa-arrow-left"></i>
			Regresar
		</a>
	</div>
	<div class="col-lg-12">
		<h1>Datos Personales</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		<form action="">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" value="{{$usuario->nombre}}" class="form-control" disabled>
			</div>
		
		
			<div class="form-group">
				<label for="">Apellido</label>
				<input type="text" value="{{$usuario->apellido}}" class="form-control" disabled>
			</div>
		
		
			<div class="form-group">
				<label for="">Telefono</label>
				<input type="text" value="{{$usuario->telefono}}" class="form-control" disabled>
			</div>
		
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" value="{{$usuario->email}}" class="form-control" disabled>
			</div>
		
		
			<div class="form-group">
				<label for="">Direccion</label>
				<input type="text" value="{{$usuario->direccion}}" class="form-control" disabled>
			</div>
		
		
			<div class="form-group">
				<label for="">Activo</label>
				@if($usuario->activo == 1)
					<input type="text" value="Activo" class="form-control" disabled>
				@else
					<input type="text" value="Inactivo" class="form-control" disabled>
				@endif
			</div>
		</form>
	</div>
</div>
@endsection