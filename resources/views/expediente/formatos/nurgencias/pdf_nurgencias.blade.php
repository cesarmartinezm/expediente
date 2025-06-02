
<!DOCTYPE html>
<html lang="es">
<title>Nota_Urgencias </title>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
  
   <style>
 	body { font-family: DejaVu Sans;
 		font-size:10px;
 	 }
 	 
	* {box-sizing: border-box;}

	.column {
		
	    float: left;
	    padding: 6px;
	    height: 5px; 
	    background-color:#;
	}

	.col-15 {
	  width: 15%;
	}

	.col-10{
	  width: 10%;
	}

	.col-20{
		width: 20%;
	}
	.col-30{
		width: 30%;
	}
	.col-50{
		width: 50%;
	}
	.col-60{
		width: 60%;
	}
	.col-80{
		width: 80%;
	}
	.col-40{
		width: 40%;
	}

	.row:after {
	    content: "";
	    display: table;
	    clear: both;
	}

	.corners{
		border-radius: 10px;
		border: 2px solid;
		height: auto;
	}

	#firma{
	width: 340px;
	}
	#texta{
		text-align: left;
		height: 65px;
		font-size: 9px;
	}
	</style>
<div class="corners">
   <h3 align="CENTER">NOTA DE URGENCIAS</h3>
