
<!DOCTYPE html>
<html lang="es">
<title>Hclinica </title>
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
	.col-25{
		width: 25%;
	}
	.col-40{
		width: 40%;
	}
	.col-55{
		width: 52%;
	}

	.col-8{
		width: 5%;
		font-size: 9px;
	}
	.col-in{
		width: 4%;
		font-size: 7px;
	}
	.col-22{
		width: 21.5%;
		font-size: 9px;
	}
	.row:after {
	    content: "";
	    display: table;
	    clear: both;
	}

	.pagina{
		border-radius: 10px;
		border: 2px solid;
		height: 945px;
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

   
</head>
<body >
<div class="pagina">
	<h3 align="CENTER">HISTORIA CLÍNICA</h3>
	<div class="paciente">
		<div class="row">
			<div class="column col-60">
				<label><b>Nombre del paciente: </b>{{$paciente->apaterno.' '.$paciente->amaterno.' '.$paciente->nombre}}</label>
			</div>
			<div class="column col-30">
				<label><b>Fecha: </b>{{$hclinica->created_at->format('Y-m-d')}}</label>
			</div>
		</div>

		<div class="row">
			<div class="column col-15">
				<label><b>Edad: </b></label>
			</div>
			<div class="column col-40">
				<label><b>Fecha de nacimiento: </b>{{$paciente->fnacimiento}}</label>
			</div>
			<div class="column col-15">
				<label><b>Sexo: </b>{{$paciente->genero}}</label>
			</div>
			<div class="column col-20">
				<label><b>Habitación: </b>{{$hclinica->habitacion}}</label>
			</div>
		</div>
		<div class="row">
			<div class="column col-30">
				<label><b>Ocupación: </b>{{$paciente->ocupacion}}</label>
			</div>
			<div class="column col-30">
				<label><b>Originario de: </b>{{$paciente->edo_nacimiento}}</label>
			</div>
			<div class="column col-30">
				<label><b>Residente de: </b>{{$paciente->dom_municipio}}</label>
			</div>
		</div>
		<div class="row">
			<div class="column col-40">
				<label><b>Estado Civil: </b>{{$paciente->edo_civil}}</label>
			</div>
			<div class="column col-40">
				<label><b>Tipo de interrogatorio: </b>{{$hclinica->interrogatorio}}</label>
			</div>
		</div>

  	</div><!--Div paciente-->

<br><hr>
  	<div class="ant-heredo">
  		<div class="row">
			<div class="column col-50" >
				<center><label><b>ANTECEDENTES HEREDO-FAMILIARES</b></label></center>
			</div>
			<div class="column col-50" >
				<label> <b>ANTECENDETES PERSONALES NO PATOLÓGICOS</b></label>
			</div>
		</div>
		<div class="row"><br>
			<div class="column col-20">
				@if($aheredo->diabetes=='DIABETES')
				<input  type="checkbox" checked  > Diabetes
				@else
				<input  type="checkbox"> Diabetes
				@endif
			</div>
			<div class="column col-30">
				@if($aheredo->exfumador=='EXFUMADOR')
				<input  type="checkbox" checked> Ex fumador
				@else
				<input  type="checkbox"> Ex fumador
				@endif
			</div>
			<div class="column col-20" >
				@if($apn->tabaquismo=='TABAQUISMO')
				<input  type="checkbox" checked> Tabaquismo
				@else
				<input  type="checkbox" > Tabaquismo
				@endif
			</div>
			
		</div>
		<div class="row">
			<div class="column col-20">
				@if($aheredo->hipertension=='HIPERTENSIÓN ARTERIAL')
				<input  type="checkbox" checked  > Hipertención Arterial
				@else
				<input  type="checkbox"> Hipertención Arterial
				@endif
			</div>
			<div class="column col-30">
				@if($aheredo->exalcolico=='EX ALCOHOLICO')
				<input  type="checkbox" checked> EX ALCOLICO
				@else
				<input  type="checkbox"> Ex alcohólico
				@endif
			</div>
			<div class="column col-20" >
				@if($apn->alcoholismo=='ALCOHOLISMO')
				<input  type="checkbox" checked> Alcoholismo
				@else
				<input  type="checkbox" > Alcoholismo
				@endif
			</div>
			
		</div>
		<div class="row">
			<div class="column col-20">
				@if($aheredo->cancer=='CANCER')
				<input  type="checkbox" checked > Cáncer
				@else
				<input  type="checkbox" > Cáncer
				@endif
			</div>
			<div class="column col-20">
				@if($aheredo->exadicto=='EX ADICTO')
				<input  type="checkbox" checked> Ex adicto
				@else
				<input  type="checkbox" checked> Ex adicto
				@endif
			</div>
			<div class="column col-30" >
				
			</div>
			<div class="column col-8"  >
				<label><b>BUENO</b></label>
			</div>
			<div class="column col-8" >
				<label><b>&nbsp;&nbsp;MALO</b></label>
			</div>
			<div class="column col-8" >
				<label><b>REGULAR</b></label>
			</div>
		</div>
		<div class="row">
			<div class="column col-55">
				<label><b>Otras enfermedades: </b>{{$aheredo->oenfermedades}}</label>
			</div>
			<div class="column col-22" style="font-size: 9px;">
				<label><b>Servicios de urbanización</b></label>
			</div>
			<div class="column col-8" >
				@if($apn->surbanizacion=='BUENO')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
			<div class="column col-8" >
				@if($apn->surbanizacion=='MALO')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
			<div class="column col-8" >
				@if($apn->surbanizacion=='REGULAR')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
			
		</div>
		<div class="row">
			<div class="column col-55">
				<label><b></b></label>
			</div>
			<div class="column col-22" style="font-size: 9px;">
				<label><b>Hábitos Higiénicos</b></label>
			</div>
			<div class="column col-8" >
				@if($apn->habhigienicos=='BUENO')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
			<div class="column col-8" >
				@if($apn->habhigienicos=='MALO')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
			<div class="column col-8" >
				@if($apn->habhigienicos=='REGULAR')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
			
		</div>
		<div class="row">
			<div class="column col-55">
				<label><b></b></label>
			</div>
			<div class="column col-22" style="font-size: 9px;">
				<label><b>Hábitos Dietéticos </b></label>
			</div>
			<div class="column col-8" >
				@if($apn->habdieteticos=='BUENO')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
			<div class="column col-8" >
				@if($apn->habdieteticos=='MALO')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
			<div class="column col-8" >
				@if($apn->habdieteticos=='REGULAR')
				<input  type="checkbox" checked>
				@else
				<input  type="checkbox" >
				@endif
			</div>
		</div>
  	</div><!--antecedentes/heredo/personales.nopatologicos-->
  	<br><hr>
  	<div class="ant_personales">
  		<div class="row">
			<div class="column col-55">
				<center><label><b>ANTECEDENTES PERSONALES PATOLÓGICOS</b></label></center>
			</div>
			<div class="column col-40" >
				<center><label><b>ANTECEDENTES OBSTETRICOS </b></label></center>
			</div>
			
		</div>
		<div class="row">
			<div class="column col-50">
				@if($ap->diabetes=='DIABETES')
				<input  type="checkbox" checked> Diabetes
				@else
				<input  type="checkbox" > Diabetes
				@endif
			</div>
			<div class="column col-40" >
				<label><b style="font-size: 9px;">Menarca: </b>{{$ao->menarca}}</label>
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				@if($ap->hpearterial=='HIPERTENSIÓN ARTERIAL')
				<input  type="checkbox" checked> Hipertensión Arterial
				@else
				<input  type="checkbox" > Hipertensión Arterial
				@endif
			</div>
			<div class="column col-8" >
				<label><b>Gesta: </b></label>
			</div>
			<div class="column col-in" >
				@if($ao->gesta=='1')
				<input  type="checkbox" checked>1
				@else
				<input  type="checkbox" >1
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->gesta=='2')
				<input  type="checkbox" checked>2
				@else
				<input  type="checkbox" >2
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->gesta=='3')
				<input  type="checkbox" checked>3
				@else
				<input  type="checkbox" >3
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->gesta=='4')
				<input  type="checkbox" checked>4
				@else
				<input  type="checkbox" >4
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->gesta=='5')
				<input  type="checkbox" checked>5
				@else
				<input  type="checkbox" >5
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->gesta=='6')
				<input  type="checkbox" checked>6
				@else
				<input  type="checkbox" >6
				@endif
			</div>
			<div class="column col-10" >
				@if($ao->gesta=='7')
				<input  type="checkbox" checked>ó más
				@else
				<input  type="checkbox" >ó más
				@endif
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				@if($ap->cancer=='CANCER')
				<input  type="checkbox" checked> Cáncer
				@else
				<input  type="checkbox" > Cáncer
				@endif
			</div>
			<div class="column col-8" >
				<label><b>Para: </b></label>
			</div>
			<div class="column col-in" >
				@if($ao->para=='1')
				<input  type="checkbox" checked>1
				@else
				<input  type="checkbox" >1
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->para=='2')
				<input  type="checkbox" checked>2
				@else
				<input  type="checkbox" >2
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->para=='3')
				<input  type="checkbox" checked>3
				@else
				<input  type="checkbox" >3
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->para=='4')
				<input  type="checkbox" checked>4
				@else
				<input  type="checkbox" >4
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->para=='5')
				<input  type="checkbox" checked>5
				@else
				<input  type="checkbox" >5
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->para=='6')
				<input  type="checkbox" checked>6
				@else
				<input  type="checkbox" >6
				@endif
			</div>
			<div class="column col-10" >
				@if($ao->para=='7')
				<input  type="checkbox" checked>ó más
				@else
				<input  type="checkbox" >ó más
				@endif
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				<label><b>Otras enfermedades: </b>{{$ap->oenfermedades}}</label>
			</div>
			<div class="column col-40" >
				<label><b style="font-size: 9px;">FUP: </b>{{$ao->fup}}</label>
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				<label><b>Diagnósticos Previos: </b>{{$ap->diagnosticosp}}</label>
			</div>
			<div class="column col-8" >
				<label><b>Abortos: </b></label>
			</div>
			<div class="column col-in" >
				@if($ao->abortos=='1')
				<input  type="checkbox" checked>1
				@else
				<input  type="checkbox" >1
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->abortos=='2')
				<input  type="checkbox" checked>2
				@else
				<input  type="checkbox" >2
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->abortos=='3')
				<input  type="checkbox" checked>3
				@else
				<input  type="checkbox" >3
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->abortos=='4')
				<input  type="checkbox" checked>4
				@else
				<input  type="checkbox" >4
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->abortos=='5')
				<input  type="checkbox" checked>5
				@else
				<input  type="checkbox" >5
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->abortos=='6')
				<input  type="checkbox" checked>6
				@else
				<input  type="checkbox" >6
				@endif
			</div>
			<div class="column col-10" >
				@if($ao->abortos=='7')
				<input  type="checkbox" checked>ó más
				@else
				<input  type="checkbox" >ó más
				@endif
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				<label><b></b></label>
			</div>
			<div class="column col-8" >
				<label><b style="font-size: 8px;">Cesáreas: </b></label>
			</div>
			<div class="column col-in" >
				@if($ao->cesareas=='1')
				<input  type="checkbox" checked>1
				@else
				<input  type="checkbox" >1
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->cesareas=='2')
				<input  type="checkbox" checked>2
				@else
				<input  type="checkbox" >2
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->cesareas=='3')
				<input  type="checkbox" checked>3
				@else
				<input  type="checkbox" >3
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->cesareas=='4')
				<input  type="checkbox" checked>4
				@else
				<input  type="checkbox" >4
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->cesareas=='5')
				<input  type="checkbox" checked>5
				@else
				<input  type="checkbox" >5
				@endif
			</div>
			<div class="column col-in" >
				@if($ao->cesareas=='6')
				<input  type="checkbox" checked>6
				@else
				<input  type="checkbox" >6
				@endif
			</div>
			<div class="column col-10" >
				@if($ao->cesareas=='7')
				<input  type="checkbox" checked>ó más
				@else
				<input  type="checkbox" >ó más
				@endif
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				<label><b></b></label>
			</div>
			<div class="column col-40" >
				<label><b style="font-size: 9px;">FUR: </b>{{$ao->fur}}</label>
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				<label><b>Cirugías Previas: </b>{{$ap->cirugprevias}}</label>
			</div>
			<div class="column col-40" >
				<label><b style="font-size: 9px;">Métodos de planificación familiar: </b>{{$ao->meplafam}}</label>
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				<label><b>Fracturas: </b>{{$ap->fracturas}}</label>
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				<label><b>Transfusiones Sanguineas  Fecha: </b>{{$ap->ts}}</label>
			</div>
		</div>
		<div class="row">
			<div class="column col-50">
				<label><b>Alergias: </b>{{$ap->alergias}}</label>
			</div>
			
		</div>

  	</div><!--div antecedentes/personales/obstetricos-->
  	<br><hr>

  	<div class="pad_actual">
  		<div class="row">
			<div class=" column col-30">
				<label><b>PADECIMIENTO ACTUAL:</b></label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">{{$hclinica->padecimiento_actual}}
			</textarea>
		</div><hr>
  	</div><!--div padecimiento actual-->

  	
  		<div class="row">
			<div class=" column col-30">
				<label><b>EXPLORACIÓN FÍSICA:</b></label>
			</div>
		</div>
		<div class="row">
			
			<div class=" column col-15">
				<label><b>T.A. </b>{{$svitales->ta}}</label>
			</div>
			<div class=" column col-15">
				<label><b>F.C. </b>{{$svitales->fc}}</label>
			</div>
			<div class=" column col-15">
				<label><b>F.R. </b>{{$svitales->fr}}</label>
			</div>
			<div class=" column col-15">
				<label><b>Temp. </b>{{$svitales->temp}}</label>
			</div>
			<div class=" column col-15">
				<label><b>Talla: </b>{{$svitales->talla}}</label>
			</div>
			<div class=" column col-15">
				<label><b>Peso: </b>{{$svitales->peso}}</label>
			
			</div>

		</div><br>
		
		<div class="row">
			<textarea id="texta">
				<label><b>HABITUS EXTERIOR: </b>{{$hclinica->habitus_exterior}}</label>
			</textarea>
		</div><br>
		<div class="row">
			<div class=" column col-40">
				<label><b>Glasgow: </b>{{$hclinica->glasgow}}</label>
			</div>
			<div class="column col-40">
			<label><b>Barthell: </b>{{$hclinica->bartell}}</label>
			</div>
		</div><br>
		
		<div class="row">
			<textarea id="texta">
				<label><b>CABEZA: </b>{{$hclinica->cabeza}}</label>
			</textarea>
		</div>
