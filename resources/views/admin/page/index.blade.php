@extends('layouts.admin')
@section('title','Gestión de pagina')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="container-fluid">
	<div class="card card-primary card-outline">
	  <div class="card-header">
		<h3 class="card-title">
			<a href="{{route('companies.edit', $company->id)}}"  data-toggle="modal" data-target="#modal-edit-company" ><i class="fas fa-edit"></i></a>
		  Información de compañía
		</h3>
	  </div>
	  <div class="card-body">
		<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
		  <li class="nav-item">
			<a class="nav-link active" id="whoAreWe-tab" data-toggle="pill" href="#whoAreWe" role="tab" aria-controls="whoAreWe" aria-selected="true">Quienes somos</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="our-tab" data-toggle="pill" href="#our" role="tab" aria-controls="our" aria-selected="false">Nuestra compañía</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="whatWeDo-tab" data-toggle="pill" href="#whatWeDo" role="tab" aria-controls="whatWeDo" aria-selected="false">Lo que hacemos</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="whyChooseUs-tab" data-toggle="pill" href="#whyChooseUs" role="tab" aria-controls="whyChooseUs" aria-selected="false">Porque elegirnos</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="saveTimeWithUs-tab" data-toggle="pill" href="#saveTimeWithUs" role="tab" aria-controls="saveTimeWithUs" aria-selected="false">Ahorra tiempo con nosotros</a>
		  </li>
		</ul>
		<div class="tab-content" id="custom-content-below-tabContent">
		  <div class="tab-pane fade show active" id="whoAreWe" role="tabpanel" aria-labelledby="whoAreWe-tab">
			{{$company->whoAreWe}} 
		  </div>
		  <div class="tab-pane fade" id="our" role="tabpanel" aria-labelledby="our-tab">
			{{$company->our}} 
		  </div>
		  <div class="tab-pane fade" id="whatWeDo" role="tabpanel" aria-labelledby="whatWeDo-tab">
			{{$company->whatWeDo}} 
		  </div>

		  <div class="tab-pane fade" id="whyChooseUs" role="tabpanel" aria-labelledby="whyChooseUs-tab">
			{{$company->whyChooseUs}} 
		  </div>

		  <div class="tab-pane fade" id="saveTimeWithUs" role="tabpanel" aria-labelledby="saveTimeWithUs-tab">
			{{$company->saveTimeWithUs}} 
		 </div>
		</div>
	  </div>
	</div>

		<div class="invoice p-3 mb-3">
		  <div class="card-header">
			<h3 class="card-title">
				<a href="{{route('contacts.edit', $contact->id)}}"  data-toggle="modal" data-target="#modal-edit-contact" ><i class="fas fa-edit"></i></a>
			  Información de contacto
			</h3>
		  </div>
		  <div class="row invoice-info">
			<div class="col-sm-12 invoice-col">
			  <address>
				<strong>Detalles: </strong>{{$contact->details}}<br>
				<strong>Dirección: </strong>{{$contact->address}}<br>
				<strong>Email: </strong>{{$contact->email}}<br>
				<strong>Teléfono: </strong>{{$contact->phone}}<br>
				<strong>Enlace: </strong>{{$contact->link}}<br>
				<strong>Horario de atención: </strong>{{$contact->hours}}<br>
			  </address>
			</div>
		  </div>
		</div>

	<h5 class="mb-2">Redes sociales</h5>
		<div class="mb-2">
			<a href="{{route('socials.create')}}"   data-toggle="modal" data-target="#modal-create-social" >
				<button type="button" class="btn btn-block btn-primary">Agregar</button>
			</a>
			
		</div>     
	<div class="row">
	@foreach ($socials as $social)
	  <div class="col-md-3 col-sm-6 col-12">
		<div class="info-box">
			<span class="info-box-icon bg-info">
				<i class="{{$social->icon}}"></i>
			</span>
		  <div class="info-box-content">
			<span class="info-box-text">{{$social->name}}</span>

			<span class="info-box-text">
				<td class="text-right py-0 align-middle">
					<div class="btn-group btn-group-sm">
					{!! Form::open(['route'=>['socials.destroy',$social->id], 'method'=>'DELETE']) !!}
						
					<a href="{{route('socials.edit', $social->id)}}" class="btn btn-info" data-toggle="modal" data-target="#modal-edit-social{{$social->id}}"><i class="fas fa-edit"></i></a>

					  <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
					 {!! Form::close() !!}
					</div>
				</td>
			</span>
			
		  </div>
		</div>
	  </div>

	  @include('admin.social.edit')

	  @endforeach
	</div>
	


	<h3 class="mt-4 mb-4">Sección de carrusel</h3>
		<div class="row">
			<div class="card-group">
				@foreach ($sliders as $slider)
				<div class="col-md-4">
					<div class="card ">
						<img class="card-img-top" src="{{$slider->image->url}}" alt="Card image cap">
					<div class="card-body">
						<span>
						<a class="btn btn-default btn-sm float-right" href="{{route('sliders.edit', $slider->id)}}"  data-toggle="modal" data-target="#modal-edit-slider{{$slider->id}}" ><i class="fas fa-edit"></i></a>
						</span>
						
						<p><strong >Texto principal de carrusel: </strong>{{$slider->text1}}</p> 
						<p><strong >Texto segundario de carrusel: </strong>{{$slider->text2}}</p>
						<p><strong >Texto de botón principal: </strong>{{$slider->button1}}</p>
						<p><strong >Texto botón segundario: </strong>{{$slider->button2}}</p>
						
					</div>
					</div>
				</div>

				@include('admin.slider.edit')
				@endforeach
			</div>
		</div>
  </div>
  	@include('admin.company.edit')
	@include('admin.contact.edit')	
	@include('admin.social.create')
	
@endsection