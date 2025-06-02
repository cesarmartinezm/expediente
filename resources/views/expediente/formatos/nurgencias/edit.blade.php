@extends ('layouts.admin')
@section ('title')
<h>Editar NOTA DE URGENCIAS</h>
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
		{!!Form::model($nurgencias,['method'=>'PATCH','route'=>['nurgencias.update',$nurgencias->idnurgencias]])!!}
		{{Form::token()}}
		
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
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
				
			</div>
			
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Hora de Consulta</label>
				<input type="text" name="hconsulta" disabled value="{{$nurgencias->hconsulta}}" class="form-control">
			</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
		<div class="form-group">
			<label>Triage</label>
			<select name="triage" class="form-control select2">
				@if ($nurgencias->triage=='VERDE')
				<option value="VERDE" selected>VERDE</option>
                <option value="AMARILLO">AMARILLO</option>
                <option value="ROJO">ROJO</option>
                @elseif($nurgencias->triage=='AMARILLO')
                <option value="VERDE">VERDE</option>
                <option value="AMARILLO" selected>AMARILLO</option>
                <option value="ROJO">ROJO</option>
                @else
                <option value="VERDE">VERDE</option>
                <option value="AMARILLO">AMARILLO</option>
                <option value="ROJO" selected>ROJO</option>
                @endif
			</select>
		</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Folio</label>
				<input type="text" name="folio" value="{{$nurgencias->folio}}" disabled class="form-control">
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
		@foreach ($antecedentes as $ant)
		@if($ant->hipertencion=='HIPERTENCIÓN')
		<input  type="checkbox" name="hipertencion" value="HIPERTENCIÓN" checked> Hipertención
		@else
		<input  type="checkbox" name="hipertencion" value="HIPERTENCIÓN"> Hipertención
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->diabetes=='DIABETES')
		<input  type="checkbox" name="diabetes" value="DIABETES" checked> Diabetes
		@else
		<input  type="checkbox" name="diabetes" value="DIABETES"> Diabetes
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->cardiovasculares=='CARDIOVASCULARES')
		<input  type="checkbox" name="cardiovasculares" value="CARDIOVASCULARES" checked> Cardiovasculares
		@else
		<input  type="checkbox" name="cardiovasculares" value="CARDIOVASCULARES" > Cardiovasculares
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->obesidad=='OBESIDAD')
		<input  type="checkbox" name="obesidad" value="OBESIDAD" checked> Obesidad
		@else
		<input  type="checkbox" name="obesidad" value="OBESIDAD" > Obesidad
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->gastritis=='GASTRITIS')
		<input  type="checkbox" name="gastritis" value="GASTRITIS" checked> Gastritis
		@else
		<input  type="checkbox" name="gastritis" value="GASTRITIS" > Gastritis
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->hepatitis=='HEPATITIS')
		<input  type="checkbox" name="hepatitis" value="HEPATITIS" checked> Hepatitis
		@else
		<input  type="checkbox" name="hepatitis" value="HEPATITIS" > Hepatitis
		@endif
		</div>

	</div><!--</div class="row">-->
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->nefropatias=='NEFROPATIAS')
		<input  type="checkbox" name="nefropatias" value="NEFROPATIAS" checked> Nefropatías
		@else
		<input  type="checkbox" name="nefropatias" value="NEFROPATIAS" > Nefropatías
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->artritis=='ARTRITIS')
		<input  type="checkbox" name="artritis" value="ARTRITIS" checked> Artritis
		@else
		<input  type="checkbox" name="artritis" value="ARTRITIS" > Artritis
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->convulsiones=='CONVULSIONES')
		<input  type="checkbox" name="convulsiones" value="CONVULSIONES" checked> Convulsiones
		@else
		<input  type="checkbox" name="convulsiones" value="CONVULSIONES" > Convulsiones
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->cirugias=='CIRUGÍAS')
		<input  type="checkbox" name="cirugias" value="CIRUGÍAS" checked> Cirugías
		@else
		<input  type="checkbox" name="cirugias" value="CIRUGÍAS" > Cirugías
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->traumaticos=='TRAUMÁTICOS')
		<input  type="checkbox" name="traumaticos" value="TRAUMÁTICOS" checked> Traumátios
		@else
		<input  type="checkbox" name="traumaticos" value="TRAUMÁTICOS" > Traumátios
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->fimicos=='FÍMICOS')
		<input  type="checkbox" name="fimicos" value="FÍMICOS" checked> Fímicos
		@else
		<input  type="checkbox" name="fimicos" value="FÍMICOS" > Fímicos
		@endif
		</div>

	</div><!--</div class="row">-->

	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->neoplasias=='NEOPLASIAS')
		<input  type="checkbox" name="neoplasias" value="NEOPLASIAS" checked> Neoplasias
		@else
		<input  type="checkbox" name="neoplasias" value="NEOPLASIAS" > Neoplasias
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->hemofilia=='HEMOFILIA')
		<input  type="checkbox" name="hemofilia" value="HEMOFILIA" checked> Hemofilia
		@else
		<input  type="checkbox" name="hemofilia" value="HEMOFILIA" > Hemofilia
		@endif
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		@if($ant->psiquiatricos=='PSIQUIÁTRICOS')
		<input  type="checkbox" name="psiquiatricos" value="PSIQUIÁTRICOS" checked> Psiquiátricos
		@else
		<input  type="checkbox" name="psiquiatricos" value="PSIQUIÁTRICOS" > Psiquiátricos
		@endif
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		@if($ant->enfsexuales=='ENFERMEDADES SEXUALES')
		<input  type="checkbox" name="enfsexuales" value="ENFERMEDADES SEXUALES" checked> Enfermedades Sexuales
		@else
		<input  type="checkbox" name="enfsexuales" value="ENFERMEDADES SEXUALES"> Enfermedades Sexuales
		@endif
		</div>
	</div><!--</div class="row">-->

	<div class="row"><br>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="form-group">
			<label>Otros</label>
			<input type="text" name="otros" value="{{$ant->otros}}" class="form-control" placeholder="Especifique">
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>FUR</label>
			<input type="text" name="fur" value="{{$ant->fur}}" class="form-control" placeholder="FUR">
			<input type="hidden" name="idantecedentes" value="{{$ant->idantrel}}">
		</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Alergias</label>
			<input type="text" name="alergias" value="{{$ant->alergias}}" class="form-control">
		</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Toxicomanías</label>
			<input type="text" name="toxicomanias" value="{{$ant->toxicomanias}}" class="form-control">
		@endforeach
		</div>
		</div>
	</div><!--</div class="row">-->

