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
                    <i class="fa fa-users"></i> Daftar Kelas
                </div>

            </div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Kelas</th>
                        <th>Guru Kelas</th>
                        <th>Jumlah Siswa</th>
                        <th>Tanggal Input</th>
                        <th>Update terakhir</th>
                        <th>Hapus</th>
                        <th>Edit</th>                        
                    </tr>
                    </thead>
                    <tbody>

                    {{--@for($i=0; $i<= count($user); $i++)--}}
                        {{--@if($i%2 != 0)--}}
                    @foreach($class as $clas)
                            <tr class="odd">
                                <td>{!! str_replace('_',' ',$clas->class_name )!!}</td>
                                <td>{{$clas->teacher_name}}</td>
                                <td>{{$clas->number_of_students}}</td>
                                <td>{{$clas->created_at}}</td>
                                <td>{{$clas->updated_at}}</td>
                                <td align="center"><a title="Hapus Kelas" href={{URL('class/delete/'.$clas->class_name)}}><i class="fa fa-trash"></i></a></td>
                                <td align="center"><a title="Edit Kelas" href={{URL('class/edit/'.$clas->class_name)}}><i class="fa fa-edit"></i></a></td>

                            </tr>
                     @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection