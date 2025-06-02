@extends ('layouts.admin')
@section ('title')
<h>Editar Paciente: {{$paciente->apaterno}} {{$paciente->amaterno}} {{$paciente->nombre}}</h>
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
		{!!Form::model($paciente,['method'=>'PATCH','route'=>['generales.update',$paciente->id_p]])!!}
		{{Form::token()}}
		
		
<h4><strong>Datos Generales</strong></h4>
<div class="box box-primary">
<div class="row">
	<br>

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

</div><!--</div class="row">-->

<div class="row">

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Nacionalidad</label>
			<select name="nacionalidad" class="form-control select2">
				<option value="{{$paciente->nacionalidad}}" >Mexicana</option>
                <option value="{{$paciente->nacionalidad}}" @if (old('nacionalidad') == "Extranjera") {{ 'selected' }} @endif>Extranjera</option>
				
				
			</select>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Estado de Nacimiento</label>
			<select name="edo_nacimiento" class="form-control" >
				<option value="Aguascalientes"  @if (old('edo_nacimiento') == "Aguascalientes") {{ 'selected' }} @endif>Aguascalientes</option>
				<option value="Baja_California"  @if (old('edo_nacimiento') == "Baja_California") {{ 'selected' }} @endif>Baja_California</option>
				<option value="Baja_California_Sur" @if (old('edo_nacimiento') == "Baja_California_Sur") {{ 'selected' }} @endif>Baja_California_Sur</option>
				<option value="Campeche" @if (old('edo_nacimiento') == "Campeche") {{ 'selected' }} @endif>Campeche</option>
				<option value="Coahuila" @if (old('edo_nacimiento') == "Coahuila") {{ 'selected' }} @endif>Coahuila</option>
				<option value="Colima" @if (old('edo_nacimiento') == "Colima") {{ 'selected' }} @endif>Colima</option>
				<option value="Chiapas" @if (old('edo_nacimiento') == "Chiapas") {{ 'selected' }} @endif>Chiapas</option>
				<option value="Chihuahua" @if (old('edo_nacimiento') == "Chihuahua") {{ 'selected' }} @endif>Chihuahua</option>
				<option value="Ciudad de México" @if (old('edo_nacimiento') == "Ciudad_de_México") {{ 'selected' }} @endif>Ciudad_de_México</option>
				<option value="Durango" @if (old('edo_nacimiento') == "Durango") {{ 'selected' }} @endif>Durango</option>
				<option value="Guanajuato" @if (old('edo_nacimiento') == "Guanajuato") {{ 'selected' }} @endif>Guanajuato</option>
				<option value="Guerrero" @if (old('edo_nacimiento') == "Guerrero") {{ 'selected' }} @endif>Guerrero</option>
				<option value="Hidalgo" @if (old('edo_nacimiento') == "Hidalgo") {{ 'selected' }} @endif>Hidalgo</option>
				<option value="Jalisco" @if (old('edo_nacimiento') == "Jalisco") {{ 'selected' }} @endif>Jalisco</option>
				<option value="México" @if (old('edo_nacimiento') == "México") {{ 'selected' }} @endif>México</option>
				<option value="Michoacán" @if (old('edo_nacimiento') == "Michoacán") {{ 'selected' }} @endif>Michoacán</option>
				<option value="Morelos" @if (old('edo_nacimiento') == "Morelos") {{ 'selected' }} @endif>Morelos</option>
				<option value="Nayarit" @if (old('edo_nacimiento') == "Nayarit") {{ 'selected' }} @endif>Nayarit</option>
				<option value="Nuevo_León" @if (old('edo_nacimiento') == "Nuevo_León") {{ 'selected' }} @endif>Nuevo_León</option>
				<option value="Oaxaca" @if (old('edo_nacimiento') == "Oaxaca") {{ 'selected' }} @endif>Oaxaca</option>
				<option value="Puebla" @if (old('edo_nacimiento') == "Puebla") {{ 'selected' }} @endif>Puebla</option>
				<option value="Querétaro" @if (old('edo_nacimiento') == "Querétaro") {{ 'selected' }} @endif>Querétaro</option>
				<option value="Quintana_Roo" @if (old('edo_nacimiento') == "Quintana_Roo") {{ 'selected' }} @endif>Quintana_Roo</option>
				<option value="San_Luis_Potosí">San_Luis_Potosí</option>
				<option value="Sinaloa" @if (old('edo_nacimiento') == "Sinaloa") {{ 'selected' }} @endif>Sinaloa</option>
				<option value="Sonora" @if (old('edo_nacimiento') == "Sonora") {{ 'selected' }} @endif>Sonora</option>
				<option value="Tabasco" @if (old('edo_nacimiento') == "Tabasco") {{ 'selected' }} @endif>Tabasco</option>
				<option value="Tamaulipas" @if (old('edo_nacimiento') == "Tamaulipas") {{ 'selected' }} @endif>Tamaulipas</option>
				<option value="Tlaxcala" @if (old('edo_nacimiento') == "Tlaxcala") {{ 'selected' }} @endif>Tlaxcala</option>
				<option value="Veracruz" @if (old('edo_nacimiento') == "Veracruz") {{ 'selected' }} @endif>Veracruz</option>
				<option value="Yucatán" @if (old('edo_nacimiento') == "Yucatán") {{ 'selected' }} @endif>Yucatán</option>
				<option value="Zacatecas" @if (old('edo_nacimiento') == "Zacatecas") {{ 'selected' }} @endif>Zacatecas</option>
			</select>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Sexo</label><br>
			<input type="radio" name="genero" value="Femenino" value="{{$paciente->genero}}">Femenino
			<input type="radio" name="genero" value="Masculino" value="{{$paciente->genero}}">Masculino
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Estado Civil</label>
			<select name="edo_civil" class="form-control select2">
				<option value="Casado" value="{{$paciente->edo_civil}}">Casado</option>
                <option value="Union_Libre" value="{{$paciente->edo_civil}}">Union_Libre</option>

			</select>
		</div>
	</div>

