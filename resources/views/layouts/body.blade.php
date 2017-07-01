@yield('header')
<body onload="startTime()">


<nav class="navbar navbar-default navbar-static-top" >
    <div class="nav">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding image -->

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
                                @if(!file_exists('http://localhost/image/teacher/123.jpg'))
                                    <img src="http://localhost/image/teacher/default-avatar.png" height="20" vertical-align="center">
                                @else()
                                    <img src="http://localhost/image/teacher/123.jpg" height="20" vertical-align="center">
                                @endif
                            @elseif(Auth::User()->role == 'siswa')
                                @if(!file_exists('http://localhost/image/student/123.jpg'))
                                    <img src="http://localhost/image/student/default-avatar.png" height="20" vertical-align="center">
                                @else
                                    <img src="http://localhost/image/student/123.jpg" height="20" vertical-align="center">
                                @endif

                            @endif
                            {{Auth::User()->fullname}}<b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li>

                            </li>
                            <li ><a href="#">{{Auth::User()->name}}</a></li>
                            <li><a href="#">{{Auth::User()->role}}</a> </li>
                            <li class="divider"></li>
                            <li><a href="profile-editform">Edit Profile Data</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/logout') }}">Logout</a></li>

                        </ul>
                    </li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                    <li><a href="#">{{Auth::User()->name}}</a></li>
                    <li><div class="navbar-text"><span class="glyphicon glyphicon-time" vertical-align="center"></span></div></li>
                    <li><div class="navbar-text"><div id="txt" vertical-align="center"></div></div></li>

                </ul>
            @endif

        </div>
    </div>
</nav>
@if (Session::has('message'))

    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <h3 align="center"><strong>{{ Session::get('message') }}</strong></h3>
    </div>

@endif
@yield('content')

</body>
</html>
