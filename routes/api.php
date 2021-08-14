<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AdminAuthController;
use App\Http\Controllers\API\AgentAuthController;
use App\Http\Controllers\API\SubAgentAuthController;
use App\Http\Controllers\API\UserAuthController;
use App\Http\Controllers\API\ForgotPasswordController;
use App\Http\Controllers\API\ResetPasswordController;
use App\Http\Controllers\API\AgentResetPasswordController;
use App\Http\Controllers\API\SubAgentOrderAPIController;
use App\Http\Controllers\API\SubAgentPasswordResetController;
use App\Http\Controllers\API\AgentOrderAPIController1;
use App\Http\Controllers\API\VerificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'burmesedream'],function(){

    //general unauthenticated routes here

    Route::group(['prefix' => 'agent'],function(){

        Route::post('register',[AgentAuthController::class,'register']);
        Route::post('login',[AgentAuthController::class,'login']);

        Route::post('create',[AgentResetPasswordController::class,'create']);
        Route::get('find/{token}',[AgentResetPasswordController::class,'find']);
        Route::post('reset',[AgentResetPasswordController::class,'reset']);
        Route::apiResource('/orders',AgentOrderAPIController1::class);


        //unauthenticated routes for agent here

    Route::group( ['middleware' => ['auth:agent','scope:agent'] ],function(){
           // authenticated agent routes here
           Route::post('dashboard',[AgentAuthController::class,'dashboard']);


        });
    });

    Route::group(['prefix'=>'subagent'],function(){
        Route::post('register',[SubAgentAuthController::class,'register']);
        Route::post('login',[SubAgentAuthController::class,'login']);

        Route::post('create',[SubAgentPasswordResetController::class,'create']);
        Route::get('find/{token}',[SubAgentPasswordResetController::class,'find']);
        Route::post('reset',[SubAgentPasswordResetController::class,'reset']);
        Route::apiResource('/orders',SubAgentOrderAPIController::class);



        Route::group( ['middleware' => ['auth:subagent','scope:subagent'] ],function(){
            // authenticated agent routes here
            Route::post('dashboard',[SubAgentAuthController::class,'dashboard']);

         });

    });

    Route::group(['prefix' => 'admin'],function(){

    Route::post('register',[AdminAuthController::class,'register']);
    Route::post('login',[AdminAuthController::class,'login']);
    //unauthenticated routes for customers here

    Route::group( ['middleware' => ['auth:admin','scope:admin'] ],function(){
           // authenticated admin routes here
           Route::post('dashboard',[AdminAuthController::class,'dashboard']);
        });
    });


});

Route::post('/register', [UserAuthController::class,'register']);
Route::post('/login', [UserAuthController::class,'login']);

Route::post('/password/email',[ForgotPasswordController::class,'sendResetLinkEmail']);
Route::post('/password/reset',[ResetPasswordController::class,'reset']);

Route::get('/email/resend',[VerificationController::class,'resend'])->name('verification.resend');
Route::get('/email/verify/{id}/{hash}',[VerificationController::class,'verify'])->name('verification.verify');





