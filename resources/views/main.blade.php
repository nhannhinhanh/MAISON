<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
</head>

<body>
    <!-- header -->
    @include('parts.header')
    
    {{-- content --}}
    @yield('content')

    <!-- Sản phẩm giảm giá -->
    @include('parts.hotproduct')

 
<!-- Footer -->
    @include('parts.footer')

</body>

</html>