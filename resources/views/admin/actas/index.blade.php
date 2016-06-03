@extends('layout.template')
@section('contenido')
	<div class="row">
		<div class="col-lg-12">
			<h1>Lista de Actas</h1>
		</div>
		<div class="col-lg-12">
			<div class="dropdown">
				<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
					<i class="fa fa-plus-circle"></i>
					Crear
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="{{route('actas.create', 'tipo=1')}}">Externa</a>
					</li>
					<li>
						<a href="{{route('actas.create', 'tipo=2')}}">Interna</a>
					</li>
				</ul>
			</div>
		</a>
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-12">
			{!! $actas->links() !!}
			<table class="table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Titulo</td>
						<td>Motivo</td>
						<td>Reuni&oacute;n</td>
						<td>Estado</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					@foreach($actas as $acta)
						<tr>
							<td>AC{{$acta->id}}</td>
							<td>{{$acta->titulo}}</td>
							<td>{{$acta->motivo}}</td>
							<td>
								@if($acta->reunion == 0)
									<span class="label label-info">Interna</span>
								@else
									<span class="label label-success">Externa</span>
								@endif
							</td>
							<td>
								@if($acta->estado == 0)
									<span class="label label-danger">Inactivo</span>
								@else
									<span class="label label-success">Activo</span>
								@endif
							</td>
							<td>
								<a href="{{route('actas.show', $acta->id)}}" title="Ver">
										<span class="label label-info">Ver</span>
								</a>

								<a href="{{route('actas.edit', $acta->id)}}" title="Editar">
									<span class="label label-success">Editar</span>
								</a>

								<a href="{{route('actas.destroy', $acta->id)}}" title="Eliminar" data-method="DELETE" data-token="{{csrf_token()}}" data-confirm="Estas seguro de eliminar este acta?">
									<span class="label label-danger">Eliminar</span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection