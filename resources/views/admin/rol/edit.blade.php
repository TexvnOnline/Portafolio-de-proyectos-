@extends('layouts.admin')
@section('title','Editar rol')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('roles.index')}}">Roles</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Edición de rol</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
    {!! Form::model($rol, ['route'=>['roles.update',$rol->id],'method'=>'PUT']) !!}
	<div class="card-body ">
        @include('admin.rol.form.form')
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('roles.index')}}">Cancelar</a>
      <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
	<!-- /.card-footer-->
  </div>
@endsection