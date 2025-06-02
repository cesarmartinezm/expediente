@extends ('layouts.admin')
@section ('title')
<h>INDEX NOTA DE URGENCIAS</h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4><a href="{{asset('datos/agenda')}}"><button class="btn btn-success"><i class="fa fa-file-text fa-lg" style=" font-size:18px; color:black"></i> Agregar Nota de Urgencias</button></a></h4>
		@include('expediente.formatos.nurgencias.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Hora de Consulta</th>
					<th>Triage</th>
					<th>APATERNO</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach ($nurgencias as $nu)
				<tr>
					<td>{{$nu->hconsulta}}</td>
					<td>{{$nu->triage}}</td>
					<td>{{$nu->apaterno}}</td>
					<td>{{$nu->amaterno}}</td>
					<td>{{$nu->nombre}}</td>
					<td>
						<a href="{{URL::action('NUrgenciasController@edit',$nu->idnurgencias)}}"><button class="btn btn-info"><i class="fa fa-pencil-square-o fa-lg" style=" font-size:20px; color:#"></i> Editar</button></a>
						
						<a href="" data-target="#modal-delete-{{$nu->idnurgencias,$nu->apaterno,$nu->amaterno,$nu->nombre}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>

						<a href="{{URL::action('NUrgenciasController@show',$nu->idnurgencias)}}" target="_blank"><button class="btn btn-warning"><i class="fa fa-print fa-lg" style=" font-size:20px; color:#"></i> Imprimir</button></a>

					</td>
				</tr>
				@include('expediente.formatos.nurgencias.modal')
				@endforeach
			</table>

		</div>
		{{$nurgencias->render()}}
	</div>

</div>


@stop