@extends('layouts.web')
@section('title','Servicios')
@section('content')
<div id="banner-area">
	<img src="bizcraft/images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Servicios</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{route('index.web')}}">Inicio</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Servicios</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<!-- Services -->
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title classic">Nuestros Servicios</h2>
			</div>
		</div>

		<div class="row">
			@foreach ($services as $service)
			<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content">
					<span class="service-image">
						<a href="{{route('service.single', $service->slug)}}">
							<img class="img-fluid" src="{!! asset('imagenes/').'/'.$service->image !!}" alt="" />
						</a>
					</span>
					<h3>{{$service->name}}</h3>
					<p>{{$service->description}}</p>
				</div>
			</div>
			@endforeach
			<!--/ End Third features -->
		</div><!-- Content Row end -->
		<!-- Services end -->
	</div>
	<!--/ 1st container end -->

	<div class="gap-60"></div>

</section>
<!--/ Main container end -->

@include('web.subscribe.subscribe')

@endsection

