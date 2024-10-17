<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        $subCategories = SubCategory::query()->paginate(10);
        return view('admin.pages.sub_categories.sub_category_show', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->get();
        return view('admin.pages.sub_categories.sub_category_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryRequest $request)
    {
        $params = $request->validated();
        SubCategory::query()->create($params);
        return redirect()->route('sub_categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::query()->get();
        $subCategory = SubCategory::query()->findOrFail($id);
        return view('admin.pages.sub_categories.sub_category_edit')->with([
            'subCategory'=>$subCategory,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryRequest $request, string $id)
    {
        $subCategory = SubCategory::query()->findOrFail($id);
        $params = $request->validated();
        $subCategory->update($params);
        return redirect()->route('sub_categories.index', ['subCategory' => $subCategory]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory = SubCategory::query()->findOrFail($id);
        $subCategory->delete();
        return redirect()->route('sub_categories.index');
    }
}
