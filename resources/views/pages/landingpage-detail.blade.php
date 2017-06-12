@extends('layouts.landingpage')
@section('title', 'list')
@section('styles')
@endsection
@section('content')
		<section class="b-pageHeader">
			<div class="container">
				<h1 class="wow zoomInLeft" data-wow-delay="0.5s">Details Page</h1>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
			<div class="container">
				<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="listings.html" class="b-breadCumbs__page">Luxury Cars</a><span class="fa fa-angle-right"></span><a href="listingsTwo.html" class="b-breadCumbs__page">Nissan</a><span class="fa fa-angle-right"></span><a href="detail.html" class="b-breadCumbs__page m-active">Nissan Maxima</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row wow zoomInUp" data-wow-delay="0.5s">
					<div class="col-xs-3">
						<div class="b-infoBar__premium">Premium Listing</div>
					</div>
					<div class="col-xs-9">
						<div class="b-infoBar__btns">
							<a href="#" class="btn m-btn m-infoBtn">SHARE THIS VEHICLE<span class="fa fa-angle-right"></span></a>
							<a href="#" class="btn m-btn m-infoBtn">ADD TO FAVOURITES<span class="fa fa-angle-right"></span></a>
							<a href="#" class="btn m-btn m-infoBtn">PRINT THIS PAGE<span class="fa fa-angle-right"></span></a>
							<a href="#" class="btn m-btn m-infoBtn">DOWNLOAD MANUAL<span class="fa fa-angle-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->

		<section class="b-detail s-shadow">
			<div class="container">
				<header class="b-detail__head s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
					<div class="row">
						<div class="col-sm-9 col-xs-12">
							<div class="b-detail__head-title">
								<h1>Nissan Maxima SV Premium 2016</h1>
								<h3>Fully Redesigned Upscale Midsize Car</h3>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="b-detail__head-price">
								<div class="b-detail__head-price-num">$44,380</div>
								<p>Included Taxes &amp; Checkup</p>
							</div>
						</div>
					</div>
				</header>
				<div class="b-detail__main">
					<div class="row">
						<div class="col-md-8 col-xs-12">
							<div class="b-detail__main-info">
								<div class="b-detail__main-info-images wow zoomInUp" data-wow-delay="0.5s">
									<div class="row m-smallPadding">
										<div class="col-xs-10">
											<ul class="b-detail__main-info-images-big bxslider enable-bx-slider" data-pager-custom="#bx-pager" data-mode="horizontal" data-pager-slide="true" data-mode-pager="vertical" data-pager-qty="5">
												<li class="s-relative">                                        
													<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
													<img class="img-responsive center-block" src="media/620x485/big1.jpg" alt="nissan" />
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<aside class="b-detail__main-aside">
								<div class="b-detail__main-aside-desc wow zoomInUp" data-wow-delay="0.5s">
									<h2 class="s-titleDet">Description</h2>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Make</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Nissan</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Model</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Maxima</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Kilometres</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">39,000 km</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Body Type</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Sedan</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Style/trim</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">SV Premium</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Engine</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">V-6 cyl</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Drivetrain</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">EWD</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Transmission</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Dual-Clutch Automatic</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Exterior Color</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Dark Grey</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Interior color</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Jet Black</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Passangers/Doors</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">5 Passengers / 4 Doors</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Fuel Type</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Gasoline Fue</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">City Fuel Economy </h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">10.8L/100km</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Hwy Fuel Economy</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">7.7L/100km</p>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-detail-->
@endsection
@section('scripts')
@endsection