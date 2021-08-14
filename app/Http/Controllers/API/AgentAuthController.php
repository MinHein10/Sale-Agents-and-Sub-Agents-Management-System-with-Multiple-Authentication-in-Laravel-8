<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AgentAuthController extends Controller
{

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'township'=>'required|max:55',
            'region'=>'required|max:55',
            'phno'=>'required|max:55',
            'address'=>'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = Agent::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response([ 'agent' => $user, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = Agent::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                return response($response, 200);
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'Agent does not exist'];
            return response($response, 422);
        }
    }
    public function dashboard(Request $request){
        // $customer = $request->user();
    }
}
