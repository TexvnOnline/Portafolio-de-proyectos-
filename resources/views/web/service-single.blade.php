@extends('layouts.web')
@section('title','Servicio')
@section('content')
<div id="banner-area">
	<img src="bizcraft/images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>{{$service->name}}</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{route('index.web')}}">Inicio</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">{{$service->name}}</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="post-content">
					<div class="post-image-wrapper">
						<img src="bizcraft/images/pages/service-single.jpg" class="img-fluid" alt="" />
					</div><!-- post image end -->
					<p>{{$service->longDescription}}</p>

					<div class="gap-20"></div>

				</div>
				<!--/ post content end -->
			</div>
			<!--/ Content col end -->

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar sidebar-right">
					<!-- category start -->
					@foreach ($categories as $category)
					<div class="widget widget-categories">
						<h3 class="widget-title">Categorias</h3>
						<ul class="category-list clearfix">
							<li><a href="{{ route('category.web',$category->slug)}}">{{$category->name}}</a><span class="posts-count"> (19)</span></li>
						</ul>
					</div><!-- category end -->
					@endforeach
					<!-- tags start -->
					@foreach ($tags as $tag)
					<div class="widget widget-tags">
						<h3 class="widget-title">Etiquetas</h3>
						<ul class="unstyled clearfix">
							<li><a href="{{ route('tag.web',$tag->slug)}}">{{$tag->name}}</a></li>
						</ul>
					</div><!-- tags end -->
					@endforeach
				</div>
				<!--/ Sidebar end -->
			</div>
			<!--/ Sidebar col end -->
		</div>
		<!--/ row end -->
	</div>
	<!--/ container end -->
</section>
<!--/ Main container end -->
@include('web.subscribe.subscribe')
@endsection


	