<?php

namespace App\Http\Controllers\Nordiccell;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ParentCategory;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * @param $product
     * @param Request $request
     * @return RedirectResponse
     */
    public function addCart($product, Request $request)
    {
//        dd($request);
        $user = Auth::user();

        $hasCartProduct = Cart::where('user_id', $user->id)
            ->whereHas('products', function($query) use ($product) {
                $query->where('product_id', $product);
            })
            ->first();

        $productModel = Product::where('id', $product)
            ->first();

        if ($hasCartProduct) {
            $hasCartProduct->quantity += $request->quantity;

            if ($productModel->discount_price != null) {
                $hasCartProduct->price = $productModel->discount_price * $hasCartProduct->quantity;
            } else {
                $hasCartProduct->price = $productModel->price * $hasCartProduct->quantity;
            }
            $hasCartProduct->save();
            return redirect()->back();

        } else {
            $cartModel = new Cart();
            $cartModel->user_id = $user->id;
            if ($productModel->discount_price != null) {
                $cartModel->price = $productModel->discount_price * $request->quantity;
            } else {
                $cartModel->price = $productModel->price * $request->quantity;
            }
            $cartModel->quantity = $request->quantity;
            $cartModel->save();
            $cartModel->products()->attach($product);
            return redirect()->back();
        }
    }
    public function showCart()
    {
        $user = Auth::user();
        $parentCategories = ParentCategory::query()->get();
        $carts = Cart::query()->where('user_id',$user->id)->get();
        $totalPrice = $carts->sum('price');
        return view('nordiccell.pages.cart_show', compact('parentCategories','carts','totalPrice'));
    }

    public function removeCart($cart)
    {
        $cart = Cart::query()->findOrFail($cart);
        $cart->delete();
        return redirect()->back();
    }

    public function getCartCount()
    {
        return session()->has('cart') ? count(session('cart')) : 0;
    }
}
