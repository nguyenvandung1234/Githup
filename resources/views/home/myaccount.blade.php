@extends('layouts.main')

@section('main')


<section class="breadcrumb-area" style="background-image: url(assets/img/bg/04.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <span>DESIGNER JEWELRY</span>
            <h2 class="page-title">My Account</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Account</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<!--====== Account SECTION START ======-->
<section class="account-sec pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="account-tabs">
                    <ul class="nav flex-column nav-tabs border-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#orders" role="tab">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#downloads" role="tab">Downloads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#address" role="tab">Addresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#account-detail" role="tab">Account Details</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('account.logout')}}" onclick="return confirm('Bạn muốn đăng xuất tài khoản này')" class="nav-link logout">
                                <i class="fal fa-power-off"></i>
                                Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                        <div class="dashboard-content">
                            <p class="text-white mb-30">Hello <b>John Benjamin</b>
                                (not <b>John Benjamin</b>?
                                <a href="#">Log Out</a>)
                            </p>
                            <p class="text-white">From Your Account Dashboard You can View Your <a href="#">Recent
                                    Orders</a>, Manage Your<a href="#">Shipping and Billing Addresses</a> and <a
                                    href="#">Edit Your Password and Account Details</a></p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="content-heading mb-50">
                            <h3>My Orders</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        <div class="order-table">
                            <table class="table cw-cart-table mb-0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col" class="product-name">My Order</th>
                                        <th scope="col" class="product-qty">Order ID</th>
                                        <th scope="col" class="product-price">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart->items as $row)
                                    <tr>
                                        <td class="product-remove text-center cw-align">
                                            <a href="{{route('delete.cart',$row->id)}}" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này')"><i class="fas fa-times"></i></a>
                                        </td>
                                        <td data-title="Product" class="has-title">
                                            <div class="product-thumbnail">
                                                <img src="/images/{{$row->image}}" alt="product_thumbnail">
                                            </div>
                                        </td>
                                        <td class="product-price text-white cw-align has-title" data-title="Order ID">
                                            {{$row->id}}</td>
                                        <td data-title="Actions" class="has-title">
                                            <a href="{{route('order.checkout')}}" class="main-btn btn-filled">Order Now</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="downloads" role="tabpanel">
                        <div class="content-heading download-content">
                            <h3>You Haven't Downloaded Any Product</h3>
                            <p>You still havent saved any products yet, Go back to the products page and check some of
                                your favorite products</p>
                            <a href="{{route('home.shop_left')}}" class="main-btn btn-outline mt-20">Browse Products</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="address" role="tabpanel">
                        <div class="address-content">
                            <p class="mb-30">The Following Address will Be Used on Checkout Page by Default</p>
                            <div class="extra-info mb-30">
                                <div class="billing-info">
                                    <h3>Billing Address</h3>
                                    <p>John Benjamin</p>
                                </div>
                                <a href="#" class="btn-link">Edit</a>
                            </div>
                            <div class="extra-info">
                                <div class="shipping-info">
                                    <h3>Shipping Address</h3>
                                    <p>You have not Setup this Type of Address Yet.</p>
                                </div>
                                <a href="#" class="btn-link">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-detail" role="tabpanel">
                        <div class="profile-content">
                            <div class="content-heading mb-50">
                                <h3>Welcome Back</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-12 input-group input-group-two mb-20">
                                        <label> Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" placeholder="Benjamin" name="name">
                                    </div>
                                    <div class="col-12 input-group input-group-two mb-20">
                                        <label>Display Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" placeholder="John Benjamin" name="dname">
                                        <p class="mt-2">This is how your Name will be Displayed in the Account Section
                                            and Reviews..</p>
                                    </div>
                                    <div class="col-12 input-group input-group-two mb-20">
                                        <label>Email Address
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" placeholder="abc@email.com" name="email">
                                    </div>
                                    <div class="col-12 input-group input-group-two mb-20">
                                        <label>Current Password(Leave Blank to Leave Unchanged)
                                        </label>
                                        <input type="text" placeholder="Current Password" name="c-password">
                                    </div>
                                    <div class="col-12 input-group input-group-two mb-20">
                                        <label>New Password(Leave Blank to Leave Unchanged)
                                        </label>
                                        <input type="text" placeholder="New Password" name="n-password">
                                    </div>
                                    <div class="col-12 input-group input-group-two mb-20">
                                        <label>Confirm New Password
                                        </label>
                                        <input type="text" placeholder="Confirm Password" name="c-password">
                                    </div>
                                </div>
                                <button type="submit" class="main-btn btn-filled">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection