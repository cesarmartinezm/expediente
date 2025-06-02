{!! csrf_field() !!}
<h4><strong>Datos del Paciente</strong></h4>
<div class="box box-info">
	<div class="row">
	<br>

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="form-group">
			<label>Nombre del Paciente: </label> <label class="label-default">{{$paciente->apaterno." ".$paciente->amaterno." ".$paciente->nombre}}</label>
			
		</div>
	</div>
	</div><!--</div class="row">-->
	
	
	
<h4><strong>Signos Vitales</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">
			<label>T/A</label>
			<input type="number" name="ta"  value="{{ $svitales->ta or old('ta')}}" class="form-control">
			
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">
			<label>Temp.</label>
			<input type="number" name="temp"  value="{{$svitales->temp or old('temp')}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Frec. C.</label>
			<input type="number" name="fc"  value="{{$svitales->fc or old('fc')}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Frec. R.</label>
			<input type="number" name="fr"  value="{{$svitales->fr or old('fr')}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Sao2%</label>
			<input type="number" name="sao2"  value="{{$svitales->sao2 or old('sao2')}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Peso</label>
			<input type="number" name="peso"  value="{{$svitales->peso or old('peso')}}" class="form-control">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Talla</label>
			<input type="nuumber" name="talla"  value="{{$svitales->talla  or old('talla')}}" class="form-control">
			</div>
		</div>
		
	</div>
<br><br>