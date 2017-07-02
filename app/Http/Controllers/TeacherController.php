<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Teacher;
use App\Http\Middleware;
use Illuminate\Http\Request;
use DB;
Use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class TeacherController extends Controller
{
    protected $redirectTo = '/index';

    protected $request;

    public function __construct(Request $request)
    {
        $this->middleware('teacher');
    }

    public function confirmation(Request $request){
        $confirmedToken = DB::table('tokens')->where('name', $request['name'])->value('token');
        if (!$request['token'] == null && $confirmedToken == $request['token']) {


            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255|unique:teachers',
                'fullname' => 'required|max:255',
                'matapelajaran' => 'required|max:255',
                'image' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect('index')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                Teacher::create([
                    'name' => $request['name'],
                    'fullname' => $request['fullname'],
                    'matapelajaran' => $request['matapelajaran'],
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
