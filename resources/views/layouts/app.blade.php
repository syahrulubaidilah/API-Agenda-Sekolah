<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Agendaku - @yield('title')</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}} />
		<link rel="stylesheet" href={{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}} />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href={{asset('assets/css/fonts.googleapis.com.css')}} />

		<!-- ace styles -->
		<link rel="stylesheet" href={{asset('assets/css/ace.min.css')}} class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href={{asset('assets/css/ace-skins.min.css')}} />
		<link rel="stylesheet" href={{asset('assets/css/ace-rtl.min.css')}} />

		<!-- ace settings handler -->
		<script src={{asset('assets/js/ace-extra.min.js')}}></script>
		@yield('styles')
	</head>

	<body class="no-skin">
		@include("partials.header")
		@include("partials.sidebar")
		
		<div class="main-content">
			@yield('content')
		</div>
		<!-- /.main-content -->

			@include("partials.footer")

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src={{asset('assets/js/jquery-2.1.4.min.js')}}></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src={{asset('assets/js/bootstrap.min.js')}}></script>

		@yield('scripts')

		
		<!-- ace scripts -->
		<script src={{asset('assets/js/ace-elements.min.js')}}></script>
		<script src={{asset('assets/js/ace.min.js')}}></script>


	</body>
</html>
