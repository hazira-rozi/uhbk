<?php
/**
 * Created by PhpStorm.
 * User: Hazira
 * Date: 20/02/2017
 * Time: 10:46
 */
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;

class LogoutController extends Controller
{




    public function logout()
    {

        Session::flush();
        return redirect('/');

    }
}
