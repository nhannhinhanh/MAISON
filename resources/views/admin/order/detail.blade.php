@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        {{-- <th>Tuỳ biến</th> --}}
                                    </tr>
                                </thead>
    
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp

                                    @foreach($products as $product)

                                    @php
                                        $price = $product -> price_sale * $order_detail[$product -> id];
                                        $total = $price + $total;
                                    @endphp
                                    <tr>
                                        <td>{{$product -> id}}</td>
                                        <td> <img style="width: 70px;" src="{{asset($product -> image)}}" alt="" class=""></td>
                                        <td>{{$product -> name}}</td>
                                        <td>{{number_format($product -> price_sale)}} </td>
                                        <td>{{$order_detail[$product -> id]}}</td>
                                        <td>{{number_format($price)}}</td>                          
                                        <td>
                                            {{-- <a class="delete-class" href="">Xoá</a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    

                                    

                                    <tr>
                                        <td colspan="5" style="font-weight: 700;">Tổng cộng </td>
                                        <td style="font-weight: 700;">{{number_format($total)}}</td>
                                    </tr>

                                
                                </tbody>
                            </table>
                        </div>           
@endsection