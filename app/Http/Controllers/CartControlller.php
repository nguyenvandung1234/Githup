<?php

namespace App\Http\Controllers;


use App\cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartControlller extends Controller
{
    public function viewcart(Cart $cart){
        //truyền dữ liệu qua view
        return view('home.cart',compact('cart'));
    }

    public function addToCart($id,Cart $cart){
        //gọi phương thức add để truyền tham số
        $sp=Product::find($id);
        $cart->add($sp,1);
        //chuyển hướng vào danh sách giỏ hàng
        return redirect()->route('view.cart');
    }

    public function update(Request $request,Cart $cart){
        //gọi phương thức update để truyển tham số tương ứng
        $id=$request['id'];
        $sl=$request['soluong'];
        $cart->Update($id,$sl);
        return redirect()->route('view.cart');
    }

    public function delete($id,Cart $cart){
        //gọi phương thưc delete để xóa giỏ hàng
        $cart->delete($id);
        return redirect()->route('view.cart');
    }

    public function clear(Cart $cart){
        //gọi phương thức clear
        $cart->clear();
        //chuyển vào danh sach gio hàng
        return redirect()->route('view.cart');
    }





}