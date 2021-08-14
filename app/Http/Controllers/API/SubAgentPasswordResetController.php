<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Notifications\SubAgentPasswordResetRequest;
use App\Notifications\SubAgentPasswordResetSuccess;
use App\Models\SubAgent;
use App\Models\SubAgentPasswordReset;
use Illuminate\Support\Str;

class SubAgentPasswordResetController extends Controller
{
    /**
     * Create token password reset
     *
     * @param  [string] email
     * @return [string] message
     */
    public function create(Request $request){
        $request->validate([
            'email'=>'required|string|email',
        ]);
        $user = SubAgent::where('email',$request->email)->first();

        if (!$user)
            return response()->json([
                "message" => "We can't find a user with that e-mail address."
            ], 404);


        $passwordReset = SubAgentPasswordReset::updateOrCreate(
            ['email'=>$user->email],
            [
                'email'=>$user->email,
                'token' => Str::random(60)
            ]
        );

        if ($user && $passwordReset)
                $user->notify(
                    new SubAgentPasswordResetRequest($passwordReset->token)
                );
                return response()->json([
                    'message' => 'We have e-mailed your password reset link!'
                ]);
    }


    /**
     * Find token password reset
     *
     * @param  [string] $token
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find($token){
        $passwordReset = SubAgentPasswordReset::where('token',$token)->first();

            if (!$passwordReset)
                return response()->json([
                    'message' => 'This password reset token is invalid.'
                ], 404);

            if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
                $passwordReset->delete();
                return response()->json([
                    'message' => 'This password reset token is invalid.'
                ], 404);
            }

            return response()->json($passwordReset);
    }

    /**
     * Reset password
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @param  [string] token
     * @return [string] message
     * @return [json] user object
     */
    public function reset(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed',
            'token' => 'required|string'
        ]);

        $passwordReset = SubAgentPasswordReset::where([
            ['token', $request->token],
            ['email', $request->email]
        ])->first();

        if (!$passwordReset)
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);

         $agent = SubAgent::where('email',$passwordReset->email)->first();

         if (!$agent)
            return response()->json([
                "message" => "We can't find a user with that e-mail address."
            ], 404);

        $agent->password = bcrypt($request->password);
        $agent->save();

        $passwordReset->delete();

        $agent->notify(new SubAgentPasswordResetSuccess($passwordReset));

        return response()->json($agent);
    }





}
