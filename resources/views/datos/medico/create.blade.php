@extends ('layouts.admin')
@section ('title')
<h>Registro de Médicos</h>
@endsection
@section ('contenido')

{{-- <div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		@if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
		@endif
	</div>
</div> --}}
		{!!Form::open(array('url'=>'datos/medico', 'method'=>'POST', 'autocomplete'=>'off'))!!}
		{{Form::token()}}
		
		
<h4><strong></strong></h4>
<div class="box box-primary">
	<div class="row">
	<br>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Apellido Paterno</label>
			<input type="text" name="apaterno" value="{{old('apaterno')}}" class="form-control">
			{!!$errors->first('apaterno','<span class=error>:message</span>')!!}
		</div>
	</div>

	</div>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Apellido Materno</label>
			<input type="text" name="amaterno" value="{{old('amaterno')}}" class="form-control">
			{!!$errors->first('amaterno','<span class=error>:message</span>')!!}
		</div>

	</div>
</div>

	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Nombre(s)</label>
			<input type="text" name="nombre" value="{{old('nombre')}}" class="form-control">
			{!!$errors->first('nombre','<span class=error>:message</span>')!!}
			
		</div>
	</div>
	</div>

	

<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Especialidad</label>
			<select name="especialidad" class="form-control select2">
				@foreach($especialidad as $esp)
				@if(old('especialidad') == $esp->nombre)
				<option value="{{$esp->nombre}}" selected>{{$esp->nombre}}</option>
				{!!$errors->first('especialidad','<span class=error>:message</span>')!!}
				@else
				<option value="{{$esp->nombre}}">{{$esp->nombre}}</option>
				{!!$errors->first('especialidad','<span class=error>:message</span>')!!}
				@endif
				@endforeach	
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Número de Cédula</label>
			<input type="number" name="num_cedula" value="{{old('num_cedula')}}" class="form-control">
			{!!$errors->first('num_cedula','<span class=error>:message</span>')!!}
		</div>
	</div>
</div>
</div>
	
	<div class="row">

	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{URL::action('MedicoController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
		</div>
	</div></center>
</div>

		{!!Form::close()!!}

@endsection