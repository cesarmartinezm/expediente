@extends ('layouts.admin')
@section ('title')
<h3><span class="label label-primary"> SOLICITUD DE ESTUDIOS RAYOS X</span></h3>

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
		{!!Form::open(array('url'=>'expediente/formatos/nurgencias', 'method'=>'POST', 'autocomplete'=>'off'))!!}
		{{Form::token()}}
		


		
<h4><strong><span class="label label-info"> DATOS DEL PACIENTE</span></strong></h4>
<div class="box box-info">
	<div class="row">
	<br>
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
		
	</div>

	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
		<div class="form-group">
			<label>Nombre del Paciente</label>
			<input type="text" name="apaterno" value="{{old('apaterno')}}" class="form-control">
		</div>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
		<div class="form-group">
			<label>Edad</label><br>
			<input type="text" name="edad"  value="{{old('edad')}}" class="form-control">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Fecha de Nacimiento</label><br>
			<input type="date" name="fnacimiento"  value="{{old('fnacimiento')}}" class="form-control">
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Sexo</label><br>
			<input type="radio" name="genero" value="Femenino" value="{{old('genero')}}">Femenino
			<input type="radio" name="genero" value="Masculino" value="{{old('genero')}}">Masculino
		</div>
	</div>

	</div><!--</div class="row">-->

	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<div class="form-group">
				<label>Externo</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<select name="externo" class="form-control select2">
					<option value="Si" @if (old('edo_civil') == "Casado") {{ 'selected' }} @endif>Si</option>
	                <option value="No" @if (old('edo_civil') == "Union_Libre") {{ 'selected' }} @endif>No</option>
				</select>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="form-group">
				<label>Hospitalizado en el cuarto No:</label>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
				<input type="number" name="edad"  value="{{old('edad')}}" class="form-control">
			</div>
		</div>
	</div><!--</div class="row">-->

	<center><h4><strong><span class="label label-info">RADIOLÓGIA</span></strong></h4></center>
	<div class="box box-info">
		<div class="row"><br>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > MAXILAR
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> MANDIBULA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> RINOFARINGE (LAT.CUELLO)
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ABDOMEN DECUBITO AP
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ABDOMEN DECUBITO AP Y LATERAL
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> S.E.G.D
			</div>
		</div><!--</div class="row">-->

		

		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > TRANSITO INTESTINAL
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> COLON POR ENEMA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> COLECISTOGRAFIA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> PERFILOGRAMA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> MASTOGRAFIA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> MASTOGRAFIA Y U.S.G.L MAMARIAS
			</div>
		</div><!--</div class="row">-->

		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > ARTROGRAFIA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> COLANGIOGRAFIA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> UROGRAFIA C/PLS. TRANSMICC.
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> UROGRAFIA EXCRETORA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> CISTOURETROGAFIA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> SIALOGRAFIA
			</div>
		</div><!--</div class="row">-->

		<div class="row"><br>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> HISTEROSALPINGOGRAFIA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="form-group">
					<label>HUESOS(EXTREMIDADES)</label>
					<input type="text" name="huesos" value="" placeholder="ESPECIFIQUE" class="form-control">
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="form-group">
					<label>MIELOGRAFIA</label>
					<input type="text" name="huesos" value="" placeholder="REGION" class="form-control">
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="form-group">
					<label>FLEBOGRAFIA</label>
					<input type="text" name="huesos" value="" placeholder="REGION" class="form-control">
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="form-group">
					<label>OTROS</label>
					<input type="text" name="huesos" value="" placeholder="Especificar y datos clinicos" class="form-control">
				</div>
			</div>
		</div><!--</div class="row">-->

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<center><h4><span class="label label-success">CRANEO</span></h4></center>
				<div class="box box-info">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">	
						<input  type="checkbox" name="antecedente" value="Diabetes"> A.P
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<input  type="checkbox" name="antecedente" value="Diabetes"> L.A.T
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<input  type="checkbox" name="antecedente" value="Diabetes"> O.TOWNE
					</div>
				</div><!--div de box box-info-->
			</div><!--div de columna-->

			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<center><h4><span class="label label-success">SENOS PARANASALES</span></h4></center>
				<div class="box box-info">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<input  type="checkbox" name="antecedente" value="Diabetes"> CALDWELL
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<input  type="checkbox" name="antecedente" value="Diabetes"> WATERS
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<input  type="checkbox" name="antecedente" value="Diabetes"> LATERAL
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<input  type="checkbox" name="antecedente" value="Diabetes"> PERFILOGRAMA
					</div>
				</div>
			</div>

		</div><!--</div class="row">-->
	<!--NO se cierra el div de box-primary... aqui hiría-->


	<div class="row"><br>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	<center><h4><span class="label label-success">COLUMNA</span></h4></center>
	<div class="box box-info">
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">	
			<input  type="checkbox" name="antecedente" value="Diabetes"> CERVICAL
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> TORAXICA
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> LUMBRO-SACRA
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> SACRO-COXIS
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> AP.
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> LAT.
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> OBLS.
		</div>
		</div>
	</div><!--div de box box-info-->
