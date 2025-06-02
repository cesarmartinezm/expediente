@extends ('layouts.admin')
@section ('title')
<h>LISTADO DE MÉDICOS</h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4><a href="medico/create"><button class="btn btn-success"><i class="fa fa-user-plus fa-lg" style=" font-size:20px; color:#"></i> Agregar Médico</button></a></h4>
		@include('datos.medico.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>APATERNO</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Especialidad</th>
					<th>Número de Céddula</th>
					<th>Opciones</th>
				</thead>
				@foreach ($medico as $m)
				<tr>
					<td>{{$m->apaterno}}</td>
					<td>{{$m->amaterno}}</td>
					<td>{{$m->nombre}}</td>
					<td>{{$m->especialidad}}</td>
					<td>{{$m->num_cedula}}</td>
					<td>
						<a href="{{URL::action('MedicoController@edit',$m->idmedico)}}"><button class="btn btn-info"><i class="fa fa-pencil-square-o fa-lg" style=" font-size:20px; color:#"></i> Editar</button></a>
						<a href="" data-target="#modal-delete-{{$m->idmedico,$m->apaterno,$m->amaterno,$m->nombre}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>
					</td>
				</tr>
				@include('datos.medico.modal')
				@endforeach
			</table>

		</div>
		{{$medico->render()}}
	</div>

</div>


@endsection