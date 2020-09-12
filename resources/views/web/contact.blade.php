@extends('layouts.web')
@section('content')
@section('title','Contáctenos')
<div id="banner-area">
	<img src="bizcraft/images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Contáctenos</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{route('index.web')}}">Inicio</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Contáctenos</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

@if (session('message'))
	<div class="alert alert-success alert-dismissible fade show" role="alert" >
	  {{session('message')}}
	  <button type="button" class="close" data-dismiss="alert" aria-label="close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
@endif


<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				
				{!! Form::open(['route'=>'mail.store', 'method'=>'POST']) !!}
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								{!! Form::label('name','Nombre') !!}
								{!! Form::text('name', null, ['class'=>'form-control']) !!}
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								{!! Form::label('email','Correo electrónico') !!}
								{!! Form::email('email', null, ['class'=>'form-control']) !!}
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								{!! Form::label('subject','Tema') !!}
								{!! Form::text('subject', null, ['class'=>'form-control']) !!}
							</div>
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('contentmessage','Mensaje') !!}
						{!! Form::textarea('contentmessage', null, ['class'=>'form-control']) !!}
					</div>
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit">Enviar mensaje</button>
					</div>
				{!! Form::close() !!}
			</div>
			<div class="col-md-5">
				<div class="contact-info">
					<h3>Detalles de contacto</h3>
					<p>
					{{$contact->details}}
					</p>
					<br>
					<p><i class="fa fa-home info"></i> 
						{{$contact->address}}
					 </p>
					<p><i class="fa fa-phone info"></i> 
						{{$contact->phone}}
					 </p>
					<p><i class="fa fa-envelope-o info"></i> 
						{{$contact->email}}
					</p>
					<p><i class="fa fa-globe info"></i> 
						{{$contact->link}}
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--/ container end -->
</section>
<!--/ Main container end -->
@include('web.subscribe.subscribe')
@endsection
