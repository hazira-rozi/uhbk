@extends('...layouts.table')
@section('content')
    <div class="col lg-12">
    
         @if(Session::has('message'))
            <div class="alert alert-{{Session::get('mtype')}} alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{Session::get('message')}} {{Session::get('object')}} Sukses. {{Session::get('object')}} yang {{Session::get('action')}}: <strong>{{Session::get('obj')}}</strong>
            </div>

        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="fa fa-users"></i> Daftar Pengguna aaaaa
                </div>
                <div></div>
            </div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Registered at</th>
                        <th>Delete</th>
                        <th>Token</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    {{--@for($i=0; $i<= count($user); $i++)--}}
                        {{--@if($i%2 != 0)--}}
                    @foreach($users as $user)
                            <tr class="odd">
                                <td>{{$user->name}}</td>
                                <td>{{$user->fullname}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->status}}</td>
                                <td>{{$user->created_at}}</td>
                                <td align="center">
                                    <a  id="linkActionDelete" href=javascript:void(0) title="Hapus Pengguna"          onclick="alertDialogUser('{{$user->name}}','{{$user->fullname}}','delete',       'Penghapusan Akun', 'Apakah anda yakin untuk menghapus akun : ','user/delete/{{$user->name}}');">
                                        <i class="fa fa-trash" style="color:red"></i></a>
                                </td>
                                <td align="center" >
                                    <a title="Print token" target="_blank" href={{URL('print_token/'.$user->name)}}><i class="fa fa-key" ></i></a>
                                </td>
                                @if($user->status  !="blocked" )
                                    @if($user->status =="active")
                                            
                                        <td align="center">
                                        <a  id="linkActionBlock" href=javascript:void(0) title="Blokir Pengguna"          onclick="alertDialogUser('{{$user->name}}','{{$user->fullname}}','block',       'Pembekuan Akun', 'Apakah anda yakin untuk membekukan akun : ','user/block/{{$user->name}}');">
                                        <i class="fa fa-lock" style="color:red"></i></a>
                                        </td>
                                       
                                    @else
                                        <td align="center"><i class="fa fa-lock" style="color:gray"></i></td>
                                    @endif
                                @else
                                    <td align="center">
                                        <a  id="linkActionUnblock" href=javascript:void(0) title="Aktifkan Pengguna"          onclick="alertDialogUser('{{$user->name}}','{{$user->fullname}}','unblock',       'Pengaktifan Akun', 'Apakah anda yakin untuk mengaktifkan akun : ','user/unblock/{{$user->name}}');">
                                     <i class="fa fa-unlock" style="color:green"></i></a></td>
                                @endif
                            </tr>
                     @endforeach
                        <tfoot>
                            <tr>
                                <th>Username</th>
                                <th>Fullname</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Registered at</th>
                                <th>Delete</th>
                                <th>Token</th>
                                <th>Action</th>
                            </tr>
                    </tfoot> 
                    </tbody>
                </table>
            </div>
        </div>
        @include('modals/user')
    </div>

    
@endsection
