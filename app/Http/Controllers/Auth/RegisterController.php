<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Agent;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        // $this->middleware('guest:admin');
        // $this->middleware('guest:agent');
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
            'name' => ['required', 'string', 'max:255'],
            'township'=>['required','string','max:255'],
            'region'=>['required','string','max:255'],
            'phno'=>['required','string','max:255'],
            'address'=>['required','string','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function showAgentRegisterForm()
    {
        return view('auth.register', ['url' => 'agent']);
    }

    protected function createAgent(Request $request)
    {
        $this->validator($request->all())->validate();
        $writer = Agent::create([
            'name' => $request['name'],
            'region'=>$request['region'],
            'township'=>$request['township'],
            'phno'=> $request['phno'],
            'address'=>$request['address'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/agent');
    }

    public function showSubAgentRegisterForm(){
        return view('auth.register', ['url' => 'subagent']);
    }
}
