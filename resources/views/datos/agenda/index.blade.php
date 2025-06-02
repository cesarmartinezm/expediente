@extends ('layouts.admin')
@section ('title')
<h>AGENDA DEL MÉDICO</h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<!--<h4>Agregar Paciente <a href="generales/create"><button class="btn btn-success">Nuevo</button></a></h4>!-->
		@include('datos.generales.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>FECHA DE REGISTRO</th>
					<th>APELLIDO PATERNO</th>
					<th>APELLIDO MATERNO</th>
					<th>NOMBRE(S)</th>
					<th>Opciones</th>
					
				</thead>
				@foreach ($paciente as $p)
				<tr>
					<td>{{$p->created_at}}</td>
					<td>{{$p->apaterno}}</td>
					<td>{{$p->amaterno}}</td>
					<td>{{$p->nombre}}</td>
					<td WIDTH="280">

	

    

						<div class="btn-group">
						    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-spin fa-lg" style=" font-size:25px; color:#FF5733"></i>
						    <span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu" role="menu"> 
						    <li><a href="{{URL::action('NUrgenciasController@create',$p->idpaciente)}}"><span>NOTA DE URGENCIAS</span></a>
							</li>

						    <li><a href="{{URL::action('SolicitudIController@create',$p->idpaciente)}}">SOLICITUD DE INTERCONSULTA</a>
						    </li>
						    <li><a href="{{URL::action('NIEController@create',$p->idpaciente)}}">NOTA DE INGRESO ESPECIALISTA</a>
						    </li>
						    
						    <li><a href="{{URL::action('HClinicaController@create',$p->idpaciente)}}">HISTORIA CLINICA</a>
						    </li>

						    <li><a href="{{URL::action('NEvolucionController@create',$p->idpaciente)}}">NOTA DE EVOLUCION</a>
						    </li>

						    <li><a href="{{URL::action('NotaEgresoController@create',$p->idpaciente)}}">NOTA DE EGRESO</a>
						    </li>
						    </ul>
						</div> 

					</td>

					
				</tr>
				
				@endforeach
			</table>

		</div>
		{{$paciente->render()}}
	</div>

</div>


@endsection