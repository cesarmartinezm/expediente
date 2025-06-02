{!! Form::open(array('url'=>'expediente/formatos/svitales/nev','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text"  class="form-control" name="searchText" placeholder="Buscar...." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="sumbmit" class="btn btn-primary"><i class="fa fa-search fa-lg" style=" font-size:18px; color:#"></i> Buscar</button>
			
		</span>

	</div>

</div>

{{Form::close()}}