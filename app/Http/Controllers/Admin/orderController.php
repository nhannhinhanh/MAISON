<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function list_order(){
        $orders = order::all();
        return view('admin.order.list', [
            'orders' => $orders
        ]);
    }

    public function detail_order(Request $request){
        $order_detail = json_decode($request->order_detail, true);
        //GPT
        if (!is_array($order_detail)) {
            $order_detail = [];
        }
        //GPT
        $product_id = array_keys($order_detail);
        $products = product::WhereIn('id',$product_id ) -> get();
        return view('admin.order.detail', [
            'products' => $products,
            'order_detail' => $order_detail
        ]);
    }

    public function destroy($id)
    {
        // Tìm đơn hàng theo id và xóa nó
        $order = Order::find($id);
        if ($order) {
            $order->delete();
            return redirect()->back()->with('success', 'Đơn hàng đã được xóa thành công.');
        }
        
        return redirect()->back()->with('error', 'Không tìm thấy đơn hàng.');
    }
}
