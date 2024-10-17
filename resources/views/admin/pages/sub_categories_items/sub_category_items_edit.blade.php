@extends('admin.layouts.app')
@section( 'title', 'Dashboard')
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
                                    <a href="{{route('sub_category_items.index')}}">
                                        Sub Category Items
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
                  action="{{route('sub_category_items.update', ['sub_category_item' => $subCategoryItem->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Name</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="name" value="{{ $subCategoryItem->name }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
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
