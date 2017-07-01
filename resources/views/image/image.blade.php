@extends('...layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/uploadImage') }}" enctype="multipart/form-data" files="true">
                         {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Select Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" required autofocus>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>

                    @if (Session::has('image'))
                        <div class="row" align="center">
                        <img src='images/{{Session::get('subdir')}}/{{Session::get('image')}}' height="100">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
