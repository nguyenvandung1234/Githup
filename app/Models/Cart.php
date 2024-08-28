<?php

namespace App\Models;


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
            'id' => $id,
            'name' => $sp->name,
            'price' => $sp->price,
            'image' => $sp->image,
            'soluong' => $sl
        ];
        $this->items[$id]=(object) $item;
        }

        session(['cart' => $this->items]);
    }

    private function gettotalprice(){
        $tong = 0;
        foreach($this->items as $item){
            $tong += $item->soluong;
        }
        return $tong;
    }

    private function gettotalquantity(){
        $tong = 0;
        foreach($this->items as $item){
            $tong += ($item->soluong * $item->price);
        }
        return $tong;

    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
