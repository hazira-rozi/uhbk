@extends('...layouts/landing')

@section('content')
<div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">Please Sign In</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-lg-12">
                        <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">

                        </div>
                        @if ($errors->has('name'))
                            <span class="text-danger text-center">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                            <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus placeholder="Password">

                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-6 ">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>


                    <!-- Change this to a button or input when using this as a form -->
                    <button type="submit" class="btn btn btn-primary btn-block">
                                                                                    Login
                                                                                </button>
                <div class="form-group">
                        <div class="col-md-8 ">


                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                            <a class="btn btn-link" href="{{ url('/student_reg') }}">
                                Register Siswa
                            </a>
                            <a class="btn btn-link" href="{{ url('/teacher_reg') }}">
                                Register Guru
                            </a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection  