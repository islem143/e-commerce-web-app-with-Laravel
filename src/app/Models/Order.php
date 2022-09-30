<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public const PENDING = 1;
    public const ON_DELEVERY = 2;
    public const DELEVERED = 3;
    public const CANCELED = 4;

    protected $fillable = [

        "user_id",
        "transaction_id",
        "userinfo_id",
        "total",
        "status"
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, "order_items");
    }
}
