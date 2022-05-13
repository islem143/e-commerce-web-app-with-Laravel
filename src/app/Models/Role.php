<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    public function users(){
        $this->hasMany(User::class);
    }
    public const IS_ADMIN=1;
    public const IS_DELEVERY=2;
    public const IS_CLIENT=3;
}
