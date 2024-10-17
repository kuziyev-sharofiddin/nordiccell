<?php

namespace App\Http\Controllers\Nordiccell;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ParentCategory;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cancelOrder($order)
    {
        $order = $this->repository->getById($order);
        $order->delivery_status='You canceled the order';
        $order->save();
        return $order;
    }

    public function cashOrder(Request $request){

        $user = auth()->user();

        $cartItems = Cart::query()->where('user_id', $user->id)->get();

        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item->price;
        }

        $order = Order::query()->create([
            'user_id' => $user->id,
            'total_price' => $totalPrice,
//            'order_ref' => $request->order_ref,
//            'order_notes' => $request->order_notes,
            'status' => 'pending',
        ]);
        foreach ($cartItems as $item) {
            foreach ($item->products as $product) {
                OrderItem::query()->create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                ]);
            }
        }
        Cart::query()->where('user_id', $user->id)->delete();

        return redirect('/');
    }

    public function order() {
        $user = auth()->user();
        $carts = Cart::query()->where('user_id',$user->id)->get();
        $totalPrice = $carts->sum('price');
        $parentCategories = ParentCategory::query()->get();
        return view('nordiccell.pages.order', compact('parentCategories','carts','totalPrice'));
    }
}
