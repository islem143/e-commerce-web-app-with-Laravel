<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        "name",
        "slug",
        "description",
        "price",
        'quantity',
        "img_url"
    ];
    // public function toArray($request){
    //      dd($request);
    //     return ["1"=>4];
    // }

    public function cartItems()
    {
        return $this->belongsToMany(Cart::class, 'cart_products');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, "order_items");
    }
}
