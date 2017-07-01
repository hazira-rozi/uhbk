<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UHBK') }}</title>
    <!--Favicon-->
    <link rel="shortcut icon" href={{asset('images/icon/favicon.ico')}}>
    <!-- Styles -->
    <!--<link href="css/app.css" rel="stylesheet"> -->
    <script language="JavaScript">
        function fullScreen(theURL) {
            window.open('fullscreen=yes, scrollbars=auto');
        }
        // End -->
    </script>
    <script src='js/jquery.min.js'></script>
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
    <script src='js/time.js'></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/fonts-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">


    <script>
        window.UHBK =<?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script>
        var auth = 0;
        @if(Auth::check())
             auth = '{{Auth::user()->name}}';
        @endif
    </script>



    <noscript>
        <style>html{display:none;}</style>
        <meta http-equiv="refresh" content="0.0;url=no-js">
    </noscript>

</head>
<body onload="startTime()">

@if (Session::has('status'))
    <div class="alert alert-success">
        {{ Session::get('status') }}
    </div>
@endif
<nav class="navbar navbar-default navbar-static-top" >
    <div class="container">
        <div class="navbar-header">
            {{Session::get("message")}}
                    <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->

            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="glyphicon glyphicon-education"></span> {{ config('app.name', 'UHBK') }}
            </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            &nbsp;
            <!-- Right Side Of Navbar -->
            <!-- Authentication Links -->
            @if (Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            @else
                 <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown" class="dropdown-toggle"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">

                    @if(Auth::User()->role == 'Guru')
                        @if(!file_exists('http://localhost/image/teacher/'.Auth::User()->nisn.'.jpg'))
                            <img src="http://localhost/image/teacher/default.jpg" height="20" vertical-align="center">
                        @else()
                            {{HTML::image("http://localhost/image/teacher/".Auth::User()->nisn.".jpg",array('height'=>20, 'vertical-align'=>'center'))}}
                        @endif
                    @elseif(Auth::User()->role == 'siswa')
                        @if(!file_exists('http://localhost/image/student/'.Auth::User()->nisn.'.jpg'))
                            {{HTML::image("http://localhost/image/teacher/".Auth::User()->nisn.".jpg",array('height'=>20, 'vertical-align'=>'center'))}}
                        @else
                            <img src="http://localhost/image/student/123.jpg" height="20" vertical-align="center">
                        @endif

                    @endif
                    {{Auth::User()->fullname}}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><div class="navbar-text text-info">{{Auth::User()->fullname}}</div> </li>
                        <li><div class="navbar-text">{{Auth::User()->role}}</div> </li>
                        <li class="divider"></li>
                        <li><a class="navbar-link"  href="/profile-editform">Edit Profile</a></li>
                        <li class="divider"></li>
                        <li><a class="navbar-link" href="logout">Logout</a> </li>
                    </ul>
                </li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                    <li><a href="#"></a></li>
                    <li><div class="navbar-text"><span class="glyphicon glyphicon-time"></span></div></li>
                    <li><div class="navbar-text" id="txt"></div></li>

                </ul>
            @endif

        </div>
    </div>
</nav>

@yield('content')

</body>
</html>
