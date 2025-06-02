@extends ('layouts.admin')
@section ('title')
<h>SOLICITUD DE ESTUDIOS --></h>
<h>LABORATORIO</h>
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
		


		
<h4><strong>Datos del Paciente</strong></h4>
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
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
		
	</div>
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
			<label>Hospitalizado en el cuarto No:</label><br>
			
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			
			<input type="number" name="edad"  value="{{old('edad')}}" class="form-control">
		</div>
	</div>
	

	</div><!--</div class="row">-->

	<h4><strong>PERFILES</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Bioquimico
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P.Ejecutivo
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Preoperario C/Vih S/VIH
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Daño Miocardio
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Hepatico
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Reumatico
		</div>

	</div><!--</div class="row">-->
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Lipidos
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Tiroideo
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Ginecológico
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Diabetes
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Hipertensión
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Renal
		</div>

	</div><!--</div class="row">-->

	<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Prenatal
		</div>
		
	</div><!--</div class="row">-->
<br>
	<h4><strong>HEMATOLÓGIA</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Biometria Hematica
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Formula Roja
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Formula Blanca
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Plaquetas
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Reticulocitos
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> T. Protombina
		</div>

	</div><!--</div class="row">-->
	<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> T. Trombina
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Fibrinogeno
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> T. Sangrado
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Grupo Sanguineo y RH 
		</div>
		

	</div><!--</div class="row">-->

	<h4><strong>QUIMICA SANGUINEA</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Glucosa
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Urea
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Creatinina
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Acido Urico
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Colesterol
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Trigliceridos
		</div>
	</div><!--</div class="row">-->

	<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> HDL-Colesterol
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Proteinas totales
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Albumina
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Bilirrubinas
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Fosfatasa Alcalina
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> T.G.O
		</div>
	</div><!--</div class="row">-->
	
		<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> T.G.P
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> D.H.L
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> D. Glutamil Transpeptidasa
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Fosfatasa Acida
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Fracción Prostatica
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> C.K
		</div>
	</div><!--</div class="row">-->

		<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> CK-MB
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Amilasa
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Lipasa
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Calcio
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Fosforo
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Sodio
		</div>
	</div><!--</div class="row">-->

		<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Potasio
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Cloro
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> CO2
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Magnesio
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Gasometria
		</div>
		
	</div><!--</div class="row">-->
<br>
	<h4><strong>MICROBIOLÓGIA</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Examen General de Orina
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Hemocultivo
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Urocultivo
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Coprocultivo
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Exudado Cervicio Vaginal
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Espermocultivo
		</div>
	</div><!--</div class="row">-->

	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Exudado Lateal
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Cultivo baar
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Cultivos Hongos
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Gram
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Baciloscopia(BAAR)
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Coproparasitoscopia 1_2_3 Muestras
		</div>
	</div><!--</div class="row">-->
	
		<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Gota Gruesa
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Amiba en Fresco
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Citoquimico Liquido
		</div>
		
	</div><!--</div class="row">-->

		<br>
<h4><strong>INMUNOLÓGIA</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Antiesteptolisina O
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Factor Reumatoide
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Proteina C Reactiva
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> VDRL
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Reacciones Febriles
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Serameba
		</div>
	</div><!--</div class="row">-->

	<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> P. Embarazo
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Anticuerpos Antinucleares
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Inmunoglobulinas
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> A
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> G
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> E
		</div>
	</div><!--</div class="row">-->
	
		<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> M
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> D
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Celulas L.E
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> C3
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> C4
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> CH5 O
		</div>
		
	</div><!--</div class="row">-->
	<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> HBS AV
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> HCV
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Coombs DIRECTO
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Cooms INDIRECTO
		</div>
		
		
	</div><!--</div class="row">-->

	<h4><strong>ONCOLÓGICOS</strong></h4>
<div class="box box-info"><br>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Alfafetoproteina
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Ag Carcinoembrionario
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Ag CA 15-3
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Ag CA 19-9
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> Ag CA 125
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> BHGC
		</div>
	</div><!--</div class="row">-->

	<div class="row"><br>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<input  type="checkbox" name="antecedente" value="Diabetes"> PSA
		</div>
		
	</div><!--</div class="row">-->
	


<br>
</div>


<div class="row">
	
	<center><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<a href="{{URL::action('LaboratorioController@index')}}"><button class="btn btn-danger" type="submit">Cancelar</button></a>
		</div>
	</div></center>
</div>


		{!!Form::close()!!}

@endsection