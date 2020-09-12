
<div class="modal fade" id="modal-create-social">
	<div class="modal-dialog modal-create-social">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Registro de redes social</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		{!! Form::open(['route'=>'socials.store', 'method'=>'POST']) !!}
		<div class="modal-body">
			<div class="card-body ">
				@include('admin.social.form.form')
			</div>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <input type="submit" value="Guardar" class="btn btn-primary">
		</div>
		{!! Form::close() !!}
	  </div>
	</div>
</div>





