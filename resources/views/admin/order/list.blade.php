@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Ghi chú</th>
                                        <th>Chi tiết</th>
                                        <th>Ngày mua</th>
                                        {{-- <th>Trạng thái</th> --}}
                                        <th>Tuỳ biến</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order -> id}}</td>
                                        <td>{{$order -> name}} </td>
                                        <td>{{$order -> phone}}</td>
                                        <td>{{$order -> email}}</td>
                                        <td>{{$order -> address}}, {{$order -> city}}</td>
                                        <td>{{$order -> note}}</td>
                                        <td>
                                            <a href="/admin/order/detail/{{$order -> order_detail}}" class="edit-class">Chi tiết</a>
                                        </td>
                                        <td>{{$order -> created_at}}</td>
                                        {{-- <td> <a href="" class="non-confirm-order">Chưa xác nhận</a></td> --}}
                                        <td>
                                            <a class="delete-class" href="{{ route('order.destroy', ['id' => $order->id]) }}">Xoá</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    

                                    

                                
                                </tbody>
                            </table>
                        </div>
@endsection