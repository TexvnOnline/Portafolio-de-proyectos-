@extends('layouts.admin')
@section('title','Detalles de rol')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('roles.index')}}">Roles</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de rol</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	<div class="card-body ">
        <p><strong>Nombre: </strong>{{$rol->name}} </p>
		<p><strong>Slug: </strong>{{$rol->slug}} </p>
		<p><strong>Descripción: </strong>{{$rol->description}} </p>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('roles.index')}}">Regresar</a>
    </div>
	<!-- /.card-footer-->
  </div>
@endsection