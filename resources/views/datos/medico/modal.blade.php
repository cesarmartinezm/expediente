<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$m->idmedico}}">
{{Form::Open(array('action'=>array('MedicoController@destroy',$m->idmedico),'method'=>'delete'))}}
 <div class="modal-dialog">
 	<div class="modal-content">
 		<div class="modal-header">
 			<button type="button" class="close" data-dismiss="modal"
 			aria-label="Close">
 				<span aria-hidden="true">x</span>
 			</button>
 			<h4 class="modal-title">ELIMINAR MÉDICO</h4>
 		</div>
 		<div class="modal-body">
 			<p>CONFIME SI DESEA ELIMINAR AL MÉDICO</p>
 			<h4 ><p class="label label-danger">{{$m->apaterno.' '.$m->amaterno.' '.$m->nombre}}</p></h4>
 		</div>
 		<div class="modal-footer">
 			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 			<button type="submit" class="btn btn-primary">Confirmar</button>
 		</div>
 	</div>
 </div>

{{Form::Close()}}
	
</div>