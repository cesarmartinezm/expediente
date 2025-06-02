<!DOCTYPE html>
<html lang="es">
<title>SIC </title>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
  
   <style>
 	body { font-family: DejaVu Sans;
 		font-size:12px;
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
	.col-90{
		width: 90%;
	}

	.col-8{
		width: 5%;
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
		height: 400px;
	}

	#firma{
	width: 340px;
	}
	.datos{
		font-size: 14px;
	}
	#texta{
		text-align: left;
		height: 65px;
		font-size: 9px;
	}
	.border{

		border-right: black 2px solid;
	}
	</style>

   <center><h3>SOLICITUD - RECEPCIÓN DE INTERCONSULTA MÉDICA</h3></center>
</head>
<body>
<br><br>
	<div class="pagina">
	<div class="row">
		<div class="column col-40 border">
			<label><b>FECHA DE SOLICITUD</b></label>
		</div>
		<div class="column col-40">
			<label><b>HORA: </b></label>
		</div>
	</div>
	<div class="row">
		<div class="column col-40 border" >
			<center><label class="datos">{{$sic->fsolicitud}}</label></center>
		</div>
		<div class="column col-40">
			<center><label  class="datos">{{$sic->hora}}</label></center>
		</div>
		
	</div>
	<div class="row">
		<div class="column col-40 border">
			
		</div>
		
		
	</div><hr>
	<div class="row">
		<div class="column col-50 border">
			<label><b>NOMBRE DEL PACIENTE</b></label>
		</div>
		<div class="column col-30 border">
			<label><b>FECHA DE NACIMIENTO</b></label>
		</div>
		<div class="column col-20">
			<label><b>HABITACION</b></label>
		</div>
	</div>
	<div class="row">
		<div class="column col-50 border" >
			<center><label class="datos">{{$p->apaterno.' '.$p->amaterno.' '.$p->nombre}}</label></center>
		</div>
		<div class="column col-30 border">
			<center><label class="datos">{{$p->fnacimiento}}</label></center>
		</div>
		<div class="column col-20 ">
			<center><label class="datos">{{$sic->habitacion}}</label></center>
		</div>
	</div>
	<div class="row">
		<div class="column col-50 border">
		</div>
		<div class="column col-30 border">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="column col-50 border">
			<label><b>SERVICIO QUE SOLICITA LA INTERCONSULTA</b></label>
		</div>
		<div class="column col-50">
			<label><b>NOMBRE DEL MÉDICO SOLICITANTE</b></label>
		</div>
	</div>
	<div class="row">
		<div class="column col-50 border">
			<center><label class="datos">{{$sic->servicio}}</label></center>
		</div>
		<div class="column col-50">
			<center><label class="datos">DR. {{$medicos->apaterno.' '.$medicos->amaterno.' '.$medicos->nombre}}</label></center>
		</div>
		
	</div>
	<div class="row">
		<div class="column col-50 border" >
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="column col-50">
			<label><b>MOTIVO DE LA INTERCONSULTA</b></label>
		</div>
		
	</div>
	<div class="row">
		<div class="column col-90">
			<center><label class="datos">{{$sic->motivo}}</label></center>
		</div>
	</div><br><hr>
	<div class="row">
		<div class="column col-50 border">
			<label><b>SERVICIO AL QUE SE LE SOLICITA LA INTERCONSULTA</b></label>
		</div>
		<div class="column col-50">
			<label><b>NOMBRE DEL MÉDICO QUE RECIBE LA SOLICITUD</b></label>
		</div>
		
	</div>
	<div class="row">
		<div class="column col-50 border">
			<center><label class="datos">{{$sic->servicior}}</label></center>
		</div>
		<div class="column col-50">
			<center><label class="datos">DR. {{$medicor->apaterno.' '.$medicor->amaterno.' '.$medicor->nombre}}</label></center>
		</div>
		
	</div>
	<div class="row">
		<div class="column col-50 border">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="column col-50 border">
			<label><b>FECHA DE RECIBIDO </b></label>
		</div>
		<div class="column col-50">
			<label><b>HORA</b></label>
		</div>
		
	</div>
	<div class="row">
		<div class="column col-50 border" >
			<center><label class="datos">{{$sic->fechar}}</label></center>
		</div>
		<div class="column col-50">
			<center><label class="datos">{{$sic->horar}}</label></center>	
		</div>
		
	</div>
	<div class="row">
		<div class="column col-50 border">
			
		</div>
		
		
	</div>
	</div><!--div de pagina-->
	<br style="padding: 2px;">
	<div class="row">
		<div class="column col-90">
			<label><b>NOTA: </b>LA INTERCONSULTA PARA HOSPITALIZACION SE DEBERA REALIZAR DENTRO DE LAS SIGUIENTES 8-12 HORAS Y PARA URGENCIAS EN UN MAXIMO DE 30 MINUTOS</label>
		</div>
		
		
	</div>
<br><br><br><br><br><br><br>
	<div class="row" style="padding: 2px;">
			<div class="column col-40" style="padding: 2px;">
			<center><hr></center>
			</div>
			<div class="column col-15" style="padding: 2px;"></div>
			<div class="column col-40" style="padding: 2px;">
			<center><hr></center>
			</div>
		</div>
		<div class="row" style="padding: 2px;">
			<div class="column col-40" style="padding: 2px;">
				<center><label><b>DR. {{$medicos->apaterno.' '.$medicos->amaterno.' '.$medicos->nombre}}</b></label></center>
			</div>
			<div class="column col-15" style="padding: 2px;"></div>
			<div class="column col-40" style="padding: 2px;">
				<center><label><b>DR. {{$medicor->apaterno.' '.$medicor->amaterno.' '.$medicor->nombre}}</b></label></center>
			</div>
		</div>
		<div  class="row" style="padding: 2px;">
			<div class="column col-40" style="padding: 2px;">
			<center><label><b>SOLICITO</b></label></center>
			</div>
			<div class="column col-15" style="padding: 2px;"></div>
			<div class="column col-40" style="padding: 2px;">
			<center><label><b>RECIBIO</b></label></center>
			</div>
		</div>

</body>
</html>