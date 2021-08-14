<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAgentOrder extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_code',
        'subagent_id',
        'product_id',
        'quantity',
        'is_package',
        'package_id',
        'payment_methods',
        'payment_slip_images',
        'is_success',
    ];


    public function subagents(){
        return $this->belongsTo(SubAgent::class);
    }
    public function products(){
        return $this->belongsTo(Product::class);
    }
    public function packages(){
        return $this->hasMany(Package::class);
    }

}
