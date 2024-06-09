@extends('main')
@section('content')

<section class="cart-section p-to-top">
    <form action="/cart/send" method="post">
        <div class="container">
            <div class="row-flex row-flex-product-detail">
                <p>Giỏ hàng</p>
            </div>
    
            <div class="row-grid">
                <!-- Chi tiết đơn hàng -->
                <div class="cart-section-left">
                    <h2 class="main-h2">Chi tiết đơn hàng</h2>
                    <div class="cart-section-left-detail">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Tổng tiền</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                @foreach ($products as $product)
                                    @php
                                        $price = $product -> price_sale * Session::get('cart')[$product -> id];
                                        $total = $price + $total;
                                    @endphp
                                <tr>
                                    <td> <img style="width: 70px" src="{{asset($product -> image)}}" alt=""></td>
                                    <td> 
                                        <div class="product-detail-right-infor">
                                            <h1>{{$product -> name}}</h1>
                                            <div class="product-item-price">
                                                <p class="">{{number_format($product -> price_sale)}}<sup>đ</sup>  <span>{{number_format($product -> price_noma)}}<sup>đ</sup></span>  </p>
                                            </div>
                                        </div>
    
                                        <div class="product-detail-right-quantity">
                                            <div class="product-detail-right-quantity-input">
                                                <i class="ti-minus"></i>
                                                <input onKeyDown="return false" type="number" name="product_id[{{$product -> id}}]" class="quantity-input" value="{{Session::get('cart')[$product -> id]}}">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </div> 
                                    </td>
                                        
                                    <td>
                                        <p>{{number_format($price)}}<sup>đ</sup> </p>
                                    </td>
    
                                    <td><a href="/cart/delete/{{$product -> id}}" class=""> <i class="ti-trash"></i></a></td>
                                </tr>
                                @endforeach
                                 
                                <tr>
                                    <td style="font-weight: bold" colspan=2>Tổng tiền</td>
                                    <td style="font-weight: bold; text-align: center">{{number_format($total)}}<sup>đ</sup></td>
                                    <td></td>
                                </tr>
                               
    
                              
                            </tbody>
                        </table>
                        <br>
                        <button formaction="/cart/update" class="main-button">Cập nhật giỏ hàng</button>
                        <a style="font-style: oblique;"href="/" class="">>>Tiếp tục mua hàng</a>
                    </div>
                </div>
    
                <!-- Thông tin giao hàng -->
                <div class="cart-section-right">
                    <h2 class="main-h2">Thông tin giao hàng</h2>
                    <span style="color: red">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </span>
                    <div class="cart-section-right-input-name">
                        <input type="text"  placeholder="Họ và tên" class="" name="name">
                    </div>
    
                    <div class="cart-section-right-input-email-phone">
                        <input type="email"  placeholder="Email" class="" name="email">
                        <input type="text"   placeholder="Số điện thoại" class="" name="phone">
                    </div>
    
                    <div class="cart-section-right-select">
                        <input type="text" placeholder="Tỉnh/Thành Phố" class="" name="city">
                        <input type="text"  placeholder="Quận/Huyện" class="" name="district">
                        <input type="text"  placeholder="Phường/Xã" class="" name="ward">
                    </div>
    
                    <div class="cart-section-right-input-address">
                        <input type="text"  placeholder="Số nhà và tên đường" class="" name="address">
                    </div>
    
                    <div class="cart-section-right-input-note">
                        <input type="text" placeholder="Ghi chú" class="" name="note">
                    </div>
    
                    <br>
                    <button class="main-button">Gửi đơn hàng</button>
                </div>
            </div>
        </div>
        @csrf
    </form>
</section>

@endsection

@section('footer')

@endsection