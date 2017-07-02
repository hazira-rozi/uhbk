<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Student;
use App\Teacher;
use App\Token;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $request;



    public function __construct(Request $request)
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
            return Validator::make($data, [
                'name' => 'required|max:255|unique:users',
                'fullname' => 'required|max:255',
                'password' => 'required|min:6|confirmed',
            ]);

    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        Token::create([
            'name' => $data['name'],
            'token'=> dechex(rand(1111111111,2009999999)) ,
            'use_status'=>'unused',
        ]);

        if($data['role']=='student') {
            $roles=$data['role'];
        }else if(($data['role']=='teacher')) {
            $roles=$data['role'];
        }
            return
                User::create([
                    'name' => $data['name'],
                    'fullname' => $data['fullname'],
                    'role' => $roles,
                    'password' => bcrypt($data['password']),

                ]);
    }

    protected function edit(array $data)
    {

        return User::edit([
            'name' => $data['name'],
            'nisn' => $data['nisn'],
            'fullname' => $data['fullname'],
            'password' => bcrypt($data['password']),
            'images' => $data['images']
        ]);
    }
}
