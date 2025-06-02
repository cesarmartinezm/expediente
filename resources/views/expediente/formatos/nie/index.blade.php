@extends ('layouts.admin')
@section ('title')
<h>INDEX NOTA DE INGRESO ESPECIALISTA</h>
@endsection
@section ('contenido')
<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4><a href="{{asset('datos/agenda')}}"><button class="btn btn-success"><i class="fa fa-file-text fa-lg" style=" font-size:18px; color:black"></i>Agregar Nota de Ingreso Especialista</button></a></h4>
		@include('expediente.formatos.nie.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Fecha/Hora</th>
					<th>Triage</th>
					<th>APATERNO</th>
					<th>AMaterno</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach ($nie as $nies)
				<tr>
					<td>{{$nies->created_at}}</td>
					<td>{{$nies->triage}}</td>
					<td>{{$nies->apaterno}}</td>
					<td>{{$nies->amaterno}}</td>
					<td>{{$nies->nombre}}</td>
					<td>
						<a href="{{URL::action('NIEController@edit',$nies->idnie)}}"><button class="btn btn-info"><i class="fa fa-pencil-square-o fa-fw" style=" font-size:20px; color:#"></i> Editar</button></a>
						<a href="" data-target="#modal-delete-{{$nies->idnie,$nies->apaterno,$nies->amaterno,$nies->nombre}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash-o fa-lg" style=" font-size:20px; color:#"></i> Eliminar</button></a>
						<a href="{{URL::action('NIEController@show',$nies->idnie)}}" target="_blank" ><button class="btn btn-warning" ><i class="fa fa-print fa-fw" style=" font-size:20px; color:#"></i> Imprimir</button></a>
					</td>
				</tr>
				@include('expediente.formatos.nie.modal')
				@endforeach
			</table>

		</div>
		{{$nie->render()}}
	</div>

</div>


@stop