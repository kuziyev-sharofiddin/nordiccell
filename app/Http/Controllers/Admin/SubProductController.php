<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubProductRequest;
use App\Models\Color;
use App\Models\Product;
use App\Models\SubProduct;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SubProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(\Illuminate\Http\Request $request)
    {
        Paginator::useBootstrap();
        $product = Product::query()->findOrFail($request->product_id);
        $sub_products = SubProduct::query()->paginate(10);
        return view('admin.pages.sub_products.sub_product_show', compact('sub_products','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = SubProduct::query()->get();
        $colors = Color::query()->get();
        Paginator::useBootstrap();
        $sub_products = $product->sub_products()->paginate(10);
        return view('admin.pages.sub_products.sub_product_create', compact('sub_products','product', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubProductRequest $request)
    {
        $params = $request->validated();
        $sub_product = SubProduct::query()->create($params);
        if (isset($params['image'])) {
            $sub_product->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('products.sub_products',['product'=>$params['product_id']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::query()->findOrFail($id);
        Paginator::useBootstrap();
        $colors = Color::query()->get();
        $sub_products = $product->sub_products()->paginate(10);
        return view('admin.pages.sub_products.sub_product_create', compact('product', 'sub_products', 'colors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $colors = Color::query()->get();
        $sub_product = SubProduct::query()->findOrFail($id);
        return view('admin.pages.sub_products.sub_product_edit')->with([
            'colors' => $colors,
            'sub_product' => $sub_product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubProductRequest $request, string $id)
    {
        $sub_product = SubProduct::query()->findOrFail($id);
        $params = $request->validated();
        $sub_product->update($params);
        if ($request->hasFile('image')) {
            $sub_product->clearMediaCollection('images');
            $sub_product->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('products.sub_products',['product'=>$params['product_id']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sub_product = SubProduct::query()->findOrFail($id);
        $sub_product->clearMediaCollection('images');
        $sub_product->delete();
        return redirect()->route('products.sub_products',['product'=>$sub_product['product_id']]);
    }
}
