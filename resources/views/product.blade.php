@extends('main')
@section('content')

<section class="product-detail p-to-top">
    <form action="/cart/add" method="post">
        @csrf
        <div class="container">
            <div class="row-flex row-flex-product-detail">
                <p>Sản phẩm</p>
                <i class="ti-angle-double-right"></i>
                <p class="">{{$product -> name}}</p>
            </div>
            <div class="row-grid">
                <div class="product-detail-left">
                    <img src="{{asset($product -> image)}}" alt="" class="main-image">
                    <div class="product-images-items">
                        @php
                          $product_images = explode('*',$product -> images); 
                        @endphp
    
                        @foreach($product_images as $product_image)
                            <img src="{{asset($product_image)}}" alt="" class="">
                        @endforeach
                        
                    </div>
                </div>
    
                <div class="product-detail-right">
    
                    <!-- Thông tin sản phẩm -->
                    <div class="product-detail-right-infor">
                        <h1>{{$product -> name}}</h1>
                        <span>{{$product -> material}}</span>
                        <div class="product-item-price">
                            <p class="">{{number_format($product -> price_noma)}}<sup>đ</sup>  <span>{{number_format($product -> price_sale)}}<sup>đ</sup></span>  </p>
                        </div>
                    </div>
                    <!-- Mô tả sản phẩm -->
                    <div class="row-flex row-flex-product-detail">
                        <h2>Mô tả sản phẩm:</h2>
                    </div>
    
                    <div class="product-detail-right-des">
                        {!!$product -> description!!}
                    </div>
    
    
                    <!-- Tính năng sản phẩm -->
                    <div class="row-flex row-flex-product-detail">
                        <h2>Chính sách:</h2>
                    </div>
    
                        <div class="product-detail-right-des">
                            {!!$product -> content!!}
                        </div>
    
                    <!-- Số lượng -->
                    <div class="product-detail-right-quantity">
                        <h2>Số lượng</h2>
                        <div class="product-detail-right-quantity-input">
                            <i class="ti-minus"></i>
                            <input onKeyDown="return false" type="number" name="product_qty" class="quantity-input" value="1">
                            <input type="hidden" name="product_id"  value="{{$product -> id}}">
                            <i class="ti-plus"></i>
                        </div>
                    </div>    
                    
                    <!-- Thêm vào giỏ hàng -->
                    <div class="product-detail-right-addcart">
                        <button type="submit" class="main-button">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</section>

@endsection