@extends('layouts.admin')
@section('title','Gestión de servicios')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de servicios</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
	</div>
	<div class="card-body table-responsive p-0" style="height: 300px;">
		<a class="m-2 float-right btn btn-primary" href="{{route('services.create')}}">Crear</a>
	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Nombre</th>
				  <th>Descripción</th>
				  <th colspan="3">&nbsp;</th>
			  </tr>
		  </thead>
		  @foreach ($services as $service)
		  <tbody>
			<tr>
				  <th scope="row">{{$service->id}}</td>
				  <td>{{$service->name}}</td>
				  <td>{{$service->description}}</td>
			  	<td width="10px">
				  <a class="btn btn-default" href="{{route('services.show', $service->id)}}">Ver</a>
			  	</td>
			  	<td width="10px">
					<a class="btn btn-info" href="{{route('services.edit', $service->id)}}">Editar</a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['services.destroy',$service->id], 'method'=>'DELETE']) !!}
					<button class="btn btn-danger">Eliminar</button>
					{!! Form::close() !!}
				</td>
			</tr>
		  </tbody>
		  @endforeach
	  </table>
	{{$services->render()}}
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
	  Footer
	</div>
	<!-- /.card-footer-->
  </div>
@endsection