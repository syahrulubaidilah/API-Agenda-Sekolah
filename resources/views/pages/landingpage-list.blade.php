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
								<a href="listings.html" class="m-list m-active"><span class="fa fa-list"></span></a>
								<a href="listTable.html" class="m-table"><span class="fa fa-table"></span></a>
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
						<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__cars-one-img">
								<img src="media/270x230/dodge.jpg" alt='dodge' />
								<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
								<span class="b-items__cars-one-img-type m-premium">PREMIUM</span>
								<form action="/" method="post">
									<input type="checkbox" name="check1" id='check1' />
									<label for="check1" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
								</form>
							</div>
							<div class="b-items__cars-one-info">
								<header class="b-items__cars-one-info-header s-lineDownLeft">
									<h2>Chevrolet Silverado 1500</h2>
									<span>$29,415</span>
								</header>
								<p>
									In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate, and the Silverado
									handles more like a big car than a big truck.
								</p>
								<div class="b-items__cars-one-info-km">
									<span class="fa fa-tachometer"></span> 31,730 KM
								</div>
								<div class="b-items__cars-one-info-details">
									<div class="b-featured__item-links">
										<a href="#">Registered 2015</a>
										<a href="#">Used</a>
										<a href="#">8-Speed Automatic</a>
										<a href="#">Petrol</a>
									</div>
									<a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</div>
						<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__cars-one-img">
								<img src="media/270x230/ferrari.jpg" alt="ferrari" />
								<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
								<span class="b-items__cars-one-img-type m-leasing">LEASING AVAILABLE</span>
								<form action="/" method="post">
									<input type="checkbox" name="check2" id='check2' />
									<label for="check2" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
								</form>
							</div>
							<div class="b-items__cars-one-info">
								<header class="b-items__cars-one-info-header s-lineDownLeft">
									<h2>2015 Ferrari LaFerrari</h2>
									<span>$1,420,112</span>
								</header>
								<p>
									Above sports cars, there are exotic sports cars. And the LaFerrari is poised to be the king of all exotic sports cars. Its
									789-hp V-12 gets a 161-hp boost from an electric motor
								</p>
								<div class="b-items__cars-one-info-km">
									<span class="fa fa-tachometer"></span> 35,000 KM
								</div>
								<div class="b-items__cars-one-info-details">
									<div class="b-featured__item-links">
										<a href="#">Registered 2015</a>
										<a href="#">Used</a>
										<a href="#">7-Speed Automatic</a>
										<a href="#">Petrol</a>
									</div>
									<a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</div>
						<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__cars-one-img">
								<img src="media/270x230/jaguarList.jpg" alt='jaguar' />
								<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
								<span class="b-items__cars-one-img-type m-listing">NEW LISTING</span>
								<form action="/" method="post">
									<input type="checkbox" name="check3" id='check3' />
									<label for="check3" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
								</form>
							</div>
							<div class="b-items__cars-one-info">
								<header class="b-items__cars-one-info-header s-lineDownLeft">
									<h2>Jaguar XF 2015</h2>
									<span>$51,170</span>
								</header>
								<p>
									With curvy lines, gorgeous wood, and leather interiors—and performance—the XF combines all there is to love about Jaguars.
									The 240-hp, 2.0-liter turbocharged
								</p>
								<div class="b-items__cars-one-info-km">
									<span class="fa fa-tachometer"></span> 0,000 KM
								</div>
								<div class="b-items__cars-one-info-details">
									<div class="b-featured__item-links">
										<a href="#">Registered 2015</a>
										<a href="#">Used</a>
										<a href="#">8-Speed Automatic</a>
										<a href="#">Petrol</a>
									</div>
									<a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</div>
						<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__cars-one-img">
								<img src="media/270x230/lexus.jpg" alt="lexus" />
								<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
								<span class="b-items__cars-one-img-type m-owner">1 OWNER</span>
								<form action="/" method="post">
									<input type="checkbox" name="check4" id='check4' />
									<label for="check4" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
								</form>
							</div>
							<div class="b-items__cars-one-info">
								<header class="b-items__cars-one-info-header s-lineDownLeft">
									<h2>Lexus LS460 F Sport</h2>
									<span>$73,445</span>
								</header>
								<p>
									The LS was the first Japanese car to mix European luxury with vaunted Japanese reliability, and it continues offering that
									compelling combination today
								</p>
								<div class="b-items__cars-one-info-km">
									<span class="fa fa-tachometer"></span> 35,000 KM
								</div>
								<div class="b-items__cars-one-info-details">
									<div class="b-featured__item-links">
										<a href="#">Registered 2015</a>
										<a href="#">Used</a>
										<a href="#">8-Speed Automatic</a>
										<a href="#">Petrol</a>
									</div>
									<a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</div>
						<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__cars-one-img">
								<img src="media/270x230/mersAmg.jpg" alt="amg" />
								<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
								<form action="/" method="post">
									<input type="checkbox" name="check6" id='check6' />
									<label for="check6" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
								</form>
							</div>
							<div class="b-items__cars-one-info">
								<header class="b-items__cars-one-info-header s-lineDownLeft">
									<h2>Mercedes-Benz GL63 AMG</h2>
									<span>$120,375</span>
								</header>
								<p>
									The top-flight GL63 AMG is built for those who crave performance, luxury, and exclusivity — you know; the finer things in
									life. AMG works its magic on the GL
								</p>
								<div class="b-items__cars-one-info-km">
									<span class="fa fa-tachometer"></span> 35,000 KM
								</div>
								<div class="b-items__cars-one-info-details">
									<div class="b-featured__item-links">
										<a href="#">Registered 2015</a>
										<a href="#">Used</a>
										<a href="#">7-Speed Automatic</a>
										<a href="#">Petrol</a>
									</div>
									<a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</div>
						<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__cars-one-img">
								<img src="media/270x230/nissanList.jpg" alt="nissan" />
								<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
								<form action="/" method="post">
									<input type="checkbox" name="check5" id='check5' />
									<label for="check5" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
								</form>
							</div>
							<div class="b-items__cars-one-info">
								<header class="b-items__cars-one-info-header s-lineDownLeft">
									<h2>2016 Nissan Maxima</h2>
									<span>$32,115</span>
								</header>
								<p>
									Once billed as the "four-door sports car," the Maxima has grown bigger and heavier over the decades, detracting from its
									appeal. The current generation
								</p>
								<div class="b-items__cars-one-info-km">
									<span class="fa fa-tachometer"></span> 35,000 KM
								</div>
								<div class="b-items__cars-one-info-details">
									<div class="b-featured__item-links">
										<a href="#">Registered 2015</a>
										<a href="#">Used</a>
										<a href="#">7-Speed Automatic</a>
										<a href="#">Petrol</a>
									</div>
									<a href="detail.html" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">
						<div class="b-items__pagination-main">
							<a data-toggle="modal" data-target="#myModal" href="#" class="m-left"><span class="fa fa-angle-left"></span></a>
							<span class="m-active"><a href="#">1</a></span>
							<span><a href="#">2</a></span>
							<span><a href="#">3</a></span>
							<span><a href="#">4</a></span>
							<a href="#" class="m-right"><span class="fa fa-angle-right"></span></a>
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