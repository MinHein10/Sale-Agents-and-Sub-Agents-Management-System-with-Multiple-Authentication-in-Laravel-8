<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Passport\HasApiTokens;
use App\Notifications\PasswordResetNotification;

class Agent extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'region',
        'township',
        'phno',
        'address',
        'email',
        'password',
    ];

    public function agentsorder(){
        return $this->hasMany(AgentOrder::class);
    }

    public function subagents(){
        return $this->hasMany(SubAgent::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function sendEmailVerificationNotification()
    // {
    //     $this->notify(new CustomVerifyEmail());
    // }

    /**
     * Send a password reset notification to the user.
     *
     * @param  string  $token
     * @return void
     */

     public function sendPasswordResetNotification($token)
    {

        $this->notify(new PasswordResetNotification($token));
    }
}
