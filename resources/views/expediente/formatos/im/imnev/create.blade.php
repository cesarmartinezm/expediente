@extends ('layouts.admin')
@section ('title')
<h> INDICACIONES MÉDICAS: NOTA DE EVOLUCION</h>
@endsection
@section ('contenido')


{!!Form::open(array('url'=>'expediente/formatos/im/imnev/', 'method'=>'POST', 'autocomplete'=>'off'))!!}
{{Form::token()}}
		

	@include('expediente.formatos.im.form')
	<input type="hidden" name="idnev"  value="{{$idnev}}" class="form-control">
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