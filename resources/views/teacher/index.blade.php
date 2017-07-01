
@extends('...layouts.apps')

@section('content')

    <div class="col-lg-12 ">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-user"></i> User Info
                    </div>

                </div>
                <div class="panel-body">
                    <ul class="panel-body">
                       <li>You are logged in!</li>
                       <li>Name : {{Auth::user()->name}}</li>
                       <li>Name : {{Auth::user()->teachertoken}}</li>
                       <li><p class="panel-body">yguygbg uytvyuv uyv etw bjka usehd ahf adhf asdf asdhf asdhf asdf ajshdf jasdf asd fasdhf asd
                       k nasdfhasdfhasdfhasdfhasdfa sdf </p> </li>
                   </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            @include('...layouts/right')
        </div>
    </div>


@endsection


