<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class OrderController extends Controller
{
    public function orders()
    {
        $orders = Order::query()->paginate(10);
        Paginator::useBootstrap();
        return view('admin.pages.order.order_list', compact('orders'));
    }

    public function destroy($order)
    {
        $order = Order::query()->findOrFail($order);
        $order->delete();
        return redirect()->back();
    }

    public function orderItems($order)
    {
        $order = Order::query()->findOrFail($order);
        $orderItems = $order->orderItems()->paginate(10);
        Paginator::useBootstrap();
        return view('admin.pages.order.order_items_list', compact('orderItems'));
    }
}
