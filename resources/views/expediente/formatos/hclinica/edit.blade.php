@extends ('layouts.admin')
@section ('title')
<h>EDITAR HISTORIA CLÍNICA</h>
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
		{!!Form::model($hclinica,['method'=>'PATCH','route'=>['hclinica.update',$hclinica->idhclinica]])!!}
		{{Form::token()}}
		


<h4><strong>Datos del Paciente</strong></h4>
<div class="box box-primary">
	<div class="row">
	<br>

	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
		<div class="form-group">
			@foreach($paciente as $paciente) 
			<label>Nombre del Paciente</label>
			<input type="text" name="apaterno" value="{{$paciente->apaterno.' '.$paciente->amaterno.' '.$paciente->nombre}}" class="form-control" disabled="">
			
			
			
		
		</div>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
		<div class="form-group">
			<label>Edad</label><br>
			<input type="text" name="edad" id="edad" value="" disabled="" class="form-control"> 
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Fecha de Nacimiento</label><br>
			<input type="date" name="fnacimiento" id="fnacimiento" value="{{$paciente->fnacimiento}}" disabled="" class="form-control">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Sexo</label><br>
			<input type="text" name="genero" id="genero" value="{{$paciente->genero}}" disabled="" value="" class="form-control">
			
		</div>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
		<div class="form-group">
			<label>Habitación</label><br>
			<input type="text" name="habitacion"  value="{{$hclinica->habitacion}}"  class="form-control">
		</div>
	</div>

	</div><!--</div class="row">-->

<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Ocupación</label><br>
			<input type="text" name="ocupacion" id="ocupacion" value="{{$paciente->ocupacion}}" disabled="" class="form-control">
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Originario de:</label><br>
			<input type="text" name="originario" id="originario" value="{{$paciente->edo_nacimiento}}"  disabled="" class="form-control">
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Residente de</label><br>
			<input type="text" name="residente" id="residente" value="{{$paciente->dom_municipio}}" disabled="" class="form-control">
		</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Estado Civil</label>
			<input type="text" name="edo_civil" id="edo_civil" value="{{$paciente->edo_civil}}" disabled="" class="form-control">
		</div>
		@endforeach
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Tipo de Interrogatorio</label>
			<select name="interrogatorio" class="form-control select2">
				@if($hclinica->interrogatorio=='DIRECTO')
				<option value="DIRECTO"  selected>DIRECTO</option>
                <option value="INDIRECTO">INDIRECTO</option>
                @else
                <option value="DIRECTO" >DIRECTO</option>
                <option value="INDIRECTO" selected>INDIRECTO</option>
                @endif
			</select>
		</div>
	</div>
</div><!--Div row2-->
	<!--Div box-primary-->


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h4><strong>Antecedentes Heredo-Familiares</strong></h4>
	<div class="box box-primary">
<br>
		<div class="row ">
			<div class="form-group">
				<div class="row">

					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					@foreach($ant as $ant)
					<input type="hidden" name="id11"  value="{{$ant->idaheredo_familiares}}">
					@if($ant->diabetes=='DIABETES')
					<input  type="checkbox" name="diabetes" value="DIABETES" checked> Diabetes
					@else
					<input  type="checkbox" name="diabetes" value="DIABETES"> Diabetes
					@endif
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					@if($ant->exfumador=='EXFUMADOR')
					<input  type="checkbox" name="exfumador" value="EXFUMADOR" checked> Exfumador<br>
					@else
					<input  type="checkbox" name="exfumador" value="EXFUMADOR" > Exfumador <br>
					@endif
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					@if($ant->hipertension=='HIPERTENSIÓN ARTERIAL')
					<input  type="checkbox" name="hipertension" value="HIPERTENSIÓN ARTERIAL" checked> Hipertensión Arterial<br>
					@else
					<input  type="checkbox" name="hipertension" value="HIPERTENSIÓN ARTERIAL" > Hipertensión Arterial<br>
					@endif
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					@if($ant->exalcoholico=='EX ALCOHOLICO')
					<input  type="checkbox" name="exalcoholico" value="EX ALCOHOLICO" checked> Ex alcoholico<br>
					@else
					<input  type="checkbox" name="exalcoholico" value="EX ALCOHOLICO"> Ex alcoholico<br>
					@endif
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

						@if($ant->cancer=='CANCER')
						<input  type="checkbox" name="cancer" value="CANCER" checked>Cancer
						@else
						<input  type="checkbox" name="cancer" value="CANCER" >Cancer
						@endif
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						@if($ant->exadicto=='EX ADICTO')
						<input  type="checkbox" name="exadicto" value="EX ADICTO" checked> Ex adicto<br>
						@else
						<input  type="checkbox" name="exadicto" value="EX ADICTO"> Ex adicto<br>
						@endif
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label>Otras Enfermedades</label><br>
						<input type="text" name="oenfermedades"  value="{{$ant->oenfermedades}}" class="form-control" placeholder="CÚALES">
						@endforeach
						</div>
						
				</div>
			</div>
		</div><!--row-->

	</div><!--box-primary-->
	</div><!--columna-->


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h4><strong>Antecedentes Personales no Patológicos</strong></h4>
	<div class="box box-primary">
