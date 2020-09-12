<div class="modal fade" id="modal-edit-contact">
	<div class="modal-dialog modal-edit-contact">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edición de contacto</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		{!! Form::model($contact, ['route'=>['contacts.update',$contact->id],'method'=>'PUT']) !!}
		<div class="modal-body">
			<div class="card-body ">
				@include('admin.contact.form.form')
			</div>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <input type="submit" value="Actualizar" class="btn btn-primary">
		</div>
		{!! Form::close() !!}
	  </div>
	</div>
</div>