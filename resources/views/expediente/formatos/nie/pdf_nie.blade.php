
<!DOCTYPE html>
<html lang="es">
<title>Nota_Ingreso_Esp </title>
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
	    padding: 8px;
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
		height: 945px;
	}

	#firma{
	width: 340px;
	}
	#texta{
		text-align: left;
		height: 100px;
		font-size: 10px;
	}
	</style>
<div class="corners">
   <h3 align="CENTER">NOTA DE INGRESO ESPECIALISTA</h3>
</head>
<body >

	<div>
    	<div class="row">
    		<div class="column col-40" >
    			
    		</div>
    		<div class="column col-30" ></div>
  			<div class="column col-15" >
    			<label><b>TRIAGE: </b>{{$nie->triage}}</label>
  			</div>
		</div>

		<div class="row">
			
			<div class="column col-30" ></div>
		  	<div class="column col-40" >
		  		
		    	<label><b>ASEGURADORA: </b>{{$p->convenio}}</label>
		  	</div>
		  	<div class="column col-15" >
		    	<label><b>FOLIO: </b>{{$nie->folio}}</label>
		  	</div>
		</div>

		<div class="row">
			<div class=" column col-20">
				<label><b>FECHA: </b>{{$nie->created_at->format('Y-m-d')}}</label>
			</div>
			<div class=" column col-30">
				<label><b>HORA DE INGRESO: </b>{{$p->created_at->format('H:m')}}</label>
			</div>
			<div class=" column col-30">
				<label><b>HORA DE CONSULTA: </b>{{$nie->hora_c}}</label>
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
			<div class=" column col-40">
				<label><b>ll. DESCRIPCIÓN:</b></label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">{{$nie->descripcion}}
			</textarea>
		</div>
		<hr>
		<div class="row">
			<div class=" column col-30">
				<label><b>lll. SIGNOS VITALES:</b></label>
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
		</div><br><hr>

		<div class="row" style="font-size: 9px;">
			<div class=" column col-40" >
				<label><b>lV. RESULTADOS LABORATORIO, GABINETE Y OTROS:</b></label>
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
				<label><b>V. DIAGNÓSTICO DE INGRESO:</b></label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">{{$nie->dingreso}}
			</textarea>
		</div>
		<hr>

		<div class="row">
			<div class=" column col-30">
				<label><b>Vl. INDICACIONES MÉDICAS</b></label>
			</div>
		</div>
		<div class="row">
			<textarea id="texta">{{$nie->ind_medicas}}
			</textarea>
		</div>
		<br><br><br><br><br><br><br><br><br>
		<div><!--div pie de pagina-->
		<center><hr id="firma"></center>
		<center><label><b> DR. FERNANDO ANGULO CED.12345678</b></label></center>

	</div><!--div pie de pagina-->
  </div>
</body>

</html>
