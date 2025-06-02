{!! csrf_field() !!}
<h4><strong>Datos del Paciente</strong></h4>
<div class="box box-info">
	<div class="row">
	<br>

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div class="form-group">
				<label>Nombre del Paciente: </label> <label class=" label-default">{{$paciente->apaterno.' '.$paciente->amaterno.' '.$paciente->nombre}}</label>
			</div>
		</div>
	</div><!--</div class="row">-->
	
	<h4><strong>Indicaciones Médicas</strong></h4>
		<div class="box box-info">
			<div class="row">
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="form-group">
					<textarea class="form-control" rows="6" name="ind_medicas" placeholder="INDICACIONES">{{$im->ind_medicas or old('ind_medicas')}}</textarea>
					</div>
				</div>
				
			</div>
		</div>