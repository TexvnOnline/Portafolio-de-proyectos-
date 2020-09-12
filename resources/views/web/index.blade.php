@extends('layouts.web')
@section('title','LaNube')
@section('content')


<!-- Slider start -->
<section id="home" class="p-0">
	<div id="main-slide" class="ts-flex-slider">
		<div class="flexSlideshow flexslider">
			<ul class="slides">
				<li>
					<div class="overlay2">
						<img class="" src="{{$slider1->image->url}}" alt="slider">
					</div>
					<div class="flex-caption slider-content">
						<div class="col-md-12 text-center">
							<h2 class="animated2">
								{{$slider1->text1}}
							</h2>
							<h3 class="animated3">
								{{$slider1->text2}}
							</h3>
							<p class="animated4"><a href="#" class="slider btn btn-primary white">{{$slider1->button1}}</a></p>
						</div>
					</div>
				</li>
				<li>
					<div class="overlay2">
						<img class="" src="{{$slider2->image->url}}" alt="slider">
					</div>
					<div class="flex-caption slider-content">
						<div class="col-md-12 text-center">
							<h2 class="animated4">
								{{$slider2->text1}}
							</h2>
							<h3 class="animated5">
								{{$slider2->text2}}
							</h3>
							<p class="animated6"><a href="#" class="slider btn btn-primary white">{{$slider2->button1}}</a></p>
						</div>
					</div>
				</li>
				<li>
					<div class="overlay2">
						<img class="" src="{{$slider3->image->url}}" alt="slider">
					</div>
					<div class="flex-caption slider-content">
						<div class="col-md-12 text-center">
							<h2 class="animated7">
								{{$slider3->text1}}
							</h2>
							<h3 class="animated8">
								{{$slider3->text2}}
							</h3>
							<div class="">
								<a class="animated4 slider btn btn-primary btn-min-block white" href="#">{{$slider3->button1}}</a><a
									class="animated4 slider btn btn-primary btn-min-block solid" href="#">{{$slider3->button2}}</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!--/ Main slider end -->
</section>
<!--/ Slider end -->















<!-- Service box start -->
<section id="service" class="service angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title">Servicio que brindamos <span class="title-desc">Un equipo de experiencia de calidad con 4 años de experiencia.</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			@foreach ($services as $service)
			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="{{$service->icon}}"></i></span>
					<h3>{{$service->name}}</h3>
					<p>{{$service->shortDescription}}</p>
				</div>
			</div>
			
			@endforeach
			<!--/ End first service -->
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Service box end -->














<!-- Portfolio start -->
<section id="portfolio" class="portfolio portfolio-box">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading text-center">
				<span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
				<h2 class="title2">proyectos completados
					<span class="title-desc">Un equipo de experiencia de calidad con 4 años de experiencia.</span>
				</h2>
			</div>
		</div> <!-- Title row end -->

		<!--Isotope filter start -->
		{{--  <div class="row text-center">
			<div class="col-12">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".web-design">Web Design</a></li>
						<li><a href="#" data-filter=".development">Development</a></li>
						<li><a href="#" data-filter=".joomla">Joomla</a></li>
						<li><a href="#" data-filter=".wordpress">Wordpress</a></li>
					</ul>
				</div>
			</div>
		</div>  --}}
		
		<!-- Isotope filter end -->

		<div id="isotope" class="row isotope">
			@foreach ($portfolios as $portfolio)
			<div class="col-sm-3 web-design isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{!! asset('imagenes/').'/'.$portfolio->image !!}" alt="">
						<figcaption>
							<h3>{{$portfolio->name}}</h3>
							<a class="link icon-pentagon" href="{{$portfolio->url}}"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon"  href="{{route('portfolio.single', $portfolio->slug)}}"><i
								class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->
			@endforeach
			
			
		</div><!-- Content row end -->
	</div><!-- Container end -->
</section><!-- Portfolio end -->











