@extends('layouts.web')
@section('title','Proyecto')
@section('content')
<div id="banner-area">
	<img src="bizcraft/images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>{{$portfolio->name}}</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{route('index.web')}}">Inicio</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">{{$portfolio->name}}</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Portfolio item start -->
<section id="portfolio-item">
	<div class="container">
		<!-- Portfolio item row start -->
		<div class="row">
			<!-- Portfolio item slider start -->
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="portfolio-slider">
					<div class="flexportfolio flexslider">
						<ul class="slides">
							@foreach ($portfolio->images as $image)
							<li><img src="{{$image->url}}" alt=""></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<!-- Portfolio item slider end -->

			<!-- sidebar start -->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="portfolio-desc">
						<h3 class="widget-title">Sobre el proyecto</h3>
						<p>
							{{$portfolio->description}}
						</p>
						<br />
						<h3 class="widget-title">Habilidades usadas</h3>
						<p>
							{{$portfolio->skills}}
						</p>
						<br />
						<h3 class="widget-title">Clientes</h3>
						<p>
							{{$portfolio->client}}
						</p>
						<p><a href="{{$portfolio->url}}" class="project-btn btn btn-primary">Enlace de proyecto</a></p>
					</div>
				</div>
			</div>
			<!-- sidebar end -->
		</div><!-- Portfolio item row end -->
	</div><!-- Container end -->
</section><!-- Portfolio item end -->
@include('web.subscribe.subscribe')
<div class="gap-40"></div>

@endsection
