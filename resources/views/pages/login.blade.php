<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />
  <title>Login Page Agenda Sekolahku</title>

  <meta name="description" content="User login page" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <!-- bootstrap & fontawesome -->
  <link rel="stylesheet" href={{asset( 'assets/css/bootstrap.min.css')}} />
  <link rel="stylesheet" href={{asset( 'assets/font-awesome/4.5.0/css/font-awesome.min.css')}} />

  <!-- text fonts -->
  <link rel="stylesheet" href={{asset( 'assets/css/fonts.googleapis.com.css')}} />
  <!-- ace styles -->
  <link rel="stylesheet" href={{asset( 'assets/css/ace.min.css')}} />
  <link rel="stylesheet" href={{asset( 'assets/css/ace-rtl.min.css')}} />
  <link rel="stylesheet" href={{asset('assets/css/jquery.gritter.min.css')}} />

</head>

<body class="login-layout">
  <div class="main-container">
    <div class="main-content">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="login-container">
            <div class="center">
              <h1>
                <i class="ace-icon fa fa-home green"></i>
                <span class="red">Agenda</span>
                <span class="white" id="id-text2">Sekolahku</span>
                </h1>
              <h4 class="blue" id="id-company-text">&copy; SMK NEGERI 1 KEPANJEN</h4>
            </div>
           

            <div class="space-6"></div>

            <div class="position-relative">
              <div id="login-box" class="login-box visible widget-box no-border">
                <div class="widget-body">
                  <div class="widget-main">
                    @if (session('auth_message'))
                      <h5 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-warning green"></i>
                        {{ session('auth_message') }}
                      </h5>
                    @endif
                    <h4 class="header blue lighter bigger">
                      <i class="ace-icon fa fa-coffee green"></i>
                      Please Enter Your Information
                    </h4>

                    <div class="space-6"></div>

                    <form name='formLogin' method="post" accept-charset="UTF-8" action="{{route('api.login')}}">
                      <fieldset>
                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="text" name="email" class="form-control" placeholder="Email" required="true"/>
                            <i class="ace-icon fa fa-user"></i>
                            </span>
                        </label>

                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="true"/>
                            <i class="ace-icon fa fa-lock"></i>
                            </span>
                        </label>

                        <div class="space"></div>

                        <div class="clearfix">
                          <label class="inline">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"> Remember Me</span>
                          </label>

                          <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">Login</span>
                          </button>
                        </div>

                        <div class="space-4"></div>
                      </fieldset>
                    </form>
                    <div class="space-6"></div>
                  </div>
                  <!-- /.widget-main -->

                  <div class="toolbar clearfix">
                    <div>
                      <a href="#" data-target="#forgot-box" class="forgot-password-link">
                        <i class="ace-icon fa fa-arrow-left"></i> I forgot my password
                      </a>
                    </div>

                    <div>
                      <a href="#" data-target="#signup-box" class="user-signup-link">
                        Register
                        <i class="ace-icon fa fa-arrow-right"></i>
                        </a>
                    </div>
                  </div>
                </div>
                <!-- /.widget-body -->
              </div>
              <!-- /.login-box -->

              <div id="forgot-box" class="forgot-box widget-box no-border">
                <div class="widget-body">
                  <div class="widget-main">
                    <h4 class="header red lighter bigger">
                      <i class="ace-icon fa fa-key"></i>
                      Retrieve Password
                      </h4>

                    <div class="space-6"></div>
                    <p>
                      Enter your email and to receive instructions
                    </p>

                    <form>
                      <fieldset>
                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="email" class="form-control" placeholder="Email" required="true"/>
                            <i class="ace-icon fa fa-envelope"></i>
                            </span>
                        </label>

                        <div class="clearfix">
                          <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                            <i class="ace-icon fa fa-lightbulb-o"></i>
                            <span class="bigger-110">Send Me!</span>
                          </button>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                  <!-- /.widget-main -->

                  <div class="toolbar center">
                    <a href="#" data-target="#login-box" class="back-to-login-link">
                      Back to login
                      <i class="ace-icon fa fa-arrow-right"></i>
                      </a>
                  </div>
                </div>
                <!-- /.widget-body -->
              </div>
              <!-- /.forgot-box -->

              <div id="signup-box" class="signup-box widget-box no-border">
                <div class="widget-body">
                  <div class="widget-main">
                    <h4 class="header green lighter bigger">
                      <i class="ace-icon fa fa-users blue"></i>
                      User Registration
                      </h4>

                    <div class="space-6"></div>
                    <p> Silahkan Masukkan Data Diri Anda </p>

                    <form id="formRegister">
                      <fieldset>

                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="text" name="name" class="form-control" placeholder="Username" required="true"/>
                            <i class="ace-icon fa fa-user"></i>
                            </span>
                        </label>

                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="true"/>
                            <i class="ace-icon fa fa-envelope"></i>
                            </span>
                        </label>

                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="true"/>
                            <i class="ace-icon fa fa-lock"></i>
                            </span>
                        </label>

                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="password" class="form-control" placeholder="Repeat password" required="true"/>
                            <i class="ace-icon fa fa-retweet"></i>
                            </span>
                        </label>

                        <label class="block">
                          <input type="checkbox" class="ace" />
                          <span class="lbl">
                            I accept the
                            <a href="#">User Agreement</a>
                            </span>
                        </label>

                        <div class="space-24"></div>

                        <div class="clearfix">
                          <button type="reset" class="width-30 pull-left btn btn-sm">
                            <i class="ace-icon fa fa-refresh"></i>
                            <span class="bigger-110">Reset</span>
                          </button>

                          <button type="submit" id="btnRegister" class="width-65 pull-right btn btn-sm btn-success">
                            <span class="bigger-110">Register</span>

                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                          </button>
                        </div>
                      </fieldset>
                    </form>
                  </div>

                  <div class="toolbar center">
                    <a href="#" data-target="#login-box" class="back-to-login-link">
                      <i class="ace-icon fa fa-arrow-left"></i> Login
                    </a>
                  </div>
                </div>
                <!-- /.widget-body -->
              </div>
              <!-- /.signup-box -->
            </div>
            <!-- /.position-relative -->

            <div class="navbar-fixed-top align-right">
              <br /> &nbsp;
              <a id="btn-login-dark" href="#">Dark</a> &nbsp;
              <span class="blue">/</span> &nbsp;
              <a id="btn-login-blur" href="#">Blur</a> &nbsp;
              <span class="blue">/</span> &nbsp;
              <a id="btn-login-light" href="#">Light</a> &nbsp; &nbsp; &nbsp;
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.main-content -->
  </div>
  <!-- /.main-container -->

  <!-- basic scripts -->

  <!--[if !IE]> -->
  <script src={{asset( 'assets/js/jquery-2.1.4.min.js')}}></script>
  <script src={{asset('assets/js/jquery.gritter.min.js')}}></script>

  <!-- <![endif]-->

  <!--[if IE]>
