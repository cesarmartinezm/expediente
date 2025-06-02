@extends ('layouts.admin')
@section ('title')
<h>EDITAR NOTA DE EVOLUCIÓN</h>
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
		{!!Form::model($ne,['method'=>'PATCH','route'=>['ne.update',$ne->idnie]])!!}
		{{Form::token()}}
		
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
		<div class="form-group">
			<label>Aseguradora</label>
			@foreach($paciente as $paciente)
			<input type="text" name="convenio" disabled="" value="{{$paciente->convenio}}" class="form-control">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Hora de Ingreso</label>
				<input type="text" name="hora_c" disabled="" value="{{$paciente->created_at}}" class="form-control">
				<input type="hidden"  class="form-control" name="paciente"  value="{{$paciente->idpaciente}}">
			</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Hora de Consulta</label>
				<input type="time" name="hconsulta" value="{{$ne->hora_c}}" disabled class="form-control">
			</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
		<div class="form-group">
			<label>Triage</label>
			<select name="triage" class="form-control select2">
				<@if($ne->triage=='VERDE')
				<option value="VERDE" selected>VERDE</option>
                <option value="AMARILLO">AMARILLO</option>
                <option value="ROJO" >ROJO</option>
                @elseif($ne->triage=='AMARILLO')
                <option value="VERDE" >VERDE</option>
                <option value="AMARILLO" selected>AMARILLO</option>
                <option value="ROJO" >ROJO</option>
                @else
                <option value="VERDE" >VERDE</option>
                <option value="AMARILLO">AMARILLO</option>
                <option value="ROJO" selected>ROJO</option>
                @endif
			</select>
		</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Folio</label>
				<input type="number" name="folio" value="{{$ne->folio}}" disabled class="form-control">
			</div>
	</div>

</div>

		
<h4><strong>Datos del Paciente</strong></h4>
<div class="box box-info">
	<div class="row">
	<br>

	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
		<div class="form-group">
			<label>Nombre del Paciente</label>
			<input type="text" name="apaterno" value="{{$paciente->apaterno.' '.$paciente->amaterno.' '.$paciente->nombre}}" class="form-control" disabled="" >
		</div>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
		<div class="form-group">
			<label>Edad</label><br>
			<input type="text" name="edad"  value="{{$ne->edad}}" class="form-control" disabled="NO">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Fecha de Nacimiento</label><br>
			<input type="text" name="fnacimiento" disabled="" value="{{$paciente->fnacimiento}}" class="form-control">
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Sexo</label><br>
			<input type="text" name="genero" disabled="" value="{{$paciente->genero}}" class="form-control">
		</div>
	</div>
@endforeach
	</div><!--</div class="row">-->
<h4><strong>Signos Vitales</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">
			<label>T/A</label>
			<input type="text" name="originario"  value="{{$svitales->ta}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">
			<label>Temp.</label>
			<input type="text" name="originario"  value="{{$svitales->temp}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Frec. C.</label>
			<input type="text" name="originario"  value="{{$svitales->fc}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Frec. R.</label>
			<input type="text" name="originario"  value="{{$svitales->fr}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Sao2%</label>
			<input type="text" name="originario"  value="{{$svitales->sao2}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Peso</label>
			<input type="text" name="originario"  value="{{$svitales->peso}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Talla</label>
			<input type="text" name="originario"  value="{{$svitales->talla}}" class="form-control" disabled="">
			</div>
		</div>
		
	</div>
	

<br>
<div class="box box-info">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
			<textarea class="form-control" name="descripcion" rows="4" placeholder="Agregar descripción">{{$ne->descripcion}}</textarea> 
			</div>
		</div>
	</div>



	

	

<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	<h4><strong>Resultados Laboratorio, Gabinete y Otros</strong></h4>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<label>Hora de Solicitud</label>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<input type="time" name=""  value="{{old('originario')}}" class="form-control" disabled="">
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			
			<label>Hora de Entrega</label>
			
			
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			
			
			<input type="time" name="originario"  value="{{old('originario')}}" class="form-control" disabled="">
			
	</div>


</div>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Resultados Laboratorio, Gabinete y Otros" disabled=""></textarea>
				
				</div>
		</div>
			
		</div>
	

	<h4><strong>Diagnóstico Actual</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" name="dactual" rows="4" placeholder="Diagnóstico Actual">{{$ne->dactual}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Indicaciones Médicas</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Indicaciones Médicas" disabled="">{{$ne->ind_medicas}}</textarea>
				</div>
		</div>
			
		</div>
	</div>

	

</div>

<div class="row">
	


	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{URL::action('NEvolucionController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
		</div>
	</div></center>
</div>


		{!!Form::close()!!}

@stop