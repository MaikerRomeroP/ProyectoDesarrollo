@extends('layout.template')
@section('titulo')
	Cambio de Password
@endsection
@section('contenido')
	<div class="row">
		<div class="col-lg-6 block-center">
			<a href="{!!route('usuarios.index')!!}" class="badge bg-green">
				<i class="fa fa-arrow-left"></i>
				Regresar
			</a>
		</div>
		<div class="col-lg-6 block-center">
			<h1>Cambiar Password</h1>
		</div>
		<div class="col-lg-6 block-center">
			{{Form::open(['route' => ['usuarios.password', $id], 'method' => 'post'])}}
				<div class="form-group">
					<label for="password">Password</label>
					{{Form::password('password',['class' => 'form-control', 'required'])}}
				</div>
				<div class="form-group">
					<label for="password_confirmation">Password Confirmation</label>
					{{Form::password('password_confirmation', ['class' => 'form-control', 'required'])}}
				</div>
				<input type="submit" class="btn btn-block btn-success">
			{{Form::close()}}
			@include('layout.errors')
		</div>
	</div>
@endsection