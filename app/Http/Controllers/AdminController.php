<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
//use App\Admin;
use App\Http\Middleware;
use Illuminate\Http\Request;
use DB;
Use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class AdminController extends Controller
{
    protected $redirectTo = '/index';

    protected $request;

    public function __construct(Request $request)
    {
        $this->middleware('admin');
    }
}
