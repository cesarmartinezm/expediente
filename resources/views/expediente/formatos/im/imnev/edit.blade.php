@extends ('layouts.admin')
@section ('title')
<h>EDITAR INDICACIONES NOTA DE EVOLUCION</h>
@endsection
@section ('contenido')

{!!Form::model($im,['method'=>'PATCH','route'=>['imnev.update',$im->idnie]])!!}
		
	@include('expediente.formatos.im.form')
	<br><br>
	<div class="row">
		<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<a href="{{URL::action('IMedicasNEVController@index')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
			</div>
		</div></center>
	</div>

{!!Form::close()!!}

@endsection