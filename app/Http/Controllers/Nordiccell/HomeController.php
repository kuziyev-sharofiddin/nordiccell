<?php

namespace App\Http\Controllers\Nordiccell;

use App\Http\Controllers\Controller;
use App\Models\ParentCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    public function index(){
        $parentCategories = ParentCategory::query()->get();
        return view('nordiccell.pages.home', compact('parentCategories'));
    }

    public function allProduct() {
        Paginator::useBootstrap();
        $parentCategories = ParentCategory::query()->get();
        $products = Product::query()->paginate(10);
        return view('nordiccell.pages.all_products', compact('products','parentCategories'));
    }

    public function search(Request $request)
    {
        Paginator::useBootstrap();
        $query = $request->input('query');
        $parentCategories = ParentCategory::query()->get();
        $products = Product::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orWhere('definition', 'like', '%' . $query . '%')
            ->orWhere('sterility', 'like', '%' . $query . '%')
            ->orWhere('ref_number', 'like', '%' . $query . '%')
            ->orWhere('latex_material', 'like', '%' . $query . '%')
            ->orWhere('intended_use', 'like', '%' . $query . '%')
            ->orWhere('available_in', 'like', '%' . $query . '%')
            ->paginate(10);

        return view('nordiccell.pages.all_products', compact('products','parentCategories'));
    }
}
