<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
</head>

<body>
    <!-- header -->
    @include('parts.header')


    <!-- Slider -->
    <section class="slider">
        <div class="slider-items">
            <div class="slider-item">
                <img src="{{asset('frontend/asset/images/Banner12.png')}}" alt="" class="">
            </div>

            {{-- <div class="slider-item">
                <img src="{{asset('frontend/asset/images/Banner13.png')}}g" alt="" class="">
            </div> --}}

            <div class="slider-item">
                <img src="{{asset('frontend/asset/images/Banner14.png')}}" alt="" class="">
            </div>
        </div>

        <div class="slider-arrow">
            <i class="ti-arrow-right"></i>
            <i class="ti-arrow-left"></i>
        </div>
    </section>

    <!-- Sản phẩm giảm giá -->
    <section class="hot-products">
        <div class="container">
            <div class="row-grid">
                <p class="heading-text">Sản phẩm nổi bật</p>
            </div>
    
            <div class="row-grid row-grid-hot-products">
                @foreach($products as $product)
                    <div class="hot-product-item">
                        <a href="/product/{{$product -> id}}" class=""> <img src="{{asset($product -> image)}}" alt="" class=""></a>
                        <p class="/product/{{$product -> id}}"> <a href="/product/{{$product -> id}}">{{$product -> name}}</a></p>
                        <span class="">{{$product -> material}}</span>
                        <div class="product-item-price">
                            {{-- <p class="">{{number_format($product -> price_sale)}} <sup>đ</sup>  <span>{{number_format($product -> price_noma)}} <sup>đ</sup></span>  </p> --}}
                            <p class="">
                                {{ is_numeric($product->price_sale) ? number_format($product->price_sale) : 0 }} <sup>đ</sup>  
                                <span>{{ is_numeric($product->price_noma) ? number_format($product->price_noma) : 0 }} <sup>đ</sup></span>  
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

 
<!-- Footer -->
    @include('parts.footer')

</body>

</html>