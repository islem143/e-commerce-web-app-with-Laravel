<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        "address",
        "first_name",
        "last_name",
        "zip_code",
        "city",
        "state",
        "user_id",
        "phone"
    ];
    protected $table = 'user_info';
    public function user(){
        return $this->belongsTo(User::class);
    }
}
