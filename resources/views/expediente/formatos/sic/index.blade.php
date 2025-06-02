@extends ('layouts.admin')
@section ('title')
<h>INDEX SOLICITUD INTERCONSULTA</h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4><a href="{{asset('datos/agenda')}}"><button class="btn btn-success"><i class="fa fa-file-text fa-lg" style=" font-size:18px; color:black"></i>Agregar Solicitud de INterconsulta</button></a></h4>
		@include('expediente.formatos.sic.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Fecha de solicitud</th>
					<th>Hora de Consulta</th>
					<th>APATERNO</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach ($sic as $si)
				<tr>
					<td>{{$si->fsolicitud}}</td>
					<td>{{$si->hora}}</td>
					<td>{{$si->apaterno}}</td>
					<td>{{$si->amaterno}}</td>
					<td>{{$si->nombre}}</td>
					<td>
						<a href="{{URL::action('SolicitudIController@edit',$si->idsic)}}"><button class="btn btn-info"><i class="fa fa-pencil-square-o fa-fw" style=" font-size:20px; color:#"></i> Editar</button></a>
						<a href="" data-target="#modal-delete-{{$si->idsic,$si->apaterno,$si->amaterno,$si->nombre}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>
						<a href="{{URL::action('SolicitudIController@show',$si->idsic)}}" target="_blank"><button class="btn btn-warning"><i class="fa fa-print" style=" font-size:20px; color:#"></i> Imprimir</button></a>
					</td>
				</tr>
				@include('expediente.formatos.sic.modal')
				@endforeach
			</table>

		</div>
		{{$sic->render()}}
	</div>

</div>


@stop