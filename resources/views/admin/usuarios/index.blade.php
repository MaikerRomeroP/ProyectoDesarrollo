@extends('layout.template')
@section('titulo')
	Listado de usuarios
@endsection
@section('contenido')
	<div class="row">
		<div class="col-lg-12">
			<h1>Lista de Usuarios</h1>
		</div>
		<div class="col-lg-12">
			<a href="{{route('usuarios.create')}}" class="btn btn-success">
			<i class="fa fa-plus-circle"></i>
			Crear
		</a>
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-12">
			{!! $usuarios->links() !!}
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Telefono</th>
						<th>Direccion</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuarios as $i => $usuario)
						<tr>
							<td>{{$i}}</td>
							<td>{{$usuario->nombre}}</td>
							<td>{{$usuario->email}}</td>
							<td>{{$usuario->telefono}}</td>
							<td>{{$usuario->direccion}}</td>
							<td>
								@if($usuario->estado == 1)
									<span class="label label-success">Activo</span>
								@else
									<span class="label label-danger">Inactivo</span>
								@endif
							</td>
							<td>
								<a href="{{route('usuarios.show', $usuario->id)}}" title="Ver">
										<span class="label label-info">Ver</span>
								</a>

								<a href="{{route('usuarios.edit', $usuario->id)}}" title="Editar">
									<span class="label label-success">Editar</span>
								</a>

								<a href="{{route('usuarios.destroy', $usuario->id)}}" title="Eliminar" data-method="DELETE" data-token="{{csrf_token()}}" data-confirm="Estas seguro de eliminar este usuario?">
									<span class="label label-danger">Eliminar</span>
								</a>
							
								<a href="{{route('usuarios.password', $usuario->id)}}" title="Asignar Password">
									<span class="label label-default">Password</span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection