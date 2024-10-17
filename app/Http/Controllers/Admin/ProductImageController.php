<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductImageRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product = Product::query()->findOrFail($request->product_id);
        Paginator::useBootstrap();
        $product_images = $product->product_images()->paginate(10);
        return view('admin.pages.product_images.product_image_show', compact('product_images','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductImageRequest $request)
    {
        $params = $request->validated();
        $product_image = ProductImage::query()->create($params);
        if (isset($params['image'])) {
            $product_image->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('products.images',['product'=>$params['product_id']]);
    }

    /**
     * Display the specifi ed resource.
     */
    public function show(string $id)
    {
        $product = Product::query()->findOrFail($id);
        return view('admin.pages.product_images.product_image_create')->with([
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product_image = ProductImage::query()->findOrFail($id);
        return view('admin.pages.product_images.product_image_edit')->with([
            'product_image' => $product_image
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductImageRequest $request, string $id)
    {
        $product_image = ProductImage::query()->findOrFail($id);
        $params = $request->validated();
        $product_image->update($params);
        if ($request->hasFile('image')) {
            $product_image->clearMediaCollection('images');
            $product_image->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('products.images',['product'=>$params['product_id']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product_image = ProductImage::query()->findOrFail($id);
        $product_image->clearMediaCollection('images');
        $product_image->delete();
        return redirect()->route('products.images',['product'=>$product_image['product_id']]);
    }
}
