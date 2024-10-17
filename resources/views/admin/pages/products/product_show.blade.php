@extends('admin.layouts.app')
@section( 'title', 'Product Show')
@section('content')
    <div class="app-container container  pt-10">
        <div class="content-header row mb-6">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-4">Products</h2>
                        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Products
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body p-10">
            <div class="d-flex flex-stack mb-5 ">
                <form action="" method="GET">
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span
                                class="path2"></span></i>
                        <input type="text" style="margin-right: 10px;" data-kt-docs-table-filter="search" name="search"
                               class="form-control form-control-solid w-250px ps-15"
                               placeholder="Search...">
                        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                            <button class="btn btn-primary btn-sm" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">

                    <a href="{{route('products.create')}}" class="btn btn-primary btn-sm">
                        <i class="ki-duotone ki-plus fs-2"></i>
                        Add
                    </a>
                </div>
            </div>
            <div id="categories_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table id="categories_datatable"
                           class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                           aria-describedby="categories_datatable_info" style="width: 1198px;">
                        <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="№: activate to sort column ascending" style="width: 25px;">№
                            </th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Title</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Description</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Definition</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Quantity</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Price</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Discount Price</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px">Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        @foreach($products as $product)
                            <tr class="even">
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{!! $product->description !!}</td>
                                <td>{!! $product->definiton !!}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->discount_price}}</td>
                                <td>
                                    <div class="text-end">
                                        <div class="btn-group">
                                            <div>
                                            <a href="{{route('products.show', ['product'=> $product->id])}}"
                                               class="btn btn-success px-4 btn-sm kt_modal_stacked_edit">
                                                <i class="bi bi-list p-0"></i>
                                            </a>
                                            </div>
                                            <div>
                                                <a href="{{route('products.images', ['product'=> $product->id])}}"
                                                   class="btn btn-success px-4 btn-sm kt_modal_stacked_edit">
                                                    <i class="bi bi-image p-0"></i>
                                                </a>
                                            </div>
                                            <div>
                                            <a href="{{route('products.edit', ['product'=> $product->id])}}"
                                               class="btn btn-success px-4 btn-sm kt_modal_stacked_edit">
                                                <i class="bi bi-pencil p-0"></i>
                                            </a>
                                            </div>
                                            <form action="{{ route('products.destroy', ['product'=> $product->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm px-4 delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="bi bi-trash p-0"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="categories_datatable_paginate">
                            @if ($products->hasPages())
                                <div class="pagination-wrapper">
                                    {{ $products->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
