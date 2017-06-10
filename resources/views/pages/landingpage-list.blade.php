@extends('layouts.landingpage')
@section('title', 'list')
@section('styles')
@endsection
@section('content')
	<section class="b-pageHeader">
		<div class="container">
			<h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Auto Listings</h1>
			<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
				<h3>Your search returned 28 results</h3>
			</div>
		</div>
	</section>
	<!--b-pageHeader-->

	<div class="b-breadCumbs s-shadow">
		<div class="container wow zoomInUp" data-wow-delay="0.5s">
			<a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="listings.html"
			 class="b-breadCumbs__page m-active">Search Results</a>
		</div>
	</div>
	<!--b-breadCumbs-->

	<div class="b-infoBar">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xs-12">
					<div class="b-infoBar__select">
						<form method="post" action="/">
							<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
								<span class="b-infoBar__select-one-title">SELECT VIEW</span>
								<a href={{route('page.list')}} class="m-list m-active"><span class="fa fa-list"></span></a>
								<a href={{route('page.table')}} class="m-table"><span class="fa fa-table"></span></a>
							</div>
							<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
								<span class="b-infoBar__select-one-title">SHOW ON PAGE</span>
								<select name="select1" class="m-select">
										<option value="" selected="">10 items</option>
									</select>
								<span class="fa fa-caret-down"></span>
							</div>
							<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
								<span class="b-infoBar__select-one-title">SORT BY</span>
								<select name="select2" class="m-select">
										<option value="" selected="">Last Added</option>
									</select>
								<span class="fa fa-caret-down"></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--b-infoBar-->

	<section class="b-items s-shadow">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-sm-8 col-xs-12">
					<div class="b-items__cars">
						@foreach ($activities as $activity)
						<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__cars-one-img">
								<img class='img-responsive' src="{{ $activity->image }}" alt='dodge' />
								<!--<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>-->
								<span class="b-items__cars-one-img-type m-premium">
									@if($activity->status == 0)
                       			      <span>Draft</span>
                       			    @elseif($activity->status == 1)
                       			      <span>Publish</span>@else
                       			      <span>Expired</span>
                       			    @endif
								</span>
								<form action="/" method="post">
									<input type="checkbox" name="check1" id='check1' />
									<label for="check1" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
								</form>
							</div>
							<div class="b-items__cars-one-info">
								<header class="b-items__cars-one-info-header s-lineDownLeft">
									<h2>{{ $activity->name }}</h2>
									<span></span>
								</header>
								<p>
									{{ $activity->description }}
								</p>
								<!--<div class="b-items__cars-one-info-km">
									<span class="fa fa-tachometer"></span> 31,730 KM
								</div>-->
								<div class="b-items__cars-one-info-details">
									<!--<div class="b-featured__item-links">
										<a href="#">Registered 2015</a>
										<a href="#">Used</a>
										<a href="#">8-Speed Automatic</a>
										<a href="#">Petrol</a>
									</div>-->
									<a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">
						<div class="b-items__pagination-main">
							{{$activities->links()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--b-items-->
@endsection
@section('scripts')
@endsection