<?php

namespace App\Http\Controllers;

use App\cart\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;

class Ordercontroller extends Controller
{
    //hiển thị form đặt hàng
    public function checkout(Cart $cart){
        $customer = auth('cus')->user();
        return view('order.checkout',compact('cart','customer'));
    }


    //lưu đơn hàng
    public function post_checkout(Request $request, Cart $cart){
        $data = $request->only('name','email','phone','address');
        $data['customer_id'] = auth('cus')->id();
        //lưu thông tin vào bảng orders
        if($order = Order::create($data)){
            //duyệt giỏ hàng lưu vào order_detail
            foreach($cart->items as $item){
                $detail = [
                    'order_id'=>$order->id,
                    'product_id'=>$item->id,
                    'price'=>$item->price,
                    'quantity'=>$item->soluong,
                ];

                Order_detail::create($detail);

            }
            $cart->clear();

            return redirect()->route('view.cart')->with('success','Đặt hàng thành công');
        }

        return redirect()->back()->with('no','có lỗi vui lòng thử lại');

    }


    //phương thúc hiển thị danh sach đơn hàng
    public function history(){
        $customer = auth('cus')->user();
        return view('order.history',compact('customer'));
    }

    //phương thức hiển thị chi tiết đơn hàng
    public function detail(Order $order){
        $customer = auth('cus')->user();
        return view('order.detail',compact('order','customer'));
    }

    public function order_success(){
        return view('order.success');
    }
}
