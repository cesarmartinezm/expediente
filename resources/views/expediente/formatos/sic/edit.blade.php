@extends ('layouts.admin')
@section ('title')
<h>Editar SOLICITUD DE INTERCONSULTA</h>
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
		{!!Form::model($sic,['method'=>'PATCH','route'=>['sic.update',$sic->idsic]])!!}
		{{Form::token()}}
		
<div class="row"><!--row 1-->
		
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			
		</div>

		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
			<div class="form-group">
				<label>Fecha de Solicitud</label>
				
				<input type="date" name="fsolicitud" value="{{$sic->fsolicitud}}" class="form-control" placeholder="Fecha de Solitud" disabled="">
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="form-group">
			<!--<label>Hora</label>!-->	
			
				<input type="hidden" name="hora" value="{{$sic->hora}}" class="form-control" placeholder="Hora" disabled="">
			</div>
		</div>
		

	</div><!--end row1-->


	<div class="row"><!--row2-->

		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label>Nombre del Paciente</label>
				@foreach($paciente as $paciente)
				<input type="text" name="nombre" value="{{$paciente->apaterno.' '.$paciente->amaterno.' '.$paciente->nombre}}"" class="form-control" disabled="">

			</div>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Fecha de Nacimiento</label>
				<input type="date" name="fnacimiento" value="{{$paciente->fnacimiento}}" class="form-control" disabled="">
				<input type="hidden" name="idp" value="{{$paciente->idpaciente}}" class="form-control" disabled="">
			</div>
		</div>
		@endforeach
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Habitacion</label>
				<input type="number" name="habitacion" value="{{$sic->habitacion}}" class="form-control">
			</div>
		</div>

	</div><!--end row2-->

	<div class="row"><!--row3-->
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<label>Servicio que solicita la Interconsulta</label>
			<select name="servicio" class="form-control select2">
				@if($sic->servicio=='Servicio1')
				<option value="Servicio1" selected>Servicio1</option>
                <option value="Servicio2" >Sevicio2</option>
                @else
				<option value="Servicio1" >Servicio1</option>
                <option value="Servicio2" selected>Sevicio2</option>
				@endif
			</select>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<label>Médico</label>
				<select name="medicor" class="form-control selectpicker" data-live-search="true"  disabled>
				
				@foreach ($medico as $medico) 
				@if($sic->medicor==$medico->idmedico)
   			 <option value="{{$medico->idmedico}}" selected>{{$medico->apaterno.' '.$medico->amaterno.' '.$medico->nombre}}</option>
   			 	@else
   			 	<option value="{{$medico->idmedico}}">{{$medico->apaterno.' '.$medico->amaterno.' '.$medico->nombre}}</option>
   			 	@endif
   			 @endforeach
				
				
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
				<input type="text" name="motivo" value="{{$sic->motivo}}" class="form-control">
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
				@if($sic->servicior=='Servicio1')
				<option value="Servicio1" selected>Servicio1</option>
                <option value="Servicio2" >Sevicio2</option>
                @else
				<option value="Servicio1" >Servicio1</option>
                <option value="Servicio2" selected>Sevicio2</option>
				@endif
			</select>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<label>Nombre del Médico que recibe la Interconsulta </label>
				<select name="medicor" class="form-control selectpicker" data-live-search="true" >
				
				 
				@if($sic->medicor==$sic->medicor)
   			 <option value="{{$medico->idmedico}}" selected>{{$medico->apaterno.' '.$medico->amaterno.' '.$medico->nombre}}</option>
   			 	@else
   			 	<option value="{{$medico->idmedico}}">{{$medico->apaterno.' '.$medico->amaterno.' '.$medico->nombre}}</option>
   			 	@endif
   			 
				
				
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
				<input type="date" name="fechar" value="{{$sic->fechar}}" class="form-control">
			</div>
		</div>

		

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="form-group">
				<label>Hora</label>
				<input type="time" name="horar" value="{{$sic->horar}}" class="form-control">
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