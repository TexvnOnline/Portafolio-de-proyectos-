@extends('layouts.admin')
@section('title','Gestión de roles')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de roles</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
	</div>
	<div class="card-body table-responsive p-0" style="height: 300px;">
		<a class="m-2 float-right btn btn-primary" href="{{route('roles.create')}}">Crear</a>
	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Nombre</th>
				  <th colspan="3">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($roles as $role)
			<tr>
				  <th scope="row">{{$role->id}}</td>
				  <td>{{$role->name}}</td>
			  	<td width="10px">
				  <a class="btn btn-default" href="{{route('roles.show', $role->id)}}">Ver</a>
			  	</td>
			  	<td width="10px">
					<a class="btn btn-info" href="{{route('roles.edit', $role->id)}}">Editar</a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['roles.destroy',$role->id], 'method'=>'DELETE']) !!}
					<button class="btn btn-danger">Eliminar</button>
					{!! Form::close() !!}
				</td>
			</tr>
			  @endforeach
		  </tbody>
	  </table>
	{{$roles->render()}}
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
	  Footer
	</div>
	<!-- /.card-footer-->
  </div>
@endsection