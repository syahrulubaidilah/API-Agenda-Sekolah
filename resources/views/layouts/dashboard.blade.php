<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
 	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 	    <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
		<link rel="stylesheet" type="text/css" href={{asset('assets/css/sweetalert.css')}}>

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

		
		<!-- ace scripts -->
		<script src={{asset('assets/js/ace-elements.min.js')}}></script>
		<script src={{asset('assets/js/ace.min.js')}}></script>
		<script src={{asset('assets/js/sweetalert.min.js')}}></script>
		@yield('scripts')
		<script>
    		$(document).ready(function(){
        	var pathname = window.location.pathname;
        	console.log('url path =>',pathname);
        	switch (pathname) {
            case '/':
                $('#nav-siswa').removeClass('active');
                $('#nav-guru').removeClass('active');
                $('#nav-staf').removeClass('active');
				$('#nav-agenda').removeClass('active');
                $('#nav-calendar').removeClass('active');
                $('#nav-dashboard').addClass('active');
                break; 
            case '/siswa':
                $('#nav-guru').removeClass('active');
                $('#nav-staf').removeClass('active');
				$('#nav-agenda').removeClass('active');
                $('#nav-calendar').removeClass('active');
                $('#nav-dashboard').removeClass('active');
                $('#nav-siswa').addClass('active');
                break; 
            case '/guru':
               $('#nav-siswa').removeClass('active');
                $('#nav-staf').removeClass('active');
				$('#nav-agenda').removeClass('active');
                $('#nav-calendar').removeClass('active');
                $('#nav-dashboard').removeClass('active');
                $('#nav-guru').addClass('active');
                break;  
            case '/staf':
                $('#nav-siswa').removeClass('active');
                $('#nav-guru').removeClass('active');
				$('#nav-agenda').removeClass('active');
                $('#nav-calendar').removeClass('active');
                $('#nav-dashboard').removeClass('active');
                $('#nav-staf').addClass('active');
                break;
			case '/activity':
                $('#nav-siswa').removeClass('active');
                $('#nav-guru').removeClass('active');
                $('#nav-staf').removeClass('active');
                $('#nav-calendar').removeClass('active');
                $('#nav-dashboard').removeClass('active');
				$('#nav-agenda').addClass('active');
                break;
			case '/calendar':
                $('#nav-siswa').removeClass('active');
                $('#nav-guru').removeClass('active');
                $('#nav-staf').removeClass('active');
				$('#nav-agenda').removeClass('active');
                $('#nav-dashboard').removeClass('active');
                $('#nav-calendar').addClass('active');
                break;  
            default: 
                text = "Looking forward to the Weekend";
        	}
    		});
		</script>

	</body>
</html>
