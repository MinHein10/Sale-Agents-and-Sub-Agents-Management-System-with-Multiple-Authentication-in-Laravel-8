<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;
use App\Models\Agent;
use App\Models\AgentPasswordReset;
use Illuminate\Support\Str;
use App\Http\Resources\AgentResource;

class AgentResetPasswordController extends Controller
{
    public function create(Request $request)
    {
            $request->validate([
                'email' => 'required|string|email',
            ]);
            $user = Agent::where('email', $request->email)->first();
            if (!$user){
                return $this->sendError('Validation Error.', ['error'=>"We can't find a user with that e-mail address."]);
            }
            $passwordReset = AgentPasswordReset::updateOrCreate(
                ['email' => $user->email],
                [
                    'email' => $user->email,
                    'token' => Str::random(60)
                ]
            );
            if ($user && $passwordReset)
                $user->notify(
                    new PasswordResetRequest($passwordReset->token)
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

        $passwordReset = AgentPasswordReset::where('token',$token)->first();

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

        $passwordReset = AgentPasswordReset::where([
            ['token', $request->token],
            ['email', $request->email]
        ])->first();

        if (!$passwordReset)
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);

         $agent = Agent::where('email',$passwordReset->email)->first();

         if (!$agent)
            return response()->json([
                "message" => "We can't find a user with that e-mail address."
            ], 404);

        $agent->password = bcrypt($request->password);
        $agent->save();

        $passwordReset->delete();

        $agent->notify(new PasswordResetSuccess($passwordReset));

        return response()->json($agent);
    }


}
