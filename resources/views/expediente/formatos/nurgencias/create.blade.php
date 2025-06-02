@extends ('layouts.admin')
@section ('title')
<h>NOTA DE URGENCIAS</h>
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
		{!!Form::open(array('url'=>'expediente/formatos/nurgencias', 'method'=>'POST', 'autocomplete'=>'off'))!!}
		{{Form::token()}}
		
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
		<div class="form-group">
			<label>Aseguradora</label>
			
			@foreach ($paciente as $paciente)
			<input type="text" name="convenio" disabled="" value="{{$paciente->convenio}}" class="form-control">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Hora de Ingreso</label>
				<input type="text" name="hingreso" disabled="" value="{{$paciente->created_at}}" class="form-control">
				<input type="hidden"  class="form-control" name="paciente"  value="{{$paciente->idpaciente}}">
			</div>
			
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Hora de Consulta</label>
				<input type="time" name="hconsulta"  value="{{date('H:i')}}" disabled class="form-control">
			</div>
	</div>

	<div class="col-lg- col-md-2 col-sm-2 col-xs-12"> 
		<div class="form-group">
			<label>Triage</label>
			<select name="triage" class="form-control select2">
				<option value="VERDE" @if (old('triage') == "VERDE") {{ 'selected' }} @endif>VERDE</option>
                <option value="AMARILLO" @if (old('triage') == "AMARILLO") {{ 'selected' }} @endif>AMARILLO</option>
                <option value="ROJO" @if (old('triage') == "ROJO") {{ 'selected' }} @endif>ROJO</option>
			</select>
		</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Folio</label>
				<input type="number" name="folio" value="{{old('folio')}}" class="form-control">
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
			<input type="text" name="edad" disabled="" value="" class="form-control">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Fecha de Nacimiento</label><br>
			<input type="text" name="fnacimiento" disabled="" value="{{$paciente->fnacimiento}}" class="form-control">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Sexo</label><br>
			<input type="text" name="genero" disabled="" value="{{$paciente->genero}}" class="form-control">
		</div>
	</div>
@endforeach

	</div><!--</div class="row">-->

	<h4><strong>ANTECEDENTES RELACIONADOS CON LA URGENCIA</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="hipertencion" value="HIPERTENCIÓN"> Hipertención
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="diabtetes" value="DIABETES"> Diabetes
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="cardiovasculares" value="CARDIOVASCULARES"> Cardiovasculares
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="obesidad" value="OBESIDAD"> Obesidad
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="gastritis" value="GASTRITIS"> Gastritis
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="hepatitis" value="HEPATITIS"> Hepatitis
		</div>

	</div><!--</div class="row">-->
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="nefropatias" value="NEFROPATIAS"> Nefropatías
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="artritis" value="ARTRITIS"> Artritis
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="convulsiones" value="CONVULSIONES"> Convulsiones
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="cirugias" value="CIRUGÍAS"> Cirugías
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="traumaticos" value="TRAUMÁTICOS"> Traumátios
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="fimicos" value="FÍMICOS"> Fímicos
		</div>

	</div><!--</div class="row">-->

	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="neoplasias" value="NEOPLASIAS"> Neoplasias
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="hemofilia" value="HEMOFILIA"> Hemofilia
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="psiquiatricos" value="PSIQUIÁTRICOS"> Psiquiátricos
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<input  type="checkbox" name="enf_sexuales" value="ENFERMEDADES SEXUALES"> Enfermedades Sexuales
		</div>
	</div><!--</div class="row">-->

	<div class="row"><br>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="form-group">
			<label>Otros</label>
			<input type="text" name="otros" value="{{old('otros')}}" class="form-control" placeholder="Especifique">
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>FUR</label>
			<input type="text" name="fur" value="{{old('fur')}}" class="form-control" placeholder="FUR">
		</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Alergias</label>
			<input type="text" name="alergias" value="{{old('alergias')}}" class="form-control">
		</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Toxicomanías</label>
			<input type="text" name="toxicomanias" value="{{old('toxicomanias')}}" class="form-control">
		</div>
		</div>
	</div><!--</div class="row">-->

<h4><strong>Padecimiento Actual</strong></h4>
<div class="box box-info">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
			<textarea class="form-control" rows="4" name="padecimiento_a" placeholder="Padecimiento Actual" value="{{old('padecimiento_a')}}"></textarea> 
			</div>
		</div>
	</div>


<h4><strong>Signos Vitales</strong></h4>
<div class="box box-info"><br>
	<div class="row" type="hidden">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">
			<label>T/A</label>
			<input type="text" name="ta"  value="{{old('ta')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">
			<label>Temp.</label>
			<input type="text" name="temp"  value="{{old('temp')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Frec. C.</label>
			<input type="text" name="fc"  value="{{old('fc')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Frec. R.</label>
			<input type="text" name="fr"  value="{{old('fr')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Sao2%</label>
			<input type="text" name="sao2%"  value="{{old('sao2%')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Peso</label>
			<input type="text" name="peso"  value="{{old('peso')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Talla</label>
			<input type="text" name="talla"  value="{{old('tall')}}" class="form-control" disabled="">
			</div>
		</div>
		
	</div>
	<div class="row"></div>

	<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	<h4><strong>Exploración Física</strong></h4>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<input type="number" name="glasgow"  value="{{old('glasgow')}}" class="form-control" placeholder="Glasgow">
	</div>

	</div>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="exp_fisica" value="{{old('exp_fisica')}}" placeholder="Exploración Física"></textarea>
				</div>
		</div>
			
		</div>
	

<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	<h4><strong>Resultados Laboratorio, Gabinete y Otros</strong></h4>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<label for="h_s">Hora de Solicitud</label>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<input type="time" name="h_s"  value="{{old('h_s')}}" class="form-control" disabled="">
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			
			<label for="h_e">Hora de Entrega</label>
			
			
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			
			
			<input type="time" name="h_e"  value="{{old('h_e')}}" class="form-control" disabled="">
			
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
	

	<h4><strong>Diagnóstico(s) Presuncional(es)</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" name="dpresunciales" rows="4" placeholder="Diagnóstico(s) Presuncional(es)"></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Indicaciones Médicas</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="indicaciones_med" placeholder="Indicaciones Médicas"></textarea>
				</div>
		</div>
			
		</div>
	</div>

	
<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Hora de llamada Especialista</label>
			</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<input type="time" name="hr_llam_esp" value="{{old('hr_llam_esp',date('H:m'))}}" class="form-control" disabled="">
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Hora de llegada Especialista</label>
				
			</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<input type="time" name="hr_lleg_esp" value="{{old('hr_lleg_esp')}}" class="form-control">
	</div>

</div>

</div>

<div class="row">
	


	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{URL::action('NUrgenciasController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
		</div>
	</div></center>
</div>


		{!!Form::close()!!}

@endsection