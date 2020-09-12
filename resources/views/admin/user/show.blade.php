@extends('layouts.admin')
@section('title','Detalles de usuario')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('users.index')}}">Usuarios</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de usuario</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	<div class="card-body ">
        <p><strong>Nombre: </strong>{{$user->name}} </p>
        <p><strong>Slug: </strong>{{$user->email}} </p>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('users.index')}}">Regresar</a>
    </div>
	<!-- /.card-footer-->
  </div>
@endsection