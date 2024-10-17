<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubCategoryItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class GeneralController extends Controller
{
    public function index(string $id)
    {
        $product = Product::query()->findOrFail($id);
        Paginator::useBootstrap();
        $product_images = $product->product_images()->paginate(10);
        return view('admin.pages.product_images.product_image_show', compact('product_images','product'));
    }

    public function subProduct(string $id)
    {
        $product = Product::query()->findOrFail($id);
        Paginator::useBootstrap();
        $sub_products = $product->sub_products()->paginate(10);
        return view('admin.pages.sub_products.sub_product_show', compact('sub_products','product'));
    }

    public function parentCategory(string $name) {
        $parentCategories = ParentCategory::query()->get();
        $parentcategory = ParentCategory::query()->where(['name'=>$name])->first();
        $products = $parentcategory->products()->paginate(10);
        Paginator::useBootstrap();
        return view('nordiccell.pages.parent_category_products', compact('products','parentCategories','parentcategory'));
    }

    public function category(string $name) {
        $parentCategories = ParentCategory::query()->get();
        $category = Category::query()->where(['name'=>$name])->first();
        $products = $category->products()->paginate(10);
        Paginator::useBootstrap();
        return view('nordiccell.pages.category_products', compact('products','parentCategories','category'));
    }

    public function subCategory(string $name) {
        $parentCategories = ParentCategory::query()->get();
        $subCategory = SubCategory::query()->where(['name'=>$name])->first();
        $products = $subCategory->products()->paginate(10);
        Paginator::useBootstrap();
        return view('nordiccell.pages.sub_category_products', compact('products','parentCategories','subCategory'));
    }

    public function subCategoryItem(string $name) {
        $parentCategories = ParentCategory::query()->get();
        $subCategoryItem = SubCategoryItem::query()->where(['name'=>$name])->first();
        $products = $subCategoryItem->products()->paginate(10);
        Paginator::useBootstrap();
        return view('nordiccell.pages.sub_category_item_products', compact('products','parentCategories'));
    }

    public function productDetails(int $product) {
        $parentCategories = ParentCategory::query()->get();
        $product = Product::query()->findOrFail($product);
        $product_image = $product->product_images()->first();
        return view('nordiccell.pages.product_details', compact('product','parentCategories','product_image'));
    }

    public function home() {
        $parentCategories = ParentCategory::query()->get();
        $products = Product::query()->paginate(4);
        return view('nordiccell.pages.home', compact('parentCategories','products'));
    }

    public function users()
    {
        $users = User::query()->paginate(10);
        Paginator::useBootstrap();
        return view('admin.pages.users.user', compact('users'));
    }

    public function userDestroy($user)
    {
        $user = User::query()->findOrFail($user);
        $user->delete();
        return redirect()->back();
    }

    public function userChangeStatus($id, Request $request)
    {
        $user = User::query()->findOrFail($id);
        if ($user->status === 0) {
            $user->status = 1;
            $user->save();
        } else {
            $user->status = 0;
            $user->save();
        }
        return redirect()->back();
    }
}
