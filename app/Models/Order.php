<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','name','email','phone','address','stauts'];

    public function details(){
        return $this->hasMany(Order_detail::class,'order_id','id');

    }

    public function TotalPrice(){
        $total = 0;
        foreach($this->details as $item){
            $total += $item->quantity * $item->price;
        }

        return $total;
    }
}
