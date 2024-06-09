@extends('main')

@section('content')
    <div class="container p-to-top">
        <h1 class="heading-text">Kết quả tìm kiếm cho "{{ $query }}"</h1>
        @if($products->isEmpty())
            <p>Không tìm thấy sản phẩm nào.</p>
        @else
            <div class="row-grid row-grid-hot-products search-results">
                @foreach($products as $product)
                    <div class="hot-product-item">
                        <p>{{ $product->name }}</p>
                        <div class="product-item-price">
                            <p>
                                {{ number_format($product->price_noma) }} <sup>đ</sup>
                                @if($product->price_nome < $product->price_sale)
                                    <span>{{ number_format($product->price_sale) }} <sup>đ</sup></span>
                                @endif
                            </p>
                        </div>
                        <a href="{{ route('product.show', ['id' => $product->id]) }}" class="main-button">Xem chi tiết</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
