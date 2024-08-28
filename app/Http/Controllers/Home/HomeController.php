<?php

namespace App\Http\Controllers\Home;

use App\cart\Cart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('cus');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //trang chủ
     public function index()
    {
        $quanti = 4;
        $pro = Product::orderBy('id','asc')->search()->get();
        $produ = Product::orderBy('id','asc')->search()->paginate($quanti);
        return view('home.homepage',['name'=>$produ],compact('pro','produ'));
    }

    //sản phẩm
    public function shop_left(Cart $cart){
        $pepar = 3;
        $pro = Product::orderBy('id','asc')->search()->get();
        $prod = Product::orderBy('id','asc')->paginate($pepar);
        return view('home.shop_left',['name'=>$prod],compact('cart','pro','prod'));
    }

    //chi tiết
    public function detail($title,Product $product)
    {
        $comment=Comment::orderBy('id','desc')->where('product_id',$product->id)->get();
        return view('home.detail',compact('product','comment'));
    }


    //loại
    public function category(Category $category){
        $quanti = 4;
        $pro = Product::where('category_id',$category->id)->search()->get();
        $produ = Product::orderBy('id','asc')->search()->paginate($quanti);
        return view('home.homepage',['name'=> $produ],compact('category','pro','produ'));
    }



    public function category2(Category $category){
        $pro = Product::where('category_id',$category->id)->search()->get();
        return view('home.category',compact('category','pro'));
    }


    public function about(){
        return view('home.about');
    }
    public function myaccount(Cart $cart){
        return view('home.myaccount',compact('cart'));
    }

    public function contact(){
        return view('home.contact');
    }



    //Comment
    public function post_comment($proid)
    {
        
        $data = request()->all('comment');
        $data['product_id']=$proid;
        $data['customer_id']=auth('cus')->id();
        if (Comment::create($data)) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }


}