<!-- About tab start -->
<section id="about" class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading text-center">
				<span class="icon-pentagon wow bounceIn"><i class="fa fa-meh-o"></i></span>
				<h2 class="title2">Conozca nuestra empresa
					<span class="title-desc">Un equipo de experiencia de calidad con 4 años de experiencia.</span>
				</h2>
			</div>
		</div> <!-- Title row end -->

		<div class="row featured-tab">
			<div class="col-md-3 col-sm-5">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="animated fadeIn nav-link mb-1 active d-flex align-items-center" data-toggle="pill" href="#tab_1"
						role="tab" aria-selected="true">
						<i class="fa fa-info-circle mr-4 h3 mb-0"></i>
						<span class="h4 mb-0 font-weight-bold">Quienes somos</span>
					</a>
					<a class="animated fadeIn nav-link mb-1 d-flex align-items-center" data-toggle="pill" href="#tab_2" role="tab"
						aria-selected="true">
						<i class="fa fa-briefcase mr-4 h3 mb-0"></i>
						<span class="h4 mb-0 font-weight-bold">Nuestra Compañía</span>
					</a>
					<a class="animated fadeIn nav-link mb-1 d-flex align-items-center" data-toggle="pill" href="#tab_3" role="tab"
						aria-selected="true">
						<i class="fa fa-android mr-4 h3 mb-0"></i>
						<span class="h4 mb-0 font-weight-bold">Lo que hacemos</span>
					</a>
					<a class="animated fadeIn nav-link mb-1 d-flex align-items-center" data-toggle="pill" href="#tab_4" role="tab"
						aria-selected="true">
						<i class="fa fa-pagelines mr-4 h3 mb-0"></i>
						<span class="h4 mb-0 font-weight-bold">Por qué elegirnos</span>
					</a>
					<a class="animated fadeIn nav-link mb-1 d-flex align-items-center" data-toggle="pill" href="#tab_5" role="tab"
						aria-selected="true">
						<i class="fa fa-support mr-4 h3 mb-0"></i>
						<span class="h4 mb-0 font-weight-bold">Ahorra tiempo</span>
					</a>
				</div>
			</div>
			<div class="col-md-9 col-sm-7">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane pl-sm-5 fade show active animated fadeInLeft" id="tab_1" role="tabpanel">
						{{-- <img class="img-fluid float-left mr-3" src="bizcraft/images/tab/featured-tab1.png" alt=""> --}}
						<h3>Somos una empresa galardonada.</h3>
						<p>
							{{$company->whoAreWe}}
						</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_2" role="tabpanel">
						{{-- <img class="img-fluid float-right" src="bizcraft/images/tab/featured-tab2.png" alt=""> --}}
						<h3>Somos una empresa galardonada.</h3>
						<p>
							{{$company->our}}
						</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_3" role="tabpanel">
						<h3 class="text-center">Creamos aplicaciones web listas para usted</h3>
						{{-- <img class="img-fluid" src="bizcraft/images/tab/featured-tab3.png" alt=""> --}}
						<p>
							{{$company->whatWeDo}}
						</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_4" role="tabpanel">
						<h3>Creamos aplicaciones web listas para usted</h3>
						<p>
							{{$company->whyChooseUs}}
						</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_5" role="tabpanel">
						<i class="fa fa-coffee float-left icon-xl"></i>
						<h3>Solución fácil para cada proyecto</h3>
						<p>
							{{$company->saveTimeWithUs}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Container end -->
</section><!-- About end -->






<!-- Clients start -->
<section id="clients" class="clients">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
				@foreach ($categories as $category)
				<figure class="m-0 item client_logo">
					<a href="{{ route('category.web',$category->slug)}}">
						<img src="{!! asset('imagenes/').'/'.$category->image !!}" alt="client">
					</a>
				</figure>
				@endforeach
			</div><!-- Owl carousel end -->
		</div><!-- Main row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Clients end -->



@include('web.subscribe.subscribe')




@endsection