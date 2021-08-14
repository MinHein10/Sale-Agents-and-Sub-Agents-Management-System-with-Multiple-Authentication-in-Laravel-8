<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:agent')->except('logout');
        $this->middleware('guest:subagent')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }



    public function showAgentLoginForm()
    {
        return view('auth.login', ['url' => 'agent']);
    }


    public function agentLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('agent')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/agent');
            // return url('/agent');

        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showSubAgentLoginForm(){
        return view('auth.login', ['url' => 'subagent']);
    }

    public function subagentLogin(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::guard('subagent')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/subagent');

        }
        return back()->withInput($request->only('email','remember'));
    }


}
