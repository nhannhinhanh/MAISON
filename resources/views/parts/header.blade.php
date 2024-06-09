<header id="header">
    <div class="container">
        <div class="row-flex">

            <div class="header-bar-icon">
                <i class="ti-menu"></i>
            </div>
            <!-- logo laptop-->
            <div class="header-logo">
                <a href="/" class=""><img src="{{asset('frontend/asset/images/logomain12.jpeg')}}" alt=""></a>
            </div>

            <!-- logo mobile -->
            <div class="header-logo-mobile">
                <img src="{{asset('frontend/asset/images/logomain12.jpeg')}}" alt="">
            </div>

            <!-- điều hướng -->
            <div class="header-nav">
                <nav>
                    <ul>
                        <li> <a href="/">Trang trí</a> </li>
                        <li> <a href="/">Ghế</a> </li>
                        <li> <a href="/">Giường</a> </li>
                        <li> <a href="/">Tủ</a> </li>
                        <li> <a href="/">Sofa</a> </li>
                    </ul>
                </nav>
            </div>


            <!-- Search -->
            <div class="header-search">
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="query" placeholder="Tìm kiếm sản phẩm..." class="">
                    <button type="submit"><i class="ti-search"></i></button>
                </form>
            </div>

            <!-- Giỏ hảng -->
            <div class="header-cart">
                <a href="/cart" class=""><i class="ti-shopping-cart" number="!" ></i></a>
            </div>
        </div>
    </div>
</header>