@extends('layouts.admin')
@section('title','Editar usuario')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('users.index')}}">Usuarios</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Edición de usuario</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
    {!! Form::model($user, ['route'=>['users.update',$user->id],'method'=>'PUT']) !!}
	<div class="card-body">
		@include('admin.user.form.form')
		<div class="from-group">
			{!! Form::label('password','Contraseña:') !!}
			{!! Form::text('password',null, ['class'=>'form-control']) !!}
		</div> 
		<hr>
		<div class="form-group">
			<ul class="list-unstyled">
				@foreach ($roles as $role)
				<li>
					<labe>
						{!! Form::checkbox('roles[]', $role->id, null) !!}
						{{$role->name}}
						<em>({{$role->description}})</em>
					</label>
				</li>		
				@endforeach
			</ul>
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('users.index')}}">Cancelar</a>
      <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
	<!-- /.card-footer-->
  </div>
@endsection