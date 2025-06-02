@extends ('layouts.admin')
@section ('title')
<h>LISTADO DE PACIENTES</h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4> <a href="generales/create"><button class="btn btn-success"><i class="fa fa-user-plus fa-lg" style=" font-size:20px; color:#"></i> Agregar Paciente</button></a></h4>
		@include('datos.generales.search')

	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Apaterno</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Ocupacion</th>
					<th>Convenio</th>
					<th>Estado Civil</th>
					<th>Genero</th>
					<th>Nacionalidad</th>
					
					<th>Opciones</th>
				</thead>
				@foreach ($paciente as $p)
				<tr>
					<td>{{$p->apaterno}}</td>
					<td>{{$p->amaterno}}</td>
					<td>{{$p->nombre}}</td>
					<td>{{$p->ocupacion}}</td>
					<td>{{$p->convenio}}</td>
					<td>{{$p->edo_civil}}</td>
					<td>{{$p->genero}}</td>
					<td>{{$p->nacionalidad}}</td>
					
					<td>
						<a href="{{URL::action('RpacienteController@edit',$p->idpaciente)}}"><button class="btn btn-info "><i class="fa fa-pencil-square-o fa-lg" style=" font-size:20px; color:#"></i> Editar</button></a>
						<a href="" data-target="#modal-delete-{{$p->idpaciente,$p->apaterno,$p->amaterno,$p->nombre}}" data-toggle="modal"><button class="btn btn-danger "><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>
						
					</td>
				</tr>
				@include('datos.generales.modal')
				@endforeach
			</table>

		</div>
		{{$paciente->render()}}
	</div>

</div>


@endsection