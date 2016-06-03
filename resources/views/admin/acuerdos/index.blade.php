@extends('layout.template')
@section('contenido')
	<div class="row">
		<div class="col-lg-12">
			<h1>Lista de Acuerdos</h1>
		</div>
		<div class="col-lg-12">
			<a href="{{route('acuerdos.create')}}" class="btn btn-success">
				<i class="fa fa-plus-circle"></i>
				Agregar
			</a>
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-12">
			{!! $acuerdos->links() !!}
			<table class="table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Contenido</td>
						<td>Fecha Cumplimiento</td>
						<td>No. Acta</td>
						<td>Usuario</td>
						<td>Estado</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					@foreach($acuerdos as $acuerdo)
						<tr>
							<td>{{$acuerdo->id}}</td>
							<td>{{$acuerdo->texto}}</td>
							<td>{{$acuerdo->cumplimiento}}</td>
							<td>
								<a href="{{route('actas.show', $acuerdo->acta_id)}}">{{$acuerdo->acta_id}}</a>
							</td>
							<td>{{$acuerdo->nombre}}</td>
							<td>
								@if($acuerdo->estado == 0)
									<span class="label label-danger">Inactivo</span>
								@else
									<span class="label label-success">Activo</span>
								@endif
							</td>
							<td>
								<a href="{{route('acuerdos.edit', $acuerdo->id)}}" title="Editar">
									<span class="label label-success">Editar</span>
								</a>
								<a href="{{route('acuerdos.destroy', $acuerdo->id)}}" title="Eliminar" data-method="DELETE" data-token="{{csrf_token()}}" data-confirm="Estas seguro de eliminar este acuerdo?">
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