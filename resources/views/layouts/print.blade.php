<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UHBK - Ujian Harian Berbasis Komputer</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/images/icon/favicon.png" >
    <!-- Bootstrap Core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="myFunction()">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><strong><i class="glyphicon glyphicon-education"></i> {{ config('app.name', 'UHBK') }}</strong></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">


            <li class="navbar-text">
                Ujian Harian Berbasis Komputer
            </li>
            <li class="navbar-text">
                School Name
            </li>
            <li class="navbar-text">
                Hazira Fakhrurrozi Amir <i class="fa fa-copyright"></i> 2017
            </li>


        <!-- /.dropdown -->

            <!-- /.dropdown -->

        </ul>


    </nav>
    <div class="row">
        @yield('content')


    </div>


    <!-- /#page-wrapper -->
    {{--<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation" style="margin-top: 0">--}}
    {{--<ul class="nav navbar-top-links navbar-left">--}}
    {{--<li class="navbar-text">--}}
    {{--Hazira Fakhrurrozi Amir <i class="fa fa-copyright"></i> 2017--}}
    {{--</li>--}}
    {{--<li class="navbar-top-links">--}}
    {{----}}
    {{--</li>--}}
    {{--<li class="navbar-top-links">--}}
    {{----}}
    {{--</li>--}}

    {{--</ul>--}}



    {{--</nav>--}}
</div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->



<!-- Bootstrap Core JavaScript -->
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="../assets/dist/js/sb-admin-2.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<!-- Metis Menu Plugin JavaScript -->
<script src="../assets//vendor/metisMenu/metisMenu.min.js"></script>

<script>
    var route_prefix = "{{ url(config('lfm.prefix')) }}";
</script>
<!-- Laravel File manager -->
<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
</script>
<script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
</script>


<!-- Morris Charts JavaScript -->
<script src="../assets/vendor/raphael/raphael.min.js"></script>
<script src="../assets/vendor/morrisjs/morris.min.js"></script>
<script src="../assets/data/morris-data.js"></script>


<!-- Navbar Time -->
<script src='../assets/js/time.js'></script>

<script>
    function myFunction() {
        window.print();
    }
</script>

</body>

</html>
