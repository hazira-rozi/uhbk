@extends('...layouts.table')
@section('content')
    <div class="col lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="fa fa-users"></i> Daftar Pengguna
                </div>

            </div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Token</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    {{--@for($i=0; $i<= count($user); $i++)--}}
                    {{--@if($i%2 != 0)--}}
                    @foreach($tokens as $token)
                        <tr class="odd">
                            <td>{{$token->name}}</td>
                            <td>{{$token->token}}</td>
                            <td>{{$token->use_status}}</td>
                            <td align="center"><a href="{{URL('print_token/'.$token->name)}}" target="_blank"><i class="fa fa-print"></i> </a></td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection