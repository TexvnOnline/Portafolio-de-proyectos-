<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->

  {!! Html::style('bizcraft/plugins/bootstrap/bootstrap.min.css') !!}
	<!-- FontAwesome -->
  {!! Html::style('bizcraft/plugins/fontawesome/font-awesome.min.css') !!}
	<!-- Animation -->
	{!! Html::style('bizcraft/plugins/animate.css') !!}
	<!-- Prettyphoto -->
	{!! Html::style('bizcraft/plugins/prettyPhoto.css') !!}
	<!-- Owl Carousel -->
	{!! Html::style('bizcraft/plugins/owl/owl.carousel.css') !!}
	{!! Html::style('bizcraft/plugins/owl/owl.theme.css') !!}
	<!-- Flexslider -->
	{!! Html::style('bizcraft/plugins/flex-slider/flexslider.css') !!}
	<!-- Flexslider -->
	{!! Html::style('bizcraft/plugins/cd-hero/cd-hero.css') !!}
	<!-- Style Swicther -->
	{!! Html::style('bizcraft/css/presets/preset3.css') !!}

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      {!! Html::script('bizcraft/plugins/html5shiv.js') !!}
      {!! Html::script('bizcraft/plugins/respond.min.js') !!}
    <![endif]-->

  <!-- Main Stylesheet -->
  {!! Html::style('bizcraft/css/style.css') !!}
  
  <!--Favicon-->
	<link rel="icon" href="bizcraft/img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="bizcraft/img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="bizcraft/img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="bizcraft/img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	
	<!-- Style switcher end -->

	<div class="body-inner">

<!-- Header start -->
		<header id="header" class="fixed-top header2" role="banner">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark">
					<a class="navbar-brand" href="index.html"><img class="img-fluid" src="bizcraft/images/logo.png" alt="logo"></a>
					<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
						data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fa fa-bars"></span>
					</button>
		
					<div class="collapse navbar-collapse text-center" id="navigation">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown active">
								<a class="nav-link " href="{{route('index.web')}}">
									Inicio
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="{{route('about.web')}}">
									Sobre nosotros
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="{{route('portfolio.web')}}">
									Portafolio
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="{{route('service.web')}}">
									Servicios
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('contact.web')}}">Contacto</a></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
<!--/ Header end -->


@yield('content')


<!-- Footer start -->
		<section id="map-wrapper" class="p-0">
			<div class="container">
				<div class="contact-info-inner">
					<h3>Datos de contacto</h3>
					<div><i class="fa fa-map-marker float-left"></i>
						<p><strong>Dirección</strong>{{$contact->address}}</p>
					</div>
					<div><i class="fa fa-phone float-left"></i>
						<p><strong>Teléfono</strong>{{$contact->phone}}</p>
					</div>
					<div><i class="fa fa-envelope-o float-left"></i>
						<p><strong>Email</strong>{{$contact->email}}</p>
					</div>
					<div><i class="fa fa-compass float-left"></i>
						<p><strong>Horario de Oficina</strong>{{$contact->hours}}</p>
					</div>
		
				</div>
			</div>
			<div class="map" id="map"></div>
		</section>
<!--/ Footer end -->

<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
				  @foreach ($socials as $social)
				  <a title="{{$social->name}}" href="{{$social->link}}">
					<span class="icon-pentagon wow bounceIn"><i class="{{$social->icon}}"></i></span>
				  </a>
				  @endforeach
	           
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copiar; Derechos de autor 2020 LaNube. <span>Diseñado por <a
	              href="{{$contact->link}}">LaNube</a></span>
	        </div>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->




	

</div><!-- Body inner end -->

<!-- jQuery -->
{!! Html::script('bizcraft/plugins/jQuery/jquery.min.js') !!}
<!-- Bootstrap JS -->
{!! Html::script('bizcraft/plugins/bootstrap/bootstrap.min.js') !!}
<!-- Style Switcher -->
{!! Html::script('bizcraft/plugins/style-switcher.js') !!}
<!-- Owl Carousel -->
{!! Html::script('bizcraft/plugins/owl/owl.carousel.js') !!}
<!-- PrettyPhoto -->
{!! Html::script('bizcraft/plugins/jquery.prettyPhoto.js') !!}
<!-- Bxslider -->
{!! Html::script('bizcraft/plugins/flex-slider/jquery.flexslider.js') !!}
<!-- CD Hero slider -->
{!! Html::script('bizcraft/plugins/cd-hero/cd-hero.js') !!}
<!-- Isotope -->
{!! Html::script('bizcraft/plugins/isotope.js') !!}
{!! Html::script('bizcraft/plugins/ini.isotope.js') !!}
<!-- Wow Animation -->
{!! Html::script('bizcraft/plugins/wow.min.js') !!}
<!-- Eeasing -->
{!! Html::script('bizcraft/plugins/jquery.easing.1.3.js') !!}
<!-- Counter -->
{!! Html::script('bizcraft/plugins/jquery.counterup.min.js') !!}
<!-- Waypoints -->
{!! Html::script('bizcraft/plugins/waypoints.min.js') !!}
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
{!! Html::script('bizcraft/plugins/google-map/gmap.js') !!}

<!-- Main Script -->
{!! Html::script('bizcraft/js/script.js') !!}

</body>

</html>