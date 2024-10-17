@extends('admin.layouts.app')
@section( 'title', 'Product Image Create')
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
                                    <a href="{{route('product_images.index')}}">
                                        Product Images
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
                  action="{{route('product_images.store')}}" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="required form-label">Photo</div>
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                         data-kt-image-input="true">
                        <div
                            class="image-input-wrapper w-200px h-175px border-secondary border d-flex align-items-center flex-column justify-content-center">
                        </div>
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                               data-kt-image-input-action="change" data-bs-toggle="tooltip" data-kt-initialized="1">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="file" name="image">
                        </label>

                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                              data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                              data-bs-original-title="Cancel avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                              data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                              data-bs-original-title="Remove avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
                        </span>
                    </div>
                </div>
                <input type="hidden" name="product_id" value="{{$product->id}}"
                       class="form-control form-control-solid mb-3 mb-lg-0">
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
