<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inicio de Sesión</title>
        <!-- Tell the browser to be responsive to screen width -->
  		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
         <!-- Tell the browser to be responsive to screen width -->
		  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		  <!-- Bootstrap 3.3.7 -->
		  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
		  <!-- iCheck -->
		  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/iCheck/square/blue.css")}}">

		  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->

		  <!-- Google Font -->
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        
		<div class="login-box">
		  <div class="login-logo">
		    <a href="#"><b>Generador</b>QR</a>
		  </div>
		  <!-- /.login-logo -->
		  <div class="login-box-body">
		    <p class="login-box-msg">Inicia Sesión</p>

		    @yield("content")

		    <!-- <div class="social-auth-links text-center">
		      <p>- OR -</p>
		      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
		        Facebook</a>
		      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
		        Google+</a>
		    </div> -->
		    <!-- /.social-auth-links -->

		    <!-- <a href="#">I forgot my password</a><br>
		    <a href="register.html" class="text-center">Register a new membership</a> -->

		  </div>
		  <!-- /.login-box-body -->
		</div>
		<!-- /.login-box -->
        <!-- jQuery 3 -->
		<script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
		<!-- iCheck -->
		<script src="{{asset("assets/$theme/plugins/iCheck/icheck.min.js")}}"></script>
		<script>
		  $(function () {
		    $('input').iCheck({
		      checkboxClass: 'icheckbox_square-blue',
		      radioClass: 'iradio_square-blue',
		      increaseArea: '20%' /* optional */
		    });
		  });
		</script>
    </body>
</html>