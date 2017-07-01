
<!--
 * Created by PhpStorm.
 * User: Hazira
 * Date: 20/03/2017
 * Time: 9:15
 */ -->

 @extends('...layouts.app')

 @section('content')
 @if(Session::has('message'))
         <div class="row">
             <div class="col-lg-12">
                 <div class="alert alert-{{Session::get('messageclass')}} alert-dismissable">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <i class="glyphicon glyphicon-info-sign"></i>  <strong>Success</strong> <br/>{{Session::get('message')}}
                 </div>
             </div>
         </div>
         @endif
 <div class="container">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                 <div class="panel-heading">Upload</div>
                 <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/image-upload') }}" enctype="multipart/form-data" files="true">
                          {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                             <label for="image" class="col-md-4 control-label">Image</label>

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
