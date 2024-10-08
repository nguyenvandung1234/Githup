<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;

    protected $fillable = ['order_id','product_id','price','quantity'];

    public $timestamps=false;

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
