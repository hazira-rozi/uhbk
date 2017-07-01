
@extends('...layouts.apps')
@section('content')

    <div class="col-lg-12 ">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-plus"></i> Tambah Soal
                    </div>

                </div>
                <div class="panel-body">
                    <form>
                        <span class="input-group-addon">Pertanyaan</span>
                        <textarea id="soal" placeholder="Soal" class="form-control my-editor" placeholder="Ketikkan Soal di sini" >

                        </textarea>
                        <br/>
                            <div class="col-lg-12">
                                 @for($option='A'; $option<='E'; $option++)
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <span class="input-group-addon">{{$option}}</span><textarea class="form-control my-editor" name="{{$option}}" placeholder="Jawaban {{$option}}"></textarea>
                                        </div>
                                    </div>

                                @endfor
                                <div class="col-lg-3" >
                                    <div class="input-group">
                                        <span class="input-group-addon">Kunci Jawaban</span>
                                           <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                           </select>
                                   </div>
                                </div>
                            </div>


                        <div class="form-group">

                        </div>
                        <br/>
                        <div class="col-lg-2 col-lg-push-10">
                        <button type="submit" class="btn btn-primary btn-twitter" title="Simpan">
                           <i class="fa fa-save"></i> Simpan
                        </button>
                        </div>
                    </form>
                </div>
            </div>

</div>

@endsection
@section ('script')
    <script src="../assets/js/scripts/lfm.js"></script>
@endsection