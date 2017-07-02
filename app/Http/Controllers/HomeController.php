<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware;
use Illuminate\Support\Facades\Auth as auths;
use Mockery\Matcher\Closure;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   if(auths::User()->status=='blocked'){
            return view('users/blocked');
        }else{      
            if(auths::User()->role=="student"){
                if(auths::User()->status=="active"){
                    return view('student/index');
                }else{
                    return view('student/confirmation');
                }

            }
            else if(auths::User()->role=="teacher"){
                if(auths::User()->status=="active"){
                    return view('teacher/index');
                }
                else{
                    return view('teacher/confirmation');
                }

            }
            else if(auths::User()->role=="admin") {
                return view('admin/index');
            }
        }
    }

    public function teacherindex()
    {
       return view('teacher/home');
    }




}