<scriptsrc={{asset('assets/js/jquery-1.11.3.min.js')}}></script>
<![endif]-->
  <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src={{asset('assets/js/jquery.mobile.custom.min.js')}}>" + "<" + "/script>");
  </script>

  <!-- inline scripts related to this page -->
  <script>
 	    $(document).ready(function(){
		
 	    });
		
 	    // ini adalah proses submit data menggunakan Ajax
 	    $("#btnRegister").click(function(event) {
 	      // kasih ini dong biar gag hard reload
 	      event.preventDefault();
 	      $.ajax({
 	        url: '{{route("register.store")}}', // url post data
 	        dataType: 'JSON',
 	        type: 'POST',
 	        contentType: 'application/x-www-form-urlencoded',
 	        data: $("#formRegister").serialize(), // data tadi diserialize berdasarkan name
 	        success: function( data, textStatus, jQxhr ){
 	            console.log('status =>', textStatus);
 	            console.log('data =>', data);
				// clear validation error messsages
 	            $('#errMsg').addClass('hide');
 	            $('#errData').html('login');
 	            // scroll up
 	            // $('html, body').animate({
 	            //     scrollTop: $("#nav-top").offset().top
 	            // }, 2000);
 	            // tampilkan pesan sukses
 	            showNotifSuccess();
 	            // clear data inputan
 	            $('#formRegister').find("input[type=text], textarea").val("");
 	            // kembali kelist User
              window.location.replace('{{route("page.login")}}');
 	        },
 	        error: function( data, textStatus, errorThrown ){
 	          var messages = jQuery.parseJSON(data.responseText);
 		      console.log( errorThrown );
 		      // $('html, body').animate({
 		      //     scrollTop: $("#nav-top").offset().top
 		      // }, 2000);
 		      // scroll up 
 		      // tampilkan pesan error
 		      $('#errData').html('');
 		      $('#errMsg').addClass('alert-warning');
 		      $('#errMsg').removeClass('hide');
 		      $.each(messages, function(i, val) {
 		        $('#errData').append('<p>'+ i +' : ' + val +'</p>')
 		        console.log(i,val);
 		      });          
 		      // jangan clear data
 	        }
 	      });
 	    });
		
 	    function showNotifSuccess(){
 	    	$.gritter.add({
				title: 'Succes',
				text: 'Data User berhasil di tambahkan',
				class_name: 'gritter-info'
			});
			
 		  }
 	</script>

  <script type="text/javascript">
    jQuery(function($) {
      $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible'); //hide others
        $(target).addClass('visible'); //show target
      });
    });



    //you don't need this, just used for changing background
    jQuery(function($) {
      $('#btn-login-dark').on('click', function(e) {
        $('body').attr('class', 'login-layout');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
      });
      $('#btn-login-light').on('click', function(e) {
        $('body').attr('class', 'login-layout light-login');
        $('#id-text2').attr('class', 'grey');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
      });
      $('#btn-login-blur').on('click', function(e) {
        $('body').attr('class', 'login-layout blur-login');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'light-blue');

        e.preventDefault();
      });

    });
  </script>
</body>

</html>