@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile/edit') }}">
                         {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{Auth::User()->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Full Name</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control" name="fullname" value="{{Auth::User()->fullname}}" required autofocus="" >

                                @if ($errors->has('fullname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--<div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">--}}
                            {{--<label for="nisn" class="col-md-4 control-label">ID Number (Teacher : NIP, Student : NISN)</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="nisn" type="number" class="form-control" name="nisn" value="{{Auth::User()->NISN}}" required >--}}

                                {{--@if ($errors->has('nisn'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('nisn') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">--}}
                            {{--<label for="class" class="col-md-4 control-label">Class (Untuk Guru Isikan Guru)</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="class" type="text" class="form-control" name="class" value="{{Auth::User()->class}}" required>--}}

                                {{--@if ($errors->has('class'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('class') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('tahunmasuk') ? ' has-error' : '' }}" required>--}}
                            {{--<label for="tahunmasuk" class="col-md-4 control-label">Year</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="tahunmasuk" type="number" class="form-control" name="tahunmasuk" value="{{Auth::User()->tahunmasuk}}" required >--}}

                                {{--@if ($errors->has('tahunmasuk'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('tahunmasuk') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">Profile Picture</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="image" type="image" class="form-control" name="image" value="{{Auth::User()->image}}" required >--}}

                                {{--@if ($errors->has('image'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('image') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="input-group">
                           <span class="input-group-btn">
                             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                               <i class="fa fa-picture-o"></i> Choose
                             </a>
                           </span>
                           <input id="thumbnail" class="form-control" type="text" name="image" value="{{Auth::User()->image}}" required>
                         </div>
                         <img id="holder" style="margin-top:15px;max-height:100px;">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
