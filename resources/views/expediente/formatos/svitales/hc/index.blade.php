@extends ('layouts.admin')
@section ('title')
<h>INDEX SIGNOS VITALES HISTORIA CLINICA</h>
@endsection
@section ('contenido')

<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		
		@include('expediente.formatos.svitales.hc.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10	">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>FECHA/HORA HISTORIA CLINICA</th>
					<th>APATERNO</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach ($hclinica as $hc)
				<tr>
					<td>{{$hc->created_at}}</td>
					<td>{{$hc->apaterno}}</td>
					<td>{{$hc->amaterno}}</td>
					<td>{{$hc->nombre}}</td>
					<td>
						@if($hc->signos_vitales_idsignos_vitales!=NULL)
						<button class="btn btn-success" disabled><i class="fa fa-heartbeat fa-lg" style=" font-size:20px; color:#"></i> Agregar</button>
						@else
						<a href="{{URL::action('SVitalesHCController@create',[$hc->idhclinica,$hc->idpaciente])}}"><button class="btn btn-success"><i class="fa fa-heartbeat fa-lg" style=" font-size:20px; color:#"></i> Agregar</button></a>
						@endif
						@if($hc->signos_vitales_idsignos_vitales != NULL)
						<a href="{{URL::action('SVitalesHCController@edit',$hc->signos_vitales_idsignos_vitales)}}"><button class="btn btn-info"><i class="fa fa-pencil-square-o fa-fw" style=" font-size:20px; color:#"></i> Editar</button></a>
						@else
						<button class="btn btn-info" disabled><i class="fa fa-pencil-square-o fa-fw" style=" font-size:20px; color:#"></i> Editar</button>
						@endif
						@if($hc->signos_vitales_idsignos_vitales!=NULL)
						<a href="" data-target="#modal-delete-{{$hc->signos_vitales_idsignos_vitales}}" data-toggle="modal"><button class="btn btn-danger" ><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>
						@else
						<button class="btn btn-danger" disabled><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button>
						@endif
					</td>
				</tr>
				@include('expediente.formatos.svitales.hc.modal')
				@endforeach
			</table>

		</div>
		{{$hclinica->render()}}
	</div>

</div>

@stop