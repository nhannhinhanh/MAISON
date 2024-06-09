@extends('admin.main')
@section('content')
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>
<div class="admin-content-main-content-product-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá bán</th>
                                        <th>Giá giảm</th>
                                        <th>Ngày đăng</th>
                                        <th>Tuỳ chỉnh</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product -> id}}</td>
                                        <td> <img style="width: 70px;" src="{{asset($product -> image)}}" alt=""> </td>
                                        <td>{{$product -> name}}</td>
                                        <td>{{$product -> price_noma}}</td>
                                        <td>{{$product -> price_sale}}</td>
                                        <td>{{$product -> created_at}}</td>
                                        <td>
                                            <a class="edit-class" href="/admin/product/edit/{{$product -> id}}">Sửa</a>
                                            |
                                            <a onclick="removeRow(product_id= {{$product -> id}},url='/admin/product/delete')" class="delete-class" href="#">Xoá</a>
                                        </td>
                                    </tr>
                                    @endforeach

                          

                                    
                                </tbody>
                            </table>
                        </div>

@endsection



