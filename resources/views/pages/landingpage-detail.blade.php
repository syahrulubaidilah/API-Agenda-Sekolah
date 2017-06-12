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
								<h1>{{ $activity->name }}</h1>
								<h3>Fully Redesigned Upscale Midsize Car</h3>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="b-detail__head-price">
								@if($activity->status == 0)
                       			      <span>Draft</span>
                       			    @elseif($activity->status == 1)
                       			      <span>Publish</span>@else
                       			      <span>Expired</span>
                       			    @endif
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
													<img class="img-responsive center-block" src="media/620x485/big1.jpg"/>
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
									<h2 class="s-titleDet">Detail</h2>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Pembuat</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">{{ $activity->users->name === null ? "null" : $activity->users->name }}</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Deskripsi</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">{{ $activity->description }}</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Tanggal Mulai</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">{{ $activity->start_date }}</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Tanggal Selesai</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">{{ $activity->end_date }}</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Waktu</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">{{ $activity->time }}</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Tempat</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">{{ $activity->place }}</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Peserta</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">{{ $activity->participant }}<</p>
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