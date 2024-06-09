@extends('admin.main')
@section('content')
<form action="" method="post" >
<div class="admin-content-main-content-product-add">
                            <div class="admin-content-main-content-left">
                                <div class="admin-content-main-content-two-input">
                                    <input type="text" value="{{$product -> name}}" name="name" placeholder="Tên sản phẩm" class="">
                                    <input type="text" value="{{$product -> material}}" name="material" placeholder="Chất liệu" class="">
                                </div>
        
                                <div class="admin-content-main-content-two-input">
                                    <input type="text" value="{{$product -> price_noma}}" name="price_noma" placeholder="Giá giảm" class="">
                                    <input type="text" value="{{$product -> price_sale}}" name="price_sale" placeholder="Giá bán" class="">
                                </div>
        
                                <textarea class="editor_des"  name="description" id="" placeholder="Mô tả sản phẩm" >{{$product -> description}}</textarea>
                                <textarea class="editor_content"  name="content" id="" placeholder="Chính sách">{{$product -> content}}</textarea>
                                <br>
                                <button type="submit" class="main-button">Cập nhật sản phẩm</button>
                            </div>
    
                            <div class="admin-content-main-content-right">
                                <div class="admin-content-main-content-right-image">
                                    <label for="file" class="image-label">Ảnh đại diện</label>
                                    <input type="file" id="file">
                                    <input type="hidden" name="image" value="{{$product -> image}}" id="input-file-img-hiden">
                                    <div class="image-show" id="input-file-img">
                                        <img src="{{asset($product -> image)}}" alt="" class="">
                                    </div>
                                </div>
    
                                <div class="admin-content-main-content-right-images">
                                    <label for="files" class="image-label">Ảnh sản phẩm</label>
                                    <input type="file" id="files" multiple>
                                    <div class="images-show" id="input-file-imgs">
                                        @php
                                            $product_images = explode("*", $product -> images);
                                        @endphp

                                        @foreach ($product_images as $product_image)
                                            <img src="{{asset($product_image)}}" alt="" class="">
                                            <input type="hidden" name="images[]" value="{{$product_image}}" id="input-file-img-hiden">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
    @csrf                    
</form>
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>

@endsection