<br>
		<div class="row ">
			<div class="form-group">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					@foreach($apn as $apn)
					<input type="hidden" name="id12" value="{{$apn->idap_nopatologicos}}" >
					@if($apn->tabaquismo=='TABAQUISMO')
					<input  type="checkbox" name="tabaquismo" value="TABAQUISMO" checked> Tabaquismo
					@else
					<input  type="checkbox" name="tabaquismo" value="TABAQUISMO" > Tabaquismo
					@endif
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					@if($apn->alcoholismo=='ALCOHOLISMO')
					<input  type="checkbox" name="alcoholismo" value="ALCOHOLISMO" checked> Alcoholismo<br>
					@else
					<input  type="checkbox" name="alcoholismo" value="ALCOHOLISMO" > Alcoholismo<br>
					@endif
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<label>Bueno</label>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<label>Malo</label>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<label>Regular</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<label for="surbanizacion">Servicios de Urbanización</label><br>
					<label for="hgienicos">Hábitos Higiénicos</label><br>
					<label for="hdiabeticos">Hábitos Dietéticos</label>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					@if($apn->surbanizacion=='BUENO')
					<input  type="checkbox" name="surbanizacion" value="BUENO" checked> <br>
					@else
					<input  type="checkbox" name="surbanizacion" value="BUENO" > <br>
					@endif
					@if($apn->habhigienicos=='BUENO')
					<input  type="checkbox" name="habhigienicos" value="BUENO" checked><br>
					@else
					<input  type="checkbox" name="habhigienicos" value="BUENO"><br>
					@endif
					@if($apn->habdieteticos=='BUENO')
					<input  type="checkbox" name="habdieteticos" value="BUENO" checked> 
					@else
					<input  type="checkbox" name="habdieteticos" value="BUENO">
					@endif
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					@if($apn->surbanizacion=='MALO')
					<input  type="checkbox" name="surbanizacion" value="MALO" checked> <br>
					@else
					<input  type="checkbox" name="surbanizacion" value="MALO" > <br>
					@endif
					@if($apn->habhigienicos=='MALO')
					<input  type="checkbox" name="habhigienicos" value="MALO" checked><br>
					@else
					<input  type="checkbox" name="habhigienicos" value="MALO"><br>
					@endif
					@if($apn->habdieteticos=='MALO')
					<input  type="checkbox" name="habdieteticos" value="MALO" checked> 
					@else
					<input  type="checkbox" name="habdieteticos" value="MALO">
					@endif
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					@if($apn->surbanizacion=='REGULAR')
					<input  type="checkbox" name="surbanizacion" value="REGULAR" checked> <br>
					@else
					<input  type="checkbox" name="surbanizacion" value="REGULAR" > <br>
					@endif
					@if($apn->habhigienicos=='REGULAR')
					<input  type="checkbox" name="habhigienicos" value="REGULAR" checked><br>
					@else
					<input  type="checkbox" name="habhigienicos" value="REGULAR"><br>
					@endif
					@if($apn->habdieteticos=='REGULAR')
					<input  type="checkbox" name="habdieteticos" value="REGULAR" checked> 
					@else
					<input  type="checkbox" name="habdieteticos" value="REGULAR">
					@endif
					@endforeach
					</div>
				</div>

			</div>
		</div><!--row-->

	</div><!--box-primary-->
</div><!--columna-->


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h4><strong>Antecedentes Personales Patológicos</strong></h4>

	<div class="box box-primary">
