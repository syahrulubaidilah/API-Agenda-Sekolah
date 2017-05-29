@extends('layouts.landingpage')
@section('title', 'home')
@section('styles')
@endsection
@section('content')
		<section class="b-slider"> 
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
		</section><!--b-slider-->

		<section class="b-welcome">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
						<div class="b-welcome__text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
							<h2>WORLD'S LEADING CAR DEALER</h2>
							<h3>WELCOME TO AUTOCLUB</h3>
							<p>Curabitur libero. Donec facilisis velit eudsl est. Phasellus consequat. Aenean vita quam. Vivamus et nunc. Nunc consequat sem velde metus imperdiet lacinia. Dui estter neque molestie necd dignissim ac hendrerit quis purus. Etiam sit amet vec convallis massa scelerisque mattis. Sed placerat leo nec.</p>
							<p>Ipsum midne ultrices magn eu tempor quam dolor eustrl sem. Donec quis dolel Donec pede quam placerat alterl tristique faucibus posuere lobortis.</p>
							<ul>
								<li><span class="fa fa-check"></span>Donec facilisis velit eu est phasellus consequat </li>
								<li><span class="fa fa-check"></span>Aenean vitae quam. Vivamus et nunc nunc consequat</li>
								<li><span class="fa fa-check"></span>Sem vel metus imperdiet lacinia enean </li>
								<li><span class="fa fa-check"></span>Dapibus aliquam augue fusce eleifend quisque tels</li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12">
						<div class="b-welcome__services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
							<div class="row">
								<div class="col-xs-6 m-padding">
									<div class="b-welcome__services-auto">
										<div class="b-welcome__services-img m-auto">
											<span class="fa fa-cab"></span>
										</div>
										<h3>AUTO LOANS</h3>
									</div>
								</div>
								<div class="col-xs-6 m-padding">
									<div class="b-welcome__services-trade">
										<div class="b-welcome__services-img m-trade">
											<span class="fa fa-male"></span>
										</div>
										<h3>Trade-Ins</h3>
									</div>
								</div>
								<div class="col-xs-12 text-center">
									<span class="b-welcome__services-circle"></span>
								</div>
								<div class="col-xs-6 m-padding">
									<div class="b-welcome__services-buying">
										<div class="b-welcome__services-img m-buying">
											<span class="fa fa-book"></span>
										</div>
										<h3>Buying guide</h3>
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
