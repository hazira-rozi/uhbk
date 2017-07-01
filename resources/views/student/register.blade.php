@extends('...layouts.landing')

@section('content')
<div class="container">
    <div class="row">
        <br/>
    </div>
    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form name="myForm" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data" files="true">
                         {{ csrf_field() }}

                        
                        <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">
                            <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>
                        </div>
                        @if ($errors->has('name'))
                            <span class="text-danger text-center">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <br/>
                        <div class="input-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                            
                            <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" required autofocus placeholder="Fullname">
                            <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>
    
                        </div>
                        @if ($errors->has('fullname'))
                            <span class="text-danger text-center">
                                <strong>{{ $errors->first('fullname') }}</strong>
                            </span>
                        @endif    
                        <br/>

                        <input type="hidden" name="role" id="role" value="student">

                        


                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password"  required autofocus placeholder="Password" >
                            <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>

                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger text-center">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <br/>

                        <div class="input-group">
                            <input id="class" type="password" class="form-control" name="password_confirmation"  required autofocus placeholder="Password Confirmation" >

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>
                            {{--</div>--}}
                        </div>
                        <br/>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
