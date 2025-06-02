@extends ('layouts.admin')
@section ('title')
<h>EDITAR INDICACIONES MÉDICAS NOTA DE EGRESO</h>
@endsection
@section ('contenido')

<div class="row">
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
</div>
		{!!Form::model($im,['method'=>'PATCH','route'=>['imne.update',$im->idne]])!!}
		
		@include('expediente.formatos.im.form')
		

<br><br>
	
	<div class="row">

	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{URL::action('IMedicasNEController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
		</div>
	</div></center>
</div>




		{!!Form::close()!!}

	


@endsection