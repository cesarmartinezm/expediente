@extends ('layouts.admin')
@section ('title')
<h>INDEX SIGNOS VITALES NOTA DE INGRESO ESPECIALISTA</h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		
		@include('expediente.formatos.svitales.ni.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10	">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>FECHA/HORA NOTA DE INGRESO ESP</th>
					<th>APATERNO</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach ($ningreso as $ni)
				<tr>
					<td>{{$ni->created_at}}</td>
					<td>{{$ni->apaterno}}</td>
					<td>{{$ni->amaterno}}</td>
					<td>{{$ni->nombre}}</td>
					<td>
						@if($ni->signos_vitales_idsignos_vitales!=NULL)
						<button class="btn btn-success" disabled><i class="fa fa-heartbeat fa-lg" style=" font-size:20px; color:#"></i> Agregar</button>
						@else
						<a href="{{URL::action('SVitalesNIController@create',[$ni->idnie,$ni->idpaciente])}}"><button class="btn btn-success"><i class="fa fa-heartbeat fa-lg" style=" font-size:20px; color:#"></i> Agregar</button></a>
						@endif
						@if($ni->signos_vitales_idsignos_vitales!=NULL)
						<a href="{{URL::action('SVitalesNIController@edit',$ni->signos_vitales_idsignos_vitales)}}"><button class="btn btn-info"><i class="fa fa-pencil-square-o fa-fw" style=" font-size:20px; color:#"></i> Editar</button></a>
						@else
						<button class="btn btn-info" disabled><i class="fa fa-pencil-square-o fa-fw" style=" font-size:20px; color:#"></i> Editar</button>
						@endif
						@if($ni->signos_vitales_idsignos_vitales!=NULL)
						<a href="" data-target="#modal-delete-{{$ni->signos_vitales_idsignos_vitales}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>
						@else
						<button class="btn btn-danger" disabled><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button>
						@endif
					</td>
				</tr>
				@include('expediente.formatos.svitales.ni.modal')
				@endforeach
			</table>

		</div>
		{{$ningreso->render()}}
	</div>

</div>


@stop