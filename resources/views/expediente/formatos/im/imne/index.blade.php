@extends ('layouts.admin')
@section ('title')
<h>INDEX INDICACIONES MÉDICAS NOTA DE EGRESO </h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		
		@include('expediente.formatos.im.imne.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12	">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>FECHA/HORA NOTA DE EGRESO</th>
					<th>APATERNO</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach ($negreso as $neg)
				<tr>
					<td>{{$neg->created_at}}</td>
					<td>{{$neg->apaterno}}</td>
					<td>{{$neg->amaterno}}</td>
					<td>{{$neg->nombre}}</td>
					<td>
						@if($neg->ind_medicas!=NULL)
						<button class="btn btn-success" disabled><i class="fa fa-pencil fa-lg" style=" font-size:20px; color:#"></i> Agregar</button>
						@else
						<a href="{{URL::action('IMedicasNEController@create',[$neg->idne,$neg->idpaciente])}}"><button class="btn btn-success"><i class="fa fa-pencil fa-lg" style=" font-size:20px; color:#"></i> Agregar</button></a>
						@endif
						@if($neg->ind_medicas!=NULL)
						<a href="{{URL::action('IMedicasNEController@edit',$neg->idne)}}"><button class="btn btn-info"><i class="fa fa-pencil-square-o fa-lg" style=" font-size:20px; color:#"></i> Editar</button></a>
						@else
						<button class="btn btn-info" disabled><i class="fa fa-pencil-square-o fa-lg" style=" font-size:20px; color:#"></i> Editar</button>
						@endif
						@if($neg->ind_medicas!=NULL)
						<a href="" data-target="#modal-delete-{{$neg->idne}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>
						@else
						<button class="btn btn-danger" disabled><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button>
						@endif
					</td>
				</tr>
				@include('expediente.formatos.im.imne.modal')
				@endforeach
			</table>

		</div>
		{{$negreso->render()}}
	</div>

</div>


@stop