<br>
		<div class="row ">
			<div class="form-group">
				<div class="row">
					
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<label for="diabetes">Diabetes</label><br>
					<label for="hparterial">Hipertensión Arterial</label><br>
					<label for="cancer">Cancer</label><br>
					<label for="oenfermedades">Otras enfermedades</label><br>
					<label for="diagnosticosp">Diagnosticos Previos</label><br>
					<label for="cirugprevias">Cirugias Previas</label><br>
					<label for="fracturas">Fracturas</label><br>
					<label for="ts">Transfusiones Sanguineas</label><br>
					<label for="alergias">Alergias</label>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					@foreach($ap as $ap)
					<input type="hidden" name="id13"  value="{{$ap->idap_patologicos}}" >
					@if($ap->diabetes=='DIABETES')
					<input  type="checkbox" name="diabetes" value="DIABETES" checked> <br>
					@else
					<input  type="checkbox" name="diabetes" value="DIABETES"> <br>
					@endif
					@if($ap->hparterial=='HIPERTENSIÓN ARTERIAL')
					<input  type="checkbox" name="hparterial" value="HIPERTENSIÓN ARTERIAL" checked> <br>
					@else
					<input  type="checkbox" name="hparterial" value="HIPERTENSIÓN ARTERIAL"> <br>
					@endif
					@if($ap->cancer=='CANCER')
					<input  type="checkbox" name="cancer" value="CANCER" checked><br>
					@else
					<input  type="checkbox" name="cancer" value="CANCER"><br>
					@endif
					<input type="text" name="oenfermedades1"  value="{{$ap->oenfermedades}}"  placeholder="Cuáles"><br>
					<input type="text" name="diagnosticosp"  value="{{$ap->diagnosticosp}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="cirugprevias"  value="{{$ap->cirugprevias}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="fracturas"  value="{{$ap->fracturas}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="ts"  value="{{$ap->ts}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="alergias"  value="{{$ap->alergias}}" class="" placeholder="Cuáles">
					@endforeach
					</div>
				</div>

			</div>
		</div><!--row-->

	</div><!--box-primary-->
</div><!--columna-->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h4><strong>Antecedentes Obstétricos</strong></h4>

	<div class="box box-primary">
<br>
		<div class="row ">
			<div class="form-group">
				<div class="row">
					<div class="form-group">
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<label for="menarca">Menarca:</label><br>
					<label for="gesta">Gesta:</label><br>
					<label for="para">Para</label><br>
					<label for="fup">FUP:</label><br>
					<label for="abortos">Abortos</label><br>
					<label for="cesareas">Cesáreas:</label><br>
					<label for="fur">FUR:</label><br>
					<label for="meplafan">Métodos de</label><br>
					<label >Planificación Familiar</label>
					</div>

					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					@foreach($ao as $ao)
					<input type="hidden" name="id14"  value="{{$ao->idaobtetricos}}" >
					<input type="text" name="menarca"  value="{{$ao->menarca}}" class="" ><br>
					<select name="gesta" class="">
					
					@if($ao->gesta=='0')
					<option value="0" selected>0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->gesta=='1')
                	<option value="0" >0</option>
                	<option value="1" selected>1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->gesta=='2')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" selected="">2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->gesta=='3')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" selected>3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->gesta=='4')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" selected>4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->gesta=='5')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" selected>5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->gesta=='6')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" selected>6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->gesta=='ó más')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" selected>ó más</option>
                	@endif
					</select><br>

					<select name="para" class="">
					@if($ao->para=='0')
					<option value="0" selected>0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->para=='1')
                	<option value="0" >0</option>
                	<option value="1" selected>1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->para=='2')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" selected="">2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->para=='3')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" selected>3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->para=='4')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" selected>4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->para=='5')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" selected>5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->para=='6')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" selected>6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->para=='ó más')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" selected>ó más</option>
                	@endif
					</select><br>
					<input type="text" name="fup"  value="{{$ao->fup}}" class="" ><br><br>
					<select name="abortos" class="">
					@if($ao->abortos=!'0')
					<option value="0" selected>0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
					@elseif($ao->abortos=='0')
					<option value="0" selected>0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->abortos=='1')
                	<option value="0" >0</option>
                	<option value="1" selected>1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->abortos=='2')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" selected="">2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->abortos=='3')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" selected>3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->abortos=='4')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" selected>4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->abortos=='5')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" selected>5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->abortos=='6')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" selected>6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->abortos=='ó más')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" selected>ó más</option>
                	@endif
					</select><br>
					<select name="cesareas" class="">
					@if($ao->cesareas=!'0')
					<option value="0" selected>0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
					@elseif($ao->cesareas=='0')
					<option value="0" selected>0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->cesareas=='1')
                	<option value="0" >0</option>
                	<option value="1" selected>1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->cesareas=='2')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" selected="">2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->cesareas=='3')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" selected>3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->cesareas=='4')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" selected>4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->cesareas=='5')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" selected>5</option>
                	<option value="6" >6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->cesareas=='6')
					<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" selected>6</option>
                	<option value="ó más" >ó más</option>
                	@elseif($ao->cesareas=='ó más')
                	<option value="0" >0</option>
                	<option value="1" >1</option>
                	<option value="2" >2</option>
                	<option value="3" >3</option>
                	<option value="4" >4</option>
                	<option value="5" >5</option>
                	<option value="6" >6</option>
                	<option value="ó más" selected>ó más</option>
                	@endif
					</select><br>
					<input type="text" name="fur"  value="{{$ao->fur}}" class="" >
					<br><br>
					<input type="text" name="meplafam"  value="{{$ao->meplafam}}" class="" ><br>
					@endforeach
					</div>
					</div>
				</div>
			</div>
		</div><!--row-->
	</div><!--box-primary-->
