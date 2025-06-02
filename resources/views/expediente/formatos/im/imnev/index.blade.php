@extends ('layouts.admin')
@section ('title')
<h>INDEX INDICACIONES MÉDICAS NOTA DE EVOLUCIÓN</h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		
		@include('expediente.formatos.im.imnev.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12	">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>FECHA/HORA NOTA DE URGENCIAS</th>
					<th>APATERNO</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach ($nevolucion as $ne)
				<tr>
					<td>{{$ne->created_at}}</td>
					<td>{{$ne->apaterno}}</td>
					<td>{{$ne->amaterno}}</td>
					<td>{{$ne->nombre}}</td>
					<td>
						@if($ne->ind_medicas!=NULL)
						<button class="btn btn-success" disabled><i class="fa fa-pencil fa-lg" style=" font-size:20px; color:#"></i> Agregar</button>
						@else
						<a href="{{URL::action('IMedicasNEVController@create',[$ne->idnie,$ne->idpaciente])}}"><button class="btn btn-success"><i class="fa fa-pencil fa-lg" style=" font-size:20px; color:#"></i> Agregar</button></a>
						@endif
						@if($ne->ind_medicas!=NULL)
						<a href="{{URL::action('IMedicasNEVController@edit',$ne->idnie)}}"><button class="btn btn-info"><i class="fa fa-pencil-square-o fa-lg" style=" font-size:20px; color:#"></i> Editar</button></a>
						@else
						<button class="btn btn-info" disabled><i class="fa fa-pencil-square-o fa-lg" style=" font-size:20px; color:#"></i> Editar</button>
						@endif
						@if($ne->ind_medicas!=NULL)
						<a href="" data-target="#modal-delete-{{$ne->idnie}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>
						@else
						<button class="btn btn-danger" disabled><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button>
						@endif
					</td>
				</tr>
				@include('expediente.formatos.im.imnev.modal')
				@endforeach
			</table>

		</div>
		{{$nevolucion->render()}}
	</div>

</div>


@stop