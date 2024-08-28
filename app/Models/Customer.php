<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name','email','password','address','phone','gender','email_verified_at'];


    protected $hidden = ['password'];

    public function orders(){
        return $this->hasMany(Order::class,'customer_id','id');
    }
}
