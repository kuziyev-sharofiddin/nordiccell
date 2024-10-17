<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        $products = Product::query()->paginate(10);
        return view('admin.pages.products.product_show', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_categories = ParentCategory::query()->get();
        return view('admin.pages.products.product_create')->with([
            'parent_categories'=>$parent_categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $params = $request->validated();
        Product::query()->create($params);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::query()->findOrFail($id);
        $colors = Color::query()->get();
        Paginator::useBootstrap();
        $sub_products = $product->sub_products()->paginate(10);
        return view('admin.pages.sub_products.sub_product_show', compact('sub_products','product', 'colors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::query()->findOrFail($id);
        $parent_categories = ParentCategory::query()->get();
        $categories = Category::query()->get();
        $sub_categories = SubCategory::query()->get();
        $sub_category_items = SubCategory::query()->get();
        return view('admin.pages.products.product_edit')->with([
            'parent_categories'=>$parent_categories,
            'categories' => $categories,
            'sub_categories' => $sub_categories,
            'sub_category_items' => $sub_category_items,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $product = Product::query()->findOrFail($id);
        $params = $request->validated();
        $product->update($params);
        return redirect()->route('products.index', ['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::query()->findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
