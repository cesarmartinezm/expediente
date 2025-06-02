@extends ('layouts.admin')
@section ('title')
<h>Editar Signos Vitales Nota de Urgencias</h>
@endsection
@section ('contenido')

{{-- <div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		@if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
		@endif
	</div>
</div> --}}
		
{!!Form::model($svitales,['method'=>'PATCH','route'=>['nu.update',$svitales->idsignos_vitales]])!!}
		
		
	@include ('expediente.formatos.svitales.form')
	
	<div class="row">

	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group@include ('expediente.formatos.svitales.nu.form')">
			<button class="btn btn-primary" type="submit">Actualizar</button>
			<a href="{{URL::action('SVitalesController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
		</div>
	</div></center>
	</div>

{!!Form::close()!!}

	
<br>

@endsection