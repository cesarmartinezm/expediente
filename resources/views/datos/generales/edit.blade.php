@extends ('layouts.admin')
@section ('title')
<h>Editar Paciente</h>
@endsection
@section ('contenido')

<div class="row">
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
</div>
		{!!Form::model($paciente,['method'=>'PATCH','route'=>['generales.update',$paciente->idpaciente]])!!}
		{{Form::token()}}
		
<h4><strong>Datos Generales</strong></h4>
<div class="box box-primary">
<div class="row">
	<br>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Apellido Paterno</label>
			<input type="text" name="apaterno" value="{{$paciente->apaterno}}" class="form-control">
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Apellido Materno</label>
			<input type="text" name="amaterno" value="{{$paciente->amaterno}}" class="form-control">
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Nombre(s)</label>
			<input type="text" name="nombre" value="{{$paciente->nombre}}" class="form-control">
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Fecha de Nacimiento</label><br>
			<input type="date" name="fnacimiento"  value="{{$paciente->fnacimiento}}" class="form-control">
		</div>
	</div>
</div>
</div><!--</div class="row">-->

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Nacionalidad</label>
			<select name="nacionalidad" class="form-control select2">
				@if($paciente->nacionalidad=='MEXICANA')
				<option value="MEXICANA" selected>MEXICANA</option>
				@else
				<option value="MEXICANA" >MEXICANA</option>
				@endif
				@if($paciente->nacionalidad=='EXTRANJERA')
                <option value="EXTRANJERA" selected>EXTRANJERA</option>
                @else
                <option value="EXTRANJERA">EXTRANJERA</option>
                @endif
			</select>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Estado de Nacimiento</label>
			<select name="edo_nacimiento" class="form-control" >
				@foreach($estado as $estado)
				@if($estado->nombre == $paciente->edo_nacimiento)
				<option value="{{$estado->nombre}}" selected>{{$estado->nombre}}</option>
				@else
				<option value="{{$estado->nombre}}">{{$estado->nombre}}</option>
				@endif
				@endforeach
			</select>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Sexo</label><br>
			@if($paciente->genero=='FEMENINO')
			<input type="radio" name="genero" value="FEMENINO" checked>FEMENINO
			@else
			<input type="radio" name="genero" value="FEMENINO">FEMENINO
			@endif
			@if($paciente->genero=='MASCULINO')
			<input type="radio" name="genero" value="MASCULINO" checked>MASCULINO
			@else
			<input type="radio" name="genero" value="MASCULINO">MASCULINO
			@endif
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Estado Civil</label>
			<select name="edo_civil" class="form-control select2">
				@if($paciente->edo_civil=='CASADO')
				<option value="CASADO" selected>CASADO</option>
				@else
				<option value="CASADO" >CASADO</option>
				@endif
				@if($paciente->edo_civil=='SOLTERO')
				<option value="SOLTERO" selected>SOLTERO</option>
				@else
				<option value="SOLTERO">SOLTERO</option>
				@endif
			</select>
		</div>
	</div>
</div>
</div><!--</div class="row">-->

<h4><strong>Domicilio</strong></h4>
<div class="box box-primary"><br>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Estado</label>
			<select name="dom_estado" class="form-control" >
				@foreach($estado1 as $estado1)
				@if($estado1->nombre == $paciente->dom_estado)
				<option value="{{$estado1->nombre}}" selected>{{$estado1->nombre}}</option>
				@else
				<option value="{{$estado1->nombre}}" >{{$estado1->nombre}}</option>
				@endif
				@endforeach
			</select>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Municipio</label>
			<input type="text" name="dom_municipio" class="form-control" value="{{$paciente->dom_municipio}}">
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Localidad</label>
			<input type="text" name="dom_localidad" class="form-control" value="{{$paciente->dom_localidad}}">
		</div>
	</div>
</div>
</div>

	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="form-group">
			<label>Calle</label>
			<input type="text" name="dom_calle" class="form-control" value="{{$paciente->dom_calle}}">
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Número</label>
			<input type="text" name="dom_numero" class="form-control" value="{{$paciente->dom_numero}}">
		</div>
	</div>
	</div>
	</div><!--div class=row-->

	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
	<h4><strong>Convenio</strong></h4>
	<div class="box box-primary">
	<div class="row">

	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		<div class="form-group">
			<label></label>
			<select name="convenio" class="form-control" >
				@foreach($convenio as $convenio)
				@if($convenio->nombre == $paciente->convenio)
				<option value="{{$convenio->nombre}}" selected>{{$convenio->nombre}}</option>
				@else
				<option value="{{$convenio->nombre}}" >{{$convenio->nombre}}</option>
				@endif
				@endforeach
			</select>
		</div>
	</div>

</div><!--/div class=row-->
</div><!--/div class=box-primary-->
</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
	<h4><strong>Ocupación</strong></h4>
	<div class="box box-primary"><br>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
					<input type="text" name="ocupacion" class="form-control" value="{{$paciente->ocupacion}}" placeholder="Ocupacíon">
					</div>
			</div>
		</div>

	</div>
</div>
<div class="row">
	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{URL::action('RpacienteController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
		</div>
	</div></center>
</div>

</div>
		{!!Form::close()!!}
@endsection