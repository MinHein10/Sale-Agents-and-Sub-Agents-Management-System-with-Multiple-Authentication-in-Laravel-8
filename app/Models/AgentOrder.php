<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Traits\Uuids;
use Laravel\Passport\HasApiTokens;


class AgentOrder extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable=[
        'order_code',
        'agent_id',
        'product_id',
        'quantity',
        'is_package',
        'package_id',
        'payment_methods',
        'payment_slip_images',
        'is_success',
    ];

    public function agents(){
        return $this->belongsTo(Agent::class);
    }
    public function products(){
        return $this->belongsTo(Product::class);
    }
    public function packages(){
        return $this->hasMany(Package::class);
    }
}
