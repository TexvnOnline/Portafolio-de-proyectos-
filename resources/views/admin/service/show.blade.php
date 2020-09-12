@extends('layouts.admin')
@section('title','Detalles de servicio')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('services.index')}}">Servicios</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de servicio</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	<div class="card-body ">
		<p> <strong>Imagen de portada:</strong> </p>
			<img src="{!! asset('imagenes/').'/'.$service->image !!}" class="rounded" alt="" width="250">
        <p><strong>Nombre: </strong>{{$service->name}} </p>
		<p><strong>Slug: </strong>{{$service->slug}} </p>
		<p><strong>Descripción: </strong>{{$service->shortDescription}} </p>
		<p><strong>Descripción: </strong>{{$service->longDescription}} </p>
		<p><strong>Descripción: </strong>{{$service->icon}} </p>
	</div>
	<section class="content">
		<div class="container-fluid">
		  <div class="row">
			<div class="col-12">
			  <div class="card card-primary">
				<div class="card-header">
				  <div class="card-title">
					Galería de imágenes
				  </div>
				</div>
				<div class="card-body">
				  <div class="row">
					@foreach ($service->images as $image)
					<div class="col-sm-3" id="idimagen-{{$image->id}}">
						<a href="{{$image->url}}" 
						   data-toggle="lightbox" 
						   data-title="ID {{$image->id}}" 
						   data-gallery="gallery">
						  <img src="{{$image->url}}" class="img-fluid mb-2"/>                                   
						</a>
						<a href="{{$image->url}}" >
						</a>
					  </div>
					@endforeach
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</section>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('services.index')}}">Regresar</a>
    </div>
	<!-- /.card-footer-->
  </div>
  @section('scripts')
  <script>
	  $(function () {
		$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		  event.preventDefault();
		  $(this).ekkoLightbox({
			alwaysShowClose: true
		  });
		});
	
		$('.filter-container').filterizr({gutterPixels: 3});
		$('.btn[data-filter]').on('click', function() {
		  $('.btn[data-filter]').removeClass('active');
		  $(this).addClass('active');
		});
	  })
	</script>
  @endsection
@endsection