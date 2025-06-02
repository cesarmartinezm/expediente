@extends ('layouts.admin')
@section ('title')
<h> INDICACIONES MÉDICAS: NOTA DE URGENCIAS</h>
@endsection
@section ('contenido')

{!!Form::open(array('url'=>'expediente/formatos/im/imnu', 'method'=>'POST', 'autocomplete'=>'off'))!!}
{{Form::token()}}
		
	@include('expediente.formatos.im.form')
	<input type="hidden" name="idnu"  value="{{$idnu}}" class="form-control">
	
	<div class="row">
		<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div></center>
	</div>

{!!Form::close()!!}

@endsection