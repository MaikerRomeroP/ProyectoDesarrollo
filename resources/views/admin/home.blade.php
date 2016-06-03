@extends('layout.template')
@section('contenido')

<div class="row top_tiles">
	<div class="animated flipInY col-lg-2 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon">
				<i class="fa fa-user"></i>
			</div>
			<div class="count">
				<a href="{{route('usuarios.index')}}">
					<i class="fa fa-sign-in"></i>
				</a>
			</div>
			<h3>Usuarios</h3>
			<p>Listado de todos los usuarios</p>
		</div>	
	</div>
	<div class="animated flipInY col-lg-2 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon">
				<i class="fa fa-book"></i>
			</div>
			<div class="count">
				<a href="{{route('actas.index')}}">
					<i class="fa fa-sign-in"></i>
				</a>
			</div>
			<h3>Actas</h3>
			<p>Listado de todos las actas</p>
		</div>	
	</div>
	<div class="animated flipInY col-lg-2 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon">
				<i class="fa fa-hand-paper-o"></i>
			</div>
			<div class="count">
				<a href="{{route('acuerdos.index')}}">
					<i class="fa fa-sign-in"></i>
				</a>
			</div>
			<h3>Acuerdos</h3>
			<p>Listado de todos los acuerdos</p>
		</div>	
	</div>
	<div class="animated flipInY col-lg-2 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon">
				<i class="fa fa-eye"></i>
			</div>
			<div class="count">
				<a href="{{route('seguimientos.index')}}">
					<i class="fa fa-sign-in"></i>
				</a>
			</div>
			<h3>Seguimientos</h3>
			<p>Listado de todos los seguimientos</p>
		</div>	
	</div>
</div>
@endsection
