<?php

namespace App\Http\Controllers\Auth;

use App\User;
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

        $confirmedToken = DB::table('token')->where('nip', $data['nisn'])->value('token');
        if (!$data['teachertoken'] == null && !$confirmedToken == $data['teachertoken']) {
            return Validator::make($data, [
                'teachertoken'=>'token-teacher'
            ]);
        }


        else{
            return Validator::make($data, [
                'name' => 'required|max:255',
                'nisn' => 'required|max:30|unique:users',
                'fullname' => 'required|max:255|unique:users',
                'class' => 'required|max:255',
                'tahunmasuk' => 'required|max:4|min:4',

                'password' => 'required|min:6|confirmed',

            ]);
        }
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if($data['teachertoken']==null) {
            $tokenvalue=0;
            $roles = "Siswa";

        }
        elseif($data['teachertoken']<=1000){
            $tokenvalue=$data['teachertoken'];
            $roles = "Guru";

        }else{
            $tokenvalue=$data['teachertoken'];
            $roles = "Admin";
        }

        return
            User::create([
                'name' => $data['name'],
                'fullname' => $data['fullname'],
                'role'=>$roles,
                'teachertoken'=>$tokenvalue,
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
