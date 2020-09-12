@extends('layouts.admin')
@section('title','Detalles de etiqueta')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('tags.index')}}">Etiquetas</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de etiqueta</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	<div class="card-body ">
        <p><strong>Nombre: </strong>{{$tag->name}} </p>
        <p><strong>Slug: </strong>{{$tag->slug}} </p>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('tags.index')}}">Regresar</a>
    </div>
	<!-- /.card-footer-->
  </div>
@endsection