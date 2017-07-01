@extends('...layouts.apps')

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
                        <form name="myForm" class="form-horizontal" role="form" method="POST" action="{{ url('/add_exam') }}" enctype="multipart/form-data" files="true">
                            {{ csrf_field() }}


                            <div class="input-group{{ $errors->has('exam_name') ? ' has-error' : '' }}">

                                <input id="exam_name" type="text" class="form-control" name="exam_name" value="{{ old('exam_name') }}" required autofocus placeholder="Mata Ujian">
                                <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>
                            </div>
                            @if ($errors->has('exam_name'))
                                <span class="text-danger text-center">
                                <strong>{{ $errors->first('exam_name') }}</strong>
                            </span>
                            @endif
                            <br/>
                            <div class="input-group{{ $errors->has('guru') ? ' has-error' : '' }}">

                                <input id="guru" type="text" class="form-control" name="guru" value="{{ old('guru') }}" required autofocus placeholder="ID Guru">
                                <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>

                            </div>
                            @if ($errors->has('fullname'))
                                <span class="text-danger text-center">
                                <strong>{{ $errors->first('guru') }}</strong>
                            </span>
                            @endif
                            <br/>
                            <div class="input-group{{ $errors->has('examdate') ? ' has-error' : '' }}">

                                <input id="examdate" type="text" class="form-control" name="examdate" value="{{ old('examdate') }}" required autofocus placeholder="examdate">
                                <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>

                            </div>
                            @if ($errors->has('fullname'))
                                <span class="text-danger text-center">
                                <strong>{{ $errors->first('guru') }}</strong>
                            </span>
                            @endif
                            
                            <br/>

                            <div class="input-group{{ $errors->has('class_id') ? ' has-error' : '' }}">

                                <input id="class_id" type="text" class="form-control" name="class_id" value="{{ old('class_id') }}" required autofocus placeholder="Kelas">
                                <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>

                            </div>
                            @if ($errors->has('class_id'))
                                <span class="text-danger text-center">
                                <strong>{{ $errors->first('class_id') }}</strong>
                            </span>
                            @endif
                            <br/>
                            
      
                            <br/>
                            


                            <input type="hidden" name="role" id="role" value="teacher">

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

@section('script')
<script>
            document.ready= $('#examdate').datetimepicker({
                        format:'Y-m-d H:i',
                        timepicker: true,
                        allowTimes:[
                                    '08:00','08:30','09:00','09:30','10:00','10:30',
                                    '11:00','11:30','12:00','12:30','13:00','13:30',
                                    ]
            }
        );
    </script>
@endsection
