<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable=[
        'packagename',
        'product_id',
        'buying_items',
        'images',
        'description',
        'quantity',
        'prices',
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function agentorder(){
        return $this->belongsTo(AgentOrder::class);
    }
}
