@extends('...layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tambah Kelas Baru</div>
                    <div class="panel-body">
                        <form name="myForm" class="form-horizontal" role="form" method="POST" action="{{ url('/class_add') }}" enctype="multipart/form-data" files="true">
                            {{ csrf_field() }}
                            {{--'class_id','class_name','teacher_id','number_of_students',--}}

                            <div class="input-group{{ $errors->has('class_name') ? ' has-error' : '' }}">

                                <input id="class_name" type="text" class="form-control" name="class_name" value="{{ old('class_name') }}" required autofocus placeholder="Nama Kelas">
                                <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>
                            </div>
                            @if ($errors->has('class_name'))
                                <span class="text-danger text-center">
                                <strong>{{ $errors->first('class_name') }}</strong>
                            </span>
                            @endif
                            <br/>
                            <div class="input-group{{ $errors->has('teacher_id') ? ' has-error' : '' }}">

                                <input id="teacher_id" type="text" class="form-control" name="teacher_id" value="{{ old('teacher_id') }}" required autofocus placeholder="teacher_id">
                                <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>

                            </div>
                            @if ($errors->has('teacher_id'))
                                <span class="text-danger text-center">
                                <strong>{{ $errors->first('teacher_id') }}</strong>
                            </span>
                            @endif
                            <br/>

                            <div class="input-group{{ $errors->has('number_of_students') ? ' has-error' : '' }}">
                                <select   class="form-control" name="number_of_students" id="number_of_students" required >
                                    <option>number_of_students</option>
                                    @for($option='1'; $option<='40'; $option++)
                                        <option>{{$option}}</option>
                                    @endfor
                                </select>

                                <span class="input-group-addon"><strong><span class="text-danger">Required</span></strong></span>

                            </div>

                            @if ($errors->has('number_of_students'))
                                <span class="text-danger text-center">
                                <strong>{{ $errors->first('number_of_students') }}</strong>
                            </span>
                            @endif
                            <br/>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
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
