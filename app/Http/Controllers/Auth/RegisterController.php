<?php

namespace App\Http\Controllers\Auth;

use App\Model\SysUserGroup;
use App\Model\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'username' => 'required|string|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
//    }

    protected function register()
    {

        return view('auth.register',['groups'=>SysUserGroup::pluck('name','id')]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Model\User
     */
    protected function create(Request $request)
    {
        $validatedData = $this->validate($request,[
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
            'sys_group_id' => 'required',
        ]);
        User::create([
            'username' => $request->username,
            'sys_group_id' => $request->sys_group_id,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('admin_dashboard');
    }

}
