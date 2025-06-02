 @extends ('layouts.admin')
@section ('title')
<h>RECETA MÉDICA</h>
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
		{!!Form::open(array('url'=>'datos/generales', 'method'=>'POST', 'autocomplete'=>'off'))!!}
		{{Form::token()}}
		
		
<h4><strong>Datos Generales</strong></h4>
<div class="box box-primary">
<div class="row">
	<br>

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="form-group">
			<label>Nombre del Paciente</label>
			<select name="idpaciente" class="form-control selectpicker" id="idpaciente" data-live-search="true">
   			 @foreach ($paciente as $paciente) 
   			 <option value="{{$paciente->idpaciente}}_{{$paciente->ocupacion}}">{{$paciente->apaterno.' '.$paciente->amaterno.' '.$paciente->nombre}}</option>
   			 @endforeach
   			 </select>
		</div>
	</div>
	
</div><!--</div class="row">-->



<h4><strong>MEDICAMENTO</strong></h4>
<div class="box box-primary"><br>
<div class="row">
	
</div><!--div class=row-->

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>PRESENTACIÓN</label>
			<input type="text" name="idmedicamento" id="idmedicamento" class="form-control" placeholder="Nombre del médicamento">
			
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Dosis</label>
			<input type="text" name="dosis" value="{{old('dosis')}}" id="dosis" class="form-control">
			
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Horario</label>
			<input type="text" name="horario" value="{{old('horario')}}" id="horario" class="form-control">
			
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Duración</label>
			<input type="text" name="duracion" value="{{old('duracion')}}" id="duracion" class="form-control">
			
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group"><br>
			<button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
			
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
		<table id="detalle" class="table table-striped table-bordered table-condensed table-hover">
			<thead style="background-color: aqua">
				<th>Opciones</th>
				<th>Médicamento</th>
				<th>Dósis</th>
				<th>Horario</th>
				<th>Duración</th>
			</thead>
			<tfoot>
				
				<th><h4 id="total"></h4></th>
			</tfoot>
			<tbody>
				
			</tbody>
		</table>
	</div>
	</div>

</div>

<div class="row">

	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="guardar"><br><br><br><br><br>
		<div class="form-group">
			<input name="_token" value="{{ csrf_token()}}" type="hidden" ></input>
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
	</div></center>
</div>

</div>

{!!Form::close()!!}

@push('scripts')
<script>

alert("Iniciando java script");
$(document).ready(function(){
		$('#bt_add').click(function(){
alert("dentro del document");
			agregar();
		});
	});

$("#guardar").hide();

function limpiar()
	{
		$("#dosis").val("");
		$("#horario").val("");
		$("#duracion").val("");
	}

	function evaluar()
	{
		if (total>0) {
			$("#guardar").show();
		}
		else
		{
			$("#guardar").hide();
		}
	}
	function eliminar(index)
	{
		total=total-total[index];
		$("total").html(total);
		$("#fila"+index).remove();
		evaluar();
	}
</script>

@endpush
@endsection