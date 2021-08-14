<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use App\Notifications\PasswordResetNotification;


class SubAgent extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'agent_id',
        'region',
        'township',
        'phno',
        'address',
        'email',
        'password',
    ];

    public function agents(){
        return $this->belongsTo(Agent::class);
    }

    public function subagentsorder(){
        return $this->hasMany(SubAgentOrder::class);
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
