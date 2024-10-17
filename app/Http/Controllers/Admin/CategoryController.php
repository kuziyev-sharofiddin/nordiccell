<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        $categories = Category::query()->paginate(10);
        return view('admin.pages.categories.category_show', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_categories = ParentCategory::query()->get();
        return view('admin.pages.categories.category_create', compact('parent_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $params = $request->validated();
        Category::query()->create($params);
        return redirect()->route('categories.index');
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
        $parent_categories = ParentCategory::query()->get();
        $category = Category::query()->findOrFail($id);
        return view('admin.pages.categories.category_edit')->with([
            'category'=>$category,
            'parent_categories' => $parent_categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::query()->findOrFail($id);
        $params = $request->validated();
        $category->update($params);
        return redirect()->route('categories.index', ['category' => $category]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::query()->findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
