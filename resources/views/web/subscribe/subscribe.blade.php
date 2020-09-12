<!-- Newsletter start -->
<section id="newsletter" class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading text-center">
				<span class="icon-pentagon wow bounceIn animated"><i class="fa fa-envelope"></i></span>
				<h2 class="title2">Suscríbete con nosotros
					<span class="title-desc">Nos encanta trabajar con pasión</span>
				</h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6 mx-auto">
				@if (session('message'))
					<div class="alert alert-success alert-dismissible fade show" role="alert" >
					{{session('message')}}
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				@endif
                {!! Form::open(['route'=>'subscribe.store','method'=>'POST','class'=>'newsletter-form wow bounceIn','data-wow-duration'=>'.8s']) !!}
                
					<div class="form-group">
						{!! Form::email('email', null, ['class'=>'form-control form-control-lg', 'id'=>'newsletter-form-email', 'placeholder'=>'Ingrese su correo electrónico', 'autocomplete'=>'off']) !!}
						<button class="btn btn-primary solid" type="submit">Suscribir</button>
					</div>
                {!! Form::close() !!}
			</div>
		</div>
		<!--/ Content row end -->
	</div>
	<!--/ Container end -->
</section><!-- Newsletter end -->