<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'productname',
        'category_id',
        'instock',
        'images',
        'description',
        'prices',
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }

    public function agentsorder(){
        return $this->hasMany(AgentOrder::class);
    }


}
