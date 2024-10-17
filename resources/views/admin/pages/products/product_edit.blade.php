@extends('admin.layouts.app')
@section( 'title', 'Product Edit')
@section('content')
    <div class="app-container container-lg  pt-10">
        <div class="content-header row mb-6">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-4">Add</h2>
                        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('products.index')}}">
                                        Products
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Add
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-flush p-10">
            <form id="kt_docs_formvalidation_text" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                  action="{{route('products.update', ['product' => $product->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Parent Category</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0"
                                name="sub_category_id">
                            <option value=""></option>
                            @foreach ($parent_categories as $parent_category)
                                <option value="{{ $parent_category->id }}">{{$parent_category->name}}</option>
                            @endforeach
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Category</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0"
                                name="sub_category_id">
                            <option value=""></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Sub Category</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0"
                                name="sub_category_id">
                            <option value=""></option>
                            @foreach ($sub_categories as $sub_category)
                                <option value="{{ $sub_category->id }}">{{$sub_category->name}}</option>
                            @endforeach
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Sub Category Item</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0"
                                name="sub_category_id">
                            <option value=""></option>
                            @foreach ($sub_category_items as $sub_category_item)
                                <option value="{{ $sub_category_item->id }}">{{$sub_category_item->name}}</option>
                            @endforeach
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Title</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="title" value="{{ $product->title }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Description</label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="editor2" name="description" value="{{ $product->description }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Definition</label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="editor3" name="definition" value="{{ $product->definition }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Ref Number</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="ref_number" value="{{ $product->ref_number }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Bulk</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="bulk" value="{{ $product->bulk }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Bulk Part</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="bulk_part" value="{{ $product->bulk_part }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Testing</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="testing" value="{{ $product->testing }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Latex Material</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="latex_material" value="{{ $product->latex_material }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                 <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Sterility</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="sterility" value="{{ $product->sterility }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Ce Marking</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="ce_marking" value="{{ $product->ce_marking }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Intended Use</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="intended_use" value="{{ $product->intended_use }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Available In</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="available_in" value="{{ $product->available_in }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Quantity</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="quantity" value="{{ $product->quantity }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Price</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="price" value="{{ $product->price }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Discount Price</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="discount_price" value="{{ $product->discount_price }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-3 col-7">
                        <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary btn-sm">
                            Save
                        </button>
                        <a class="btn btn-sm btn-danger" href="">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
