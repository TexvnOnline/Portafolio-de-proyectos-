
<div class="modal fade" id="modal-edit-slider{{$slider->id}}">
	<div class="modal-dialog modal-edit-slider">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edición de carrusel</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		{!! Form::model($slider, ['route'=>['sliders.update',$slider->id],'method'=>'PUT','files'=>true]) !!}
		<div class="modal-body">
			<div class="card-body ">
				@include('admin.slider.form.form')
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