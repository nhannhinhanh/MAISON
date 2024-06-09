@extends('admin.main')
@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post" >
@csrf
<div class="admin-content-main-content-product-add">
                            <div class="admin-content-main-content-left">
                                <div class="admin-content-main-content-two-input">
                                    <input type="text"  value="{{old('name')}}" required name="name" placeholder="Tên sản phẩm" class="">
                                    <input type="text" value="{{old('material')}}" required name="material" placeholder="Chất liệu" class="">
                                </div>
        
                                <div class="admin-content-main-content-two-input">
                                    <input type="text" value="{{old('price_noma')}}" required name="price_noma" placeholder="Giá giảm" class="">
                                    <input type="text" value="{{old('price_sale')}}" required name="price_sale" placeholder="Giá gốc" class="">
                                </div>
        
                                <textarea class="editor_des" value="{{old('description')}}"  name="description" id="" placeholder="Mô tả sản phẩm" ></textarea>
                                <textarea class="editor_content" value="{{old('content')}}"  name="content" id="" placeholder="Chính sách"></textarea>
                                <br>
                                <button type="submit" class="main-button">Thêm sản phẩm</button>
                            </div>
    
                            <div class="admin-content-main-content-right">
                                <div class="admin-content-main-content-right-image">
                                    <label for="file" class="image-label">Ảnh đại diện</label>
                                    <input type="file" id="file">
                                    <input type="hidden" name="image" id="input-file-img-hiden">
                                    <div class="image-show" id="input-file-img">

                                    </div>
                                </div>
    
                                <div class="admin-content-main-content-right-images">
                                    <label for="files" class="image-label">Ảnh sản phẩm</label>
                                    <input type="file" id="files" multiple>
                                    <div class="images-show" id="input-file-imgs">

                                    </div>
                                </div>
                            </div>
                        </div>
                 
</form>
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>

@endsection