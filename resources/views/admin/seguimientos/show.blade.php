@extends('layout.template')
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<a href="{{route('actas.index')}}" class="badge bg-green">
			<i class="fa fa-arrow-left"></i>
			Regresar
		</a>
	</div>
	<div class="col-lg-12">
		<h1>Acta {{$acta->id}}</h1>
	</div>
	<div class="col-md-12">
		{!!Form::model($acta, ['route' => ['actas.show', $acta->id], 'method' => 'GET'])!!}
			<div class="row">
				<div class="form-group col-lg-2">
					<label for="reunion">Reunion</label>
					{!!Form::select('reunion', ['Interna', 'Externa'], Request::get('tipo'), ['class' => 'form-control', 'id' => 'reunion', 'required', 'disabled'])!!}
				</div>
				<div class="form-group col-lg-2">
					<label for="fecha">Fecha</label>
					{!!Form::datetime('fecha', $acta->fecha, ['class' => 'form-control', 'required', 'disabled'])!!}
				</div>
				<div class="form-group col-lg-4">
					<label for="titulo">Titulo</label>
					{!!Form::text('titulo', null, ['class' => 'form-control', 'required', 'disabled'])!!}
				</div>
				<div class="form-group col-lg-4">
					<label for="motivo">Motivo</label>
					{!!Form::text('motivo', null, ['class' => 'form-control', 'required', 'disabled'])!!}
				</div>
				<div class="form-group col-lg-12">
					<label for="puntos">Puntos</label>
					{!!Form::textarea('puntos', null, ['class' => 'form-control', 'required', 'disabled', 'size' => '5x5'])!!}
				</div>
				<div class="form-group col-lg-12">
					<label for="conclusiones">Conclusiones</label>
					{!!Form::textarea('conclusiones', null, ['class' => 'form-control', 'required', 'disabled', 'size' => '5x5'])!!}
				</div>
				<div class="form-group col-lg-12">
					<label for="asistentes">Asistentes</label>
					<br>
					@foreach($asistentes as $asistente)
						<span class="label label-info">{{$asistente}}</span>
					@endforeach
				</div>
			</div>
		{!!Form::close()!!}	
	</div>
</div>
@endsection
@section('js')
	<script>
		$(".asistentes").select2();
	</script>
@endsection