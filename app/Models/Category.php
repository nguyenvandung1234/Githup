<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['name','status','created_at'];

    public $timestamps=false;

    public function scopeSearch($query)
    {
        if($key=request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
}