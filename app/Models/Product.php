<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','image','image_link','price','sale_price','content','status','category_id'];
    public $timestamps=false;

    public function scopeSearch($query)
    {
        if($key=request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }

}