</div><!--columna-->

<h4><strong>Padecimiento Actual</strong></h4>
<div class="box box-info">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
			<textarea class="form-control" rows="4" name="padecimiento_actual" placeholder="Padecimiento Actual">{{$hclinica->padecimiento_actual}}</textarea> 
			</div>
		</div>
	</div>


<h4><strong>Exploración Fisíca</strong></h4>
<div class="box box-info">
	<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>T.A</label>
			
			<input type="text" name="ta"  value="{{$svitales->ta}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>F.C</label>
			<input type="text" name="fc"  value="{{$svitales->fc}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>F.R</label>
			<input type="text" name="fr"  value="{{$svitales->fr}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Temp</label>
			<input type="text" name="temp"  value="{{$svitales->temp}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Talla</label>
			<input type="text" name="talla"  value="{{$svitales->talla}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Peso</label>
			<input type="text" name="peso"  value="{{$svitales->peso}}" class="form-control" disabled="">
			
			</div>
		</div>
	</div>
	<h4><strong>Habitus exterior</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="habitus_exterior"  placeholder="Habitus exterior">{{$hclinica->habitus_exterior}}</textarea>
				</div>
		</div>
			
		</div>
	

	<div class="row">
		
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Glasgow</label>
				<input type="number" name="glasgow"  value="{{$hclinica->glasgow}}" min="3" max="15" class="form-control">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Barthell</label>
				<input type="number" name="bartell"  value="{{$hclinica->bartell}}" min="0" class="form-control">
				</div>
			</div>
	</div>

	<h4><strong>Cabeza</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="cabeza"  placeholder="Cabeza">{{$hclinica->cabeza}}</textarea>
				
				</div>
		</div>
			
		</div>
	

	<h4><strong>Ojos</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
					<label for="ojos"></label>
				<textarea class="form-control" rows="4" name="ojos"  placeholder="Ojos">{{$hclinica->ojos}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Cuello</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="cuello"  placeholder="Cuello">{{$hclinica->cuello}}</textarea>
				</div>
		</div>
			
		</div>
	

	<h4><strong>Torax</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="torax"  placeholder="Torax">{{$hclinica->torax}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Abdomen</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="abdomen"  placeholder="Abdomen">{{$hclinica->abdomen}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Genitales</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="genitales"  placeholder="Genitales">{{$hclinica->genitales}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Extremidades Torácidas</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="extremidades_t" placeholder="Extremidades Torácidas">{{$hclinica->extremidades_t}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Extremidades Pélvicas</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="extremidades_p"  placeholder="Extremidades Pélvicas">{{$hclinica->extremidades_p}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Otros</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="otros" placeholder="Otros">{{$hclinica->otros}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Estudios de Laboratorio y Gabinete</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Estudios de Laboratorio y Gabinete" disabled=""></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Diagnóstico</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4"  name="diagnostico" placeholder="Diagnóstico">{{$hclinica->diagnostico}}</textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Plan</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="plan" placeholder="Plan">{{$hclinica->plan}}</textarea>
				</div>
		</div>
			
		</div>
	</div>




<div class="row">

	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{URL::action('HClinicaController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
		</div>
	</div></center>
</div>


	{!!Form::close()!!}
@push('scripts')
<script>
$("#idpaciente").change(mostrarvalores);


function mostrarvalores(){

	datospaciente=document.getElementById('idpaciente').value.split('_');
	
	$("#fnacimiento").val(datospaciente[1]);
	$("#genero").val(datospaciente[2]);
	$("#ocupacion").val(datospaciente[3]);
	$("#originario").val(datospaciente[4]);
	$("#residente").val(datospaciente[5]);
	$("#edo_civil").val(datospaciente[6]);
	
}
</script>

@endpush





@endsection