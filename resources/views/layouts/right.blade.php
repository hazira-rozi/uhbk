<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">
            Server Time
        </div>
    </div>
    <div class="panel-body" align="center">
        <strong><div id="txt"></div></strong>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
             <i class="fa fa-user"></i> <strong> {{Auth::User()->fullname}}</strong>
        </div>

    </div>
        <div class="panel-body" align="center">
            <ul class="list-group">
            <li class="list-group-item">
            {{--<a href=""><span class="fa fa-edit"></span> </a>--}}
                {{--{{$img='image'/Auth::User()->image}}--}}
                <style>
                    #avatars {
                        /* This image is 687 wide by 1024 tall, similar to your aspect ratio */
                        background-image: url({{URL(Auth::User()->image)}});

                        /* make a square container */
                        width: 100px;
                        height: 100px;

                        /* fill the container, preserving aspect ratio, and cropping to fit */
                        background-size: cover;

                        /* center the image vertically and horizontally */
                        background-position: center;

                        /* round the edges to a circle with border radius 1/2 container size */
                        border-radius: 50%;
                    }
                </style>

                <div id="avatars"></div>


             {{--@if(Auth::User()->role == 'Guru')--}}
                {{--@if(!file_exists('http://localhost/image/teacher/'.Auth::User()->nisn.'.jpg'))--}}
                    {{--<img src="http://localhost/image/teacher/default.jpg" height="100"  class="img-circle center-container">--}}
                {{--@else()--}}
                    {{--{{HTML::image("http://localhost/image/teacher/".Auth::User()->nisn.".jpg",array('height'=>100, 'class=img-circle center-container'))}}--}}
                {{--@endif--}}
             {{--@elseif(Auth::User()->role == 'siswa')--}}
                {{--@if(!file_exists('http://localhost/image/student/'.Auth::User()->nisn.'.jpg'))--}}
                    {{--{{HTML::image("http://localhost/image/teacher/".Auth::User()->nisn.".jpg",array('height'=>100,  'class=img-circle center-container'))}}--}}
                {{--@else--}}
                    {{--<img src="http://localhost/image/student/123.jpg" height="100"  class="img-circle center-container">--}}
                {{--@endif--}}

            {{--@endif--}}
            </li>
            <li class="list-group-item">
            <span class="text-center">{{Auth::User()->role}}</span>
            </li>
            </ul>
        </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-bell fa-fw"></i> Notifications Panel
        </div>

    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="list-group">
            <a href="#" class="list-group-item">
                <i class="fa fa-comment fa-fw"></i> New Comment
                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                </span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                </span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-envelope fa-fw"></i> Message Sent
                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                </span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-tasks fa-fw"></i> New Task
                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                </span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                <span class="pull-right text-muted small"><em>11:32 AM</em>
                </span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                <span class="pull-right text-muted small"><em>11:13 AM</em>
                </span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-warning fa-fw"></i> Server Not Responding
                <span class="pull-right text-muted small"><em>10:57 AM</em>
                </span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                <span class="pull-right text-muted small"><em>9:49 AM</em>
                </span>
            </a>

        </div>
        <!-- /.list-group -->
        <a href="#" class="btn btn-default btn-block">View All Alerts</a>
    </div>
    <!-- /.panel-body -->
</div>

