<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Http\Middleware;
use Illuminate\Http\Request;
use DB;
Use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class StudentController extends Controller
{
    protected $redirectTo = '/index';

    protected $request;

    public function __construct(Request $request)
    {
        $this->middleware('student');
    }

//    public function validator(Array $data){
//        $confirmedToken = DB::table('token')->where('name', $data['name'])->value('token');
//        if (!$data['token'] == null && !$confirmedToken == $data['token']) {
//            return Validator::make($data, [
//                'usestatus'=>'used'
//            ]);
//        }else{
//            'fuck you';
//        }
//        return Validator::make($data, [
//            'name' => 'required|max:255|unique:users',
//            'nisn' => 'required|max:30',
//            'fullname' => 'required|max:255',
//            'class' => 'required|max:255',
//            'tahunmasuk' => 'required|max:4|min:4',
//            'image' => 'required',
//        ]);
//    }

    public function confirmation(Request $request){
        $confirmedToken = DB::table('tokens')->where('name', $request['name'])->value('token');
        if (!$request['token'] == null && $confirmedToken == $request['token']) {


            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255|unique:students',
                'nisn' => 'required|max:30',
                'fullname' => 'required|max:255',
                'class' => 'required|max:255',
                'tahunmasuk' => 'required|max:4|min:4',
                'image' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect('index')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                Student::create([
                    'name' => $request['name'],
                    'fullname' => $request['fullname'],
                    'nisn' => $request['nisn'],
                    'kelas' => $request['class'],
                    'tahunmasuk' => $request['tahunmasuk'],


                ]);
                DB::table('tokens')
                    ->where('name', Auth::User()->name)
                    ->update([
                        'use_status' => 'used',]);
                DB::table('users')
                    ->where('name', Auth::User()->name)
                    ->update([
                        'image' => $request['image'],
                        'status' => 'active']);
                return redirect('index')->with('message', "Account Activated");
            }
        }else{
            return [$confirmedToken, $request['token']];
        }


    }
}
