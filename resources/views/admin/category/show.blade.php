@extends('layouts.admin')
@section('title','Detalles de categoría')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('categories.index')}}">Categorías</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de categoría</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	<div class="card-body ">
        <p><strong>Nombre: </strong>{{$category->name}} </p>
        <p><strong>Slug: </strong>{{$category->slug}} </p>
		<p><strong>Descripción: </strong>{{$category->description}} </p>
		<div class="from-group">
			<div class="text-center">
				<img src="{!! asset('imagenes/').'/'.$category->image !!}" 
			  </div>
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('categories.index')}}">Regresar</a>
    </div>
	<!-- /.card-footer-->
  </div>
@endsection