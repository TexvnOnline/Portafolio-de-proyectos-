@extends('layouts.web')
@section('title','Portafolio')
@section('content')
<div id="banner-area">
	<img src="bizcraft/images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Portafolio de proyectos</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{route('index.web')}}">Inicio</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Portafolio de proyectos</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Portfolio start -->
<section id="main-container" class="portfolio-static">
	<div class="container">
		<div class="row">
			@foreach ($portfolios as $portfolio)
			<div class="col-sm-3 portfolio-static-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{!! asset('imagenes/').'/'.$portfolio->image !!}" alt="">
						<figcaption>
							<a class="link icon-pentagon" href="{{$portfolio->url}}"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon"  href="{{route('portfolio.single', $portfolio->slug)}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
					<div class="portfolio-static-desc">
						<h3>{{$portfolio->name}}</h3>
						<span><a href="{{ route('category.web',$portfolio->category->slug)}}">{{$portfolio->category->name}}</a></span>
					</div>
				</div>
				<!--/ grid end -->
			</div>
			@endforeach
			<!--/ item 1 end -->
		</div><!-- Content row end -->
	</div><!-- Container end -->
</section><!-- Portfolio end -->
@include('web.subscribe.subscribe')
<div class="gap-40"></div>
@endsection