</div><!--div de columna-->
		
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<center><h4><span class="label label-success">TORAX</span></h4></center>
		<div class="box box-info">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">	
				<input  type="checkbox" name="antecedente" value="Diabetes"> A.P
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> LAT.
			</div>
			</div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> OBLS
			</div>
			</div>
		</div>
	</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<center><h4><span class="label label-success">TORAX OSEO</span></h4></center>
<div class="box box-info">
		
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">	
			<input  type="checkbox" name="antecedente" value="Diabetes"> A.P
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> LAT.
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> OBLS
		</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<center><h4><span class="label label-success">SERIE CARDIACA</span></h4></center>
<div class="box box-info">
		
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">	
			<input  type="checkbox" name="antecedente" value="Diabetes"> A.P
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> LAT.
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> OBLS
		</div>
		</div>
	</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	<center><h4><span class="label label-success">PELVIS</span></h4></center>
<div class="box box-info">
		
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">	
			<input  type="checkbox" name="antecedente" value="Diabetes"> A.P
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> LAT.
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<input  type="checkbox" name="antecedente" value="Diabetes"> OBLS
		</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">	
			</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<label></label>
			<input  type="checkbox" name="antecedente" value="Diabetes"> OBLS
		</div>
		</div>
	</div>
</div>
	
</div><!--</div class="row">-->

<center><h4><strong><span class="label label-info">TOMOGRAFIA COMPUTARIZADA</span></strong></h4></center>
	<div class="box box-info">
			<div class="form-group">
			
			<div class="row"><br>
				
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > CRANEO SIMPLE
			</div>
			
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> CRANEO SIMPLE Y CONSTRASTE
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> MAZICO FACIAL Y CRANEO (3-D)
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> OIDOS
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> LARINGE
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ORBITAS
			</div>

			</div><!--</div class="row">-->
			

			<div class="row"><br>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > TORAX SIMPLE
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> TORAX SIMPLE Y CONSTRASTE
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ABDOMEN SUPERIOR SIMPLE
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ABDOMEN SUPERIOR CONTRASTE
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ABDOMEN TOTAL
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> PELVIS
			</div>
			</div><!--</div class="row">-->

			<div class="row"><br>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > CERVICAL
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> TORACIDA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> CUELLO
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ABDOMEN(AORTA)
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> PULMON
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> SILLA TURCA
			</div>
			</div><!--</div class="row">-->

			<div class="row"><br>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> SENOS PARANASALES
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> LARINGE
			</div>
			</div><!--</div class="row">-->

			<div class="row"><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>LUMBAR</label>
					<input type="text" name="huesos" value="" placeholder="ESPACIOS" class="form-control">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>OTROS</label>
					<input type="text" name="huesos" value="" placeholder="ESPECIFICAR" class="form-control">
				</div>
			</div>
			</div><!--</div class="row">-->

		</div>

<center><h4><strong><span class="label label-info">ULTRASONOGRAFIA</span></strong></h4></center>
	<div class="box box-info">
			<div class="form-group">
			
			<div class="row"><br>
				
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > HIGADO VIAS VILIARES Y PANCREAS
			</div>
			
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> HIGADO VIAS VILIARES
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ABDOMEN SUPERIOR
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> RASTREO ABDOMINAL
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> RENAL
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> VIAS URINARIAS
			</div>

			</div><!--</div class="row">-->
			

			<div class="row"><br>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > PELVICA GINECOLOGICA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> OBSTETRICO
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> U.S ENDOVAGINAL
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> GLANDULAS MAMARIAS
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ULTRASONIDO Y MASTOGRAFIA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> TIROIDES
			</div>
			</div><!--</div class="row">-->

			<div class="row"><br>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes" > PROSTATA
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> TRANSRECTAL
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> TESTICULO
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> DOPPLER VASCULAR
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> TRANSFONTANELAR
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<input  type="checkbox" name="antecedente" value="Diabetes"> ECOCARDIOGRAMA
			</div>
			</div><!--</div class="row">-->

			

			<div class="row"><br>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<div class="form-group">
					<label>MUSCULO ESQUELETICO DE LA REGION</label>
					<input type="text" name="huesos" value="" placeholder="ESPECIFICAR" class="form-control">
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<div class="form-group">
					<label>OTROS</label>
					<input type="text" name="huesos" value="" placeholder="ESPECIFICAR" class="form-control">
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="form-group">
			<label>Valorción</label>
			<select name="valoracion" class="form-control select2">
				<option value="Si" @if (old('valoracion') == "Si") {{ 'selected' }} @endif>Si</option>
                <option value="No" @if (old('valoracion') == "No") {{ 'selected' }} @endif>No</option>
				
				
			</select>
			</div>
			</div>
			</div><!--</div class="row">-->

		</div>





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