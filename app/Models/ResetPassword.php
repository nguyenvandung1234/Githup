<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    use HasFactory;
    protected $fillable = ['email','token'];

    public function customer(){
        return $this->hasOne(Customer::class,'email','email');
    }

    public $timestamps = false;

    public function scopeCheckToken($query,$token){
        return $query->where('token',$token)->firstOrFail();
    }
}
