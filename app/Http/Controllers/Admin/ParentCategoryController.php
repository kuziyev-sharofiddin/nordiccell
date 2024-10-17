<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ParentCategoryRequest;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ParentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        $parentCategories = ParentCategory::query()->paginate(10);
        return view('admin.pages.parent_categories.parent_category_show', compact('parentCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.parent_categories.parent_category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParentCategoryRequest $request)
    {
        $params = $request->validated();
        ParentCategory::query()->create($params);
        return redirect()->route('parent_categories.index');
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
        $parentCategory = ParentCategory::query()->findOrFail($id);
        return view('admin.pages.parent_categories.parent_category_edit')->with([
            'parentCategory'=>$parentCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParentCategoryRequest $request, string $id)
    {
        $parentCategory = ParentCategory::query()->findOrFail($id);
        $params = $request->validated();
        $parentCategory->update($params);
        return redirect()->route('parent_categories.index', ['parentCategory' => $parentCategory]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parentCategory = ParentCategory::query()->findOrFail($id);
        $parentCategory->delete();
        return redirect()->route('parent_categories.index');
    }
}
