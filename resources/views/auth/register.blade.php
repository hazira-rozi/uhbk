@extends('...layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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

                        <div class="input-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <select   class="form-control" name="role" id="role" required >
                                <option>Role</option>
                                <option value="teacher">Guru</option>
                                <option onclick="disableElement()" value="student">Siswa</option>    
                            </select>
                            
                            <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>
                            
                        </div>

                        @if ($errors->has('role'))
                            <span class="text-danger text-center">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif  
                        <br/>

                        <script>
                            function disableElement() {
                                document.getElementById("nisn").disabled = true;
                        }
                        </script>
                        <div class="input-group{{ $errors->has('nisn') ? ' has-error' : '' }}">
                            <input id="nisn" type="number" class="form-control" name="nisn" value="{{ old('nisn') }}" required autofocus placeholder="NISN" >
                            <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>
    
                        </div>
                        @if ($errors->has('fullname'))
                            <span class="text-danger text-center">
                                <strong>{{ $errors->first('fullname') }}</strong>
                            </span>
                        @endif    
                        <br/>

                        <div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">
                            <label for="nisn" class="col-md-4 control-label">ID Number (Teacher : NIP, Student : NISN)</label>

                            <div class="col-md-6">
                                <input id="nisn" type="number" class="form-control" name="nisn" value="{{ old('nisn') }}" required>

                                @if ($errors->has('nisn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nisn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
                            <label for="class" class="col-md-4 control-label">Class (Untuk Guru Isikan Guru)</label>

                            <div class="col-md-6">
                                <input id="class" type="text" class="form-control" name="class" value="{{ old('class') }}" required>

                                @if ($errors->has('class'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tahunmasuk') ? ' has-error' : '' }}">
                            <label for="tahunmasuk" class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                                <input id="tahunmasuk" type="number" class="form-control" name="tahunmasuk" value="{{ old('tahunmasuk') }}" required>

                                @if ($errors->has('tahunmasuk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahunmasuk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('teachertoken') ? ' has-error' : '' }}">
                            <label for="teachertoken" class="col-md-4 control-label">Token (Hanya untuk guru. Hubungi Admin)</label>

                            <div class="col-md-6">
                                <input id="teachertoken" type="number" class="form-control" name="teachertoken" value="{{ old('teachertoken') }}" >

                                @if ($errors->has('teachertoken'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('teachertoken') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

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
