<?php

use App\Http\Controllers\AccoutController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\Home\Productcontroller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CartControlller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;


//cart
Route::group(['prefix' => "cart",'middleware'=>'customer'], function () {
    Route::get('/view', [CartControlller::class, 'viewcart'])->name('view.cart');
    Route::get('/add/{id}', [CartControlller::class, 'addToCart'])->name('add.cart');
    Route::get('/update/{id}', [CartControlller::class, 'update'])->name('update.cart');
    Route::get('/delete/{id}', [CartControlller::class, 'delete'])->name('delete.cart');
    Route::get('/clear', [CartControlller::class, 'clear'])->name('clear.cart');
    // Route::delete('/remove-from-cart',[CartControlller::class,'remove'])->name('remove_from_cart');
});
//endcart

//homelogin
Route::post('comment/{product_id}', [HomeController::class, 'post_comment'])->name('home.comment');
//endHomelogin



//Admincategory
Route::group(['prefix' => "/admin", 'middleware' => 'auth'], function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/product', [Productcontroller::class, 'index'])->name('product');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::resources([
        'category' => CategoryController::class,
        'product' => Productcontroller::class
    ]);
});
//endAdmincategory


Route::group(['prefix' => "/"], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('detail/{title}_{product}', [HomeController::class, 'detail'])->name('home.detail');
    Route::get('shop-left', [HomeController::class, 'shop_left'])->name('home.shop_left');
    Route::get('category/{category}/', [HomeController::class, 'category'])->name('home.category');
    Route::get('cate/{category}/', [HomeController::class, 'category2'])->name('home.category2');
    Route::get('about', [HomeController::class, 'about'])->name('home.about');
    Route::get('myaccount', [HomeController::class, 'myaccount'])->name('home.myaccount');
    Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');
});




//adminlogin
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'Check_login']);
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'Check_register']);
//endAdminlogin



Route::group(['prefix' => 'order', 'middleware' => 'customer'], function () {
    //hiển thị form nhập thông tin mua hàng
    Route::get('checkout', [Ordercontroller::class, 'checkout'])->name('order.checkout');
    //tạo đơn hàng lưu thông tin vào CSDL
    Route::post('checkout', [Ordercontroller::class, 'post_checkout']);

    //khi đặt hàng thành công thì chuyển hướng về đây
    Route::get('order-succcess', [Ordercontroller::class, 'order_success'])->name('order.success');
    //danh sach đơn hàng đã dao dịch
    Route::get('history', [Ordercontroller::class, 'history'])->name('order.history');
    //chi tiết sản phẩm trong đơn hàng
    Route::get('detail/{order}', [Ordercontroller::class, 'detail'])->name('order.detail');
});




//account
Route::group(['prefix' => 'account'], function () {
    Route::get('login', [AccoutController::class, 'login'])->name('account.login');
    Route::get('verify-account/{email}', [AccoutController::class, 'verify'])->name('account.verify');
    Route::post('login', [AccoutController::class, 'Check_login']);

    Route::get('register', [AccoutController::class, 'register'])->name('account.register');
    Route::post('register', [AccoutController::class, 'Check_register']);

    Route::group(['middleware' => 'customer'], function () {

        Route::get('profile', [AccoutController::class, 'profile'])->name('account.profile');
        Route::post('profile', [AccoutController::class, 'Check_profile']);

        Route::get('change-password', [AccoutController::class, 'change_password'])->name('account.change_password');
        Route::post('change-password', [AccoutController::class, 'Check_change_password']);

    });

    Route::get('forgot-pasword', [AccoutController::class, 'forgot_pasword'])->name('account.forgot_pasword');
    Route::post('forgot-pasword', [AccoutController::class, 'Check_forgot_pasword']);

    Route::get('reset-password/{token}', [AccoutController::class, 'reset_password'])->name('account.reset_password');
    Route::post('reset-password/{token}', [AccoutController::class, 'Check_reset_password']);

    Route::get('logout', [AccoutController::class, 'logout'])->name('account.logout');

});
//endaccount




//demoORM
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');