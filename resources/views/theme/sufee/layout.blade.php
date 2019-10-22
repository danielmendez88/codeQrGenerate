<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sicred - @yield('title')</title>
    <meta name="description" content="HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="{{ asset("img/favicon.ico") }}">

    <link rel="stylesheet" href="{{asset("assets/sufee/vendors/bootstrap/dist/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/sufee/vendors/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/sufee/vendors/themify-icons/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("assets/sufee/vendors/flag-icon-css/css/flag-icon.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/sufee/vendors/selectFX/css/cs-skin-elastic.css")}}">
    <link rel="stylesheet" href="{{asset("assets/sufee/vendors/jqvmap/dist/jqvmap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/sufee/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/sufee/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}">


    <link rel="stylesheet" href="{{asset("assets/sufee/assets/css/style.css")}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body>


    <!-- Left Panel -->
    @include("theme/sufee/aside")
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include("theme/sufee/header")
        <!-- /header -->
        <!-- Header-->

        @include("theme/sufee/breadcumbs")

        <div class="content mt-3">

            @yield("content")

            <!--/.col-->

            <!--/.col-->

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset("assets/sufee/vendors/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/popper.js/dist/umd/popper.min.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/sufee/assets/js/main.js")}}"></script>

    <script src="{{asset("assets/sufee/vendors/jqvmap/dist/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/jqvmap/dist/maps/jquery.vmap.world.js")}}"></script>
    <!--datatables-->
    <script src="{{asset("assets/sufee/vendors/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js")}}"></script>

    <script src="{{asset("assets/sufee/vendors/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("assets/sufee/vendors/datatables.net-buttons/js/buttons.colVis.min.js")}}"></script>
    <script src="{{asset("assets/sufee/assets/js/init-scripts/data-table/datatables-init.js")}}"></script>
    <!--jquery-->
    <script src="{{asset("assets/sufee/assets/js/toggle.js")}}"></script>
</body>

</html>
