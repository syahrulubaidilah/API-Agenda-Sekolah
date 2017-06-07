<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Agendaku - @yield('title')</title>

		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

		<link href="css/master.css" rel="stylesheet">

		<!--[if lt IE 9]>
		<script src={{asset('//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}></script>
		<script src={{asset('//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}></script>
		<![endif]-->

	</head>
	<body class="m-index" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

		<!-- Loader -->
		<div id="page-preloader"><span class="spinner"></span></div>
		<!-- Loader end -->
		<!-- Start Switcher -->
		<!-- End Switcher -->

		<header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="b-topBar__addr">
							<span class="fa fa-map-marker"></span>
							202 W 7TH ST, LOS ANGELES, CA 90014
						</div>
					</div>
					<div class="col-md-2 col-xs-6">
						<div class="b-topBar__tel">
							<span class="fa fa-phone"></span>
							1-800- 624-5462
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<nav class="b-topBar__nav">
							<ul>
								<li><a href="{{ url('/register') }}">Register</a></li>
								<li><a href="{{ url('/login') }}">Sign in</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header><!--b-topBar-->

		<nav class="b-nav">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-4">
						<div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
							<h3><a href="home.html">Auto<span>Club</span></a></h3>
							<h2><a href="home.html">AUTO DEALER TEMPLATE</a></h2>
						</div>
					</div>
					<div class="col-sm-9 col-xs-8">
						<div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse navbar-main-slide" id="nav">
								<ul class="navbar-nav-menu">
									<li>
										<a href={{route('page.home')}}>Home </a>
										
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle='dropdown' href="#">Grid <span class="fa fa-caret-down"></span></a>
										<ul class="dropdown-menu h-nav">
											<li><a href={{route('page.list')}}>Listing</a></li>
											<li><a href={{route('page.table')}}>Table</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav><!--b-nav-->

        @yield('content')

        <footer class="b-footer">
			<a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div class="b-footer__company wow fadeInLeft" data-wow-delay="0.3s">
							<div class="b-nav__logo">
								<h3><a href="home.html">Auto<span>Club</span></a></h3>
							</div>
							<p>&copy; 2015 Designed by Templines &amp; Powered by WordPress.</p>
						</div>
					</div>
					<div class="col-xs-8">
						<div class="b-footer__content wow fadeInRight" data-wow-delay="0.3s">
							<div class="b-footer__content-social">
								<a href="#"><span class="fa fa-facebook-square"></span></a>
								<a href="#"><span class="fa fa-twitter-square"></span></a>
								<a href="#"><span class="fa fa-google-plus-square"></span></a>
								<a href="#"><span class="fa fa-instagram"></span></a>
								<a href="#"><span class="fa fa-youtube-square"></span></a>
								<a href="#"><span class="fa fa-skype"></span></a>
							</div>
							<nav class="b-footer__content-nav">
								<ul>
									<li><a href="home.html">Home</a></li>
									<li><a href="404.html">Login</a></li>
									<li><a href="listings.html">Register</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer><!--b-footer-->
		<!--Main-->   
		<script src={{asset('js/jquery-1.11.3.min.js')}}></script>
		<script src={{asset('js/jquery-ui.min.js')}}></script>
		<script src={{asset('js/bootstrap.min.js')}}></script>
		<script src={{asset('js/modernizr.custom.js')}}></script>

		<script src={{asset('asset/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js')}}></script>
		<script src={{asset('js/waypoints.min.js')}}></script>
		<script src={{asset('js/jquery.easypiechart.min.js')}}></script>
		<script src={{asset('js/classie.js')}}></script>

		<!--Switcher-->
		<script src={{asset('asset/switcher/js/switcher.js')}}></script>
		<!--Owl Carousel-->
		<script src={{asset('asset/owl-carousel/owl.carousel.min.js')}}></script>
		<!--bxSlider-->
		<script src={{asset('asset/bxslider/jquery.bxslider.js')}}></script>
		<!-- jQuery UI Slider -->
		<script src={{asset('asset/slider/jquery.ui-slider.js')}}></script>

		<!--Theme-->
		<script src={{asset('js/jquery.smooth-scroll.js')}}></script>
		<script src={{asset('js/wow.min.js')}}></script>
		<script src={{asset('js/jquery.placeholder.min.js')}}></script>
		<script src={{asset('js/theme.js')}}></script>

	</body>
</html>