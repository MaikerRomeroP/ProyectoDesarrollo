@extends('layout.template')
@section('contenido')
	<div class="row">
		<div class="col-lg-12">
			<h1>Lista de Seguimientos</h1>
		</div>
		<div class="col-lg-12">
			<a href="{{route('seguimientos.create')}}" class="btn btn-success">
				<i class="fa fa-plus-circle"></i>
				Agregar
			</a>
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-12">
			{!! $seguimientos->links() !!}
			<table class="table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Seguimiento</td>
						<td>Acuerdo</td>
						<td>Fecha Fin</td>
						<td>Estado</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					@foreach($seguimientos as $seguimiento)
						<tr>
							<td>{{$seguimiento->id}}</td>
							<td>{{$seguimiento->texto}}</td>
							<td>{{$seguimiento->fechaFin}}</td>
							<td>{{$seguimiento->acuerdo_id}}</td>
							<td>
								@if($seguimiento->estado == 0)
									<span class="label label-danger">Inactivo</span>
								@else
									<span class="label label-success">Activo</span>
								@endif
							</td>
							<td>
								<a href="{{route('seguimientos.edit', $seguimiento->id)}}" title="Editar">
									<span class="label label-success">Editar</span>
								</a>
								<a href="{{route('seguimientos.destroy', $seguimiento->id)}}" title="Eliminar" data-method="DELETE" data-token="{{csrf_token()}}" data-confirm="Estas seguro de eliminar este seguimiento?">
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