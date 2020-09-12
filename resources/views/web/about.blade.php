@extends('layouts.web')
@section('title','Sobre nosotros')
@section('content')
<div id="banner-area">
	<img src="bizcraft/images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Sobre nosotros</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{route('index.web')}}">Inicio</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Sobre nosotros</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<!-- Company Profile -->
		<div class="row">
			<div class="col-md-12 heading text-center">
				<h2 class="title2">Sobre nuestra compañía
					<span class="title-desc">Un equipo de experiencia de calidad con 4 años de experiencia.</span>
				</h2>
			</div>
		</div><!-- Title row end -->

		
		<div class="row landing-tab">
			<div class="col-md-3 col-sm-5">
				<div class="nav flex-column nav-pills border-right" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="animated fadeIn nav-link py-4 active d-flex align-items-center" data-toggle="pill" href="#tab_1"
						role="tab" aria-selected="true">
						<i class="fa fa-info-circle mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Quienes somos</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_2" role="tab"
						aria-selected="true">
						<i class="fa fa-briefcase mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Nuestra compañía</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_3" role="tab"
						aria-selected="true">
						<i class="fa fa-android mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Lo que hacemos</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_4" role="tab"
						aria-selected="true">
						<i class="fa fa-pagelines mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Por qué elegirnos</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_5" role="tab"
						aria-selected="true">
						<i class="fa fa-support mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Ahorra tiempo con nosotros</span>
					</a>
				</div>
			</div>



			<div class="col-md-9 col-sm-7">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane pl-sm-5 fade show active animated fadeInLeft" id="tab_1" role="tabpanel">
						<i class="fa fa-trophy icon-xl text-primary mb-4"></i>
						<h3>Nosotros somos una empresa ganadora</h3>
						<p>{{$company->whoAreWe}}</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_2" role="tabpanel">
						<i class="fa fa-briefcase icon-xl text-primary mb-4"></i>
						<h3>Nosotros tenemos negocios en todo el mundo</h3>
						<p>{{$company->our}}</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_3" role="tabpanel">
						<i class="fa fa-android icon-xl text-primary mb-4"></i>
						<h3>Construimos aplicaciones listas para usar</h3>
						<p>{{$company->whatWeDo}}</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_4" role="tabpanel">
						<i class="fa fa-pagelines icon-xl text-primary mb-4"></i>
						<h3>Creamos aplicaciones web listas para usted</h3>
						<p>{{$company->whyChooseUs}}</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_5" role="tabpanel">
						<i class="fa fa-coffee  icon-xl text-primary mb-4"></i>
						<h3>Solución fácil en cada proyecto</h3>
						<p>{{$company->saveTimeWithUs}}</p>
					</div>
				</div>
			</div>
		</div>
		
		<!--/ Content row end -->
		<!-- Company Profile -->
	</div>
	<!--/ 1st container end -->
	<div class="gap-60"></div>

	<!-- Counter Strat -->
	<div class="ts_counter_bg parallax parallax2">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row wow fadeInLeft text-center">
				<div class="facts col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-user"></i></span>
					<div class="facts-num">
						<span class="counter">1200</span>
					</div>
					<h3>Clientela</h3>
				</div>

				<div class="facts col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-institution"></i></span>
					<div class="facts-num">
						<span class="counter">1277</span>
					</div>
					<h3>Artículo vendido</h3>
				</div>

				<div class="facts col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
					<div class="facts-num">
						<span class="counter">869</span>
					</div>
					<h3>Proyectos</h3>
				</div>

				<div class="facts col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-trophy"></i></span>
					<div class="facts-num">
						<span class="counter">76</span>
					</div>
					<h3>Premios</h3>
				</div>
				<div class="gap-40"></div>
				<div class="col-12 text-center"><a href="{{route('portfolio.web')}}" class="btn btn-primary solid">Vea nuestro portafolio</a></div>
			</div>
			<!--/ row end -->
		</div>
		<!--/ Container end -->
	</div>
	<!--/ Counter end -->

	<div class="gap-60"></div>

</section>
<!--/ Main container end -->
@include('web.subscribe.subscribe')
<div class="gap-40"></div>
@endsection