<h4><strong>Padecimiento Actual</strong></h4>
<div class="box box-info">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
			<textarea class="form-control" rows="4" name="padecimiento_a" placeholder="Padecimiento Actual" >{{$nurgencias->padecimiento_a}}</textarea> 
			</div>
		</div>
	</div>


<h4><strong>Signos Vitales</strong></h4>
<div class="box box-info"><br>

	<div class="row" type="hidden">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">

				@foreach($svitales as $s)
			<label>T/A</label>
			<input type="text" name="ta"  value="{{$s->ta}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">
			<label>Temp.</label>
			<input type="text" name="temp"  value="{{$s->temp}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Frec. C.</label>
			<input type="text" name="fc"  value="{{$s->fc}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Frec. R.</label>
			<input type="text" name="fr"  value="{{$s->fr}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Sao2%</label>
			<input type="text" name="sao2%"  value="{{$s->sao2}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Peso</label>
			<input type="text" name="peso"  value="{{$s->peso}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Talla</label>
			<input type="text" name="talla"  value="{{$s->talla}}" class="form-control" disabled="">
			@endforeach
			</div>
		</div>
		
	</div>
	
	<div class="row"></div>

	<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	<h4><strong>Exploración Física</strong></h4>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<input type="text" name="glasgow"  value="{{$nurgencias->glasgow}}" class="form-control" placeholder="Glasgow">
	</div>

	</div>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="exp_fisica" placeholder="Exploración Física">{{$nurgencias->exp_fisica}}</textarea>
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
				<textarea class="form-control" name="dpresunciales" rows="4" placeholder="Diagnóstico(s) Presuncional(es)" >{{$nurgencias->dpresunciales}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Indicaciones Médicas</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="indicaciones_med" disabled>{{$nurgencias->ind_medicas}}</textarea>
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
			<input type="time" name="hr_llam_esp" value="{{$nurgencias->hr_llam_esp}}" class="form-control" disabled="">
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<label>Hora de llegada Especialista</label>
				
			</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<input type="time" name="hr_lleg_esp" value="{{$nurgencias->hr_lleg_esp
		}}" class="form-control" disabled>
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