</div><!--div class pagina-->

<div class="pagina">

		<div class="row">
			<textarea id="texta">
				<label><b>OJOS: </b>{{$hclinica->ojos}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>CUELLO: </b>{{$hclinica->cuello}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>TORAX: </b>{{$hclinica->torax}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>ABDOMEN: </b>{{$hclinica->abdomen}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>GENITALES:</b>{{$hclinica->genitales}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>EXTREMIDADES TORÁCIDAS: </b>{{$hclinica->extremidades_t}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>EXTREMIDADES PÉLVICAS: </b>{{$hclinica->extremidades_p}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>OTROS: </b>{{$hclinica->otros}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>ESTUDIOS DE LABORATORIO Y GABINETE: </b></label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>DIAGNÓSTICO:</b>{{$hclinica->diagnostico}}</label>
			</textarea>
		</div>
		
		<div class="row">
			<textarea id="texta">
				<label><b>PLAN: </b>{{$hclinica->plan}}</label>
			</textarea>
		</div>
		
	<br> <br><br> <br><br> <!--div exploracion fisica-->
		<div class="row" style="padding: 2px;">
			<div class="column col-40" style="padding: 2px;">
			<center><hr></center>
			</div>
			<div class="column col-10" style="padding: 2px;"></div>
			<div class="column col-40" style="padding: 2px;">
			<center><hr></center>
			</div>
		</div>
		<div class="row" style="padding: 2px;">
			<div class="column col-40" style="padding: 2px;">
				<center><label><b>DR. Fernando Angulo</b></label></center>
			</div>
			<div class="column col-10" style="padding: 2px;"></div>
			<div class="column col-40" style="padding: 2px;">
				<center><label><b>DR. Fernando Angulo</b></label></center>
			</div>
		</div>
		<div  class="row" style="padding: 2px;">
			<div class="column col-40" style="padding: 2px;">
			<center><label><b>Médico Tratante</b></label></center>
			</div>
			<div class="column col-10" style="padding: 2px;"></div>
			<div class="column col-40" style="padding: 2px;">
			<center><label><b>Médico que realiza la Historia Clínica</b></label></center>
			</div>
		</div>
		
  	
	</div>
</body>
</html>
