@extends ('layouts.admin')
@section ('title')

<h>Solicitud - Recepción de Interconsulta Médica</h>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	<h style=" font-size:16px; color:blue">Fecha de Solicitud: {{date('Y-m-d')}}</h>	
		
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

{!!Form::open(array('url'=>'expediente/formatos/sic/', 'method'=>'POST', 'autocomplete'=>'off'))!!}
		{{Form::token()}}
		


	
				@foreach ($paciente as $paciente)
				<input type="hidden" name="fsolicitud" value="{{old('fsolicitud', date('Y-m-d'))}}" class="form-control" placeholder="Fecha de Solitud" disabled="">
		


	<div class="row"><!--row2-->

		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label>Nombre del Paciente</label>
				<input type="text" name="nombre" value="{{$paciente->apaterno.' '.$paciente->amaterno.' '.$paciente->nombre}}"" class="form-control" disabled="">

			</div>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Fecha de Nacimiento</label>
				<input type="date" name="fnacimiento" value="{{$paciente->fnacimiento}}" class="form-control" disabled="">
				<input type="hidden" name="idp" value="1" class="form-control" disabled="">
			</div>
		</div>
		@endforeach
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Habitacion</label>
				<input type="number" name="habitacion" value="{{old('habitacion')}}" class="form-control">
			</div>
		</div>

	</div><!--end row2-->

	<div class="row"><!--row3-->
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<label>Servicio que solicita la Interconsulta</label>
			<select name="servicio" class="form-control select2">
				<option value="Servicio1" @if (old('sevicio') == "Servicio1") {{ 'selected' }} @endif>Servicio1</option>
                <option value="Servicio2" @if (old('sevicio') == "Sevicio2") {{ 'selected' }} @endif>Sevicio2</option>
				
				
			</select>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<label>Médico</label>
			<select name="medico" class="form-control select2" disabled="">
				<option value="1" @if (old('medico') == "Medico1") {{ 'selected' }} @endif>Medico1</option>
                <option value="2" @if (old('medico') == "Medico2") {{ 'selected' }} @endif>Medico2</option>
				
				
			</select>
		</div>

	</div><!--end row3-->

	<div class="row"><!--row4-->
		<br>

		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-10">
			
		</div>

		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
			<div class="form-group">
				<label>Motivo de la Interconsulta</label>
				<input type="text" name="motivo" value="{{old('motivo')}}" class="form-control">
			</div>
		</div>
	</div><!--end row4-->

	<div class="row"><!--row5-->
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
				<label>Servicio al que se le Solicita la Interconsulta</label>
				<select name="servicior" class="form-control select2">
				<option value="Servicio1" @if (old('sevicior') == "Servicio1") {{ 'selected' }} @endif>Servicio1</option>
                <option value="Servicio2" @if (old('sevicior') == "Sevicio2") {{ 'selected' }} @endif>Sevicio2</option>
				
				
			</select>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label>Nombre del Médico que recibe la Interconsulta </label>
				<select name="medicor" class="form-control selectpicker" data-live-search="true" >
				@foreach ($medico as $medico) 
   			 <option value="{{$medico->idmedico}}">{{$medico->apaterno.' '.$medico->amaterno.' '.$medico->nombre}}</option>
   			 @endforeach
				
				
			</select>
			</div>
		</div>
	</div><!--end row5-->

	<div class="row"><!--row6-->
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			
		</div>

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="form-group">
				<label>Fecha de Recepcion</label>
				<input type="date" name="fechar" value="{{old('fechar')}}" class="form-control">
			</div>
		</div>

		

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="form-group">
				<label>Hora</label>
				<input type="time" name="horar" value="{{old('hora')}}" class="form-control">
			</div>
		</div>
	</div><!--end row6-->

	<div class="row"><!--row7-->
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
			<div class="form-group">
				<!--<label>NOTA: LA INTERCONSULTA PARA HOSPITALIZACIÓN SE DEBERÁ REALIZAR DENTRO DE LAS SIGUIENTES 8-12 HORAS Y PARA URGENCIAS EN UN MÁXICO DE 30 MINUTOS</label>-->
			</div>
		</div>
		
	</div><!--end row7-->



	

	<div class="row">

	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{URL::action('SolicitudIController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
		</div>
	</div></center>
	</div>

	{!!Form::close()!!}

	@stop