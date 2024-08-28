<?php

namespace App\cart;
use App\Models\Product;

class Cart
{

    public $items = [];
    public $totalprice = 0;
    public $totalquantity = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
        $this->totalprice = $this->gettotalprice();
        $this->totalquantity = $this->gettotalquantity();

    }

    public function add($sp,$sl)
    {
        $id=$sp->id;
        if (isset($this->items[$id])) {
            $this->items[$id]->soluong += $sl;
        } else {
        $item = [
            'id' => $sp->id,
            'name' => $sp->name,
            'price' => $sp->price,
            'sale_price' => $sp->sale_price,
            'image' => $sp->image,
            'soluong' => $sl
        ];
        $this->items[$id]=(object) $item;
        }

        session(['cart' => $this->items]);
    }


    public function update($id,$sl)
    {
        if(isset($this->items[$id])){
            $this->items[$id]->soluong=$sl;
            session(['cart' => $this->items]);
        }
    }

    public function delete($id)
    {
        if(isset($this->items[$id])){
            unset($this->items[$id]);
            session(['cart' => $this->items]);
        }

    }

    public function clear(){
        session(['cart'=> null]);
    }

    private function gettotalquantity(){
        $tong = 0;
        foreach($this->items as $item){
            $tong += $item->soluong;
        }
        return $tong;
    }

    private function gettotalprice(){
        $tong = 0;
        foreach($this->items as $item){
            $tong += ($item->soluong * $item->sale_price);
        }
        return $tong;

    }

}