</div><!--</div class="row">-->

<h4><strong>Domicilio</strong></h4>
<div class="box box-primary"><br>
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Estado</label>
			<select name="dom_estado" class="form-control" value="{{old('dom_estado')}}">
				<option value="Aguascalientes"  @if (old('dom_estado') == "Aguascalientes") {{ 'selected' }} @endif>Aguascalientes</option>
				<option value="Baja_California"  @if (old('dom_estado') == "Baja_California") {{ 'selected' }} @endif>Baja_California</option>
				<option value="Baja_California_Sur" @if (old('dom_estado') == "Baja_California_Sur") {{ 'selected' }} @endif>Baja_California_Sur</option>
				<option value="Campeche" @if (old('dom_estado') == "Campeche") {{ 'selected' }} @endif>Campeche</option>
				<option value="Coahuila" @if (old('dom_estado') == "Coahuila") {{ 'selected' }} @endif>Coahuila</option>
				<option value="Colima" @if (old('dom_estado') == "Colima") {{ 'selected' }} @endif>Colima</option>
				<option value="Chiapas" @if (old('dom_estado') == "Chiapas") {{ 'selected' }} @endif>Chiapas</option>
				<option value="Chihuahua" @if (old('dom_estado') == "Chihuahua") {{ 'selected' }} @endif>Chihuahua</option>
				<option value="Ciudad de México" @if (old('dom_estado') == "Ciudad_de_México") {{ 'selected' }} @endif>Ciudad_de_México</option>
				<option value="Durango" @if (old('dom_estado') == "Durango") {{ 'selected' }} @endif>Durango</option>
				<option value="Guanajuato" @if (old('dom_estado') == "Guanajuato") {{ 'selected' }} @endif>Guanajuato</option>
				<option value="Guerrero" @if (old('dom_estado') == "Guerrero") {{ 'selected' }} @endif>Guerrero</option>
				<option value="Hidalgo" @if (old('dom_estado') == "Hidalgo") {{ 'selected' }} @endif>Hidalgo</option>
				<option value="Jalisco" @if (old('dom_estado') == "Jalisco") {{ 'selected' }} @endif>Jalisco</option>
				<option value="México" @if (old('dom_estado') == "México") {{ 'selected' }} @endif>México</option>
				<option value="Michoacán" @if (old('dom_estado') == "Michoacán") {{ 'selected' }} @endif>Michoacán</option>
				<option value="Morelos" @if (old('dom_estado') == "Morelos") {{ 'selected' }} @endif>Morelos</option>
				<option value="Nayarit" @if (old('dom_estado') == "Nayarit") {{ 'selected' }} @endif>Nayarit</option>
				<option value="Nuevo_León" @if (old('dom_estado') == "Nuevo_León") {{ 'selected' }} @endif>Nuevo_León</option>
				<option value="Oaxaca" @if (old('dom_estado') == "Oaxaca") {{ 'selected' }} @endif>Oaxaca</option>
				<option value="Puebla" @if (old('dom_estado') == "Puebla") {{ 'selected' }} @endif>Puebla</option>
				<option value="Querétaro" @if (old('dom_estado') == "Querétaro") {{ 'selected' }} @endif>Querétaro</option>
				<option value="Quintana_Roo" @if (old('dom_estado') == "Quintana_Roo") {{ 'selected' }} @endif>Quintana_Roo</option>
				<option value="San_Luis_Potosí">San_Luis_Potosí</option>
				<option value="Sinaloa" @if (old('dom_estado') == "Sinaloa") {{ 'selected' }} @endif>Sinaloa</option>
				<option value="Sonora" @if (old('dom_estado') == "Sonora") {{ 'selected' }} @endif>Sonora</option>
				<option value="Tabasco" @if (old('dom_estado') == "Tabasco") {{ 'selected' }} @endif>Tabasco</option>
				<option value="Tamaulipas" @if (old('dom_estado') == "Tamaulipas") {{ 'selected' }} @endif>Tamaulipas</option>
				<option value="Tlaxcala" @if (old('dom_estado') == "Tlaxcala") {{ 'selected' }} @endif>Tlaxcala</option>
				<option value="Veracruz" @if (old('dom_estado') == "Veracruz") {{ 'selected' }} @endif>Veracruz</option>
				<option value="Yucatán" @if (old('dom_estado') == "Yucatán") {{ 'selected' }} @endif>Yucatán</option>
				<option value="Zacatecas" @if (old('dom_estado') == "Zacatecas") {{ 'selected' }} @endif>Zacatecas</option>
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
	<div class="row">
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

	</div><!--div class=row-->

	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<h4><strong>Convenio</strong></h4>
<div class="box box-primary"><br>
<div class="row">

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<input name="convenio" type="radio" value="Seguro1"  value="{{$paciente->convenio}}">Seguro1
		</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<input name="convenio" type="radio" value="Seguro2" value="{{$paciente->convenio}}">Seguro2
		</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<input name="convenio" type="radio" value="Seguro3" value="{{$paciente->convenio}}" >Seguro3
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<input name="convenio" type="radio" value="Seguro4" value="{{$paciente->convenio}}">Seguro4
		</div>
	</div>

	
</div><!--/div class=row-->
</div><!--/div class=box-primary-->
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	<h4><strong>Ocupación</strong></h4>
	<div class="box box-primary"><br>
<div class="row">
	<div class="form-group">
			
			<input type="text" name="ocupacion" class="form-control" value="{{$paciente->ocupacion}}" placeholder="Ocupacíon">
		</div>

</div>

</div>
</div>
<div class="row">

	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
	</div></center>
</div>




	
</div>




		{!!Form::close()!!}

	


@endsection