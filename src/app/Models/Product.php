<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable=[
        "name",
        "slug",
        "description",
        "price",
        'quantity'
    ];

    public function cartItems(){
        return $this->belongsToMany(Cart::class,'cart_products');
    }

}
