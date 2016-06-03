<div class="row">
	<div class="form-group col-md-6">
		<label for="nombre">Nombre</label>
		{!!Form::text('nombre', null, ['class' => 'form-control'])!!}
	</div>
	<div class="form-group col-md-6">
		<label for="apellido">Apellido</label>
		{!!Form::text('apellido', null, ['class' => 'form-control'])!!}
	</div>
	<div class="form-group col-md-6">
		<label for="rol_id">Rol</label>
		{!!Form::select('rol_id', $roles, null, ['class' => 'form-control'])!!}
	</div>
	<div class="form-group col-md-6">
		<label for="telefono">Telefono</label>
		{!!Form::number('telefono', null, ['class' => 'form-control'])!!}
	</div>
	<div class="form-group col-md-6">
		<label for="email">Email</label>
		{!!Form::email('email', null, ['class' => 'form-control'])!!}
	</div>
	<div class="form-group col-md-6">
		<label for="direccion">Direccion</label>
		{!!Form::text('direccion', null, ['class' => 'form-control'])!!}
	</div>
</div>
<input type="submit" class="btn btn-success btn-block">
@include('layout.errors')