</head>
<body >

  
	<div>
    	<div class="row">
    		<div class="column col-40" >
    			
    		</div>
    		<div class="column col-30" ></div>
  			<div class="column col-15" >
    			<label><b>TRIAGE: </b>{{$nurgencias->triage}}</label>
  			</div>
		</div>

		<div class="row">
			
			<div class="column col-30" ></div>
		  	<div class="column col-40" >
		  		
		    	<label><b>ASEGURADORA: </b>{{$p->convenio}}</label>
		  	</div>
		  	<div class="column col-15" >
		    	<label><b>FOLIO: </b>{{$nurgencias->folio}}</label>
		  	</div>
		</div>

		<div class="row">
			<div class=" column col-20">
				<label><b>FECHA: </b>{{$nurgencias->created_at->format('Y-m-d')}}</label>
			</div>
			<div class=" column col-30">
				<label><b>HORA DE INGRESO: </b>{{$p->created_at->format('H:m')}}</label>
			</div>
			<div class=" column col-30">
				<label><b>HORA DE CONSULTA: </b>{{$nurgencias->hconsulta}}</label>
			</div>
		</div>	

		<div class="row">
			<div class=" column col-30">
				<label><b>l. FECHA DE IDENTIFICACIÓN</b></label>
			</div>
		</div>

		<div class="row">
			<div class=" column col-60">
				<label><b>NOMBRE DEL PACIENTE: </b>{{$p->apaterno.' '.$p->amaterno.' '.$p->nombre}}</label>
			</div>
			<div class=" column col-15">
				<label><b>F.NAC: </b>{{$p->fnacimiento}}</label>
			</div>
			<div class=" column col-20">
				<label><b>SEXO: </b>{{$p->genero}}</label>
			</div>
		</div><hr>
		
		<div class="row">
			<div class=" column col-50">
				<label><b>ll. ANTECEDENTES RELACIONADOS CON LA URGENCIA:</b></label>
			</div>
		</div>
		<div class="row">
			<div class=" column col-15">
				
				@if($ant->hipertencion=='HIPERTENCIÓN')
				<input  type="checkbox" checked> Hipertención
				@else
				<input  type="checkbox"> Hipertención
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->diabetes=='DIABETES')
				<input  type="checkbox" checked>Diabetes
				@else
				<input  type="checkbox">Diabetes
				@endif
			</div>
			<div class=" column col-15" style="font-size: 9px;">
				@if($ant->cardiovasculares=='CARDIOVASCULARES')
				<input  type="checkbox" checked> Cardiovasculares
				@else
				<input  type="checkbox"> Cardiovasculares
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->obesidad=='OBESIDAD')
				<input  type="checkbox" checked> Obesidad
				@else
				<input  type="checkbox" > Obesidad
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->gastritis=='GASTRITIS')
				<input  type="checkbox" checked> Gastritis
				@else
				<input  type="checkbox" > Gastritis
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->hepatitis=='HEPATITIS')
				<input  type="checkbox" checked> Hepatitis
				@else
				<input  type="checkbox" > Hepatitis
				@endif
			</div>
		</div>

		<div class="row">
			<div class=" column col-15">
				@if($ant->nefropatias=='NEFROPATIAS')
				<input  type="checkbox" checked> Nefropatías
				@else
				<input  type="checkbox" > Nefropatías
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->artritis=='ARTRITIS')
				<input  type="checkbox" checked> Artritis
				@else
				<input  type="checkbox" > Artritis
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->convulsiones=='CONVULSIONES')
				<input  type="checkbox" checked> Convulsiones
				@else
				<input  type="checkbox" > Convulsiones
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->cirugias=='CIRUGÍAS')
				<input  type="checkbox" checked> Cirugías
				@else
				<input  type="checkbox" > Cirugías
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->traumaticos=='TRAUMÁTICOS')
				<input  type="checkbox" checked> Traumátios
				@else
				<input  type="checkbox"  > Traumátios
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->fimicos=='FÍMICOS')
				<input  type="checkbox" checked> Fímicos
				@else
				<input  type="checkbox" > Fímicos
				@endif
			</div>
		</div>

		<div class="row">
			<div class=" column col-15">
				@if($ant->neoplasias=='NEOPLASIAS')
				<input  type="checkbox" checked> Neoplasias
				@else
				<input  type="checkbox"> Neoplasias
				@endif
			</div>
			<div class=" column col-15">
				@if($ant->hemofilia=='HEMOFILIA')
				<input  type="checkbox" checked> Hemofilia
				@else
				<input  type="checkbox"> Hemofilia
				@endif
			</div>
			<div class=" column col-30">
				@if($ant->enfsexuales=='ENFERMEDADES SEXUALES')
				<input  type="checkbox" checked> Enfermedades Sexuales
				@else
				<input  type="checkbox" > Enfermedades Sexuales
				@endif
			</div>
			
		</div><br>

		<div class="row">
			<div class=" column col-60">
					
				<label><b>OTROS: </b>{{$ant->otros}}</label>
			</div>
			<div class="column col-40">
				<label><b>FUR: </b>{{$ant->fur}}</label>
			</div>
		</div>

		<div class="row">
			<div class=" column col-50">
					
				<label><b>ALERGIAS: </b>{{$ant->alergias}}</label>
			</div>
			<div class="column col-50">
				<label><b>TOXICOMANIAS: </b>{{$ant->toxicomanias}}</label>
			</div>
		</div><hr>
		

		<div class="row">
			<div class=" column col-30">
				<label><b>lll. PADECIMIENTO ACTUAL:</b></label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">{{$nurgencias->padecimiento_a}}
			</textarea>
		</div><hr>

		<div class="row">
			<div class=" column col-30">
				<label><b>lV. SIGNOS VITALES:</b></label>
			</div>
			<div class=" column col-20">
				
				@foreach($svitales as $s)
				<label><b>T/A: </b>{{$s->ta}}</label>
				
			
			</div>
			<div class=" column col-20">
				<label><b>TEMP: </b>{{$s->temp}}</label>
			</div>
			<div class=" column col-20">
				<label><b>FREC.C: </b>{{$s->fc}}</label>
			</div>
		</div>

		<div class="row">
			
			<div class=" column col-20">
				<label><b>FREC.R: </b>{{$s->fr}}</label>
			</div>
			<div class=" column col-20">
				<label><b>SaO2%: </b>{{$s->sao2}}</label>
			</div>
			<div class=" column col-20">
				<label><b>PESO: </b>{{$s->peso}}</label>
			</div>
			<div class=" column col-20">
				<label><b>TALLA: </b>{{$s->talla}}</label>
			@endforeach
			</div>
		</div>

		<hr>

		<div class="row">
			<div class=" column col-30">
				<label><b>V. EXPLORACIÓN FÍSICA:</b></label>
			</div>
			<div class=" column col-30">
				<label><b>GLASGOW: </b>{{$nurgencias->glasgow}}</label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">{{$nurgencias->exp_fisica}}
			</textarea>
		</div>
		<hr>

		<div class="row" style="font-size: 9px;">
			<div class=" column col-40" >
				<label><b>Vl. RESULTADOS LABORATORIO, GABINETE Y OTROS:</b></label>
			</div>
			<div class=" column col-30">
				<label><b>Hora de Solicitud: </b></label>
			</div>
			<div class=" column col-20">
				<label><b>Hora de Entrega:</b></label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">
				
			</textarea>
		</div>
		<hr>
		<div class="row">
			<div class=" column col-40">
				<label><b>Vll. DIAGNÓSTICO (S) PRESUNCIAL (ES):</b></label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">{{$nurgencias->dpresunciales}}
			</textarea>
		</div>
		<hr>

		<div class="row">
			<div class=" column col-30">
				<label><b>Vlll. INDICACIONES MÉDICAS</b></label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">{{$nurgencias->ind_medicas}}
			</textarea>
		</div>

		<div class="row">
			<div class=" column col-50">
				<label><b>Hora de llamada Especialista: </b>{{$nurgencias->hr_llam_esp}}</label>
			</div>
			<div class=" column col-50">
				<label><b>Hora de llegada Especialista:</b></label>
			</div>
		</div>
		
		
	</div><br><br><br><br>

	<div><!--div pie de pagina-->
		<center><hr id="firma"></center>
		<center><label><b> DR. FERNANDO ANGULO CED.12345678</b></label></center>

	</div><!--div pie de pagina-->

	</div><!--div margen-->
</body>
</html>
