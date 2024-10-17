<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategoryItemRequest;
use App\Models\SubCategory;
use App\Models\SubCategoryItem;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SubCategoryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        $subCategoryItems = SubCategoryItem::query()->paginate(10);
        return view('admin.pages.sub_categories_items.sub_category_items_show', compact('subCategoryItems'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subCategories = SubCategory::query()->get();
        return view('admin.pages.sub_categories_items.sub_category_items_create', compact('subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryItemRequest $request)
    {
        $params = $request->validated();
        SubCategoryItem::query()->create($params);
        return redirect()->route('sub_category_items.index');
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
        $subCategories = SubCategory::query()->get();
        $subCategoryItem = SubCategoryItem::query()->findOrFail($id);
        return view('admin.pages.sub_categories_items.sub_category_items_edit')->with([
            'subCategoryItem'=>$subCategoryItem,
            'sub_categories' => $subCategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryItemRequest $request, string $id)
    {
        $subCategoryItem = SubCategoryItem::query()->findOrFail($id);
        $params = $request->validated();
        $subCategoryItem->update($params);
        return redirect()->route('sub_category_items.index', ['subCategoryItem' => $subCategoryItem]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategoryItem = SubCategoryItem::query()->findOrFail($id);
        $subCategoryItem->delete();
        return redirect()->route('sub_category_items.index');
    }
}
