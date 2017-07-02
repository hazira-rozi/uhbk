<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Clas;
use App\Http\Middleware;
use Illuminate\Http\Request;
use DB;
Use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class ClassController extends Controller
{
    protected $redirectTo = '/index';

    protected $request;

    public function __construct(Request $request)
    {
        $this->middleware('admin');
    }

//{{--'class_id','class_name','teacher_id','number_of_students',--}}
    public function index(){
        $class = DB::select('select * from clas');
        return view('data/class_list',['class'=>$class]);
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'class_name' => 'required|max:255|unique:clas',
            'teacher_id' => 'required|max:255',
            'number_of_students' => 'required|max:2',

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        } else {
            Clas::create([
                'class_name' => $request['class_name'].str_replace(" ", "_"),
                'teacher_name' => $request['teacher_id'],
                'number_of_students' => $request['number_of_students'],
            ]);
        
        $class_name = $request['class_name'];
        return redirect('showClass')->with('message', "Penambahan")
                                    ->with('object',"Kelas")
                                    ->with('mtype', "success")
                                    ->with('action', "ditambahkan")
                                    ->with('kelas', $class_name);
        }
    }

    public function delete($class_name){
        $class = DB::table('clas')
                    ->where('class_name',$class_name)
                    ->delete();
        return redirect('showClass')->with('message', "Penghapusan")
                                    ->with('object',"Kelas")
                                    ->with('mtype', "warning")
                                    ->with('action', "dihapus")
                                    ->with('kelas', $class_name);
        }
    
}

