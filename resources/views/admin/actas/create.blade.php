@extends('layout.template')
@section('contenido')
	<div class="row">
		<div class="col-lg-12">
			<a href="{!!route('actas.index')!!}" class="badge bg-green">
				<i class="fa fa-arrow-left"></i>
				Regresar
			</a>
		</div>
		<div class="col-lg-12">
			<h1>Crear Actas</h1>
		</div>
		<div class="col-md-12">
			{!!Form::open(['route' => 'actas.store', 'method' => 'POST'])!!}
				<div class="row">
					<div class="form-group col-lg-2 hidden">
						<label for="reunion">Reunion</label>
						{!!Form::select('reunion', ['Interna', 'Externa'], Request::get('tipo'), ['class' => 'form-control', 'id' => 'reunion', 'required'])!!}
					</div>
					<div class="form-group col-lg-2">
						<label for="fecha">Fecha</label>
						{!!Form::date('fecha', null, ['class' => 'form-control', 'required'])!!}
					</div>
					<div class="form-group col-lg-4">
						<label for="titulo">Titulo</label>
						{!!Form::text('titulo', null, ['class' => 'form-control', 'required'])!!}
					</div>
					<div class="form-group col-lg-4">
						<label for="motivo">Motivo</label>
						{!!Form::text('motivo', null, ['class' => 'form-control', 'required'])!!}
					</div>
					<div class="form-group col-lg-12">
						<label for="puntos">Puntos</label>
						{!!Form::textarea('puntos', null, ['class' => 'form-control', 'required', 'size' => '5x5'])!!}
					</div>
					<div class="form-group col-lg-12">
						<label for="conclusiones">Conclusiones</label>
						{!!Form::textarea('conclusiones', null, ['class' => 'form-control', 'required', 'size' => '5x5'])!!}
					</div>
					<div class="form-group col-lg-12">
						<label for="asistentes">Asistentes</label>
						{!!Form::select('asistentes[]', $asistentes, null, ['class' => 'form-control asistentes', 'multiple' => 'multiple', 'required'])!!}
					</div>
					<div class="col-lg-2">
						<input type="submit" class="btn btn-success btn-block">
					</div>
				</div>
			{!!Form::close()!!}	
		</div>
	</div>
@endsection
@section('js')
	<script type="text/javascript">
	    $(document).ready(function () {
	        // inicializamos el plugin
	        $('.asistentes').select2({
	            // Activamos la opcion "Tags" del plugin
	            tags: true,
	            tokenSeparators: [','],
	            ajax: {
	                dataType: 'json',
	                url: '{{ url("tags") }}',
	                delay: 250,
	                data: function(params) {
	                    return {
	                        term: params.term
	                    }
	                },
	                processResults: function (data, page) {
	                  return {
	                    results: data
	                  };
	                },
	            }
	        });
	    });
	</script>
@endsection