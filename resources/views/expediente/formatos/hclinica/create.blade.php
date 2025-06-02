@extends ('layouts.admin')
@section ('title')
<h>HISTORIA CLÍNICA</h>
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
		{!!Form::open(array('url'=>'expediente/formatos/hclinica', 'method'=>'POST', 'autocomplete'=>'off'))!!}
		{{Form::token()}}
		


<h4><strong>Datos del Paciente</strong></h4>
<div class="box box-primary">
	<div class="row">
	<br>

	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
		<div class="form-group">
			<label>Nombre del Paciente</label>
			<input type="text"  value="{{$paciente->apaterno.' '.$paciente->amaterno.' '.$paciente->nombre}}" class="form-control" disabled="">
			<input type="hidden"  class="form-control" name="paciente"  value="{{$paciente->idpaciente}}">
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
			<input type="text" class="form-control" value="{{$paciente->genero}}" disabled="">
		</div>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
		<div class="form-group">
			<label>Habitación</label><br>
			<input type="text" name="habitacion"  value="{{old('habitacion')}}"  class="form-control">
		</div>
	</div>

	</div><!--</div class="row">-->

<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Ocupación</label><br>
			<input type="text" value="{{$paciente->ocupacion}}" disabled="" class="form-control">
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Originario de:</label><br>
			<input type="text" value="{{$paciente->edo_nacimiento}}"  disabled="" class="form-control">
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Residente de</label><br>
			<input type="text" value="{{$paciente->dom_municipio}}" disabled="" class="form-control">
		</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Estado Civil</label>
			<input type="text" value="{{$paciente->edo_civil}}" disabled="" class="form-control">
		</div>
	
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Tipo de Interrogatorio</label>
			<select name="interrogatorio" class="form-control select2">
				<option value="DIRECTO" @if (old('interrogatorio') == "DIRECTO") {{ 'selected' }} @endif>DIRECTO</option>
                <option value="INDIRECTO" @if (old('interrogatorio') == "INDIRECTO") {{ 'selected' }} @endif>INDIRECTO</option>
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
					<input  type="checkbox" name="diabetes" value="DIABETES"> Diabetes
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<input  type="checkbox" name="exfumador" value="EXFUMADOR"> Exfumador<br>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<input  type="checkbox" name="hipertension" value="HIPERTENSIÓN ARTERIAL"> Hipertensión Arterial<br>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<input  type="checkbox" name="exalcoholico" value="EX ALCOHOLICO"> Ex alcoholico<br>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<input  type="checkbox" name="cancer" value="CANCER">Cancer
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<input  type="checkbox" name="exadicto" value="EX ADICTO"> Ex adicto<br>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label>Otras Enfermedades</label><br>
						<input type="text" name="oenfermedades"  value="{{old('oenfermedades')}}" class="form-control" placeholder="CÚALES">
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
					<input  type="checkbox" name="tabaquismo" value="TABAQISMO"> Tabaquismo
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<input  type="checkbox" name="alcoholismo" value="ALCOHOLISMO"> Alcoholismo<br>
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
					<input  type="checkbox" name="surbanizacion" value="BUENO"> <br>
					<input  type="checkbox" name="hgienicos" value="BUENO"><br>
					<input  type="checkbox" name="" value="BUENO"> 
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<input  type="checkbox" name="surbanizacion" value="MALO"><br>
					<input  type="checkbox" name="hgienicos" value="MALO"><br>
					<input  type="checkbox" name="hdiabeticos" value="MALO">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<input  type="checkbox" name="surbanizacion" value="REGULAR"><br>
					<input  type="checkbox" name="hgienicos" value="REGULAR"><br>
					<input  type="checkbox" name="hdiabeticos" value="REGULAR">
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
					<input  type="checkbox" name="diabetes" value="DIABETES"> <br>
					<input  type="checkbox" name="hparterial" value="HIPERTENSIÓN ARTERIAL"> <br>
					<input  type="checkbox" name="cancer" value="CANCER"><br>
					<input type="text" name="oenfermedades"  value="{{old('oenfermedades')}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="diagnosticosp"  value="{{old('diagnosticosp')}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="cirugprevias"  value="{{old('cirugprevias')}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="fracturas"  value="{{old('fracturas')}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="ts"  value="{{old('ts')}}" class="" placeholder="Cuáles"><br>
					<input type="text" name="alergias"  value="{{old('alergias')}}" class="" placeholder="Cuáles">
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
					<input type="text" name=""  value="{{old('')}}" class="" ><br>
					<select name="gesta" class="">
					<option value="0" @if (old('gesta') == "0") {{ 'selected' }} @endif>0</option>
                	<option value="1" @if (old('gesta') == "1") {{ 'selected' }} @endif>1</option>
                	<option value="2" @if (old('gesta') == "2") {{ 'selected' }} @endif>2</option>
                	<option value="3" @if (old('gesta') == "3") {{ 'selected' }} @endif>3</option>
                	<option value="4" @if (old('gesta') == "4") {{ 'selected' }} @endif>4</option>
                	<option value="5" @if (old('gesta') == "5") {{ 'selected' }} @endif>5</option>
                	<option value="6" @if (old('gesta') == "6") {{ 'selected' }} @endif>6</option>
                	<option value="7" @if (old('gesta') == "7") {{ 'selected' }} @endif>ó más</option>
					</select><br>
					<select name="para" class="">
					<option value="0" @if (old('para') == "0") {{ 'selected' }} @endif>0</option>
                	<option value="1" @if (old('para') == "1") {{ 'selected' }} @endif>1</option>
                	<option value="2" @if (old('para') == "2") {{ 'selected' }} @endif>2</option>
                	<option value="3" @if (old('para') == "3") {{ 'selected' }} @endif>3</option>
                	<option value="4" @if (old('para') == "4") {{ 'selected' }} @endif>4</option>
                	<option value="5" @if (old('para') == "5") {{ 'selected' }} @endif>5</option>
                	<option value="6" @if (old('para') == "6") {{ 'selected' }} @endif>6</option>
                	<option value="7" @if (old('para') == "7") {{ 'selected' }} @endif>ó más</option>
					</select><br>
					<input type="text" name=""  value="{{old('')}}" class="" ><br>
					<select name="abortos" class="">
					<option value="0" @if (old('abortos') == "0") {{ 'selected' }} @endif>0</option>
                	<option value="1" @if (old('abortos') == "1") {{ 'selected' }} @endif>1</option>
                	<option value="2" @if (old('abortos') == "2") {{ 'selected' }} @endif>2</option>
                	<option value="3" @if (old('abortos') == "3") {{ 'selected' }} @endif>3</option>
                	<option value="4" @if (old('abortos') == "4") {{ 'selected' }} @endif>4</option>
                	<option value="5" @if (old('abortos') == "5") {{ 'selected' }} @endif>5</option>
                	<option value="6" @if (old('abortos') == "6") {{ 'selected' }} @endif>6</option>
                	<option value="7" @if (old('abortos') == "7") {{ 'selected' }} @endif>ó más</option>
					</select><br>
					<select name="cesareas" class="">
					<option value="0" @if (old('cesareas') == "0") {{ 'selected' }} @endif>0</option>
                	<option value="1" @if (old('cesareas') == "1") {{ 'selected' }} @endif>1</option>
                	<option value="2" @if (old('cesareas') == "2") {{ 'selected' }} @endif>2</option>
                	<option value="3" @if (old('cesareas') == "3") {{ 'selected' }} @endif>3</option>
                	<option value="4" @if (old('cesareas') == "4") {{ 'selected' }} @endif>4</option>
                	<option value="5" @if (old('cesareas') == "5") {{ 'selected' }} @endif>5</option>
                	<option value="6" @if (old('cesareas') == "6") {{ 'selected' }} @endif>6</option>
                	<option value="7" @if (old('cesareas') == "7") {{ 'selected' }} @endif>ó más</option>
					</select><br>
					<input type="text" name="fur"  value="{{old('fur')}}" class="" ><br>
					<br>
					<input type="text" name="meplafan"  value="{{old('meplafan')}}" class="" ><br>
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
			<textarea class="form-control" rows="4" name="padecimiento_actual" placeholder="Padecimiento Actual"></textarea> 
			</div>
		</div>
	</div>


<h4><strong>Exploración Fisíca</strong></h4>
<div class="box box-info">
	<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>T.A</label>
			<input type="text" name="ta"  value="{{old('ta')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>F.C</label>
			<input type="text" name="fc"  value="{{old('originario')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>F.R</label>
			<input type="text" name="fr"  value="{{old('originario')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Temp</label>
			<input type="text" name="temp"  value="{{old('originario')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Talla</label>
			<input type="text" name="talla"  value="{{old('originario')}}" class="form-control" disabled="">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Peso</label>
			<input type="text" name="peso"  value="{{old('originario')}}" class="form-control" disabled="">
			</div>
		</div>
	</div>
	<h4><strong>Habitus exterior</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="habitus_exterior" value="{{old('habitus_exterior')}}" placeholder="Habitus exterior"></textarea>
				</div>
		</div>
			
		</div>
	

	<div class="row">
		
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Glasgow</label>
				<input type="number" name="glasgow"  value="{{old('glasgow')}}" min="3" max="15" class="form-control">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Barthell</label>
				<input type="number" name="bartell"  value="{{old('bartell')}}" min="0" class="form-control">
				</div>
			</div>
	</div>

	<h4><strong>Cabeza</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="cabeza" value="{{old('cabeza')}}" placeholder="Cabeza"></textarea>
				
				</div>
		</div>
			
		</div>
	

	<h4><strong>Ojos</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
					<label for="ojos"></label>
				<textarea class="form-control" rows="4" name="ojos" value="{{old('ojos')}}" placeholder="Ojos"></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Cuello</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="cuello"  placeholder="Cuello"></textarea>
				</div>
		</div>
			
		</div>
	

	<h4><strong>Torax</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="torax" value="{{old('torax')}}" placeholder="Torax"></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Abdomen</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="abdomen" value="{{old('abdomen')}}" placeholder="Abdomen"></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Genitales</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="genitales" value="{{old('genitales')}}" placeholder="Genitales"></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Extremidades Torácidas</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="extremidades_t" value="{{old('extremidades_t')}}" placeholder="Extremidades Torácidas"></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Extremidades Pélvicas</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="extremidades_p" value="{{old('extremidades_p')}}" placeholder="Extremidades Pélvicas"></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Otros</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="otros" value="{{old('otros')}}" placeholder="Otros"></textarea>
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
				<textarea class="form-control" rows="4"  name="diagnostico" placeholder="Diagnóstico"></textarea>
				</div>
		</div>
			
		</div>
	
	<h4><strong>Plan</strong></h4>
	<div class="box box-info">
		<div class="row">
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-group">
				<textarea class="form-control" rows="4" name="plan" placeholder="Plan"></textarea>
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