@extends('...layouts.apps')
@section('content')




    <div class="col-lg-12 ">
        <div class=" panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-user"></i> User Info
            </div>
            <div class="panel-body">
            <!-- Profile Photo -->
                <div class="col-lg-4">
                    @if(Auth::User()->role == 'Guru')
                        @if(!file_exists('http://localhost/image/teacher/'.Auth::User()->nisn.'.jpg'))
                            <img src="http://localhost/image/teacher/default.jpg" height="300"  class="img-rounded center-container">
                        @else()
                            {{HTML::image("http://localhost/image/teacher/".Auth::User()->nisn.".jpg",array('height'=>300, 'class=img-rounded center-container'))}}
                        @endif
                     @elseif(Auth::User()->role == 'siswa')
                        @if(!file_exists('http://localhost/image/student/'.Auth::User()->nisn.'.jpg'))
                            {{HTML::image("http://localhost/image/teacher/".Auth::User()->nisn.".jpg",array('height'=>300,  'class=img-rounded center-container'))}}
                        @else
                            <img src="http://localhost/image/student/123.jpg" height="300"  class="img-rounded center-container">
                        @endif

                    @endif
                </div>
            <!-- //Profile Photo -->
            <!-- Profile Info -->
             <div class="col-lg-7 col-lg-push-1">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="text-right"><a href="/profile-editform"><i class="fa fa-edit"></i> Edit Profile Info </a></span>
                        </li>
                        <li class="list-group-item">
                        <strong><i class="fa fa-at"></i></strong> Username : <strong>{{Auth::User()->name}}</strong>
                        </li>
                        <li class="list-group-item">
                            <strong><i class="fa fa-user"></i></strong> Fullname : <strong>{{Auth::User()->fullname}}</strong>
                        </li>
                    </ul>

                </div>

                </div>

            </div>
        </div>


    </div>

@endsection
