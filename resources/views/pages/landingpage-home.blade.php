@extends('layouts.landingpage')
@section('title', 'Home')
@section('styles')
@endsection
@section('content')
		<!--<section class="b-slider"> 
			<div id="carousel" class="slide carousel carousel-fade">
				<div class="carousel-inner">
					<div class="item active">
						<img src="media/main-slider/1.jpg" alt="sliderImg" />
						<div class="container">
							<div class="carousel-caption b-slider__info">
								<h3>Find your dream</h3>
								<h2>Lamborghini Aventador</h2>
								<p>Model 2015 <span>$184,900</span></p>
								<a class="btn m-btn" href="detail.html">see details<span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="media/main-slider/2.jpg" alt="sliderImg" />
						<div class="container">
							<div class="carousel-caption b-slider__info">
								<h3>Find your dream</h3>
								<h2>Lamborghini Aventador</h2>
								<p>Model 2015 <span>$184,900</span></p>
								<a class="btn m-btn" href="detail.html">see details<span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="media/main-slider/3.jpg"  alt="sliderImg"/>
						<div class="container">
							<div class="carousel-caption b-slider__info">
								<h3>Find your dream</h3>
								<h2>Lamborghini Aventador</h2>
								<p>Model 2015 <span>$184,900</span></p>
								<a class="btn m-btn" href="detail.html">see details<span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control right" href="#carousel" data-slide="next">
					<span class="fa fa-angle-right m-control-right"></span>
				</a>
				<a class="carousel-control left" href="#carousel" data-slide="prev">
					<span class="fa fa-angle-left m-control-left"></span>
				</a>
			</div>
		</section>-->

		<section class="b-welcome">
			<div class="container">
				<div class="row">
					<div class="b-welcome__services">
						<div class="col-md-3 col-xs-12">
							<div class="row">
								<div class="col-xs-12 m-padding">
									<div class="b-welcome__services-auto wow zoomInLeft" data-wow-delay="0.3s">
										<div class="b-welcome__services-img m-auto">
											<span class="fa fa-calendar"></span>
										</div>
										<h3>Kalender</h3>
									</div>
								</div>
								<div class="col-xs-12 text-right visible-md visible-lg">
									<div class="m-circle wow slideInRight" data-wow-delay="0.3s">
										<span class="b-welcome__services-circle"></span>
									</div>
								</div>
								<div class="col-xs-12 m-padding">
									<div class="b-welcome__services-buying wow zoomInLeft" data-wow-delay="0.3s">
										<div class="b-welcome__services-img m-buying">
											<span class="fa fa-bars"></span>
										</div>
										<h3>List</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="b-welcome__text wow zoomInUp" data-wow-delay="0.3s">
							<h2>Welcome to Agenda KU</h2>
							<p>Agenda KU adalah sebuah website untuk menampilkan agenda/kegiatan sekolah yang akan dilaksanakan</p>
							<ul>
								<li><span class="fa fa-check"></span>Agenda KU ditampilkan dengan tampilan User Friendly</li>
								<li><span class="fa fa-check"></span>User dapat membuat agendanya sendiri </li>
								<li><span class="fa fa-check"></span>Agenda KU disertai fitur kalender</li>
							</ul>
						</div>
					</div>
					<div class="b-welcome__services">
						<div class="col-md-3 col-xs-12">
							<div class="row">
								<div class="col-xs-12 m-padding">
									<div class="b-welcome__services-trade wow zoomInRight" data-wow-delay="0.3s">
										<div class="b-welcome__services-img m-trade">
											<span class="fa fa-table"></span>
										</div>
										<h3>Tabel</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-welcome-->
@endsection
@section('scripts')
@endsection
